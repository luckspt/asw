const fs = require("fs");

fs.readFile('56926.txt', function (err, data) {
    if (err) return console.error(err);
    console.log(data.toString());
});

console.log("O programa do LUCAS espaço PINTO acaba aqui!");