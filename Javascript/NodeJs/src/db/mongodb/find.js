require('dotenv').config()

const MongoClient = require('mongodb').MongoClient;
const url = process.env.MONGO_URI;

MongoClient.connect(url, (err, db) => {
  if (err) throw err;
  let dbo = db.db("mydb");
  dbo.collection("customers").find({}).toArray((err, result) => {
    if (err) throw err;
    console.log(result);
    db.close();
  });
});