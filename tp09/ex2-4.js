const fs = require("fs");
const port = 4021;

const http = require('http');
http.createServer(
    function (req, res) {
        const data = fs.readFileSync('56926.html');
        res.writeHead(200, { 'Content-Type': 'text/html' });
        res.write(data.toString());
    }).listen(port);

console.log('Ver o servidor Node do LUCAS espaço PINTO em: http://appserver.alunos.di.fc.ul.pt:' + port);