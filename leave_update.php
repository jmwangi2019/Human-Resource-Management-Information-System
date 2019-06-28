<html>
<head>
    <title>Success</title>
    <link rel="stylesheet" href="bootstrap4/css/bootstrap.css">
    <link rel="stylesheet" href="css/custom.css">
    <script src="bootstrap4/js/bootstrap.js"></script>
</head>
<body>
<div class="container">
    <h3>Success</h3>
    <?php

    $conn=mysqli_connect("localhost","root","","leaves_db");

    if (!$conn)
    {
        die("Connection Error : " .mysqli_connect_error());
    }
    else{
        $sql="update leaves set leave_date='$_POST[leavedate]', staff_id='$_POST[staffid]', first_name='$_POST[fname]',other_names='$_POST[onames]',
positionj='$_POST[desig]',department='$_POST[department]',purpose='$_POST[purpose]',date_from='$_POST[datefrom]', date_to='$_POST[dateto]' where leave_id='$_POST[leaveid]'";

        if($conn->query($sql))
        {
            print "Record updated successfully";
        }
        else{
            print "Cannot update record";
        }
    }
    mysqli_close($conn);
    ?>
    <br><br>
    <a href="staff_apply_leave.php" class="btn btn-info">Back to Staff details</a>
</div>
</body>
</html>
