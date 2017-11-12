<style>
    .custab{
    border: 5px solid #000000;
    padding: 5px;
    margin: 5% 0;
    background-color: #FFFFFF;
    }
</style>
<html>
<?php include "head.php"; ?>
<title>Order Admin</title>
<body>
<h1 style="text-align:center">Order Customer</h1>
<h3 style="margin-left:20">Customer</h3>
<div class="container">
<div class="row col-md-12 custyle">
<table class="table custab">
<thead>
    <tr>
        <th>No</th>
        <th>Customer</th>
        <th>Cust ID</th>
        <th>Status</th>
        <th>Time</th>
        <th>Amount</th>
        <th class="text-center">Edit</th>
    </tr>
</thead>
        <tr>
            <td>1</td>
            <td>News</td>
            <td>News Cate</td>
            <td>News Cate</td>
            <td>News Cate</td>
            <td>News Cate</td>
            <td class="text-center"><a href="#" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-remove"></span> Del</a></td>
        </tr>
        <tr>
            <td>2</td>
            <td>Products</td>
            <td>Main Products</td>
            <td>Main Products</td>
            <td>Main Products</td>
            <td>Main Products</td>
            <td class="text-center"><a href="#" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-remove"></span> Del</a></td>
        </tr>
        <tr>
            <td>3</td>
            <td>Blogs</td>
            <td>Parent Blogs</td>
            <td>Parent Blogs</td>
            <td>Parent Blogs</td>
            <td>Parent Blogs</td>
            <td class="text-center"><a href="#" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-remove"></span> Del</a></td>
        </tr>
</table>
<a href="#" class="btn btn-primary btn-lg pull-right"><b>+</b>Confirm</a>
</div>
</div>


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
       // echo "<td> <a href='edit_student.php?std_id=".$row['std_id']."'> <span class='glyphicon glyphicon—pencil' aria—hidden='true'></span> แก้ไข</a> ";
        //echo "<a href='del_student.php?std_id=".$row['std_id']." onclick='return confirm(\"ลบข้อมูลนี้ ?\");'> <span class='glyphicon glyphicon-trash' aria-hidden='true'>ลบ</span> </a> </td>";              
       // echo "</tr>"; 
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