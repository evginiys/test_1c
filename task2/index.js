let button=document.getElementById('button');
button.addEventListener("click",(e)=>{
    let fio=document.getElementById('fio');
    let phone=document.getElementById('phone');
    if(fio.value == ""){
        fio.classList.add('alert-danger');
        e.preventDefault();
    }
    if(phone.value == ""){
        phone.classList.add('alert-danger');
        e.preventDefault();
    }
});