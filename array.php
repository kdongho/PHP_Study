<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Array</h1>
    <?php
    $coworkers = array('fred','tom','json','ether');
    echo $coworkers[0].'<br>';
    var_dump(count($coworkers));
    echo '<br>';
    array_push($coworkers, 'graphittie');
    var_dump($coworkers);
    ?>
</body>
</html>