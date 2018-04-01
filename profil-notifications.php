<!DOCTYPE html>
<html lang="de">
    <?php $title = "Tour Detail"; include "includes/head.php"; ?>
    <body class="page">
        <div class="d-flex h-100 mx-auto flex-column">
            <?php include "includes/header-logged-back.php"; ?>
            <main class="profil-settings">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3 dark-bg profil text-center">
                        	<div class="pt-5 pb-4">
                        		<span class="image-round">
		                            <img src="assets/dist/images/alexander-user-big.png" alt="Alexander User" class="img-fluid" width="100" height="100" />
		                        </span>
	                        </div>
	                        <h1>Alexander Schmidt</h1>
	                        <h2 class="h5">KAWASAKI Z800</h2>
	                        <ul class="profil-navigation pt-3 pb-3 mt-5 mb-4 text-left">
	                        	<li><a href="#" title="Profil"><i class="mm-iconuser"></i> Profil</a></li>
	                        	<li class="active"><a href="#" title="Benachrichtigungen"><i class="mm-iconnotification"></i> Benachrichtigungen <span class="mm-notification">1</span></a></li>
	                        	<li><a href="#" title="Profil Einstellungen"><i class="mm-iconcok"></i> Profil Einstellungen</a></li>
	                        	<li><a href="#" title="Ausloggen"><i class="mm-iconlogout"></i> Ausloggen</a></li>
	                        </ul>
                        </div>
                        <div class="col-12 col-sm-6 col-md-8 col-lg-9 profil-content">
                        	<div class="p-5">
	                            <h3>Benachrichtigungen</h3>
	                            <hr class="mt-4 mb-4" />
	                            <ul class="add-friends">
	                            	<li class="row">
	                            		<div class="col-12 col-sm-12 col-md-8 col-lg-8">
	                            			<div class="image-round">
												<img src="assets/dist/images/user-add-friend.png" alt="User Add Friends" class="img-fluid" width="70" height="70" />
	                            			</div>
	                            			<span><strong>Sarah Parker</strong> möchte mit dir befreundet sein</span>
	                            		</div>
	                            		<div class="col-12 col-sm-12 col-md-4 col-lg-4 text-right align-self-center">
		                                    <a href="#" class="btn btn-default">Ablehnen</a>
		                                    <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#congratulations">Annehmen</a>
	                            		</div>
	                            	</li>
	                            </ul>
							</div>
                        </div>
                    </div>
                </div>
            </main>
            <?php $class = "black"; include "includes/footer.php"; ?>
            <?php include "includes/login-modal.php"; ?>
            <?php include "includes/register-modal.php"; ?>
            <?php include "includes/thanks-modal.php"; ?>
            <?php include "includes/congratulations-modal.php"; ?>
        </div>
        <?php include "includes/scripts.php"; ?>
    </body>
</html>

