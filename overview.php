<!DOCTYPE html>
<html lang="de">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Seite</title>
        <link type="text/css" rel="stylesheet" media="all" href="assets/dist/stylesheets/website.css" />
        <link href="https://fonts.googleapis.com/css?family=Oswald:600|PT+Sans:400,700" rel="stylesheet">
    </head>
    <body class="page">
        <div class="d-flex h-100 mx-auto flex-column">
            <header>
                <nav class="navbar">
                    <a class="navbar-brand" href="#">
                        <?php $class = "red"; include "logo.php"; ?>
                    </a>

                    <form class="mr-auto order-12 order-sm-12 order-md-12 order-lg-1">
                        <div class="form-wrapper">
                            <div class="form-fit-helper form-group">
                                <label for="where" class="col-form-label"></label>
                                <input type="text" class="form-control" id="where" placeholder="Hamburg">
                            </div>
                            <div class="form-fit-helper form-group">
                                <label for="time" class="col-form-label"></label>
                                <input type="text" class="form-control" id="time" placeholder="29.10.18">
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
                            <a class="nav-link" href="#">
                                Alexander
                                <img src="../html/assets/dist/images/alexander-user.png" alt="Alexander" class="img-responsive">
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link btn btn-primary" href="#">Tour erstellen</a>
                        </li>
                    </ul>
                </nav>
            </header>
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
            <footer class="mt-auto">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-8 col-xs-8 col-sm-8 col-md-8">
                            <a class="logo" href="#">
                                <?php $class = "black"; include "logo.php"; ?>
                            </a>
                            <span>© MeetMotorbikers</span>
                            <ul class="footer-nav">
                                <li><a href="" title="">Nutzungsbedingungen</a></li>
                                <li><a href="" title="">Datenschutz</a></li>
                                <li><a href="" title="">Impressum</a></li>
                            </ul>
                        </div>
                        <div class="col-4 col-xs-4 col-sm-4 col-md-4">
                            <ul class="social text-right">
                                <li><a href="#" title=""><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#" title=""><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#" title=""><i class="fa fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
        <script type='text/javascript' src='assets/dist/javascripts/jquery-3.3.1.min.js'></script>
        <script type='text/javascript' src='assets/dist/javascripts/bootstrap.min.js'></script>
        <script type='text/javascript' src='assets/dist/javascripts/main.js'></script>
        <script type='text/javascript' src='//localhost:1337/livereload.js'></script>
    </body>
</html>

