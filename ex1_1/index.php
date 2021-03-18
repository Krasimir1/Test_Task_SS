
<html>
    <body>
        <form method="get" action="">
            <input type="submit" name="shortest" value="From Shortest"/>
            <input type="submit" name="longest" value="From Longest"/>
        </form>
    </body>
</html>

<?php
// var_dump($_GET);
$arr = array(1, 2, 3, 4);
$tempArray = array();
if(isset($_GET['shortest'])){
    for($i=0; $i<count($arr);$i++){
        combinations($arr, 0, $i+1, 0, $tempArray);
        echo "<br>";
    }
}elseif(isset($_GET['longest'])){
    for($i=count($arr)+1; $i>0;$i--){
        combinations($arr, 0, $i-1, 0, $tempArray);
        echo "<br>";
    }
}


function combinations($array, $start, $combCount, $count, $tempArray){
    if($count == $combCount){
        for($k=0;$k<$combCount;$k++){
            echo $tempArray[$k]."  ";
        }
        echo "<br>";
        return;
    }
    for($i=$start;$i<count($array);$i++){
        //  echo $array[$i];
        //  echo "<br>";
        $tempArray[$count] = $array[$i];
        combinations($array, $i+1, $combCount, $count+1, $tempArray);
        // echo "<br>";
    }
}





?>