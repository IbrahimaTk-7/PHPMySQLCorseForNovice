<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $output = " ";
        for ($count = 1; $count <= 10 ; $count++) { 
            $output .= $count . " ";
        }
        include "count.html.php";
    ?>
</body>
</html>