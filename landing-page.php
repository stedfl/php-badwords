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
<style>
  .container {
    width: 50%;
    margin: 0 auto;
    background-color: orange;
    padding: 1rem;
    border-radius: 10px;
  }
  span {
    background-color: red;
  }

</style>

<body>
  <div class="container">

    <h2>ORIGINALE</h2>
    <h3>Il tuo paragrafo è:</h3>
    <p>"<?php echo $paragraph; ?>"</p>
    <h4>La lunghezza del paragrafo è: <?php echo $paragraph_length; ?> caratteri </h4>
    <h4>La parola da censurare è: <span>"<?php echo $badword ?>"</span> </h4>

    <H2>CENSURATO</H2>
    <h3>Il tuo nuovo paragrafo censurato è:</h3>
    <p>"<?php echo $new_paragraph; ?>"</p>
    <p>La lunghezza del paragrafo censurato è:  <?php echo $new_paragraph_length ?> caratteri</p>

  </div>
  

  
</body>
</html>