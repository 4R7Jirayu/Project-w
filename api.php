<?php 
include ("connectdb.php");  




$json = array();
$result = mysqli_query ($conn, "SELECT * FROM orderlist");
while($row = mysqli_fetch_array ($result))     
{
    $bus = array(
        'id' => $row['ID_Order'],
        'price' => $row['Order_Price'],
        'name' => $row['Order_Name']
    );
    array_push($json, $bus);
}

$jsonstring = json_encode($json);
echo $jsonstring;
    


?>