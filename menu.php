<html>
<?php include "header.php";?>
<?php include "head.php";
include "connectdb.php";
session_start();

?>
<style>
.dropdown{
float:left;
margin-right:5px;
margin-left:5px;
}
.col-md-2{
left:0;
}
#pad{
	margin-left:73px;
}
button{
    margin-left:25px;
}
</style>

<div class="container">
    <div class="row">
        <h4>
            Services
        </h4>
        <?php
        $sql = mysqli_query($conn,"select * from customer where Cus_User='".$Cus_User."'");
        while($row = mysqli_fetch_array($sql)){
           $fname = $row['Cus_Fname'];
           $lname = $row['Cus_Lname'];
           $tel = $row['Cus_Tel'];
           $email = $row['Cus_Email'];
        }
        if($_GET['id'] != ''){ ?>
		<span style="display:inline-block" class="dropdown">
		<input type=text name=foo id=foo  value="<?php echo $fname;?>" disabled />
		</span>
		<span style="display:inline-block" class="dropdown">
		<input type=text name=bar id=bar  value="<?php echo $lname;?>" disabled />
		</span><br><br>
		<span style="display:inline-block" class="dropdown" id="pad">
		<input type=text name=bar id=bar  value="<?php echo $tel;?>" disabled />
		</span>
		<span style="display:inline-block" class="dropdown">
		<input type=text name=bar id=bar  value="<?php echo $email;?>" disabled />
		</span><br><br><br>
        <?php }else{header('Location: login.php');}?>

        <div class="col-md-2">
            <div class="panel panel-danger">
                <div class="panel-heading">
                    <h4 class="text-center">
                        DEV PLAN</h4>
                </div>
                <div class="panel-body text-center">
                    <p class="lead">
                        <strong>$10 / month</strong></p>
                </div>
                <ul class="list-group list-group-flush text-center">
                    <li class="list-group-item"><i class="icon-ok text-danger"></i>Personal use</li>
                    <li class="list-group-item"><i class="icon-ok text-danger"></i>Unlimited projects</li>
                    <li class="list-group-item"><i class="icon-ok text-danger"></i>27/7 support</li>
                </ul>
                <div class="panel-footer">
                    <button id="menu1" class="btn btn-primary"> CHOOSE  </button>
                
                </div>
            </div>
        </div>
        <div class="col-md-2">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <h4 class="text-center">
                        PRO PLAN</h4>
                </div>
                <div class="panel-body text-center">
                    <p class="lead">
                        <strong>$10 / month</strong></p>
                </div>
                <ul class="list-group list-group-flush text-center">
                    <li class="list-group-item"><i class="icon-ok text-danger"></i>Personal use</li>
                    <li class="list-group-item"><i class="icon-ok text-danger"></i>Unlimited projects</li>
                    <li class="list-group-item"><i class="icon-ok text-danger"></i>27/7 support</li>
                </ul>
                <div class="panel-footer">
                <button id="menu2" class="btn btn-primary"> CHOOSE  </button>
                </div>
            </div>
        </div>
        <div class="col-md-2">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h4 class="text-center">
                        FREE PLAN</h4>
                </div>
                <div class="panel-body text-center">
                    <p class="lead">
                        <strong>$10 / month</strong></p>
                </div>
                <ul class="list-group list-group-flush text-center">
                    <li class="list-group-item"><i class="icon-ok text-danger"></i>Personal use</li>
                    <li class="list-group-item"><i class="icon-ok text-danger"></i>Unlimited projects</li>
                    <li class="list-group-item"><i class="icon-ok text-danger"></i>27/7 support</li>
                </ul>
                <div class="panel-footer">
                <button id="menu3" class="btn btn-primary"> CHOOSE  </button>
                </div>
            </div>
        </div>
        <div class="col-md-2">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h4 class="text-center">
                        SILVER PLAN</h4>
                </div>
                <div class="panel-body text-center">
                    <p class="lead">
                        <strong>$10 / month</strong></p>
                </div>
                <ul class="list-group list-group-flush text-center">
                    <li class="list-group-item"><i class="icon-ok text-danger"></i>Personal use</li>
                    <li class="list-group-item"><i class="icon-ok text-danger"></i>Unlimited projects</li>
                    <li class="list-group-item"><i class="icon-ok text-danger"></i>27/7 support</li>
                </ul>
                <div class="panel-footer">
                <button id="menu4" class="btn btn-primary"> CHOOSE  </button>
                </div>
            </div>
        </div>
        <div class="col-md-2">
            <div class="panel panel-warning">
                <div class="panel-heading">
                    <h4 class="text-center">
                        GOLD PLAN</h4>
                </div>
                <div class="panel-body text-center">
                    <p class="lead">
                        <strong>$10 / month</strong></p>
                </div>
                <ul class="list-group list-group-flush text-center">
                    <li class="list-group-item"><i class="icon-ok text-danger"></i>Personal use</li>
                    <li class="list-group-item"><i class="icon-ok text-danger"></i>Unlimited projects</li>
                    <li class="list-group-item"><i class="icon-ok text-danger"></i>27/7 support</li>
                </ul>
                <div class="panel-footer">
                <button id="menu5" class="btn btn-primary"> CHOOSE  </button>
                </div>
            </div>
        </div>
        <div class="col-md-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="text-center">
                        PLAT PLAN</h4>
                </div>
                <div class="panel-body text-center">
                    <p class="lead">
                        <strong>$10 / month</strong></p>
                </div>
                <ul class="list-group list-group-flush text-center">
                    <li class="list-group-item"><i class="icon-ok text-danger"></i>Personal use</li>
                    <li class="list-group-item"><i class="icon-ok text-danger"></i>Unlimited projects</li>
                    <li class="list-group-item"><i class="icon-ok text-danger"></i>27/7 support</li>
                </ul>
                <div class="panel-footer">
                <button id="menu6" class="btn btn-primary"> CHOOSE  </button>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
	<div class="row">
	 <div class="col-md-12 ">
	 <div class="table-responsive">
	  <h3 class="text-muted">รายการทั้งหมด</h3>
	 </div>
	 <table  class="table table-striped">
     <thead>
         <tr>
             <td>Id</td>
             <td>List</td>
             <td>Price</td>
             <td>EDIT</td>

         </tr>
     </thead>
     <tbody id="tlist">
     </tbody>
 </table>
	</div>
	</div>
	</div><br>
	<center><input type="button" name="Button" value="Submit" onClick="window.location='queue.php?id=<?php echo $_SESSION['Cus_User1'];?>';">
    </center>



    <script>

$("#menu1").on('click' , function() {
console.log('load data');
        $.ajax({                                      
            url: 'api.php',                  //the script to call to get data          
            data: "",                        //you can insert url argumnets here to pass to api.php
                                             //for example "id=5&parent=6"
            dataType: 'json',                //data format      
            success: function(data)          //on recieve of reply
            {
                console.log(data);

                var tb = ""; 
                    tb += "<tr>";
                    tb += "<td>" + data[0].id + "</td>";
                    tb += "<td>" + data[0].name + "</td>";
                    tb += "<td>" + data[0].price+ "</td>";
                    tb+= "<td><button id='del' class='btn btn-danger'>DELETE</button> </td> ";
                    tb += "</tr>";
                $("#tlist").append(tb);
            } 
        });

    });

$("#menu2").on('click' , function() {
console.log('load data');
        $.ajax({                                      
            url: 'api.php',                  //the script to call to get data          
            data: "",                        //you can insert url argumnets here to pass to api.php
                                             //for example "id=5&parent=6"
            dataType: 'json',                //data format      
            success: function(data)          //on recieve of reply
            {
                console.log(data);

                var tb = ""; 
                    tb += "<tr>";
                    tb += "<td>" + data[1].id + "</td>";
                    tb += "<td>" + data[1].name + "</td>";
                    tb += "<td>" + data[1].price+ "</td>";
                    tb+= "<td><button id='del' class='btn btn-danger'>DELETE</button> </td> ";
                    tb += "</tr>";
                $("#tlist").append(tb);
            } 
        });

    });

$("#menu3").on('click' , function() {
console.log('load data');
        $.ajax({                                      
            url: 'api.php',                  //the script to call to get data          
            data: "",                        //you can insert url argumnets here to pass to api.php
                                             //for example "id=5&parent=6"
            dataType: 'json',                //data format      
            success: function(data)          //on recieve of reply
            {
                console.log(data);

                var tb = ""; 
                    tb += "<tr>";
                    tb += "<td>" + data[2].id + "</td>";
                    tb += "<td>" + data[2].name + "</td>";
                    tb += "<td>" + data[2].price+ "</td>";
                    tb+= "<td><button id='del' class='btn btn-danger'>DELETE</button> </td> ";
                    tb += "</tr>";
                $("#tlist").append(tb);
            } 
        });

    });

$("#menu4").on('click' , function() {
console.log('load data');
        $.ajax({                                      
            url: 'api.php',                  //the script to call to get data          
            data: "",                        //you can insert url argumnets here to pass to api.php
                                             //for example "id=5&parent=6"
            dataType: 'json',                //data format      
            success: function(data)          //on recieve of reply
            {
                console.log(data);

                var tb = ""; 
                    tb += "<tr>";
                    tb += "<td>" + data[3].id + "</td>";
                    tb += "<td>" + data[3].name + "</td>";
                    tb += "<td>" + data[3].price+ "</td>";
                    tb+= "<td><button id='del' class='btn btn-danger'>DELETE</button> </td> ";
                    tb += "</tr>";
                $("#tlist").append(tb);
            } 
        });

    });

$("#menu5").on('click' , function() {
console.log('load data');
        $.ajax({                                      
            url: 'api.php',                  //the script to call to get data          
            data: "",                        //you can insert url argumnets here to pass to api.php
                                             //for example "id=5&parent=6"
            dataType: 'json',                //data format      
            success: function(data)          //on recieve of reply
            {
                console.log(data);

                var tb = ""; 
                    tb += "<tr>";
                    tb += "<td>" + data[4].id + "</td>";
                    tb += "<td>" + data[4].name + "</td>";
                    tb += "<td>" + data[4].price+ "</td>";
                    tb+= "<td><button id='del' class='btn btn-danger'>DELETE</button> </td> ";
                    tb += "</tr>";
                $("#tlist").append(tb);
            } 
        });

    });

$("#menu6").on('click' , function() {
console.log('load data');
        $.ajax({                                      
            url: 'api.php',                  //the script to call to get data          
            data: "",                        //you can insert url argumnets here to pass to api.php
                                             //for example "id=5&parent=6"
            dataType: 'json',                //data format      
            success: function(data)          //on recieve of reply
            {
                console.log(data);

                var tb = ""; 
                    tb += "<tr>";
                    tb += "<td>" + data[5].id + "</td>";
                    tb += "<td>" + data[5].name + "</td>";
                    tb += "<td>" + data[5].price+ "</td>";
                    tb+= "<td><button id='del' class='btn btn-danger'>DELETE</button> </td> ";
                    tb += "</tr>";
                $("#tlist").append(tb);
            } 
        });

    });

    // ลบแถว

    $(document).on('click','#del', function() {
       
      $(this).closest('tr').remove();
      return false;
    });
    </script>



</html>