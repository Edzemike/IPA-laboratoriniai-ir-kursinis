<?php

session_start();
//
//if(!isset($_SESSION['iduser']))
//{
//    header("Location: LoginScreen.php");
//}

Include("DisplayTable.php")

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Logged In</title>
    <link rel="stylesheet" href="style.css" type="text/css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body>
<style>
    form {
        display: inline;
    }
</style>

<div id='wrapper'>

    <?php
    $pat = new DisplayTable(2);
    $pat->KnyguDuomenuPateikimas();
    ?>

</div> <!-- baigiasi wrapper -->

<form action="LogoutPage.php">
    <input type="submit" class="col-md-3 col-md-offset-3 btn btn-default btn-xs" name="logout" value="Logout">
</form>

<button type="button" class="col-md-3 col-md-offset-0 btn btn-default btn-xs" data-toggle="modal" data-target="#myModal">
    Pridėti knygą.
</button>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Klaida</h4>
            </div>
            <div class="modal-body">
                <p>Duomenų bazė neparuošta. Įkėlimas negalimas.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default btn-xs" data-dismiss="modal">Uždaryti</button>
            </div>
        </div>
    </div>
</div>
</body>
</html>

