<?php

class orang
{
    protected $nama;

    public function setnama($nama)
    {
        $this->nama = $nama;
    }

    public function ucapsalam()
    {
        echo "HALO PERKENALKAN NAMA SAYA ALDI DARAMAWAN" . $this->nama . "<br>";
    }
}
