var mysql = require('mysql');  
var con = mysql.createConnection({  
host: "localhost",  
user: "root",  
password: "",  
database: "college"  
});  
con.connect(function(err) {  
if (err) throw err;  
var sql = "UPDATE upes SET email = 'raju@gmail.com' WHERE email = 'r@gmail.com'";  
con.query(sql, function (err, result) {  
if (err) throw err;  
console.log(result.affectedRows + " record(s) updated");  
});  
}); 
