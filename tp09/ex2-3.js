const fs = require("fs");
const port = 4021;

const http = require('http');
http.createServer(
    function (req, res) {
        const person = { unome: "PINTO", pnome: "LUCAS", loc: "Lisboa" };
        let text = "";
        const data = fs.readFileSync('56926.txt');

        for (const x in person) 
            text += person[x] + ", ";

        res.writeHead(200, { 'Content-Type': 'text/plain; charset=utf-8' });
        res.write("Servidor pessoal\n");
        res.write(text + "\n\n")
        res.end(data.toString());

    }).listen(port);
console.log('Ver o servidor Node do LUCAS espaço PINTO em: http://appserver.alunos.di.fc.ul.pt:' + port);