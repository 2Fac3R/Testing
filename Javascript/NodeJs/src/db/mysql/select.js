const mysql = require('mysql');
require('dotenv').config()

const con = mysql.createConnection({
  host: process.env.DB_HOST,
  user: process.env.DB_USERNAME,
  password: process.env.DB_PASSWORD,
  database: process.env.DB_DATABASE
});

con.connect((err) =>{
  if (err) throw err;
  con.query("SELECT * FROM users", (err, result, fields) => {
    if (err) throw err;
    console.log(result);
  });
});
