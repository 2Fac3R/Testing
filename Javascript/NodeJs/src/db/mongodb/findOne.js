require('dotenv').config()
const url = process.env.MONGO_URI;
const MongoClient = require('mongodb').MongoClient;

MongoClient.connect(url, (err, db) => {
  if (err) throw err;
  let dbo = db.db("mydb");
  dbo.collection("customers").findOne({}, (err, result) => {
    if (err) throw err;
    console.log(result.name);
    db.close();
  });
});