<?php
$conn=mysqli_connect("localhost","root","","leaves_db");

if (!$conn)
{
    die("Connection Failed: ".mysqli_connect_error());
}

$sql="SELECT * FROM leaves WHERE leave_id='$_POST[leaveid]'";
$result=$conn->query($sql);

if ($result->num_rows > 0)
{
    while ($row=$result->fetch_assoc())
    {
        ?>
        <html>
        <head>
            <title>Leave Approvals</title>
            <link rel="stylesheet" href="bootstrap4/css/bootstrap.css">
            <link rel="stylesheet" href="css/custom.css">
            <script src="bootstrap4/js/jquery-3.3.1.js"></script>
            <script src="bootstrap4/js/popper.js"></script>
            <script src="bootstrap4/js/bootstrap.js"></script>
        </head>
        <body>
        <div class="heading">
            <h2 class="text-center">Approve Leave</h2>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-sm-3"></div>
                <div class="col-sm-6">
                    <form action="Approvals.php" method="post">
                        <table class="table table-striped table-responsive-sm">
                            <tr>
                                <td class="text-right">
                                    <label for="">Leave ID : </label>
                                </td>
                                <td>
                                    <input type="number" name="leaveid" class="form-control" value="<?php echo $row["leave_id"];?>">
                                </td>
                            </tr>
                            <tr>
                                <td class="text-right">
                                    <label for="">Leave Date : </label>
                                </td>
                                <td>
                                    <input type="date" name="leavedate" class="form-control" value="<?php echo $row["leave_date"];?>">
                                </td>
                            </tr>
                            <tr>
                                <td class="text-right">
                                    <label for="">Staff ID : </label>
                                </td>
                                <td>
                                    <input type="number" name="staffid" class="form-control" value="<?php echo $row["staff_id"];?>">
                                </td>
                            </tr>
                            <tr>
                                <td class="text-right">
                                    <label for="">First Name : </label>
                                </td>
                                <td>
                                    <input type="text" name="fname" class="form-control" value="<?php echo $row["first_name"];?>">
                                </td>
                            </tr>
                            <tr>
                                <td class="text-right">
                                    <label for="">Other Names : </label>
                                </td>
                                <td>
                                    <input type="text" name="onames" class="form-control" value="<?php echo $row["other_names"];?>">
                                </td>
                            </tr>
                            <tr>
                                <td class="text-right">
                                    <label for="">Position : </label>
                                </td>
                                <td>
                                    <input type="text" name="position" class="form-control" value="<?php echo $row["positionj"];?>">
                                </td>
                            </tr>
                            <tr>
                                <td class="text-right">
                                    <label for="">Department : </label>
                                </td>
                                <td>
                                    <input type="text" name="department" class="form-control" value="<?php echo $row["department"];?>">
                                </td>
                            </tr>
                            <tr>
                                <td class="text-right">
                                    <label for="">Leave Purpose : </label>
                                </td>
                                <td>
                                    <input type="text" name="purpose" class="form-control" value="<?php echo $row["purpose"] ?>" required>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-right">
                                    <label for="">Leave Type : </label>
                                </td>
                                <td>
                                    <select name="leavetype" id="leavetype" class="form-control" required>
                                        <option value="Annual Leave">Annual Leave</option>
                                        <option value="Paternal Leave">Paternal Leave</option>
                                        <option value="Maternal Leave">Maternal Leave</option>
                                        <option value="Sick Leave">Sick Leave</option>
                                        <option value="Compulsory Leave">Compulsory Leave</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-right">
                                    <label for="">Date From : </label>
                                </td>
                                <td>
                                    <input type="date" name="datefrom" class="form-control" value="<?php echo $row["date_from"];?>">
                                </td>
                            </tr>
                            <tr>
                                <td class="text-right">
                                    <label for="">Date To : </label>
                                </td>
                                <td>
                                    <input type="date" name="dateto" class="form-control" value="<?php echo $row["date_to"];?>">
                                </td>
                            </tr>
                            <tr>
                                <td class="text-right">
                                    <label for="status">Leave Status : </label>
                                </td>
                                <td>
                                    <select name="status" id="status" class="form-control" required>
                                        <option value="Approved">Approved</option>
                                        <option value="Declined">Declined</option>
                                        <option value="Pending">Pending</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-right">
                                    <label for="">Date Approved / Declined : </label>
                                </td>
                                <td>
                                    <input type="date" name="dateapproved" class="form-control" required>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2" class="text-center">
                                    <button class="btn btn-primary" type="submit">Approve/Decline</button>
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <a href="sysadmin_dashboard.php" class="btn btn-dark">Dashboard</a>
                                </td>
                            </tr>
                        </table>
                    </form>
                </div>
                <div class="col-sm-3"></div>
            </div>
        </div>
        </body>
        </html>
        <?php
    }
}
mysqli_close($conn);
?>