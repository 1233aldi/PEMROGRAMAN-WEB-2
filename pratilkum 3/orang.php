<?php
class orang
{
    public $nama;


    public function __construt($nama)
    {
        $this->nama = $nama;
    }

    public function ucapkansalam()
    {
        echo "hallo nama saya" . $this->nama . "<br>";
    }
}
