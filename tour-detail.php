<!DOCTYPE html>
<html lang="de">
    <?php $title = "Tour Detail"; include "includes/head.php"; ?>
    <body class="page">
        <div class="d-flex h-100 mx-auto flex-column">
            <?php include "includes/header-back.php"; ?>
            <main class="tour-detail p-5">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xs-12 col-md-6 col-lg-8">
                            <h1>Tour durch den Hohen Norden</h1>
                            <ul class="tour-infos">
                                <li><i class="mm mm-iconcalendar"></i><span>in 2 Tagen</span></li>
                                <li><i class="mm mm-iconclock"></i><span>erscheint sobald eingeloggt </span></li>
                                <li><i class="mm mm-iconhead"></i><span>6/10 max. Teilnehmer</span></li>
                            </ul>
                            <hr class="mt-4 mb-4" />
                            <h3>Route</h3>
                            <div class="steps-timeline">
                                <div class="step">
                                    <h4>Treffpunkt</h4>
                                    <address>Rathausmarkt 1<br />20095 Hamburg</address>
                                </div>
                                <div class="step">
                                    <h4>Zwischenstop</h4>
                                    <address>Heinrich-Osterath-Straße<br />21037 Hamburg</address>
                                </div>
                                <div class="step">
                                    <h4>Ziel</h4>
                                    <address>Schifferamt 6<br />21423 Winsen</address>
                                </div>
                            </div>
                            <hr class="mt-4 mb-4" />
                            <h3>Teilnehmer</h3>
                            <ul class="user-list">
                                <li>
                                    <a href="profil-blocked.php" title="profillink">
                                        <img src="assets/dist/images/user-1.png" alt="user-1" width="59" height="59" />
                                    </a>
                                </li>
                                <li>
                                    <a href="profil-blocked.php" title="profillink">
                                        <img src="assets/dist/images/user-2.png" alt="user-2" width="59" height="59" />
                                    </a>
                                </li>
                                <li>
                                    <a href="profil-blocked.php" title="profillink">
                                        <img src="assets/dist/images/user-3.png" alt="user-3" width="59" height="59" />
                                    </a>
                                </li>
                                <li>
                                    <a href="profil-blocked.php" title="profillink">
                                        <img src="assets/dist/images/user-4.png" alt="user-4" width="59" height="59" />
                                    </a>
                                </li>
                                <li>
                                    <a href="profil-blocked.php" title="profillink">
                                        <img src="assets/dist/images/user-5.png" alt="user-5" width="59" height="59" />
                                    </a>
                                </li>
                                <li>
                                    <a href="profil-blocked.php" title="profillink">
                                        <img src="assets/dist/images/user-6.png" alt="user-6" width="59" height="59" />
                                    </a>
                                </li>
                            </ul>
                            <hr class="mt-4 mb-4" />
                            <h3>Beschreibung</h3>
                            <p>
                                Hallo Leute,<br/>ich und meine kumpels wollen Richtung Hannover eine schön entspannte Tour drehen. Wir suchen noch Leute die sich uns anschließen wollen. 
                            </p>
                            <hr class="mt-4 mb-4" />
                        </div>
                        <div class="col-xs-12 col-md-6 col-lg-4">
                            <img src="assets/dist/images/googlemaps-2.jpg" class="img-fluid" alt="googlemaps-2" />
                            <div class="row btn-holder mt-4">
                                <div class="col-xs-12 col-sm-6">
                                    <a href="#" class="btn btn-default btn-block">
                                        Zurück zur Übersicht
                                    </a>
                                </div>
                                <div class="col-xs-12 col-sm-6">
                                    <a href="#" class="btn btn-primary btn-block">
                                        An Tour teilnehmen
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
            <?php $class = "black"; include "includes/footer.php"; ?>
            <?php include "includes/login-modal.php"; ?>
            <?php include "includes/register-modal.php"; ?>
            <?php include "includes/thanks-modal.php"; ?>
        </div>
        <?php include "includes/scripts.php"; ?>
    </body>
</html>

