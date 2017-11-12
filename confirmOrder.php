<?php 
include "header.php";
$bock=$_GET['bock'];
$time=$_GET['time'];
echo $bock;
echo $time;
?>
<?php
include "head.php";
?>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="http://getbootstrap.com/dist/js/bootstrap.min.js"></script>
<html>
<style>
h3{
    display:block;
}
div{
    margin-bottom:8px;
    margin-top:8px;
}
span{
    text-align: justify;
}
th{
	text-align: center;
}
td{
	text-align: center;
}
</style>
<center>
<div class="div">
<h1 style="color:red">Result</h1>
</div>
<div>
<h3 style="text-decoration: underline">Personal Data</h3><br>
<span style="display:inline-block">
<input type=text class=form-control name=foo id=foo placeholder=Name>
</span><br>
<span style="display:inline-block">
<input type=text class=form-control name=bar id=bar placeholder=SSN>
</span><br>
<span style="display:inline-block">
<input type=text class=form-control name=bar id=bar placeholder=CustomerID>
</span><br>
<span style="display:inline-block">
<input type=text class=form-control name=bar id=bar placeholder=Address>
</span><br>
<span style="display:inline-block">
<input type=text class=form-control name=bar id=bar placeholder=Email>
</span><br>
<span style="display:inline-block">
<input type="tel" class=form-control name=bar id=bar placeholder=Tel>
</span>
</div>

<div class="container">
	<div class="row">
	 <div class="col-md-10 col-md-offset-1">
	 <div class="table-responsive">
	 <table id="mytable" class="table table-striped" style="background-color:#33CC33">
	  <tr>
	  <th>No.</th>
	  <th>Orders</th>
	  <th>Name</th>
	  <th>Price</th>
	  <th>Size</th>
	  <th>Time</th>
	  </tr>
	  <td>asdasd</td>
	  <td>zxc</td>
	  <td>asdl</td>
	  <td>qwe</td>
	  <td>wqess</td>
	  <td>Aqwen</td>
	  <tr>
	<td colspan="3">Total Price</td>
    <td colspan="3">---</td>
  		</tr>
     </table>
    </div>
    </div>
    </div>
</div>
<a href="#" class="btn btn-primary btn-lg"><b>Checkout</b></a>

</html>