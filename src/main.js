const themeBtn = document.querySelector('.navbar__theme-btn');

themeBtn.addEventListener('click', ()=>{
    const body = document.body;
    if(body.className==""){
        body.className = "dark";
    }else{
        body.className = "";
    }
})