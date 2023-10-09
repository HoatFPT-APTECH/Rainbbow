async function Login() {
   
    const csrfToken = document
        .querySelector('meta[name="csrf-token"]')
        .getAttribute("content");
    var UserName = document.getElementById("UserName").value;
    var Password = document.getElementById("Password").value;
    fetch("/api/login", {
        method: "post",
        headers: {
            "Content-type": "application/json",
            "X-CSRF-TOKEN": csrfToken, // Thêm CSRF token vào headers
        },
        body: JSON.stringify({
            UserName: UserName,
            Password: Password,
        }),
    })
        .then((rsp) => {
            if (rsp.ok) console.log("Login success");
            return rsp.json();
        })
        .then((data) => {
            if (data.Login) {
               
                sessionStorage.setItem("User", JSON.stringify(data.User));
                // Tạo một đối tượng Date hiện tại
                var now = new Date();

                // Thêm 3 giờ cho thời gian hiện tại
                var expirationTime = new Date(
                    now.getTime() + 3 * 60 * 60 * 1000
                ); // 3 giờ

                // Định dạng thời gian hết hạn thành chuỗi ngày/tháng/năm
                var expires = "expires=" + expirationTime.toUTCString();

                // Đặt cookie với thời gian hết hạn là 3 tiếng
                document.cookie =  `Access_Token=${data.Access_Token}` + expires + "; path=/";
                var user= data.User;
                // Điều hướng load lại trang hiện tại 
                if(user.Role_Id>2){
                    alert("You must login with role Admin or employee");
                    window.location.reload();
                }else{
                    window.location.href='/admin/dasdboard'
                }
            
               
            } else {
                var divLoginFail= document.querySelector("#invalidAcc");
                document.getElementById("Password").value=""
                // hiển thị trang thông báo lỗi và set up lại hình ảnh
                divLoginFail.style.display='block'
                var mediaQuery = window.matchMedia('(min-width: 700px)');

                // Kiểm tra nếu điều kiện media query đúng
                if (mediaQuery.matches) {
                    // Nếu điều kiện đúng, thực hiện các thay đổi CSS ở đây
                    document.querySelector("#myModal > div > div > div.col-sm-6.left-side > img").style.height = "648px";
                }
            }
        })
        .catch((err) => console.log(err));
}
