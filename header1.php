<html>
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
    padding: 14px 16px;
    text-decoration: none;
}
#ja{
    text-decoration:none;
}
</style>
</head>
<body>

<ul id="ull">
<li id="lii"><a href="menuAd.php?id='admin'&status='admin'">NP CARCARE</a></li>
<li id="lii" style="margin-left:78%"><?php echo "admin"; ?><a href="logout.php" style="margin-left:60px">Logout</a></li>
</ul>
</body>
</html>