<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords</title>
</head>
<body>
    

<?php
    $badword=$_GET["badword"];
    $paragraph= "<p>Spoiler alert : quello sei tu</p>";
    echo $paragraph
    ?>

<h3>La frase originale è lunga <?php echo strlen($paragraph)-9 ?> Caratteri</h3>

<?php
    echo str_replace($badword,"***",$paragraph);  
    ?>

<h3>La frase censurata è lunga <?php echo strlen(str_replace($badword,"***",$paragraph))-9 ?> Caratteri</h3>



</body>
</html>