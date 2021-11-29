<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <h1>Unesite trazene podatke za novi proizvod</h1>
        
        <form action="unos.php" method="post">
          <p>
              <label for="proizvod">Ime proizvoda:</label>
              <input type="text" name="proizvod" id="proizvod">
          </p>
          <p>
              <label for="opis">Opis proizvoda:</label>
              <input type="text" name="opis" id="opis">
          </p>
          <p>
              <label for="kolicina">Kolicina:</label>
              <input type="number" name="kolicina" id="Kolicina">
          </p>
          <p>
              <label for="cijena">Cijena:</label>
              <input type="text" name="cijena" id="cijena">
          </p>
         <input type="submit" value="Unesi" name="Unesi">
        </form>
        
    </div>
</body>
</html>