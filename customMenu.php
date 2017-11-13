<!DOCTYPE html>
<html lang="en">
<?php include "connectdb.php";
include "head.php";
include "header1.php";
?>
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="facivon.ico">
    <link href="style.css" rel="stylesheet">
    <script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
    <script src="script.js"></script>
    <title>BonFitness</title>
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="css/freelancer.min.css" rel="stylesheet">


  </head>
<style type="text/css">
 a,span {
    font-family: BoonJot, Helvetica, sans-serif;
  }
  a:hover {
      text-decoration: none;
  }
  div{
    left:400px;
  }
  table{
    margin-top:50px;
    background-color:#FFFFFF;
  }
  #zxc{
    background-color:#DCDCDC;
  }
</style>
<div class="col-md-6 text-align=center">

<table class="table table-striped" id="myTable">
    <thead>
      <tr>
      <th colspan="4" id="zxc"><center><h4>แก้ไขรายการ</h4></center></th>
      </tr>
      <tr>
        <th><center>ลำดับ</center></th>
        <th><center>รายการ</center></th>
        <th><center>ราคา</center></th>
        <th><center>แก้ไข</center></th>
      </tr>
    </thead>
    <tbody>  
    <?php   
    $query = mysqli_query($conn,"select * from orderlist");
 ?>
<?php
$i = 0;
       while($objResult = mysqli_fetch_array($query)){
        $i= $i+1;
        echo "<tr>"; 
        echo "<td><center>".$i."</center></td>";
        echo "<td><center>".$objResult['Order_Name']."</center></td>";
        echo "<td><center>".$objResult['Order_Price']."</center></td>";
       echo "<td><center> <a href='editnews.php?id=".$objResult['ID_Order']."'> <input type='button' class='btn btn-info' value='แก้ไข'></a>
       <a href='deletenews.php?id=".$objResult['ID_Order']."'> <input type='button' class='btn btn-danger' value='ลบ'></a></td>";
        echo "</tr>";      
      }
      echo "</table>";
?>
</html>