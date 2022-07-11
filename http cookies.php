<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>
<form action="testing.php" method="POST">
<input type="text" name="val"><button name="btn" type="submit">Click</button>
</form>
</body>
</html>

<?php

if(isset($_POST['btn']))
{
$_SESSION['value'] = $_POST['val'];
header('Location:testing.php');
}