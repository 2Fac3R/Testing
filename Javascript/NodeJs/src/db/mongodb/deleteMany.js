require('dotenv').config()
const url = process.env.MONGO_URI;
const MongoClient = require('mongodb').MongoClient;

MongoClient.connect(url, (err, db) => {
  if (err) throw err;
  let dbo = db.db("mydb");
  let myquery = { address: /^O/ };
  dbo.collection("customers").deleteMany(myquery, (err, obj) => {
    if (err) throw err;
    console.log("🚀 ~ file: deleteMany.js ~ line 9 ~ dbo.collection ~ obj", obj)
    db.close();
  });
});