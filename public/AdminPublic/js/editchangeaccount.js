function input(inputId,e){
    
    switch(inputId){
        case 0: var img= document.querySelector("#image0");break;
    }
    const selectedFile = e.files[0];
     console.log(img)
    if (selectedFile) {
        const reader = new FileReader();

        reader.onload = (e) => {
           img.src = e.target.result;
        };

        reader.readAsDataURL(selectedFile);
    } else {
        imagePreview.src = '';
    }

}