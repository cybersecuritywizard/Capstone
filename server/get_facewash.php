<?php

include('connection.php');


//$stmt = $conn->prepare("SELECT * FROM products WHERE product_category='Face wash' LIMIT 4");

//$stmt->execute();


//$facewash_products = $stmt->get_result();//[]



//vulnerable code starts
$sql = "SELECT * FROM products WHERE product_category='Face wash' LIMIT 4";


$facewash_products = $conn->query($sql);
//we can use this too
//$facewash_products = mysqli_query($conn, $sql);




?>