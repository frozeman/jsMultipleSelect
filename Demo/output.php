<!DOCTYPE HTML>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>jsMultipleSelect Demo Output</title>
</head>
<body>

<h1>The Output is:</h1>

<?php

    // DISPLAY THE OUTPUT WHEN THE FORM IS SEND
    if(!empty($_POST)) {
        echo '<pre>';
        print_r($_POST);
        echo '</pre>';
    }

?>
</body>
</html>