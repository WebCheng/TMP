var mysql = require('mysql');

var con = mysql.createConnection({
  host: "oniddb.cws.oregonstate.edu",
  database :"chengwe-db",
  user: "chengwe-db",
  password: "byCLd36LwsWATYhw"
});

con.connect(function(err) {
  if (err)
  {
    console.log("Co!");
   }
  console.log("Connected!");
});
