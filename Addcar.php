<?php 
include "header.php";
?>
<?php
include "head.php";
?>
<html>
<meta charset="UTF-8">
<style>
input[type=text], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=submit] {
    width: 100%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #45a049;
}

div {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
	left:400px;
}
</style>
<body>
<center>
<h1>เพิ่มรถยนต์</h1><br>
</center>
<div class="col-md-6">
  <form action="/action_page.php">
    <label for="fname">ยี่ห้อ</label>
    <input type="text" id="fname" name="firstname" placeholder="ยี่ห้อ" class="form-control">

    <label for="lname">รุ่น</label>
    <input type="text" id="lname" name="lastname" placeholder="รุ่น" class="form-control">

    <label for="country">ขนาด</label>
    <select id="country" name="country" class="form-control">
      <option value="australia">เล็ก</option>
      <option value="canada">กลาง</option>
      <option value="usa">ใหญ่</option>
    </select>
  
    <input type="submit" value="ตกลง">
  </form>
</div>

</body>
</html>