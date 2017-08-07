#include <OneWire.h> 
#include <DallasTemperature.h>
#define high 13
#define normal 12
#define cold 11
// Data wire is plugged into pin 2 on the Arduino 
#define ONE_WIRE_BUS 2 


// Setup a oneWire instance to communicate with any OneWire devices  
 
OneWire oneWire(ONE_WIRE_BUS); 


// Pass our oneWire reference to Dallas Temperature. 
DallasTemperature sensors(&oneWire);
void compare(float temp);

void setup(void) 
{ 
 // start serial port 
 Serial.begin(9600); 
 pinMode(high, OUTPUT);
  pinMode(normal, OUTPUT);
   pinMode(cold, OUTPUT);   
 // Start up the library 
 sensors.begin(); 
} 
void loop(void) 
{ 

 +
 // call sensors.requestTemperatures() to issue a global temperature 
 // request to all devices on the bus 

 Serial.print(" Requesting temperatures..."); 
 sensors.requestTemperatures(); // Send the command to get temperature readings 
 Serial.println("DONE"); 

/********************************************************************/
float temp = sensors.getTempCByIndex(0); // Why "byIndex"?  
   Serial.print("Temperature is:");
   Serial.println(temp);
  
   // You can attach more than one DS18B20 on the same bus.  
   // 0 refers to the first IC on the wire 
  compare(temp);
   
} 

void compare(float temp)
{
  if( temp <= 22)
  {
    digitalWrite(normal, LOW);
    digitalWrite(high, LOW);
     digitalWrite(cold, HIGH);
     Serial.println("Temperature LOW");
     delay(50);
  }
  else if( temp > 22 && temp < 23 ) 
  {
   digitalWrite(cold, LOW);
    digitalWrite(high, LOW);
     digitalWrite(normal, HIGH);
     Serial.println("Temperature NORMAL");
     delay(50);
  }
  else if( temp >= 23)
  {
     digitalWrite(normal, LOW);
    digitalWrite(cold, LOW);
     digitalWrite(high, HIGH);
     Serial.println("Temperature HIGH");
     delay(50);
  }
  
}
