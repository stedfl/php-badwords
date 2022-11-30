<?php
$paragraph=$_GET['paragraph'];
$paragraph_length=strlen($paragraph);
$badword=$_GET['badword'];
$newString='***';
$new_paragraph= str_replace($badword, $newString, $paragraph);
$new_paragraph_length=strlen($new_paragraph);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Landing Page</title>
</head>
<body>
<h2>Il tuo paragrafo è:</h2>
<p>"<?php echo $paragraph; ?>"</p>

<h2>La lunghezza del paragrafo è: <?php echo $paragraph_length; ?> </h2>
<h3>La parola da censurare è: <?php echo $badword ?> </h3>
<h3>Il nuovo paragrafo censurato è:</h3>
<p>"<?php echo $new_paragraph; ?>"</p>
<p>La lunghezza del paragrafo censurato è: <?php echo $new_paragraph_length ?> </p>


  
</body>
</html>