@extends('master')

@section('home')

	<div id="home-section" class="image-bg">
		<div class="container">
			<div class="home-content padding">
				<img class="img-responsive" src="images/landing/synergymarketinglogo.png" alt="">				
				<h1>YOUR PREFERRED IN-STORE MARKETING AND BRANDING PARTNER</h1>				
				<div class="button">
					<a href="#" class="btn btn-primary btn-animated">Read About Us</a>
					<a href="#" class="btn btn-primary btn-animated">Our Services</a>
				</div>
				<div class="app-icons text-center">
					<ul class="list-inline">
						<li><a href="#"><i class="fa fa-desktop"></i></a></li>
						<li><a href="#"><i class="fa fa-apple"></i></a></li>
						<li><a href="#"><i class="fa fa-windows"></i></a></li>
						<li><a href="#"><i class="fa fa-android"></i></a></li>
					</ul>
				</div>
			</div>
		</div>
	</div><!--/#home-section--> 

@endsection

@section('nav')

<header id="navigation">
	<div class="navbar" role="banner">
		<div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                
                <a class="navbar-brand" href="#home-section">
					<img class="main-logo img-responsive" src="images/landing/logo.png" alt="" width="80" height="80">
                </a> 

            </div> 
            <nav id="mainmenu" class="collapse navbar-collapse navbar-right" aria-expanded="false">         
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#home-section">HOME</a></li>
                    <li class=""><a href="#about">About Us</a></li>
                    <li class=""><a href="#services">Services</a></li>
                    <li class=""><a href="#mediums">Mediums</a></li>
                    <li class=""><a href="#network">Network</a></li>
                    <li class=""><a href="#innovation">Innovation</a></li>
                    <li class=""><a href="#career">Career</a></li>
                    <li class=""><a href="#contact">Contact</a></li>
                    <li class=""><a href="{{ url('/home') }}">Login</a></li>
                </ul>         
            </nav>               
        </div>
    </div>
</header><!--/#navigation--> 

@endsection

@section('about')

<div id="about" class="padding">
	<div class="container">
	  <div class="row">
	    <div class="col-lg-12 wow fadeInLeft" data-wow-duration="0.5s" data-wow-delay="0.5s" style="visibility: visible; animation-duration: 0.5s; animation-delay: 0.3s; animation-name: fadeInLeft;">
	      <h1 class="custom-font text-center"> <b>SMA GROUP MILESTONES</b></h1>
	      <backquote>
	        Synergy Marketing (Asia) has come a long way since our inception in 2002 in Hong Kong. We have evolved to become a leading and preferred in-store marketing strategist. Combining industry expertise with creative and innovative solutions, we are able to develop and implement effective marketing and communications strategies to reach our clients’ targeted audience.
	      </backquote>
	      <ul class="timeline">
	        <li>
	          <div class="timeline-image">
	            <img class="img-circle img-responsive" src="images/landing/1_creditcard.png" alt="">
	          </div>
	          <div class="timeline-panel">
	            <div class="timeline-heading">
	              <h1><b>2002</b></h1>              
	            </div>
	            <div>
	              
	                <ul>
		                <li>Inception of SMA in Hong Kong</li>
						<li>Engaged by Standard Chartered Bank for ATM coupon advertising</li>
					</ul>
	              
	            </div>
	          </div>
	          <div class="line"></div>
	        </li>
	        <li class="timeline-inverted">
	          <div class="timeline-image">
	            <img class="img-circle img-responsive" src="images/landing/2_TV.png" alt="">
	          </div>
	          <div class="timeline-panel">
	            <div class="timeline-heading">
	              <h1><b>2005</b></h1>
	            </div>
	            <div class="timeline-body">
	                <ul>
		                <li>Exclusive in-store TV agency (Mobile Phone Interactive Technology) of Mannings (Dairy Farm Hong Kong)</li>
					</ul>
	            </div>
	          </div>
	          <div class="line"></div>
	        </li>
	        <li>
	          <div class="timeline-image">
	            <img class="img-circle img-responsive" src="images/landing/3_radio.png" alt="">
	          </div>
	          <div class="timeline-panel">
	            <div class="timeline-heading">
	              <h1><b>2008</b></h1>
	            </div>
	            <div class="timeline-body">
	                <ul>
		                <li>Exclusive in-store radio agency of Wellcome (Dairy Farm Hong Kong)</li>
						<li>Appointed in-store demonstration agency of Wellcome (Dairy Farm Hong Kong)</li>
					</ul>
	            </div>
	          </div>
	          <div class="line"></div>
	        </li>
	        <li class="timeline-inverted">
	          <div class="timeline-image">
	            <img class="img-circle img-responsive" src="images/landing/4_media.png" alt="">
	          </div>
	          <div class="timeline-panel">
	            <div class="timeline-heading">
	              <h1><b>2009</b></h1>
	            </div>
	            <div class="timeline-body">
	                <ul>
		                <li>Appointed in-store media agency of Wellcome (Dairy Farm Hong Kong)</li>
					</ul>
	            </div>
	          </div>
	          <div class="line"></div>
	        </li>
	        <li>
	          <div class="timeline-image">
	            <img class="img-circle img-responsive" src="images/landing/5_sampling.png" alt="">
	          </div>
	          <div class="timeline-panel">
	            <div class="timeline-heading">
	              <h1><b>2010</b></h1>
	            </div>
	            <div class="timeline-body">
	                <ul>
		                <li>Appointed promoter agency for fresh food department of PARKnSHOP (Hutchison Group)</li>
					</ul>
	            </div>
	          </div>
	          <div class="line"></div>
	        </li>
	       <li class="timeline-inverted">
	          <div class="timeline-image">
	            <img class="img-circle img-responsive" src="images/landing/6_media_sin.png" alt="">
	          </div>
	          <div class="timeline-panel">
	            <div class="timeline-heading">
	              <h1><b>2016</b></h1>
	            </div>
	            <div class="timeline-body">
	                <ul>
		                <li>Appointed in-store media agency of Giant (Dairy Farm Singapore)</li>
					</ul>
	            </div>
	          </div>
	          <div class="line"></div>	          
	        </li>
	        <li>
	          <div class="timeline-image">
	            <img class="img-circle img-responsive" src="images/landing/7_tv_mallprinting.png" alt="">
	          </div>
	          <div class="timeline-panel">
	            <div class="timeline-heading">
	              <h1><b>2017</b></h1>
	            </div>
	            <div class="timeline-body">
	                <ul>
		                <li>Appointed in-store TV & mall printing agency of Carrefour (Indonesia)</li>
					</ul>
	            </div>
	          </div>

	        </li>	        
	      </ul> <!-- TimeLine -->
	    </div> <!-- Col-12 -->
	  </div> <!-- ROW -->
	</div>
</div><!--/#whatsit-->

@endsection

@section('services')

<div id="services" class="padding image-bg">
	<div class="overlay-bg"></div>
	<div class="container">
		<div class="text-center section-title wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.10s" style="visibility: visible; animation-duration: 0.5s; animation-delay: 0.1s; animation-	: fadeInUp;">
			<img class="img-responsive" src="images/icons/t1.png" alt="">
			<h1>Our Services</h1>
		</div>
		<div class="special-features">
			<div class="row"> 
				<div class="col-sm-3">
					<div class="special-content text-right wow fadeInDown" data-wow-duration="0.5s" data-wow-delay="0.3s" style="visibility: visible; animation-duration: 0.5s; animation-delay: 0.3s; animation-name: fadeInDown;">
						<h2>In-store marketing and advertising solutions</h2>
						<p>Sectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
					</div>
					<div class="special-content text-right wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.5s" style="visibility: visible; animation-duration: 0.5s; animation-delay: 0.5s; animation-name: fadeInUp;">
						<h2>In-store demonstration campaigns</h2>
						<p>Ut enim ad minim veniam, quis nosexercitation ullaboris nisi ut aliquip ex ea commodo.</p>
					</div>
					<div class="special-content text-right wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.5s" style="visibility: visible; animation-duration: 0.5s; animation-delay: 0.5s; animation-name: fadeInUp;">
						<h2>Events management </h2>
						<p>Ut enim ad minim veniam, quis nosexercitation ullaboris nisi ut aliquip ex ea commodo.</p>
					</div>					
				</div>
				<div class="col-sm-6">
					<div class="special-image wow slideInUp" data-wow-duration="0.5s" data-wow-delay="0.7s" style="visibility: visible; animation-duration: 0.5s; animation-delay: 0.7s; animation-name: slideInUp;">
						<img class="img-responsive" src="images/landing/special.png" alt="">
					</div>
				</div>
				<div class="col-sm-3">
					<div class="special-content text-left wow fadeInDown" data-wow-duration="0.5s" data-wow-delay="0.3s" style="visibility: visible; animation-duration: 0.5s; animation-delay: 0.3s; animation-name: fadeInDown;">
						<h2>Merchandising and shelf-management</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
					</div>
					<div class="special-content text-left wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.5s" style="visibility: visible; animation-duration: 0.5s; animation-delay: 0.5s; animation-name: fadeInUp;">
						<h2>Marketing communications strategy and consultancy</h2>
						<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
					</div>
				</div>

				
			</div>
		</div>
	</div>
</div><!--/#whats-special-->

@endsection

@section('mediums')

<div id="mediums" class="padding">
	<div class="container">
		<div class="section-title text-center wow fadeInDown" data-wow-duration="0.5s" data-wow-delay="0.1s" style="visibility: visible; animation-duration: 0.5s; animation-delay: 0.1s; animation-name: fadeInDown;">
			<img class="img-responsive" src="images/icons/t2.png" alt="">
			<h1>OS Compatibility</h1>
		</div>
		<div class="col-sm-6 left-side">
			<div class="compatibility">
				<div class="os text-right wow fadeInLeft" data-wow-duration="0.5s" data-wow-delay="0.5s" style="visibility: visible; animation-duration: 0.5s; animation-delay: 0.5s; animation-name: fadeInLeft;">
					<h2>Android</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
					<a href="#">More Detail</a>
				</div>
				<div class="os-image wow fadeInRight" data-wow-duration="0.5s" data-wow-delay="0.5s" style="visibility: visible; animation-duration: 0.5s; animation-delay: 0.5s; animation-name: fadeInRight;">
					<img class="img-responsive" src="images/landing/os1.png" alt="">
				</div>
			</div>
		</div>	
		<div class="col-sm-6 right-side">
			<div class="compatibility">
				<div class="os-image wow fadeInLeft" data-wow-duration="0.5s" data-wow-delay="0.5s" style="visibility: visible; animation-duration: 0.5s; animation-delay: 0.5s; animation-name: fadeInLeft;">
					<img class="img-responsive" src="images/landing/os2.png" alt="">
				</div>
				<div class="os text-left wow fadeInRight" data-wow-duration="0.5s" data-wow-delay="0.5s" style="visibility: visible; animation-duration: 0.5s; animation-delay: 0.5s; animation-name: fadeInRight;">
					<h2>iPhone</h2>
					<p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut Duis aute irure dolor in reprehenderit in voluptate velit esse.</p>
					<a href="#">More Detail</a>
				</div>
			</div>
		</div>
	</div>
</div><!--/#compatibility-->

@endsection

@section('network')

<div id="network" class="padding image-bg">

	<div class="overlay-bg"></div>
		<div class="container">
		<div class="row">
			<div class="text-center section-title wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.1s" style="visibility: visible; animation-duration: 0.5s; animation-delay: 0.1s; animation-name: fadeInUp;">
				<img class="img-responsive" src="images/icons/t4.png" alt="">
				<h1>Our Network</h1>
			</div>				
		</div>
		<div class="all-features text-center">
			<div class="row">
				<div class="col-sm-3">
					<div class="feature wow fadeInDown" data-wow-duration="0.5s" data-wow-delay="0.2s" style="visibility: visible; animation-duration: 0.5s; animation-delay: 0.2s; animation-name: fadeInDown;">							
						<img class="img-responsive" src="images/icons/f1.png" alt="">
						<h2>Super Fast</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing</p>
					</div>
					<div class="feature wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.3s" style="visibility: visible; animation-duration: 0.5s; animation-delay: 0.3s; animation-name: fadeInUp;">							
						<img class="img-responsive" src="images/icons/f5.png" alt="">
						<h2>Free Text</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing</p>
					</div>
				</div>
				<div class="col-sm-3">
					<div class="feature wow fadeInDown" data-wow-duration="0.5s" data-wow-delay="0.3s" style="visibility: visible; animation-duration: 0.5s; animation-delay: 0.3s; animation-name: fadeInDown;">							
						<img class="img-responsive" src="images/icons/f2.png" alt="">
						<h2>East to Use</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing</p>
					</div>
					<div class="feature wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.4s" style="visibility: visible; animation-duration: 0.5s; animation-delay: 0.4s; animation-name: fadeInUp;">							
						<img class="img-responsive" src="images/icons/f6.png" alt="">
						<h2>Creative UI</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing</p>
					</div>
				</div>
				<div class="col-sm-3">
					<div class="feature wow fadeInDown" data-wow-duration="0.5s" data-wow-delay="0.4s" style="visibility: visible; animation-duration: 0.5s; animation-delay: 0.4s; animation-name: fadeInDown;">							
						<img class="img-responsive" src="images/icons/f3.png" alt="">
						<h2>Video Calls</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing</p>
					</div>
					<div class="feature wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.5s" style="visibility: visible; animation-duration: 0.5s; animation-delay: 0.5s; animation-name: fadeInUp;">							
						<img class="img-responsive" src="images/icons/f7.png" alt="">
						<h2>Instant Messaging</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing</p>
					</div>
				</div>
				<div class="col-sm-3">
					<div class="feature wow fadeInDown" data-wow-duration="0.5s" data-wow-delay="0.5s" style="visibility: visible; animation-duration: 0.5s; animation-delay: 0.5s; animation-name: fadeInDown;">							
						<img class="img-responsive" src="images/icons/f4.png" alt="">
						<h2>Free Call</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing</p>
					</div>
					<div class="feature wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.6s" style="visibility: visible; animation-duration: 0.5s; animation-delay: 0.6s; animation-name: fadeInUp;">							
						<img class="img-responsive" src="images/icons/f8.png" alt="">
						<h2>File Sharing</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing</p>
					</div>
				</div>
				
			</div>
		</div>
	</div>
	<div class="container text-center">
		<div class="section-title wow fadeInDown" data-wow-duration="0.5s" data-wow-delay="0.1s" style="visibility: visible; animation-duration: 0.5s; animation-delay: 0.1s; animation-name: fadeInDown;">
			<img class="img-responsive" src="images/icons/t3.png" alt="">
			<h1>Description with video</h1>
		</div>
		<div class="video wow zoomIn" data-wow-duration="0.5s" data-wow-delay="0.3s" style="visibility: visible; animation-duration: 0.5s; animation-delay: 0.3s; animation-name: zoomIn;">
			<a class="video-link" href="https://vimeo.com/124415606"><i class="fa fa-youtube-play"></i></a>
			<img class="img-responsive" src="images/landing/video.png" alt="">
		</div>
	</div>
</div><!--/#video-section-->

@endsection

@section('innovation')

<div id="innovation" class="padding">
	<div class="container">
		<div class="row">
			<div class="text-center section-title wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.1s" style="visibility: visible; animation-duration: 0.5s; animation-delay: 0.1s; animation-name: fadeInUp;">
				<img class="img-responsive" src="images/icons/t4.png" alt="">
				<h1>Discover All Features</h1>
			</div>				
		</div>
		<div class="all-features text-center">
			<div class="row">
				<div class="col-sm-3">
					<div class="feature wow fadeInDown" data-wow-duration="0.5s" data-wow-delay="0.2s" style="visibility: visible; animation-duration: 0.5s; animation-delay: 0.2s; animation-name: fadeInDown;">							
						<img class="img-responsive" src="images/icons/f1.png" alt="">
						<h2>Super Fast</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing</p>
					</div>
					<div class="feature wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.3s" style="visibility: visible; animation-duration: 0.5s; animation-delay: 0.3s; animation-name: fadeInUp;">							
						<img class="img-responsive" src="images/icons/f5.png" alt="">
						<h2>Free Text</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing</p>
					</div>
				</div>
				<div class="col-sm-3">
					<div class="feature wow fadeInDown" data-wow-duration="0.5s" data-wow-delay="0.3s" style="visibility: visible; animation-duration: 0.5s; animation-delay: 0.3s; animation-name: fadeInDown;">							
						<img class="img-responsive" src="images/icons/f2.png" alt="">
						<h2>East to Use</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing</p>
					</div>
					<div class="feature wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.4s" style="visibility: visible; animation-duration: 0.5s; animation-delay: 0.4s; animation-name: fadeInUp;">							
						<img class="img-responsive" src="images/icons/f6.png" alt="">
						<h2>Creative UI</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing</p>
					</div>
				</div>
				<div class="col-sm-3">
					<div class="feature wow fadeInDown" data-wow-duration="0.5s" data-wow-delay="0.4s" style="visibility: visible; animation-duration: 0.5s; animation-delay: 0.4s; animation-name: fadeInDown;">							
						<img class="img-responsive" src="images/icons/f3.png" alt="">
						<h2>Video Calls</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing</p>
					</div>
					<div class="feature wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.5s" style="visibility: visible; animation-duration: 0.5s; animation-delay: 0.5s; animation-name: fadeInUp;">							
						<img class="img-responsive" src="images/icons/f7.png" alt="">
						<h2>Instant Messaging</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing</p>
					</div>
				</div>
				<div class="col-sm-3">
					<div class="feature wow fadeInDown" data-wow-duration="0.5s" data-wow-delay="0.5s" style="visibility: visible; animation-duration: 0.5s; animation-delay: 0.5s; animation-name: fadeInDown;">							
						<img class="img-responsive" src="images/icons/f4.png" alt="">
						<h2>Free Call</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing</p>
					</div>
					<div class="feature wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.6s" style="visibility: visible; animation-duration: 0.5s; animation-delay: 0.6s; animation-name: fadeInUp;">							
						<img class="img-responsive" src="images/icons/f8.png" alt="">
						<h2>File Sharing</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing</p>
					</div>
				</div>
				
			</div>
		</div>
	</div>
</div><!--/#features--> 


@endsection

@section('career')

<div id="career" class="padding image-bg">
	<div class="overlay-bg"></div>
		<div class="container">
			<div class="text-center section-title  wow fadeInDown" data-wow-duration="0.5s" data-wow-delay="0.1s" style="visibility: visible; animation-duration: 0.5s; animation-delay: 0.1s; animation-name: fadeInDown;">
				<img class="img-responsive" src="images/icons/t5.png" alt="">
				<h1>Screenshot Gallery</h1>
			</div>
			<div id="screenshot-slider" class="owl-carousel owl-theme" style="display: block; opacity: 1;">
				<div class="owl-wrapper-outer">
					<div class="owl-wrapper" style="display: block; width: 4230px; left: 0px; transition: all 0ms ease; transform: translate3d(0px, 0px, 0px);">
						<div class="owl-item" style="width: 235px;">
							<div class="career wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.2s" style="visibility: visible; animation-duration: 0.5s; animation-delay: 0.2s; animation-name: fadeInUp;">
								<a class="image-link" href="images/landing/screen1.jpg">
								<img class="img-responsive" src="images/landing/screen1.jpg" alt="">
								</a>
							</div>
						</div>
						<div class="owl-item" style="width: 235px;">
							<div class="career wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.3s" style="visibility: visible; animation-duration: 0.5s; animation-delay: 0.3s; animation-name: fadeInUp;">
								<a class="image-link" href="images/landing/screen2.jpg">
								<img class="img-responsive" src="images/landing/screen2.jpg" alt="">
								</a>
							</div>
						</div>
						<div class="owl-item" style="width: 235px;">
							<div class="career wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.4s" style="visibility: visible; animation-duration: 0.5s; animation-delay: 0.4s; animation-name: fadeInUp;">
								<a class="image-link" href="images/landing/screen3.jpg">
								<img class="img-responsive" src="images/landing/screen3.jpg" alt="">
								</a>
							</div>
						</div>
						<div class="owl-item" style="width: 235px;">
							<div class="career wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.5s" style="visibility: visible; animation-duration: 0.5s; animation-delay: 0.5s; animation-name: fadeInUp;">
								<a class="image-link" href="images/landing/screen4.jpg">
								<img class="img-responsive" src="images/landing/screen4.jpg" alt="">
								</a>
							</div>
						</div>
						<div class="owl-item" style="width: 235px;">
							<div class="career wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.5s" style="visibility: visible; animation-duration: 0.5s; animation-delay: 0.5s; animation-name: fadeInUp;">
								<a class="image-link" href="images/landing/screen2.jpg">
								<img class="img-responsive" src="images/landing/screen2.jpg" alt="">
								</a>
							</div>
						</div>
						<div class="owl-item" style="width: 235px;">
						<div class="career wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.4s" style="visibility: visible; animation-duration: 0.5s; animation-delay: 0.4s; animation-name: fadeInUp;">
							<a class="image-link" href="images/landing/screen1.jpg">
							<img class="img-responsive" src="images/landing/screen1.jpg" alt="">
							</a>
						</div>
						</div>
						<div class="owl-item" style="width: 235px;">
							<div class="career wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.3s" style="visibility: visible; animation-duration: 0.5s; animation-delay: 0.3s; animation-name: fadeInUp;">
								<a class="image-link" href="images/landing/screen4.jpg"><img class="img-responsive" src="images/landing/screen4.jpg" alt=""></a>
							</div>
						</div>
						<div class="owl-item" style="width: 235px;">
						<div class="career wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.2s" style="visibility: visible; animation-duration: 0.5s; animation-delay: 0.2s; animation-name: fadeInUp;">
							<a class="image-link" href="images/landing/screen3.jpg">
							<img class="img-responsive" src="images/landing/screen3.jpg" alt="">
							</a>
						</div>
						</div>
						<div class="owl-item" style="width: 235px;">
							<div class="career wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.2s" style="visibility: visible; animation-duration: 0.5s; animation-delay: 0.2s; animation-name: fadeInUp;">
								<a class="image-link" href="images/landing/screen1.jpg">
								<img class="img-responsive" src="images/landing/screen1.jpg" alt="">
								</a>
							</div>
						</div>
					</div>
				</div>									
				<div class="owl-controls clickable">
					<div class="owl-pagination">
						<div class="owl-page active">
							<span class=""></span>
						</div>
						<div class="owl-page">
							<span class=""></span>
						</div>
						<div class="owl-page">
							<span class=""></span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div><!--/screenshots-->

@endsection

@section('contact')

	<div id="contact" class="padding">
		<div class="container text-center">
			<div class="section-title wow fadeInDown" data-wow-duration="0.5s" data-wow-delay="0.1s" style="visibility: visible; animation-duration: 0.5s; animation-delay: 0.1s; animation-name: fadeInDown;">
				<img class="img-responsive" src="images/icons/t10.png" alt="">
				<h1>Send us a Message</h1>
			</div>
			<form id="main-contact-form" class="contact-form" name="contact-form" method="post" action="mailto:selena@sma.hk">
				<div class="row">
					<div class="col-sm-6">
						<div class="form-group wow fadeInDown" data-wow-duration="0.5s" data-wow-delay="0.3s" style="visibility: visible; animation-duration: 0.5s; animation-delay: 0.3s; animation-name: fadeInDown;">
							<input type="text" class="form-control" required="required" placeholder="Your Name">
						</div>
						<div class="form-group wow fadeInDown" data-wow-duration="0.5s" data-wow-delay="0.4s" style="visibility: visible; animation-duration: 0.5s; animation-delay: 0.4s; animation-name: fadeInDown;">
							<input type="email" class="form-control" required="required" placeholder="Your Email">
						</div>
						<div class="form-group wow fadeInDown" data-wow-duration="0.5s" data-wow-delay="0.5s" style="visibility: visible; animation-duration: 0.5s; animation-delay: 0.5s; animation-name: fadeInDown;">
							<input type="text" class="form-control" required="required" placeholder="Subject">
						</div>	
					</div>
					<div class="col-sm-6">
						 <div class="form-group wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.6s" style="visibility: visible; animation-duration: 0.5s; animation-delay: 0.6s; animation-name: fadeInUp;">
							<textarea name="message" id="message" required="required" class="form-control" rows="8" placeholder="Enter Message Here"></textarea>
						</div> 							
					</div>	
					<div class="form-group wow slideInUp" data-wow-duration="0.5s" data-wow-delay="0.7s" style="visibility: visible; animation-duration: 0.5s; animation-delay: 0.7s; animation-name: slideInUp;">
						<button type="submit" class="btn btn-primary btn-animated ">Submit</button>
					</div>
				</div>
			</form>
		</div>
	</div><!--/contact-->


@endsection

@section('footer')

	<footer id="footer">
		<div class="overlay-bg"></div>
		<div class="container">
			<div class="row">
				<div class="col-sm-7">
					<p>© Copyright 2015 <a href="#">Synergy Marketing</a>.</p>
				</div>
				<div class="col-sm-5">
					<ul class="list-inline footer-menu text-right">
						<li><a href="#">English(us)</a></li>
						<li><a href="#">Privacy</a></li>
						<li><a href="#">Terms</a></li>
						<li><a href="#">Cookies</a></li>
					</ul>
				</div>	
			</div>
		</div>
	</footer>


@endsection



