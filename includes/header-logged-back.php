<header>
    <nav class="navbar">
        <a class="navbar-brand" href="overview.php">
            <?php $class = "red"; include "includes/logo.php"; ?>
        </a>

        <a class="back-button" href="overview.php" title="zurück zur Übersicht"><i class="fa fa-angle-left"></i> Zurück zur Übersicht</a>

        <ul class="navbar-nav ml-auto order-1 order-sm-1 order-md-1 order-lg-12">
            <li class="nav-item logged-user">
                <a class="nav-link" href="profil-logged.php">
                    Alexander
                    <img src="assets/dist/images/alexander-user.png" alt="Alexander" class="img-responsive">
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link btn btn-primary" href="create-tour.php">Tour erstellen</a>
            </li>
        </ul>
    </nav>
</header>