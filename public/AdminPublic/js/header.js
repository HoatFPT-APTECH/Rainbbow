window.addEventListener("DOMContentLoaded", () => {
    decentralizationAccount()
    loadUserInformation();

});
function decentralizationAccount(){
    var user = JSON.parse(window.sessionStorage.getItem("User"));
    if(user===null || user.Role_Id>2){
        alert("You must login with role admin or employee to access !");
        window.location.href='/admin'
    }else if( user.Role_Id===2){
        var dAdmin= document.querySelectorAll('.decenAdmin');
        for(var e=0;e<dAdmin.length;e++){
            dAdmin[e].style.display='none'
        }
    }
}
function loadUserInformation() {
    var userI = JSON.parse(window.sessionStorage.getItem("User"));

    if (userI !== undefined && userI !== null) {    
        var aSighnup = document.querySelector("body > div.main-wrapper > div.header > ul > li.nav-item.dropdown.has-arrow > a > span.ad-text")
        var iAccount=document.querySelector("body > div.main-wrapper > div.header > ul > li.nav-item.dropdown.has-arrow > a > span.user-img > img");
        var hrefAccount=document.querySelector("#sidebar-menu > ul > li:nth-child(11) > a");
        hrefAccount.href=`/admin/changeaccount/edit/${userI.Id}`
        iAccount.src=userI.Image
        aSighnup.innerHTML= userI.Name;
   
        // var spanSignup = document.querySelector(
        //     "body > div.prs_navigation_main_wrapper > div > div.prs_navi_right_main_wrapper > div.prs_top_login_btn_wrapper > div > ul > li > a > span"
        // );
        // spanSignup.innerHTML = "My Account";

        var btnLogout=document.querySelector("body > div.main-wrapper > div.header > ul > li.nav-item.dropdown.has-arrow > div > a:nth-child(4)")
        // btnLogout.removeAttribute("data-toggle");
        // btnLogout.setAttribute('data-text',"LOG OUT")
        //  var textbtnLogou=document.querySelector("#mobile-nav > div.mobile-nav-box > div.prs_top_login_btn_wrapper.prs_slidebar_searchbar_btn_wrapper > div > ul > li > a > span");
        //  textbtnLogou.innerHTML="LOG OUT"
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
