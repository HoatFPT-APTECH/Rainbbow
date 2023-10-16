function input(inputId,e){
    console.log(e)
    switch(inputId){
        case 0: var img= document.querySelector("#image0");break;
        case 1: var img= document.querySelector("#image1");break;
        case 2: var img= document.querySelector("#image2");break;
        case 3: var img= document.querySelector("#image3");break;
        case 4: var img= document.querySelector("#image4");break;
        case 5: var img= document.querySelector("#image5");break;
    }
    const selectedFile = e.files[0];

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