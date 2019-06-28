<html>
<head>
    <title>Search Leave Application</title>
    <link rel="stylesheet" href="bootstrap4/css/bootstrap.css">
    <link rel="stylesheet" href="css/custom.css">
    <script src="bootstrap4/js/bootstrap.js"></script>
</head>
<body>
<div class="container">
    <h2 class="text-center">Search Leave Application</h2>
    <form action="Leave_Approvals.php" method="post">
        <table class="table table-striped table-responsive-sm">
            <tr>
                <td class="text-right">
                    <label for="leaveid">Leave ID : </label>
                </td>
                <td>
                    <input type="number" class="form-control" name="leaveid">
                </td>
            </tr>
            <tr>
                <td colspan="2" align="center">
                    <button class="btn btn-success" type="submit">Search</button>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <a href="sysadmin_dashboard.php" class="btn btn-primary">Dashboard</a>
                </td>
            </tr>
        </table>
    </form>
</div>
</body>
</html>