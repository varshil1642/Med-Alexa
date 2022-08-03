<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container-fluid">
    <a class="navbar-brand" href="#">
        <img src="med3.png" alt="" width="50" height="30" class="d-inline-block align-text-top">
        Med-Alexa
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item fsize">
                    <a class="nav-link active" aria-current="page" href="operator.php">Home</a>
                </li>
                <li class="nav-item fsize">
                    <a class="nav-link" href="operator-profile.php"> Operator Profile</a>
                </li>
                <li class="nav-item fsize">
                    <a class="nav-link" href="patient-profile.php">Update Patient Profile</a>
                </li>
                <li class="nav-item fsize">
                    <a class="nav-link" href="logout-user.php" tabindex="-1" aria-disabled="true">Logout</a>
                </li>
            </ul>
            <span class="welcome me-4">Welcome <?php echo $_SESSION['op_name'];?></span>
        </div>
    </div>
</nav>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="med3.png" alt="" width="50" height="30" class="d-inline-block align-text-top">
                Med-Alexa
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="doctor.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="doctor-profile.php">Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="report-view.php" >View Report</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="prescription-view.php" >View Prescription</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="logout-user.php" tabindex="-1" aria-disabled="true">Logout</a>
                    </li>
                </ul>
                <span class="welcome me-4">Welcome <?php echo $_SESSION['dr_name'];?></span>
            </div>
        </div>
    </nav>