<?php
    error_reporting(E_ALL);
    ini_set('display_errors' , '1');
?>
<?php
    class tanulo
    {
        public $nev = "";
        public $jegyek = array();
        public $atlag = 0.0;

        public function jegyetKap($jegy)
        {
            array_push($this->jegyek , $jegy);
        }
        public function atlagszam()
        {
            $osszes = 0;
            for ($i = 0;$i<count($this->jegyek);$i++)
            {
                $osszes += $this->jegyek[$i];
            }
            $this->atlag = ($osszes / count($this->jegyek)*1.0);
        }
        public function __construct($nev)
        {
            $this->nev = $nev;
        }
        public function __destruct()
        {
            echo $this->nev." kiiratkozott.";
        }
    }
?>