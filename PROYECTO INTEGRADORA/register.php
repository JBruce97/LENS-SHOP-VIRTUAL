<?php
include "config.php";
error_reporting(0);
session_start();

if(isset($_SESSION["username"]))
{
    header("Location: panel.php");
}

if(isset($_POST["submit"])){
    $username=$_POST["username"];
    $email=$_POST["email"];
    $password= md5($_POST["password"]);
    $cpassword= md5 ($_POST["cpassword"]);
     
    if($password==$cpassword){
        $sql="SELECT * FROM users WHERE email='$email'";
        $result= mysqli_query($conn, $sql);
        if(!$result->num_rows > 0){
            
            $sql="INSERT INTO users (username,email,password)
            VALUE ('$username', '$email', '$password')";
            $result=mysqli_query($conn,$sql);
            
            if($result){
                echo "<script>alert('Usuario registrado con éxito')</script>";
                $username="";
                $email="";
                $_POST["password"]="";
                $_POST["cpassword"]="";
                
            }else{
                echo "<script>alert('Hay un error')</script>";
            }
             
        }else{
            echo "<script>alert('El correo ya existe')</script>";
        }
    }else{
            echo "<script>alert('Las contraseñas no coinciden')</script>";        
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


    <link rel="stylesheet" href="registro.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">




    <title>Formulario de registro</title>
</head>

<body>

    <section class="prelogin">

        <div class="login-box">

            <img class="avatar" src="logoV.png" alt="logo de VISUAL">

            <form action="" method="POST" class="login-email">
                <p class="login-text" style="font-size: 2rem; font-weight: 800; font-top:100;">Registrate</p>
                <div class="input-group">
                    <input type="text" placeholder="Usuario" name="username" value="<?php echo $username; ?>" required>
                </div>
                <div class="input">
                    <input type="email" placeholder="Email" name="email" value="<?php echo $email; ?>" required>
                </div>
                <div class="input">
                    <input type="password" placeholder="Contraseña" name="password"
                        value="<?php echo $_POST['password']; ?>" required>
                </div>
                <div class="input">
                    <input type="password" placeholder="Confirmar contraseña" name="cpassword"
                        value="<?php echo $_POST['cpassword']; ?>" required>
                </div>
                <div class="input">

                    <button name="submit" class="btn">Registrarme</button>
                </div>
        </div>
        <div class="input">
            <a href="panel.php">
                <p style="text-align:center">Iniciar sesion
            </a>
        </div>

        </form>
        </div>
</body>

</html>