require('dotenv').config()
const url = process.env.MONGO_URI;
const MongoClient = require('mongodb').MongoClient;

MongoClient.connect(url, (err, db) => {
  if (err) throw err;
  let dbo = db.db("mydb");
  let myobj = { name: "Company Inc", address: "Highway 37" };
  dbo.collection("customers").insertOne(myobj, (err, res) => {
      if (err) throw err;
      console.log("1 document inserted");
      console.log("🚀 ~ file: insert.js ~ line 9 ~ dbo.collection ~ res", res)
    db.close();
  });
});