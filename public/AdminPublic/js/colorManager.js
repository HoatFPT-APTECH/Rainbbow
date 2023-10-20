var colorPicker = new iro.ColorPicker(".colorPicker", {

    width: 280,
    color: "rgb(255, 0, 0)",
    borderWidth: 1,
    borderColor: "#fff" });
  
  
  var values = document.getElementById("values");
  var hexInput = document.getElementById("hexInput");
  
  
  colorPicker.on(["color:init", "color:change"], function (color) {
  
    values.innerHTML = [
    "hex: " + color.hexString,
    "rgb: " + color.rgbString,
    "hsl: " + color.hslString].
    join("<br>");
  
    hexInput.value = color.hexString;
  });
  
  hexInput.addEventListener('change', function () {
    colorPicker.color.hexString = this.value;
  });
  function saveColor(){
    var IFirstColor= document.querySelector('#first_color');
    var ISecondColor= document.querySelector('#second_color');
    var color1=IFirstColor.value;
    var color2=ISecondColor.value;
    fetch('/api/change_color',{
        method:'post',
        headers:{
            "Content-type": "application/json",
            "X-CSRF-TOKEN": csrfToken, // Thêm CSRF token vào headers
        },
        body: JSON.stringify({
           "firtsColor":color1,
            "secondColor":color2
        })
    }).then(rsp=>rsp.json())
    .then(data=>{
        console.log(data)
        var iframe = document.getElementById("web");
        iframe.src=iframe.src

    })
    .catch(err=>console.log(err))
  }