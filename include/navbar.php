<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

<title>GYM</title>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="pagrindinis.php">BELEKOKS GYMAS</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="pagrindinis.php">Pagrindinis</a>
      </li>
      <li class="nav-item">
        <a class="nav-link"href="prenumeratos.php">Prenumeratos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="paslaugos.php">Paslaugos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="ivykiai.php">Ivykiai</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="tvarkarastis.php">Tvarkaraštis</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="profilis.php">Profilis</a>
      </li>
      <?php
      if(isset($_SESSION["role"])){
      if ($_SESSION["role"] == "admin")
      {
        ?>
      <li class="nav-item">
        <a class="nav-link" href="administratorius.php">Administratorius</a>
      </li>
      
      <?php }} 
      if (isset($_SESSION["role"])){
      ?>
      <form method="post">
<input class="button-danger" type="submit" name="atsijungimas" value="Atsijungti" />
</form>
<?php
if(isset($_POST['atsijungimas'])){
    // remove all session variables
    session_unset();

    // destroy the session
    session_destroy();

    header("Location: pagrindinis.php");
      }}
?>
    </ul>
  </div>
</nav>


</body>
</html>



