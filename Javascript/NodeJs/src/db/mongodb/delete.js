require('dotenv').config()

const MongoClient = require('mongodb').MongoClient;
const url = process.env.MONGO_URI;

MongoClient.connect(url, (err, db) => {
  if (err) throw err;
  let dbo = db.db("mydb");
  let myquery = { address: 'Mountain 21' };
  dbo.collection("customers").deleteOne(myquery, (err, obj) => {
    if (err) throw err;
    console.log("1 document deleted");
    console.log("🚀 ~ file: delete.js ~ line 9 ~ dbo.collection ~ obj", obj)
    db.close();
  });
});