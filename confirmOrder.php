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
<h1>Result</h1>
</div>
<div>
<h3>Personal Data</h3><br>
<span style="display:inline-block">Name :
<input type=text name=foo id=foo />
</span><br>
<span style="display:inline-block">SSN :
<input type=text name=bar id=bar />
</span><br>
<span style="display:inline-block">CustomerID :
<input type=text name=bar id=bar />
</span><br>
<span style="display:inline-block">Address :
<input type=text name=bar id=bar />
</span><br>
<span style="display:inline-block">Email :
<input type=text name=bar id=bar />
</span><br>
<span style="display:inline-block">Tel :
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
<input type="submit" value="Checkout" class="btn btn-primary">
</html>