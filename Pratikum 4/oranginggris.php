<?php

require_once "orang.php";

class oranginggris extends orangbiasa
{
    //overide
    public function ucapsalam()
    {
        echo "helo my nama is " . $this->nama . "<br>";
    }
}
