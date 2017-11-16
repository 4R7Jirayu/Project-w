<html> 
<?php include "head.php";
include "header1.php";
session_start();
$_SESSION['AD_Status'] = $_GET['status'];
?>
<body> 
<div class="container">
	<div class="row">
    <?php if($_GET['status'] != ''){ ?>
    <div class="col-md-6 col-md-offset-3" >
    <div class="text-center">
        <h1>Menu Admin</h1>
        <a href="printBillAd.php" class="btn btn-warning " role="button" aria-pressed="true">Print Bill</a>
	    <a href="customMenu.php" class="btn btn-warning " role="button" aria-pressed="true">Custom Menu</a>
        <a href="orderAd.php" class="btn btn-warning " role="button" aria-pressed="true">Status</a>
		<a href="Addcar.php" class="btn btn-warning " role="button" aria-pressed="true">Add Car</a>
    <a href="clear.php" class="btn btn-warning " role="button" aria-pressed="true">Clear All</a>
    <a href="checkQueue.php" class="btn btn-warning " role="button" aria-pressed="true">Clear Bock</a>
    <?php }else{header('Location: index.php');} ?>
    </div>
    </div>
  </div>       
</div>	
</body>
</html>