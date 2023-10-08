window.addEventListener("DOMContentLoaded", () => {
    loadUserInformation();
});
function loadUserInformation() {
    var userI = JSON.parse(window.sessionStorage.getItem("User"));

    if (userI !== undefined && userI !== null) {    
        var aSighnup = document.querySelector(
            "body > div.prs_navigation_main_wrapper > div > div.prs_navi_right_main_wrapper > div.prs_top_login_btn_wrapper > div > ul > li > a"
        );
        aSighnup.setAttribute(
            "href",
            "/rainbow/account_detail"
        );
        aSighnup.setAttribute("data-text", userI.Name);
        aSighnup.removeAttribute("data-toggle")
        var spanSignup = document.querySelector(
            "body > div.prs_navigation_main_wrapper > div > div.prs_navi_right_main_wrapper > div.prs_top_login_btn_wrapper > div > ul > li > a > span"
        );
        spanSignup.innerHTML = "My Account";

        var btnLogout=document.querySelector("#mobile-nav > div.mobile-nav-box > div.prs_top_login_btn_wrapper.prs_slidebar_searchbar_btn_wrapper > div > ul > li > a");
        btnLogout.removeAttribute("data-toggle");
        btnLogout.setAttribute('data-text',"LOG OUT")
         var textbtnLogou=document.querySelector("#mobile-nav > div.mobile-nav-box > div.prs_top_login_btn_wrapper.prs_slidebar_searchbar_btn_wrapper > div > ul > li > a > span");
         textbtnLogou.innerHTML="LOG OUT"
         btnLogout.addEventListener('click',()=>{
            logout()
         })
    }
}
function logout(){
    window.sessionStorage.removeItem("User");
    deleteCookie("Access_Token")
    window.location.reload()
}
