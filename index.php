<!DOCTYPE html>
<html lang="de">
    <?php $title = "Startseite"; include "includes/head.php"; ?>
    <body class="start">
        <div class="d-flex h-100 mx-auto flex-column">
            <?php include "includes/home-header.php"; ?>
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
            <?php $class = "white"; include "includes/footer.php"; ?>
        </div>
        <?php include "includes/scripts.php"; ?>
    </body>
</html>
