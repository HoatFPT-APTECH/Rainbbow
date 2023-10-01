const socket= io("http://localhost:6001");

// Gửi sự kiện
socket.emit('OrderSeatShowtimeEvent', 'Hello, world!');

// Lắng nghe sự kiện
socket.on('OrderSeatShowtimeEvent', (message) => {
  console.log('Received message:', message);
});



var data= JSON.parse(document.querySelector("meta[name='data']").getAttribute('content'));


window.addEventListener('DOMContentLoaded',()=>{
  loadUI()
})
function loadUI(){
    var time=document.querySelector("body > div.st_bt_top_header_wrapper.float_left > div > div > div:nth-child(2) > div > h4");
    console.log
    time.innerHTML= formatDate(`${data.Start}`);
    
}