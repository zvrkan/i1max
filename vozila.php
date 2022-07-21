<?php

class Vozila 
{
    protected array $lista; // lista objekata tipa nUcenik

    function __construct()
    {
        $this->Unos();
        echo $this->Ispis();
    }

    function Unos() {
        $upit = readline("Koliko vozila zelite unijeti: ");

        for ($i = 1; $i <= $upit; $i++){
            $ma = readline("Unesi marku vozila: ");
            $mo = readline("Unesi model vozila: ");
            $god = readline("Unesi godiste vozila: ");
            $km = readline("Unesi prjedene kilometre vozila: ");

            $vozilo = new Vozilo();
            $vozilo->setMarka($ma);
            $vozilo->setModel($mo);
            $vozilo->setGod($god);
            $vozilo->setKm($km);

            $this->lista[] = $vozilo;
        }
    }

    function ispis()
    {
        $ispis =  "\n||Ispis vozila||\n\n";

        foreach ($this->lista as $key => $val)
        {
            $ispis .= $val->getMarka() . " - " . $val->getModel() . " - " . $val->getGod() . "\n";
            $racun = $val->getKm() / (2022 - $val->getGod());
            $ispis .= "Prjedeni kilometri godisnje: " . $racun . "\n\n";
        }
        
        return $ispis;

    }

}



?>