// File Management in NodeJs

var fs = require('fs');

// Open
fs.open('mynewfile2.txt', 'w', function (err, file) {
    if (err) throw err;
    console.log('Saved!');
});

// Appends content
fs.appendFile('mynewfile1.txt', ' This is my text.', function (err) {
    if (err) throw err;
    console.log('Updated!');
});

// Writes new content
fs.writeFile('mynewfile3.txt', 'This is my text', function (err) {
    if (err) throw err;
    console.log('Replaced!');
});

// Deletes a file
fs.unlink('mynewfile2.txt', function (err) {
    if (err) throw err;
    console.log('File deleted!');
});

// Renames a file
fs.rename('mynewfile1.txt', 'myrenamedfile.txt', function (err) {
    if (err) throw err;
    console.log('File Renamed!');
});
