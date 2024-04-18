<?php
include "db_conn.php";
$number = $_GET["Number"];
$sql = "DELETE FROM `menu` WHERE Number = $number";
$result = mysqli_query($conn, $sql);

if ($result) {
  header("Location: index.php?msg=Data deleted successfully");
} else {
  echo "Failed: " . mysqli_error($conn);
}