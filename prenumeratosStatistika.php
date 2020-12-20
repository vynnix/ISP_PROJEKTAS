<?php
require_once('./include/mysql_connect.php');

$id = $_GET['id'];

$sql="SELECT * FROM prenumeratos WHERE id=$id";
$results=mysqli_query($dbc,$sql);

$row=mysqli_fetch_assoc($results);
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<title>GYM</title>
</head>
<body>
<?php
 echo($row['pavadinimas']);

 $query= "SELECT * FROM prenumeratu_uzsakymai where prenumeratos_id = '" .$id."'";
    $results=mysqli_query($dbc, $query);
    $affected_rows = mysqli_affected_rows($dbc);
    $row=mysqli_fetch_array($results);
    echo($affected_rows)
?>
</body>
</html>