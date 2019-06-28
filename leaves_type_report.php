<html>
<head>
    <title>Leaves by Leave Type Report</title>
    <link rel="stylesheet" href="bootstrap4/css/bootstrap.css">
    <link rel="stylesheet" href="css/custom.css">
    <script src="bootstrap4/js/jquery-3.3.1.js"></script>
    <script src="bootstrap4/js/popper.js"></script>
    <script src="bootstrap4/js/bootstrap.js"></script>
</head>
<body>
<br>
<p class="text-center">
    <img src="images/tllogo4.png" alt="Logo" width="100" height="50">
</p>
<div class="heading">
    <h4 class="text-center">Leaves by Leave Type Report</h4>
</div>
<?php
$con = mysqli_connect("localhost", "root", "", "leaves_db");
// Check connection
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($con, "SELECT * FROM approvals where leave_type='$_POST[leavetype]' and date_approved>='$_POST[leavetypedatefrom]' and date_approved<='$_POST[leavetypedateto]'");

echo "<table class='table table-striped table-responsive-sm'>
<tr>
<th>Approval ID</th>
<th>Leave ID</th>
<th>Leave Date</th>
<th>Staff ID</th>
<th>First Name</th>
<th>Other Names</th>
<th>Position</th>
<th>Leave Type</th>
<th>Date From</th>
<th>Date To</th>
<th>Status</th>
<th>Date Approved</th>
</tr>";

while ($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>" . $row['approval_id'] . "</td>";
    echo "<td>" . $row['leave_id'] . "</td>";
    echo "<td>" . $row['leave_date'] . "</td>";
    echo "<td>" . $row['staff_id'] . "</td>";
    echo "<td>" . $row['first_name'] . "</td>";
    echo "<td>" . $row['other_names'] . "</td>";
    echo "<td>" . $row['positionj'] . "</td>";
    echo "<td>" . $row['leave_type'] . "</td>";
    echo "<td>" . $row['date_from'] . "</td>";
    echo "<td>" . $row['date_to'] . "</td>";
    echo "<td>" . $row['status'] . "</td>";
    echo "<td>" . $row['date_approved'] . "</td>";
    echo "</tr>";
}
echo "</table>";

mysqli_close($con);
?>
<p class="text-center">
    <a href="sysadmin_dashboard.php" class="btn btn-primary">Dashboard</a>
</p>
</body>
</html>