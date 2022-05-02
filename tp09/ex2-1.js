const port = 4021;
 
const http = require('http');

http.createServer(
	function(req, res) {
		res.writeHead(200, {'Content-Type': 'text/plain; charset=utf-8'});
		res.end("Aqui temos o 1º servidor Node do LUCAS espaço PINTO!");
}).listen(port);
console.log('Ver o servidor Node do LUCAS espaço PINTO em: http://appserver.alunos.di.fc.ul.pt:'+ port);