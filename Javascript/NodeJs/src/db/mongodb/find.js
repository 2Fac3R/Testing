const client = require('./connection');

async function run() {
  try {
    await client.connect();
    const database = client.db("mydb");
    const customers = database.collection("customers");
    const result = await customers.find({}).toArray();
    console.log(result);
  } catch (error) {
    throw error;
  } finally {
    await client.close();
  }
}

run();