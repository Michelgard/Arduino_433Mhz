
#include <RCSwitch.h>
#include <EtherCard.h>

static byte mymac[] = { 0x74,0x69,0x69,0x2D,0x30,0x31 };
static byte myip[] = { 192,168,0,32 };
static byte gwip[] = { 192,168,0,254 };

byte Ethernet::buffer[700]; // tcp/ip send and receive buffer

RCSwitch rf_cmd = RCSwitch(); // initialisation
const char rf_mode = 24; // mode 32 bits
const char rf_pin = 10; // l'emetteur est connecte au pin 10 de l'arduino

// Small web page to return so the request is completed
const char page[] PROGMEM  =
"HTTP/1.0 503 Service Unavailable\r\n"
"Content-Type: text/html\r\n"
"Retry-After: 600\r\n"
"\r\n"
"<html>"
  "<head><title>"
    "Arduino 192.168.0.32"
  "</title></head>"
  "<body>"
    "<h3>Arduino 192.168.0.32</h3>"
  "</body>"
"</html>"
;

void setup(){
  
  ether.begin(sizeof Ethernet::buffer, mymac);
  ether.staticSetup(myip, gwip);
  ether.hisport = 85;
  
  rf_cmd.enableTransmit(rf_pin); // emetteur sur la broche 10
  rf_cmd.setProtocol(1); // par defaut le protocole utilisé est le 1, mais les commandes OTIO utilisent le 2
  rf_cmd.setRepeatTransmit(15); // on repete la transmission 15 fois pour etre sur qu'elle arrive bien
}

void rf_send(unsigned long rf_code) {
   rf_cmd.send(rf_code, rf_mode);
}

void loop(){
  
  word len = ether.packetReceive();
  word pos = ether.packetLoop(len);

// IF LED1=ON turn it ON
  if(strstr((char *)Ethernet::buffer + pos, "GET /?LED1=ON") != 0) {
      rf_send(1381719);
    }

// IF LED1=OFF turn it OFF  
    if(strstr((char *)Ethernet::buffer + pos, "GET /?LED1=OFF") != 0) {
      rf_send(1381716);
    }
    
// IF LED2=ON turn it ON
  if(strstr((char *)Ethernet::buffer + pos, "GET /?LED2=ON") != 0) {
      rf_send(1394007);
    }

// IF LED2=OFF turn it OFF  
    if(strstr((char *)Ethernet::buffer + pos, "GET /?LED2=OFF") != 0) {
      rf_send(1394004);
    }

// IF LED3=ON turn it ON
  if(strstr((char *)Ethernet::buffer + pos, "GET /?LED3=ON") != 0) {
       rf_send(1397079);
    }

// IF LED3=OFF turn it OFF  
    if(strstr((char *)Ethernet::buffer + pos, "GET /?LED3=OFF") != 0) {
       rf_send(1397076);
    }
    
    // IF LEDA=ON turn it ON
  if(strstr((char *)Ethernet::buffer + pos, "GET /?LEDA=ON") != 0) {
       rf_send(4028056);
    }

// IF LEDA=OFF turn it OFF  
    if(strstr((char *)Ethernet::buffer + pos, "GET /?LEDA=OFF") != 0) {
       rf_send(4028056);
    }

//Return a page so the request is completed.

   memcpy_P(ether.tcpOffset(), page, sizeof page);
   ether.httpServerReply(sizeof page - 1);
  
}
