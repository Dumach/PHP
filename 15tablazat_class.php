<?php
    error_reporting(E_ALL);
    ini_set('display_errors' , '1');
?>
<?php
    class tablazat
    {
        protected $vastagsag = 0;
        public $adat = array();

        public function __construct($vast , $adat)
        {
            $this->vastagsag = $vast;
            $this->adat = $adat;
        }

        public function kiir()
        {
            echo "<table border=\"$this->vastagsag\">";
            echo "<tr>";
            foreach ($this->adat[0] as $kulcs => $ertek)
            {
                echo "<td>".$kulcs."</td>";
            }
            echo "</tr>";
            for($i = 0; $i < count($this->adat); $i++)
            {
                echo "<tr>";
                /*for($h = 0; $h < count($this->adat[$i]); $h++)
                {
                    echo "<td>".$this->adat[$i][$h]."</td>";
                }*/

                foreach ($this->adat[$i] as $item)
                {
                    echo "<td>".$item."</td>";
                }

                /*foreach ($this->adat[$i] as $kulcs => $ertek)
                {
                    echo "<td>".$kulcs."</td>";
                }*/
                echo "</tr>";
            }
            echo "</table>";
        }
    }
?>