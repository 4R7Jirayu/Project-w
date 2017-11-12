<html>
<<<<<<< HEAD
<?php 
    include "head.php";
?>
<?php 
include "header.php";
include "connectdb.php";
session_start();

?>

      <style>
             
            .not-active {
            pointer-events: none;
            cursor: default;
            }       
=======
<?php include "../head.php";?>
<?php 
include "../header.php";
?>

      <style>
            td:hover{background-color:#ddfddd;;cursor: pointer}           
>>>>>>> parent of 86af630... queue
      </style>

<body >
<div  class="container">
  <table id="schedule" class="table" >
  <thead class="thead-dark">
      <tr>
        <th scope="col">Time</th>
        <th scope="col">Block 1 </th>
        <th scope="col">Block 2</th>
        <th scope="col">Block 3</th>
      </tr>
    </thead>      
<<<<<<< HEAD
    <tbody id="bck">
    </tbody>
      </table>
      <button type="submit" class="btn btn-primary">ตกลง</button>
</div>

</body>
<script>

    var Ct =  "<?php echo $_GET['ct'] ?>";
    var start;
    var end;
    var temp = 1;
    var data;
$(document).ready(function(){
    
    $.ajax({                                      
    url: 'apiQ.php',                  //the script to call to get data          
                                       //you can insert url argumnets here to pass to api.php
                                     //for example "id=5&parent=6"
    dataType: 'json',                //data format       
    success: function(data)          //on recieve of reply
    {   var tb = "";             
        for(var i = 0; i < data.length; i++) {         
            tb += "<tr>";
            tb += "<td width='50'>" + data[i].time + "</td>";
            if(data[i].bock1 == "ว่าง"){
                tb += "<td><a class='btn btn-md btn-block btn-success' onClick='return changecolor(this);' href='confirmOrder.php?time="+data[i].time+"'>" + data[i].bock1 + "</a></td>";
                
            }
            else{
                tb += "<td><a class='btn btn-md btn-block btn-danger disabled not-active' href='confirmOrder.php?bock=bock1&time="+data[i].time+"'>" + data[i].bock1 + "</a></td>";
           
            }
            if(data[i].bock2 == "ว่าง"){
                tb += "<td><a class='btn btn-md btn-block btn-success' href='#' onClick='changecolor(this); '>" + data[i].bock2 + "</a></td>";
               
            }
            else{
                tb += "<td><a class='btn btn-md btn-block btn-danger disabled not-active' href='confirmOrder.php?bock=bock2&time="+data[i].time+"'>" + data[i].bock2 + "</a></td>";
           
            }
            if(data[i].bock3 == "ว่าง"){
                tb += "<td><a class='btn btn-md btn-block btn-success' href='#' onClick='return changecolor(this)'>" + data[i].bock3 + "</a></td>";
               
            }
            else{
                tb += "<td><a class='btn btn-md btn-block btn-danger disabled not-active' href='confirmOrder.php?bock=bock3&time="+data[i].time+"'>" + data[i].bock3 + "</a></td>";
           
            }                    
            tb += "</tr>";

        }        
        $("#bck").append(tb);

        } 
    });       
    
});  



function checkCt(num) {
  if(num < 0){
    alert("err");
  }  
   else{
    return false;
   }
   
}

function showtime(tm){
    alert(tm);
}
=======
    <tbody>
    </tbody>
    </table>
</div>

</body>


<script>

$(document).ready(function(){
        $.ajax({                                      
            url: 'apiQ.php',                  //the script to call to get data          
            data: "",                        //you can insert url argumnets here to pass to api.php
                                             //for example "id=5&parent=6"
            dataType: 'json',                //data format      
            success: function(data)          //on recieve of reply
            {   var tb = "";

                for(var i = 0; i < data.length; i++) {
                    tb += "<tr>";
                    tb += "<td>" + data[i].time + "</td>";
                    tb += "<td>" + data[i].bock1 + "</td>";
                    tb += "<td>" + data[i].bock2+ "</td>";
                    tb += "<td>" + data[i].bock3+ "</td>";
                    tb += "</tr>";
                    
                }
                
                $("#schedule").append(tb);
              //  $("#schedule").innerText  (tb);
               // document.write(tb);
            } 
        });       
    });  


    var table = document.getElementById("schedule"),rIndex,cIndex;

          
            // table rows
            for(var i = 1; i < table.rows.length; i++)
            {
                // row cells
                for(var j = 0; j < table.rows[i].cells.length; j++)
                {
                 
                    table.rows[i].cells[j].onclick = function()
                    { 
                        rIndex = this.parentElement.rowIndex;
                        cIndex = this.cellIndex+1;
                        console.log("Row : "+rIndex+" , Cell : "+cIndex);
                       
                        if($(this).text()=='ไม่ว่าง'){
                          this.innerHTML="ว่าง";
                          this.style.background="000000"  
                        }
                        else{
                          this.innerHTML="ไม่ว่าง"
                          this.style.background="red"   
                        }
                        
                        
                 };

                    
                   
                }
            }
>>>>>>> parent of 86af630... queue


function changecolor(element){    
    if (element.innerHTML == "ว่าง" && Ct > 0){  
        Ct--; 
        element.innerHTML = "เลือก";
        checkCt(Ct)
      //  $("a").removeClass("btn btn-md btn-block btn-success").addClass("btn btn-md btn-block btn-primary");
    } else {
        element.innerHTML = "ว่าง"
    }
    return false;
}
</script>
</html>
