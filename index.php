<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Badwords</title>
</head>
<body>
  <h1>Form</h1>
  <p>Scrivi un paragrafo ed una parola da censurare</p>
 



  <?php
  $nome = $_GET['name'];
  $cognome = $_GET['surname'];
  ?>


<form action="./landing-page.php" method="GET">
  <input type="text" name="paragraph" placeholder="paragrafo">
  <input type="text" name="badword" placeholder="parola da censurare">
  <button type="submit">Invia</button>

</form>
</body>
</html>