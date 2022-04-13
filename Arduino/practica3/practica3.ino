int sensorPin = A5;  // Declara la variable recibirá el valor obtenido en el DIGITAL INPUT 8
int ledpin = 13;     // DECLARE variable que llevada de vuelta en el pin 13
int sensorValue = 0; // variable para leer el estado del pulsador
String color = "";

void setup()
{

  // Declaración de una variable relacionada con la clavija 13 SALIDA DIGITAL COMO
  pinMode(ledpin, OUTPUT);
  Serial.begin(9600);
}

void loop()
{
  sensorValue = analogRead(sensorPin);
  digitalWrite(ledpin, HIGH);
  delay(sensorValue);
  digitalWrite(ledpin, LOW);
  delay(sensorValue);
  // Serial.println(sensorValue, DEC);
  Serial.println(color);

  if (sensorValue > 170 && sensorValue < 180)
  {
    color = "Azul";
  }
  else if (sensorValue > 140 && sensorValue < 150)
  {
    color = "Verde";
  }
  else if (sensorValue > 130 && sensorValue < 140)
  {
    color = "Rojo";
  }
  else if (sensorValue > 94 && sensorValue < 100)
  {
    color = "Morado";
  }
}