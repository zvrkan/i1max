<?php

class Vozilo
{
    protected $marka;
    protected $model;
    protected $god;
    protected $km;

   
    function getMarka()
    {
        return $this->marka;
    }
    function getModel()
    {
        return $this->model;
    }
    function getGod()
    {
        return $this->god;
    }
    function getKm()
    {
        return $this->km;
    }

    function setMarka($ma)
    {
        $this->marka = $ma;
    }
    function setModel($mo)
    {
        $this->model = $mo;
    }
    function setGod($god)
    {
        $this->god = $god;
    }
    function setKm($km)
    {
        $this->km = $km;
    }
}



?>