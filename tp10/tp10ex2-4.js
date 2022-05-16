const MongoClient = require('mongodb').MongoClient;
const baseDad = "asw21";
const url = `mongodb://${baseDad}:${baseDad}@appserver-01.alunos.di.fc.ul.pt:27017/${baseDad}`;

console.log('LUCAS PINTO a aceder ao mongoDB!');

MongoClient.connect(url,
    { useNewUrlParser: true, useUnifiedTopology: true },
    function (err, db) {
        if (err) throw err;
        var dbo = db.db(baseDad);

        //Find all documents in the voluntario collection:
        dbo.collection("voluntario").find({}).toArray(function (err, result) {
            if (err) throw err;
            console.log(result);

            db.close();
        });
    });


