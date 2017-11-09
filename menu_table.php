

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="http://getbootstrap.com/dist/js/bootstrap.min.js"></script>
<html>
	<?php include "head.php";?>


	<style>
	input[type=submit] {
    width: 20%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 10px;
    margin: 8px 104px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
	

}
</style>
	<body>
	<div class="container">
	<div class="row">
	 <div class="col-md-12 ">
	 <div class="table-responsive">
	  <h3 class="text-muted">รายการทั้งหมด</h3>
	 </div>
	 
	 <table id="mytable" class="table table-boarded table-striped">
	  <tr class="text-center">
	  <td>No.</td>
	  <td>First Name</td>
	  <td>Last Name</td>
	  <td>Nick Name</td>
	  <td>ID</td>
	  <td>Faculty</td>
	  <td>Major</td>
	  <td>Age</td>
	  <td>Tel</td>
	  <td>Birthday</td>
	  <td>Address</td>
	  <td>Action</td>
	  </tr>
	 <?php
	  $sql = mysqli_query($conn,"select * from student inner join major on student.major_id=major.major_id inner join faculty on faculty.faculty_id=major.faculty_id ORDER BY st_id ASC");
	 $n=1;
		while($row = mysqli_fetch_array($sql)){
			echo "<tr class='text-center'>";
			echo "<td>".$n."</td>";
			echo "<td>".$row['std_fname']."</td>";
			echo "<td>".$row['std_lname']."</td>";
			echo "<td>".$row['std_nname']."</td>";
			echo "<td>".$row['std_id']."</td>";
			echo "<td>".$row['faculty_name']."</td>";
			echo "<td>".$row['major_name']."</td>";
			echo "<td>".$row['std_age']."</td>";
			echo "<td>".$row['std_tel']."</td>";
			echo "<td>".$row['std_birth']."</td>";
			echo "<td>".$row['std_add']."</td>";
			echo "<td>
			
				<a href='del_student.php?st_id=".$row['st_id']."' onclick='return confirm(\"คุณต้องการลบข้อมูลนี้ ?\");'>
				<span class='glyphicon glyphicon-trash' aria-hidden='true'></span>
				</a>
				</td>";
			echo "</tr>";
			$n++;
		}
		?>
		</table>
		</div>
		</div>
		</div>
		<input type="submit" value="Submit">
		</body>
		</html>