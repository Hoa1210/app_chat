const form = document.querySelector(".signup form"),
continuBtn = form.querySelector(".button input");

form.onsubmit = (e)=>{
    e.preventDefault();
}


continuBtn.onclick = ()=>{
    // ajax

    let xhr = new XMLHttpRequest(); // Tao doi tuong XML 

    xhr.open("POST", "php/signup.php", true);
    xhr.onload = ()=>{
        if(xhr.readyState === XMLHttpRequest.DONE){
            if(xhr.status === 200){
                let data = xhr.response;
                console.log(data);
            }
        }
    }

    // gui du lieu trong form voi ajax den php
    let formData = new FormData(form); 

    xhr.send(formData);

}