<?php
// Start the session
session_start();
?>
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
        if(isset($_POST['Login'])&&!empty($_POST['username'])&&!empty($_POST['password'])){
            $sql="SELECT * FROM korisnici";
            $q=mysqli_query($conn,$sql);

            while($redak=mysqli_fetch_array($q,MYSQLI_ASSOC)){
                if($_POST['username']==$redak["k_ime"]&& $_POST['password']==$redak["lozinka"]){
                
                    $_SESSION['prijavljen']=true;
                    $_SESSION['timeout']=time();
                    $_SESSION['username']=$_POST['username'];
                    $_SESSION['ime']=$redak['ime'];
                    $_SESSION['prezime']=$redak['prezime'];
                    if($redak["uloga"]=="admin"){
                   
                        header("Location: dodaj_proizvod.php");
                    }else{
                        header("Location: ispis.php");
                    }
                }else{
                    $msg='krivo korisnicko ime ili lozinka';
                }
            }
        }
    ?>

    <div>
        <h1>Unesite trazene podatke</h1>
        <?php
            echo $msg;
        ?>
        <form action="" method="post">
            <p>
                <label for="username">Korisničko ime:</label>
                <input type="text" name="username" id="username">
            </p>
            <p>
                <label for="password"> Lozinka:</label>
                <input type="text" name="password" id="password">
            </p>
         <input type="submit" value="Login" name="Login">
        </form>
        <p><h3><a href="registracija.php">Registrirajte se u sustav</a></h3></p>
    </div>
</body>
</html>