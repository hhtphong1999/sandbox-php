<?php
    function letterCounterCheck( $string ) {
        return LetterCounter::CountLettersAsString($string);
    }
    // DO NOT MODIFY THE CODE ABOVE

    class LetterCounter {
        static function CountLettersAsString($string){
            $count = [];
            for($i = 0; $i < strlen($string); $i++){
                $countNumber = 0;
                for($j = 0; $j < strlen($string); $j++){
                    if($string[$i] == $string[$j]){
                        $countNumber++;
                    }
                }
                $count[$string[$i]] = $countNumber;
            }
            for($i = 0; $i < strlen($count); $i++){
                $startString = "";
                for($j = 0; $j < $count[$i]; $j++){
                    $startString+ = "*";
                }
                echo $count[$i]+":"+$startString
            }
        }
        
    }
?>
<html>
<head>
    <meta charset="utf-8">
    <title>PHP Coding Test</title>
</head>
<body>
    <p>Write a class <b>LetterCounter</b> and implement a static method <b>CountLettersAsString</b> which receives a string parameter and returns a string that shows how many times each letter shows up in the string by using an asterisk (<b>*</b>).</p>
    <p>The return string should include only the letters. There should be no spaces in the output and the letters must be separated by a comma (<b>,</b>) as shown in the example below.</p>
    <p>The return string must list the letters in order of their first appearance in the original string. All letters in the return string must be lowercase.</p>
    <p>
        examples
        <br/>Input: <code><strong>LetterCounter::CountLettersAsString(“Test HLAssurance”)</strong></code>
        <br/>Output: <code><strong>“t:**,e:**,s:***,h:*,l:*,a:**,u:*,r:*,n:*,c:*”</strong></code>
        <br/>Input: <code><strong>LetterCounter::CountLettersAsString(“INTERVIEW”)</strong></code>
        <br/>Output: <code><strong>“i:**,n:*,t:*,e:**,r:*,v:*,w:*”</strong></code>
        <br/>Input: <code><strong>LetterCounter::CountLettersAsString(aaa)</strong></code>
        <br/>Output: <code><strong>“a:***”</strong></code>
        <br/>Input: <code><strong>LetterCounter::CountLettersAsString(coding exercise)</strong></code>
        <br/>Output: <code><strong>“c:**,o:*,d:*,i:**,n:*,g:*,e:***,x:*,r:*,s:*”</strong></code>
    </p>
    <p><?php echo letterCounterCheck('Test HLAssurance'); ?></p>
    <p><?php echo letterCounterCheck('INTERVIEW'); ?></p>
    <p><?php echo letterCounterCheck('aaa'); ?></p>
    <p><?php echo letterCounterCheck('coding exercise'); ?></p>
</body>
</html>