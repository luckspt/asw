const port = 4021;

const http = require('http');
const MongoClient = require('mongodb').MongoClient;

http.createServer(
    function (req, res) {
        res.writeHead(200, { 'Content-Type': 'text/html' });

        const baseDad = "asw21";
        const url = `mongodb://${baseDad}:${baseDad}@appserver-01.alunos.di.fc.ul.pt:27017/${baseDad}`;

        //aceder a dados
        MongoClient.connect(url, { useNewUrlParser: true, useUnifiedTopology: true },
            function (err, db) {
                if (err) throw err;
                const dbo = db.db(baseDad);
                let htmlstr = `<html><body><ol>
                    <h2>A operação seguinte usa o operador $ regex para retornar os documentos na coleção de voluntários onde o campo de nome começa com
                    a letra B (SQL= \"LIKE B%\" )!</h2>`;

                dbo.collection("voluntario").find({
                    "name": { $regex: /^B/ }
                }).toArray(function (err, result) {
                    if (err) throw err;

                    for (let i = 0; i < result.length; i++)
                        htmlstr += "<li>" + result[i].name + "<br>";

                    htmlstr += "</ol></body></html>";

                    res.write(htmlstr.toString());
                    res.end("Fim de dados encontrados!");

                    console.log(result);
                    db.close();
                });
            });

    }).listen(port);

console.log('LUCAS PINTO disponibiliza o seu mongoDB via web!');