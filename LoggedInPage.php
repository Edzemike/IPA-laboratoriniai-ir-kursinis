<?php

session_start();
//
//if(!isset($_SESSION['iduser']))
//{
//    header("Location: LoginScreen.php");
//}

function KnyguDuomenuPateikimas()
{

    $file_handle = fopen("Duomenys.txt","r");

    while (!feof($file_handle)) {
        echo fgetss($file_handle) . "<br />";
    }
    fclose($file_handle);
}
KnyguDuomenuPateikimas();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Logged In</title>
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
<form action="LogoutPage.php">
    <input type="submit" class="btn btn-primary btn-lg" name="logout" value="Logout">
</form>


<!-- modal button -->
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
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
                <button type="button" class="btn btn-default" data-dismiss="modal">Uždaryti</button>
            </div>
        </div>
    </div>
</div>
</body>
</html>

