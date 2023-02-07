<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Mini test</title>
</head>
<style>
   .square1{
    height:20px;
    width:20px;
    float:left;
    border:1px solid gray;
    margin-left:5px;
    margin-bottom:5px;
    background-color: green;
}
.square2{
    height:20px;
    width:20px;
    float:left;
    border:1px solid gray;
    margin-left:5px;
    margin-bottom:5px;
    background-color: red;
} 
</style>


<body>
<?php
    $i=1;
    while ($i<=11){
        for($a = 0; $a < 4; $a++){
        for($j = 0; $j < 4; $j++){
            if($a%2==0){
                echo("<div class='Square1'></div>");
            }else{
                echo("<div class='Square2'></div>");
            }
        }
        echo("<div style='clear:both'></div>");
    };
    $i++;
    }
?>

</body>
</html>