var timeWork=1000*20;
const userS= JSON.parse(window.sessionStorage.getItem("User"))
var data= JSON.parse(document.querySelector("meta[name='data']").getAttribute('content'));
window.addEventListener('DOMContentLoaded',()=>{
  loadUI();
  setTimeout(timeOutForWork,timeWork);

})

const socket= io(":3000");
socket.emit('join_showtime',data.Id);
socket.on("orther_people_choosing_seat",(user,seat)=>{
  user= JSON.parse(JSON.stringify(user))
 
  if( userS==null|| user.Id!==userS.Id ){
    console.log(user)
    console.log(" seat: "+seat)
    var seatI=document.querySelector(`#${seat}`);
    seatI.parentElement.classList.add('seat_choosing')
    seatI.setAttribute('disabled','true');
  }
})
socket.on("orther_people_cancel_choosing_seat",(user,seat)=>{
  user= JSON.parse(JSON.stringify(user))
  if(userS==null||user.Id!==userS.Id){
    console.log(user)
    console.log(" cancel seat: "+seat);
    var seatI=document.querySelector(`#${seat}`);
    seatI.parentElement.classList.remove('seat_choosing')
    seatI.removeAttribute('disabled','true')
  }
 
})

function timeOutForWork(){
  var showTimeId =getShowtimeId();
   const inputCheck= document.querySelectorAll('input');
   inputCheck.forEach(i=>{
    if(i.type=='checkbox'){
   
      i.checked=false;
      socket.emit("cancel_choosing_seat",userS,i.value,showTimeId)    
    }
   })
   alert("You have run out of time to choose your seat. Please do not reserve a seat!");
   window.location.href='/rainbow/';
}
function loadUI(){
    var time=document.querySelector("body > div.st_bt_top_header_wrapper.float_left > div > div > div:nth-child(2) > div > h4");
  
    time.innerHTML= formatDate(`${data.Start}`);
    
}
 function getShowtimeId(){
  // Lấy URL hiện tại
var currentURL = window.location.href;

// Chia URL thành các phần dựa trên dấu /
var urlParts = currentURL.split('/');

// Lấy phần tử cuối cùng của mảng
var lastElement = urlParts[urlParts.length - 1];



  return lastElement;
 }
function chooseSeat(seat,Icheck){
  seat=Icheck.id;
  if(userS==null){
    alert("You must login to order !")
    Icheck.checked=false
    document.querySelector("body > div.prs_navigation_main_wrapper > div > div.prs_navi_right_main_wrapper > div.prs_top_login_btn_wrapper > div > ul > li > a").click()
  }
  else{
    var showTimeId =getShowtimeId();
    if(Icheck.checked===true){
       changeCountTicket(true)
      socket.emit("choosing_seat",userS,seat,showTimeId);
      // ChangeStatusSeat(seat,showTimeId,1)
    }
    else {
      changeCountTicket(false)
      socket.emit("cancel_choosing_seat",userS,seat,showTimeId)
      // ChangeStatusSeat(seat,showTimeId,0)
    }   
  }
}
function changeCountTicket(action){
  var iNumberticket=document.querySelector("#input-quantity");

   if(action===false){
    if(iNumberticket.value<0)return ;
    iNumberticket.value-=1
   }else{
    iNumberticket.value+=1
   }
}
function ChangeStatusSeat(seat,ShowTimeId,status){
  fetch('/api/changeStatusSeatShowtime',{
    method:'post',
    headers: {
      "Content-type": "application/json",
      "X-CSRF-TOKEN": csrfToken, // Thêm CSRF token vào headers
  },
  body: JSON.stringify({
    "seat": seat,
    'showTime_Id':ShowTimeId,
  'status': status })
  }).catch(err=>console.log(err))
}


function submitTicketChoose(event){
  event.preventDefault();
  var IcheckedTickets=document.querySelectorAll('input[name="cb"]:checked');
  var ticketsChoosed=new Array();
  for(i=0;i<IcheckedTickets.length;i++){
    ticketsChoosed.push(''+IcheckedTickets[i].value+'')
  }
   if(ticketsChoosed.length<=0){
    alert("You must choose 1 tickets or more");
    return
   }
   else {
        console.log(ticketsChoosed);
        const showtimeId= getShowtimeId();
        const ticketIdStr =ticketsChoosed
        var pathQ=`/rainbow/booking_type?User_Id=${userS.Id} 
        &&Tickets_Id=${ticketIdStr}
        &&Showtime_Id=${showtimeId}
        `;
        window.location.href=pathQ;
   }
}