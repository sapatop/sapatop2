<head>
	<!--Import Google Icon Font-->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Ranga&display=swap" rel="stylesheet">
	<!--Import materialize.css-->
	<link type="text/css" rel="stylesheet" href="../css/materialize.min.css"  media="screen,projection"/>
	<!-- FontAwesome Icons -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
	<!--Let browser know website is optimized for mobile-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<meta charset="utf-8">
	<title>Sapatop</title>
</head>
<div class="container">
	<h1 style="color: #513f36">Insira a imagem:</h1>
	<form method="POST" action="proc_upload.php" enctype="multipart/form-data">
		<div class="row">
			<div class="col">
				<div class="btn" style="background-color: #513f36">
					<span>Imagem:</span>
					<input type="file" name="arquivo">
				</div>
				<br>
				<br>
				<input type="submit" value="Cadastrar" class="btn" style="background-color: #513f36">
			</div>
		</div>
	</form>
</div>
<?php