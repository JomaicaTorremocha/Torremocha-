<?php
include "db_conn.php";

if (isset($_POST["submit"])) {
   $name = $_POST['Name'];
   $brands = $_POST['Brands'];
   $size = $_POST['Size'];
   $price = $_POST['Price'];

   $sql = "INSERT INTO `menu`(`Name`, `Brands`, `Size`, `Price`) VALUES ('$name','$brands','$size','$price')";

   $result = mysqli_query($conn, $sql);

   if ($result) {
      header("Location: index.php?msg= New record created Successfully");
   } else {
      echo "Failed: " . mysqli_error($conn);
   }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">

   <!-- Bootstrap -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

   <!-- Font Awesome -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

   <title>SHOES SHOP</title>
</head>

<body>
<style>
  .button a{
           position: relative;
           text-decoration: none;
           background-color: cyan;
           align-items: center;
           justify-content: center;
           color: #ff0080;
           border: 2px solid #333;
           text-align: center;
           width: 100px;
           height: 30px;
           padding-top:4px;
           top:5px;
           left:12px;
           margin:3px;
           cursor:pointer;
           font-size:25px;
           border-radius: 25px
      }
   </style>
<div class="button">
        <a href= "dashboard.php" >Back</a>

</div>
    
   <nav class="navbar navbar-light justify-content-center fs-3 mb-5" style="background-color: #FF00FF;">
      SHOP
   </nav>
   
   <div class="container">
      <div class="text-center mb-4">
         <h3>Add New Product</h3>
      </div>

      <div class="container d-flex justify-content-center">
         <form action="" method="post" style="width:50vw; min-width:300px;">
            <div class="row mb-3">
               
                <div class="col">
                  <label class="form-label">Name</label>
                  <input type="text" class="form-control" name="Name" placeholder="Name">
               </div>
               </div>

               <div class="mb-3">
                  <label class="form-label">Brands</label>
                  <input type="Brands" class="form-control" name="Brands" placeholder="Brands">
               </div>

               <div class="mb-3">
                  <label class="form-label">Size</label>
                  <input type="Size" class="form-control" name="Size" placeholder="Size">
               </div>

               <div class="mb-3">
                  <label class="form-label">Price</label>
                  <input type="Price" class="form-control" name="Price" placeholder="Price">
               </div>

               <div>
                  <button type="submit" class="btn btn-success" name="submit">Save</button>
                  <a href="index.php" class="btn btn-danger">Cancel</a>
               </div>
         </form>
      </div>
   </div>

   <!-- Bootstrap -->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
   <!-- SweetAlert
   <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script> -->

</body>

</html>