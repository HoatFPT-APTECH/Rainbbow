function getCookie(name) {
    // Tách các cookie thành mảng các cặp key-value
    var cookies = document.cookie.split(";");

    // Lặp qua từng cookie
    for (var i = 0; i < cookies.length; i++) {
        var cookie = cookies[i].trim();

        // Kiểm tra xem cookie có bắt đầu bằng "name="
        if (cookie.indexOf(name + "=") === 0) {
            // Trả về giá trị của cookie
            return cookie.substring(name.length + 1, cookie.length);
        }
    }

    // Nếu không tìm thấy cookie, trả về null
    return null;
}
function deleteCookie(name) {
    // Đặt thời gian hết hạn của cookie về quá khứ
    document.cookie = name + "=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
}
function cloneObject(obj) {
    return JSON.parse(JSON.stringify(obj));
  }
  function convertTo12HourFormat(inputTime) {
    try {
        // Chuyển đổi chuỗi thời gian thành đối tượng Date
        const inputDate = new Date(inputTime);
        
        // Lấy giờ và phút
        const hours = inputDate.getHours();
        const minutes = inputDate.getMinutes();
        
        // Xác định AM hoặc PM
        const amOrPm = hours >= 12 ? "PM" : "AM";
        
        // Chuyển đổi giờ sang định dạng 12 giờ
        const formattedHours = (hours % 12 || 12).toString().padStart(2, '0');
        const formattedMinutes = minutes.toString().padStart(2, '0');
        
        // Tạo chuỗi kết quả
        const formattedTime = `${formattedHours}:${formattedMinutes} ${amOrPm}`;
        
        return formattedTime;
    } catch (error) {
        return "Định dạng thời gian không hợp lệ";
    }
}
function formatDate(inputDate) {
    // Tạo một đối tượng Date từ chuỗi đầu vào
    const date = new Date(inputDate);
  
    // Lấy các thành phần của ngày tháng
    const day = date.getDate();
    const monthNames = [
      "JAN", "FEB", "MAR", "APR", "MAY", "JUN",
      "JUL", "AUG", "SEP", "OCT", "NOV", "DEC"
    ];
    const month = monthNames[date.getMonth()];
    const hours = date.getHours();
    const minutes = date.getMinutes();
    const ampm = hours >= 12 ? "PM" : "AM";
  
    // Xác định xem ngày có phải là "TODAY" hay không
    const today = new Date();
    const isToday = date.getDate() === today.getDate() &&
      date.getMonth() === today.getMonth() &&
      date.getFullYear() === today.getFullYear();
  
    // Tạo chuỗi định dạng mới
    let formattedDate = "";
    if (isToday) {
      formattedDate = "TODAY";
    } else {
      formattedDate = `${day} ${month}`;
    }
  
    // Thêm giờ và phút vào chuỗi định dạng
    formattedDate += `, ${hours}:${(minutes < 10 ? '0' : '') + minutes} ${ampm}`;
  
    return formattedDate;
  }

// hàm chuyển string thành ngày- tháng 
function convertTimeToEasy(time) {
    var dateString = time;

    // Chuyển đổi chuỗi ngày thành đối tượng Date
    var date = new Date(dateString);

    // Mảng thứ trong tuần (ngày 0 là Chủ Nhật)
    var daysOfWeek = ["SU", "MO", "TU", "WE", "THU", "FRI", "SAT"];

    // Lấy thứ
    var dayOfWeek = daysOfWeek[date.getDay()];

    // Lấy ngày trong tháng
    var dayOfMonth = date.getDate();

    // Kết quả
    var result = `<span>${dayOfWeek}</span> <br> ${dayOfMonth}</a>`;
    return result;
}
// hàm lấy giờ từ chuỗi đã cho 
function getHour(time){
  // Chuỗi thời gian đầu vào
var timeString = time

// Chuyển chuỗi thành đối tượng Date
var dateTime = new Date(timeString);

// Lấy giờ và phút từ đối tượng Date
var hour = dateTime.getHours();
var minute = dateTime.getMinutes();

// Định dạng giờ và phút thành chuỗi 'HH:mm'
var hourMinute = (hour < 10 ? '0' : '') + hour + ':' + (minute < 10 ? '0' : '') + minute;
return hourMinute;

}
// hàm lấy ngày-tháng- năm 19-DEC-2022
function getDMYear(time){
  // Chuỗi thời gian đầu vào
var timeString = time

// Chuyển chuỗi thành đối tượng Date
var dateTime = new Date(timeString);

// Lấy ngày, tháng và năm từ đối tượng Date
var day = dateTime.getDate();
var month = dateTime.getMonth();
var year = dateTime.getFullYear();

// Mảng các tên tháng
var monthNames = ["JAN", "FEB", "MAR", "APR", "MAY", "JUN", "JUL", "AUG", "SEP", "OCT", "NOV", "DEC"];

// Định dạng lại thành "DD-MMM-YYYY"
var formattedDate = (day < 10 ? '0' : '') + day + '-' + monthNames[month] + '-' + year;

return formattedDate;

}


