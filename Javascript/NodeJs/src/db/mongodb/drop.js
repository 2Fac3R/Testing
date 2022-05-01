require('dotenv').config()
const url = process.env.MONGO_URI;
const MongoClient = require('mongodb').MongoClient;

MongoClient.connect(url, (err, db) => {
  if (err) throw err;
  let dbo = db.db("mydb");
  dbo.collection("customers").drop((err, delOK) => {
    if (err) throw err;
    if (delOK) console.log("Collection deleted");
    db.close();
  });
});