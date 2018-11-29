<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
        $x ="outside";
        echo $x;
        echo "<br>";
        function convert(){
        global $x;
        $x ="inside";
        }
    convert();
    echo $x;
    ?>

</body>
</html>