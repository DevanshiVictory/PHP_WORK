<?php 
$word = "Hello World";
$uppercaseWord = strtoupper($word);
$lenghtOfWord = strlen($word);
$lowercaseWord = strtolower($word);

echo $uppercaseWord . "<br>";
echo $lenghtOfWord . "<br>";
echo $lowercaseWord . "<br>";

?>


<?php  
$str = 'one,two,three,four,five';
echo (explode(',', $str)[4]) . "<br>"; 
echo (explode(',', $str)[0]) . "<br>";
?>

<?php 
$arr = array('Hello','World!','Beautiful','Day!');
echo implode(" ",$arr)."<br>";
echo implode("+",$arr)."<br>";
echo implode("-",$arr)."<br>";
echo implode("X",$arr)."<br>";
?>


<?php
     echo "Replaced Text: " . str_replace("World", "Laravel", $word). "<br>";
?>

<?php   
$text = "PHP (Hypertext Preprocessor) is a widely-used open-source server-side scripting language designed specifically for web development. It is a powerful tool for creating dynamic and interactive web pages. PHP can be embedded into HTML, making it easy to integrate with web content.";
echo substr_count($text, "PHP") . "<br>";

?>