<?php
include "Orang.php";
include "BankCustomer.php";
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Hello Praktikum 2</h1>
    <div class="div">
        <?php
            $nasabah = new BankCustomer();
            $nasabah->setCustomerName('Aldi darmawan');
            $nasabah->setAddress('indonesia');
            $nasabah->setEmail('aldi20gmail.com');
            $nasabah->setCard('silver');
            $nasabah->setAcc('nadiah');

            $nasabah->insertCard();
            $nasabah->enterPIN(12347);
        ?>
    </div>
</body>
</html>

<!-- localhost/index.php?nama=aldi -->
