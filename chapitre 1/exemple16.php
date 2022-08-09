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


        $roll1 = rand(1, 6);
        $roll2 = rand(1, 6);

        if ($roll1 == 1) {
            $english = "One";
        }
        else if ($roll1 == 2){
            $english = "Two";
        }
        else if ($roll1 == 3){
            $english = "Three";
        }
        else if ($roll1 == 4){
            $english = "Four";
        }
        else if ($roll1 == 5){
            $english = "Five";
        }
        else if ($roll1 == 6){
            $english = "Six";
        }


        if ($roll2 == 1) {
            $englishRoll2 = "One";
        }
        else if ($roll2 == 2){
            $englishRoll2 ="Two";
        }
        else if ($roll2 == 3){
            $englishRoll2 ="Three";
        }
        else if ($roll2 == 4){
            $englishRoll2 ="Four";
        }
        else if ($roll2 == 5){
            $englishRoll2 ="Five";
        }
        else if ($roll2 == 6){
            $englishRoll2 ="Six";
        }

        echo "<p>You rolled a " . $english . " and a " . $englishRoll2 . "</p>";

    ?>
</body>
</html>