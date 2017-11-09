<?php include "connectdb.php";  
  $Menu_id=$_GET['id'];
  $query = "delete from menu where menu_id='".$Menu_id."'";
  $query_sql = mysqli_query($conn,$query);
  echo "<script>window.location.href = '1.php';</script>";
?>