<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        echo "Integer = ";
        $inValue = 100;
        echo $inValue."<br>";

        echo "----------------------------------------------------"."<br>";
    ?>

    <?php
        echo "Double = ";
        $doubleValue = 55.5;
        echo $doubleValue."<br>";

        echo "----------------------------------------------------"."<br>";
    ?>

    <?php
        echo "String Name = ";
        $strName = "Neel";
        echo $strName."<br>";

        echo "String Id = ";
        $strId = "Neel456";
        echo $strId."<br>";

        echo "----------------------------------------------------"."<br>";
    ?>

    <?php
        echo "Converting Between Data Types = ";
        $a = 9.88;
        echo (int) $a."<br>"; //outputs 9

        echo "----------------------------------------------------"."<br>";
    ?>
</body>
</html>