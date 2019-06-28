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
<div class="heading">
    <h2 class="text-center">Leaves by Leave Type Report</h2>
</div>
<div class="container">
    <div class="row">
        <div class="col-sm-3"></div>
        <div class="col-sm-6">
            <form action="leaves_type_report.php" method="post" class="form-group">
                <table class="table table-striped table-responsive-sm">
                    <tr>
                        <td class="text-right">
                            <label for="">Leave Type</label>
                        </td>
                        <td>
                            <select name="leavetype" id="leavetype" class="form-control">
                                <option value="">------Select Leave Type--------</option>
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
                            <input type="date" name="leavetypedatefrom" class="form-control">
                        </td>
                    </tr>
                    <tr>
                        <td class="text-right">
                            <label for="">Date To : </label>
                        </td>
                        <td>
                            <input type="date" name="leavetypedateto" class="form-control">
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" class="text-center">
                            <button class="btn btn-success" type="submit">View Report</button>
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