/*
  Mega multple serial test

  Receives from the main serial port, sends to the others.
  Receives from serial port 1, sends to the main serial (Serial 0).

  This example works only on the Arduino Mega

  The circuit:
   Any serial device attached to Serial port 1
   Serial monitor open on Serial port 0:

  created 30 Dec. 2008
  modified 20 May 2012
  by Tom Igoe & Jed Roach

  This example code is in the public domain.
 
*/

const unsigned int WIFI_RESET = 41;

void setup() {
  // initialize both serial ports:
  Serial.begin(9600);
  Serial2.begin(115200);

  //Serial2.println("AT+RST"); // Rest wifi by software
  //Wifi hardware reset.
#if 0  //hw reset
  pinMode(WIFI_RESET, OUTPUT);
  digitalWrite(WIFI_RESET, LOW);
  delay(500);
  digitalWrite(WIFI_RESET, HIGH);
#endif
#if 0 // check if reset done successfully
  char str[] = "ready";
  if (!Serial2.find(str)) {
    Serial.println("WiFi Failed.");
  } else {
    Serial.println("WiFi Up.");
  }
  //delay(5000);
  waitForIp();
  Serial2.println("AT+CIFSR");// print IP address
  delay(100);
  Serial2.println("AT+CIPSTATUS");
  //setupWifiLink();
  //Serial2.println("Am I up?");

#endif
  Serial.println("Setup Done.");
}

void loop() {
  // read from port 1, send to port 0:
  if (Serial2.available()) {
    int inByte = Serial2.read();
    Serial.write(inByte);
  }

  // read from port 0, send to port 1:
  if (Serial.available()) {
    int inByte = Serial.read();
    Serial2.write(inByte);
  }

 
}

void setupWifiLink() {

  Serial2.println("AT+CIPMODE=1");
  Serial2.println("AT+CIPCLOSE=0");
  while (1)
  {
    Serial2.println("AT+CIPSTART=\"TCP\",\"192.168.4.100\",4444");

    if (Serial2.find("Link")) {
      break;
    }
    delay(250);
  }

  Serial2.println("AT+CIPSEND");
  Serial2.find(">");
}

void waitForIp() {
  delay(5000);
  while (1)
  {

    Serial2.println("AT+CIFSR");// print IP address
    delay(100);
    Serial2.println("AT+CIPSTATUS");

    if (Serial2.find("STATUS:2")) {
      break;
    }
    delay(5000);
  }
}
