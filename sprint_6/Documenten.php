<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    <link rel="stylesheet" href="documenten.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <?php
    $activePage = 'Documenten';
    include("navbar.php");

    
    ?>

    <div class="container">

        <form action=" " method="POST">
            <div class="row1">
                <h3>U moet ingelogd zijn om de inhoud van deze pagina te bekijken</h3>
            </div>
            <div class="row">
                <div class="col-md">
                    <label for="fname">
                        <h3 class="wm">Gebruikersnaam:</h3>
                    </label>
                    <input type="text" class="pp1" id="gebnm" name="gebruikersnaam">
                </div>
            </div>
            <div class="row">
                <div class="col-md">
                    <label for="lname">
                        <h3 class="wm">Wachtwoord:</h3>
                    </label>
                    <input type="password" class="pp2" id="ww" name="wachtwoord">
                </div><br>
                <div class="row">
                    <div class="col-md">
                        <input type="Submit" class="button" value="Login" name="submit">
                    </div>
                </div>
            </div>
        </form>
    </div>
    <?php
    if (isset($_POST['submit'])) {
        $Gebruikersnaam = htmlspecialchars($_POST['gebruikersnaam']);
        $Wachtwoord = htmlspecialchars($_POST['wachtwoord']);

        if ($Gebruikersnaam=="J_Bond" && $Wachtwoord=="NulNulZeven!") {
            header("Location: geh_documenten");
            die();
        } else {
            echo "<p>Uw inloggegevens kloppen niet, probeer het opnieuw!</p>";
        }
    }
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
        crossorigin="anonymous"></script>
</body>

</html>