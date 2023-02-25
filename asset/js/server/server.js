var express= require("express");
var app=express();
var http=require('http').createServer(app)
var io=require('socket.io')(http);

const port=process.env.PORT || 3000;
        
io.on('connection', (socket) =>{

    socket.on('roomJoined', (data)=>{
    	var iD= document.getElementById('messageDivId').getAttribute('postId');
    	socket.join(iD);
    	io.sockets.to(iD).emit('roomJoined', li);
    });

});

http.listen(port, () =>{
    console.log("listening on 3000");
});