<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Formularze</title>
  </head>
  <body>
<form method="get">
  <input type="text" name="name" autofocus><br><br>
  <input type="text" name="surname" autofocus>
  <input type="submit" value="Wyślij"><hr>
</form>

<?php //isset ssprawdza czy jest ustawiona jakaś wartość (w miejsce !empty)
if (!empty($_GET['surname'])) /*sprawdza czy fomularz nie jest pusty. Gdyby dać samo empty, to sprawdza czy JEST pusty
wykrzyknik to po prostu negacja*/
{
  $surname = $_GET['surname'];
  $name = $_GET['name'];
  echo "Imię i nazwisko: ".ucwords(strtolower("$name $surname"));
  echo '<br><a href="./5_form1.php">Powrót do formularza</a><br>';

}
else {
  echo <<<FORM
  <form method="get">
    <input type="text" name="surname" autofocus><br><br>
    <input type="submit" value="Wyślij"><hr>
  </form>
FORM;
}

 ?>
  </body>
</html>
