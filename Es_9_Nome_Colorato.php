<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nome colorato</title>
</head>
<body>
    <?php 
    
    $colore="royalblue";
    $nome="Marco";
    $r="38";
    $g="180";
    $b="157";
    $str="<h1 style='color: rgb(".$r.",".$g.",".$b.");'>".$nome."</h1>";

    echo $str;
    
    ?>

</body>
</html>