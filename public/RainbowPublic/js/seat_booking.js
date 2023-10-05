

var data= JSON.parse(document.querySelector("meta[name='data']").getAttribute('content'));
const socket= io(":3000");


 



socket.emit('join_showtime',data.Id);
socket.on("orther_people_choosing_seat",(user,seat)=>{
  console.log(user)
    console.log(" seat: "+seat)
})
window.addEventListener('DOMContentLoaded',()=>{
  loadUI()
})
function loadUI(){
    var time=document.querySelector("body > div.st_bt_top_header_wrapper.float_left > div > div > div:nth-child(2) > div > h4");
    console.log
    time.innerHTML= formatDate(`${data.Start}`);
    
}

function chooseSeat(seat){
  const user= JSON.parse(window.sessionStorage.getItem("User"))
  console.log("event onclick: "+seat)
  
socket.emit("choosing_seat",user,seat)
 


}