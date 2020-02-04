<!DOCTYPE html>
<html lang="cz">
<head>
    <title>pyramidka</title>
    
</head>

<body>
<style>
    .brick {
        display: inline-block;
        width: 70px;
        height: 70px;
        background-color: black; 
    }
    .brick:hover {
        background-color: royalblue;
        transition: background-color 1000ms linear;
        transition: all 1000ms linear;
        width: 500px;
        height: 500px;
    }
    .clear {
        clear: both;
    }
    .text-center {
        text-align: center;
    }

 </style>
<div class="text-center">
<?php
for ($i=0; $i < 7; $i++) {
    for ($j=0; $j < $i; $j++) {
        echo '<div class="brick"></div> ';
    }
    echo '<div class="clear"></div>';
}
?>
</div>
</body>
</html>               