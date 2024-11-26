<<<<<<< HEAD
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
=======
<?php
include "orang.php";

class mahasiswa extends orang
{
    public $nim;
    public $prodi;

    public function getnilaisemester() {}
}
class mahasiswasing extends mahasiswa
{

    //overide
    public function ucapkansalam()
    {
        echo "helo my nama's aldi " . $this->nama . "<br>";
    }
}
>>>>>>> e0d8c63 (Menambahkan Tugas)
