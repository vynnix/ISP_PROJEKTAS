<?php

$paskyros_id = $_GET['id'];

require_once('../include/mysql_connect.php');

$query = "DELETE FROM profilis WHERE vartotojo_id=$paskyros_id";
 $response = @mysqli_query($dbc, $query);
 
	if($response){
		header("Location: ../profilis.php");
    } 
    else{
        echo "<script>
          alert('Profilio trynimo klaida');
    </script>";
echo("<script>window.location = '../profilis.php';</script>");
    }
?>