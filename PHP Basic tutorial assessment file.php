 <?php
$name = "John";
$age = 25;

echo "My name is $name and I am $age years old.";
?>


<?php
$count = 10;

function increaseCount() {
    global $count;   
    $count += 5;
}

increaseCount();

echo "Updated Count: " . $count;
?>

  

<?php
$num = -5;

if ($num > 0) {
    echo "Number is Positive";
} elseif ($num < 0) {
    echo "Number is Negative";
} else {
    echo "Number is Zero";
}
?>




<?php
$day = 3;

switch ($day) {
    case 1:
        echo "Monday";
        break;
    case 2:
        echo "Tuesday";
        break;
    case 3:
        echo "Wednesday";
        break;
    case 4:
        echo "Thursday";
        break;
    case 5:
        echo "Friday";
        break;
    case 6:
        echo "Saturday";
        break;
    case 7:
        echo "Sunday";
        break;
    default:
        echo "Invalid Day";
}
?>


<?php
$age = 20;

echo ($age >= 18) ? "You are an adult." : "You are a minor.";
?>


<?php
for ($i = 1; $i <= 10; $i++) {
    echo $i . " ";
}
?>


<?php
$i = 1;
while ($i <= 10) {
    echo $i . " ";
    $i++;
}
?>


<?php
$i = 1;
do {
    echo $i . " ";
    $i++;
} while ($i <= 10);
?>

 
<?php
$num = 5;
$factorial = 1;

for ($i = 1; $i <= $num; $i++) {
    $factorial *= $i;
}

echo "Factorial of $num is $factorial";
?>


<?php
$numbers = [2, 5, 8, 12, 7];
$sum = 0;

foreach ($numbers as $n) {
    $sum += $n;
}

echo "Total Sum: " . $sum;
?>


<?php
function add($a, $b) {
    return $a + $b;
}

function subtract($a, $b) {
    return $a - $b;
}

function multiply($a, $b) {
    return $a * $b;
}

function divide($a, $b) {
    if ($b == 0) {
        return "Cannot divide by zero";
    }
    return $a / $b;
}

echo add(10, 5) . "<br>";
echo subtract(10, 5) . "<br>";
echo multiply(10, 5) . "<br>";
echo divide(10, 5);
?>



<?php
function isPrime($num) {
    if ($num <= 1) {
        return false;
    }

    for ($i = 2; $i <= sqrt($num); $i++) {
        if ($num % $i == 0) {
            return false;
        }
    }

    return true;
}

$number = 7;

if (isPrime($number)) {
    echo "$number is a Prime number.";
} else {
    echo "$number is not a Prime number.";
}
?>
