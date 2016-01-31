#include <RCSwitch.h>

#define RelaisHaut 6
#define RelaisBas 7

#define BoutonHaut 3
#define BoutonBas 4

#define RelaisHautOn  digitalWrite (RelaisHaut, LOW)
#define RelaisHautOff digitalWrite (RelaisHaut, HIGH)

#define RelaisBasOn  digitalWrite (RelaisBas, LOW)
#define RelaisBasOff digitalWrite (RelaisBas, HIGH)

#define RelaisHautToggle digitalWrite(RelaisHaut, !digitalRead(RelaisHaut))
#define RelaisBasToggle digitalWrite(RelaisBas, !digitalRead(RelaisBas))

#define BoutonHautOn digitalRead(BoutonHaut) == 0
#define BoutonBasOn digitalRead(BoutonBas) == 0

#define FreqMonte 4232320
#define FreqStop 4232322
#define FreqDescente 4232324


#define TempsMontDesc 35

RCSwitch mySwitch = RCSwitch();

long temps;
long duree;
long value = 0;

long Reception(){
    value = 0;
    if (mySwitch.available()) {
      value = mySwitch.getReceivedValue();
      mySwitch.resetAvailable();
  }
  return value;
}

void setup() {
	Serial.begin(9600);
	
	pinMode (RelaisHaut, OUTPUT); 
	pinMode (RelaisBas, OUTPUT);
	pinMode (BoutonHaut, INPUT);
	pinMode (BoutonBas, INPUT);
	RelaisHautOff;
	RelaisBasOff;
	
	mySwitch.enableReceive(0);  // Receiver on inerrupt 0 => that is pin #2
	
	//on initialise le temps
    temps = millis();
}

void loop() {
    
	value = Reception();
	//Serial.print(value);
	if (value == FreqMonte){
		temps = millis();
		value = 0;
		while (value != FreqStop && duree < TempsMontDesc){
			RelaisHautOn;
			RelaisBasOff;
			delay(10);
			value = Reception();
			duree = (millis() - temps) / 1000;
                        Serial.println( value );
		}
		RelaisHautOff;
                duree = 0;
	}
	
	//value = Reception();
	
	if (value == FreqDescente){
		temps = millis();
		value = 0;
		while (value != FreqStop && duree < TempsMontDesc){
			RelaisBasOn;
			RelaisHautOff;
			delay(10);
			value = Reception();
			duree = (millis() - temps) / 1000;
                        Serial.println( value );
		}
		RelaisBasOff;
                duree = 0;
	}

        if (BoutonHautOn && !BoutonBasOn){
            delay(10);
            RelaisBasOff;
	    RelaisHautOn;
        }
        if (!BoutonHautOn && BoutonBasOn){
            delay(10);
            RelaisBasOn;
	    RelaisHautOff;
        }
         if (!BoutonHautOn && !BoutonBasOn){
            delay(10);
            RelaisBasOff;
	    RelaisHautOff;
        }
}
	
	
	
	
	
	
	
	
