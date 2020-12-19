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
          <li><a href="ivykiai.php">Ivykiai</a></li>
                <li><a href="tvarkarastis.php">Tvarkaraštis</a></li>
                <li><a href="profilis.php">Profilis</a></li>
          <li class="active"><a href="administratorius.php">Administratorius</a></li>
          <li><a>Login: <input type="text" placeholder="" size=4></input></li></a>
          <li><a>Pass: <input type="text" placeholder="" size=4></input></li></a>
          <li><a href="pagrindinisPrisijunges.php" type="button2" class="btn"><button>Prisijungti</button></a></li>
              </ul>
            </div>
          </div>

      
	  
	  <div class="container">
      <div class="row">
	  
	   <div class="col-sm-6">
       <div class="w3-container w3-teal">
			<h1>Klientai</h1>
		</div>
		<div class="w3-container w3-white">
			<label for="vartotojai">Pasirinkti vartotoją:</label>

		<select name="vartotojai" id="vartotojai">
		<option value="v1">Adomas</option>
		<option value="v2">Ignas</option>
		<option value="v3">Tautvydas</option>
		</select>
		</div>
		<div class="w3-container w3-red">
			<button type="button" onclick=Paslaugos() class="btn btn-primary">Paslaugos</button>
		</div>
		<div class="w3-container w3-red">
			<button type="button" onclick=Prenumeratos() class="btn btn-primary">Prenumeratos</button>
		</div>
		<div class="w3-container w3-red">
			<button type="button" onclick=Statistika() class="btn btn-primary">Statistika</button>
		</div>
		<div class="w3-container w3-red">
			<button type="button" onclick=PašalintiKlientą() class="btn btn-primary">Pašalinti</button>
		</div>
		</div>
	   
		 <div class="col-sm-6">
		 <div class="w3-container w3-teal">
			<h1>Skelbimai</h1>
		</div>
		<div class="w3-container w3-white">
			<label for="vartotojai">Pasirinkti Skelbimą:</label>

		<select name="vartotojai" id="vartotojai">
		<option value="s1">Skelbimas1</option> 
		<option value="s2">Skelbimas2</option>
		<option value="s3">Skelbimas3</option>
		</select>
		</div>
		<div class="w3-container w3-red">
			<button type="button" onclick=PašalintiSkelbimą() class="btn btn-primary">Pašalinti</button>
		</div>
		<div class="w3-container w3-red">
			<button type="button" onclick=Redaguoti() class="btn btn-primary">Redaguoti</button>
		</div>
		<script>
        function Paslaugos() {
			MyWindow=window.open('klientopaslaugos.php','MyWindow','width=600,height=300'); return false;
        }
        </script>
		<script>
        function Prenumeratos() {
			MyWindow=window.open('klientoprenumeratos.php','MyWindow','width=600,height=300'); return false;
        }
        </script>
		<script>
        function Statistika() {
			MyWindow=window.open('klientoduomenys.php','MyWindow','width=600,height=300'); return false;
        }
        </script>
		<script>
        function Redaguoti() {
			MyWindow=window.open('skelbimoredagavimas.php','MyWindow','width=600,height=300'); return false;
        }
        </script>
		<script>
        function PašalintiKlientą() {
		if(confirm("Ar tikrai norite pašalinti")){
        alert("Klientas pašalintas");
        }
		}
        </script>
		<script>
        function PašalintiSkelbimą() {
		if(confirm("Ar tikrai norite pašalinti")){
        alert("Skelbimas pašalintas");
        }
		}
        </script>
		</div>
	  </div>
	  </div>
	


    </div> <!-- /container -->
  

</body>
</html>