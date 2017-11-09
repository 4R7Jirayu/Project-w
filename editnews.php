<!DOCTYPE html>
<html lang="en">
<?php include "connectdb.php"; 
  $Menu_id=$_GET['id']; ?>
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
body {
    background: url('https://wallpaper.campus-star.com/app/uploads/2016/05/Wallpapers%E0%B8%AA%E0%B8%B5%E0%B8%82%E0%B8%B2%E0%B8%A7%E0%B8%AA%E0%B8%9A%E0%B8%B2%E0%B8%A2%E0%B8%95%E0%B8%B2-18.jpg') no-repeat fixed center center;
    background-size: cover;
    font-family: Montserrat;
}
 a,span {
    font-family: BoonJot, Helvetica, sans-serif;
  }
  a:hover {
      text-decoration: none;
  }
</style>   
 <?php   $query = mysqli_query($conn,"select * from menu where Menu_id='$Menu_id';");
        while($objResult = mysqli_fetch_array($query)){
        $Menu_Price = $objResult['Menu_price'];
      }?>
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <center><h2><span>แก้ไขข่าวสาร</span></h2>
                  <br><br>
                  <div class="form-group">
                  <form method="POST">
                   <textarea class="form-control" rows="5" name="Menu_price" ><?php echo  $Menu_Price ;?></textarea>
  </div>
                  </div>
                  <center><button type="submit" class="btn btn-info" name="submit_editnews">ยืนยัน</button> 
                  </form>
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