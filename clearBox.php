<html>
<?php include "connectdb.php";
include "head.php";
$bock=$_GET['bock'];
$time=$_GET['time'];

echo $bock;
echo $time;


$sql1 = "UPDATE bockschedule SET ".$bock." = 'ว่าง' WHERE TimeS='".$time."' ;";
echo $sql1;
$sql_query = mysqli_query($conn,$sql1);

header("Location:checkQueue.php");

?>

</html>