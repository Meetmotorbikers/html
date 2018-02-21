<header>
    <nav class="navbar">
        <a class="navbar-brand" href="#">
            <?php $class = "red"; include "includes/logo.php"; ?>
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