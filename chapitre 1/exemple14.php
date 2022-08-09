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

        $roll = rand (1, 6);

        if ($roll == 1) {
            $english = "One";
        }
        else if($roll == 2){
            $english = "Two";
        }
        else if ($roll == 3){
            $english = "Three";
        }
        else if ($roll == 4){
            $english = "Four";
        }
        else if ($roll == 5){
            $english = "Five";
        }
        else if ($roll == 6){
            $english = "Six";
        }

        echo "<p>You rolled a " . $english . "</p>";

        if ($roll == 6) {
            echo "<p>You win!</p>";
        }
        else{
            echo "<p>Sorry, you didn't win. Better luck next time!</p>";
        }
    ?>
</body>
</html>