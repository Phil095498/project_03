<head>
	<?php
	session_start();
	?>
	<title>
		Projekt 03 - AE
	</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="css/styles.css" rel="stylesheet">
	<link href="css/grid.css" rel="stylesheet">

</head>
<body class="container-fluid">
	<form class="form-center" action="pdfCreator.php" method="post">
			<?php
			$_SESSION['username'] = $_POST['username'];
			$_SESSION['password'] = $_POST['password'];
			?>
		<span class="row heading">Personenbezogene Daten</span>
        <span class="row subtext">Sie können hier Ihre personenbezogenen Daten anfordern oder löschen.</span>
		<div class="inputs row">
			<button type="submit" id="sendButtonShowData" class="btn-submit">Daten anfordern!</button>
		</div>
	</form>
    <form class="form-center" action="deleteData.php" method="post">
        <button type="submit" id="deleteButtonData" class="btn-submit">Daten löschen!</button>
    </form>
    <form class="form-center" action="index.php" method="post">
        <button type="submit" name="logout" class="btn-submit">Logout</button>
    </form>
</body>