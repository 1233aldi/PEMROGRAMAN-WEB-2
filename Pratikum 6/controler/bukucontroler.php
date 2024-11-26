<<<<<<< HEAD
<?php 

require_once "model/daftarbuku.php";

class bukucontroler{

    public function jalankan(){
        //mengakses model
        $data = new daftarbuku();
        //memberi data model ke view dan menampilkan data 
        include "view/bukuview.php";

      
    }
=======
<?php 

require_once "model/daftarbuku.php";

class bukucontroler{

    public function jalankan(){
        //mengakses model
        $data = new daftarbuku();
        //memberi data model ke view dan menampilkan data 
        include "view/bukuview.php";

      
    }
>>>>>>> e0d8c63 (Menambahkan Tugas)
}