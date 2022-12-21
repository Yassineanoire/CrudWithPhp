const loginbtn=document.querySelector(".login");
const inscritbtn =document.querySelector(".sign");
const movebtn=document.querySelector(".move-btn");
const login=document.querySelector(".loginn");
const sign = document.querySelector(".signn");
loginbtn.addEventListener('click',()=>{
movebtn.classList.add("right-btn");
sign.classList.remove("sign-upp");
login.classList.add("login-form");



})

inscritbtn.addEventListener('click',()=>{
    movebtn.classList.remove("right-btn");
    login.classList.remove("login-form");
sign.classList.add("sign-upp");
    
    })