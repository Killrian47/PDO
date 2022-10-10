<?php
require_once 'connect.php';
?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php


?>

<form action="form.php" method="post">
    <div>
        <label for="firstname">Firstname</label>
        <input type="text" name="firstname" id="firstname">
    </div>

    <div>
        <label for="lastname">Lastname</label>
        <input type="text" name="lastname" id="lastname">
    </div>

    <button type="submit">Submit</button>

</form>
</body>
</html>
