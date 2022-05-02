const express = require('express');
const fs = require('fs');

const port = 4021;
const app = express();

// serve public folder
app.use('/public', express.static('public'));

app.get('/', function (req, res) {
    res.send('A app do LUCAS espaço PINTO!');
});

app.get('/meunome/', function (req, res) {
    res.send('O meu nome é LUCAS espaço PINTO')
})

app.get('/meunome/:name', function (req, res) {
    res.send('Olá ' + req.params.name + '!');
});

app.get('/enviaHTML/:fname', function (req, res) {
    let data;
    try {
        data = fs.readFileSync(`${req.params.fname}.html`);
    } catch (err) {
        data = fs.readFileSync('notfound.html');
    }

    res.writeHead(200, { 'Content-Type': 'text/html' });
    res.write(data.toString());
});

app.get('/meunumero/', function (req, res) {
    res.send('O meu número de aluno é 56926')
})

app.listen(port, function () {
    console.log('App a ouvir o porto ' + port + '!');
});