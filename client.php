-<html>
<?php
include ("head.php");
?>
  <head>
    <script language="javascript" type="text/javascript" src="jquery.js"></script>
  </head>
  <body>



    <div class="container">
        <div class="box"></div>
        <table class="table table-striped">
            <thead>
                <tr>
                    <td>Id</td>
                    <td>List</td>
                    <td>Price</td>
                </tr>
            </thead>
            <tbody id="tlist">
            </tbody>
        </table>

        <button class="btn btn-primary" id="load">LOAD DATA</button>
    </div>
  
    <script>
    
    $("#load").on('click' , function() {

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

                for(var i = 0; i < data.length; i++) {
                    tb += "<tr>";
                    tb += "<td>" + data[i].id + "</td>";
                    tb += "<td>" + data[i].name + "</td>";
                    tb += "<td>" + data[i].price+ "</td>";
                    tb += "</tr>";
                }

                $("#tlist").append(tb);
            } 
        });

    });


    </script>

  </body>