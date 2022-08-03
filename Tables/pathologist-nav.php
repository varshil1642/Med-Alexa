<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="logo.png" alt="" width="30" height="30" class="d-inline-block align-text-top">    
                Med-Alexa
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="pathologist.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="pathologist-profile.php">Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="pathology-report-view.php">View Report</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="resubmit.php">Re-submit Report</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="logout-user.php" tabindex="-1" aria-disabled="true">Logout</a>
                    </li>
                </ul>
                <span class="welcome me-4" style="color:white;">Welcome <?php echo $_SESSION['pa_name'];?></span>
            </div>
        </div>
    </nav>
    