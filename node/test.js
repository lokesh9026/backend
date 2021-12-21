// var Buffer = require('buffer');
cbuf = new Buffer(256);
bufferlen = cbuf.write("Learn Programming with NodeJS!!!");
console.log( cbuf.toString('ascii'));

rbuf = new Buffer(26); 
var j; 
  for (var i = 65, j = 0; i < 90, j < 26; i++, j++) {  
    rbuf[j] = i ;  
}  
  console.log( rbuf.toString('ascii')); 
