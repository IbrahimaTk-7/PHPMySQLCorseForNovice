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
    
        if (!isset($_POST['firstName'])){
            include __DIR__ . "/../templates/form.html.php";
        } else {
            $firstName = $_POST['firstName'];
            $lastName = $_POST['lastName'];

            if ($firstName == 'Tom' && $lastName == 'Butler') {
                $output = "Welcome, oh glorious leader!";
            } else {
                $output = 'Welcome to our website, ' .
                htmlspecialchars($firstName, ENT_QUOTES, 'UTF-8') . " " . 
                htmlspecialchars($lastName, ENT_QUOTES, 'UTF-8') . '!';
            }

            include __DIR__ . '/../templates/welcome.html.php';
        }

    ?>
</body>
</html>