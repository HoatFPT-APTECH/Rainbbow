function loadUI(){
    var STime_Hour= document.querySelectorAll('.time_hours')

    var time= STime_Hour[0].innerHTML;
    for(var e=0;e<STime_Hour.length;e++){
       STime_Hour[e].innerHTML=getHour(time)

    }
  
    var STime_DMYear= document.querySelector('#time_date');
    STime_DMYear.innerHTML=getDMYear(time);
}
window.addEventListener('DOMContentLoaded',()=>{
    loadUI();
})