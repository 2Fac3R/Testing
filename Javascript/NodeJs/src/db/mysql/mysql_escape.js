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
  let name = 'Gustavo';
  let sql = 'SELECT * FROM users WHERE name = ' + mysql.escape(name);

  con.query(sql, (err, result) => {
    if (err) throw err;
    console.log(result);
  });
});
