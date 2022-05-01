require('dotenv').config()
const url = process.env.MONGO_URI;
const MongoClient = require('mongodb').MongoClient;

MongoClient.connect(url, (err, db) => {
  if (err) throw err;
  let dbo = db.db("mydb");
  dbo.collection("customers").find().limit(5).toArray((err, result) => {
    if (err) throw err;
    console.log(result);
    db.close();
  });
});