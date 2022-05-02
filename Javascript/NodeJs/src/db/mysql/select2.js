require('dotenv').config()

const mysql = require('mysql');

const con = mysql.createConnection({
  host: process.env.DB_HOST,
  user: process.env.DB_USERNAME,
  password: process.env.DB_PASSWORD,
  database: process.env.DB_DATABASE
});

con.connect((err) => {
  if (err) throw err;
  let sql = "SELECT id, name FROM users";

  con.query(sql, (err, result, fields) => {
    if (err) throw err;
    console.log(result);
    console.log(result[0].name);
    console.log(fields);
  });
});
