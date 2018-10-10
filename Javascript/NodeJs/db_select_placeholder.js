var mysql = require('mysql');

var con = mysql.createConnection({
    host: "localhost",
    user: "root",
    password: "",
    database: "dvwa"
});

con.connect(function (err) {
    if (err) throw err;
    var userId = 3;
    var firstName = 'Hack';
    var sql = 'SELECT * FROM users WHERE first_name = ? AND user_id = ?';

    con.query(sql, [firstName, userId], function (err, result) {
        if (err) throw err;
        console.log(result);
    });
});
