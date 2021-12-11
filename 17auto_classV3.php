<?php

use automobil as GlobalAutomobil;

error_reporting(E_ALL);
    ini_set('display_errors' , '1');
?>
<?php
    class automobil
    {
        public $uzemanyagMennyiseg = 0.0;
        public $kilometerOra = 0;
        public $uzemeanyagTartaly = 0;
        protected $fogyasztas = 0.0;
        protected $uzemanyagTipus = "";

        public function tankol($mennyiseg)
        {
            if($this->uzemanyagMennyiseg + $mennyiseg <= $this->uzemeanyagTartaly)$this->uzemanyagMennyiseg += $mennyiseg;
            else 
            { 
                $this->uzemanyagMennyiseg = $this->uzemeanyagTartaly;
                echo "<br>megtelt a tank<br>";
            }
        }

        public function megy($tavolsag)
        {
            //120km, 6.5l/100km, fogy*(tav/100)
            $elfogyasztott = $this->fogyasztas*($tavolsag/100.0);
            if($this->uzemanyagMennyiseg <= $elfogyasztott)
            {
                $elfogyasztott = $this->uzemanyagMennyiseg;
                $this->kilometerOra += ($elfogyasztott / $this->fogyasztas) * 100;
                echo "<br>üres a tank<br>";
            }
            else $this->kilometerOra += $tavolsag;
            $this->uzemanyagMennyiseg -= $elfogyasztott;
        }

        public function __construct($tipus , $tartaly, $fogyaszt)
        {
            $this->uzemanyagTipus = $tipus;
            $this->uzemeanyagTartaly = $tartaly;
            $this->fogyasztas = $fogyaszt;
        }

        /*public function __destruct()
        {
            echo "autót eladtuk ". $this->uzemanyagMennyiseg. " literrel a tankban<br />";
        }*/
    }

    class taxi extends automobil
    {
        protected $fuvarDij = 0;
        protected $taxiOra = 0.0;
        protected $kassza = 0;

        public function __construct($tipus , $tartaly, $fogyaszt , $dij)
        {
            $this->uzemanyagTipus = $tipus;
            $this->uzemeanyagTartaly = $tartaly;
            $this->fogyasztas = $fogyaszt;
            $this->fuvarDij = $dij;
        }

        function fuvar ($tavolsag)
        {
            $uzemanyag = $this->uzemanyagMennyiseg;
            $elfogyasztott = $this->fogyasztas*($tavolsag/100.0);
            if($uzemanyag < $elfogyasztott)
            {
                echo "<br>Ekkora utat nem tudok teljesíteni<br>";
            }
            else
            {
                $this->megy($tavolsag);
                $utazott = ($elfogyasztott / $this->fogyasztas) * 100;
                $this->taxiOra += $utazott;
                $this->kassza += $this->taxiOra * $this->fuvarDij;
            }
        }
    }
?>