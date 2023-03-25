<?php

// Show your phpinfo on browser.
// phpinfo();



// Use constant to display your website name which mustn’t change across your pages.

const SITE_NAME ="php test";

// Show your server name, address and port.
echo $_SERVER['SERVER_NAME'];
echo "<br/>";
echo $_SERVER['SERVER_ADDR'];
echo "<br/>";
echo $_SERVER['SERVER_PORT'];
echo "<br/>";

// also the filename and path of the currently executing script.
echo __FILE__ ;
echo "<br/>";

// -   Your brother is 10 years old, If you know that :
//     age less than 5 --> Print Msg --> Stay at home,
//     age equal 5 --> Print Msg --> Go to Kindergarden,
//     age between 6 & 12 --> Print Msg --> Go to grade :XXX
//     (Use switch case).

 $n = 10;
 $z = $n - 6;
switch ($n) {
    case 4:
      echo "Stay at home";
      break;
    case 5:
      echo "Go to Kindergarden";
      break;
    case 6:
    case 7:
    case 8:
    case 9:
    case 10:
    case 11:
    case 12:
      echo "Go to grade $z";
      break;

      default:
      echo "you are not young !!!";


  }


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo SITE_NAME; ?></title>
</head>
<body>
    
</body>
</html>

