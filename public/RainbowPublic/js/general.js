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
