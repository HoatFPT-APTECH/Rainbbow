
console.log("Đã nhận file")
function getRooms(cinemaId){
    fetch(`/api/showtime/getRoomByCinema/${cinemaId}`,{
        method:'get',
        headers:{
            "X-CSRF-TOKEN": csrfToken, // Thêm CSRF token vào headers
        }
    }).then(rsp=>{
        return rsp.json()
    }).
    then(data=>{
        var roomO= document.querySelector("#roomIdInput")

         if(data.length===0) {
            var content= `<option >No Data in this Cinema</option>`
      
         }else{
            var content= data.map(e=>{
                return `<option value="${e.Id}"  > ${e.Name}  </option>`
            }).join('')
         }
       
        roomO.innerHTML=content
    })
    .catch(err=>console.log(err))
}