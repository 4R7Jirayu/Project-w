<?php 
include ("connectdb.php");  


$json = array();
$result = mysqli_query ($conn, "SELECT Cus_Fname,Cus_Lname,CarCusID From car_cus INNER JOIN customer ON car_cus.Cus_User = customer.Cus_User WHERE CarCusID='กกกก'  ");
while($row = mysqli_fetch_array ($result))     
{
    $bus = array(
        //'id' => $row['Cus_User'],
        'name'=>$row['Cus_Fname'],
        'lastname'=>$row['Cus_Lname'],
        'test'=>$row['CarCusID']

        //'price' => $row['Cus_User'],
       // 'name' => $row['Car_id']
    );
    array_push($json, $bus);
}

$jsonstring = json_encode($json);

    


?>