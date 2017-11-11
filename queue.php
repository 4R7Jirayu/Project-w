<html>
<?php include "head.php";?>
<?php 
include "header.php";
?>

      <style>
            td:hover{background-color:#ddfddd;;cursor: pointer}           
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
                alert(tb);
                //$("#schedule").append(tb);
                $("#schedule").innerText  (tb);
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


        </script>
</html>
