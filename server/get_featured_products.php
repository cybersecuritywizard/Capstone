<?php

include('connection.php');


//$stmt = $conn->prepare("SELECT * FROM products LIMIT 4");

//stmt->execute();
//$featured_products = $stmt->get_result();//[]

//vulnerable code starts
$sql = "SELECT * FROM products LIMIT 4";


$featured_products = $conn->query($sql);
//we can use this too
//$featured_products = mysqli_query($conn, $sql);


?>