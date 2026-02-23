<?php 
 $products = [
            ['name' => 'laptop', 'price' => 1000, 'stock' => 50 , 'category' => 'electronics'],
            ['name' => 'phone', 'price' => 500, 'stock' => 100 , 'category' => 'electronics'],
            ['name' => 'table', 'price' => 200, 'stock' => 20 , 'category' => 'furniture'],
            ['name' => 'chair', 'price' => 100, 'stock' => 40 , 'category' => 'furniture'],
            ['name' => 'headphones', 'price' => 150, 'stock' => 80 , 'category' => 'electronics'],
            
            
];
ksort($products['price']);
echo "<pre>";
print_r($products['price']);
echo "</pre>";


echo "<br>---------------<br>";
echo "<pre>";
print_r($products);
echo "</pre>";

$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
ksort($age);
print_r($age);

echo "<br><br>";

var_dump($products);

echo "<br><br>";


$string = "Hello";

$integer = 123;

$float = 3.14;

echo "<br><br>";
var_dump($string);
echo "<br><br>";
var_dump($integer);
echo "<br><br>";
var_dump($float);



foreach ($products as $product)
    {
        if($product['price']>500)
        {
            echo $product['name'] . " costs more than 500.<br>";
        }
    }
$total = 0;
foreach ($products as $product) 
    
        $total += $product['stock'];
        echo "Total Stock: " . $total . "<br>";


usort($products, function($a, $b) {
return $a['price'] <=> $b['price']; 
});

echo "<h3>Ascending Order (Low to High)</h3>";
foreach ($products as $product) {
    echo $product['name']  . $product['price'] . "<br>";
}



usort($products, function($a, $b) {
return $b['price'] <=> $a['price']; 
});

echo "<h3>Descending Order (High to Low)</h3>";
foreach ($products as $product) {
    echo $product['name']  . $product['price'] . "<br>";
}

?>

