<?php

$cart = [];

// Add Items
array_push($cart, ["name"=>"iPhone", "price"=>1000, "qty"=>1]);
array_push($cart, ["name"=>"Watch", "price"=>500, "qty"=>2]);
array_push($cart, ["name"=>"Shoes", "price"=>800, "qty"=>1]);

echo "Cart Items:<br>";
print_r($cart);

// Remove Watch
$cart = array_filter($cart, function($item){
    return $item['name'] != "Watch";
});

echo "<br><br>After Removing Watch:<br>";
print_r($cart);

// Calculate Total
$total = 0;
foreach($cart as $item){
    $total += $item['price'] * $item['qty'];
}

echo "<br><br>Grand Total = " . $total;
?>
