// when click on the button login
const loginBtn = document.querySelector('.btn-log');

loginBtn.addEventListener("click", () => {
    document.querySelector('form.register').classList.remove('active');
    document.querySelector('form.login').classList.add('active');
});

// when click on register button
const regBtn = document.querySelector('.btn-reg');

regBtn.addEventListener("click", () => {
    document.querySelector('form.register').classList.add('active');
    document.querySelector('form.login').classList.remove('active');
});