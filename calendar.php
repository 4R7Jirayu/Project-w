<html>

<head>
    <meta charset="utf-8">
    <title> Scheduler </title>
    <?php include "header.php";?>
    
    <link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script src="jquery.weekly-schedule-plugin.js"></script>
    <link rel="stylesheet" href="style.css">
       

</head>

<body>

    <div class="container" style="width: 90%; height: 100%; display: flex; flex-direction: row; justify-content: center;">

        <div id="calendar">
        </div>
    </div>
    <script>
        
        $('#calendar').weekly_schedule({

        // Days displayed
        days: ["ช่องที่ 1", "ช่องที่ 2", "ช่องที่ 3"], 

        // Hours displyed
        hours: "9:00AM-5:00PM", 

        // Font used in the component
        fontFamily: "Montserrat", 

        // Font colot used in the component
        fontColor: "black", 

        // Font weight used in the component
        fontWeight: "100", 

        // Font size used in the component
        fontSize: "1em", 

        // Background color when hovered
        hoverColor: "#727bad", 

        // Background color when selected
        selectionColor: "#9aa7ee", 

        // Background color of headers
        headerBackgroundColor: "transparent"
        
        });
        $('.schedule').on('selectionmade', function() {
            console.log("Selection Made");
        }).on('selectionremoved', function() {
            console.log("Selection Removed");
        });
    </script>
</body>
<script type="text/javascript">
</script>

</html>