<html> 
<?php include "head.php";
include "connectdb.php"
?>
<title>Custom Menu</title>
<body> 

<style>
input[type=text] {
    width: 50%;
    padding: 12px 20px;
    margin: 8px 240px;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    float: center;

}

select {
    width: 50%;
    padding: 12px 20px;
    margin: 8px 257px;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    float: center;

}
div {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
}
</style>

 <div>




 <label for="Menu">เมนู</label>
<select  id='Menu' name='Menu'>
<option value="0">เลือกเมนู</option>
<?php
$fc = mysqli_query($conn,"select * from menu");
while($row = mysqli_fetch_array($fc)){
    echo "<option value=".$row['Menu_id'].">".$row['Menu_name']."</option>";
}
 ?>
</select> 

  <form action="/action_page.php">
    <label for="fname">First</label>
    <input type="text" id="fname" name="firstname" placeholder="Your name..">
<br>
    <label for="lname">Last Name</label>
    <input type="text" id="lname" name="lastname" placeholder="Your last name..">
<br>
    <label for="lname">Last Name</label>
    <input type="text" id="lname" name="lastname" placeholder="Your last name..">
<br>
    <label for="lname">Last Name</label>
    <input type="text" id="lname" name="lastname" placeholder="Your last name..">
<br>
    <label for="lname">Last Name</label>
    <input type="text" id="lname" name="lastname" placeholder="Your last name..">
<br>

 </div>



</table> 
</div> 
</div> 
</div> 
</body>
</html>