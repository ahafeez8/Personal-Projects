#include "opencv2/highgui/highgui.hpp" 
#include "opencv2/imgproc/imgproc.hpp"
#include <fstream>
#include <iostream>
#include <math.h>
#include <stdlib.h>
#include <stdio.h>
#include <unistd.h>
#include <fcntl.h>
#include <termios.h>
#include <string.h>
//write this in terminal to build it in Raspberry Pi 
/*g++ -o kalman kalman.cpp -lopencv_imgproc -lopencv_highgui -lopencv_core -lopencv_videoio*/

using namespace cv;
using namespace std;
/*setting a range for canny */
int lowThreshold = 150; //lower threshold value for canny
int const max_lowThreshold = 500; //max low threshhold for canny

class myline{//class to compare overlapping lines
public:

	float  theta; //polar coordinate theta for the line
	myline(){ theta = 0; } //initialize it with 0
	void setpts(float t){//set value of theta
		theta = t;
	}
	bool comparel(myline l2)
	{
		if (l2.theta > (this->theta - 0.18) && l2.theta < (this->theta + 0.18))//+- 10 degrees of theta
			return false; //overlapping lines detected
		else
			return true;
	}
};
int main(int argc, char** argv)
{
	/*initialize variables*/
	unsigned char c1 = 6, c2 = 5; //control signal 6 for left lane, 5 for right lane
	Mat src; //matrix for video
	int frame_rate = 30; //frame rate of video 
	double min_ri = 2.5, min_lef = 0.8, max_ri = 0.5, max_lef = 2.8; //range of theta for lanes
	
	/*Termios library used for serial communication between Pi and Arduino*/
	struct termios tio;
	struct termios stdio;
	int tty_fd;
	fd_set rdset;

	printf("Please start with %s /dev/ttyS1 (for example)\n", argv[0]);
	memset(&stdio, 0, sizeof(stdio));
	stdio.c_iflag = 0;
	stdio.c_oflag = 0;
	stdio.c_cflag = 0;
	stdio.c_lflag = 0;
	stdio.c_cc[VMIN] = 1;
	stdio.c_cc[VTIME] = 0;
	tcsetattr(STDOUT_FILENO, TCSANOW, &stdio);
	tcsetattr(STDOUT_FILENO, TCSAFLUSH, &stdio);
	fcntl(STDIN_FILENO, F_SETFL, O_NONBLOCK);       // make the reads non-blocking


	memset(&tio, 0, sizeof(tio));
	tio.c_iflag = 0;
	tio.c_oflag = 0;
	tio.c_cflag = CS8 | CREAD | CLOCAL;           // 8n1, see termios.h for more information
	tio.c_lflag = 0;
	tio.c_cc[VMIN] = 1;
	tio.c_cc[VTIME] = 5;

	tty_fd = open("/dev/ttyUSB0", O_RDWR | O_NONBLOCK);
	cfsetospeed(&tio, B9600);            // Set 115200 baudrate
	cfsetispeed(&tio, B9600);            // 115200 baud
	sleep(2); //resetting arduino

	tcsetattr(tty_fd, TCSANOW, &tio);

	cv::VideoCapture stream1(0);
	if (!stream1.isOpened()) {
		std::cerr << "cannot open camera" << std::endl;
		return -1;
	}
	/*adjust resolution with these functions*/
	stream1.set(CV_CAP_PROP_FRAME_WIDTH, 320); //Ln 81,82: adjust video resolution
	stream1.set(CV_CAP_PROP_FRAME_HEIGHT, 240);
	
	while (true) {
		stream1 >> src; //video streaming
		Mat dst, cdst; 
		Canny(src, dst, lowThreshold, max_lowThreshold, 3); //canny performs edge detection on images and loads the edges
		cvtColor(dst, cdst, CV_GRAY2BGR); //convert grayscaled image back to colored for hough transform
		vector<Vec2f> lines; //2D vector for hough lines
		HoughLines(dst, lines, 1, CV_PI / 180, 100, 0, 0); //hough transform outputs lines

		myline *l1 = new myline[lines.size()]; //array of myline objects initialized to grow it dynamically according to lines detected

		for (size_t i = 0; i < lines.size(); i++)
		{
			float rho = lines[i][0], theta = lines[i][1]; //load attributes of line into rho and theta (polar coords)
			Point pt1, pt2; //starting and ending point of a line
			/*following instructions performs mathematical operations to convert polar coords to cartesian */
			double a = cos(theta), b = sin(theta);
			double x0 = a*rho, y0 = b*rho;
			pt1.x = cvRound(x0 + 1000 * (-b));//pt1 is starting point
			pt1.y = cvRound(y0 + 1000 * (a));
			pt2.x = cvRound(x0 - 1000 * (-b));//pt2 is ending point
			pt2.y = cvRound(y0 - 1000 * (a));
			l1->setpts(theta); //set theta value for myline l
			if (theta > min_lef && theta < max_lef) //if left lane is detected
			{ // set angle condition according to lane's orientation
				if (i > 0) //checking for overlapping is only possible if more than one line is detected
				{
					if (!l1->comparel(l1[i - 1])) //commpare for overlapping lines 
					{

						write(tty_fd, &c1, 1);//if condition true, send a signal to arduino
						sleep(2);
						line(cdst, pt1, pt2, Scalar(0, 0, 255), 1, CV_AA); //draw line on the hough window
						cout << pt1.x << "," << pt1.y << "," << pt2.x << "," << pt2.y << "," << theta << endl; //displays point detected
					}
				}
			}
			else if (theta > min_ri && theta < max_ri)//if right lane is detected
			{
				if (i > 0)
				{
					if (!l1->comparel(l1[i - 1]))
					{
						write(tty_fd, &c2, 1);
						sleep(2);
						line(cdst, pt1, pt2, Scalar(0, 0, 255), 1, CV_AA);
						cout << pt1.x << "," << pt1.y << "," << pt2.x << "," << pt2.y << "," << theta << endl;
					}
				}
			}
		}
		imshow("source", src); //show original video
		imshow("detected lines", cdst); //show video with canny edges and hough lines
		createTrackbar("Min Threshold:", "detected lines", &lowThreshold, max_lowThreshold, 0); //trackbar to set threshhold within range
		//waitKey(0);
		if (cv::waitKey(frame_rate) >= 0) //can increase frame rate 
			break;
	}
	close(tty_fd); //close connection
	return 0;
}