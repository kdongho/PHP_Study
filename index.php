<?php
    function print_title(){
        if (isset($_GET['id'])){
            echo $_GET['id'];
        }
        else{ 
            echo 'WELCOME';
        }
    }
    
    function print_description(){
        if (isset($_GET['id'])){
            echo file_get_contents("data/".$_GET['id']);
        } else{
            echo "HELLO PHP";
        }
    }

    function print_list(){
        $dir = "data";
        $dir_list = scandir($dir);
        // var_dump($dir_list);
        $i = 0;
        while($i < count($dir_list)){
            if($dir_list[$i] != '.'){
                if($dir_list[$i] != '..'){
                    echo "<li><a href=\"index.php?id=$dir_list[$i]\">$dir_list[$i]</a></li><br>";
                }
            }
            $i++;
        }
    }
?>

  



<!doctype html>
<html>
<head>
  <title>WEB1 - Welcome</title>
  <meta charset="utf-8">
  <?php
    print_title();
  ?>
</head>
<body>
  <h1><a href="index.php">WEB</a></h1>
  <ol>
  <?php
    print_list();
    
    ?> 
</ol>

  <h2>
    <?php    
  print_title();
  ?>
  </h2>
    <?php
        print_description();
    ?>
  </p>
</body>
</html>
