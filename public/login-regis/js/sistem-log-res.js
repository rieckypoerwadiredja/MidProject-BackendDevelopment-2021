// ketika click button login
const loginBtn = document.querySelector('.btn-log');

loginBtn.addEventListener("click", () => {
    document.querySelector('form.register').classList.remove('active');
    document.querySelector('form.login').classList.add('active');
});

// ketika click register button
const regBtn = document.querySelector('.btn-reg');

regBtn.addEventListener("click", () => {
    document.querySelector('form.register').classList.add('active');
    document.querySelector('form.login').classList.remove('active');
});


// function hapus data from input
function clearInput() {
    const dataInputhtml = document.querySelectorAll('input');


    dataInputhtml.forEach(data => {
        if (data.className === 'submit') {
            // kalo datanya ada submit jgn hapus value
            // langsung keluar aja
            return false;
        }
        // klo datanya bkn submit hapus value
        data.value = '';
    });
}

// dapatkan data dari form register
const reg = document.querySelector('form.register');

reg.addEventListener("submit", (e) => {
    e.preventDefault(); // biar ga refresh
    const email = reg.email.value;
    const nama = reg.nama.value;
    const password = reg.password.value;

    // hapus data di form
    clearInput();

    console.log(email, nama, password);

    return email, nama, password;
});

// dapatkan data dari form login
const log = document.querySelector('form.login');

log.addEventListener("submit", (e) => {
    e.preventDefault(); // biar ga refresh
    const email = log.email.value;
    const password = log.password.value;

    // hapus data di form
    clearInput();

    console.log(email, password);
    return email, password;
});
