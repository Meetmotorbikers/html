<!DOCTYPE html>
<html lang="de">
    <?php $title = "Tour Detail"; include "includes/head.php"; ?>
    <body class="page">
        <div class="d-flex h-100 mx-auto flex-column">
            <?php include "includes/header-logged-back.php"; ?>
            <main class="profil-settings">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 dark-bg profil text-center">
                        	<div class="pt-5 pb-4">
                        		<span class="image-round">
		                            <img src="assets/dist/images/alexander-user-big.png" alt="Alexander User" class="img-fluid" width="100" height="100" />
		                        </span>
	                        </div>
	                        <h1>Alexander Schmidt</h1>
	                        <h2 class="h5">KAWASAKI Z800</h2>
	                        <ul class="profil-navigation pt-3 pb-3 mt-5 mb-4 text-left">
	                        	<li><a href="#" title="Profil"><i class="mm-iconuser"></i> Profil</a></li>
	                        	<li><a href="#" title="Benachrichtigungen"><i class="mm-iconnotification"></i> Benachrichtigungen <span class="mm-notification">1</span></a></li>
	                        	<li class="active"><a href="#" title="Profil Einstellungen"><i class="mm-iconcok"></i> Profil Einstellungen</a></li>
	                        	<li><a href="#" title="Ausloggen"><i class="mm-iconlogout"></i> Ausloggen</a></li>
	                        </ul>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-8 col-lg-9 profil-content">
                        	<div class="p-5">
	                            <h3>Profil Einstellungen</h3>
	                            <hr class="mt-4 mb-5" />
	                            <div class="row">
		                            <form class="col-12">
		                            	<div class="row">
			                            	<div class="col-12 col-sm-12 col-md-6">
						                        <div class="form-group has-float-label">
						                            <input type="text" class="form-control" id="email-1" required placeholder="Email Adresse" autocomplete="off" value="alexander.schmidt@web.de">
						                            <label for="email-1">Email Adresse</label>
						                        </div>
						                        <div class="form-group has-float-label">
						                            <input class="form-control" id="password-1" type="password" required placeholder="Passwort" autocomplete="off" value="testtest">
						                            <label for="password-1">Passwort</label>
						                        </div>
						                        <div class="form-group select-type">
						                            <label for="sichtbarkeit"><strong>Sichtbarkeit</strong></label>
						                            <p>Wer kann alles dein Profil ansehen?</p>
						                            <div class="select-wrap">
							                            <select class="form-control" id="sichtabrkeit">
							                            	<option selected disabled>Jeder</option>
							                            	<option>Nur Freunde</option>
							                            	<option>Nur Ich</option>
							                            </select>
							                        </div>
						                        </div>
						                        <div class="form-check mt-3 mb-4">
						                        	<p><strong>Benachrichtigungen</strong><br>
						                        		Möchtest du eine E-Mail bekommen, sobald du eine Benachrichtigung erhählst?
						                        	</p>
						                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
						                            <label class="form-check-label" for="exampleCheck1">Ja möchte ich</label>
						                        </div>
						                    </div>
						                    <div class="col-12 text-right">
						                    	<input class="btn btn-primary" type="submit" value="Änderungen speichern">
						                    </div>
						                </div>
				                    </form>
				                </div>
							</div>
                        </div>
                    </div>
                </div>
            </main>
            <?php $class = "black"; include "includes/footer.php"; ?>
            <?php include "includes/login-modal.php"; ?>
            <?php include "includes/register-modal.php"; ?>
            <?php include "includes/thanks-modal.php"; ?>
        </div>
        <?php include "includes/scripts.php"; ?>
    </body>
</html>

