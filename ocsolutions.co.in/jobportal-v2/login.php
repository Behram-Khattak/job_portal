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
<body class="employ-login">
<div class="header5">
<!-- header start here-->
<?php
include "include/header.php";
?>
<!-- header end here-->
</div><!-- Static code start here -->
<div class="top-breadcrumb">
	<div class="container">
		<div class="top-content">
			<h1 class="heading_one">Your dream Job</h1>
			<h2 class="heading_two text-danger">Is Near to You</h2>
		</div>
	</div>
</div>	
<!-- Static code end here -->

<div class="container">
		<div class="row">            	
			<div id="content" class="col-sm-12 login-form">		
				<div class="row ourform">
			<div class="col-md-6 col-xs-12 col-sm-8 col-sm-offset-2 col-md-offset-3">
				<h3>Login</h3>
				<div class="form">
					<ul class="nav nav-tabs jobprofile">
						<li class="active"><a href="#tab-employee" data-toggle="tab">Employee</a></li>
						<li><a href="#tab-company" data-toggle="tab">Company</a></li>
					</ul>
					<div class="tab-content">
						<div class="tab-pane active" id="tab-employee">
							<div id="empldanger"></div>
							<div class="candidateemail">
								<div class="form-group">
									<div class="input-effect">
										<input type="text" name="email" value="" id="input-email" class="form-control" />
										<label class="control-label" for="input-email">
										E-Mail Address</label>
										<i class="fa fa-envelope-o" aria-hidden="true"></i>
									</div>
								</div>
								<div class="form-group">
									<div class="input-effect">
										<input type="password" name="password" value=""  id="input-password" class="form-control" />
										<label class="control-label" for="input-password">Password</label>
										<i class="fa fa-lock" aria-hidden="true"></i>
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-12 confirmation">
									<a href="indexb9e5.html?route=employ/forgotten" class="colorLink subHeadingText icon-wrap pull-right">Forgotten Password ?</a>
									</div>
								</div>
								<div class="buttons">
									<button type="button"  name="button" id="buttonempl" class="btn btn-danger btn-block btnus" />Login</button>
									</div>
								<p>Have Not Any Account Yet? <a href="register.php?register=employee">Register Employee</a> <br> or <br> Login With Social</p>
								
								
								<!-- static code start -->
								<div class="social-part">
									<div class="buttons">
										<a href="https://www.google.com/" class="btn btn-google">
											<i class="fa fa-google" aria-hidden="true"></i> Goggle										</a>
										<a href="https://www.facebook.com/" class="btn btn-facebook">
											<i class="fa fa-facebook" aria-hidden="true"></i> Facebook										</a>
										<a href="https://www.twitter.com/" class="btn btn-twitter">
											<i class="fa fa-twitter" aria-hidden="true"></i> Twitter										</a>
									</div>
								</div>
								<!-- /.social-part -->
							</div>
						</div>
						<!-- /#tab-employee -->
						
						<div class="tab-pane" id="tab-company">
							<div id="companeydanger"></div>
							<div class="companyclass">
							<div class="form-group">
									<div class="input-effect">
										<input type="text" name="email" value="" id="input-email" class="form-control" />
										<label class="control-label" for="input-email">
										E-Mail Address</label>
										<i class="fa fa-envelope-o" aria-hidden="true"></i>
									</div>
								</div>
								<div class="form-group">
									<div class="input-effect">
										<input type="password" name="password" value=""  id="input-password" class="form-control" />
										<label class="control-label" for="input-password">Password</label>
										<i class="fa fa-lock" aria-hidden="true"></i>
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-12 confirmation">
									<a href="index1f48.html?route=company/forgotten" class="colorLink subHeadingText icon-wrap pull-right">Forgotten Password ?</a>
									</div>
								</div>
								<div class="buttons">
									<button type="button"  name="button" id="buttonempl" class="btn btn-danger btn-block btnus" />Login</button>
								</div>
								<p>Have Not Any Account Yet? <a href="register.php?register=company">Register Company</a> <br> or <br> Login With Social</p>

								<!-- static code start -->
								<div class="social-part">
									<div class="buttons">
										<a href="https://www.google.com/" class="btn btn-google">
											<i class="fa fa-google" aria-hidden="true"></i> Goggle										</a>
										<a href="https://www.facebook.com/" class="btn btn-facebook">
											<i class="fa fa-facebook" aria-hidden="true"></i> Facebook										</a>
										<a href="https://www.twitter.com/" class="btn btn-twitter">
											<i class="fa fa-twitter" aria-hidden="true"></i> Twitter										</a>
									</div>
								</div>
								<!-- /.social-part -->
							</div>
						</div>
						<!-- /#tab-company -->
	
					</div>
					<!-- /.tab-content -->
				</div>
				<!-- /. form -->
			</div>
		</div>
	</div>
	</div>
	</div>



<?php
include "include/footer.php";
?>