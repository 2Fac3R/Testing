import mysql.connector

mydb = mysql.connector.connect(
    host = "localhost",
    user = "root",
    passwd = ""
)

mycursor = mydb.cursor()

mycursor.execute("CREATE DATABASE myDatabase")

mycursor.execute("SHOW DATABASES")

for x in mycursor:
  print(x)