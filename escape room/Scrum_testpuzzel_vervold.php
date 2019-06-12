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
	
			<?php
				if (isset($_POST['antwoord'])){
					if ($_POST['wachtwoord'] === "museumnacht"){
						echo "<h3>Het antwoord is juist! Bij de volgende puzzel los je een rebus op, de uitkomst van de vorige puzzel + de uitkomst van de rebus is het antwoord  dat ingevuld moet worden<br></h3>";
					}
				}
			?>
			
				<form method="post" action="Scrum_testpuzzel_vervold.php">
		Het antwoord is: <input type="password" id="myInput" name="wachtwoord" pattern="^(museumnacht).*$"
								oninvalid="this.setCustomValidity('Dat is het onjuiste antwoord.')"
    							oninput="this.setCustomValidity('')" placeholder="Vul hier je woord in." required><br>
						<input type="checkbox" onclick="myFunction()">Laat woord zien.<br>
						<input type="submit" value="Antwoord" name="antwoord">
					</form>
			
			<h3>De uitkomst van deze Rebus is aan het begin van delen.</h3>
			
			<div id="content2">
				<img src="Rebus_EscapeRoom.PNG" alt="...">
			</div>
	
	
	
	
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