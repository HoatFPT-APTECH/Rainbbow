window.addEventListener("DOMContentLoaded", () => {
    LoadListShowTimeNavTab();
});

async function LoadListShowTimeNavTab() {
    // Lấy URL hiện tại

    var currentURL = window.location.href;

    // Phân tích URL để lấy phần path
    var urlParts = currentURL.split("/");

    // Lấy giá trị cuối cùng trong mảng (id movie)
    var movieId = urlParts[urlParts.length - 1];

    fetch("/api/getListShowTimeByIdMovie", {
        method: "post",
        headers: {
            "Content-type": "application/json",
            "X-CSRF-TOKEN": csrfToken, // Thêm CSRF token vào headers
        },
        body: JSON.stringify({
            Id_Movie: movieId,
        }),
    })
        .then((rsp) => rsp.json())
        .then((data) => {
   
            
        var rs= convertDataListShowTime(data);

        renderListShowTimeNavTab(rs);
        
        })
        .catch((err) => console.log(err));
}
function renderListShowTimeNavTab(data) {
    //render nav
    var nav_tab = document.querySelector(
        "body > div.prs_booking_main_div_section_wrapper > div.st_slider_rating_main_wrapper.float_left > div > div > ul"
    );
    var tab_content = document.querySelector(
        "body > div.prs_booking_main_div_section_wrapper > div.st_slider_index_sidebar_main_wrapper.st_slider_index_sidebar_main_wrapper_booking.float_left > div > div > div.col-lg-9.col-md-9.col-sm-12.col-xs-12 > div > div > div > div"
    );
     tab_content.innerHTML = "";
    nav_tab.innerHTML = "";
    for (var i = 0; i < data.length; i++) {
        var content;
        switch (i) {
            case 0:{
                content = `<li class="active">
                <a data-toggle="tab" href="#home" aria-expanded="true">${convertTimeToEasy(
                    data[i].Start
                )}
               </li>`;
           
               renderListShowTimeTabContent(data[i].Cinemas,i);
               break;
            }
              
             

            default:{
                content = `<li class="">
                <a data-toggle="tab" href="#menu${i}" aria-expanded="false"> ${convertTimeToEasy(
                 data[i].Start
             )}
            </li>`;
            renderListShowTimeTabContent(data[i].Cinemas,i);
             break;

            }
                
        }
        nav_tab.innerHTML += content;
    }
}


function convertDataListShowTime(data) {
    var result = new Array();
    // data demo
    var element = cloneObject({
        Start: "2023-09-10",
        Cinemas: [
            {
                Name: "lotte",
                Showtimes: []
            }
        ],
    });

    for(var s=0;s<data.length;s++){
        var indexRs=result.findIndex(e=>{
            var dateE=(new  Date(e.Start)).getDate();
            var dateC=(new Date(data[s].Start)).getDate();
       
            return dateE===dateC;

        });
        
        if(indexRs===-1){
          
            
             var dataDemo=cloneObject(element);
             var CinemaDemo=cloneObject(element.Cinemas[0]);
             CinemaDemo.Showtimes.push(cloneObject(data[s]));
             CinemaDemo.Name=data[s].cinema.Name;
            dataDemo.Start=data[s].Start;
            dataDemo.Cinemas=[];
            dataDemo.Cinemas.push(cloneObject(CinemaDemo))
           
            result.push(cloneObject(dataDemo));
        }else{
              
            var indexCinema=result[indexRs].Cinemas.findIndex(item=>{
                return item.Name==data[s].cinema.Name;
            });
            // không timmf thấy cinema trùng với dữ liệu đang xét với tên trùng với..
            if(indexCinema===-1){
                var CinemaDemo=cloneObject(element.Cinemas[0]);
                CinemaDemo.Name=data[s].cinema.Name;
                CinemaDemo.Showtimes.push(cloneObject(data[s]));
                 result[indexRs].Cinemas.push(cloneObject(CinemaDemo))
            }else{
                result[indexRs].Cinemas[indexCinema].Showtimes.push(cloneObject(data[s]));
            }
        }
       
    }
    return result;
}
function renderListShowTimeTabContent(cinemas,id) {
    var tab_content = document.querySelector(
        "body > div.prs_booking_main_div_section_wrapper > div.st_slider_index_sidebar_main_wrapper.st_slider_index_sidebar_main_wrapper_booking.float_left > div > div > div.col-lg-9.col-md-9.col-sm-12.col-xs-12 > div > div > div > div"
    );
  

        var content = null;
        switch (id) {
            case 0:
                {
                    content = `<div id="home" class="tab-pane active">
                    <div class="st_calender_contant_main_wrapper float_left">
                        ${cinemas.map(cinema=>{
                          return renderListShowTimeNavTabRow(cinema,id)
                        }).join(``)}
                    </div>
                </div>`;
         
                break;
                }
            

            default:{
                content = `<div id="menu${id}" class="tab-pane fade">
                <div class="st_calender_contant_main_wrapper float_left">
                ${cinemas.map(cinema=>{
                 return renderListShowTimeNavTabRow(cinema,id)
                }).join(``)}
                </div>
            </div>`;
            break;
            
            }
               
        }
      tab_content.innerHTML+=content;
      var parent=document.querySelector("#home").childNodes;
      console.log(parent[0].nodeValue)
    //   parent[parent.length-1].classList.add("st_calender_row_cont_last")
      
    
}
function renderListShowTimeNavTabRow(cinema,index){
    var content= null;

    switch (index) {
        case 0:{
              content=`<div class="st_calender_row_cont float_left">
              <div class="st_calender_asc">
                  <div class="st_calen_asc_heart"><a href="#">	<i class="fa fa-heart"></i></a>
                  </div>
                  <div class="st_calen_asc_heart_cont">
                      <h3>${cinema.Name}</h3>
                      <ul>
                          <li>
                              <img src="http://127.0.0.1:8000/RainbowPublic/images/content/fast-food.png">
                          </li>
                          <li>
                              <img src="http://127.0.0.1:8000/RainbowPublic/images/content/bill.png">
                          </li>
                      </ul>
                  </div>
              </div>
              <div class="st_calen_asc_tecket_time_select">
                  <ul>
                  ${cinema.Showtimes.map(function(showtime) {
                    return  renderListShowTimeNavTabRowTime(showtime);
                  }).join('')}
                  </ul>
              </div>
          </div>`;
  
          break;
        }
            
            
    
        default:{
          content=`<div class="st_calender_row_cont st_calender_row_cont2 float_left">
          <div class="st_calender_asc">
              <div class="st_calen_asc_heart"><a href="#">	<i class="fa fa-heart"></i></a>
              </div>
              <div class="st_calen_asc_heart_cont">
                  <h3>${cinema.Name}</h3>
                  <ul>
                      <li>
                          <img src="http://127.0.0.1:8000/RainbowPublic/images/content/fast-food.png">
                      </li>
                      <li>
                          <img src="http://127.0.0.1:8000/RainbowPublic/images/content/bill.png">
                      </li>
                  </ul>
              </div>
          </div>
          <div class="st_calen_asc_tecket_time_select">
              <ul>
              ${cinema.Showtimes.map(function(showtime) {
                return  renderListShowTimeNavTabRowTime(showtime);
              }).join('')}</ul>
          </div>
      </div>`;
      break;
        }
            
    }
    return content;

}
function renderListShowTimeNavTabRowTime(data){

    var content=``;
  
           content+=`<li>	<span>
           <h4>${data.room.Name}</h4>
           <p class="asc_pera1">Executive</p>
           <p class="asc_pera2">Filling Fast</p>
           </span>
           <a href="/rainbow/seat_booking/${data.Id}">${convertTo12HourFormat(data.Start)}</a>
       </li>`
  
    return content;
}
