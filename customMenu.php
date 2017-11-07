<html> 
<?php include "head.php"; ?>
<title>Custom Menu</title>
<body> 

<div class="container"> 
<div class="row"> 
<div class="col-md-6 col-md-offset-3">
<div class="header clerfix"> 

</div> 
<h1>Custom Menu</h1>
        Add menu
        Edit ราคา
        Delete menu
<table class="table "> 
    <tr class="text-center"> 
        <td>#</td> <td>Name Menu</td> 
        <td>Discription</td> 
        <td>Price</td>         
        <td>Action</td> 
    </tr> 
<?php $sql = mysqli_query($conn,"Select * from student inner join major on student.major_id=major.major_id inner join faculty on faCulty.faculty_id=major.faculty_id ORDER BY std_id ASC"); 
    $n=1; 
    while($row = mysqli_fetch_array($sql))
    { 
        echo "<tr class='text-center'>";
        echo "<td>".$n."</td>"; 
        echo "<td>".$row['std_fname']."</td>"; 
        echo "<td>".$row['std_lname']."</td>"; 
        echo "<td>".$row['std_id']."</td>"; 
        echo "<td>".$row['faculty_name']."</td>"; 
        echo "<td>".$row['std_nick']."</td>"; 
        echo "<td>".$row['std_tel']."</td>"; 
        echo "<td>".$row['std_birthday']."</td>"; 
        echo "<td>".$row['std_age']."</td>"; 
        echo "<td>".$row['std_address']."</td>"; 
      
       echo "<td>
       <a href='edit_student.php?std_id=".$row['std_id']."'>
       <span class='glyphicon glyphicon-pencil' aria-hidden='true'></span>
       </a>
       <a href='del_student.php?std_id=".$row['std_id']."' onclick='return confirm(\"คุณต้องการลบข้อมูลนี้ ?\");'>
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
</body>
</html>