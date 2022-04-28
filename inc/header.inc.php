<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title><?= $pageTitle ?></title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="ctec-127-lab-6.php">Clark College</a>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="ctec-127-lab-6.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <?php
                        if (isset($_SESSION['loggedin'])) {
                            echo '<a class="nav-link" href="logout.php" id="logout">Logout</a>';
                        } else {
                            echo '<a class="nav-link" href="login.php" id="login">Login</a>';
                        }
                        ?>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="register.php">Register</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>