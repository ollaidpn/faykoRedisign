@extends('layouts.back');

@section('styles')
<link href="{{asset('assets/backoffice/vendor/jquery-nice-select/css/nice-select.css')}}" rel="stylesheet">
<link rel="stylesheet" href="{{asset('assets/backoffice/vendor/owl-carousel/owl.carousel.css')}}">

@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-header flex-wrap border-0 pb-0 align-items-end">
                    <div class="mb-3 me-3">
                        <h5 class="fs-20 text-black font-w500">Total sur mes cartes</h5>
                        <span class="text-num text-black fs-36 font-w500">1.939.013 Fcfa</span>
                    </div>

                    <div class="dropdown mb-auto">
                        <a href="javascript:void(0);" class="btn-primary btn" data-bs-toggle="dropdown" aria-expanded="false" style="background-color: black">
                        <strong style="color: orange">Ajouter une carte</strong>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="javascript:void(0);">Visa</a>
                            <a class="dropdown-item" href="javascript:void(0);">Master Card</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>
				<div class="row">
					<div class="col-xl-12">
						<div class="card-slider owl-carousel">
                            <div class="items">
								<div class="card-bx" style="background-color: rgb(0, 0, 0)">
									<img class="pattern-img" src="{{asset('assets/backoffice/images//pattern/pattern5.png')}}" alt="">
									<div class="card-info text-white">
										<img src="https://pbs.twimg.com/profile_images/586520064641241092/jj6kD_l-.jpg" class="mb-4" alt="">
										<h2 class="text-white card-balance">824.719 Fcfa</h2>
                                        <p class="mb-1"><strong style="font-size: 1.6em">Carte Cofina Sénégal</strong></p>
										<div class="d-flex align-items-end">
                                            <span><strong>Abdoulaye Fall</strong></span>
											<div class="me-5 ms-auto">
												<p class="fs-14 mb-1">Expiration</p>
												<span>11/21</span>
											</div>
											<div>
                                                <p class="fs-14 mb-1">Crypto</p>
												<span><strong>0947</strong></span>
											</div>
										</div>
									</div>
								</div>
							</div>

                            <div class="items">
								<div class="card-bx" style="background-color: rgb(236, 83, 83)">
									<img class="pattern-img" src="{{asset('assets/backoffice/images//pattern/pattern5.png')}}" alt="">
									<div class="card-info text-white">
										<img src="https://upload.wikimedia.org/wikipedia/fr/thumb/3/3b/Sgbs_logo.PNG/280px-Sgbs_logo.PNG" class="mb-4" alt="">
										<h2 class="text-white card-balance">824.719 Fcfa</h2>
                                        <p class="mb-1"><strong style="font-size: 1.6em">Société Général Sénégal Carte</strong></p>
										<div class="d-flex align-items-end">
                                            <span><strong>Abdoulaye Fall</strong></span>
											<div class="me-5 ms-auto">
												<p class="fs-14 mb-1">Expiration</p>
												<span>11/21</span>
											</div>
											<div>
                                                <p class="fs-14 mb-1">Crypto</p>
												<span><strong>0947</strong></span>
											</div>
										</div>
									</div>
								</div>
							</div>



							<div class="items">
								<div class="card-bx mb-0" style="background-color: lightskyblue">
									<img class="pattern-img" src="{{asset('assets/backoffice/images//pattern/pattern6.png')}}" alt="">
									<div class="card-info text-white">
										<div class="d-flex align-items-center">
											<div class="me-auto">
												<p class="mb-1">Ecobank Express</p>
												<h2 class="fs-36 text-white mb-5">73.412 Fcfa</h2>
											</div>
											<img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/98/Ecobank_Logo.svg/1200px-Ecobank_Logo.svg.png" class="mb-4" alt="">
										</div>
										<div class="d-flex">
											<div class="me-5">
												<p class="fs-14 mb-1">Expiration</p>
												<span>08/21</span>
											</div>
											<div>
												<p class="fs-14 mb-1">Titulaire</p>
												<span><strong>Sonapta SA</strong></span>
											</div>
										</div>
									</div>
								</div>
							</div>

						</div>
					</div>

				</div>
            </div>
@endsection

@section('script')
     <!-- Required vendors -->
     <script src="{{asset('assets/backoffice/vendor/global/global.min.js')}}"></script>
     <script src="{{asset('assets/backoffice/vendor/chart.js/Chart.bundle.min.js')}}"></script>
     <script src="{{asset('assets/backoffice/vendor/jquery-nice-select/js/jquery.nice-select.min.js')}}"></script>

     <!-- Apex Chart -->
     <script src="{{asset('assets/backoffice/vendor/apexchart/apexchart.js')}}"></script>
     <script src="{{asset('assets/backoffice/vendor/nouislider/nouislider.min.js')}}"></script>
     <script src="{{asset('assets/backoffice/vendor/wnumb/wNumb.js')}}"></script>

     <!-- Dashboard 1 -->
     <script src="{{asset('assets/backoffice/js/dashboard/my-wallet.js')}}"></script>

     <script src="{{asset('assets/backoffice/js/custom.min.js')}}"></script>
     <script src="{{asset('assets/backoffice/js/dlabnav-init.js')}}"></script>
     <script src="{{asset('assets/backoffice/js/demo.js')}}"></script>
     {{-- <script src="{{asset('assets/backoffice/js/styleSwitcher.js')}}"></script> --}}



	<script src="{{asset('assets/backoffice/vendor/owl-carousel/owl.carousel.js')}}"></script>

	<script>
		function cardsCenter()
		{

			/*  testimonial one function by = owl.carousel.js */



			jQuery('.card-slider').owlCarousel({
				loop:true,
				margin:0,
				nav:true,
				center:true,
				animateOut: 'fadeOut',
				animateIn: 'fadeIn',
				slideSpeed: 3000,
				paginationSpeed: 3000,
				dots: false,
				navText: ['', ''],
				responsive:{
					0:{
						items:1
					},
					576:{
						items:1
					},
					800:{
						items:2
					},
					991:{
						items:2
					},
					1200:{
						items:2
					},
					1600:{
						items:3
					}
				}
			})
		}

		jQuery(window).on('load',function(){
			setTimeout(function(){
				cardsCenter();
			}, 1000);
		});

	</script>
@endsection
