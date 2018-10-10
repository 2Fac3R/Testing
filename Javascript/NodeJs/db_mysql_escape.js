var mysql = require('mysql');

var con = mysql.createConnection({
    host: "localhost",
    user: "root",
    password: "",
    database: "dvwa"
});

con.connect(function (err) {
    if (err) throw err;
    var firstName = 'Hack';
    var sql = 'SELECT * FROM users WHERE first_name = ' + mysql.escape(firstName);

    con.query(sql, function (err, result) {
        if (err) throw err;
        console.log(result);
    });
});
