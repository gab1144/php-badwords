<?php

$paragraph = $_POST['paragraph'];
$badword = $_POST['badword'];

$censored = str_replace($badword, "***", $paragraph);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>pagina di atterraggio</title>
</head>

<body>
  <h2>
    Pragrafo originale
  </h2>
  <p><?php echo $paragraph ?></p>

  <span>Lunghezza del paragrafo: <?php echo strlen($paragraph) ?></span>

  <h2>
    Pragrafo censurato
  </h2>
  <p><?php echo $censored ?></p>

  <span>Lunghezza del paragrafo ("*" compresi): <?php echo strlen($censored) ?></span>

</body>
</html>