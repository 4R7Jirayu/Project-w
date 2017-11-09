<!DOCTYPE html>
<html lang="en">
<?php include "connectdb.php";
include "header.php";
include "head.php";
  $Menu_id=$_GET['id']; ?>
<style>
div{
  text-align:center;
  left:520px;
  margin: 0 auto;
  border-radius: 25px;
  background-color: #f2f2f2;
  padding: 5px;
  top: 80px;
}
</style>   
 <?php   $query = mysqli_query($conn,"select * from Orderlist where ID_Order='$Menu_id';");
        while($objResult = mysqli_fetch_array($query)){
        $Menu_Price = $objResult['Order_Price'];
        $Menu_Name = $objResult['Order_Name'];
      }?>
          <div class="container col-md-4 w3-center" >
            <div class="w3-bar">
              <div>
                <div>
                  <h2><span>แก้ไขราคา</span></h2>
                  <br>
                  <form method="POST" style="text-align:center;">
                  <input class="form-control" name="Order_Name" value=<?php echo  $Menu_Name;?> disabled><br>
                   <input class="form-control" name="Order_Price" value=<?php echo  $Menu_Price ;?>><br>
                  <button type="submit" class="btn btn-danger" name="submit_editnews">ยืนยัน</button> 
                  </form>

              </div>
            </div>
            </div>
          </div>

<?php 
if(isset($_POST['submit_editnews']))
{
    $Menu_Price  = $_POST['Menu_price'];
    $sql_update = "UPDATE menu SET Menu_price='".$Menu_Price."' WHERE Menu_id='".$Menu_id."'";
    $query_sql = mysqli_query($conn,$sql_update);
 echo "<script>window.location.href = '1.php';</script>";
} 
?>