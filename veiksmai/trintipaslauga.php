<?php
require_once('../include/mysql_connect.php');

$id = $_GET['id'];

$sql = "DELETE FROM paslaugos WHERE id = $id";

mysqli_query($dbc,$sql);

echo "<script>
          alert('Paslauga istrinta');
    </script>";
echo("<script>window.location = '../paslaugos.php';</script>");

?>