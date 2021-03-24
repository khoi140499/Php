<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
         if (isset($_GET["name"]) && isset($_GET["age"])){
             echo "Welcome ". $_GET["name"]. "<br>";
             echo "Welcome ". $_GET["age"]. " years old <br>";
             die();
         }
        ?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form action="index.php" method="GET">
            <input type="text" name="name">
            <input type="text" name="age">
            <input type="submit">
        </form>
    </body>
</html>
