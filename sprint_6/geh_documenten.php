<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    <link rel="stylesheet" href="geh_documenten.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" 
    crossorigin="anonymous">
</head>
<body>
<?php 
$activePage = 'geh_documenten'; include ("navbar.php");

if(isset($_POST['submit'])){
    session_unset();
    header("location: Documenten.php");
    die();
}
?>
<div class="container">
    <div class="row pt-3">
        <div class="col-md">
            <div class="h3">
                <h3>U bent ingelogd</h3>
            </div>
        </div>
    </div>
    <div class="row pt-3">
        <div class="col">
            <img src="images/gehdoc.png">
        </div>
    </div>
    <form action=" " method="POST">
    <div class="row">
        <div class="col-md">
            <input type="submit" class="pita"name="submit" value="Log uit">
        </div>
    </div>
</form>
</div>







<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" 
integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" 
crossorigin="anonymous"></script> 
</body>
</html>