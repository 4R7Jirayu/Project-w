<?php include "connectdb.php";  
  $Menu_id=$_GET['id'];
  $query = "delete from orderlist where ID_Order='".$Menu_id."'";
  $query_sql = mysqli_query($conn,$query);
  echo "<script>window.location.href = 'customMenu.php';</script>";
?>