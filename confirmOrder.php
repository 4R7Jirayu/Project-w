<?php 
include "header.php";
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
</style>
<center>
<div class="div">
<h1 style="color:red">Result</h1>
</div>
<div>
<h3 style="text-decoration: underline">Personal Data</h3><br>
<span style="display:inline-block">Name :<br>
<input type=text name=foo id=foo />
</span><br>
<span style="display:inline-block">SSN :<br>
<input type=text name=bar id=bar />
</span><br>
<span style="display:inline-block">CustomerID :<br>
<input type=text name=bar id=bar />
</span><br>
<span style="display:inline-block">Address :<br>
<input type=text name=bar id=bar />
</span><br>
<span style="display:inline-block">Email :<br>
<input type=text name=bar id=bar />
</span><br>
<span style="display:inline-block">Tel :<br>
<input type=text name=bar id=bar />
</span>
</div>

<div class="container">
	<div class="row">
	 <div class="col-md-12 ">
	 <div class="table-responsive">
	 <table id="mytable" class="table table-boarded table-striped">
	  <tr class="text-center">
	  <td>No.</td>
	  <td>Orders</td>
	  <td>Name</td>
	  <td>Price</td>
	  <td>Size</td>
	  <td>Time</td>
	  </tr>
     </table>
    </div>
    </div>
    </div>
</div>
<a href="#" class="btn btn-primary btn-lg"><b>Checkout</b></a>

</html>