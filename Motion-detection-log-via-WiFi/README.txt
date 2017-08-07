Following are instructions on testing your wifi connection with only ESP8266 and Arduino Due connnected with test-wifi.ino running on arduino.

/*The command lists was used from: http://rancidbacon.com/files/kiwicon8/ESP8266_WiFi_Module_Quick_Start_Guide_v_1.0.4.pdf
for further reference check: http://www.pridopia.co.uk/pi-doc/ESP8266ATCommandsSet.pdf
*/


ßSetup Done.
//checking if it's up 
AT


OK
//checking for wifi networks in vicinity
AT+CWLAP


ERROR //error because it was on CWMODE=2 

AT+CWMODE?

+CWMODE:2

OK
AT+CWMODE=3//we went to CWMODE=3. check CWMODE datasheet in folder 


OK

AT+RST//reset


OK

 ets Jan  8 2013,rst cause:1, boot mode:(3,6)

load 0x40100000, len 1396, room 16 
tail 4
chksum 0x89
load 0x3ffe8000, len 776, room 4 
tail 4
chksum 0xe8
load 0x3ffe8308, len 540, room 4 
tail 8
chksum 0xc0
csum 0xc0

2nd boot version : 1.4(b1)
  SPI Speed      : HdIaa2ju
rlŽ?n÷
Ai-Thinker Technology Co.,Ltd.

ready

AT+CWLAP //checking for wifi networks in vicinity again

+CWLAP:(3,"enflor",-50,"00:1a:70:9a:fe:3c",11,-51)

OK
AT+CWJAP="enflor","pkp&62TF"//WIFI FOUND.

WIFI CONNECTED
WIFI GOT IP

OK

//command to find version
AT+GMR

AT version:0.40.0.0(Aug  8 2015 14:45:58)
SDK version:1.3.0
Ai-Thinker Technology Co.,Ltd.
Build:1.3.0.2 Sep 11 2015 11:48:04
OK
//command to find IP and MACaddresses associated
AT+CIFSR

+CIFSR:APIP,"192.168.4.1"
+CIFSR:APMAC,"5e:cf:7f:10:ca:41"
+CIFSR:STAIP,"192.168.1.111"
+CIFSR:STAMAC,"5c:cf:7f:10:ca:41"

OK
AT+CIPMUX=1


OK
//to connect to google: please see commands are case sensitive

AT+CIPSTART=4,"TCP","google.com",80

4,CONNECT

OK
//sending 18 bytes of data
AT+CIPSEND=4,18


OK
> 
Recv 18 bytes

SEND OK
 GET / HTTP/1.0

+IPD,4,907:HTTP/1.0 302 Found
Location: http://www.google.com.pk/?gws_rd=cr&ei=jJN-VpOKFJKWuAT09bDIBA
Cache-Control: private
Content-Type: text/html; charset=UTF-8
P3P: CP="This is not a P3P policy! See https://www.google.com/support/accounts/answer/151657?hl=en for more in:c:vn:- cOE-=bNLGBvUHryw ,6MdlOLa=p"h"2LO T A:eseJA.HS+IDP,4,530

//recieved 907 bytes
//system is talking to internet

AT+CIPSTART="TCP","184.106.153.149",80
AT+CIPSEND=57
GET /update?key=9T3K0PRSXRRF34RI&field1=123 HTTP/1.0
