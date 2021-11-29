<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
        include "spoj.php";
        $msg='';
        if(isset($_POST['Unesi'])&&!empty($_POST['proizvod'])&&!empty($_POST['opis'])&&!empty($_POST['kolicina'])&&!empty($_POST['cijena'])){
            
            $sqlQ = "INSERT INTO proizvodi( proizvod, opis, kolicina, cijena) VALUES ('$_POST[proizvod]','$_POST[opis]','$_POST[kolicina]','$_POST[cijena]' )";
            if (mysqli_query($conn, $sqlQ)) {
                echo "Novi proizvod je uspjesno dodan u tablicu";
                
            } else {
                echo "Error: " . $sqlQ . "<br>" . mysqli_error($conn);
            }
            
        }
    ?>
    <p><h2><a href="dodaj_proizvod.php">Dodaj novi proizvod</a></h2></p>
            <p><h2><a href="ispis.php">Ispis proizvoda</a></h2></p>
</body>
</html>