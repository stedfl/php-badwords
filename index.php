<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Badwords</title>
</head>
<body>
  <h1>Questo è un file php</h1>
 



  <?php
  echo 'ciao';
  echo '<h2> Ciao con tag </h2>';
  $prova_name='Stefania';
  $nome = $_GET['name'];
  $cognome = $_GET['surname'];
  echo '<h3>Ciao ' . $prova_name . ', come stai?</h3>';
  echo "<h4> Ciao $prova_name, come stai?</h4>";

  ?>

<p>Benvenuta <?php echo $prova_name; ?> </p>
<p>Benvenuta <?php echo $nome;?> <?php echo $cognome;?>  </p>
</body>
</html>