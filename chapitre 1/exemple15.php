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
        $english = [
            1 => "One",
            2 => "Two",
            3 => "Three",
            4 => "Four",
            5 => "Five",
            6 => "Six"
        ];

        $roll = rand(1, 6);

        echo "<p>You rolled a ". $english[$roll] . "</p>";

        if ($roll == 6) {
            echo "<p>You win!</p>";
        }
        else {
            echo "<p>Sorry, you didn't win, better luck next time!</p>";
        }
    ?>
</body>
</html>