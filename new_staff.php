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
        $sql="insert into staff_details(first_name,other_names,positionj,department,join_date,basic_salary)
values ('$_POST[fname]','$_POST[onames]','$_POST[position]','$_POST[department]','$_POST[joindate]','$_POST[bsal]')";
        if ($conn->query($sql) == true)
        {
            print "<p>New staff added successfully</p>";
            print "<a href='staff_details.php' class='btn btn-primary'>Add New</a>&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
        }
        else{
            print "Record not added";
        }
    }
    mysqli_close($conn);
    ?>
</div>
</body>
</html>