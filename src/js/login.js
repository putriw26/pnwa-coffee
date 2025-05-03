const tabLogin = document.querySelector('#tab-login');
const tabRegister = document.querySelector('#tab-login').nextElementSibling;
const form = document.querySelector('#form');
const judul = document.querySelector('#judul-form');

tabLogin.addEventListener('click', function () {
    form.innerHTML = `
        <input class="form-control mx-auto d-block" type="text" autocomplete="off" name="username" placeholder="Username" required><br>
        <input class="form-control mx-auto d-block" type="password" autocomplete="off" name="password" placeholder="Password" required><br>
        <button class="btn btn-soft-pink" name="login">Login</button>
    `;
    judul.textContent = 'LOGIN';
    if (!tabLogin.classList.contains('btn-soft-pink')) {
        tabLogin.classList.replace('btn-outline-soft-pink', 'btn-soft-pink');
        tabRegister.classList.replace('btn-soft-pink', 'btn-outline-soft-pink');
    }
});

tabRegister.addEventListener('click', function() {
    form.innerHTML = `
        <input class="form-control mx-auto d-block" type="text" autocomplete="off" name="username" placeholder="Username" required><br>
        <input class="form-control mx-auto d-block" type="password" autocomplete="off" name="password" placeholder="Password" required><br>
        <input class="form-control mx-auto d-block" type="password" autocomplete="off" name="konfirmasi-password" placeholder="Konfirmasi Password" required><br>
        <button class="btn btn-soft-pink" name="register">Register</button>
    `;
    judul.textContent = 'REGISTER';
    if (!tabRegister.classList.contains('btn-soft-pink')) {
        tabRegister.classList.replace('btn-outline-soft-pink', 'btn-soft-pink');
        tabLogin.classList.replace('btn-soft-pink', 'btn-outline-soft-pink');
    }
});
