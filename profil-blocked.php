<!DOCTYPE html>
<html lang="de">
    <?php $title = "Profil Blocked"; include "includes/head.php"; ?>
    <body class="page">
        <div class="d-flex h-100 mx-auto flex-column">
            <?php $loggedBack = "true"; $loggedBackMobile = "true"; include "includes/header.php"; ?>
            <main class="profil-settings">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3 dark-bg profil profil-set text-center">
                        	<div class="pt-5 pb-4">
                        		<span class="image-round">
		                            <img src="assets/dist/images/user-profil-blocked.png" alt="Alexander User" class="img-fluid" width="100" height="100" />
		                        </span>
	                        </div>
	                        <h1>Susann Meier</h1>
	                        <h2 class="h5 pb-5">KAWASAKI ZXR NINJA</h2>
	                        <a href="#" title="add friend" class="btn btn-dark d-none d-sm-none d-md-block d-lg-block">Als Freund hinzufügen</a>
                        </div>
                        <div class="col-12 col-sm-6 col-md-8 col-lg-9 align-self-center">
                        	<div class="content-spacer get-height text-center">
	                            <h3 class="mt-5">Profil Ansicht Privat</h3>
	                            <div class="pt-3 pb-4 d-none d-sm-none d-md-block d-lg-block">
	                        		<span class="image-round blured shadow blocked align-middle">
	                        			<span class="round-holder">
				                            <img src="assets/dist/images/user-profil-blocked.png" alt="User Blocked" class="img-fluid" width="120" height="120" />
				                        </span>
			                        </span>
		                        </div>
		                        <p><strong>Susann Meier’s</strong> Profil ist auf Privat geschaltet.<br />Um das Profil zu sehen, kannst du diese Person als Freund hinzfügen</p>
		                        <a href="#" title="add friend" class="mt-2 mb-5 btn btn-primary">Als Freund hinzufügen</a>
							</div>
                        </div>
                    </div>
                </div>
            </main>
            <?php $class = "black"; include "includes/footer.php"; ?>
            <?php include "includes/modals/login-modal.php"; ?>
            <?php include "includes/modals/register-modal.php"; ?>
            <?php include "includes/modals/thanks-modal.php"; ?>
            <?php include "includes/modals/congratulations-modal.php"; ?>
        </div>
        <?php include "includes/scripts.php"; ?>
    </body>
</html>

