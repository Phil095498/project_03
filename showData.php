<head>
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
		<span class="row heading">Personenbezogene Daten abfragen</span>
		<span class="row subtext">Bitte registrieren Sie sich mit ihren persönlichen Daten!</span>
		<div class="inputs row">
			<div class="row margin-b15">
				<span class="col-sm-12">Geben Sie <strong>hier</strong> ihren Nachnamen ein!</span>
				<div  class="col-sm-10">
					<input  type="text"  placeholder="Nachname"  name="name" required>
				</div>
			</div>

			<div class="row margin-b15">
				<span class="col-sm-12">Geben Sie <strong>hier</strong> ihren Vornamen ein!</span>
				<div  class="col-sm-10">
					<input  type="text" placeholder="Vorname"  name="vorname" required>
				</div>
			</div>

			<div class="row margin-b15">
				<span class="col-sm-12">Geben sie <strong>hier</strong> ihre Postleitzahl ein!</span>
				<div  class="col-sm-10">
					<input  type="number" placeholder="Postleitzahl"  name="zip" required>
				</div>
			</div>
			<div class="row margin-tb-15">
				<input type="checkbox" onchange="document.getElementById('sendButtonShowData').disabled = !this.checked;" id="checkboxShowData" name="checkboxShowData" >
				<label class="col-sm-10" for="checkboxShowData">Ich bin damit einverstanden, dass meine Daten übertragen werden.</label>
			</div>
			<button type="submit" id="sendButtonShowData" class="btn-submit" disabled>Daten abfragen</button>
			<button type="reset" class="btn-reset margin-l15">Reset</button>
			<div class="row">
        <span class="col-sm-2 showData">
            <a class="link" href="index.php">Zur Anmeldung...</a>
        </span>
			</div>
		</div>
	</form>
</body>