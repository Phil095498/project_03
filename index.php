<!DOCTYPE html>
<html lang="de">
<head>
    <title>
        Projekt 03 - AE
    </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="css/styles.css" rel="stylesheet">
</head>
<body class="container-fluid">
    <div class="form-center border">
        <form action="showData.php" method="post">
            <span class="row heading">Anmeldung</span>
            <div class="inputs row">
                <div class="row margin-b15">
                    <span class="subtitle">Geben Sie Ihren Nutzernamen ein!</span>
                    <div>
                        <input  type="text"  placeholder="Username"  name="username" required>
                    </div>
                </div>
                <div class="row margin-b15">
                    <span class="subtitle">Geben Sie Ihr Passwort ein!</span>
                    <div>
                        <input  type="password" placeholder="Password"  name="password" required>
                    </div>
                </div>
                <button type="submit" id="sendButton" class="btn-submit button button-h">Anmelden</button>
                <button type="reset" class="btn-reset margin-l15 button button-h">Reset</button>
            </div>
        </form>
    </div>
</body>
</html>

