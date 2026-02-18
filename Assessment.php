<?php
$name = $email = $age = "";
$nameErr = $emailErr = $ageErr = $passErr = "";
$success = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST["name"];
    $email = $_POST["email"];
    $age = $_POST["age"];
    $password = $_POST["password"];

    if (empty($name)) {  
        $nameErr = "Name is required";
    }

    if (empty($email)) {
        $emailErr = "Email is required"; 
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $emailErr = "Invalid email format";
    }

    if (empty($age)) {
        $ageErr = "Age is required";
    } elseif ($age < 18) {
        $ageErr = "Age must be 18 or above";
    }

    if (empty($password)) {
        $passErr = "Password is required";
    } elseif (strlen($password) < 8) {
        $passErr = "Password must be at least 8 characters";
    } elseif (!preg_match("/[0-9]/", $password)) {
        $passErr = "Password must contain 1 number";
    } elseif (!preg_match("/[\W]/", $password)) {
        $passErr = "Password must contain 1 special character";
    }


    if (empty($nameErr) && empty($emailErr) && empty($ageErr) && empty($passErr)) {
        $success = true;
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
    }
}
?>



<h2>Registration Form</h2>

<?php if ($success): ?>
    <p class="success">Form submitted successfully!</p>
    <p>Name: <?php echo htmlspecialchars($name); ?></p>
    <p>Email: <?php echo htmlspecialchars($email); ?></p>
    <p>Age: <?php echo htmlspecialchars($age); ?></p>        
    <p>Hashed Password: <?php echo $hashedPassword; ?></p>
<?php endif; ?>

<form method="POST">

    Name:
    <input type="text" name="name" value="<?php echo htmlspecialchars($name); ?>">
    <span class="error"><?php echo $nameErr; ?></span>
    <br><br>

    Email:
    <input type="text" name="email" value="<?php echo htmlspecialchars($email); ?>">
    <span class="error"><?php echo $emailErr; ?></span>
    <br><br>

    Age:
    <input type="number" name="age" value="<?php echo htmlspecialchars($age); ?>">
    <span class="error"><?php echo $ageErr; ?></span>
    <br><br>

    Password:
    <input type="password" name="password">
    <span class="error"><?php echo $passErr; ?></span>
    <br><br>

    <input type="submit" value="Submit">

</form>

</body>
</html>

<hr>






<?php
$products = [
    ["name" => "Laptop", "price" => 50000],
    ["name" => "Mobile", "price" => 20000],
    ["name" => "Tablet", "price" => 15000],
];

$total=0;
foreach ($products as $product) {
    $total += $product["price"];}
    echo "Total Price: " . $total . "<br>";
?>




<?php
 
  $max=0;
foreach ($products as $product) {
    if ($product["price"] > $max) {
        $max = $product["price"];
    }}
    echo "Most Expensive Product Price: " . $max . "<br>";  
?>





<?php  
 foreach ($products as $product) 
    {
    if ($product["price"] > 18000) {
        echo $product["name"] . " costs more than 18000.<br>";
    }}
?>

<hr>        


<?php
     $text="PHP is powerful and PHP is widely used";
     echo "Words: " . str_word_count($text)." <br>";
     echo "Words Count: " . substr_count($text, "PHP")." <br>";
     echo "Replaced Text: " . str_replace("PHP", "Laravel", $text);
?>