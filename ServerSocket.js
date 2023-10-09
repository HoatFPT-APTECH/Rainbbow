const express = require("express");
const app = express();
const cors = require("cors");

var server = app.listen(process.env.PORT || 3000, () => {
  console.log("Server is running on port: ", 3000);
});
app.use(express.urlencoded({ extended: true }));
// app.use(cors({
//   origin: "*", // Thay your_client_port bằng cổng máy khách của bạn,
//   methods:"*"
// }));
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