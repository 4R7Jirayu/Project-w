<html>
<?php include "head.php";?>
<script src="//code.jquery.com/jquery.min.js"></script>
<script src="jquery.weekly-schedule-plugin.min.js"></script>
<?php include "header.php";?>
<style>
div{right:100px;}
</style>
<div id="mySchedule">
<div  class="container">
<script>
$('#mySchedule').weekly_schedule({
    // Days displayed
    days: ["ช่อง 1", "ช่อง 2", "ช่อง 3"], 
    // Hours displyed
    hours: "9:00AM-5:00PM", 
    // Font used in the component
    fontFamily: "Montserrat", 
    // Font colot used in the component
    fontColor: "black", 
    // Font weight used in the component
    fontWeight: "100", 
    // Font size used in the component
    fontSize: "0.8em", 
    // Background color when hovered
    hoverColor: "#727bad", 
    // Background color when selected
    selectionColor: "#9aa7ee", 
    // Background color of headers
    headerBackgroundColor: "transparent"  
  });
  
  </script>
</div>
</div>
</html>
