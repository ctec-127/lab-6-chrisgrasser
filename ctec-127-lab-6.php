<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Lab No. 6 - Winter 2022</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="">Clark College</a>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-3">
        <div class="row">
            <div class="col jumbotron p-4 shadow">
                <p class="display-5 fw-bold">Welcome to the Clark College Arboretum!<br><span class="display-6">From your desktop or mobile
                        device, you can search through the trees
                        growing on campus.</span></p>
                <p>The Clark College Arboretum exists because of the vision and dedication of faculty and staff members
                    of Clark College who recognized the value of connecting education to the natural beauty of the campus landscape at 1933 Fort Vancouver Way. The Arboretum owes much of its abundance to the work and dedication of former Biology Professor Anna Pechanec. It was under her direction and shovel that many of the tree species on campus were planted in the 1950s through the 1970s. The Arboretum now boasts over 120 distinct
                    species, including a number of cultivated varieties.</p>
                <p>The Clark College Facilities Services Grounds Maintenance Department maintains our Arboretum.
                    Oversight of campus tree management is performed by the Campus Tree Advisory Committee according to
                    guidelines established by the Arbor Day Foundation's Tree Campus USA Program, of which Clark College is a proud awardee. The committee serves to provide guidance on issues such as: campus tree health, opportunities to plant additional species and varieties, preserving existing trees in the face of growing needs
                    for building expansion, as well as planning campus tree-related projects and celebrations. Our goal is
                    to preserve and expand the Clark College Arboretum for the benefit of all who find themselves on the
                    campus today and for many years to come.</p>
            </div>
        </div>
    </div>

    <div class="container mt-3">
        <?php
        if (isset($_GET['aralia'])) {
            $aralia = $_GET['aralia'];
            if ($aralia = true) {
                include "inc/aralia.html";
            }
        }

        if (isset($_GET['arborvitae'])) {
            $arborvitae = $_GET['arborvitae'];
            if ($arborvitae = true) {
                include "inc/arborvitae.html";
            }
        }

        if (isset($_GET['ash'])) {
            $ash = $_GET['ash'];
            if ($ash = true) {
                include "inc/ash.html";
            }
        }

        if (!isset($_GET['aralia']) && !isset($_GET['arborvitae']) && !isset($_GET['ash'])) {
            include "inc/aralia.html";
            include "inc/arborvitae.html";
            include "inc/ash.html";
        }
        ?>
    </div>

    <!-- Bootstrap JavaScript -->
    <script src="js/bootstrap.min.js"></script>
</body>

</html>