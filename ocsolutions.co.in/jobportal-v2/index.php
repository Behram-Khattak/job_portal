<!DOCTYPE html>
<!--[if IE]><![endif]-->
<!--[if IE 8 ]><html dir="ltr" lang="en" class="ie8"><![endif]-->
<!--[if IE 9 ]><html dir="ltr" lang="en" class="ie9"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html class="responsive" dir="ltr" lang="en">
<!--<![endif]-->
<?php
include "include/head.php";
?>
<body class="common-home">
<div class="header5">
<!-- header start here-->
<?php
include "include/header.php"
?>
<!-- header end here-->
</div><div id="slideshow0" class="owl-carousel" style="opacity: 1;">
		<div class="item">
				<a href="http://ocsolutions.co.in/jobportal/"><img src="image/cache/catalog/demo/banners/main-banner-1280x848.png" alt="Job Portal" class="img-responsive" /></a>
		<!-- search code start here -->
		<div class="slider3">
			<div class="container">
				<div class="slidercaption1">
					<h1 class="heading_one">Register & Find Your Job</h1>
					<div class="slider-caption">
						<div class="input-group">
							<!-- category code start here -->
							<input name="filter_title" class="form-control" value="" placeholder="Keyword" type="text">
							<!-- category code end here -->
									
							<!-- location code start here -->
							<select name="job_filter"id="input-limit" class="form-control selectpicker">
								<option value=""> --- Please Select --- </option>
																								<option value="64">Data Science &amp; Analist</option>
																								<option value="62">Car Driving</option>
																								<option value="65">Web &amp; Software</option>
																								<option value="63">Restaurant</option>
																								<option value="67">Digital Marketing</option>
																								<option value="66">Business Development</option>
																								<option value="68">Graphic Designing</option>
																								<option value="73">Mechanic Engineering</option>
															</select>
							<!-- location code end here -->
							<input name="filter_location" class="form-control" value="" placeholder="Job Location" type="text">
							<span>
								<button type="button" class="btnsrch" id="button-filter">Search</button>
							</span>
						</div>
					</div>
				</div>
				
			</div>
		</div>
		<!-- /.slider3 -->
		
		
		
		<!-- Static code start here -->
		<div class="bottom-img">
			<div class="container">
				<img src="catalog/view/theme/jobportal/image/new/Google-logo.png">
				<img src="catalog/view/theme/jobportal/image/new/Microsoft-Logo.png">
			</div>
		</div>
		<!-- Static code end here -->
		
		<!-- search code end here -->
	</div>
    	
</div>


<script type="text/javascript"><!--
$('#slideshow0').owlCarousel({
	items: 6,
	autoPlay: 3000,
	singleItem: true,
	navigation: true,
	navigationText: ['<i class="fa fa-chevron-left fa-5x"></i>', '<i class="fa fa-chevron-right fa-5x"></i>'],
	pagination: true
});
--></script>

<script type="text/javascript"><!--
   $('#button-filter').on('click', function() {
	var url = 'indexd902.html?route=job/joblist';

	var job_filter = $('select[name=\'job_filter\']').val();
	if (job_filter) {
		url += '&job_filter=' + encodeURIComponent(job_filter);
	}

	var filter_title = $('input[name=\'filter_title\']').val();
	if (filter_title) {
		url += '&filter_title=' + encodeURIComponent(filter_title);
	}

		var filter_search = $('input[name=\'filter_search\']').val();
	if (filter_search) {
		url += '&filter_search=' + encodeURIComponent(filter_search);
	}
	var filter_location = $('input[name=\'filter_location\']').val();
	if (filter_location) {
		url += '&filter_location=' + encodeURIComponent(filter_location);
	}

	location = url;
});
</script><div class="container">
	<div class="row">								<div id="content" class="col-sm-12"><div>
    <div class="achieve-content">
  <div class="row vertical-align">
    <div class="col-sm-6 col-md-4">
      <div class="job-img">
        <div class="image-card">
      	<img src="catalog/view/theme/jobportal/image/new/women.png" alt="Job">
        </div>
      </div>
    </div>
    <div class="col-sm-6 col-md-8">
     	<h1 class="heading_one">Find Million Of Jobs And</h1>
      	<h2 class="heading_two text-danger">Achieve Success</h2>
      	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
		dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas
		commodo viverra maecenas accumsan lacus vel facilisis.</p>
    </div>
  </div>
  <!-- /. achieve-content --></div></div>
<div>
    <div class="job-process">
  <h1 class="heading_one">Our Job <span class="text-danger"> Process </span></h1>
  <div class="row">
    <div class="col-sm-4">
      <div class="job-box">
      	<i class="fa fa-users top-icon" aria-hidden="true"></i>
        <h4 class="text-danger heading_four">Create Account</h4>
      	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmo tempor incididunt</p>
      	<a href="index8816.html?route=information/information&amp;information_id=4" class="btn btn-danger"> 
        Read More <i class="fa fa-angle-right" aria-hidden="true"></i>
      	</a>
      </div>
    </div>
    
    <div class="col-sm-4">
      <div class="job-box">
      	<i class="fa fa-search top-icon" aria-hidden="true"></i>
      	<h4 class="text-danger heading_four">Search Job</h4>
      	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmo tempor incididunt</p>
      	<a href="index8816.html?route=information/information&amp;information_id=4" class="btn btn-danger"> 
        Read More <i class="fa fa-angle-right" aria-hidden="true"></i>
      	</a>
      </div>
    </div>
    
    <div class="col-sm-4">
      <div class="job-box">
      	<i class="fa fa-file-text-o top-icon" aria-hidden="true"></i>
      	<h4 class="text-danger heading_four">Upload Resume</h4>
      	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmo tempor incididunt</p>
      	<a href="index8816.html?route=information/information&amp;information_id=4" class="btn btn-danger"> 
        Read More <i class="fa fa-angle-right" aria-hidden="true"></i>
      	</a>
      </div>
    </div>
  </div>
</div>
<!-- /. job-process --></div>
		</div>
	</div>
</div>

<div class="featured">
	<div class="container">
		<!-- featured start here -->
<h1 class="heading_one">Job For <span> You </span></h1>
<div class="clearfix"></div>
<div class="row">
  <div class="featured-job owl-carousel">
		<div class="product-layout col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="product-main">
			<div class="product-thumb transition">
				<div class="image">
					<a href="index967a.html?route=job/jobdetail&amp;job_id=2"><img src="image/cache/catalog/blog/company-logo-2-281x411.png" alt="Civil Engineer" title="Civil Engineer" class="img-responsive" /></a>
					
					<div class="buttons">
						<div class="open-down">
								 <a href="index967a.html?route=job/jobdetail&amp;job_id=2"><button type="button" class="rotate1">
								<i class="fa fa-search" aria-hidden="true"></i>
							</button></a>
							
							<h4> <a href="index967a.html?route=job/jobdetail&amp;job_id=2">Civil Engineer</a></h4>
						</div>
					</div>
					
				</div>
				<div class="caption">
					<h4> <a href="index967a.html?route=job/jobdetail&amp;job_id=2">Civil Engineer</a></h4>
			
					<ul class="list-unstyled">
						<li class="hide">
							<a><i class="fa fa-bookmark" aria-hidden="true"></i>Full Time</a>
						</li>
						<li>
							<a> patna</a>
						</li>
						
						<li>
							<a> </a>
						</li>
						
						<li>
							<a> Full Time</a>
						</li>
					</ul>
					
					<p class="hide">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alter...</p>
				</div>
				
				<div class="bottom-button">
					<a href="index967a.html?route=job/jobdetail&amp;job_id=2"><button type="button" class="btn btn-info1 hide">View More</button></a>
					<a href="index967a.html?route=job/jobdetail&amp;job_id=2"><button type="button" class="btn btn-info1">Apply Now</button></a>
				  <div class="clearfix"></div>	
				 
				</div>

			</div>
		
			<div class="image-hover">
				<div class="job-inner">
					<img src="image/cache/catalog/blog/company-logo-2-281x411.png" alt="Civil Engineer" title="Civil Engineer" class="img-responsive" />
					
					<div class="job-content">
						<h4> <a href="index967a.html?route=job/jobdetail&amp;job_id=2">Civil Engineer</a></h4>
						<a href="index967a.html?route=job/jobdetail&amp;job_id=2"><button type="button" class="btn btn-apply">Apply Now</button></a>
					</div>
				</div>
			</div>
			
		</div>
	</div>
		<div class="product-layout col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="product-main">
			<div class="product-thumb transition">
				<div class="image">
					<a href="indexa954.html?route=job/jobdetail&amp;job_id=3"><img src="image/cache/catalog/blog/company-logo-3-281x411.png" alt="Online Booking" title="Online Booking" class="img-responsive" /></a>
					
					<div class="buttons">
						<div class="open-down">
								 <a href="indexa954.html?route=job/jobdetail&amp;job_id=3"><button type="button" class="rotate1">
								<i class="fa fa-search" aria-hidden="true"></i>
							</button></a>
							
							<h4> <a href="indexa954.html?route=job/jobdetail&amp;job_id=3">Online Booking</a></h4>
						</div>
					</div>
					
				</div>
				<div class="caption">
					<h4> <a href="indexa954.html?route=job/jobdetail&amp;job_id=3">Online Booking</a></h4>
			
					<ul class="list-unstyled">
						<li class="hide">
							<a><i class="fa fa-bookmark" aria-hidden="true"></i>Full Time</a>
						</li>
						<li>
							<a> Mokama</a>
						</li>
						
						<li>
							<a> </a>
						</li>
						
						<li>
							<a> Full Time</a>
						</li>
					</ul>
					
					<p class="hide">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alter...</p>
				</div>
				
				<div class="bottom-button">
					<a href="indexa954.html?route=job/jobdetail&amp;job_id=3"><button type="button" class="btn btn-info1 hide">View More</button></a>
					<a href="indexa954.html?route=job/jobdetail&amp;job_id=3"><button type="button" class="btn btn-info1">Apply Now</button></a>
				  <div class="clearfix"></div>	
				 
				</div>

			</div>
		
			<div class="image-hover">
				<div class="job-inner">
					<img src="image/cache/catalog/blog/company-logo-3-281x411.png" alt="Online Booking" title="Online Booking" class="img-responsive" />
					
					<div class="job-content">
						<h4> <a href="indexa954.html?route=job/jobdetail&amp;job_id=3">Online Booking</a></h4>
						<a href="indexa954.html?route=job/jobdetail&amp;job_id=3"><button type="button" class="btn btn-apply">Apply Now</button></a>
					</div>
				</div>
			</div>
			
		</div>
	</div>
		<div class="product-layout col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="product-main">
			<div class="product-thumb transition">
				<div class="image">
					<a href="indexab52.html?route=job/jobdetail&amp;job_id=4"><img src="image/cache/catalog/blog/company-logo-5-281x411.png" alt="Php Developer" title="Php Developer" class="img-responsive" /></a>
					
					<div class="buttons">
						<div class="open-down">
								 <a href="indexab52.html?route=job/jobdetail&amp;job_id=4"><button type="button" class="rotate1">
								<i class="fa fa-search" aria-hidden="true"></i>
							</button></a>
							
							<h4> <a href="indexab52.html?route=job/jobdetail&amp;job_id=4">Php Developer</a></h4>
						</div>
					</div>
					
				</div>
				<div class="caption">
					<h4> <a href="indexab52.html?route=job/jobdetail&amp;job_id=4">Php Developer</a></h4>
			
					<ul class="list-unstyled">
						<li class="hide">
							<a><i class="fa fa-bookmark" aria-hidden="true"></i>Part Time</a>
						</li>
						<li>
							<a> mandi</a>
						</li>
						
						<li>
							<a> </a>
						</li>
						
						<li>
							<a> Part Time</a>
						</li>
					</ul>
					
					<p class="hide">Get A Collection Of Online File Templates All In One App W/ YourTemplateFinder! Customize Templates ...</p>
				</div>
				
				<div class="bottom-button">
					<a href="indexab52.html?route=job/jobdetail&amp;job_id=4"><button type="button" class="btn btn-info1 hide">View More</button></a>
					<a href="indexab52.html?route=job/jobdetail&amp;job_id=4"><button type="button" class="btn btn-info1">Apply Now</button></a>
				  <div class="clearfix"></div>	
				 
				</div>

			</div>
		
			<div class="image-hover">
				<div class="job-inner">
					<img src="image/cache/catalog/blog/company-logo-5-281x411.png" alt="Php Developer" title="Php Developer" class="img-responsive" />
					
					<div class="job-content">
						<h4> <a href="indexab52.html?route=job/jobdetail&amp;job_id=4">Php Developer</a></h4>
						<a href="indexab52.html?route=job/jobdetail&amp;job_id=4"><button type="button" class="btn btn-apply">Apply Now</button></a>
					</div>
				</div>
			</div>
			
		</div>
	</div>
		<div class="product-layout col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="product-main">
			<div class="product-thumb transition">
				<div class="image">
					<a href="indexdfe2.html?route=job/jobdetail&amp;job_id=1"><img src="image/cache/catalog/blog/company-logo-1-281x411.png" alt="Home Bulider" title="Home Bulider" class="img-responsive" /></a>
					
					<div class="buttons">
						<div class="open-down">
								 <a href="indexdfe2.html?route=job/jobdetail&amp;job_id=1"><button type="button" class="rotate1">
								<i class="fa fa-search" aria-hidden="true"></i>
							</button></a>
							
							<h4> <a href="indexdfe2.html?route=job/jobdetail&amp;job_id=1">Home Bulider</a></h4>
						</div>
					</div>
					
				</div>
				<div class="caption">
					<h4> <a href="indexdfe2.html?route=job/jobdetail&amp;job_id=1">Home Bulider</a></h4>
			
					<ul class="list-unstyled">
						<li class="hide">
							<a><i class="fa fa-bookmark" aria-hidden="true"></i>Full Time</a>
						</li>
						<li>
							<a> chandigarh</a>
						</li>
						
						<li>
							<a> </a>
						</li>
						
						<li>
							<a> Full Time</a>
						</li>
					</ul>
					
					<p class="hide">House and buliding New create Expirence Bulider...</p>
				</div>
				
				<div class="bottom-button">
					<a href="indexdfe2.html?route=job/jobdetail&amp;job_id=1"><button type="button" class="btn btn-info1 hide">View More</button></a>
					<a href="indexdfe2.html?route=job/jobdetail&amp;job_id=1"><button type="button" class="btn btn-info1">Apply Now</button></a>
				  <div class="clearfix"></div>	
				 
				</div>

			</div>
		
			<div class="image-hover">
				<div class="job-inner">
					<img src="image/cache/catalog/blog/company-logo-1-281x411.png" alt="Home Bulider" title="Home Bulider" class="img-responsive" />
					
					<div class="job-content">
						<h4> <a href="indexdfe2.html?route=job/jobdetail&amp;job_id=1">Home Bulider</a></h4>
						<a href="indexdfe2.html?route=job/jobdetail&amp;job_id=1"><button type="button" class="btn btn-apply">Apply Now</button></a>
					</div>
				</div>
			</div>
			
		</div>
	</div>
		
	
	
	
		<div class="product-layout col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="product-main">
			<div class="product-thumb transition">
				<div class="image">
					<a href="index967a.html?route=job/jobdetail&amp;job_id=2"><img src="image/cache/catalog/blog/company-logo-2-281x411.png" alt="Civil Engineer" title="Civil Engineer" class="img-responsive" /></a>
					
					<div class="buttons">
						<div class="open-down">
								<a href="index9f5a.html?route=job/quick&amp;job_id=2" data-toggle="modal" class="quicklink" data-target="#quick_link"><button type="button" class="rotate1">
								<i class="fa fa-search" aria-hidden="true"></i>
							</button></a>
							
							<h4> <a href="index967a.html?route=job/jobdetail&amp;job_id=2">Civil Engineer</a></h4>
						</div>
					</div>
					
				</div>
				<div class="caption">
					<h4> <a href="index967a.html?route=job/jobdetail&amp;job_id=2">Civil Engineer</a></h4>
					<ul class="list-unstyled">
						<li class="hide">
							<a><i class="fa fa-bookmark" aria-hidden="true"></i>Full Time</a>
						</li>
						<li>
							<a> patna</a>
						</li>
						
						<li>
							<a> </a>
						</li>
						
						<li>
							<a> Full Time</a>
						</li>
					</ul>
					<p class="hide">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alter...</p>
				</div>

				<div class="bottom-button">
					<a href="index967a.html?route=job/jobdetail&amp;job_id=2"><button type="button" class="btn btn-info1 hide">View More</button></a>
					<a href="index967a.html?route=job/jobdetail&amp;job_id=2"><button type="button" class="btn btn-info1">Apply Now</button></a>
				  <div class="clearfix"></div>	
				 
				</div>
			</div>
		
	
			<div class="image-hover">
				<div class="job-inner">
					<img src="image/cache/catalog/blog/company-logo-2-281x411.png" alt="Civil Engineer" title="Civil Engineer" class="img-responsive" />
					
					<div class="job-content">
						<h4> <a href="index967a.html?route=job/jobdetail&amp;job_id=2">Civil Engineer</a></h4>
						<a href="index967a.html?route=job/jobdetail&amp;job_id=2"><button type="button" class="btn btn-apply">Apply Now</button></a>
					</div>
				</div>
			</div>
	
		</div>
	</div>
		<div class="product-layout col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="product-main">
			<div class="product-thumb transition">
				<div class="image">
					<a href="indexfe6c.html?route=job/jobdetail&amp;job_id=8"><img src="image/cache/catalog/blog/company-logo-5-281x411.png" alt="software ??developer" title="software ??developer" class="img-responsive" /></a>
					
					<div class="buttons">
						<div class="open-down">
								<a href="index73b2.html?route=job/quick&amp;job_id=8" data-toggle="modal" class="quicklink" data-target="#quick_link"><button type="button" class="rotate1">
								<i class="fa fa-search" aria-hidden="true"></i>
							</button></a>
							
							<h4> <a href="indexfe6c.html?route=job/jobdetail&amp;job_id=8">software ??developer</a></h4>
						</div>
					</div>
					
				</div>
				<div class="caption">
					<h4> <a href="indexfe6c.html?route=job/jobdetail&amp;job_id=8">software ??developer</a></h4>
					<ul class="list-unstyled">
						<li class="hide">
							<a><i class="fa fa-bookmark" aria-hidden="true"></i>Part Time</a>
						</li>
						<li>
							<a> ludhiana</a>
						</li>
						
						<li>
							<a> </a>
						</li>
						
						<li>
							<a> Part Time</a>
						</li>
					</ul>
					<p class="hide">php  developer ...</p>
				</div>

				<div class="bottom-button">
					<a href="indexfe6c.html?route=job/jobdetail&amp;job_id=8"><button type="button" class="btn btn-info1 hide">View More</button></a>
					<a href="indexfe6c.html?route=job/jobdetail&amp;job_id=8"><button type="button" class="btn btn-info1">Apply Now</button></a>
				  <div class="clearfix"></div>	
				 
				</div>
			</div>
		
	
			<div class="image-hover">
				<div class="job-inner">
					<img src="image/cache/catalog/blog/company-logo-5-281x411.png" alt="software ??developer" title="software ??developer" class="img-responsive" />
					
					<div class="job-content">
						<h4> <a href="indexfe6c.html?route=job/jobdetail&amp;job_id=8">software ??developer</a></h4>
						<a href="indexfe6c.html?route=job/jobdetail&amp;job_id=8"><button type="button" class="btn btn-apply">Apply Now</button></a>
					</div>
				</div>
			</div>
	
		</div>
	</div>
		
</div>

</div>
<!-- featured end here -->
<script type="text/javascript">
$('.featured-job').owlCarousel({
	items : 4,
    itemsDesktop : [1000,3],
    itemsDesktopSmall : [900,2],
    itemsTablet: [600,1], 
    itemsMobile : 1, 
	autoPlay: false,
	navigation: true,
	navigationText: ['<i class="fa fa-caret-left fa-5x fa1"></i>', '<i class="fa fa-caret-right fa-5x fa2"></i>'],
	pagination:false
});
</script>	</div>
</div>

<div class="container">
	<div class="row">
		<div class="col-sm-12">
		<div>
    <div class="our-company">
  <div class="row">
    <div class="col-sm-7">
      <h1 class="heading_one">We are Trusted by Popular</h1>
      <h2 class="text-danger heading_two">800+ Company</h2>
      <p class="more">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod labore tempor incididunt ut
labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra
maecenas accumsan lacus vel facilisis. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
eiusmod tempor suspendisse ultrices incididunt ut labore et dolor magna aliqua. accumsan tempor Quis ipsum
Quis ipsum labore suspendisse ultrices gravida . sed do eiusmod tempor incididunt ut labore et dolore eiusmod labore tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices magna aliqua. </p>
    </div>
    <div class="col-sm-5">
      <ul class="list-inline">
        <li><a href="index9328.html?route=common/home"><img src="catalog/view/theme/jobportal/image/new/brand9.png" alt="Logo"></a></li>
        <li><a href="index9328.html?route=common/home"><img src="catalog/view/theme/jobportal/image/new/brand10.png" alt="Logo"></a></li>
        <li><a href="index9328.html?route=common/home"><img src="catalog/view/theme/jobportal/image/new/brand11.png" alt="Logo"></a></li>
        <li><a href="index9328.html?route=common/home"><img src="catalog/view/theme/jobportal/image/new/brand12.png" alt="Logo"></a></li>
        <li><a href="index9328.html?route=common/home"><img src="catalog/view/theme/jobportal/image/new/brand1.png" alt="Logo"></a></li>
        <li><a href="index9328.html?route=common/home"><img src="catalog/view/theme/jobportal/image/new/brand2.png" alt="Logo"></a></li>
		<li><a href="index9328.html?route=common/home"><img src="catalog/view/theme/jobportal/image/new/brand3.png" alt="Logo"></a></li>
		<li><a href="index9328.html?route=common/home"><img src="catalog/view/theme/jobportal/image/new/brand4.png" alt="Logo"></a></li>
		<li><a href="index9328.html?route=common/home"><img src="catalog/view/theme/jobportal/image/new/brand5.png" alt="Logo"></a></li>
		<li><a href="index9328.html?route=common/home"><img src="catalog/view/theme/jobportal/image/new/brand6.png" alt="Logo"></a></li>
        <li><a href="index9328.html?route=common/home"><img src="catalog/view/theme/jobportal/image/new/brand7.png" alt="Logo"></a></li>
        <li><a href="index9328.html?route=common/home"><img src="catalog/view/theme/jobportal/image/new/brand8.png" alt="Logo"></a></li>
        <li><a href="index9328.html?route=common/home"><img src="catalog/view/theme/jobportal/image/new/brand9.png" alt="Logo"></a></li>
        <li><a href="index9328.html?route=common/home"><img src="catalog/view/theme/jobportal/image/new/brand10.png" alt="Logo"></a></li>
        <li><a href="index9328.html?route=common/home"><img src="catalog/view/theme/jobportal/image/new/brand11.png" alt="Logo"></a></li>
        <li><a href="index9328.html?route=common/home"><img src="catalog/view/theme/jobportal/image/new/brand12.png" alt="Logo"></a></li>
      </ul>
    </div>
  </div>
</div>
<!-- /.our-company --></div>
</div>
	</div>
</div>

<!-- testimonial start here -->
<link href="catalog/view/theme/jobportal/stylesheet/testimonial.css" rel="stylesheet">

<div class="container hidden-xs">
<div class="our-testimonial">
	<h1 class="heading_one">What says Job Seeker <span> About Us <span></h1>
	
	<div class="testimonial-main" style="background:url('image/cache/catalog/testi-bg-1178x499.png'); background-repeat:no-repeat;min-height:499px">
						<div class="testi1">
			<div class="popover_wrapper">
				<img src="image/cache/catalog/testimonial-99x99.png" alt="test1" title="test1" class="img-responsive" />
				<div class="popover_content">
					<h5>test1</h5>
					<p>There are many variations of passages Lorem Ipsum available, temporary words ..</p>
										<div class="rating">
															<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
																				<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
																				<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
																				<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
																				<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
															</div>
									</div>
			</div>
		</div>
						<div class="testi2">
			<div class="popover_wrapper">
				<img src="image/cache/catalog/Koala-99x99.jpg" alt="test2" title="test2" class="img-responsive" />
				<div class="popover_content">
					<h5>test2</h5>
					<p>There are many variations of passages Lorem Ipsum available, temporary  words ..</p>
										<div class="rating">
															<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
																				<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
																				<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
																				<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
																				<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
															</div>
									</div>
			</div>
		</div>
						<div class="testi3">
			<div class="popover_wrapper">
				<img src="image/cache/catalog/testimonial-99x99.png" alt="test3" title="test3" class="img-responsive" />
				<div class="popover_content">
					<h5>test3</h5>
					<p>There are many variations of passages Lorem Ipsum available, temporary words ..</p>
										<div class="rating">
															<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
																				<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
																				<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
																				<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
																				<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
															</div>
									</div>
			</div>
		</div>
						<div class="testi4">
			<div class="popover_wrapper">
				<img src="image/cache/catalog/testimonial-99x99.png" alt="demo" title="demo" class="img-responsive" />
				<div class="popover_content">
					<h5>demo</h5>
					<p>There are many variations of passages Lorem Ipsum available, temporary words ..</p>
										<div class="rating">
															<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
																				<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
																				<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
																				<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
																				<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
															</div>
									</div>
			</div>
		</div>
						<div class="testi5">
			<div class="popover_wrapper">
				<img src="image/cache/catalog/Penguins-99x99.jpg" alt="smith" title="smith" class="img-responsive" />
				<div class="popover_content">
					<h5>smith</h5>
					<p>lorem ipsum dolor sit ameit lorem ipsum dolor sit ameit lorem ipsum dolor sit ameit lorem ipsum dolor sit ameit..</p>
										<div class="rating">
															<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
																				<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
																				<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
																				<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
																				<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
															</div>
									</div>
			</div>
		</div>
						<div class="testi6">
			<div class="popover_wrapper">
				<img src="image/cache/catalog/Chrysanthemum-99x99.jpg" alt="demo test" title="demo test" class="img-responsive" />
				<div class="popover_content">
					<h5>demo test</h5>
					<p>demo testing demo testing demo testing demo testing demo testing demo testing demo testing demo testing demo testing..</p>
										<div class="rating">
															<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
																				<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
																				<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
																				<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
																				<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
															</div>
									</div>
			</div>
		</div>
					</div>
</div>
</div>	
<style>
.testimonial-main{padding:15px 0;margin:10px 0;}
.testimonial-main h1,.information-testimonial_list h2 span{color:#282b4a !important;}
.testimonial-main .name{color:#282b4a;}
.testimonial-main .caption p{color:#4b4b4b;}
.testimonial-main .firstpart,.leftdesign .caption p{background:;}
.testimonial-main .leftdesign .caption p::after{border-color: rgba(0, 0, 0, 0);}
.btn-testi{font-size:14px;background:;border-color:;color:;}
.btn-testi:hover{background:;border-color:;color: !important;}
.testimonial-main .owl-carousel .owl-buttons .fa{color:;background:;padding:5px;}
</style>	
<!-- testimonial end here -->
<div class="container">
	<div class="row">
  <div class="heading_one">Our Latest  <span>Blog </span></div>
  <div id="latestblog" class="owl-carousel">
		<div class="product-layout col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="product-thumb">
			<div class="image">
				<a href="index0129.html?route=tmdblog/blog&amp;blog_id=17"><img src="image/cache/catalog/blog/2221-1170x700.png" alt="New days Insipiration.." title="New days Insipiration.." class="img-responsive" /></a>
			</div>
		    <div class="caption">
			  <h4><a href="index0129.html?route=tmdblog/blog&amp;blog_id=17">New days Insipiration..</a></h4>
			  <div class="description"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. sed do eiusmodLorem ipsum dolor sir amet, consectetur adipiscing elit, sed do eiusm...<a href="index0129.html?route=tmdblog/blog&amp;blog_id=17">Read more</a></p></div>
				<div class="right-icon">
					<a href="index0129.html?route=tmdblog/blog&amp;blog_id=17"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
				</div>
		    </div>
       </div>
	</div>
		<div class="product-layout col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="product-thumb">
			<div class="image">
				<a href="indexe4b1.html?route=tmdblog/blog&amp;blog_id=16"><img src="image/cache/catalog/blog/2221-1170x700.png" alt="Most Important.." title="Most Important.." class="img-responsive" /></a>
			</div>
		    <div class="caption">
			  <h4><a href="indexe4b1.html?route=tmdblog/blog&amp;blog_id=16">Most Important..</a></h4>
			  <div class="description"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. sed do eiusmodLorem ipsum dolor sir amet, consectetur adipiscing elit, sed do eiusm...<a href="indexe4b1.html?route=tmdblog/blog&amp;blog_id=16">Read more</a></p></div>
				<div class="right-icon">
					<a href="indexe4b1.html?route=tmdblog/blog&amp;blog_id=16"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
				</div>
		    </div>
       </div>
	</div>
		<div class="product-layout col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="product-thumb">
			<div class="image">
				<a href="index14a3.html?route=tmdblog/blog&amp;blog_id=15"><img src="image/cache/catalog/blog/2221-1170x700.png" alt="New Generation.." title="New Generation.." class="img-responsive" /></a>
			</div>
		    <div class="caption">
			  <h4><a href="index14a3.html?route=tmdblog/blog&amp;blog_id=15">New Generation..</a></h4>
			  <div class="description"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. sed do eiusmodLorem ipsum dolor sir amet, consectetur adipiscing elit, sed do eiusm...<a href="index14a3.html?route=tmdblog/blog&amp;blog_id=15">Read more</a></p></div>
				<div class="right-icon">
					<a href="index14a3.html?route=tmdblog/blog&amp;blog_id=15"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
				</div>
		    </div>
       </div>
	</div>
		<div class="product-layout col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="product-thumb">
			<div class="image">
				<a href="index9eff.html?route=tmdblog/blog&amp;blog_id=14"><img src="image/cache/catalog/blog/2221-1170x700.png" alt="New days Insipiration.." title="New days Insipiration.." class="img-responsive" /></a>
			</div>
		    <div class="caption">
			  <h4><a href="index9eff.html?route=tmdblog/blog&amp;blog_id=14">New days Insipiration..</a></h4>
			  <div class="description"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. sed do eiusmodLorem ipsum dolor sir amet, consectetur adipiscing elit, sed do eiusm...<a href="index9eff.html?route=tmdblog/blog&amp;blog_id=14">Read more</a></p></div>
				<div class="right-icon">
					<a href="index9eff.html?route=tmdblog/blog&amp;blog_id=14"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
				</div>
		    </div>
       </div>
	</div>
	    </div>
</div>
<script type="text/javascript"><!--
$('#latestblog').owlCarousel({
    items: 3,
	autoPlay: false,
	navigation: false,
	navigationText: ['<i class="fa fa-chevron-left fa-5x"></i>', '<i class="fa fa-chevron-right fa-5x"></i>'],
	pagination:false,
	itemsDesktop : [1199, 3],
    itemsDesktopSmall : [979, 2],
    itemsTablet : [768, 1]
});
--></script></div>

<div class="latestcandidate hide">
	<div class="container">
			</div>
</div>
	
<div class="container">
	<div class="row">
			</div>
</div>
<?php
include "include/footer.php";
?>