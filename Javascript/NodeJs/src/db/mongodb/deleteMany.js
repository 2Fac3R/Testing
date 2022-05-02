require('dotenv').config()

const MongoClient = require('mongodb').MongoClient;
const url = process.env.MONGO_URI;

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