<!DOCTYPE html>
<html lang="de">
    <?php $title = "Overview"; include "includes/head.php"; ?>
    <body class="page">
        <div class="d-flex h-100 mx-auto flex-column">
            <?php include "includes/header-logged.php"; ?>
            <main>
                <div class="container-fluid h-100">
                    <div class="row h-100 mh-100">
                        <div class="col-lg-3 col-md-4 col-sm-5 col-xs-12">
                            <div class="sort-function row">
                                <div class="col-lg-5">
                                    <div class="form-group clearfix">
                                        <label for="search-radius">Suchradius</label>
                                        <div class="select-wrapper">
                                            <select class="form-control" id="search-radius">
                                                <option>50KM</option>
                                                <option>75KM</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-7">
                                     <div class="form-group clearfix">
                                        <label for="sort-date">Sortieren nach</label>
                                        <div class="select-wrapper">
                                            <select class="form-control" id="sort-date">
                                                <option>DATUM</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-9 col-md-8 col-sm-7 col-xs-12 h-100 mh-100" style="background:url('../html/assets/dist/images/googlemaps.jpg');">
                        </div>
                    </div>
                </div>
            </main>
            <?php $class = "black"; include "includes/footer.php"; ?>
        </div>
        <?php include "includes/scripts.php"; ?>
    </body>
</html>

