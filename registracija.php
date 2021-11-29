
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
        if(isset($_POST['Register'])&&!empty($_POST['username'])&&!empty($_POST['password'])){
            $sql="SELECT * FROM korisnici";
            $q=mysqli_query($conn,$sql);
            $flag=1;
            $id=1;
            while($redak=mysqli_fetch_array($q,MYSQLI_ASSOC)){
                if($_POST['username']==$redak["k_ime"]){
                    $flag=0;
                }
                $id=$redak["id"];
            }
            $id=$id+1;
            
            if($flag==1){
                $sqlQ = "INSERT INTO korisnici(id, ime, prezime, e_mail, k_ime, lozinka, uloga) VALUES ($id,'$_POST[UserR]','$_POST[LastName]','$_POST[email]','$_POST[username]','$_POST[password]','korisnik')";
                if (mysqli_query($conn, $sqlQ)) {
                    echo "New record created successfully";
                    header("Location: prijava.php");
                    } else {
                    echo "Error: " . $sqlQ . "<br>" . mysqli_error($conn);
                    }
            }else{
                $msg='Unesite druge podatke';
            }
        }
    ?>

    <div>
        <h1>Unesite trazene podatke za registraciju</h1>
        <?php
            echo $msg;
        ?>
        <form action="" method="post">
            <p>
                <label for="username">Korisničko ime:</label>
                <input type="text" name="username" id="username">
            </p>
            <p>
                <label for="UserR">Ime:</label>
                <input type="text" name="UserR" id="UserR">
            </p>
            <p>
                <label for="LastName">Last Name:</label>
                <input type="text" name="LastName" id="LastName">
            </p>
            <p>
                <label for="email">E/mail:</label>
                <input type="text" name="email" id="email">
            </p>
            <p>
                <label for="password"> Lozinka:</label>
                <input type="text" name="password" id="password">
            </p>
         <input type="submit" value="Register" name="Register">
        </form>
        
    </div>
</body>
</html>