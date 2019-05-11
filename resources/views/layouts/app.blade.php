<!DOCTYPE HTML>
<html lang="en">
<head>
	<title>Selamat Datang !</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8">
	
	
	<!-- Font -->
	
	<link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,700%7CAllura" rel="stylesheet">
	
	<!-- Stylesheets -->
	
	<link href="{{ url('front/common-css/bootstrap.css') }}" rel="stylesheet">
	
	<link href="{{ url('front/common-css/ionicons.css') }}" rel="stylesheet">
	
	<link href="{{ url('front/common-css/fluidbox.min.css') }}" rel="stylesheet">
	
	<link href="{{ url('front/01-cv-portfolio/css/styles.css') }}" rel="stylesheet">
	
	<link href="{{ url('front/01-cv-portfolio/css/responsive.css') }}" rel="stylesheet">
	
</head>
<body>
	
	<header>
		<div class="container">
			<div class="heading-wrapper">
				<div class="row">
					<div class="col-sm-6 col-md-6 col-lg-4">
						<div class="info">
							<i class="icon ion-ios-location-outline"></i>
							<div class="right-area">	
								<h5>{{ $myBio->street }}</h5>
								<h5>{{ $myBio->address }}</h5>
							</div><!-- right-area -->
						</div><!-- info -->
					</div><!-- col-sm-4 -->
					
					<div class="col-sm-6 col-md-6 col-lg-4">
						<div class="info">
							<i class="icon ion-ios-telephone-outline"></i>
							<div class="right-area">
								<h5>{{ $myBio->handphone }}</h5>
								<h6>Stand by 24 Hours</h6>
							</div><!-- right-area -->
						</div><!-- info -->
					</div><!-- col-sm-4 -->
					
					<div class="col-sm-6 col-md-6 col-lg-4">
						<div class="info">
							<i class="icon ion-ios-chatboxes-outline"></i>
							<div class="right-area">
								<h5>{{ $myBio->email }}</h5>
								<h6>REPLY IN 12 HOURS</h6>
							</div><!-- right-area -->
						</div><!-- info -->
					</div><!-- col-sm-4 -->
				</div><!-- row -->
			</div><!-- heading-wrapper -->
			
			<!-- <a class="downlad-btn" href="#">Download CV</a> -->
		</div><!-- container -->
	</header>
	
	<section class="intro-section" style="background-image: url({{ url('mybio/'.$myBio->photo_background) }});">
		<div class="container">
			<div class="row">
				<div class="col-md-1 col-lg-2"></div>
				<div class="col-md-10 col-lg-8">
					<div class="intro">
						<div class="profile-img"><img src="{{ url('mybio/'.$myBio->photo_profile) }}" alt=""></div>
						<h2><b>{{ $myBio->name }}</b></h2>
						<h4 class="font-yellow">{{ $myBio->work_at }}</h4>
						<ul class="information margin-tb-30">
							<li><b>BORN : </b>{{ $myBio->born }}</li>
							<li><b>EMAIL : </b>{{ $myBio->email }}</li>
							<li><b>STATUS : </b>{{ $myBio->status }}</li>
						</ul>
						<ul class="social-icons">
							<li><a href="{{ $myBio->github }}"><i class="ion-social-github"></i></a></li>
							<li><a href="{{ $myBio->in }}"><i class="ion-social-linkedin"></i></a></li>
							<li><a href="{{ $myBio->ig }}"><i class="ion-social-instagram"></i></a></li>
							<li><a href="{{ $myBio->fb }}"><i class="ion-social-facebook"></i></a></li>
							<li><a href="{{ $myBio->twitter }}"><i class="ion-social-twitter"></i></a></li>
						</ul>
					</div><!-- intro -->
				</div><!-- col-sm-8 -->
			</div><!-- row -->
		</div><!-- container -->
	</section><!-- intro-section -->
	
	<section class="portfolio-section section">
		<div class="container">
			<div class="row">
				<div class="col-sm-4">
					<div class="heading">
						<h3><b>Portfolio</b></h3>
						<h6 class="font-lite-black"><b>MY WORK</b></h6>
					</div>
				</div><!-- col-sm-4 -->
				<!-- <div class="col-sm-8">
					<div class="portfolioFilter clearfix margin-b-80">
						<a href="#" data-filter="*" class="current"><b>ALL</b></a>
						<a href="#" data-filter=".web-design"><b>WEB DESIGN</b></a>
						<a href="#" data-filter=".branding"><b>BRANDING</b></a>
						<a href="#" data-filter=".graphic-design"><b>GRAPHIC DESIGN</b></a>
					</div>portfolioFilter -->
				</div><!-- col-sm-8 -->
			</div><!-- row -->
		</div><!-- container -->
		
		<div class="portfolioContainer">
			@foreach($myGalleries as $myGallery)
			<div class="p-item web-design">
				<a href="{{ url('gallery/'.$myGallery->name) }}" data-fluidbox>
					<img src="{{ url('gallery/'.$myGallery->name) }}" alt=""></a>
			</div><!-- p-item -->
			@endforeach
		</div><!-- portfolioContainer -->
		
	</section><!-- portfolio-section -->
	
	
	<section class="about-section section">
		<div class="container">
			<div class="row">
				<div class="col-sm-4">
					<div class="heading">
						<h3><b>About me</b></h3>
						<h6 class="font-lite-black"><b>PROFESSIONAL PATH</b></h6>
					</div>
				</div><!-- col-sm-4 -->
				<div class="col-sm-8">
					<p class="margin-b-50">{{ $myAbout->description }}</p>
					
					<div class="row">
						<div class="col-sm-6 col-md-6 col-lg-3">
							<div class="radial-prog-area margin-b-30">
								<div class="radial-progress" data-prog-percent=".97">
									<div></div>
									<h6 class="progress-title">{{ $myAbout->focus1 }}</h6>
								</div>
							</div><!-- radial-prog-area-->
						</div><!-- col-sm-6-->
					
						<div class="col-sm-6 col-md-6 col-lg-3">
							<div class="radial-prog-area margin-b-30">
								<div class="radial-progress" data-prog-percent=".78">
									<div></div>
									<h6 class="progress-title">{{ $myAbout->focus2 }}</h6>
								</div>
							</div><!-- radial-prog-area-->
						</div><!-- col-sm-6-->
						
						<div class="col-sm-6 col-md-6 col-lg-3">
							<div class="radial-prog-area margin-b-30">
								<div class="radial-progress" data-prog-percent=".67">
									<div></div>
									<h6 class="progress-title">{{ $myAbout->focus3 }}</h6>
								</div>
							</div><!-- radial-prog-area-->
						</div><!-- col-sm-6-->
						
						<div class="col-sm-6 col-md-6 col-lg-3">
							<div class="radial-prog-area margin-b-50">
								<div class="radial-progress" data-prog-percent=".97">
									<div></div>
									<h6 class="progress-title">{{ $myAbout->focus4 }}</h6>
								</div>
							</div><!-- radial-prog-area-->
						</div><!-- col-sm-6-->
					
					</div><!-- row -->
				</div><!-- col-sm-8 -->
			</div><!-- row -->
		</div><!-- container -->
	</section><!-- about-section -->
	
	<section class="experience-section section">
		<div class="container">
			<div class="row">
				<div class="col-sm-4">
					<div class="heading">
						<h3><b>Work Experience</b></h3>
						<h6 class="font-lite-black"><b>PREVIOUS JOBS</b></h6>
					</div>
				</div><!-- col-sm-4 -->
				<div class="col-sm-8">
					@foreach($myExperiences as $myExperience)
					<div class="experience margin-b-50">
						<h4><b>{{ $myExperience->name }}</b></h4>
						<h5 class="font-yellow"><b>{{ $myExperience->work_at }}</b></h5>
						<h6 class="margin-t-10">{{ $myExperience->from }} / {{ $myExperience->until }}</h6>
						<p class="font-semi-white margin-tb-30">{!! $myExperience->detail !!}</p>
						<!-- <ul class="list margin-b-30">
							<li>Duis non volutpat arcu, eu mollis tellus.</li>
							<li>Quis consequat nulla effi citur at.</li>
							<li>Sed finibus aliquam neque sit.</li>
						</ul> -->
					</div><!-- experience -->
					@endforeach
				</div><!-- col-sm-8 -->
			</div><!-- row -->
		</div><!-- container -->
		
	</section><!-- experience-section -->
	
	<section class="education-section section">
		<div class="container">
			<div class="row">
				<div class="col-sm-4">
					<div class="heading">
						<h3><b>Education</b></h3>
						<h6 class="font-lite-black"><b>ACADEMIC CAREER</b></h6>
					</div>
				</div><!-- col-sm-4 -->
				<div class="col-sm-8">
					<div class="education-wrapper">
					@foreach($myEducations as $myEducation)
						<div class="education margin-b-50">
							<h4><b>{{ $myEducation->study }}</b></h4>
							<h5 class="font-yellow"><b>{{ $myEducation->university }}</b></h5>
							<h6 class="font-lite-black margin-t-10">{{ $myEducation->from }} || {{ $myEducation->until }}</h6>
							<p class="margin-tb-30">{!! $myEducation->description !!}</p>
						</div><!-- education -->
					@endforeach
						
					</div><!-- education-wrapper -->
				</div><!-- col-sm-8 -->
			</div><!-- row -->
		</div><!-- container -->
		
	</section><!-- about-section -->
	
	<section class="counter-section" id="counter">
		<div class="container">
			<div class="row">
			
				<div class="col-sm-12 col-md-12 col-lg-12">
					<div class="counter margin-b-30">
						<h2>" {{ $myQuote->description }} "</h2>
					</div><!-- counter -->
				</div><!-- col-md-3-->
				
			</div><!-- row-->
		</div><!-- container-->
    </section><!-- counter-section-->
	
	<footer>
		<p class="copyright">
			<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> Made with <i class="ion-heart" aria-hidden="true"></i> in Bandung.
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
		</p>


	</footer>
	
	
	<!-- SCIPTS -->
	
	<script src="{{ url('front/common-js/jquery-3.2.1.min.js') }}"></script>
	
	<script src="{{ url('front/common-js/tether.min.js') }}"></script>
	
	<script src="{{ url('front/common-js/bootstrap.js') }}"></script>
	
	<script src="{{ url('front/common-js/isotope.pkgd.min.js') }}"></script>
	
	<script src="{{ url('front/common-js/jquery.waypoints.min.js') }}"></script>
	
	<script src="{{ url('front/common-js/progressbar.min.js') }}"></script>
	
	<script src="{{ url('front/common-js/jquery.fluidbox.min.js') }}"></script>
	
	<script src="{{ url('front/common-js/scripts.js') }}"></script>
	
</body>
</html>