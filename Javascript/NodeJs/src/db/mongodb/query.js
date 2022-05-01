require('dotenv').config()
const url = process.env.MONGO_URI;
const MongoClient = require('mongodb').MongoClient;

MongoClient.connect(url, (err, db) => {
  if (err) throw err;
  let dbo = db.db("mydb");
  let query = { address: "Park Lane 38" };
  // var query = { address: /^S/ }; // With regular expressions
  dbo.collection("customers").find(query).toArray((err, result) => {
    if (err) throw err;
    console.log(result);
    db.close();
  });
});