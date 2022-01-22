<html>
<body bgcolor="#5CADAD">

<?php
    $x=$_GET['x'];
    $operation=$_GET['plus,minus,multiply,divided'];
    $y=$_GET['y'];
    

    if($operation=='plus'){
        echo "$x $operation $y = ", $x+$y ;
    }
    elseif($operation=='minus'){
        echo "$x $operation $y = ", $x-$y;
    }
    elseif ($operation=='multiply'){
        echo "$x $operation $y = ", $x*$y;
    }
    elseif($operation=='divided'){
        if($y==0){
            echo "無意義";
        }
        else{
            echo "$x $operation $y = ", $x/$y; 
        }   
    }
    else{
        echo "無法辨別";
    }
    
    
    ?>
</body>
</html>