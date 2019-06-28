<html>
<head>
    <title>HR Manager Dashboard</title>
    <link rel="stylesheet" href="bootstrap4/css/bootstrap.css">
    <link rel="stylesheet" href="css/custom.css">
    <script src="bootstrap4/js/jquery-3.3.1.js"></script>
    <script src="bootstrap4/js/popper.js"></script>
    <script src="bootstrap4/js/bootstrap.js"></script>
</head>
<body background="images/hr-wallpaper.jpg">
<nav class="navbar navbar-expand-sm bg-primary navbar-dark">
    <!-- Brand -->
    <a class="navbar-brand" href="#"><img src="images/tllogo4.png" alt="Logo" class="logo" width="100" height="50"></a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <!-- Links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="staff_details_hr.php">Staff Details</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="staff_apply_leave_hr.php">Leaves</a>
            </li>
            <!-- Dropdown -->
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                    Reports
                </a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="staff_details_report_hr.php">Staff Details Report</a>
                    <a class="dropdown-item" href="leave_applications_rep_hr.php">Leaves Applied Report</a>
                    <a class="dropdown-item" href="leave_approvals_rep_hr.php">Leaves Status Report</a>
                    <a class="dropdown-item" href="approvals_type_rep_hr.php">Leaves by Leave Type</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="logout.php">Logout</a>
            </li>
        </ul>
    </div>
</nav>
<div class="heading">
    <h4 class="text-center">HR Manager Dashboard</h4>
</div>
</body>
</html>