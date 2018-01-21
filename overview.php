<!DOCTYPE html>
<html lang="de">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Seite</title>
        <link type="text/css" rel="stylesheet" media="all" href="assets/dist/stylesheets/website.min.css" />
        <link href="https://fonts.googleapis.com/css?family=Oswald:600|PT+Sans:400,700" rel="stylesheet">
    </head>
    <body class="page">
        <nav class="navbar navbar-expand-md fixed-top">
            <a class="navbar-brand" href="#">
                <?php $class = "red"; include "logo.php"; ?>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarsExampleDefault">
                <div class="navbar-nav mr-auto search-form">
                    <form>
                        <div class="form-fit-helper form-group">
                            <label for="where" class="col-form-label"></label>
                            <input type="text" class="form-control" id="where" placeholder="Hamburg">
                        </div>
                        <div class="form-fit-helper form-group">
                            <label for="time" class="col-form-label"></label>
                            <input type="text" class="form-control" id="time" placeholder="29.10.18">
                        </div>
                        <div class="form-fit-helper form-group">
                            <label for="count" class="col-form-label"></label>
                            <input type="number" class="form-control" id="count" placeholder="10">
                        </div>
                    </form>
                </div>
                <ul class="navbar-nav ml-auto">
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
            </div>
        </nav>
        <div id="content">
            <div class="container-fluid h-100">
                <div class="row h-100">
                    <div class="col-lg-3 col-md-4 col-sm-5 col-xs-12 h-100">
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
                    <div class="col-lg-9 col-md-8 col-sm-7 col-xs-12 h-100" style="background:url('../html/assets/dist/images/googlemaps.jpg');">
                    </div>
                </div>
            </div>
        </div>
        <footer></footer>
        <script type='text/javascript' src='assets/dist/javascripts/jquery-3.3.1.min.js'></script>
        <script type='text/javascript' src='assets/dist/javascripts/bootstrap.min.js'></script>
        <script type='text/javascript' src='assets/dist/javascripts/main.js'></script>
    </body>
</html>
