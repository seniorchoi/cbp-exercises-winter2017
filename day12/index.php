<?php

define('IN_PRODUCTION', false);

require 'functions.php';

$my_greeting = "Hello, world!";

//print_greeting();

$first_name = 'Jan';
$surname = 'Polak';
$year_of_birth = 1982;
$height = 186;


// 100 lines of code
$first_name = '';

define('MY_OS', 'Windows 10');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP playground</title>
</head>
<body>
    
    First name: <?php echo $first_name; ?><br />
    Surname: <?php echo $surname; ?><br />
    YOB: <?php echo $year_of_birth; ?><br />
    Height: <?php echo $height; ?>cm<br />

    My OS is: <?php echo MY_OS; ?>


    <?php
        function celsius_to_fahrenheit($celsius)
        {
            $fahrenheit = (9/5) * $celsius + 32;
            return $fahrenheit;
        }
    ?>
    <br />
    Today is <?php echo celsius_to_fahrenheit(-6); ?>&deg; F

</body>
</html>