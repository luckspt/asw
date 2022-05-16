const mysql = require('mysql');
// antes $ npm install mysql
const con = mysql.createConnection({
    host: "appserver-01.alunos.di.fc.ul.pt",
    user: "bla",
    password: "bla",
    database: "bla"
});

console.log('LUCAS PINTO disponibiliza a sua BD mySQL via Node!');
con.connect(function (err) {
    if (err) throw err;
    //Select all voluntario and return the result object:
    con.query("SELECT * FROM Voluntario", function (err, result, fields) {
        if (err) throw err;
        console.log(result);
    });
});