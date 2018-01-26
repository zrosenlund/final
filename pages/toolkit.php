
<link href="https://fonts.googleapis.com/css?family=Nothing+You+Could+Do" rel="stylesheet">
<nav class="navbar navbar-light bg-faded navbar-toggleable-sm">
    <div class="container">
        <div class="navbar-brand hidden-md-down" id="logo">St. James</div>
            <div class="navbar-nav mr-auto">
                <a class="nav-item nav-link" href="index.php">Guest List</a>
                <a class="nav-item nav-link" href="newForm.php">New Guest</a>
                <a class="nav-item nav-link" href="reports.php">Reports</a>
                <a class="nav-item nav-link" href="logout.php">Logout</a>

                <?php
                    if(isset($_COOKIE['admin'])) {
                        //echo "<a class"
                        echo "<a class='nav-item nav-link' href='settings.php'>Settings</a>";
                    }

                ?>
            </div><!-- navbar-nav -->
    </div><!-- container -->
</nav>