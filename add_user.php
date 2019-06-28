<html>
<head>
<!--    Code to Verify that the details have been posted to
db successfully.-->
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
        $sql="insert into users(staff_id,first_name,other_names,positionj,department,username,password,user_group)
values ('$_POST[staffid]','$_POST[fname]','$_POST[onames]','$_POST[desig]','$_POST[department]','$_POST[username]','$_POST[password]','$_POST[usergroup]')";
        if ($conn->query($sql) == true)
        {
            print "<p>New User Added Successfully</p>";
            print "<p><a href='search_staff_user.php' class='btn btn-primary'>Add New User</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href='index.php' class='btn btn-dark'>Login</a></p>";
        }
        else{
            print "<p>User not added</p>";
        }
    }
    mysqli_close($conn);
    ?>
</div>
</body>
</html>