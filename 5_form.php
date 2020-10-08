<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Formularze</title>
  </head>
  <body>
<form method="get">
  <input type="text" name="surname" autofocus><br><br>
  
  <input type="submit" value="Wyślij"><hr>
</form>

<?php //isset ssprawdza czy jest ustawiona jakaś wartość (w miejsce !empty)
if (!empty($_GET['surname'])) /*sprawdza czy fomularz nie jest pusty. Gdyby dać samo empty, to sprawdza czy JEST pusty
wykrzyknik to po prostu negacja*/
{
  $surname = $_GET['surname'];
  echo "Wprowadziłeś dane: $surname<hr>";
  echo '<a href="./5_form.php">Powrót do formularza</a>';

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
