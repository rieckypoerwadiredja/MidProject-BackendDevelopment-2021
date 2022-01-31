// --------------------------- NAVBAR ANOMATION -------------------------------


// ------------------ Animation di list navbar
const navLists = document.querySelectorAll('.list');

navLists.forEach((navList) => {
    setTimeout(() => {
        navList.classList.add('active-ani');
    });
});

const burger = document.querySelector('.container-burger-icon .burger-icon');

setTimeout(() => {
    burger.classList.add('active-ani');
});

const closeNav = document.querySelector('.container-burger-icon .close-icon')


setTimeout(() => {
    //  -------------------- logo Animation 
    const logo = document.querySelector('.nav-bar .logo img');
    logo.classList.add("active-ani");


    // --------------------- btn Aninimation
    const btnNavBar = document.querySelector('.btn-nav button');
    btnNavBar.classList.add('active-ani');
});




// --------------------------------------- CLICK

closeNav.addEventListener("click", () => {
    burger.classList.add('active');
    closeNav.classList.remove('active');
});

burger.addEventListener("click", () => {
    burger.classList.remove('active');
    closeNav.classList.add('active');
});