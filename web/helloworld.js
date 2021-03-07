const http = require('http');
const fs = require('fs');
const path = require('path');
const url = require('url');
const port = 3000

// function page(){
//     if (window.location.href.indexOf('home') > 0){
//         return 'home.html';
//     } else if (window.location.href.indexOf('data')> 0){
//         return 'data.html';
//     } else {
//         return 'hello.html';
//     }
// }

const server = http.createServer(function(req, res){
    const 
res.writeHead(200, {'Content-Type':'text/html'})
fs.readFile('home.html', function(error, data){
    if (error){
        res.writeHead(404)
        res.write('Error: File Not Found')
    } else {
        res.write(data)
    }
    res.end()
})

}
)
server.listen(port, function(error){
if (error) {
    console.log('Something went wrong', error)
} else {
    console.log('Sever is listening on port' + port)
}
})