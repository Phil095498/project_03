<!DOCTYPE html>
<html lang="de">
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
    <form class="form-center" action="" method="post">
        <span class="row heading">Anmeldung</span>
        <span class="row subtext">Bitte registrieren Sie sich mit ihren persönlichen Daten!</span>
        <div class="inputs row">
            <label class="col-sm-12">Wählen Sie Ihr Geschlecht!</label>
            <select class="col-sm-3 margin-b15" required>
                <option selected disabled>Bitte wählen</option>
                <option value="Weiblich">Weiblich</option>
                <option value="Männlich">Männlich</option>
            </select>
            <div class="row margin-b15">
                <span class="col-sm-12">Geben Sie Ihren Nachnamen ein!</span>
                <div  class="col-sm-10">
                    <input  type="text"  placeholder="Nachname"  name="name" required>
                </div>
            </div>
            <div class="row margin-b15">
                <span class="col-sm-12">Geben Sie Ihren Vornamen ein!</span>
                <div  class="col-sm-10">
                    <input  type="text" placeholder="Vorname"  name="vorname" required>
                </div>
            </div>

            <div class="row margin-b15">
                <span class="col-sm-12">Geben sie Ihr Alter ein!</span>
                <div  class="col-sm-10">
                    <input  type="number" placeholder="Alter"  name="alter" required>
                </div>
            </div>

            <div class="row margin-b15">
                <span class="col-sm-12">Geben sie Ihre Postleitzahl ein!</span>
                <div  class="col-sm-10">
                    <input  type="number" placeholder="Postleitzahl"  name="zip" required>
                </div>
            </div>

            <div class="row margin-b15">
                <span class="col-sm-12">Geben sie Ihren Wohnort ein!</span>
                <div  class="col-sm-10">
                    <input  type="text" placeholder="Wohnort"  name="city" required>
                </div>
            </div>

            <div class="row margin-b15">
                <span class="col-sm-12">Geben sie Ihre Straße mit Hausnummer ein!</span>
                <div  class="col-sm-10">
                    <input  type="text" placeholder="Straße / Hausnr."  name="street" required>
                </div>
            </div>

            <div class="row margin-tb-15">
                <input type="checkbox" onchange="document.getElementById('sendButton').disabled = !this.checked;" id="checkbox" name="checkbox" >
                <label class="col-sm-10" for="checkbox">Ich bin damit einverstanden, dass meine Daten übertragen werden.</label>
            </div>
            <button type="submit" id="sendButton" class="btn-submit" disabled>Daten senden</button>
            <button type="reset" class="btn-reset margin-l15">Reset</button>

            <div class="row">
              <span class="col-sm-8 showData">
                    Falls Sie Ihre personenbezogenen Daten abfragen wollen, klicken Sie bitte
                    <a class="link" href="showData.php">hier</a>
                    .
                </span>
            </div>
        </div>
    </form>
</body>
</html>
