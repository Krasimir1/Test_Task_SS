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


    function longestSeq($arr){
        if(count($arr) == 1){
            $seqArr[0] = $arr[0];
        }else{
            $elementsBeforeElement = array();
            $lastElement = array();
            $maxSeqEl =0;
            $indexOfBestElement;

            for($i=0; $i<count($arr); $i++){
                $elementsBeforeElement[$i] = 0;
                $lastElement[$i] = -1;
                
                for($j=0; $j<$i; $j++){
                    if($arr[$i] > $arr[$j] && $elementsBeforeElement[$j] >= $elementsBeforeElement[$i]){
                        $elementsBeforeElement[$i] = $elementsBeforeElement[$j] + 1;
                        $lastElement[$i] = $j;
                    }

                 
                }
                if($maxSeqEl < $elementsBeforeElement[$i]){
                    $indexOfBestElement = $i;
                    $maxSeqEl = $elementsBeforeElement[$i];
                }
            }
           
            $seqArr = array();
            for($i=0; $i<$maxSeqEl + 1; $i++){
            
                $seqArr[$i] = $arr[$indexOfBestElement];
                $indexOfBestElement = $lastElement[$indexOfBestElement];

            }
            $seqArr = array_reverse($seqArr);
        }
           return $seqArr;
    }

    function printArray($arr){
        foreach($arr as $el){
            echo $el . " ";
        }
    }

?>