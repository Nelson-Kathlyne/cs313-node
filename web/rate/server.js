const express = require("express");
const app = express();
const port = 5000;

app.use(express.static("public"));

app.set("views", "views");
app.set("view engine", "ejs");

app.get("/output", function(req, res){
    res.render("output");
})

app.get("/", function(req, res){
    console.log("Recieved a request for the root directory");
    res.write("This is the root");
    res.end();
});

app.get("/home", function(req, res){
    console.log("Recieved request for homepage");
    res.write("This is the Homepage");
    res.end();
});

app.listen(port, function(req, res) {
    console.log("The server is up and listening on port " + port);
});

