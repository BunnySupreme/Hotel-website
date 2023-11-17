</br>
<form enctype="multipart/form-data" method="post" action="">
    <input type="file" name="picture" accept="image/jpeg">
    <input type="submit" name="submit" value="Hochladen">
</form>

<?php
if(isset($_FILES["picture"]))
{

    if($_FILES["picture"]["type"] == "image/jpeg")
    {
        $destination = getcwd()."\uploads\\" . $_FILES["picture"]["name"];;
        move_uploaded_file($_FILES["picture"]["tmp_name"], $destination);
    }
    else
    {
        echo "Der Dateityp wird nicht unterstützt";
    }
    
}
?>