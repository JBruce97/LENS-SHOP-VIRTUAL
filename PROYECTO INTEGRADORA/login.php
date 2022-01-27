<?php 
include "config.php";
session_start();
error_reporting(0);

if(isset($_SESSION["username"])){
    header("Location: panel.php");
}


if(isset($_POST["submit"])){
    $email=$_POST["email"];
    $password=md5($_POST["password"]);
    
    $sql="SELECT * FROM users WHERE email='$email' AND password='$password'";
    $result= mysqli_query($conn, $sql);
    
    if($result->num_rows > 0){
        $row = mysqli_fetch_assoc($result);
        $_SESSION['username'] = $row['username'];
        header("Location: panel.php");
    }else{
        echo "<script>alert('La contraseña o el email son incorrectos')</script>";
    }
    
    
}


?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VISUAL QUALITY</title>


    <link rel="stylesheet" href="STYLE.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="Normalize.css">


    <title>Iniciar sesión</title>
</head>

<body>
    <section class="prelogin">

        <div class="login-box">

            <img class="avatar" src="logoV.png" alt="logo de VISUAL">


            <form action="" method="POST" class="login-email">
                <p class="login-text" style="font-size: 2rem; font-weight: 800;">Iniciar sesion</p>
                <div class="input">
                    <input type="email" placeholder="Email" name="email" value="<?php echo $email; ?>" required>
                </div>
                <div class="input">
                    <input type="password" placeholder="Contraseña" name="password"
                        value="<?php echo $_POST['password']; ?>" required>
                </div>
                <div class="input" style="text-aling:center">
                    <button name="submit" class="btn ">Acceder</button>
                </div>

                <p class="login-register-text">¿No tienes cuenta? <a href="register.php">Regístrate aquí</a>.</p>
                <p class="login-register-text">O si lo prefieres <a
                        href="panel.php">Accede sin
                        registrarte</a>.</p>


            </form>
        </div>
    </section>
</body>

</html>