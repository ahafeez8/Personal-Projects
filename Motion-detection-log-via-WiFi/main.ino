/*
  Motion sensor enabled to receive GET requests over WiFi.

  Receives from the main serial port, sends to the others.
  Receives from serial port 2, sends to the main serial (Serial 0).

  This program is written for Arduino Due, ESP8266 and PIR human motion detector. 

  The circuit:
    PIR sensor takes an input of 5V from Arduino, outputs a 3V signal back to arduino AND to LED
    ESP8266 takes an input of 3.3V from Arduino and outputs at the TX2 and RX2 pins of the Arduino
    The breadboard mini is used as an intermediatry for wiring between the main modules. 

  The purpose: 
    To be installed in high security system e.g. a bank locker, where a security manager is able to 
    receive on the way alerts if connected via wifi, for any possible commodtion around the sensor. 
    
  Created 26 Dec. 2015

 

*/
int PIRpin = 9; //pin of OUT of PIR connected to arduino 
int calibTime=5; //Calibration time loop constant
int LEDpin=13;//LED of arduino 
int delayTime=15; //15secs delay from Thingspeak in updating
//const unsigned int WIFI_RESET = 41;

void setup() {
  // initialize both serial ports:
  Serial.begin(9600);
  Serial2.begin(115200);
  //initialize PIR and LED for blink
  pinMode(PIRpin, INPUT); 
  pinMode(LEDpin, OUTPUT);
  
  Serial2.println("AT+RST"); // Rest wifi by software


//give the sensor some time to calibrate
  Serial.print("Calibrating sensor, Please wait ");
    for(int i = 1; i < calibTime; i++){//print while the sensor calibrates
      digitalWrite(LEDpin, HIGH);
      delay(500);
       digitalWrite(LEDpin, LOW);
      delay(500);
      }
    Serial.println("Calibration Done");//When calibrated successfully 
    Serial.println("SENSOR ACTIVE");
    delay(50);
   // read from port 1, send to port 0:
  //verify if reset correctly
  
  waitForIp();
  Serial.println("IP obtained");
  Serial.println("Setup Done.");
}

void loop() {

    //Read motion from PIR 
    if(digitalRead(PIRpin) == HIGH){
    setupWifiLink();
    //Make Led at pin13 to blink while the Thingspeak has it's 15secs delay
    for(int i =0; i < delayTime; i++)
    {
      digitalWrite(LEDpin,HIGH);
      delay(500);
      digitalWrite(LEDpin, LOW);
      delay(500);
      }
    }
}

void setupWifiLink() {


  {
    Serial2.println("AT+CIPSTART=\"TCP\",\"184.106.153.149\",80");

    if (Serial2.find("CONNECT")) {
      Serial.println( "Connected" );
    } 
    else {
      Serial.println("Error: Could not make a connection");
      trap();
    }
    delay(250);
  }

  String updateCmd = "GET /update?key=9T3K0PRSXRRF34RI&field1=123 HTTP/1.0";
  Serial2.println("AT+CIPSEND=57");//53 length of the GET req and 4 of 2 new lines 
  if (!Serial2.find(">")) {
    Serial.println("Error: Could not send request");
    trap();
  }
  else{
  Serial2.println(updateCmd);
  Serial2.println();
  Serial2.println();
  }
  if ( Serial2.find("OK") )
  {
    Serial.println( "RECEIVED: OK" );
  } else {
    Serial.println("Error in receiving");
    trap();
  }

  Serial2.println( "AT+CIPCLOSE" );
}

void waitForIp() {
  delay(1000
    delay(1000);
  }
}
//indicates irrecoverable error
void trap(){
    // read from port 1, send to port 0:
  if (Serial2.available()) {
    int inByte = Serial2.read();
    Serial.write(inByte);
  }
  for(;;)
  {
     digitalWrite(LEDpin,HIGH);
      delay(100);
      digitalWrite(LEDpin, LOW);
      delay(100);
    }
  }
