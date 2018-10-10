var mysql = require('mysql');

var con = mysql.createConnection({
    host: "localhost",
    user: "root",
    password: "",
    database: "dvwa"
});

con.connect(function (err) {
    con.query("SELECT user_id, first_name FROM users", function (err, result, fields) {
        if (err) throw err;
        console.log(result);
        console.log(result[2].first_name);
        console.log(fields);
        //console.log(result.affectedRows);
    });
});
