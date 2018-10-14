# Its doesnt work yet
import mysql.connector

mydb = mysql.connector.connect(
  host = "localhost",
  user = "root",
  passwd = "",
  database = "dvwa"
)

mycursor = mydb.cursor()

sql = "SELECT %s FROM users WHERE user_id = %i; ";
val = ("user", "1")
mycursor.execute(sql, val)

mydb.commit()

print(mycursor.rowcount, "record inserted.")