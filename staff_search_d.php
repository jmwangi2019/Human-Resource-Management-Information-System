<html>
<head>
    <title>Search</title>
    <link rel="stylesheet" href="bootstrap4/css/bootstrap.css">
    <link rel="stylesheet" href="css/custom.css">
    <script src="bootstrap4/js/bootstrap.js"></script>
</head>
<body>
<div class="container">
    <h2 class="text-center">Search</h2>
    <form action="staff_display_d.php" method="post">
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
                    <a href="staff_details.php" class="btn btn-primary">Back to Staff Details</a>
                </td>
            </tr>
        </table>
    </form>
</div>
</body>
</html>