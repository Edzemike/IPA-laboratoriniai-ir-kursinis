<!DOCTYPE html>
<html lang="lt">
<head>
    <meta charset="windows-1257">
    <title>Lentele</title>
    <link rel="stylesheet" href="style.css" type="text/css">
    <?php  Include("LentelesPateikimas.php")  ?>
</head>
<body>

    <div id='wrapper'>

        <?php

            $pat = new LentelesPateikimas(1);

            $pat->KnyguDuomenuPateikimas();

        ?>

    </div> <!-- baigiasi wrapper -->


</body>
</html>