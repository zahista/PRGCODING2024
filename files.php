
<form action="files.php" method="post" enctype="multipart/form-data">
  <label for="filename">Název souboru</label>
  <input id="filename" type="text" name="filename">
  <input type="file" name="file" accept="image/*">
  <input type="submit" value="Nahrát soubor">
</form>

<?php

echo "<pre>";

var_dump(
    $_FILES['file']
);

echo "</pre>";



