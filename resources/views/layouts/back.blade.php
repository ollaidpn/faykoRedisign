<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from dompet.dexignlab.com/xhtml/my-wallet.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 09 Jun 2021 23:10:50 GMT -->
<head>

    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="" />
	<meta name="author" content="" />
	<meta name="robots" content="" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Dompet : Payment Admin Template" />
	<meta property="og:title" content="Dompet : Payment Admin Template" />
	<meta property="og:description" content="Dompet : Payment Admin Template" />
	<meta property="og:image" content="social-image.png" />
	<meta name="format-detection" content="telephone=no">

	<!-- PAGE TITLE HERE -->
	<title>Fayko</title>

	<!-- FAVICONS ICON -->
	<link rel="shortcut icon" type="image/png" href="{{asset('assets/backoffice/images/favicon.png')}}" />

@yield('styles')
	<!-- Style css -->
    <link href="{{asset('assets/backoffice/css/style.css')}}" rel="stylesheet">

</head>
<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="waviy">
		   <span style="--i:1">L</span>
		   <span style="--i:2">o</span>
		   <span style="--i:3">a</span>
		   <span style="--i:4">d</span>
		   <span style="--i:5">i</span>
		   <span style="--i:6">n</span>
		   <span style="--i:7">g</span>
		   <span style="--i:8">.</span>
		   <span style="--i:9">.</span>
		   <span style="--i:10">.</span>
		</div>
    </div>
    <!--*******************
        Preloader end
    ********************-->

    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header" style="background-color: black">
            <a href="index-2.html" class="brand-logo">
				<img src="{{asset('assets/backoffice/images/logofayko.png')}}" height="75" alt="">
            </a>

        </div>
        <!--**********************************
            Nav header end
        ***********************************-->

		<!--**********************************
            Chat box start
        ***********************************-->

		<!--**********************************
            Chat box End
        ***********************************-->

		<!--**********************************
            Header start
        ***********************************-->
        <div class="header">
            <div class="header-content">
                <nav class="navbar navbar-expand">
                    <div class="collapse navbar-collapse justify-content-between">
                        <div class="header-left">
							<div class="dashboard_bar">
                                {{$pageTitle??"Fayko Transfert Service"}}
                            </div>
                        </div>
                        <ul class="navbar-nav header-right">
							<li class="nav-item">
								<div class="input-group search-area d-xl-inline-flex d-none">
									<input type="text" class="form-control" placeholder="Recherche">
									<span class="input-group-text"><a href="javascript:void(0)"><i class="flaticon-381-search-2"></i></a></span>
								</div>
							</li>
							<li class="nav-item dropdown notification_dropdown">
                                <a class="nav-link" href="javascript:void(0);" data-bs-toggle="dropdown">
									<svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg"> <path d="M3.88552 6.2921C1.95571 6.54135 0.439911 8.19656 0.439911 10.1896V10.7253C0.439911 12.8874 2.21812 14.6725 4.38019 14.6725H12.7058V24.9768H7.01104C5.77451 24.9768 4.82009 24.0223 4.82009 22.7858V18.4039C4.84523 16.6262 2.16581 16.6262 2.19096 18.4039V22.7858C2.19096 25.4334 4.36345 27.6059 7.01104 27.6059H21.0331C23.6807 27.6059 25.8532 25.4334 25.8532 22.7858V13.9981C26.9064 13.286 27.6042 12.0802 27.6042 10.7253V10.1896C27.6042 8.17115 26.0501 6.50077 24.085 6.28526C24.0053 0.424609 17.6008 -1.28785 13.9827 2.48534C10.3936 -1.60185 3.7545 1.06979 3.88552 6.2921ZM12.7058 5.68103C12.7058 5.86287 12.7033 6.0541 12.7058 6.24246H6.50609C6.55988 2.31413 11.988 1.90765 12.7058 5.68103ZM21.4559 6.24246H15.3383C15.3405 6.05824 15.3538 5.87664 15.3383 5.69473C15.9325 2.04532 21.3535 2.18829 21.4559 6.24246ZM4.38019 8.87502H12.7058V12.0382H4.38019C3.62918 12.0382 3.06562 11.4764 3.06562 10.7253V10.1896C3.06562 9.43859 3.6292 8.87502 4.38019 8.87502ZM15.3383 8.87502H23.6656C24.4166 8.87502 24.9785 9.43859 24.9785 10.1896V10.7253C24.9785 11.4764 24.4167 12.0382 23.6656 12.0382H15.3383V8.87502ZM15.3383 14.6725H23.224V22.7858C23.224 24.0223 22.2696 24.9768 21.0331 24.9768H15.3383V14.6725Z" fill="#4f7086"/>
									</svg>
									<span class="badge light text-white bg-primary rounded-circle">2</span>
                                </a>
								<div class="dropdown-menu dropdown-menu-end">
									<div id="dlab_W_TimeLine02" class="widget-timeline dlab-scroll style-1 ps ps--active-y p-3 height370">
                                    <ul class="timeline">
                                        <li>
                                            <div class="timeline-badge primary"></div>
                                            <a class="timeline-panel text-muted" href="javascript:void(0);">
                                                <span>il ya 10 minutes</span>
                                                <h6 class="mb-0">Transfert Orange Money <br> <strong class="text-primary">19.500 Fcfa</strong>.</h6>
                                            </a>
                                        </li>
                                        <li>
                                            <div class="timeline-badge info">
                                            </div>
                                            <a class="timeline-panel text-muted" href="javascript:void(0);">
                                                <span>il ya 29 minutes</span>
                                                <h6 class="mb-0">Crédit Expresso <br><strong class="text-info">2.300 Fcfa</strong></h6>
												{{-- <p class="mb-0">Quisque a consequat ante Sit amet magna at volutapt...</p> --}}
                                            </a>
                                        </li>
                                        <li>
                                            <div class="timeline-badge danger">
                                            </div>
                                            <a class="timeline-panel text-muted" href="javascript:void(0);">
                                                <span>Hier </span>
                                                <h6 class="mb-0">Retrait FreeMoney <br> <strong class="text-warning">190.000 Fcfa</strong></h6>
                                            </a>
                                        </li>
                                        <li>
                                            <div class="timeline-badge primary"></div>
                                            <a class="timeline-panel text-muted" href="javascript:void(0);">
                                                <span>il ya 10 minutes</span>
                                                <h6 class="mb-0">Transfert Orange Money <br> <strong class="text-primary">19.500 Fcfa</strong>.</h6>
                                            </a>
                                        </li>
                                        <li>
                                            <div class="timeline-badge info">
                                            </div>
                                            <a class="timeline-panel text-muted" href="javascript:void(0);">
                                                <span>il ya 29 minutes</span>
                                                <h6 class="mb-0">Crédit Expresso <br><strong class="text-info">2.300 Fcfa</strong></h6>
												{{-- <p class="mb-0">Quisque a consequat ante Sit amet magna at volutapt...</p> --}}
                                            </a>
                                        </li>

                                    </ul>
                                </div>
								</div>
							</li>
                            <li class="nav-item dropdown notification_dropdown">
                                <a class="nav-link  ai-icon" href="javascript:void(0);" role="button" data-bs-toggle="dropdown">
                                   <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path fill-rule="evenodd" clip-rule="evenodd" d="M12.638 4.9936V2.3C12.638 1.5824 13.2484 1 14.0006 1C14.7513 1 15.3631 1.5824 15.3631 2.3V4.9936C17.3879 5.2718 19.2805 6.1688 20.7438 7.565C22.5329 9.2719 23.5384 11.5872 23.5384 14V18.8932L24.6408 20.9966C25.1681 22.0041 25.1122 23.2001 24.4909 24.1582C23.8709 25.1163 22.774 25.7 21.5941 25.7H15.3631C15.3631 26.4176 14.7513 27 14.0006 27C13.2484 27 12.638 26.4176 12.638 25.7H6.40705C5.22571 25.7 4.12888 25.1163 3.50892 24.1582C2.88759 23.2001 2.83172 22.0041 3.36039 20.9966L4.46268 18.8932V14C4.46268 11.5872 5.46691 9.2719 7.25594 7.565C8.72068 6.1688 10.6119 5.2718 12.638 4.9936ZM14.0006 7.5C12.1924 7.5 10.4607 8.1851 9.18259 9.4045C7.90452 10.6226 7.18779 12.2762 7.18779 14V19.2C7.18779 19.4015 7.13739 19.6004 7.04337 19.7811C7.04337 19.7811 6.43703 20.9381 5.79662 22.1588C5.69171 22.3603 5.70261 22.6008 5.82661 22.7919C5.9506 22.983 6.16996 23.1 6.40705 23.1H21.5941C21.8298 23.1 22.0492 22.983 22.1732 22.7919C22.2972 22.6008 22.3081 22.3603 22.2031 22.1588C21.5627 20.9381 20.9564 19.7811 20.9564 19.7811C20.8624 19.6004 20.8133 19.4015 20.8133 19.2V14C20.8133 12.2762 20.0953 10.6226 18.8172 9.4045C17.5391 8.1851 15.8073 7.5 14.0006 7.5Z" fill="#4f7086"/>
									</svg>
                                    <span class="badge light text-white bg-primary rounded-circle">12</span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <div id="dlab_W_Notification1" class="widget-media dlab-scroll p-3" style="height:380px;">
										<ul class="timeline">
											<li>
												<div class="timeline-panel">
													<div class="media me-2">
														<img alt="image" width="50" src="{{asset('assets/backoffice/images/avatar/1.jpg')}}">
													</div>
													<div class="media-body">
														<h6 class="mb-1">Alerte Cart 0398 Cofina <br> <strong>Dépot 300.000 Fcfa</strong></h6>
														<small class="d-block">29 Juin 2021 - 02:26 PM</small>
													</div>
												</div>
											</li>

										</ul>
									</div>
                                    <a class="all-notification" href="javascript:void(0);">Voir tout les notification<i class="ti-arrow-end"></i></a>
                                </div>
                            </li>

                            <li class="nav-item">
								<a href="javascript:void(0);" class="btn btn-primary d-sm-inline-block d-none"><strong style="color: black">Générer un rapport</strong><i class="las la-signal ms-3 scale5" style="color: black"></i></a>
							</li>
                        </ul>
                    </div>
				</nav>
			</div>
		</div>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        <div class="dlabnav" style="background-color:black">
            <div class="dlabnav-scroll">
				<ul class="metismenu" id="menu">
					<li class="dropdown header-profile">
						<a class="nav-link" href="javascript:void(0);" role="button" data-bs-toggle="dropdown" style="background-color: white">
							<img src="https://lh3.googleusercontent.com/proxy/5RhVXv9XmNuI81wvuBpNZNtQW82xw9Uy5b63ZhD5iokL-pb0UaK0icyY2ELq-VcEKHDfqOKSOGg6h2N19-W2AS_8J65SLBwn0nW3tE8"  alt=""/>
							<div class="header-info ms-3">
								<span class="font-w600 ">Salut, <b>Aboulaye Fall</b></span>
								<small class="text-end font-w400" style="color: black">abdoulayfal@gmail.com</small>
							</div>

						</a>
						<div class="dropdown-menu dropdown-menu-end">
							<a href="app-profile.html" class="dropdown-item ai-icon">
								<svg id="icon-user1" xmlns="http://www.w3.org/2000/svg" class="text-primary" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
								<span class="ms-2">Profile </span>
							</a>
							<a href="email-inbox.html" class="dropdown-item ai-icon">
								<svg id="icon-inbox" xmlns="http://www.w3.org/2000/svg" class="text-success" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
								<span class="ms-2">Inbox </span>
							</a>
							<a href="https://dompet.dexignlab.com/xhtml/error-404.html" class="dropdown-item ai-icon">
								<svg id="icon-logout" xmlns="http://www.w3.org/2000/svg" class="text-danger" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg>
								<span class="ms-2">Logout </span>
							</a>
						</div>
					</li>
                    <li><a class=" ai-icon" href="{{route('accueil')}}" aria-expanded="false">
							<i class="flaticon-025-dashboard"></i>
							<span class="nav-text">Tableau de bord</span>
						</a>


                    </li>
                    <li><a class=" ai-icon" href="{{route('transactions')}}" aria-expanded="false">
						<i class="flaticon-050-info"></i>
							<span class="nav-text">Transaction</span>
						</a>

                    </li>
                    <li><a class=" ai-icon" href="{{route('cartes')}}" aria-expanded="false">
							<i class="flaticon-041-graph"></i>
							<span class="nav-text">Carte Bancaire</span>
						</a>

                    </li>
                    <li><a class="ai-icon" href="{{route('versements')}}" aria-expanded="false">
							<i class="flaticon-086-star"></i>
							<span class="nav-text">Mes Versements</span>
						</a>

                    </li>
                    <li><a class="ai-icon" href="{{route('services')}}" aria-expanded="false">
							<i class="flaticon-045-heart"></i>
							<span class="nav-text">Services</span>
						</a>

                    </li>
                    <li><a href="{{route('agents')}}" class="ai-icon" aria-expanded="false">
							<i class="flaticon-013-checkmark"></i>
							<span class="nav-text">Agents</span>
						</a>
					</li>
                    <li><a class=" ai-icon" href="javascript:void()" aria-expanded="false">
							<i class="flaticon-072-printer"></i>
							<span class="nav-text">Paramètres</span>
						</a>

                    </li>
                </ul>
				<div class="copyright">
					<p><strong>Dompet Payment Admin Dashboard</strong>Fayko © 2021 Tous Droits Réservés</p>
					<p class="fs-12">WebDesign <span class="heart"></span> by <a href="https://illugraph-ic.com">illugraphic</a></p>
				</div>
			</div>
        </div>
        <!--**********************************
            Sidebar end
        ***********************************-->

		<!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <!-- row -->
			@yield('content')
        </div>
        <!--**********************************
            Content body end
        ***********************************-->



        <!--**********************************
            Footer start
        ***********************************-->
        <div class="footer">

            <div class="copyright">
                <p>Copyright  Fayko © WebDesign Interface par <a href="https://illugraph-ic.com/" target="_blank">Illugraphic</a> 2021</p>
            </div>
        </div>
        <!--**********************************
            Footer end
        ***********************************-->

		<!--**********************************
           Support ticket button start
        ***********************************-->

        <!--**********************************
           Support ticket button end
        ***********************************-->


	</div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
   @yield('script')

</body>

<!-- Mirrored from dompet.dexignlab.com/xhtml/my-wallet.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 09 Jun 2021 23:10:51 GMT -->
</html>
