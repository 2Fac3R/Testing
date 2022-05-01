const mysql = require('mysql');
require('dotenv').config()

const con = mysql.createConnection({
  host: process.env.DB_HOST,
  user: process.env.DB_USERNAME,
  password: process.env.DB_PASSWORD,
  database: process.env.DB_DATABASE
});

con.connect((err) => {
  if (err) throw err;
  let id = 1;
  let name = 'Gustavo';
  let sql = 'SELECT * FROM users WHERE name = ? AND id = ?';

  con.query(sql, [name, id], (err, result) => {
    if (err) throw err;
    console.log(result);
  });
});
