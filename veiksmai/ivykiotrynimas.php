<?php
require_once('../include/mysql_connect.php');

$id = $_GET['ivykio_id'];
$sql = "DELETE FROM ivykiu_registracija WHERE ivykio_id = $id";
mysqli_query($dbc, $sql);

$sql = "DELETE FROM ivykiai WHERE ivykio_id = $id";

mysqli_query($dbc,$sql);

echo "<script>
          alert('Įvykis ištrintas');
    </script>";
echo("<script>window.close();</script>");
?>