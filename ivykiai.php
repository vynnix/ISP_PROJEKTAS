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
          <a class="navbar-brand" href="pagrindinis.php">BELEKOKS GYMAS</a>
          <ul class="nav navbar-nav">
            <li><a href="pagrindinis.php">Pagrindinis</a></li>
            <li><a href="prenumeratos.php">Prenumeratos</a></li>
            <li><a href="paslaugos.php">Paslaugos</a></li>
            <li class="divider-vertical"></li>
      <li class="active"><a href="ivykiai.php">Ivykiai</a></li>
            <li><a href="tvarkarastis.php">Tvarkaraštis</a></li>
            <li><a href="profilis.php">Profilis</a></li>
      <li><a href="administratorius.php">Administratorius</a></li>
      <li><a>Login: <input type="text" placeholder="" size=4></input></li></a>
      <li><a>Pass: <input type="text" placeholder="" size=4></input></li></a>
      <li><a href="pagrindinisPrisijunges.php" type="button2" class="btn"><button>Prisijungti</button></a></li>
          </ul>
        </div>
      </div>

      <div class="container">
        <div>
       <button type="button"  onClick="MyWindow=window.open('ivykioSukurimas.php','MyWindow','width=600,height=300'); return false;"class="btn btn-danger">Įvykio sukūrimas</button>
        </div>
	  
	 
      <div class="row">
	  
	   <div class="col-sm-6">
       <div class="w3-container w3-teal">
			<h1>Zumba</h1>
		</div>
		<div class="w3-container w3-white">
			<p >Geriausa šokių pamoka</p>
			<p>Juozas Juozaitis</p>
			<p>Kaina 10 pinigu</p>
		</div>
		<div class="w3-container w3-red">
			<button type="button" onclick=ivykioPridejimas() class="btn btn-primary">Pridėti į tvarkaraštį</button>
        </div>
        <div class="w3-container w3-red">
			<button type="button2" onclick=paslaugosTrinimas() class="btn btn-primary">Naikinti įvykį</button>
        </div>
        <div class="w3-container w3-red">
			<button type="button13" onClick="MyWindow=window.open('ivykioPerziura.php','MyWindow','width=600,height=300'); return false;"class="btn btn-primary">Peržiūrėti įvykį</button>
		</div>
        <div class="w3-container w3-red">
			<button type="button13" onClick="MyWindow=window.open('ivykioredagavimas.php','MyWindow','width=600,height=300'); return false;"class="btn btn-primary">Redaguoti įvykį</button>
		</div>
		</div>
	   
		 <div class="col-sm-6">
       <div class="w3-container w3-teal">
			<h1>Yoga</h1>
		</div>
		<div class="w3-container w3-white">
			<p >Jogos trenirtuotė</p>
			<p>Petras Petraitis</p>
			<p>Kaina 10 pinigu</p>
		</div>

		<div class="w3-container w3-red">
			<button type="button" onclick=ivykioPridejimas() class="btn btn-primary">Pridėti į tvarkaraštį</button>
        </div>
        <div class="w3-container w3-red">
			<button type="button2" onclick=paslaugosTrinimas() class="btn btn-primary">Naikinti įvykį</button>
        </div>
        <div class="w3-container w3-red">
			<button type="button13" onClick="MyWindow=window.open('ivykioPerziura.php','MyWindow','width=600,height=300'); return false;"class="btn btn-primary">Peržiūrėti įvykį</button>
		</div>
        <div class="w3-container w3-red">
			<button type="button13" onClick="MyWindow=window.open('ivykioredagavimas.php','MyWindow','width=600,height=300'); return false;"class="btn btn-primary">Redaguoti įvykį</button>
		</div>

		</div>
      
        <div class="col-sm-6">
            <div class="w3-container w3-teal">
                 <h1>Jujitsu</h1>
             </div>
             <div class="w3-container w3-white">
                 <p >Geriausa jujitsu pamoka</p>
                 <p>Juozas Juozaitis</p>
                 <p>Kaina 10 pinigu</p>
             </div>
             <div class="w3-container w3-red">
                <button type="button" onclick=ivykioPridejimas() class="btn btn-primary">Pridėti į tvarkaraštį</button>
            </div>
            <div class="w3-container w3-red">
                <button type="button2" onclick=paslaugosTrinimas() class="btn btn-primary">Naikinti įvykį</button>
            </div>
            <div class="w3-container w3-red">
                <button type="button13" onClick="MyWindow=window.open('ivykioPerziura.php','MyWindow','width=600,height=300'); return false;"class="btn btn-primary">Peržiūrėti įvykį</button>
            </div>
            <div class="w3-container w3-red">
                <button type="button13" onClick="MyWindow=window.open('ivykioredagavimas.php','MyWindow','width=600,height=300'); return false;"class="btn btn-primary">Redaguoti įvykį</button>
            </div>
             </div>
            
              <div class="col-sm-6">
            <div class="w3-container w3-teal">
                 <h1>Abs treniruotė</h1>
             </div>
             <div class="w3-container w3-white">
                 <p >Geriausia abs treniruotė</p>
                 <p>Tankas Tankaitis</p>
                 <p>Kaina 10 pinigu</p>
             </div>
     
             <div class="w3-container w3-red">
                <button type="button" onclick=ivykioPridejimas() class="btn btn-primary">Pridėti į tvarkaraštį</button>
            </div>
            <div class="w3-container w3-red">
                <button type="button2" onclick=paslaugosTrinimas() class="btn btn-primary">Naikinti įvykį</button>
            </div>
            <div class="w3-container w3-red">
                <button type="button13" onClick="MyWindow=window.open('ivykioPerziura.php','MyWindow','width=600,height=300'); return false;"class="btn btn-primary">Peržiūrėti įvykį</button>
            </div>
            <div class="w3-container w3-red">
                <button type="button13" onClick="MyWindow=window.open('ivykioredagavimas.php','MyWindow','width=600,height=300'); return false;"class="btn btn-primary">Redaguoti įvykį</button>
            </div>
            <br/>
            <br/>
             </div>
    
    </div>
      
      
      
    
    </div>
	


    </div> <!-- /container -->
  
	<script>
        function ivykioPridejimas() {
        alert("Įvykis pridėtas");
        MyWindow=window.open('ivykioPerziura.php','MyWindow','width=600,height=300'); return false;
        }
        function paslaugosTrinimas() {
  if(confirm("Ar tikrai norite istrinti pasirinkta skelbima?")){
    alert("skelbimas istrintas");
  }}
        </script>
</body>
</html>