const http = require('http');
const myDateTime = require('./modules/myDateTime');

http.createServer((req, res) => {
  res.writeHead(200, {
    'Content-Type': 'text/html'
  });
  res.write("The date and time are currently: " + myDateTime());
  res.end();
}).listen(8000);
