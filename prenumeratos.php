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
      
      <div class="navbar navbar-default">
        <div class="container">
          <a class="navbar-brand" href="#">BELEKOKS GYMAS</a>
          <ul class="nav navbar-nav">
            <li><a href="pagrindinis.php">Pagrindinis</a></li>
            <li class="active"><a href="prenumeratos.php">Prenumeratos</a></li>
            <li><a href="paslaugos.php">Paslaugos</a></li>
            <li class="divider-vertical"></li>
			<li><a href="ivykiai.php">Ivykiai</a></li>
            <li><a href="tvarkarastis.php">Tvarkaraštis</a></li>
            <li><a href="profilis.php">Profilis</a></li>
			<li><a href="administratorius.php">Administratorius</a></li>
			<li><a>Login: <input type="text" placeholder="" size=4</input></li></a>
			<li><a>Pass: <input type="text" placeholder="" size=4</input></li></a>
			<li><a href="pagrindinisPrisijunges.php" type="button2" class="btn"><button>Prisijungti</button></a></li>
          </ul>
        </div>
      </div>
	  
	  
	  <div class="container">
	  <div>
     <button type="button"  onClick="MyWindow=window.open('prenumeratossukurimas.php','MyWindow','width=600,height=300'); return false;"class="btn btn-danger">Prenumeratos sukurimas</button>
	  </div>
      <div class="row">
	  
	   <div class="col-sm-6">
       <div class="w3-container w3-teal">
			<h1>Prenumerata: GYM+</h1>
		</div>
		<div class="w3-container w3-white">
			<p >Ieina:</p>
			<p>Neribotas apsilankimas sporto klube</p>
			<p>Kaina:60$</p>
		</div>
		<div class="w3-container w3-red">
			<button type="button11" onclick=uzsakymoPatvirtinimas() class="btn btn-primary">Užsisakyti</button>
		</div>
		<div class="w3-container w3-red">
			<button type="button12" onclick=prenumeratosTrinimas() class="btn btn-primary">Ištrinti prenumeratą</button>
		</div>
		<div class="w3-container w3-red">
			<button type="button13" onClick="MyWindow=window.open('prenumeratosredagavimas.php','MyWindow','width=600,height=300'); return false;"class="btn btn-primary">Redaguoti prenumeratą</button>
		</div>
		<div class="w3-container w3-red">
			<button type="button14"  onClick="MyWindow=window.open('prenumeratosataskaita.php','MyWindow','width=600,height=300'); return false;"class="btn btn-primary">Prenumeratos ataskaita</button>
		</div>
		</div>
	   
		 <div class="col-sm-6">
       <div class="w3-container w3-teal">
			<h1>Prenumerata: GYM++</h1>
		</div>
		<div class="w3-container w3-white">
			<p >Ieina:</p>
			<p>Neribotas apsilankimas sporto klube + rankšluostis</p>
			<p>Kaina:120$</p>
		</div>

		<div class="w3-container w3-red">
			<button type="button22" onclick=uzsakymoPatvirtinimas() class="btn btn-primary">Užsisakyti</button>
		</div>
		<div class="w3-container w3-red">
			<button type="button22" onclick=prenumeratosTrinimas() class="btn btn-primary">Ištrinti prenumeratą</button>
		</div>
		<div class="w3-container w3-red">
			<button type="button23"  onClick="MyWindow=window.open('prenumeratosredagavimas.php','MyWindow','width=600,height=300'); return false;"class="btn btn-primary">Redaguoti prenumeratą</button>
		</div>
		<div class="w3-container w3-red">
			<button type="button24"  onClick="MyWindow=window.open('prenumeratosataskaita.php','MyWindow','width=600,height=300'); return false;"class="btn btn-primary">Prenumeratos ataskaita</button>
		</div>
		
		</div>
	  </div>
	  </div>
	


    </div> <!-- /container -->
<script>
        function uzsakymoPatvirtinimas() {
        alert("uzsakymas pavykes");
        }
		function prenumeratosTrinimas() {
    if(confirm("Ar tikrai norite istrintiprenumeratą?")){
    alert("Prenumerata istrinta");
  }}
</script>  



</body>
</html>