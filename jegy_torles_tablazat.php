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
                foreach ($this->adat[$i] as $item)
                {
                    echo "<td>".$item."</td>";
                }
                echo "<td>";
                    echo "<form method='post' action='jegy_torles.php'>";
                    echo "<input type='submit' name='torles' value='$i'>";
                echo "</td>";
                echo "</tr>";
            }
            echo "</table>";
        }
    }
?>