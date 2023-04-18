<?php

include('connection.php');


//$stmt = $conn->prepare("SELECT * FROM products WHERE product_category='Moisturizer' LIMIT 4");

//$stmt->execute();


//$moisturizer = $stmt->get_result();//[]

//vulnerable code starts
$sql = "SELECT * FROM products WHERE product_category='Moisturizer' LIMIT 4";


$moisturizer = $conn->query($sql);
//we can use this too
//$moisturizer = mysqli_query($conn, $sql);





?>