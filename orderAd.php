<style>
    .custab{
    border: 5px solid #000000;
    padding: 5px;
    margin: 5% 0;
    background-color: #FFFFFF;
    }
</style>
<html>
<?php include "head.php"; 
include "header1.php";
include "connectdb.php";
?>
<title>Order Admin</title>
<body>
<h1 style="text-align:center">Order Customer</h1>
<h3 style="margin-left:20">Customer</h3>
<div class="container">
<div class="row col-md-12 custyle">
<table class="table custab" id="tbja">
<thead>
    <tr>
        <th class="text-center">No</th>
        <th class="text-center">Customer</th>
        <th class="text-center">Name</th>
        <th class="text-center">Price</th>
        <th class="text-center">Time</th>
        <th class="text-center">Status</th>
        <th class="text-center">Action</th>
    </tr>

    <?php
      $sql = mysqli_query($conn,"select * from bill");
      
        $n=1;
		while($row = mysqli_fetch_array($sql)){
			echo "<tr class='text-center'>";
			echo "<td>".$n."</td>";
            echo "<td>".$row['Cus_User']."</td>";
            echo "<td>".$row['Order_Name']."</td>";
            echo "<td>".$row['Total_Price']."</td>";
            echo "<td>".$row['Order_Time']."</td>";
            echo "<td>".$row['Order_Status']."</td>";
            echo "<td><center> <a href='check.php?id=".$row['ID_Bill']."'><input type='button' class='btn btn-info' value='check'></a></td>";
            echo "</tr>";
        $n++;
		}
?>
</table>
</div>
</div>
</body>
</html>