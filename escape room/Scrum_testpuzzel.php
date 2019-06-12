<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Naamloos document</title>
	<link href="opmaak_project.css" type="text/css" rel="stylesheet">
	<link href="../Scrum/password_unmasked.js" type="text/javascript" rel="stylesheet">
</head>

<body>
	
	<container id="container">
		<div id=content>
	<form method="post" action="Scrum_testpuzzel_vervold.php">
		Het antwoord is: <input type="password" id="myInput" name="wachtwoord" pattern="^(museumnacht).*$"
								oninvalid="this.setCustomValidity('Dat is het onjuiste antwoord.')"
    							oninput="this.setCustomValidity('')" placeholder="Vul hier je woord in." required><br>
		<input type="checkbox" onclick="myFunction()">Laat woord zien.<br>
	<input type="submit" value="Antwoord" name="antwoord">
	</form>
	
	
	
	
	
	
	</div>
	</container>
	
	
	<script>
	function myFunction() {
  var x = document.getElementById("myInput");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
	</script>
	
</body>
</html>