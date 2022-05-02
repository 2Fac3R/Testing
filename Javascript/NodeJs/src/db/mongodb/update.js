require('dotenv').config()

const MongoClient = require('mongodb').MongoClient;
const url = process.env.MONGO_URI;

MongoClient.connect(url, (err, db) => {
  if (err) throw err;
  let dbo = db.db("mydb");
  let myquery = { address: "Valley 345" };
  let newvalues = { $set: { name: "Mickey", address: "Canyon 123" } };
  dbo.collection("customers").updateOne(myquery, newvalues, (err, res) => {
    if (err) throw err;
    console.log("🚀 ~ file: update.js ~ line 10 ~ dbo.collection ~ res", res)
    console.log("1 document updated");
    db.close();
  });
});