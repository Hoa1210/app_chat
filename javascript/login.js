const form = document.querySelector(".login form"),
continuBtn = form.querySelector(".button input"),
errorText = form.querySelector(".error-txt");
form.onsubmit = (e)=>{
    e.preventDefault();
}


continuBtn.onclick = ()=>{
    // ajax

    let xhr = new XMLHttpRequest(); // Tao doi tuong XML 

    xhr.open("POST", "php/login.php", true);
    xhr.onload = ()=>{
        if(xhr.readyState === XMLHttpRequest.DONE){
            if(xhr.status === 200){
                let data = xhr.response;
                if(data == "Success"){
                    location.href = "users.php";
                }else{
                    errorText.textContent = data;
                    errorText.style.display = "block";
                }
            }
        }
    }

    // gui du lieu trong form voi ajax den php
    let formData = new FormData(form); 

    xhr.send(formData);

}