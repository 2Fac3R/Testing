require('dotenv').config()
const url = process.env.MONGO_URI;
const MongoClient = require('mongodb').MongoClient;

MongoClient.connect(url, (err, db) => {
  if (err) throw err;
  var dbo = db.db("mydb");
  var myquery = { address: 'Mountain 21' };
  dbo.collection("customers").deleteOne(myquery, (err, obj) => {
    if (err) throw err;
    console.log("1 document deleted");
    console.log("🚀 ~ file: delete.js ~ line 9 ~ dbo.collection ~ obj", obj)
    db.close();
  });
});