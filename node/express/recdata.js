var express = require('express');
var app = express();
var bodyParser = require('body-parser'); // Middleware 


app.use(express.json());
app.use(express.urlencoded({ extended: false }));
// Route to Homepage
app.get('/', (req, res) => {
    res.sendFile(__dirname + '/receiving.html');
});


app.post('/show', (req, res) => {
    const id = req.body.id;
    const name = req.body.name;
    res.send('Id: ' + id + ', Name:' + name);
    console.log("Id " + req.body.id);
    console.log("name " + req.body.name);
});


const port = 5000;
app.listen(port, () => console.log('This app is listening on port 3000'));
