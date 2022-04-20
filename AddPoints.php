<?php
function find_total( $my_numbers ) {
	//Insert your code here 

    for($i = 0; $i < count($my_numbers); $i++){
        $result = 0;
        if($my_numbers[$i] == 8){
            $result = $result + intval(5);
        }else{
            if($my_numbers[$i]%2 == 0){
                $result = $result + intval(1);
            }else{
                $result = $result + intval(3);
            }
        }
         echo $result;   
    }
}
?>
<html>
<head>
    <meta charset="utf-8">
    <title>PHP Coding Test</title>
</head>
<body>
    <p>Given an array of integers, compute a total score based on the following rules:</p>
    <ol>
        <li>Add 1 point for every even number (other than 8) in the array</li>
        <li>Add 3 points for every odd number in the array</li>
        <li>Add 5 points for every time you encounter an 8 in the array</li>
    </ol>
    <p>
        examples
    </p>
    <p>Input: <code><strong>my_numbers=[1,2,3,4,5]</strong></code>
    <br/>Output: <code><strong>11</strong></code></p>
    <p>Input: <code><strong>my_numbers=[15,25,35]</strong></code>
    <br/>Output: <code><strong>9</strong></code></p>
    <p>Input: <code><strong>my_numbers=[8,8]</strong></code>
    <br/>Output: <code><strong>10</strong></code></p>
    <p><?php echo find_total([1,2,3,4,5]); ?></p>
    <p><?php echo find_total([15,25,35]); ?></p>
    <p><?php echo find_total([8,8]); ?></p>
</body>
</html>