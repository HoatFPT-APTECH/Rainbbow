function input(inputId,e){
    console.log(e)
    switch(inputId){
        case 0: var img= document.querySelector("#image0");break;
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