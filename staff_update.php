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
        $sql="update staff_details set first_name='$_POST[fname]',other_names='$_POST[onames]',
positionj='$_POST[desig]',department='$_POST[department]',join_date='$_POST[jdate]',basic_salary='$_POST[bsal]' where staff_id='$_POST[staffid]'";

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
    <a href="staff_details.php" class="btn btn-info">Back to Staff details</a>
</div>
</body>
</html>
