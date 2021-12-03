<?php

use automobil as GlobalAutomobil;

error_reporting(E_ALL);
    ini_set('display_errors' , '1');
?>
<?php
    class automobil
    {
        private $uzemanyangMennyiseg = 0.0;
        protected $uzemanyagtipus = "";
        public function tankol($mennyiseg)
        {
            $this->uzemanyangMennyiseg += $mennyiseg;
        }

        public function __construct($tipus)
        {
            $this->uzemanyagtipus = $tipus;
        }

        public function __destruct()
        {
            echo "autót eladtuk ". $this->uzemanyangMennyiseg. " literrel a tankban<br />";
        }
    }

    class benzinesAuto extends automobil
    {
        private $oktanszam;
        public function __construct($oktan)
        {
            parent::__construct("benzin");
            $this->oktanszam = $oktan;
        }
    }
?>