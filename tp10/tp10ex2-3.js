const MongoClient = require('mongodb').MongoClient;
const baseDad = "asw21";
const url = `mongodb://${baseDad}:${baseDad}@appserver-01.alunos.di.fc.ul.pt:27017/${baseDad}`;

console.log('LUCAS PINTO a aceder ao mongoDB!');

MongoClient.connect(url,
    { useNewUrlParser: true, useUnifiedTopology: true },
    function (err, db) {
        if (err) throw err;
        var dbo = db.db(baseDad);
        var myobj = [
            { _id: '58fdbf5c0ef8a50b4cdd9a84', name: 'John', address: 'Highway 71' },
            { _id: '58fdbf5c0ef8a50b4cdd9a85', name: 'Peter', address: 'Lowstreet 4' },
            { _id: '58fdbf5c0ef8a50b4cdd9a86', name: 'Amy', address: 'Apple st 652' },
            { _id: '58fdbf5c0ef8a50b4cdd9a87', name: 'Hannah', address: 'Mountain 21' },
            { _id: '58fdbf5c0ef8a50b4cdd9a88', name: 'Michael', address: 'Valley 345' },
            { _id: '58fdbf5c0ef8a50b4cdd9a89', name: 'Sandy', address: 'Ocean blvd 2' },
            { _id: '58fdbf5c0ef8a50b4cdd9a8a', name: 'Betty', address: 'Green Grass 1' },
            { _id: '58fdbf5c0ef8a50b4cdd9a8b', name: 'Richard', address: 'Sky st 331' },
            { _id: '58fdbf5c0ef8a50b4cdd9a8c', name: 'Susan', address: 'One way 98' },
            { _id: '58fdbf5c0ef8a50b4cdd9a8d', name: 'Vicky', address: 'Yellow Garden 2' },
            { _id: '58fdbf5c0ef8a50b4cdd9a8e', name: 'Ben', address: 'Park Lane 38' },
            { _id: '58fdbf5c0ef8a50b4cdd9a8f', name: 'William', address: 'Central st 954' },
            { _id: '58fdbf5c0ef8a50b4cdd9a90', name: 'Chuck', address: 'Main Road 989' },
            { _id: '58fdbf5c0ef8a50b4cdd9a91', name: 'Viola', address: 'Sideway 1633' }
        ];
        dbo.collection("voluntario").insertMany(myobj, function (err, res) {
            if (err) throw err;
            console.log('LUCAS PINTO inseriu vários voluntários no mongoDB!');
            db.close();
        });
    });


