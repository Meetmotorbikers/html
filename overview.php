<!DOCTYPE html>
<html lang="de">
    <?php $title = "Overview"; include "includes/head.php"; ?>
    <body class="page">
        <div class="d-flex h-100 mx-auto flex-column">
            <?php $header = "true"; include "includes/header.php"; ?>
            <main>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-4 col-sm-12 col-xs-12" data-view-list>
                            <div class="sort-function row">
                                <div class="col-lg-5">
                                    <div class="form-group clearfix">
                                        <label for="search-radius">
                                            <span>Suchradius</span>
                                            <div class="select-wrapper">
                                                <select class="form-control" id="search-radius" name="search-radius">
                                                    <option>50KM</option>
                                                    <option>75KM</option>
                                                </select>
                                            </div>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-lg-7">
                                     <div class="form-group clearfix">
                                        <label for="sort-date">
                                            <span>Sortieren nach</span>
                                            <div class="select-wrapper">
                                                <select class="form-control" id="sort-date" name="sort-date">
                                                    <option>DATUM</option>
                                                </select>
                                            </div>
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="row tours">
                                <div class="tour-card">
                                    <a href="tour-detail.php" title="tour-detail">
                                        <span class="joinded">Du nimmst teil</span>
                                        <h3>Tour durch den hohen Norden</h3>
                                        <ul class="tour-infos">
                                            <li><i class="mm mm-iconcalendar"></i><span>in 2 Tagen</span></li>
                                            <li><i class="mm mm-iconclock"></i><span>14:30 Uhr</span></li>
                                            <li><i class="mm mm-iconhead"></i><span>10/10 max. teiln.</span></li>
                                        </ul>
                                    </a>
                                </div>
                                <div class="tour-card">
                                    <a href="tour-detail.php" title="tour-detail">
                                        <h3>HAFENRUNDFAHRT</h3>
                                        <ul class="tour-infos">
                                            <li><i class="mm mm-iconcalendar"></i><span>in 2 Tagen</span></li>
                                            <li><i class="mm mm-iconhead"></i><span>9/- unbegr. Teilnehmer</span></li>
                                        </ul>
                                    </a>
                                </div>
                                <div class="tour-card">
                                    <a href="tour-detail.php" title="tour-detail">
                                        <h3>OSTSEE-TOUR NACH SCHARBEUTZ</h3>
                                        <ul class="tour-infos">
                                            <li><i class="mm mm-iconcalendar"></i><span>15.04.18</span></li>
                                            <li><i class="mm mm-iconclock"></i><span>14:30 Uhr</span></li>
                                            <li><i class="mm mm-iconhead"></i><span>8/10 max. teiln.</span></li>
                                        </ul>
                                    </a>
                                </div>
                                <div class="tour-card">
                                    <a href="tour-detail.php" title="tour-detail">
                                        <span class="joinded">Du nimmst teil</span>
                                        <h3>Tour durch den hohen Norden</h3>
                                        <ul class="tour-infos">
                                            <li><i class="mm mm-iconcalendar"></i><span>in 2 Tagen</span></li>
                                            <li><i class="mm mm-iconclock"></i><span>14:30 Uhr</span></li>
                                            <li><i class="mm mm-iconhead"></i><span>10/10 max. teiln.</span></li>
                                        </ul>
                                    </a>
                                </div>
                                <div class="tour-card">
                                    <a href="tour-detail.php" title="tour-detail">
                                        <h3>HAFENRUNDFAHRT</h3>
                                        <ul class="tour-infos">
                                            <li><i class="mm mm-iconcalendar"></i><span>in 2 Tagen</span></li>
                                            <li><i class="mm mm-iconhead"></i><span>9/- unbegr. Teilnehmer</span></li>
                                        </ul>
                                    </a>
                                </div>
                                <div class="tour-card">
                                    <a href="tour-detail.php" title="tour-detail">
                                        <h3>OSTSEE-TOUR NACH SCHARBEUTZ</h3>
                                        <ul class="tour-infos">
                                            <li><i class="mm mm-iconcalendar"></i><span>15.04.18</span></li>
                                            <li><i class="mm mm-iconclock"></i><span>14:30 Uhr</span></li>
                                            <li><i class="mm mm-iconhead"></i><span>8/10 max. teiln.</span></li>
                                        </ul>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8 col-sm-12 col-xs-12 d-none d-sm-none d-md-block gmaps get-height" style="background:url('assets/dist/images/googlemaps.jpg');" data-view-card>
                        </div>
                    </div>
                </div>
            </main>
            <?php $class = "black"; include "includes/footer.php"; ?>
            <?php include "includes/modals/login-modal.php"; ?>
            <?php include "includes/modals/register-modal.php"; ?>
            <?php include "includes/modals/thanks-modal.php"; ?>
            <?php include "includes/modals/searchfilter-modal.php"; ?>
        </div>
        <?php include "includes/scripts.php"; ?>
    </body>
</html>

