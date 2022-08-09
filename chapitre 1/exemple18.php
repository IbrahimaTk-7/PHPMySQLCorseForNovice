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
        $firstName = $_GET['firstname'];
        $lastName = $_GET['lastname'];
        echo 'Welcome to our website, ' .
            htmlspecialchars($firstName, ENT_QUOTES, 'UTF-8') . " " .
            htmlspecialchars($lastName, ENT_QUOTES, 'UTF-8') . " ! ";
    ?>
</body>
</html>