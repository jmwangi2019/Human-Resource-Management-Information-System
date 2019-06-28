<html>
<head>
    <title>Apply Leave</title>
    <link rel="stylesheet" href="bootstrap4/css/bootstrap.css">
    <link rel="stylesheet" href="css/custom.css">
    <script src="bootstrap4/js/bootstrap.js"></script>
</head>
<body>
<div class="container">
    <h2 class="text-center">Apply Leave</h2>
    <form action="leaves_hr.php" method="post">
        <table class="table table-striped table-responsive-sm">
            <tr>
                <td class="text-right">
                    <label for="staffid">Staff ID : </label>
                </td>
                <td>
                    <input type="number" class="form-control" name="staffid">
                </td>
            </tr>
            <tr>
                <td colspan="2" align="center">
                    <button class="btn btn-success" type="submit">Search</button>
                    <a href="hrman_dashboard.php" class="btn btn-primary">Dashboard</a>
                </td>
            </tr>
        </table>
    </form>
</div>
</body>
</html>