<?php
        if ($_FILES["file"]["type"] == "text/plain" &&
        $_FILES["file"]["size"] < 65536)
    {
        if ($_FILES["file"]["error"] > 0)
    {
        echo "Error: " . $_FILES["file"]["error"] . "<br>";
    }
        else
    {
        echo "Upload: " . $_FILES["file"]["name"] . "<br>";
        echo "Type: " . $_FILES["file"]["type"] . "<br>";
        echo "Size: " . ($_FILES["file"]["size"] / 1024) . " Kb<br>";
        echo "Stored in: " . $_FILES["file"]["tmp_name"];
    }
    }
        else
    {
        if ($_FILES["file"]["type"] != "text/plain")
        echo "File is not of the permitted type.";
        else if ($_FILES["file"]["size"] < 65536)
        echo "File exceeds permitted size.";
    }
?>