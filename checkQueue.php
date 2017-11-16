<html>
<?php include "head.php";?>
<?php 
include "header1.php";
include "connectdb.php";
session_start();
?>

      <style>
            td:hover{background-color:#ddfddd;;cursor: pointer}    
            .not-active {
            pointer-events: none;
            cursor: default;
            }       
      </style>

<body >
<div  class="container">
  <table id="schedule" class="table" >
  <thead class="thead-dark">
      <tr>
        <th scope="row">Time</th>
        <th scope="col">Block 1 </th>
        <th scope="col">Block 2</th>
        <th scope="col">Block 3</th>
      </tr>
    </thead>      
    <tbody id="bck">
<script>
      $(document).ready(function(){
        $.ajax({                                      
            url: 'apiQ.php',                  //the script to call to get data          
            data: "",                        //you can insert url argumnets here to pass to api.php
                                             //for example "id=5&parent=6"
            dataType: 'json',                //data format  
            defaultContent: '<button>Click!</button>',    
            success: function(data)          //on recieve of reply
            {   var tb = "";             
                for(var i = 0; i < data.length; i++) {
                  
                 
                    tb += "<tr>";
                    tb += "<td width='40'>" + data[i].time + "</td>";
                    if(data[i].bock1 == "ว่าง"){
                        tb += "<td><a class='btn btn-md btn-block btn-success disabled not-active' href='confirmOrder.php?bock=bock1&time="+data[i].time+"'>" + data[i].bock1 + "</a></td>";
                    }
                    else{
                        tb += "<td><a class='btn btn-md btn-block btn-danger ' href='clearBox.php?bock=bck1&time="+data[i].time+"'>" + data[i].bock1 + "</a></td>";
                        
                        
                    }
                    if(data[i].bock2 == "ว่าง"){
                        tb += "<td><a class='btn btn-md btn-block btn-success disabled not-active' href='confirmOrder.php?bock=bock2&time="+data[i].time+"'>" + data[i].bock2 + "</a></td>";
                    }
                    else{
                        tb += "<td><a class='btn btn-md btn-block btn-danger ' href='clearBox.php?bock=bck2&time="+data[i].time+"'>" + data[i].bock2 + "</a></td>";
                   
                    }
                    if(data[i].bock3 == "ว่าง"){
                        tb += "<td><a class='btn btn-md btn-block btn-success disabled not-active' href='confirmOrder.php?bock=bock3&time="+data[i].time+"'>" + data[i].bock3 + "</a></td>";
                    }
                    else{
                        tb += "<td><a class='btn btn-md btn-block btn-danger ' href='clearBox.php?bock=bck3&time="+data[i].time+"'>" + data[i].bock3 + "</a></td>";
                   
                    }                    
                    tb += "</tr>";
                }
                
               $("#bck").append(tb);
               
            } 
        });       
    });  
</script>
    </tbody>
      </table>
</div>

</body>

</html>