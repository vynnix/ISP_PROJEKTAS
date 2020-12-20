<?php

require_once('./include/mysql_connect.php');

				if($_POST !=null)
			{
			   $kaina = $_POST['kaina'];
			   $stazasnuo =$_POST['stazasnuo'];
					$stazasiki =$_POST['stazasiki'];
			   $ivykiainuo = $_POST['ivykiainuo'];
					$ivykiaiiki = $_POST['ivykiaiiki'];
				$galianuo = $_POST['galianuo'];
					$galiaiki = $_POST['galiaiki'];
			}

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
<div class="container-fixed">
      
<?php include('./include/navbar.php'); ?>

	  
	  <div class="container">
	  <div class="w3-container w3-red">
		<button type="button3" href="#" class="btn btn-primary" onClick="MyWindow=window.open('paslaugoskurimas.php','MyWindow','width=600,height=300'); return false;">Sukurti paslauga</button>
		</div>
      <div class="row">
	  
	   <div class="col-sm-6">
       <div class="w3-container w3-teal">
			<h1>Paslauga: privati treniruote</h1>
		</div>
		<div class="w3-container w3-white">
			<p>Ieina</p>
			<p>Treneris</p>
			<p>Kaina 500 pinigu</p>
		</div>
		<div class="w3-container w3-red">
		<button type="button3" href="#" class="btn btn-primary" onClick="MyWindow=window.open('paslaugosredagavimas.php','MyWindow','width=600,height=300'); return false;">Redaguoti paslauga</button>
		</div>
		<div class="w3-container w3-red">
		<button type="button3" href="#" class="btn btn-primary" onClick="MyWindow=window.open('paslaugosataskaita.php','MyWindow','width=600,height=300'); return false;">Paslaugos ataskaita</button>
		</div>
		<div class="w3-container w3-red">
			<button type="button" onclick=uzsakymoPatvirtinimas() class="btn btn-primary">Užsisakyti</button>
		</div>
		<div class="w3-container w3-red">
			<button type="button" onclick=paslaugosTrinimas() class="btn btn-primary">Naikinti paslauga</button>
		</div>
		</div>
	   
		 <div class="col-sm-6">
       <div class="w3-container w3-teal">
			<h1>Paslauga: mitybos planas</h1>
		</div>
		<div class="w3-container w3-white">
			<p>Ieina</p>
			<p>Individualus mitybos planas</p>
			<p>Ivarios rekomendacijos</p>
			<p>Kaina 120 pinigu</p>
		</div>
		<div class="w3-container w3-red">
		<button type="button3" href="#" class="btn btn-primary" onClick="MyWindow=window.open('paslaugosredagavimas.php','MyWindow','width=600,height=300'); return false;">Redaguoti paslauga</button>
		</div>
		<div class="w3-container w3-red">
		<button type="button3" href="#" class="btn btn-primary" onClick="MyWindow=window.open('paslaugosataskaita.php','MyWindow','width=600,height=300'); return false;">Paslaugos ataskaita</button>
		</div>
		<div class="w3-container w3-red">
			<button type="button2" onclick=uzsakymoPatvirtinimas() class="btn btn-primary">Užsisakyti</button>
		</div>
		<div class="w3-container w3-red">
			<button type="button" onclick=paslaugosTrinimas() class="btn btn-primary">Naikinti paslauga</button>
		</div>
		<script>
        function uzsakymoPatvirtinimas() {
        alert("uzsakymas pavykes");
        }
		
		function paslaugosTrinimas() {
  if(confirm("Ar tikrai norite istrinti pasirinkta skelbima?")){
    alert("skelbimas istrintas");
  }}
        </script>
		</div>
	  </div>
	  </div>
	


    </div> <!-- /container -->
  

</body>
</html>