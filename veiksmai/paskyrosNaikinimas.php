<?php

session_start();

$paskyros_id = $_GET['id'];

require_once('../include/mysql_connect.php');


 $query = "DELETE FROM paslaugu_uzsakymai WHERE profilio_id=$paskyros_id";
 $response = @mysqli_query($dbc, $query);

 echo "$query";

 $query = "DELETE FROM prenumeratu_uzsakymai WHERE profilio_id=$paskyros_id";
 $response = @mysqli_query($dbc, $query);
 
 
 echo "------$query---------";

 $query = "DELETE FROM ivykiu_registracija WHERE profilio_id=$paskyros_id";
 $response = @mysqli_query($dbc, $query);


 echo "-------$query------";

$query = "DELETE FROM profilis WHERE id=$paskyros_id";
$response = @mysqli_query($dbc, $query);


echo "-----$query-------";

$_SESSION["profilio_id"]="Nera";

	if($response){
		header("Location: ../profilis.php");
    } 
    else{
      header("Location: ../profilis.php");
    }
?>