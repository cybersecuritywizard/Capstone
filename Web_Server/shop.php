<?php include('layouts/header.php'); ?>

<?php


include('server/connection.php');



//use the search section
if(isset($_POST['search'])){

 
    $category = $_POST['category'];
    $price = $_POST['price'];

     //1. return number of products 

     $sql = "SELECT * FROM products WHERE lower(product_category) = '$category' ";
    
     $products= mysqli_query($conn, $sql);
    
    }else{
      
      //2. get all products
      $sql = "SELECT * FROM products ";

      $products= $conn->query($sql);
   
}



?>


    <!--Search-->
  <section id="search" class="my-5 py-5 ms-2">
    <div class="container mt-5 py-5">
      <p>Search Products</p>
      <hr>
    </div>

    <form action="shop.php" method="post">
Search <input type="text" name="category" id="category_one" <?php if(isset($category) && $category=='face wash'){echo 'checked';}?>  ><br>


	
  <input type="submit" name="search" value="Search" class="btn btn-primary">
</form>





        <form action="shop.php" method="POST">
         <div class="row mx-auto container">
           <div class="col-lg-12 col-md-12 col-sm-12">
            

            <p>Category</p>
          
               <div class="form-check">
                <input class="form-check-input" value="face wash" type="radio" name="category" id="category_one" <?php if(isset($category) && $category=='face wash'){echo 'checked';}?> >
                <label class="form-check-label" for="flexRadioDefault1">
                  Face Wash
                </label>
              </div>

              <div class="form-check">
                <input class="form-check-input" value="cleanser" type="radio" name="category" id="category_two" <?php if(isset($category) && $category=='cleanser'){echo 'checked';}?>>
                <label class="form-check-label" for="flexRadioDefault2">
                  Cleanser
                </label>
              </div>

               <div class="form-check">
                <input class="form-check-input" value="moisturizer" type="radio" name="category" id="category_two" <?php if(isset($category) && $category=='moisturizer'){echo 'checked';}?>>
                <label class="form-check-label" for="flexRadioDefault2">
                  Moisturizer
                </label>
              </div>

               <div class="form-check">
                <input class="form-check-input" value="perfumes" type="radio" name="category" id="category_two" <?php if(isset($category) && $category=='perfume'){echo 'checked';}?>>
                <label class="form-check-label" for="flexRadioDefault2">
                  Perfumes
                </label>
              </div>

           </div>
         </div>


         <div class="row mx-auto container mt-5">
           <div class="col-lg-12 col-md-12 col-sm-12">

               <p>Price</p>
               <input type="range" class="form-range w-50" name="price" value="<?php if(isset($price)){echo $price;}else{ echo "100";} ?>" min="1" max="1000" id="customRange2">
               <div class="w-50">
                 <span style="float: left;">1</span>
                 <span style="float:right;">200</span>
               </div>
            </div>
          </div>    


          <div class="form-group my-3 mx-3">
            <input type="submit" name="search" value="Search" class="btn btn-primary">
          </div> 

        <form>

  </section>









  
  
  <!--Shop-->
  <section id="shop" class="my-5 py-5">
    <div class="container mt-5 py-5">
      <h3>Our Products</h3>
      <hr>
      <p>Here you can check out our products</p>
    </div>
    <div class="row mx-auto container">


     <?php  while($row = $products->fetch_assoc()) { ?>

      <div onclick="window.location.href='single_product.html';" class="product text-center col-lg-3 col-md-4 col-sm-12">
        <img class="img-fluid mb-3" src="assets/imgs/<?php echo $row['product_image']; ?>"/>
        <div class="star">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
        </div>
        <h5 class="p-name"><?php echo $row['product_name']; ?></h5>
        <h4 class="p-price">$<?php echo $row['product_price'];?></h4>
        <a  class="btn shop-buy-btn" href="<?php echo "single_product.php?product_id=".$row['product_id'];?>">Buy Now</a>
      </div>
      

      <?php } ?>




      







    </div>
  </section>






  <?php include('layouts/footer.php'); ?>

