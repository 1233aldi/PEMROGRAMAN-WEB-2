<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        table,
        th,
        td {
            border: 1px solid black;
            border-collapse: collapse;
        }

        th,
        td {
            padding: 4px;
        }
    </style>
    <title>Document</title>
</head>

<body>
    <h2>Nilai Mahasiswa</h2>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Tugas</th>
                <th>UTS</th>
                <th>UAS</th>
                <th>Total Nilai</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include "nilai.php";
            $mhs1 = new Nilai();
            $mhs1->settugas(90);
            $mhs1->setuts(85);
            $mhs1->setuas(90);


            echo "<tr>
                <td>1</td>
                <td>Aldi</td>
                <td>" . $mhs1->gettugas() . "</td>
                <td>" . $mhs1->getuts() . "</td>
                <td>" . $mhs1->getuas() . "</td>
                <td>" . $mhs1->gettotalnilai() . "</td>
            </tr>";

            $mhs2 = new Nilai();
            $mhs2->settugas(56);
            $mhs2->setuts(78);
            $mhs2->setuas(65);

            echo "<tr>
                <td>2</td>
                <td>Budi</td>
                <td>" . $mhs2->gettugas() . "</td>
                <td>" . $mhs2->getuts() . "</td>
                <td>" . $mhs2->getuas() . "</td>
                <td>" . $mhs2->gettotalnilai() . "</td>
            </tr>";

            ?>
        </tbody>
    </table>
</body>

</html>