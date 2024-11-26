<<<<<<< HEAD
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>aldi</title>
</head>

<body>
    <div class="">
        <?php
        include "Visibility.php";

        $visibility = new Visibility();
        $visibility->tampilkandata();

        echo "<br>";

        echo "akses di luar kelas <br>";
        echo "public: " . $visibility->public . '<br>';
        //echo "private:" . $visibility->private . "<br>";//
        //echo "protected: " . $visibility->protected . '<br>';//
        echo "<br> <br>";
        echo "<h2> konsep pewarisan </h2>";


        include "mahasiswa.php";

        $mahasiswa = new mahasiswa("aldi");
        $mahasiswa->ucapkansalam();

        $mahasiswainggris = new mahasiswasing("nafiz");
        $mahasiswainggris->ucapkansalam();
        ?>
    </div>


</body>

=======
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>aldi</title>
</head>

<body>
    <div class="">
        <?php
        include "Visibility.php";

        $visibility = new Visibility();
        $visibility->tampilkandata();

        echo "<br>";

        echo "akses di luar kelas <br>";
        echo "public: " . $visibility->public . '<br>';
        //echo "private:" . $visibility->private . "<br>";//
        //echo "protected: " . $visibility->protected . '<br>';//
        echo "<br> <br>";
        echo "<h2> konsep pewarisan </h2>";


        include "mahasiswa.php";

        $mahasiswa = new mahasiswa("aldi");
        $mahasiswa->ucapkansalam();

        $mahasiswainggris = new mahasiswasing("nafiz");
        $mahasiswainggris->ucapkansalam();
        ?>
    </div>


</body>

>>>>>>> e0d8c63 (Menambahkan Tugas)
</html>