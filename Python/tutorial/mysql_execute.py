import mysql.connector
import json 
 
dbname = 'information_schema'
dbuser = 'root'
dbpass = ''
dbhost = 'localhost' 

dbconn=mysql.connector.connect( 
  database=dbname, user=dbuser, password=dbpass, host=dbhost) 
 
query = 'select * from TABLE'
 
with dbconn.cursor(dbconn.cursors.DictCursor) as cursor: 
  cursor.execute(query) 
  data = cursor.fetchall() 
 
print (json.dumps(data,indent=4)) 