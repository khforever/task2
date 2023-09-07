
<?php

echo "<h1>"."1 PHP script to replace" ."</h1>";
echo "<br>";



$text="the quick brown fox jumps over the lazy dog.";

$result1=str_replace("the","that",$text);
echo $result1;


echo "<hr>";











echo "<h1>"."2 PHP program to add two numbers "."</h1>";
echo "<br>";


$num1=20;
$num2=10;

$result2 =$num1+$num2;

echo $result2;












echo "<hr>";

echo "<h1>"."3 PHP program to Subtract  two numbers "."</h1>";
echo "<br>";


$result3=$num1 -$num2;

echo $result3;

echo "<hr>";




echo "<h1>"."4 PHP program to Multiply   two numbers "."</h1>";
echo "<br>";


$result4=$num1 *$num2 ;

echo $result4 ;
echo "<hr>";




echo "<h1>"."5 PHP program to Divide     two numbers "."</h1>";
echo "<br>";


$result5=$num1/$num2;

echo $result5;

echo "<hr>";


echo "<h1>"."6  Cast string to integer using casting"."</h1>";

 
echo "<br>";

$x="50";
$int_cast=(int) $x;
echo $int_cast;


echo "<hr>";



echo "<h1>"."7  count number of char in statment"."</h1>";

echo "<br>";
 
 
$text7= "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's 
 standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
  scrambled it to make a type specimen book";
 


$result7=str_word_count($text7);


echo $result7;
echo "<hr>";


echo "<h1>"."8   php script to reverse"."</h1>";
 
echo "<br>";

$text8=  "Hello World!!";

$result8=strrev ($text8);

echo $result8;

echo "<hr>";




echo "<h1>"."9   php script to replace"."</h1>";

echo "<br>";

$text9="this is a cat";
$reult9=str_replace("cat","dog",$text9);
echo $reult9 ;



echo "<hr>";


echo "<h1>". "10  write the text inside single quotes"."</h1>";


 

echo "<br>";

$text10='I\'m a software engineer';
 
echo $text10 ;

echo "<hr>";






?>