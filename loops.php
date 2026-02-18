<?php 
for ($i = 0; $i < 11; $i++) {
    if ($i % 2 == 0) {
        echo "$i is even<br>";}
    else {
        echo "$i is odd<br>";}
}
?>
<hr>


<?php
for ($i = 1; $i <= 4; $i++) {
    for ($j = 1; $j <= 4; $j++) {
        echo "* ";
    }
    echo "<br>";
}
?>
<hr>
                  
<?php
$word = "HELLO";
$count = 0;   
for ($i = 0; $i < strlen($word); $i++) {
    $count++;
}

echo "Length of word is: " . $count . "<br>";
?>
<hr>

<?php 
$i = 1;
while ($i <= 10) {
    echo "5 x $i = " . (5 * $i) . "<br>";
    $i++;
}
?>
<hr>

<?php
$num = 1234;
$reverse = 0;

while ($num > 0) {
    $digit = $num % 10;
    $reverse = ($reverse * 10) + $digit;
    $num = (int)($num / 10);
}
echo "Reversed number is: $reverse";
?>
<hr>

<?php
$num = 121;
$temp = $num;
$reverse = 0;

while ($num > 0) {
    $digit = $num % 10;
    $reverse = ($reverse * 10) + $digit;
    $num = (int)($num / 10);
}

if ($temp == $reverse) {
    echo "Palindrome Number";
} else {
    echo "Not Palindrome";
}
?>

<hr>    

<?php
$num=57859;
$largest=0;
do{
    $digit=$num%10;
    if($digit>$largest){
        $largest=$digit;    
    }
    $num=(int)($num/10);
}while($num>0);
echo "Largest digit is: " . $largest;
?>
<hr>

<?php
$num = 4729;
$smallest = 9;  

do {
    $digit = $num % 10;

    if ($digit < $smallest) {
        $smallest = $digit;
    }

    $num = (int)($num / 10);

} while ($num > 0);

echo "Smallest digit is: $smallest";
?>
 <hr>
    
 <?php ?> 