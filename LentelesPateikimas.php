<?php


include 'PrisijungimasPrieDB.php';
/**
 *
 *
 */


class LentelesPateikimas
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

        foreach ($eilute as $NaujaEilute) {

            $EilutesElementai = explode("|", $NaujaEilute);

            if ($EilutesElementai[0] == $this->NaudotojoID) {

                echo $EilutesElementai[2]."<br>";


            }


        }


    }

}


$pat = new LentelesPateikimas(1);

$pat->KnyguDuomenuPateikimas();


?>