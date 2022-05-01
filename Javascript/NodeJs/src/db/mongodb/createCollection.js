require('dotenv').config()
const url = process.env.MONGO_URI;
const MongoClient = require('mongodb').MongoClient;

MongoClient.connect(url, (err, db) => {
  if (err) throw err;
  let dbo = db.db("mydb");
  dbo.createCollection("customers", (err, res) => {
    if (err) throw err;
    console.log("Collection created!");
    console.log("🚀 ~ file: createCollection.js ~ line 8 ~ dbo.createCollection ~ res", res)
    db.close();
  });
});
