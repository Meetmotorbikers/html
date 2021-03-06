<!DOCTYPE html>
<html lang="de">
    <?php $title = "Overview"; include "includes/head.php"; ?>
    <body class="page">
        <div class="d-flex h-100 mx-auto flex-column">
            <?php $loggedBack = "true"; include "includes/header.php"; ?>
            <main class="create-tour">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6 col-sm-12 col-xs-12 create-tour-content">
                            <div class="content-spacer get-height">
                                <form class="row">
                                    <div class="col-12 col-sm-12 col-md-12">
                                        <h3>Informationen</h3>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-6">
                                        <div class="form-group has-float-label">
                                            <input type="text" class="form-control" id="name" required placeholder="Tour Name" autocomplete="off">
                                            <label for="name">Tour Name</label>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-6">
                                        <div class="form-group has-float-label">
                                            <input class="form-control" id="timeonly" type="text" required placeholder="Uhrzeit" autocomplete="off">
                                            <label for="timeonly">Uhrzeit</label>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-6">
                                        <div class="form-group has-float-label select-arrow">
                                            <input type="text" class="form-control date" id="date" required placeholder="Datum" autocomplete="off">
                                            <label for="date">Datum</label>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-6">
                                        <div class="form-group select-type">
                                            <div class="select-wrap">
                                                <select class="form-control" id="sichtabrkeit">
                                                    <option selected disabled>Art der Tour</option>
                                                    <option>Öffentliche Tour</option>
                                                    <option>Nur für Freunde</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-12">
                                        <h3>Route</h3>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-12">
                                        <div class="form-group has-float-label steps step_1">
                                            <input type="text" class="form-control" id="start" required placeholder="Start" autocomplete="off">
                                            <label for="start">Start</label>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-12 mb-3">
                                        <button class="btn btn-default btn-block">Ziel hinzufügen</button>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-12">
                                        <h3>Sonstige Einstellungen</h3>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-6">
                                        <div class="form-group has-float-label">
                                            <input class="form-control" id="member" type="text" required placeholder="Maximale Teilnehmer (optional)" autocomplete="off">
                                            <label for="member">Maximale Teilnehmer (optional)</label>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-6">
                                        <div class="form-group has-float-label">
                                            <input type="text" class="form-control" id="description" required placeholder="Beschreibung" autocomplete="off">
                                            <label for="description">Beschreibung (optional)</label>
                                        </div>
                                    </div>
                                    <div class="col-12 text-right mt-3 mb-3">
                                        <input class="btn btn-primary d-block d-sm-block d-md-inline d-lg-inline full-width" type="submit" value="Tour erstellen" data-toggle="modal" data-target="#create-tour">
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12 col-xs-12 d-none d-sm-none d-md-block gmaps" style="background:url('assets/dist/images/googlemaps.jpg');">
                        </div>
                    </div>
                </div>
            </main>
            <?php $class = "black"; include "includes/footer.php"; ?>
            <?php include "includes/modals/login-modal.php"; ?>
            <?php include "includes/modals/register-modal.php"; ?>
            <?php include "includes/modals/thanks-modal.php"; ?>
            <?php include "includes/modals/create-tour-modal.php"; ?>
        </div>
        <?php include "includes/scripts.php"; ?>
    </body>
</html>

