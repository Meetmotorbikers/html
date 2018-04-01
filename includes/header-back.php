<header>
    <nav class="navbar">
        <a class="navbar-brand" href="#">
            <?php $class = "red"; include "includes/logo.php"; ?>
        </a>

        <a class="back-button" href="overview.php" title="zurück zur Übersicht"><i class="fa fa-angle-left"></i> Zurück zur Übersicht</a>

        <ul class="navbar-nav ml-auto order-1 order-sm-1 order-md-1 order-lg-12">
            <li class="nav-item active d-none d-sm-none d-md-block">
                <a class="nav-link" href="#" data-toggle="modal" data-target="#register">Registrieren</a>
            </li>
            <li class="nav-item d-none d-sm-none d-md-block">
                <a class="nav-link" href="#" data-toggle="modal" data-target="#login">Einloggen</a>
            </li>
            <li class="nav-item d-lg-none d-md-none">
                <a class="nav-link" href="#"><i class="mm mm-iconuser"></i></a>
            </li>
            <li class="nav-item">
                <a class="nav-link btn btn-primary" href="#">Tour erstellen</a>
            </li>
        </ul>
    </nav>
</header>