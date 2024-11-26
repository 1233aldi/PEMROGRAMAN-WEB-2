<<<<<<< HEAD
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pratikum 4</title>
</head>

<body>
    <h1>konsep pewarisan</h1>
    <div class="">
        <?php
        require_once "orangbiasa.php";
        require_once "oranginggris.php";
        require_once "mahasiswa.php";

        $aldi = new orangbiasa();
        $aldi->setnama('aldi darmawan');
        $aldi->ucapsalam();

        echo "<br>";

        $ragit = new oranginggris();
        $ragit->setnama("ragit wiliam");
        $ragit->ucapsalam();

        echo "<br>";

        $mahasiswa = new mahasiswa();
        $mahasiswa->setnama("aldo saputra");
        $mahasiswa->setnim("701230026");

        echo "<br>";

        $nilaimahasiswa = new nilai();
        $nilaimahasiswa->settugas(70);
        $nilaimahasiswa->setuts(67);
        $nilaimahasiswa->setuas(90);

        $mahasiswa->setnilai($nilaimahasiswa);

        $mahasiswa->ucapsalam();
        $mahasiswa->tampilkandata();



        ?>



    </div>
</body>

=======
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pratikum 4</title>
</head>

<body>
    <h1>konsep pewarisan</h1>
    <div class="">
        <?php
        require_once "orangbiasa.php";
        require_once "oranginggris.php";
        require_once "mahasiswa.php";

        $aldi = new orangbiasa();
        $aldi->setnama('aldi darmawan');
        $aldi->ucapsalam();

        echo "<br>";

        $ragit = new oranginggris();
        $ragit->setnama("ragit wiliam");
        $ragit->ucapsalam();

        echo "<br>";

        $mahasiswa = new mahasiswa();
        $mahasiswa->setnama("aldo saputra");
        $mahasiswa->setnim("701230026");

        echo "<br>";

        $nilaimahasiswa = new nilai();
        $nilaimahasiswa->settugas(70);
        $nilaimahasiswa->setuts(67);
        $nilaimahasiswa->setuas(90);

        $mahasiswa->setnilai($nilaimahasiswa);

        $mahasiswa->ucapsalam();
        $mahasiswa->tampilkandata();



        ?>



    </div>
</body>

>>>>>>> e0d8c63 (Menambahkan Tugas)
</html>