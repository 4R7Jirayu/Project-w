<html>
<?php include "head.php";?>
<?php 
include "header.php";
?>

      <style>
            td:hover{background-color:#ddd;;cursor: pointer}
            .selected{background-color: red;color: #fff;font-weight: bold}
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
      <tr>
        <th scope="row">09:00</th>
        <td>ว่าง</td>
        <td>ว่าง</td>
        <td>ว่าง</td>
      </tr>
      <tr>
        <th scope="row">09:30</th>
        <td>ว่าง</td>
        <td>ว่าง</td>
        <td>ว่าง</td>
      </tr>
      <tr>
        <th scope="row">10:00</th>
        <td>ว่าง</td>
        <td>ว่าง</td>
        <td>ว่าง</td>
      </tr>
      <tr>
        <th scope="row">10:30</th>
        <td>ว่าง</td>
        <td>ว่าง</td>
        <td>ว่าง</td>
      </tr>
      <tr>
        <th scope="row">11:00</th>
        <td>ว่าง</td>
        <td>ว่าง</td>
        <td>ว่าง</td>
      </tr>
      <tr>
        <th scope="row">11:30</th>
        <td>ว่าง</td>
        <td>ว่าง</td>
        <td>ว่าง</td>
      </tr>
      <tr>
        <th scope="row">12:00</th>
        <td>ว่าง</td>
        <td>ว่าง</td>
        <td>ว่าง</td>
      </tr>
      <tr>
        <th scope="row">12:30</th>
        <td>ว่าง</td>
        <td>ว่าง</td>
        <td>ว่าง</td>
      </tr>
      <tr>
        <th scope="row">13:00</th>
        <td>ว่าง</td>
        <td>ว่าง</td>
        <td>ว่าง</td>
      </tr>
      <tr>
        <th scope="row">13:30</th>
        <td>ว่าง</td>
        <td>ว่าง</td>
        <td>ว่าง</td>
      </tr>
      <tr>
        <th scope="row">14:00</th>
        <td>ว่าง</td>
        <td>ว่าง</td>
        <td>ว่าง</td>
      </tr>
      <tr>
        <th scope="row">14:30</th>
        <td>ว่าง</td>
        <td>ว่าง</td>
        <td>ว่าง</td>
      </tr>
      <tr>
        <th scope="row">15:00</th>
        <td>ว่าง</td>
        <td>ว่าง</td>
        <td>ว่าง</td>
      </tr>
      <tr>
        <th scope="row">15:30</th>
        <td>ว่าง</td>
        <td>ว่าง</td>
        <td>ว่าง</td>
      </tr>
      <tr>
        <th scope="row">16:00</th>
        <td>ว่าง</td>
        <td>ว่าง</td>
        <td>ว่าง</td>
      </tr>
    </tbody>
  </table>
  </div>
</body>


<script>
            
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
                    };
                }
            }
            
        </script>



</html>
