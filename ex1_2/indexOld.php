<?php
$arr1 = array(1);
$arr2 = array(7, 3, 5, 8, -1, 0, 6, 7);
$arr3 = array(1, 2, 5, 3, 5, 2, 4, 1); 
$arr4 = array(0, 10, 20, 30, 30, 40, 1, 50, 2, 3, 4, 5, 6);
$arr5 = array(11, 12, 13, 3, 14, 4, 15, 5, 6, 7, 8, 7, 16, 9, 8);
$arr6 = array(3, 14, 5, 12, 15, 7, 8, 9, 11, 10, 1);
?>

<!DOCTYPE html>
<html>

<head>
    <style>
        table,
        th,
        td {
            border: 1px solid black;
        }
    </style>
</head>

<body>
    <table>
        <tr>
            <th>Input</th>
            <th>Output</th>
        </tr>
        <tr>
            <td><?php echo printArray($arr1)?></td>
            <td><?php echo printArray(longestSeq($arr1))?></td>
        </tr>
        <tr>
            <td><?php echo printArray($arr2)?></td>
            <td><?php echo printArray(longestSeq($arr2))?></td>
        </tr>
        <tr>
            <td><?php echo printArray($arr3)?></td>
            <td><?php echo printArray(longestSeq($arr3))?></td>
        </tr>
        <tr>
            <td><?php echo printArray($arr4)?></td>
            <td><?php echo printArray(longestSeq($arr4))?></td>
        </tr>
        <tr>
            <td><?php echo printArray($arr5)?></td>
            <td><?php echo printArray(longestSeq($arr5))?></td>
        </tr>
        <tr>
            <td><?php echo printArray($arr6)?></td>
            <td><?php echo printArray(longestSeq($arr6))?></td>
        </tr>

    </table>

</body>

</html>
<?php 


    
    // printArray($arr1);
    // echo " - ";
    // printArray(longestSeq($arr1));
    // echo "<br>";
    // // var_dump(longestSeq($arr));

    
    //  printArray($arr);
    //  echo " - ";
    //  printArray(longestSeq($arr));
    //  echo "<br>";

    function longestSeq($arr){

            $longestSeqArr = array();
           if(count($arr) == 1){
                $longestSeqArr[] = $arr[0];
           }else{
          
            for($i = 0; $i<count($arr); $i++){
                
                // echo "i - ".$arr[$i];
                // echo "<br>";
                $longestSeqTempArr = array();
             
                    for ($j = 0; $j < $i; $j++ ){
                        if($arr[$i] > $arr[$j]){

                      
                        // $biggestNum;
                        if($j == 0 || !isset($biggestNum)){
                            $biggestNum = $arr[$j];
                            $longestSeqTempArr[] = $arr[$j];
                           
                        }
                    if ($arr[$i] > $arr[$j] && $arr[$j] > $biggestNum ) {
                        // echo "here";
                        $biggestNum = $arr[$j];
                        $longestSeqTempArr[] = $arr[$j];
                        
                    
                    }
                    
                    // echo "biggestNum - ". $biggestNum;
                    // echo "<br>";
                        }
                    }
                    $longestSeqTempArr[] = $arr[$i];
                    // print_r($longestSeqTempArr);
                    // echo "<br>";
                    // print_r($longestSeqArr);
                    // echo "<br>";
                    // echo "-----------------------------------------";
                    // echo "<br>";
                    // echo $elementWithMostSeq;
                    // echo "<br>";
                    if(count($longestSeqTempArr) > count($longestSeqArr)){
                        $longestSeqArr = $longestSeqTempArr;
                        
                    }
                    unset($longestSeqTempArr);
                    unset($biggestNum);
            }
        }
            return $longestSeqArr;
           
    }

    function printArray($arr){
        foreach($arr as $el){
            echo $el . " ";
        }
    }

?>