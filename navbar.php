<?php include 'db_conn.php';?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<style>
  .button a{
           position:absolute;
           text-decoration: none;
           background-color: cyan;
           align-items: center;
           justify-content: center;
           color: orange;
           border: 2px solid #333;
           text-align: center;
           width: 90px;
           height: 28px;
           padding-top:6px;
           top:5px;
           left:10px;
           margin:3px;
           cursor:pointer;
           font-size:18px;
           border-radius:20px
      }

</style>
<body>
  <div class="button">
        <a href= "index.php" >Back</a>

</div>
    


<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="curry.png"><i>DASHBOARD</i></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php"><i>HOME</i></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about.php"><i>ABOUT US</i></a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="contact.php"><i>CONTACT ME</i></a>
        </li>


      </ul>
    </div>
  </div>
</nav>

 <!-- Bootstrap -->

 <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

 </body>
</html>