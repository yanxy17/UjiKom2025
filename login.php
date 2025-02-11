<?php
session_start(); // Mulai sesi untuk menyimpan data user
include 'koneksi.php'; // Pastikan koneksi ke database benar
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</head>
<style>
        <style>
        * {
            margin: 0;
            padding: 0;
            font-family: "Trebuchet MS", Arial, sans-serif;
        }

        section {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            width: 100%;
            background: url("backrond.jpeg") no-repeat center/cover;
        }

        .form-box {
            position: relative;
            width: 400px;
            height: 450px;
            background: transparent;
            border-radius: 20px;
            backdrop-filter: blur(25px) brightness(90%);
            display: flex;
            justify-content: center;
            align-items: center;
        }

        h2 {
            font-size: 2em;
            color: #fff;
            text-align: center;
        }

        .inputbox {
            position: relative;
            margin: 30px 0;
            width: 310px;
            border-bottom: 2px solid #fff;
        }

        .inputbox label {
            position: absolute;
            top: 50%;
            left: 5px;
            transform: translateY(-50%);
            color: #fff;
            font-size: 1em;
            pointer-events: none;
            transition: 0.5s;
        }

        input:focus~label,
        input:valid~label {
            top: -5px;
        }

        .inputbox input {
            width: 100%;
            height: 50px;
            background: transparent;
            border: none;
            outline: none;
            font-size: 1em;
            padding: 0 35px 0 5px;
            color: #fff;
        }

        .inputbox ion-icon {
            position: absolute;
            right: 8px;
            color: #fff;
            font-size: 1.2em;
            top: 20px;
        }

        .forget {
            margin: -10px 0 17px;
            font-size: 0.9em;
            color: #fff;
            display: flex;
            justify-content: space-between;
        }

        .forget label input {
            margin-right: 3px;
        }

        .forget a {
            color: #fff;
            text-decoration: none;
        }

        .forget a:hover {
            text-decoration: underline;
        }

        button {
            width: 100%;
            height: 40px;
            border-radius: 40px;
            background-color: #fff;
            border: none;
            outline: none;
            cursor: pointer;
            font-size: 1em;
            font-weight: 600;
        }

        .register {
            font-size: 0.9em;
            color: #fff;
            text-align: center;
            margin: 25px 0 10px;
        }

        .register p a {
            text-decoration: none;
            color: #fff;
            font-weight: 600;
        }

        .register p a:hover {
            text-decoration: underline;
        }

        .error {
            color: red;
            text-align: center;
            margin-bottom: 10px;
        }

        @media screen and (max-width: 480px) {
            .form-box {
                width: 100%;
                border-radius: 0px;
            }
        }
    </style>
</style>
<body>
<section>
    <div class="form-box">
        <div class="form-value">
            <h2>Login</h2>

            <form action="index.php" method="POST">
                <div class="inputbox">
                    <input type="email" name="email" required>
                    <label>Masukkan Email</label>
                    <ion-icon name="mail-outline"></ion-icon>
                </div>

                <div class="inputbox">
                    <input type="password" name="password" required>
                    <label>Masukkan Password</label>
                    <ion-icon name="lock-closed-outline"></ion-icon>
                </div>

                <div class="forget">
                    <a href="#">Lupa Password?</a>
                </div>

                <button type="submit">Login</button>

                <div class="register">
                    <p>Belum punya akun? <a href="register.html">Daftar di sini</a></p>
                </div>
            </form>
        </div>
    </div>
</section>

</body>
</html>
