<?php 
    $header = (isset($header) ? $header : "");
    $headerHome = (isset($headerHome) ? $headerHome : "");
    $headerBack = (isset($headerBack) ? $headerBack : "");
    $logged = (isset($logged) ? $logged : "");
    $loggedBack = (isset($loggedBack) ? $loggedBack : "");
    $loggedBackMobile = (isset($loggedBackMobile) ? $loggedBackMobile : "");
?>

<?php if($header == "true"): ?>
    <header>
        <nav class="navbar">
            <a class="navbar-brand" href="overview.php">
                <?php $class = "red"; include "includes/logo.php"; ?>
            </a>

            <form class="mr-auto order-12 order-sm-12 order-md-12 order-lg-1">
                <div class="form-wrapper">
                    <div class="form-fit-helper form-group">
                        <input type="text" class="form-control" id="where" placeholder="Hamburg">
                        <label for="where" class="col-form-label"></label>
                        <ul class="search-drop dropdown" data-search-dropdown="">
                            <li><i class="mm mm-iconmap"></i><p>Hamburg</p><span>Stadt, Deutschland (3 Touren)</span></li>
                            <li><i class="mm mm-iconmap"></i><p>Hamm</p><span>Stadt, Deutschland (2 Touren)</span></li>
                            <li><i class="mm mm-iconmap"></i><p>Hameln</p><span>Stadt, Deutschland (1 Touren)</span></li>
                        </ul>
                    </div>
                    <div class="form-fit-helper form-group">
                        <input type="text" class="form-control" id="time" placeholder="29.10.18">
                        <label for="time" class="col-form-label"></label>
                    </div>
                    <div class="form-fit-helper form-group">
                        <label for="art" class="col-form-label select-label">
                            <select name="art" id="art" class="form-control">
                                <option disabled selected>Ruhiges fahren</option>
                                <option>Tour Art 1</option>
                                <option>Tour Art 2</option>
                                <option>Tour Art 3</option>
                            </select>
                        </label>
                    </div>
                </div>
                <div class="row btn-holder d-lg-none d-md-none">
                    <div class="col-6">
                        <a href="#" class="btn btn-default" data-toggle="modal" data-target="#searchfilter">
                            Suchradius & Filter
                        </a>
                    </div>
                    <div class="col-6">
                        <a href="#" class="btn btn-default" data-view-switcher>
                            Kartenansicht
                        </a>
                    </div>
                </div>
            </form>

            <ul class="navbar-nav ml-auto order-1 order-sm-1 order-md-1 order-lg-12">
                <li class="nav-item active d-none d-sm-none d-md-block">
                    <a class="nav-link" href="#" data-toggle="modal" data-target="#register">Registrieren</a>
                </li>
                <li class="nav-item d-none d-sm-none d-md-block">
                    <a class="nav-link" href="#" data-toggle="modal" data-target="#login">Einloggen</a>
                </li>
                <li class="nav-item d-lg-none d-md-none">
                    <a class="nav-link" href="#" data-toggle="modal" data-target="#login"><i class="mm mm-iconuser"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link btn btn-primary" href="create-tour.php">Tour erstellen</a>
                </li>
            </ul>
        </nav>
    </header>
<?php elseif($headerHome == "true"): ?>
    <header class="mb-auto">
        <nav class="bg-nav navbar">
            <a class="navbar-brand" href="/">
                <?php $class = "white"; include "includes/logo.php"; ?>
            </a>
            <ul class="navbar-nav ml-auto">
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
                    <a class="nav-link btn btn-outline" href="create-tour.php">Tour erstellen</a>
                </li>
            </ul>
        </nav>
    </header>
<?php elseif($headerBack == "true"): ?>
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
<?php elseif($logged == "true"): ?>
    <header>
        <nav class="navbar">
            <a class="navbar-brand" href="overview.php">
                <?php $class = "red"; include "includes/logo.php"; ?>
            </a>

            <form class="mr-auto order-12 order-sm-12 order-md-12 order-lg-1">
                <div class="form-wrapper">
                    <div class="form-fit-helper form-group">
                        <input type="text" class="form-control" id="where" placeholder="Hamburg">
                        <label for="where" class="col-form-label"></label>
                        <ul class="search-drop dropdown" data-search-dropdown="">
                            <li><i class="mm mm-iconmap"></i><p>Hamburg</p><span>Stadt, Deutschland (3 Touren)</span></li>
                            <li><i class="mm mm-iconmap"></i><p>Hamm</p><span>Stadt, Deutschland (2 Touren)</span></li>
                            <li><i class="mm mm-iconmap"></i><p>Hameln</p><span>Stadt, Deutschland (1 Touren)</span></li>
                        </ul>
                    </div>
                    <div class="form-fit-helper form-group">
                        <input type="text" class="form-control" id="time" placeholder="29.10.18">
                        <label for="time" class="col-form-label"></label>
                    </div>
                    <div class="form-fit-helper form-group">
                        <label for="art" class="col-form-label select-label">
                            <select name="art" id="art" class="form-control">
                                <option disabled selected>Ruhiges fahren</option>
                                <option>Tour Art 1</option>
                                <option>Tour Art 2</option>
                                <option>Tour Art 3</option>
                            </select>
                        </label>
                    </div>
                </div>
                <div class="row btn-holder d-lg-none d-md-none">
                    <div class="col-6">
                        <a href="#" class="btn btn-default">
                            Suchradius & Filter
                        </a>
                    </div>
                    <div class="col-6">
                        <a href="#" class="btn btn-default">
                            Kartenansicht
                        </a>
                    </div>
                </div>
            </form>
    
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
<?php elseif($loggedBack == "true"): ?>
    <header>
        <?php if($loggedBackMobile == "true"): ?>
        <div class="d-none d-sm-none d-md-block d-lg-block">
        <?php endif; ?>
            <nav class="navbar">
                <a class="navbar-brand d-none d-sm-none d-md-block d-lg-block" href="overview.php">
                    <?php $class = "red"; include "includes/logo.php"; ?>
                </a>

                <a class="back-button" href="overview.php" title="zurück zur Übersicht"><i class="fa fa-angle-left"></i> <span class="d-none d-sm-none d-md-inline d-lg-inline">Zurück zur Übersicht</span></a>

                <ul class="navbar-nav ml-auto order-1 order-sm-1 order-md-1 order-lg-12">
                    <li class="nav-item logged-user">
                        <a class="nav-link got-notifications" href="profil-logged.php">
                            Alexander
                            <img src="assets/dist/images/alexander-user.png" alt="Alexander" class="img-responsive">
                            <span class="notification">1</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-primary" href="create-tour.php">Tour erstellen</a>
                    </li>
                </ul>
            </nav>
        <?php if($loggedBackMobile == "true"): ?>
        </div>
        <?php endif; ?>
    </header>
    <?php if($loggedBackMobile == "true"): ?>
        <header>
            <div class="d-sm-block d-md-none d-lg-none">
                <nav class="navbar dark-bg d-block">
                    <a class="navbar-brand" href="overview.php">
                        <?php $class = "white"; include "includes/logo.php"; ?>
                    </a>
                    <button class="navbar-toggler pull-right got-notifications" type="button" data-toggle="modal" data-target="#menuModal" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="menu-icon"></span>
                        <span class="menu-icon"></span>
                        <span class="menu-icon"></span>
                    </button>
                </nav>
            </div>
        </header>
        <!-- Mobile menu -->
        <div class="modal fade fullscreen" id="menuModal"  tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <div class="user-profile w-100">
                            <span class="image-round shadow align-middle pull-left">
                                <span class="round-holder">
                                    <img src="assets/dist/images/alexander-user-big.png" alt="Alexander User" class="img-fluid" width="100" height="100" />
                                </span>
                            </span>
                            <h2 class="h3 align-middle pull-left">Alexander<br>Schmidt</h2>
                        </div>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span class="btn-close"></span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <ul class="mobile-nav">
                            <li><a href="profil-logged.php">Profil</a></li>
                            <li><a href="profil-notifications.php">Benachrichtigungen</a> <span class="notification font-top">23</span></li>
                            <li><a href="profil-settings.php">Profileinstellungen</a></li>
                        </ul>
                        <a class="btn-logout" href="overview.php">Ausloggen</a>
                    </div>
                </div>
            </div>
        </div>
    <?php endif; ?>
<?php endif; ?>
