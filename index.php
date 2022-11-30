<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Badwords</title>
</head>
<style>
.main-wrap {
  height: 100vh;
  width: 100%;
  display: flex;
  justify-content: center;
  align-items: center;

}

.container {
  text-align: center;
  width: 50%;
  background-color:#0369d7;
  color: white;
  padding: 2rem;
  border-radius: 10px;
}

p {
  font-style: italic;
}
</style>

<body>
  <div class="main-wrap">
    <div class="container">
      <h1>Parola Censurata</h1>
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
    </div>
  </div>
  
 
 



</body>
</html>