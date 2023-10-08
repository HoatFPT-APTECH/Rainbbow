

function loadUI(){
  
    var STime_Hour= document.querySelectorAll('.time_hours')

    var time= STime_Hour[0].innerHTML;
    for(var e=0;e<STime_Hour.length;e++){
       STime_Hour[e].innerHTML=getHour(time)

    }
  
    var STime_DMYear= document.querySelector('#time_date');
    STime_DMYear.innerHTML=getDMYear(time);
   // setup total price
    var priceTickets=document.querySelectorAll('.ticket_price');
    var totalPrice=0;
    for(var e=0;e<priceTickets.length;e++){
      totalPrice+=  parseFloat(priceTickets[e].innerHTML);
      console.log(totalPrice)
 
     }
     var totalPriceB=document.querySelector('#total_price');
     totalPriceB.innerHTML=totalPrice
}
window.addEventListener('DOMContentLoaded',()=>{
    loadUI();
})
