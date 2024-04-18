<?php
include "db_conn.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  
  <!-- data tables -->
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css" />

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <title>SHOES SHOP</title>
</head>
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
<body>
<div class="button">
        <a href= "index.php" >Back</a>

</div>

<div class="container">
    <?php
    if (isset($_GET["msg"])) {
      $msg = $_GET["msg"];
      echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
      ' . $msg . '
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }
    ?>
    <a href="add_new.php" class="btn btn-dark mb-3">Add Me</a>

    <table id="table" class="table table-hover text-center">
      <thead class="table-dark">
        <tr>
          <th scope="col">No.</th>
          <th scope="col">Name</th>
          <th scope="col">Brands</th>
          <th scope="col">Size</th>
          <th scope="col">Price</th>
          <th scope="col">Action</th>
          </tr>
      </thead>
      <tbody>
        <?php
        $sql = "SELECT * FROM `menu`";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
        ?>
          <tr>
            <td><?php echo $row["Number"] ?></td>
            <td><?php echo $row["Name"] ?></td>
            <td><?php echo $row["Brands"] ?></td>
            <td><?php echo $row["Size"] ?></td>
            <td><?php echo $row["Price"] ?></td>
            <td>
              <a href="edit.php?Number=<?php echo $row["Number"] ?>" class="link-dark"><i class="fa-solid fa-pen-to-square fs-10 me-3"></i></a>
              <a href="delete.php?Number=<?php echo $row["Number"] ?>" class="link-dark"><i class="fa-solid fa-trash fs-10"></i></a>
            </td>
          </tr>
        <?php
        }
        ?>
      </tbody>
    </table>
  </div>

  <!-- Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.7.0.js"></script>

  <!-- data tables -->
  <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>

<script>
  $(document).ready( function () {
    $('#table').DataTable();
  });
</script>

</body>

</html>