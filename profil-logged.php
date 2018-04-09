<!DOCTYPE html>
<html lang="de">
    <?php $title = "Profil Overview"; include "includes/head.php"; ?>
    <body class="page">
        <div class="d-flex h-100 mx-auto flex-column">
			<div class="d-none d-sm-none d-md-block d-lg-block">
				<?php include "includes/header-logged-back.php"; ?>
			</div>
			<div class="d-block d-sm-block d-md-none d-lg-none">
				<?php include "includes/header-logged-mobile.php"; ?>
			</div>
            <main>
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
	                        	<li class="active"><a href="profil-logged.php" title="Profil"><i class="mm-iconuser"></i> Profil</a></li>
	                        	<li><a href="profil-notifications.php" title="Benachrichtigungen"><i class="mm-iconnotification"></i> Benachrichtigungen <span class="mm-notification">1</span></a></li>
	                        	<li><a href="profil-settings.php" title="Profil Einstellungen"><i class="mm-iconcok"></i> Profil Einstellungen</a></li>
	                        	<li><a href="overview.php" title="Ausloggen"><i class="mm-iconlogout"></i> Ausloggen</a></li>
	                        </ul>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-8 col-lg-9 profil-content">
                        	<div class="content-spacer">
								<nav>
									<div class="nav nav-tabs-mm" id="nav-tab" role="tablist">
										<a class="nav-item active" id="nav-next-tours-tab" data-toggle="tab" href="#nav-next-tours" role="tab" aria-controls="nav-next-tours" aria-selected="true">
											Anstehende Touren (2)
										</a>
										<a class="nav-item" id="nav-friends-tab" data-toggle="tab" href="#nav-friends" role="tab" aria-controls="nav-friends" aria-selected="false">
											Freunde (4)
										</a>
										<a class="nav-item" id="nav-driven-tours-tab" data-toggle="tab" href="#nav-driven-tours" role="tab" aria-controls="nav-driven-tours" aria-selected="false">
											Gefahrene Touren (2)
										</a>
										<a class="nav-item" id="nav-created-tours-tab" data-toggle="tab" href="#nav-created-tours" role="tab" aria-controls="nav-created-tours" aria-selected="false">
											Erstelle Touren (1)
										</a>
									</div>
								</nav>
								<div class="tab-content" id="nav-tabContent">
									<div class="tab-pane fade show active" id="nav-next-tours" role="tabpanel" aria-labelledby="nav-next-tours-tab">
										<div class="row">
											<div class="col-xs-12 col-sm-12 col-md-6 col-lg-4">
												<div class="mm-card p-3 mb-4" data-mh="mm-card">
													<span class="joinded">Du nimmst teil</span>
													<h3>TOUR DURCH DEN HOHEN NORDEN</h3>
													<ul class="tour-infos pb-3">
			                                            <li><i class="mm mm-iconcalendar"></i><span>in 2 Tagen</span></li>
			                                            <li><i class="mm mm-iconhead"></i><span>6/10</span></li>
			                                        </ul>
			                                        <a class="btn btn-primary btn-block" href="#" title="Tour durch den hohen Norden">Tour Detials</a>
			                                    </div>
											</div>
											<div class="col-xs-12 col-sm-12 col-md-6 col-lg-4">
												<div class="mm-card p-3 mb-4" data-mh="mm-card">
													<span class="joinded">Du nimmst teil</span>
													<h3>OSTSEE-TOUR NACH SCHARBEUTZ</h3>
													<ul class="tour-infos pb-3">
			                                            <li><i class="mm mm-iconcalendar"></i><span>15.04.2018</span></li>
			                                            <li><i class="mm mm-iconhead"></i><span>8/10</span></li>
			                                        </ul>
			                                        <a class="btn btn-primary btn-block" href="#" title="Tour durch den hohen Norden">Tour Detials</a>
			                                    </div>
											</div>
										</div>
									</div>
									<div class="tab-pane fade" id="nav-friends" role="tabpanel" aria-labelledby="nav-friends-tab">
										<div class="row">
											<div class="col-xs-12 col-sm-12 col-md-4 col-lg-2 text-center" data-mh="user">
												<div class="friend">
													<div class="image-round">
														<img src="assets/dist/images/user-1-big.png" alt="User" class="img-fluid" width="130" height="130" />
													</div>
													<span class="user-name">Michael Wick</span>
												</div>
											</div>
											<div class="col-xs-12 col-sm-12 col-md-4 col-lg-2 text-center" data-mh="user">
												<div class="friend">
													<div class="image-round">
														<img src="assets/dist/images/user-2-big.png" alt="User" class="img-fluid" width="130" height="130" />
													</div>
													<span class="user-name">Alexander Brand</span>
												</div>
											</div>
											<div class="col-xs-12 col-sm-12 col-md-4 col-lg-2 text-center" data-mh="user">
												<div class="friend">
													<div class="image-round">
														<img src="assets/dist/images/user-3-big.png" alt="User" class="img-fluid" width="130" height="130" />
													</div>
													<span class="user-name">Susann Meier</span>
												</div>
											</div>
											<div class="col-xs-12 col-sm-12 col-md-4 col-lg-2 text-center" data-mh="user">
												<div class="friend">
													<div class="image-round">
														<img src="assets/dist/images/user-4-big.png" alt="User" class="img-fluid" width="130" height="130" />
													</div>
													<span class="user-name">John Doe</span>
												</div>
											</div>
										</div>
									</div>
									<div class="tab-pane fade" id="nav-driven-tours" role="tabpanel" aria-labelledby="nav-driven-tours-tab">
										<div class="row">
											<div class="col-xs-12 col-sm-12 col-md-6 col-lg-4">
												<div class="mm-card p-3 mb-4" data-mh="mm-card">
													<span class="participated">Teilgenommen</span>
													<h3>TOUR DURCH DEN HOHEN NORDEN</h3>
													<ul class="tour-infos pb-3">
			                                            <li><i class="mm mm-iconcalendar"></i><span>in 2 Tagen</span></li>
			                                            <li><i class="mm mm-iconhead"></i><span>6/10</span></li>
			                                        </ul>
			                                        <a class="btn btn-primary btn-block" href="#" title="Tour durch den hohen Norden">Tour Detials</a>
			                                    </div>
											</div>
											<div class="col-xs-12 col-sm-12 col-md-6 col-lg-4">
												<div class="mm-card p-3 mb-4" data-mh="mm-card">
													<span class="participated">Teilgenommen</span>
													<h3>OSTSEE-TOUR NACH SCHARBEUTZ</h3>
													<ul class="tour-infos pb-3">
			                                            <li><i class="mm mm-iconcalendar"></i><span>15.04.2018</span></li>
			                                            <li><i class="mm mm-iconhead"></i><span>8/10</span></li>
			                                        </ul>
			                                        <a class="btn btn-primary btn-block" href="#" title="Tour durch den hohen Norden">Tour Detials</a>
			                                    </div>
											</div>
										</div>
									</div>
									<div class="tab-pane fade" id="nav-created-tours" role="tabpanel" aria-labelledby="nav-created-tours-tab">
										<div class="row">
											<div class="col-xs-12 col-sm-12 col-md-6 col-lg-4">
												<div class="mm-card p-3 mb-4" data-mh="mm-card">
													<span class="joinded">Du nimmst teil</span>
													<h3>TOUR DURCH DEN HOHEN NORDEN</h3>
													<ul class="tour-infos pb-3">
			                                            <li><i class="mm mm-iconcalendar"></i><span>in 2 Tagen</span></li>
			                                            <li><i class="mm mm-iconhead"></i><span>6/10</span></li>
			                                        </ul>
			                                        <a class="btn btn-primary btn-block" href="#" title="Tour durch den hohen Norden">Tour Detials</a>
			                                    </div>
											</div>
										</div>    
									</div>
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

