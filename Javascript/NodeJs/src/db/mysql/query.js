require('dotenv').config()

const mysql = require('mysql');

const con = mysql.createConnection({
  host: process.env.DB_HOST,
  user: process.env.DB_USERNAME,
  password: process.env.DB_PASSWORD
});

con.connect((err) => {
  if (err) throw err;
  con.query("CREATE DATABASE mydb", (err, result) => {
    if (err) throw err;
    console.log(result);
  });
});
