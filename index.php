<!DOCTYPE html>
<html lang="de">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Seite</title>
        <link type="text/css" rel="stylesheet" media="all" href="assets/dist/stylesheets/website.css" />
        <link href="https://fonts.googleapis.com/css?family=Oswald:600|PT+Sans:400,700" rel="stylesheet">
    </head>
    <body class="start">
        <div class="d-flex h-100 mx-auto flex-column">
            <header class="mb-auto">
                <nav class="bg-nav navbar">
                    <a class="navbar-brand" href="#">
                        <?php $class = "white"; include "logo.php"; ?>
                    </a>
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active d-none d-sm-none d-md-block">
                            <a class="nav-link" href="#">Registrieren</a>
                        </li>
                        <li class="nav-item d-none d-sm-none d-md-block">
                            <a class="nav-link" href="#">Einloggen</a>
                        </li>
                        <li class="nav-item d-lg-none d-md-none">
                            <a class="nav-link" href="#"><i class="mm mm-iconuser"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link btn btn-outline" href="#">Tour erstellen</a>
                        </li>
                    </ul>
                </nav>
            </header>
            <main>
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <h1 class="teaser-headline">Nie mehr alleine fahren<br><span class="primary-color">suche & finde</span> Motorradtouren<br>in deiner nähe</h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <form>
                                <div class="form-fit-helper form-group">
                                    <label for="where" class="col-form-label"></label>
                                    <input type="text" class="form-control" id="where" placeholder="Wo">
                                </div>
                                <div class="form-fit-helper form-group">
                                    <label for="time" class="col-form-label"></label>
                                    <input type="text" class="form-control" id="time" placeholder="Wann">
                                </div>
                                <div class="form-fit-helper form-group">
                                    <label for="art" class="col-form-label select-label">
                                        <select name="art" id="art" class="form-control">
                                            <option disabled selected>Art der Tour</option>
                                            <option>Tour Art 1</option>
                                            <option>Tour Art 2</option>
                                            <option>Tour Art 3</option>
                                        </select>
                                    </label>
                                </div>
                                <div class="form-fit-helper">
                                    <button type="submit" class="btn btn-form-helper">Finden</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </main>
            <footer class="mt-auto">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-8 col-xs-8 col-sm-8 col-md-8">
                            <a class="logo" href="#">
                                <?php $class = "white"; include "logo.php"; ?>
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
