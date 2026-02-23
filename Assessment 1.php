<?php 
$students = [
    ['name' => 'Alice', 'age' => 20, 'grade' => 85],
    ['name' => 'Bob', 'age' => 22, 'grade' => 90],
    ['name' => 'Charlie', 'age' => 19, 'grade' => 78],
];
foreach ($students as $student) {
    echo "Name: " . $student['name'] . "<br>";
    echo $student['name'] . " is " . $student['age'] . " years old and scored " . $student['grade'] . "<br><br>";
}
?>
<hr>
<?php 
 $products = [
            ['name' => 'laptop', 'price' => 1000, 'stock' => 50 , 'category' => 'electronics'],
            ['name' => 'phone', 'price' => 500, 'stock' => 100 , 'category' => 'electronics'],
            ['name' => 'table', 'price' => 200, 'stock' => 20 , 'category' => 'furniture'],
            ['name' => 'chair', 'price' => 100, 'stock' => 40 , 'category' => 'furniture'],
            ['name' => 'headphones', 'price' => 150, 'stock' => 80 , 'category' => 'electronics'],
            
            
];
sort($students);
print_r($students)."<br><br>";
echo "<pre>";
"<br><br>".print_r(array_merge($students, $products));
echo "</pre>";

?>
<hr>
<?php 
$string = "Hello, World!";
$length = strlen($string);
echo "The length of the string is: " . $length . "<br>";

function reverseString($string) {
    return strrev($string);
    
} 
print_r ("The reversed string is: " . reverseString($string) . "<br>");    
?>
<hr>

<html>
<body>
    <form action="Assessment1.php" method="get">
        name : <input type="text" name="name"><br><br>
        Email : <input type="email" name="email"><br><br>
        <input type="submit" value="Submit">
    </form>
</body>     
</html>


<?php
if (isset($_GET['name']) && isset($_GET['email'])) {
    $name = $_GET['name'];
    $email = $_GET['email'];
    echo "Name: " . $name . "<br>";
    echo "Email: " . $email . "<br>";
} 
 ?>
<hr>


 <?php 
session_start();
$_SESSION['user'] = "Devanshi";
?>
<a href="page2.php">Go to Page 2</a>
<hr>

<?php 

/* Initialize product array */
if (!isset($_SESSION['products'])) {
    $_SESSION['products'] = [];
}

/* Add Product */
if (isset($_POST['add'])) {

    $product = [
        "name" => $_POST['name'],
        "price" => $_POST['price'],
        "sku" => $_POST['sku'],
        "description" => $_POST['description']
    ];

    $_SESSION['products'][] = $product;

    // Save to file
    $file = fopen("products.txt", "a");
    fwrite($file, implode(",", $product) . "\n");
    fclose($file);
}

/* Delete Product by SKU */
if (isset($_GET['delete'])) {
    $sku = $_GET['delete'];

    foreach ($_SESSION['products'] as $key => $value) {
        if ($value['sku'] == $sku) {
            unset($_SESSION['products'][$key]);
        }
    }
}
?>

<h2>Add Product</h2>
<form method="post">
    Name: <input type="text" name="name"><br>
    Price: <input type="number" name="price"><br>
    SKU: <input type="text" name="sku"><br>
    Description: <input type="text" name="description"><br>
    <input type="submit" name="add" value="Add Product">
</form>

<hr>

<h2>Product List (From Session)</h2>

<?php
foreach ($_SESSION['products'] as $product) {
    echo "Name: " . $product['name'] . " | ";
    echo "Price: " . $product['price'] . " | ";
    echo "SKU: " . $product['sku'] . " | ";
    echo "Desc: " . $product['description'] . " ";
    echo "<a href='?delete=" . $product['sku'] . "'>Delete</a>";
    echo "<br><br>";
}
?>          
<hr>
<h2>Filter by Price > 100</h2>

<?php
if (file_exists("products.txt")) {

    $file = fopen("products.txt", "r");

    while (!feof($file)) {

        $line = fgets($file);
        $data = explode(",", $line);

        if (isset($data[1]) && $data[1] > 100) {
            echo $line . "<br>";
        }
    }

    fclose($file);
}
?> 

