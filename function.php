<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>function</h1>
    <?php
    $str = 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
    
    Aspernatur obcaecati qui eligendi, est, commodi totam vero laboriosam sequi recusandae, 
    
    minus quos nesciunt quam. Libero earum nemo porro! Est, cupiditate autem?';
    echo $str;
    ?>

    <h2>strlen()</h2>
    <?php
    echo strlen($str)
    ?>

    <h2>nl2br</h2>
    <?php
    echo nl2br($str)
    ?>
</body>
</html>