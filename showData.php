<?php
    session_start();
?>
<head>
	<title>
		Projekt 03 - AE
	</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="css/styles.css" rel="stylesheet">
</head>
<body class="container-fluid">
	<form class="form-center" action="pdfCreator.php" method="post">
			<?php
			$_SESSION['username'] = $_POST['username'];
			$_SESSION['password'] = $_POST['password'];
			?>
		<span class="heading">Personenbezogene Daten</span>
        <p class="subtext">Sie können hier Ihre personenbezogenen Daten anfordern.</p>
		<div class="inputs">
			<button type="submit" id="sendButtonShowData" class="btn-submit">Daten anfordern!</button>
		</div>
	</form>
    <form class="form-center" action="sendPDF.php" method="post">
        <button type="submit" name="mailing" class="btn-submit">Daten per Mail anfordern</button>
    </form>
    <form class="form-center" action="logout.php" method="post">
        <button type="submit" name="logout" class="btn-submit btn-logout">Logout</button>
    </form>
</body>