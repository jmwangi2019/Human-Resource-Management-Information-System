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

    $conn = mysqli_connect("localhost", "root", "", "leaves_db");
    if (!$conn) {
        die("Connection Failed : " . mysqli_connect_error());
    } else {
        $sql = "insert into approvals(leave_id,leave_date,staff_id,first_name,other_names,positionj,
department,purpose,leave_type,date_from,date_to,status,date_approved)
values ('$_POST[leaveid]','$_POST[leavedate]','$_POST[staffid]','$_POST[fname]','$_POST[onames]',
'$_POST[position]','$_POST[department]','$_POST[purpose]','$_POST[leavetype]','$_POST[datefrom]',
'$_POST[dateto]','$_POST[status]','$_POST[dateapproved]')";
        if ($conn->query($sql) == true) {
            print "Leave Approved / Declined Successfully<br><br>";
            print "<a href='Leave_Search_Approve.php' class='btn btn-primary'>Approve / Decline another Leave Application</a>";
            print "<b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b>";
            print "<a href='sysadmin_dashboard.php' class='btn btn-dark'>Dashboard</a>";
        } else {
            print "Leave Application not approved / declined successfully";
        }
    }

    mysqli_close($conn);
    ?>
</div>
</body>
</html>