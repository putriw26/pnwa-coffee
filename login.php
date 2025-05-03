<?php
session_start();

require_once "function.php";

if (isset($_POST["login"])) {
    $login = login_akun();
} else if (isset($_POST["register"])) {
    $register = register_akun();

    if ($register > 0) {
        echo "<script>
            alert('Berhasil Registrasi!');
            location.href = 'login.php'; 
        </script>";
    } else {
        echo "<script>
            alert('Gagal Registrasi!');
            location.href = 'login.php';
        </script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./src/css/bootstrap-5.2.0/css/bootstrap.min.css">
    <title>Login</title>
    <style>
        .btn-soft-pink {
            background-color: #fbb1bd !important;  
            border-color: #fbb1bd !important;      
            color: white !important;               
        }

        .btn-soft-pink:hover {
            background-color: #f99fac !important;  
            border-color: #f99fac !important;      
        }

        .btn-outline-soft-pink {
            background-color: white !important;  
            border-color: #fbb1bd !important;   
            color: #fbb1bd !important;           
        }

        .btn-outline-soft-pink:hover {
            background-color: #fbb1bd !important; 
            border-color: #f99fac !important;    
            color: white !important;              
        }

        .btn-alert {
            background-color: #fbb1bd !important;  
            border-color: #fbb1bd !important;
            color: white !important;
        }

        .btn-alert:hover {
            background-color: #f99fac !important;  
            border-color: #f99fac !important;
            color: white !important;
        }

        .btn-login-register {
            background-color: #fbb1bd !important;  
            border-color: #fbb1bd !important;      
            color: white !important;               
        }

        .btn-login-register:hover {
            background-color: #f99fac !important;  
            border-color: #f99fac !important;      
        }

        /* Styling Tab */
        .tab-btn {
            width: 190px;
        }

        .tab-btn.active {
            background-color: #fbb1bd !important;
            border-color: #fbb1bd !important;
            color: white !important;
        }
    </style>
</head>
<body class="bg-light">
    <div class="container">
        <div id="judul-form" class="text-center h1 mt-5">LOGIN</div><br>
        <div class="mx-auto rounded p-5" style="width: 500px; background-color: white;">
            <!-- Tab Login & Register -->
            <div class="d-flex justify-content-between">
                <button id="tab-login" class="btn btn-outline-soft-pink fw-bold tab-btn">LOGIN</button>
                <button id="tab-register" class="btn btn-outline-soft-pink fw-bold tab-btn">REGISTER</button>
            </div><br>

            <!-- Jika Username & Password Login Salah -->
            <?php if (isset($_POST["login"])) {
                if (!$login) { ?>
                    <div class="alert alert-danger alert-dismissible">
                        * username/password salah
                        <button class="btn-close" data-bs-dismiss="alert"></button>
                    </div>
            <?php } } ?>

            <!-- Form Login -->
            <form id="form" action="login.php" method="POST">
                <input class="form-control mx-auto d-block" type="text" autocomplete="off" name="username" placeholder="Username" required><br>
                <input class="form-control mx-auto d-block" type="password" autocomplete="off" name="password" placeholder="Password" required><br>
                <button class="btn btn-soft-pink" name="login">Login</button>
            </form>

            <!-- Form Register, jika tab REGISTER diklik -->
            <form id="form-register" action="login.php" method="POST" style="display: none;">
                <input class="form-control mx-auto d-block" type="text" autocomplete="off" name="username" placeholder="Username" required><br>
                <input class="form-control mx-auto d-block" type="password" autocomplete="off" name="password" placeholder="Password" required><br>
                <input class="form-control mx-auto d-block" type="password" autocomplete="off" name="konfirmasi-password" placeholder="Konfirmasi Password" required><br>
                <button class="btn btn-soft-pink" name="register">Register</button>
            </form>
        </div>
    </div>

    <script src="./src/css/bootstrap-5.2.0/js/bootstrap.bundle.min.js"></script>
    <script>
        const tabLogin = document.querySelector('#tab-login');
        const tabRegister = document.querySelector('#tab-register');
        const form = document.querySelector('#form');
        const formRegister = document.querySelector('#form-register');
        const judul = document.querySelector('#judul-form');

        tabLogin.addEventListener('click', function () {
            form.style.display = 'block';
            formRegister.style.display = 'none';
            judul.textContent = 'LOGIN';

            tabLogin.classList.add('active');
            tabRegister.classList.remove('active');
        });

        tabRegister.addEventListener('click', function() {
            form.style.display = 'none';
            formRegister.style.display = 'block';
            judul.textContent = 'REGISTER';

            tabRegister.classList.add('active');
            tabLogin.classList.remove('active');
        });

        // Menampilkan tab login secara default
        tabLogin.click();
    </script>
</body>
</html>
