<header>
    <nav class="navbar">
        <a class="navbar-brand d-none d-sm-none d-md-block d-lg-block" href="overview.php">
            <?php $class = "red"; include "includes/logo.php"; ?>
        </a>

        <a class="back-button" href="overview.php" title="zurück zur Übersicht"><i class="fa fa-angle-left"></i> <span class="d-none d-sm-none d-md-inline d-lg-inline">Zurück zur Übersicht</span></a>

        <ul class="navbar-nav ml-auto order-1 order-sm-1 order-md-1 order-lg-12">
            <li class="nav-item active d-none d-sm-none d-md-block">
                <a class="nav-link" href="#" data-toggle="modal" data-target="#register">Registrieren</a>
            </li>
            <li class="nav-item d-none d-sm-none d-md-block">
                <a class="nav-link" href="#" data-toggle="modal" data-target="#login">Einloggen</a>
            </li>
            <li class="nav-item">
                <a class="nav-link btn btn-primary" href="create-tour.php">An Tour teilnehmen</a>
            </li>
        </ul>
    </nav>
</header>