window.addEventListener('DOMContentLoaded',()=>{
loadComment()
})
var userI = JSON.parse(window.sessionStorage.getItem("User"));
function loadComment(){
  if(userI===null){
    var  dComment= document.querySelector("#userComment");
    dComment.style.display='none';
    return ;
  }
    var imgU=document.querySelector("#userAvatar");
    var urlAvatar=userI.Image===null?'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTcvT6QqjdH2mTk0Zpf84FLHDMX77xUTonQ0g&usqp=CAU':userI.Image;
   imgU.setAttribute('src',urlAvatar)

}
function submitContent(movieId){
    if(userI===null){
        alert('You must login to post comment');
    }
  var contentT=document.querySelector("#commentContent");
  var contentText=contentT.value;
   var pathURL= `/rainbow/movie_single_updateCMT?userId=${userI.Id}&& content=${contentText} && movieId=${movieId}`;
   window.location.href=pathURL;

}