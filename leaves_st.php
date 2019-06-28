<?php
$conn=mysqli_connect("localhost","root","","leaves_db");

if (!$conn)
{
    die("Connection Failed: ".mysqli_connect_error());
}

$sql="SELECT * FROM staff_details WHERE staff_id='$_POST[staffid]'";
$result=$conn->query($sql);

if ($result->num_rows > 0)
{
    while ($row=$result->fetch_assoc())
    {
        ?>
        <html>
        <head>
            <title>Leave Application</title>
            <link rel="stylesheet" href="bootstrap4/css/bootstrap.css">
            <link rel="stylesheet" href="css/custom.css">
            <script src="bootstrap4/js/jquery-3.3.1.js"></script>
            <script src="bootstrap4/js/popper.js"></script>
            <script src="bootstrap4/js/bootstrap.js"></script>
        </head>
        <body>
        <div class="heading">
            <h2 class="text-center">Leave Application</h2>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-sm-3"></div>
                <div class="col-sm-6">
                    <form action="apply_leave_st.php" method="post">
                        <table class="table table-striped table-responsive-sm">
                            <tr>
                                <td class="text-right">
                                    <label for="">Leave Date : </label>
                                </td>
                                <td>
                                    <input type="date" name="leavedate" class="form-control" required>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-right">
                                    <label for="">Staff ID : </label>
                                </td>
                                <td>
                                    <input type="number" name="staffid" class="form-control" value="<?php echo $row["staff_id"];?>" required>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-right">
                                    <label for="">First Name : </label>
                                </td>
                                <td>
                                    <input type="text" name="fname" class="form-control" value="<?php echo $row["first_name"];?>"  required>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-right">
                                    <label for="">Other Names : </label>
                                </td>
                                <td>
                                    <input type="text" name="onames" class="form-control" value="<?php echo $row["other_names"];?>"  required>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-right">
                                    <label for="">Position : </label>
                                </td>
                                <td>
                                    <input type="text" name="position" class="form-control" value="<?php echo $row["positionj"];?>"  required>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-right">
                                    <label for="">Department : </label>
                                </td>
                                <td>
                                    <input type="text" name="department" class="form-control" value="<?php echo $row["department"];?>"  required>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <textarea name="purpose" id="purpose" cols="30" rows="10" class="form-control" placeholder="Leave Purpose"></textarea>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-right">
                                    <label for="">Date From : </label>
                                </td>
                                <td>
                                    <input type="date" name="datefrom" class="form-control" required>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-right">
                                    <label for="">Date To : </label>
                                </td>
                                <td>
                                    <input type="date" name="dateto" class="form-control" required>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2" class="text-center">
                                    <button class="btn btn-primary" type="submit">Apply</button>
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<!--                                    <a href="leave_search_u.php" class="btn btn-warning">Update</a>-->
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <a href="staff_dashboard.php" class="btn btn-dark">Dashboard</a>
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