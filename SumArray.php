<?php
function sum_array( $no1, $no2 ) {
    $array = [10, 20, 30, 40, 50, 60, 70, 80, 90, 100];
	//Insert your code here 
    if($no1 < 0 && $no2 < 0) {
        return -1;
    }
    if($no1 > $no2){
        return 0;
    }
    $ind_no1 = array_search($no1,$array,true);
    $ind_no2 = array_search($no2,$array,true);
    if(!array_key_exists($ind_no1,$array) && !array_key_exists($ind_no2,$array)){
        return 0;
    }
    $sum = 0;
    for($i = $ind_no1; $i <= $ind_no2; $i++){
        $sum += $array[$i];
    }
    echo $sum;
}
?>
<html>
<head>
    <meta charset="utf-8">
    <title>PHP Coding Test</title>
</head>
<body>
    <p><strong>Arrays</strong> play important role in programming. They are used to group similar data types. An array has a common name and each individual element is accessed by an index.</p>
    <p>In this exercise we're working with an array of 10 integers, as follows: <strong>[10, 20, 30, 40, 50, 60, 70, 80, 90, 100]</strong>. 0 is the first index and 9 is the last index of the array.</p>
    <p>Write a function that receives two integers as parameters. <strong>The function returns the sum of the elements in the array found between those two integers.</strong> </p>
    <p>For example, if we use 30 and 60 as parameters, the function should return 180.</p>
    <p>A few additional requirements:</p>
    <ul>
        <li>The two integers passed to the function should be positive; if not, the function should return -1.</li>
        <li>Validate that the first integer is lower than the second integer. If not, the function should return 0.</li>
        <li>If the first integer is in the array, and the second is above 100, for example 90 and 120, then the function should return the sum of those integers that are within the array and in between the range given. In this case, that would be 190.</li>
        <li>If both integers are not found in the array, for example 110 and 120, the function should return 0.</li>
    </ul>
    <p>
        examples
        <br/>Input: <code><strong>sum_array(10, 20)</strong></code>
        <br/>Output: <code><strong>30</strong></code>
        <br/>Input: <code><strong>sum_array(10, 30)</strong></code>
        <br/>Output: <code><strong>60</strong></code>
        <br/>Input: <code><strong>sum_array(30, 50)</strong></code>
        <br/>Output: <code><strong>120</strong></code>
        <br/>Input: <code><strong>sum_array(90, 100)</strong></code>
        <br/>Output: <code><strong>190</strong></code>
    </p>
    <p><?php echo sum_array(10, 20); ?></p>
    <p><?php echo sum_array(10, 30); ?></p>
    <p><?php echo sum_array(30, 50); ?></p>
    <p><?php echo sum_array(90, 120); ?></p>
</body>
</html>