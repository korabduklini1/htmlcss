<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<form action="" method='post'>
    <button id="maca" name='maca'>Maca</button>
</form>
  <?php 
    if(isset($_POST['maca'])) {
      echo 'Maca';
    }
  ?>
</body>
</html>