<?php  
session_start();
if (isset($_POST['save']))
{
    $_SESSION['name']=$_POST['username'];
    echo $_SESSION['name'];
}
?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<body>
    <form method="POST" action="index.php">
        <input type="text" name="username" value=""/> <br/>
        <input type="submit" name="save" value="Lưu Session"/>
    </form>
</body>
</html>