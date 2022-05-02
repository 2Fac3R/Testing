require('dotenv').config()

const MongoClient = require('mongodb').MongoClient;
const url = process.env.MONGO_URI;

MongoClient.connect(url, (err, db) => {
  if (err) throw err;
  let dbo = db.db("mydb");
  dbo.collection("customers").drop((err, delOK) => {
    if (err) throw err;
    if (delOK) console.log("Collection deleted");
    db.close();
  });
});