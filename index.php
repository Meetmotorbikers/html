<!DOCTYPE html>
<html lang="de">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Seite</title>
        <link type="text/css" rel="stylesheet" media="all" href="assets/dist/stylesheets/website.min.css" />
        <link href="https://fonts.googleapis.com/css?family=Oswald:600|PT+Sans:400,700" rel="stylesheet">
    </head>
    <body class="start">
        <nav class="bg-nav navbar navbar-expand-md fixed-top">
            <a class="navbar-brand" href="#">
                <!-- <img class="img-responsive" src="../html/assets/dist/images/logo.svg"> -->
                <?php $class = "white"; include "logo.php"; ?>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarsExampleDefault">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Registrieren</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Einloggen</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-outline" href="#">Tour erstellen</a>
                    </li>
                </ul>
            </div>
        </nav>
        <div id="content" class="center-content">
            <div class="container center-container">
                <div class="center-wrapper">
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
                                    <label for="count" class="col-form-label"></label>
                                    <input type="number" class="form-control" id="count" placeholder="Max. Teilnehmer Anzahl">
                                </div>
                                <div class="form-fit-helper">
                                    <button type="submit" class="btn btn-form-helper">Finden</button>
                                </div>
                            </form>
                        </div>
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
