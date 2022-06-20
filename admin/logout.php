<?php
session_start();
session_destroy();
setcookie('username',"",time()-1);
header("location: Adminlogin.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>logout page</title>
</head>
<body>
</body>
</html>