<html>
<?php
$Cus_User=$_GET['id'];
$Cus_Status=$_GET['status'];
?>
<head>
<style>
#ull{
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #FF6600;
}

#lii{
    float: left;
	display: block;
    color: white;
    text-align: center;
    padding: 14px;
    text-decoration: none;
}
#ja{
    text-decoration:none;
}
</style>
</head>
<body>

<ul id="ull">
<li id="lii"><a href="menu.php?id=<?php echo $Cus_User; ?>&status=<?php echo $Cus_Status; ?>">NP CARCARE</a></li>
  <li id="lii" style="margin-left:78%"><?php echo ($Cus_User) ?><a href="logout.php" style="margin-left:60px">Logout</a></li>
</ul>

</body>
</html>