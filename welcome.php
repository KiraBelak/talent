<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body{ font: 14px sans-serif; text-align: center; }
    </style>
</head>

<body>
<section>
  <span class=pato>Farla Investments</span>
</section>
<header>
  <h1>Hola <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>.</h1>
  <nav>
    <a href="agricultor.php">Agricultor</a>
    <a href="inversor.php">Invertir</a>
    <a href="logout.php"> Cerrar sesión</a>
  </nav>
</header>
<article>
  <h1>¿Que hacemos?</h1>
  <p>Farla investment’s es una compañía inspirada en acciones de agricultura, nuestro cliente potencial es el agricultor y el usuario es la población que quiera adquirir las acciones de las producciones de nuestro cliente potencial.</p>

  <br>

  <h1>Misión</h1>
  <p>Reducir la inflación y aumentar la adquisición de bienes de la población.</p>
</article>

   



</body>

<!--<body>
    
    <h1 class="my-5">Hi, <b><?php echo htmlspecialchars($_SESSION["nombre"]); ?></b>. Welcome to our site.</h1>
    <p>
        <a href="reset-password.php" class="btn btn-warning">Reset Your Password</a>
        <a href="logout.php" class="btn btn-danger ml-3">Sign Out of Your Account</a>
    </p>
</body>-->
</html>