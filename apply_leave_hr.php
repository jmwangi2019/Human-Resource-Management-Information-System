<html>
<head>
    <title>Success</title>
    <link rel="stylesheet" href="bootstrap4/css/bootstrap.css">
    <link rel="stylesheet" href="css/custom.css">
    <script src="bootstrap4/js/jquery-3.3.1.js"></script>
    <script src="bootstrap4/js/popper.js"></script>
    <script src="bootstrap4/js/bootstrap.js"></script>
</head>
<body>
<div class="heading">
    <h2 class="text-center">Success</h2>
</div>
<div class="container">
    <?php

    $conn=mysqli_connect("localhost","root","","leaves_db");
    if (!$conn)
    {
        die("Connection Failed : " . mysqli_connect_error());
    }
    else{
        $sql="insert into leaves(leave_date,staff_id,first_name,other_names,positionj,department,purpose,date_from,date_to)
values ('$_POST[leavedate]','$_POST[staffid]','$_POST[fname]','$_POST[onames]','$_POST[position]','$_POST[department]','$_POST[purpose]','$_POST[datefrom]','$_POST[dateto]')";
        if ($conn->query($sql) == true)
        {
            print "<p>Leave applied successfully</p>";
            print "<a href='staff_apply_leave_hr.php' class='btn btn-dark'>New Leave Application</a>";
        }
        else{
            print "Leave not applied";
        }
    }
    mysqli_close($conn);
    ?>
</div>
</body>
</html>