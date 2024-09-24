<?php
include "orang.php";

class mahasiswa extends orang
{
    public $nim;
    public $prodi;

    public function getnilaisemester() {}
}

class mahasiswaasing extends mahasiswa {}

class mahasiswasing extends mahasiswa
{

    //overide
    public function ucapkansalam()
    {
        echo "helo my nama's aldi " . $this->nama;
    }
}
