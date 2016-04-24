<?php
//include 'PrisijungimasPrieDB.php';
/**
 *
 *
 */
class DisplayTable
{
// Paimti is DB knygu priskirtu tam konkreciam vartotjui duomenis
    private
        $NaudotojoID;
    function __construct($NaudotojoID)
    {
        $this->NaudotojoID = $NaudotojoID;
    }
    function KnyguDuomenuPateikimas() {
        $failas = "Duomenys.txt";
        $dokumentas = file_get_contents($failas);
        $eilute = explode("\n", $dokumentas);
        echo "<table>";
        echo "<tr>";
        echo "<td><h4>Knygos pavadinimas</h4></td>";
        echo "<td><h4>Autorius</h4></td>";
        echo "<td><h4>Leidykla</h4></td>";
        echo "<td><h4>Busena</h4></td>";
        echo "</tr>";
        foreach ($eilute as $NaujaEilute) {
            $EilutesElementai = explode("|", $NaujaEilute);
            echo "<tr>";
            if ($EilutesElementai[0] == $this->NaudotojoID) {
                for ($i=2;$i<=5;$i++) {
                    echo "<td>".$EilutesElementai[$i]."</td>";
                }
            }
            echo "</tr>";
        }
        echo "</table>";
    }
}
//$pat = new LentelesPateikimas(1);
//$pat->KnyguDuomenuPateikimas();
?>