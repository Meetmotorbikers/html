<!-- Register Modal -->
<div class="modal fade" id="register" tabindex="-1" role="dialog" aria-labelledby="registerModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header fade show">
                <h5 class="modal-title" id="exampleModalLongTitle">Registrieren</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span class="btn-close"></span>
                </button>
            </div>
            <div class="modal-body fade show">
                <div class="row">
                    <div class="col-sm-12 mb-3">
                        <a href="#" class="btn btn-facebook full"><i class="fa fa-facebook"></i> Einloggen mit Facebook</a>
                    </div>
                    <div class="col-sm-12">
                        <a href="#" class="btn btn-google full"><i class="fa fa-google"></i> Einloggen mit Google</a>
                    </div>
                    <div class="col-sm-12 text-center mt-4 mb-4">
                        <span>oder</span>
                    </div>
                    <div class="col-sm-12">
                        <a href="#" class="btn btn-primary full" toggle-tab>Mit E-Mail registrieren</a>
                    </div>
                </div>
            </div>
            <div class="modal-header fade d-none">
                <h5 class="modal-title" id="exampleModalLongTitle">Mit E-Mail registrieren</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span class="btn-close"></span>
                </button>
            </div>
            <div class="modal-body fade d-none">
                <div class="row">
                    <form class="col-sm-12">
                        <div class="form-group has-float-label">
                            <input type="text" class="form-control" id="email-1" required placeholder="Email Adresse" autocomplete="off">
                            <label for="email-1">Email Adresse</label>
                        </div>
                        <div class="form-group has-float-label">
                            <input class="form-control" id="vorname" type="text" required placeholder="Vorname" autocomplete="off">
                            <label for="password">Vorname</label>
                        </div>
                        <div class="form-group has-float-label">
                            <input class="form-control" id="nachname" type="text" required placeholder="Nachname" autocomplete="off">
                            <label for="password">Nachname</label>
                        </div>
                        <div class="form-group has-float-label">
                            <input class="form-control" id="password-1" type="password" required placeholder="Passwort" autocomplete="off">
                            <label for="password-1">Passwort</label>
                        </div>
                        <div class="form-check mt-3 mb-4">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Ich möchte per E-Mail Neuigkeiten über meetmotorbikers erhalten.</label>
                        </div>
                    </form>
                    <div class="col-sm-12">
                        <a href="#" class="btn btn-primary full show-form">Registrieren</a>
                    </div>
                </div>
            </div>
            <div class="modal-footer text-center">
                <p>Hast du schon einen meetmotorbikers Account?<br /><a href="#" title="Jetzt Registrieren">Einloggen</a></p>
            </div>
        </div>
    </div>
</div>