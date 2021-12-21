var mysql = require('mysql');  
var con = mysql.createConnection({  
host: "localhost",  
user: "root",  
password: "",  
database: "college"  
});  
con.connect(function(err) {  
if (err) throw err;  
console.log("Connected!");  
var sql = "INSERT INTO upes( name, branch, mobile,email,password) VALUES ( 'Ajeet Kumar', 'mechanical','9784561235', 'ajeet@gmail.com','123')";  
con.query(sql, function (err, result) {  
    if (err) throw err;  
        console.log("1 record inserted");  
    });
}); 
