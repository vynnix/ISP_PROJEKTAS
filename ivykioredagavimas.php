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
        </div>
      </div>

      
	  
	  <div class="container">
      <div class="row">
	  
	   <div class="col-sm-6">
       <div class="w3-container w3-teal">
			<h1>Įvykio redagavimas</h1>
		</div>
		<div class="w3-container w3-red">
			<button type="button2" onclick=ivykioRedagavimoPatvirtinimas() class="btn btn-primary">Atnaujinti</button>
		</div>
		<script>
        function ivykioRedagavimoPatvirtinimas() {
        alert("Įvykis redaguotas ");
        MyWindow=window.open('ivykioPerziura.php','MyWindow','width=600,height=300'); return false;
        }
        </script>
		</div>
	  </div>
	  </div>
	


    </div> <!-- /container -->
  

</body>
</html>