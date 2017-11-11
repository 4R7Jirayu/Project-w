<?php 
include ("../connectdb.php");  


$json = array();
$result = mysqli_query ($conn, "SELECT * FROM bockschedule");
while($row = mysqli_fetch_array ($result))     
{
    $bus = array(
        'id' => $row['ID_Time'],
        'time' => $row['TimeS'],
        'bock1' => $row['Bck1'],
        'bock2' => $row['Bck2'],
        'bock3' => $row['Bck3']
    );
    array_push($json, $bus);
}

$jsonstring = json_encode($json);
echo $jsonstring;
    


?>