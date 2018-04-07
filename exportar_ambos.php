<?php
$file_php = "php.txt";
$file_json = "json.txt";

if (!empty($_GET)) {
  require "php/Writer.php";
  require "json/Writer.php";
  
  $escritor = new php\Writer($file_php);
  $written_php = $escritor->write($_GET);

  $escritor = new json\Writer($file_json);
  $written_json = $escritor->write($_GET);
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Exportar datos en PHP</title>
</head>
<body>
  <?php
  if (!empty($_GET)) {
  ?>
  <p>
    Se han guardado los siguientes datos:
  </p>
<pre><?php echo htmlentities($written_php, ENT_QUOTES, "utf-8"); ?></pre>
  <p>En el archivo <a href="<?php echo $file_php; ?>"><?php echo $file_php; ?></a></p>
<pre><?php echo htmlentities($written_json, ENT_QUOTES, "utf-8"); ?></pre>
  <p>En el archivo <a href="<?php echo $file_json; ?>"><?php echo $file_json; ?></a></p>
    <?php
  } else {
  ?>
  <p>
    Este script guarda los datos que reciba por el método get.
    Guarda los datos recibidos en formato php en el archivo <a href="<?php echo $file_php; ?>"><?php echo $file_php; ?></a>
  </p>
  <?php
  }
  ?>
</body>
</html>