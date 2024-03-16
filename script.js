const wrapper = document.querySelector('.wrapper');
const loginLink = document.querySelector('.login-link');
const registerLink = document.querySelector('.Register-link');
const btnPopup = document.querySelector('.btnLogin-popup');
const Admin= document.querySelector('.admin-link');
registerLink.addEventListener('click',()=>{
    wrapper.classList.add('active');
});

loginLink.addEventListener('click',()=>{
    wrapper.classList.remove('active');
});

btnPopup.addEventListener('click',()=>{
    wrapper.classList.add('active-popup');
});

Admin.addEventListener('click',()=>{
    wrapper.classList.remove('active');
});
