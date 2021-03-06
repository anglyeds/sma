@extends('master')

@section('home')

	<div id="home-section" class="image-bg" style="height:1000px;">

		<div class="container">
			<div class="home-bg"></div>

			<img class="img-responsive wow fadeInDown" data-wow-duration="1.5s" data-wow-delay="0.5s" src="{{ URL::asset('images/landing/background/tagline03.png') }}" alt="" >
			<div class="home-content padding">
				<div class="button">

				</div>
				<div class="app-icons text-center">
					<ul class="list-inline">

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
                
                <a  href="#home-section">
					<img class="main-logo img-responsive" src="{{ URL::asset('images/landing/background/synergymarketinglogo.png') }}" alt="" style="width:135px;height:60px;">
                </a> 

            </div> 
            <nav id="mainmenu" class="collapse navbar-collapse navbar-right" aria-expanded="false">         
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#home-section"><b>HOME</b></a></li>
                    <li class=""><a href="#about"><b>About</b></a></li>
                    <li class=""><a href="#services"><b>Philosophy</b></a></li>
                    <li class=""><a href="#mediums"><b>services</b></a></li>
                    <li class=""><a href="#network"><b>Innovation</b></a></li>
                    <li class=""><a href="#innovation"><b>Network</b></a></li>
                    <li class=""><a href="#career"><b>Career</b></a></li>
                    <li class=""><a href="#contact"><b>Showcases</b></a></li>
                    <li class=""><a href="{{ url('/home') }}"><b>Login</b></a></li>
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
	      <h1 class="text-center"> <b>SMA GROUP MILESTONES</b></h1>
	      <backquote>
	        Synergy Marketing (Asia) has come a long way since our inception in 2002 in Hong Kong. We have evolved to become a leading and preferred in-store marketing strategist. Combining industry expertise with creative and innovative solutions, we are able to develop and implement effective marketing and communications strategies to reach our clients’ targeted audience.
	      </backquote>
	      <ul class="timeline">
	        <li>
	          <div class="timeline-image">
	            <img class="img-circle img-responsive" src="{{ URL::asset('images/landing/1_creditcard.png') }}" alt="">
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
	            <img class="img-circle img-responsive" src="{{ URL::asset('images/landing/2_TV.png') }}" alt="">
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
	            <img class="img-circle img-responsive" src="{{ URL::asset('images/landing/3_radio.png') }}" alt="">
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
	            <img class="img-circle img-responsive" src="{{ URL::asset('images/landing/4_media.png') }}" alt="">
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
	            <img class="img-circle img-responsive" src="{{ URL::asset('images/landing/5_sampling.png') }}" alt="">
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
	            <img class="img-circle img-responsive" src="{{ URL::asset('images/landing/6_media_sin.png') }}" alt="">
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
	            <img class="img-circle img-responsive" src="{{ URL::asset('images/landing/7_tv_mallprinting.png') }}" alt="">
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
			<img class="img-responsive" src="{{ URL::asset('images/icons/lightbulb_white2.png') }}" style="width:110px; height:110px;" alt="">
			<h1>Company Philosophy</h1>
		</div>
		<div class="special-features">
			<div class="row"> 
				<div class="col-sm-6">
					<img class="img-responsive" src="{{ URL::asset('images/landing/background/motto1.png') }}" alt="">
				</div>
				<div class="col-sm-6">
					<backquote id="paragraph">
						<p class="text-justify"><br/>
						<q class="vintage-font">With the “Passion For Excellence” philosophy, our dedicated teams work tirelessly to deliver outstanding results for our clients. Talk to us today, and find out how we can assist you in achieving your desired results.
						<br/>
						With 15 years of impeccable track record, Synergy Marketing (Asia) ltd is the leading (and largest) in-store marketing services provider in Hong Kong. Our key strength lies in our dedicated teams, research and development, and most importantly, swift and reliable service. 
						<br/>
						</q>
						</p>
						
					</backquote>
				</div>

			</div>
		</div>
	</div>
</div><!--/#whats-special-->

@endsection

@section('mediums')

<div id="mediums" class="padding">
<div class="container">
		<div class="row">
			<div class="text-center section-title wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.1s" style="visibility: visible; animation-duration: 0.5s; animation-delay: 0.1s; animation-name: fadeInUp;">
				<img class="img-responsive" src="{{ URL::asset('images/icons/t4.png') }}" alt="">
				<h1>Our Services</h1>
			</div>				
		</div>
		<div class="all-features text-center">
			<div class="row">
				<div class="col-sm-3">
					<div class="feature wow fadeInDown" data-wow-duration="0.5s" data-wow-delay="0.2s" style="visibility: visible; animation-duration: 0.5s; animation-delay: 0.2s; animation-name: fadeInDown;">							
						<img class="img-responsive" src="{{ URL::asset('images/landing/services/1_media.png') }}" alt="">
						<h2>Media</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing</p>
					</div>
					<div class="feature wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.3s" style="visibility: visible; animation-duration: 0.5s; animation-delay: 0.3s; animation-name: fadeInUp;">							
						<img class="img-responsive" src="{{ URL::asset('images/landing/services/2_brandambassador.png') }}" alt="">
						<h2>Brand Ambassador</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing</p>
					</div>
				</div>
				<div class="col-sm-3">
					<div class="feature wow fadeInDown" data-wow-duration="0.5s" data-wow-delay="0.3s" style="visibility: visible; animation-duration: 0.5s; animation-delay: 0.3s; animation-name: fadeInDown;">							
						<img class="img-responsive" src="{{ URL::asset('images/landing/services/3_merchandising.png') }}" alt="">
						<h2>Merchandising</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing</p>
					</div>
					<div class="feature wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.4s" style="visibility: visible; animation-duration: 0.5s; animation-delay: 0.4s; animation-name: fadeInUp;">							
						<img class="img-responsive" src="{{ URL::asset('images/landing/services/4_retails.png') }}" alt="">
						<h2>Retail Management</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing</p>
					</div>
				</div>
				<div class="col-sm-3">
					<div class="feature wow fadeInDown" data-wow-duration="0.5s" data-wow-delay="0.4s" style="visibility: visible; animation-duration: 0.5s; animation-delay: 0.4s; animation-name: fadeInDown;">							
						<img class="img-responsive" src="{{ URL::asset('images/landing/services/5_research.png') }}" alt="">
						<h2>Research</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing</p>
					</div>
					<div class="feature wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.5s" style="visibility: visible; animation-duration: 0.5s; animation-delay: 0.5s; animation-name: fadeInUp;">							
						<img class="img-responsive" src="{{ URL::asset('images/landing/services/6_events.png') }}" alt="">
						<h2>Event</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing</p>
					</div>
				</div>
				<div class="col-sm-3">
					<div class="feature wow fadeInDown" data-wow-duration="0.5s" data-wow-delay="0.5s" style="visibility: visible; animation-duration: 0.5s; animation-delay: 0.5s; animation-name: fadeInDown;">							
						<img class="img-responsive" src="{{ URL::asset('images/landing/services/7_production.png') }}" alt="">
						<h2>Creative Production</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing</p>
					</div>
					<div class="feature wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.6s" style="visibility: visible; animation-duration: 0.5s; animation-delay: 0.6s; animation-name: fadeInUp;">							
						<img class="img-responsive" src="{{ URL::asset('images/landing/services/8_premiums.png') }}" alt="">
						<h2>Premium</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing</p>
					</div>
				</div>
				
			</div>
		</div>
	</div>
	
</div><!--/#compatibility-->

@endsection

@section('network')

<div id="network" class="padding image-bg">

	<div class="overlay-bg"></div>
		
	<div class="container text-center">
		<div class="section-title wow fadeInDown" data-wow-duration="0.5s" data-wow-delay="0.1s" style="visibility: visible; animation-duration: 0.5s; animation-delay: 0.1s; animation-name: fadeInDown;">
			<img class="img-responsive" src="{{ URL::asset('images/icons/t3.png') }}" alt="">
			<h1>Description with video</h1>
		</div>
		<div class="video wow zoomIn" data-wow-duration="0.5s" data-wow-delay="0.3s" style="visibility: visible; animation-duration: 0.5s; animation-delay: 0.3s; animation-name: zoomIn;">
			<a class="video-link" href="https://vimeo.com/124415606"><i class="fa fa-youtube-play"></i></a>
			<img class="img-responsive" src="{{ URL::asset('images/landing/video.png') }}" alt="">
		</div>
	</div>
</div><!--/#video-section-->

@endsection

@section('innovation')

<div id="innovation" class="padding">
	<div class="container">
		<div class="section-title text-center wow fadeInDown" data-wow-duration="0.5s" data-wow-delay="0.1s" style="visibility: visible; animation-duration: 0.5s; animation-delay: 0.1s; animation-name: fadeInDown;">
			<img class="img-responsive" src="{{ URL::asset('images/icons/t2.png') }}" alt="">
			<h1 >Our Network</h1>
		</div>
		<div class="text-center" style="padding-bottom: 60px">

			<div class="row" style="height:150px; ">
					<div class="col-sm-3">
						<img class="img-responsive center-block" src="{{ URL::asset('images/landing/partner/1_wellcome1.png') }}" alt="">
					</div>
					<div class="col-sm-3" >
						<img class="img-responsive center-block" src="{{ URL::asset('images/landing/partner/2_parknshop.png') }}" alt="">
					</div>
					<div class="col-sm-3" >
						<img class="img-responsive center-block" src="{{ URL::asset('images/landing/partner/3_coldstorage.png') }}" alt="">
					</div>
					<div class="col-sm-3" >
						<img class="img-responsive center-block" src="{{ URL::asset('images/landing/partner/4_fairprice.png') }}" alt="">
					</div>
			</div>
			<div class="row" style="height:150px;">
					<div class="col-sm-3" >
						<img class="img-responsive center-block" src="{{ URL::asset('images/landing/partner/5_giant.png') }}" alt="">
					</div>
					<div class="col-sm-3" >
						<img class="img-responsive center-block" src="{{ URL::asset('images/landing/partner/6_carrefour.png') }}" alt="">
					</div>
					<div class="col-sm-3" >
						<img class="img-responsive center-block" src="{{ URL::asset('images/landing/partner/7_mannings.png') }}" alt="">
					</div>
					<div class="col-sm-3" >
						<img class="img-responsive center-block" src="{{ URL::asset('images/landing/partner/8_watsons.png') }}" alt="">
					</div>
			</div>

			<div class="row" style="height:150px;">
					<div class="col-sm-3" >
						<img class="img-responsive center-block" src="{{ URL::asset('images/landing/partner/9_sasa.png') }}" alt="">
					</div>
					<div class="col-sm-3" >
						<img class="img-responsive center-block" src="{{ URL::asset('images/landing/partner/10_7-11.png') }}" alt="">
					</div>
					<div class="col-sm-3" >
						<img class="img-responsive center-block" src="{{ URL::asset('images/landing/partner/11_circlek.png') }}" alt="">
					</div>
					<div class="col-sm-3" >
						<img class="img-responsive center-block" src="{{ URL::asset('images/landing/partner/12_aeon.png') }}" alt="">
					</div>
			</div>

			<div class="row" style="height:150px;">
					<div class="col-sm-3" >
						<img class="img-responsive center-block" src="{{ URL::asset('images/landing/partner/13_yata.png') }}" alt="">
					</div>
					<div class="col-sm-3" >
						<img class="img-responsive center-block" src="{{ URL::asset('images/landing/partner/14_piago.png') }}" alt="">
					</div>
					<div class="col-sm-3" >
						<img class="img-responsive center-block" src="{{ URL::asset('images/landing/partner/15_apita.png') }}" alt="">
					</div>
					<div class="col-sm-3" >
						<img class="img-responsive center-block" src="{{ URL::asset('images/landing/partner/16_sogo.png') }}" alt="">
					</div>
			</div>						
		</div>	
	</div>


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
						<div class="owl-item" style="width: 235px; float:left">
							<div class="career wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.2s" style="visibility: visible; animation-duration: 0.5s; animation-delay: 0.2s; animation-name: fadeInUp;">
								<a class="image-link" href="images/landing/screen1.jpg">
								<img class="img-responsive" src="images/landing/screen1.jpg" alt="">
								</a>
							</div>
						</div>

						<div class="owl-item" style="width: 235px; float:left">
							<div class="career wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.3s" style="visibility: visible; animation-duration: 0.5s; animation-delay: 0.3s; animation-name: fadeInUp;">
								<a class="image-link" href="images/landing/screen2.jpg">
								<img class="img-responsive" src="images/landing/screen2.jpg" alt="">
								</a>
							</div>
						</div>

						<div class="owl-item" style="width: 235px; float:left">
							<div class="career wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.4s" style="visibility: visible; animation-duration: 0.5s; animation-delay: 0.4s; animation-name: fadeInUp;">
								<a class="image-link" href="images/landing/screen3.jpg">
								<img class="img-responsive" src="images/landing/screen3.jpg" alt="">
								</a>
							</div>
						</div>

						<div class="owl-item" style="width: 235px; float:left">
							<div class="career wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.5s" style="visibility: visible; animation-duration: 0.5s; animation-delay: 0.5s; animation-name: fadeInUp;">
								<a class="image-link" href="images/landing/screen4.jpg">
								<img class="img-responsive" src="images/landing/screen4.jpg" alt="">
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

					</div><!-- owl-wrapper -->
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



