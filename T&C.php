<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@300&display=swap" rel="stylesheet">
	<style type="text/css">	
		*{
			font-family: 'Merriweather', serif;

		}
		.div{
			margin:auto;
			margin-top:30px;
			width:50%;	
		}
	</style>
</head>
<body>
	<?php 
    	require "header.php";
    	nav();
	?>
	<div class="div">
		<h2>Terms And Conditions</h2>
		<ol>
			<li>Books that are rented should not tampered.</li>
			<li>Shipping companies shall be responsible for delay.</li>
			<li>Delay in Return beyond a week will entail fines.</li>
			<li>spoiling the quality of rented books is not permitted like writing with pen etc.</li>
		</ol><br><br><br><br><br>
		<br><input type="checkbox" name="t&c">I have read and accepted the terms and conditions stated bove.</input><br><br>
		<button type="submit" value="Process" class="btn btn-primary">Process</button>
		<button type="submit" value="Denied" class="btn btn-warning">Denied</button>
	</div>
	<div>
		<?php 
			fut();
		?>
	</div>
</body>
</html>