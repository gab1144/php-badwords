<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Badwords</title>
</head>
<body>
  <h1>PHP Badwords</h1>

  <form action="./action.php" method="POST">
    <label for="paragraph">Paragrafo: </label>
    <br>
    <textarea name="paragraph" rows="4" cols="50" placeholder="Inserisci una frase"></textarea>
    <br>
    <label for="badword">Parola da censurare: </label>
    <br>
    <input type="text" name="badword" placeholder="Inserisci una parola" />
    <br>
    <button type="submit">invia</button>
  </form>

</body>
</html>