<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login Perpusuniga</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <style>
        .login {
            text-align: center;
        }

        .linkRegis {
            text-decoration: none;
            color: white;
        }
        h1 {
            text-align: center;
        }
    </style>
</head>

<?php 
if(isset($_GET['pesan'])){
    if($_GET['pesan']=="gagal"){
        echo "<div class='alert'>Masukkan Username dan Password yang sesuai !</div>";
    }
}
?>

<body>
    <div class="container">
        <div class="center">
           <h1>Login <br> Perpusuniga</h1>
           
            <form action="cekLogin.php" method="POST">
                <div class="txt_field">
                    <input class="input" type="text" id="username" name="username" required>
                    <span></span>
                    <label>Username</label>
                </div>
                <div class="txt_field">
                    <input class="input" name="password" id="password" type="password" required>
                    <span></span>
                    <label>Password</label>
                </div>
                <div class="pass"></div>
                <button type="submit" name="submit" class="input btn btn-primary">Login</button>
                
                <!-- <input type="submit" value="Login"> -->
                <div class="signup_link">
                    Belum mendaftar ? <a href="registrasi.php">Daftar</a>
                </div>
            </form>
        </div>
    </div>


    <!-- <script src="file/script.js"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>

</html>