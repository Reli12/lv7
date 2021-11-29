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
       $sql="SELECT * FROM proizvodi";
       if (!$q=mysqli_query($conn,$sql)){
           echo "nastala je greska pri izvodjenju";
           die();
       }  
       if(mysqli_num_rows($q)==0){
           echo "nema proizvoda";
       }else{
    ?>
    <table width="600" cellpadding="1" cellspacing="1">
        <tr>
            <td><b>ID</b></td>
            <td><b>Naziv</b></td>
            <td><b>Opis</b></td>
            <td><b>Kolicina</b></td>
            <td><b>Cijena</b></td>
        </tr>
        <?php
            while ($redak=mysqli_fetch_array($q,MYSQLI_ASSOC)){
        ?>
        <tr>
            <td><?=$redak["id"]?></td>
            <td><?=$redak["proizvod"]?></td>
            <td><?=$redak["opis"]?></td>
            <td><?=$redak["kolicina"]?></td>
            <td><?=$redak["cijena"]?></td>
        </tr>
        <?php
        }
    }?>
    </table>
</body>
</html>