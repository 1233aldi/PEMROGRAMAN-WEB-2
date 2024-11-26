<<<<<<< HEAD
<?php

require_once "model/daftarbuku.php";

class bukucontroler
{

    public function jalankan()
    {
        //mengakses model
        $data = new daftarbuku();
        //memberi data model ke view dan menampilkan data 
        include "view/bukuview.php";
    }
    public function simpan()
    {
        $buku = new buku($_POST['judul'], $_POST['pengarang'], $_POST['penerbit'], $_POST['tahun']);

        $daftar_buku = new daftarbuku();
        $daftar_buku->simpan($buku);

        header('Location: http://localhost/index.php');
        exit;
    }
    public function hapus()
    {
        $id = $_POST['id_hapus'];

        $daftar_buku = new DaftarBuku();
        $daftar_buku->hapus($id);

        header('Location: http://localhost/index.php');
        exit;
    }

    public function edit()
    {
        //index.php
        $id = $_GET['id'];

        //membuat objek model daftar buku 
        $daftar_buku = new daftarbuku();

        //mengambil dan membuat objek model buku berdasarkan id buku dari objek daftar buku;
        $daftar_buku = new daftarbuku();
        $buku = $daftar_buku->getBukuByid($$id);

        //jika buku ada atau ketemu
        if ($buku) {
            //tampilkan view edit buku
            include_once "/view/editbukuview.php";
        } else {
            header("Location:  http://localhost/index.php");
        }
    }
}
=======
<?php

require_once "model/daftarbuku.php";

class bukucontroler
{

    public function jalankan()
    {
        //mengakses model
        $data = new daftarbuku();
        //memberi data model ke view dan menampilkan data 
        include "view/bukuview.php";
    }
    public function simpan()
    {
        $buku = new buku($_POST['judul'], $_POST['pengarang'], $_POST['penerbit'], $_POST['tahun']);

        $daftar_buku = new daftarbuku();
        $daftar_buku->simpan($buku);

        header('Location: http://localhost/index.php');
        exit;
    }
    public function hapus()
    {
        $id = $_POST['id_hapus'];

        $daftar_buku = new DaftarBuku();
        $daftar_buku->hapus($id);

        header('Location: http://localhost/index.php');
        exit;
    }

    public function edit()
    {
        //index.php
        $id = $_GET['id'];

        //membuat objek model daftar buku 
        $daftar_buku = new daftarbuku();

        //mengambil dan membuat objek model buku berdasarkan id buku dari objek daftar buku;
        $daftar_buku = new daftarbuku();
        $buku = $daftar_buku->getBukuByid($$id);

        //jika buku ada atau ketemu
        if ($buku) {
            //tampilkan view edit buku
            include_once "/view/editbukuview.php";
        } else {
            header("Location:  http://localhost/index.php");
        }
    }
}
>>>>>>> e0d8c63 (Menambahkan Tugas)
