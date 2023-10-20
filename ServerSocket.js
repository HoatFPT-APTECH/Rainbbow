const express = require("express");
const app = express();
const cors = require("cors");
const http = require('http');

const server = http.createServer();

server.listen(3000, () => {
  console.log('Socket server is running on port 3000');
 setInterval(sendMail,1000*60)
});

function sendMail(){
  var urlMail='http://127.0.0.1:8000/api/autoSendMail';
  fetch(urlMail,{
    method:'get',
   
  }).then(rsp=>{
    if(rsp.ok)console.log("Success : Sended Mail")
  })

  .catch(err=>console.log("err:"+err))
}

app.use(express.urlencoded({ extended: true }));
const socketIo = require("socket.io");
const io = socketIo(server);
io.on('connection',(socket)=>{
 
  
  socket.on("join_showtime",(ShowtimeId)=>{
   
    socket.join(`show_time:${ShowtimeId}`);
    
    socket.on("choosing_seat",(user,seat,showTimeId)=>{
      console.log(user)
      io.to(`show_time:${ShowtimeId}`).emit("orther_people_choosing_seat",user,seat);
      // Đặt lại chỗ ngồi 
    
    })
    socket.on("cancel_choosing_seat",(user,seat,showTimeId)=>{
      console.log(user)
      io.to(`show_time:${ShowtimeId}`).emit("orther_people_cancel_choosing_seat",user,seat)
    })
  })
   
})