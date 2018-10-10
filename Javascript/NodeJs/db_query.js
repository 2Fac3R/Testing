var mysql = require('mysql');

var con = mysql.createConnection({
    host: "localhost",
    user: "root",
    password: ""
});

con.connect(function (err) {
    console.log("Connected!");
    con.query("CREATE DATABASE mydb", function (err, result) {
        console.log("Database created");
    });
});
