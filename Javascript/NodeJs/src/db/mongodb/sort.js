require('dotenv').config()

const MongoClient = require('mongodb').MongoClient;
const url = process.env.MONGO_URI;

MongoClient.connect(url, (err, db) => {
  if (err) throw err;
  let dbo = db.db("mydb");
  let mysort = { name: 1 }; // { name: 1 } ascending, { name: -1 } descending
  dbo.collection("customers").find().sort(mysort).toArray((err, result) => {
    if (err) throw err;
    console.log(result);
    db.close();
  });
});