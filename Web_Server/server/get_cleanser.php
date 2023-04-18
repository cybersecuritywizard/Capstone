<?php

include('connection.php');


//$stmt = $conn->prepare("SELECT * FROM products WHERE product_category='Cleanser' LIMIT 4");

//$stmt->execute();


//$cleanser = $stmt->get_result();//[]

//vulnerable code starts
$sql = "SELECT * FROM products WHERE product_category='Cleanser' LIMIT 4";


$cleanser = $conn->query($sql);
//we can use this too
//$product_category = mysqli_query($conn, $sql);





?>