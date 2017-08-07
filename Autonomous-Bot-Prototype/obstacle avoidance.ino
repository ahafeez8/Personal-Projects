#include <NewPing.h>  //ultrasonic sensor library 

//defined pins for the arduino

//car pins
#define right 10
#define left 11
#define forward 13
#define back 12

//sensor pins
#define TRIGGER_PIN 6
#define ECHO_PIN 7
#define MAX_DISTANCE 400 //max distance the sensor can detect is 400 cm

//functions of the car
void mov_forward();
void backward();
void forward_right();
void backward_right();
void forward_left();
void backward_left();
void stop_car();

NewPing sonar(TRIGGER_PIN, ECHO_PIN, MAX_DISTANCE);
void setup()
{
  Serial.begin(9600);//baud rate set to be 9600 bps
  
  pinMode(right, OUTPUT);
  pinMode(forward,OUTPUT);
  pinMode(left, OUTPUT);
  pinMode(back,OUTPUT);
}

void loop() {
  
stop_car();  //default condition. car does not move
delay(500);

unsigned long now = millis (); // Returns the number of milliseconds since the Arduino board began running the current program. 
while(Serial.available() > 0 && millis () - now < 1000)  //after every 2s it checks if serial is available
  {
    char c=Serial.read();
    /*when the char '6' sent from pi, is received
    it means the car is moving in the left lane
    if 5 is recieved the car is in the right lane*/
    if (c == 6) //if in left lane
    {
      if (sonar.ping_cm() > 60 || sonar.ping_cm()==0)  //and the distance from obstacle is 40
    {
      
      Serial.print("After detecting line distance from ostacle  ");
      Serial.println(sonar.ping_cm());
    
    
      mov_forward();  //car moved forward for 
      delay(250);  //set time
      stop_car();
    }
      else  if (sonar.ping_cm() <=60) //if the distance is less is 40
    {
       Serial.print("After detecting ostacle ");
      Serial.println(sonar.ping_cm());
      stop_car();
      delay(500);
      backward(); //car moves forward right
      delay(200);
      stop_car();
      forward_right();
      delay(1000);
      stop_car();
      delay(300);
      forward_left();
      delay(700);
      stop_car();
      delay(850);
    }
    }
    
   if (c == 5) //if right lane is detected
  {
   if (sonar.ping_cm() > 60 || sonar.ping_cm()==0)  //and the distance from obstacle is 40
    {
      
      Serial.print("After detecting line distance from ostacle  ");
      Serial.println(sonar.ping_cm());
    
    
      mov_forward();  //car moved forward for 
      delay(250);  //set time
      stop_car();
    }
        else  if (sonar.ping_cm() <=60) //if the distance is less is 40
    {
       Serial.print("After detecting ostacle ");
      Serial.println(sonar.ping_cm());
      stop_car();
      delay(500);
      backward(); //car moves forward right
      delay(200);
      stop_car();
      delay(300);
      forward_left();
      delay(800);
      stop_car();
      delay(300);
      forward_right();
      delay(700);
      stop_car();
      delay(850);
    }
  }
}
}

//function definitons
/* Note that the car works on active low,
when one signal is low and the other high, only then it is moved*/
void mov_forward()
{
digitalWrite(forward,LOW);
}

void backward()
{
digitalWrite(back,LOW);
}

void forward_right()
{
digitalWrite(forward,LOW);
digitalWrite(right,LOW);
}

void backward_right()
{
 digitalWrite(back,LOW);
digitalWrite(right,LOW);
}

void forward_left()
{
digitalWrite(forward,LOW);
digitalWrite(left,LOW);
}
void backward_left(){
  digitalWrite(back,LOW);
  digitalWrite(left,LOW);
  }
void stop_car()
{
digitalWrite(forward,HIGH);
digitalWrite(right, HIGH);
digitalWrite(back, HIGH);
digitalWrite(left, HIGH);

}
