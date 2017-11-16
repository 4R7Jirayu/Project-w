<html>
<?php include "header.php";?>
<?php include "head.php";
include "connectdb.php";
session_start();

?>

<style>
.dropdown{
float:left;
margin-right:5px;
margin-left:5px;
}
.col-md-2{
left:0;
}
button{
    margin-left:25px;
}

</style>

<div class="container">
    <div class="row">
        <h4>
            Services
        </h4>
        <?php
        $sql = mysqli_query($conn,"select * from customer where Cus_User='".$Cus_User."'");
        while($row = mysqli_fetch_array($sql)){
           $fname = $row['Cus_Fname'];
           $lname = $row['Cus_Lname'];
           $tel = $row['Cus_Tel'];
           $email = $row['Cus_Email'];
           $model = $row['Cus_Model'];
        }
        if($_GET['id'] != ''){ ?>
		<span style="display:inline-block" class="dropdown">
		<input type=text name=foo id=foo  value="<?php echo $fname;?>" disabled />
		</span>
        <span style="display:inline-block" class="dropdown">
		<input type=text name=bar id=bar  value="<?php echo $lname;?>" disabled />
		</span>
		<span style="display:inline-block" class="dropdown">
		<input type=text name=bar id=bar  value="<?php echo $model;?>" disabled />
		</span><br><br>
		<span style="display:inline-block" class="dropdown" >
		<input type=text name=bar id=bar  value="<?php echo $tel;?>" disabled />
		</span>
		<span style="display:inline-block" class="dropdown">
		<input type=text name=bar id=bar  value="<?php echo $email;?>" disabled />
		</span>
        
        <br><br><br>
        <?php }else{header('Location: index.php');}?>

        <div class="row col-md-11 col-md-offset-1 custyle">
        <table class="table table-striped custab">
        <tr>
            <th class="text-center">ID</th>
            <th class="text-center">Order Name</th>
            <th class="text-center">Order Price</th>
            <th class="text-center">Action</th>
        </tr>
<?php   $sql = mysqli_query($conn,"select * from orderlist");
        while($row = mysqli_fetch_array($sql)){
           $ido = $row['ID_Order'];
           $oname = $row['Order_Name'];
           $oprice = $row['Order_Price'];
        echo "<tr class='text-center'>";
        echo "<td>".$row['ID_Order']."</td>";
        echo "<td>".$row['Order_Name']."</td>";
        echo "<td>".$row['Order_Price']."</td>";
        ?>
        <td><input type="button" class="btn btn-danger" value="Choose" onclick="window.location='queue.php?id=<?php echo $_SESSION['Cus_User1'];?>&status=<?php echo $_SESSION['Cus_Status1'];?>&idorder=<?php echo $ido;?>';"></td>
        
<?php   echo "</tr>";       
        }
?>
</div> 
</div>
</div>
</html>