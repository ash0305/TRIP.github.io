<?php
    $str="This <br>";
    echo $str;
    $lenn = strlen($str);
    echo"The length of this string is ";
    echo $lenn;

?>

<?php
//concatenate: (.)string concatenation operator
    $str="This is";
    echo $str."<br>";
    //length of the string
    $lenn = strlen($str);
    echo"The length of this string is ". $lenn;
   //reversed string
    echo"The reversed string is ". strrev($str);
    //position of the string 
    echo"The search for is in this string is ". strpos($str,"is"). ".Thank you <br>";
    //string replace
    echo"The replaced string is ". str_replace("is","at",$str). ".Thank you <br>";

?>