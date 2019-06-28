<html>
<head>
    <title>Success</title>
    <link rel="icon" href="images/tllogo4.png">
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
        $sql="delete from staff_details where staff_id='$_POST[staffid]'";

        if($conn->query($sql))
        {
            print "Record deleted successfully";
        }
        else{
            print "Cannot delete record";
        }
    }
    mysqli_close($conn);
    ?>
    <br><br>
    <a href="staff_details.php" class="btn btn-info">Back to Staff details</a>
</div>
</body>
</html>