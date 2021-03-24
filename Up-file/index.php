<?php
    if(isset($_POST["upload"])){
        if(isset($_FILES["file"]) && !$_FILES["file"]["error"]){
            move_uploaded_file($_FILES["file"]["tmp_name"], './media/'.$_FILES["file"]["name"]);
        }
        else{
            echo" loi";
        }
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form action="" method="post" enctype="multipart/form-data">
            <input type="file" name="file">
            <input type="submit" name="upload" value="Upload">
        </form>
    </body>
</html>
