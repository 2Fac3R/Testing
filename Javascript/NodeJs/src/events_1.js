const fs = require('fs');
const rs = fs.createReadStream('./test.txt');

rs.on('open', () => {
  console.log('The file is open');
});
