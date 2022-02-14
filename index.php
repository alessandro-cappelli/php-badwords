<?php
    $text = "Lorem ipsum dolor, sit amet consectetur ipsum elit. Omnis repellat, <br> maiores esse vel ipsum voluptates commodi ipsum culpa rerum ipsum quasi <br> dolores ipsum in porro ipsum voluptas quae ipsum. Obcaecati.";
    $noWord = array('ipsum');
    $string = array('***');
    
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h2><?php echo str_replace($noWord, $string, $text) ?></h2>
    
    
</body>
</html>