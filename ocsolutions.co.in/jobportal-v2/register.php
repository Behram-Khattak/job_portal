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
<body class="employ-register">
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
				<div class="ourform">
					<div class="col-md-6 col-xs-12 col-sm-8 col-sm-offset-2 col-md-offset-3">
						<h3>Register</h3>
						<div class="form">
							<div class="tab-content">
								<?php 
									if (isset($_GET['register'])) {

										$register = $_GET['register'];

										if ($register == "employee") {
								?>
									<ul class="nav nav-tabs jobprofile">
										<li class="active"><a href="#tab-employee" data-toggle="tab">Employee</a></li>
										<li><a href="#tab-company" data-toggle="tab">Company</a></li>
									</ul>
									<div class="tab-pane active" id="tab-employee">
										<form action="http://ocsolutions.co.in/jobportal-v2/index.php?route=employ/register" method="post" enctype="multipart/form-data" class="form-horizontal">
											<fieldset id="account">
													<div class="form-group required">
														<div class="col-sm-12">
															<div class="input-effect">	
																<input type="text" name="fullname" value="" id="input-title" class="form-control" >
																<label for="input-title">Full Name</label>	
																<i class="fa fa-user" aria-hidden="true"></i>
																									</div>
														</div>
													</div>
													<div class="form-group required">
														<div class="col-sm-12">
															<div class="input-effect">
																<input type="email" name="email" value="" id="input-email" class="form-control" />
																<label for="input-email">E-Mail Address</label>
																<i class="fa fa-envelope-o" aria-hidden="true"></i>
																									</div>
														</div>
													</div>
													<div class="form-group required">
														<div class="col-sm-12">
														<div class="input-effect">
															<input type="password" name="password" value="" id="input-password" class="form-control" />
															<label for="input-password">Password</label>
															<i class="fa fa-lock" aria-hidden="true"></i>
																								</div>
														</div>
													</div>
													<div class="form-group required">
														<div class="col-sm-12">
															<div class="input-effect">
																<input type="password" name="confirm" value="" id="input-confirm" class="form-control" />
																<label for="input-confirm">Password Confirm</label>
																<i class="fa fa-lock" aria-hidden="true"></i>
																									</div>
														</div>
													</div>
													
													<div class="form-group required">
														<div class="col-sm-12">
															<div class="input-effect">
															<select class="form-control" value="" id="input-gender" name="gender">
																<option value="">-------- Please Select --------</option>
																<option value="1" >Male</option>
																<option value="0" >Female</option>
															</select>
															<label for="input-gender">Gender</label>
																								</div>
														</div>	 
													</div>
											
													<div class="form-group required">
														<label class="col-sm-3 col-xs-12" for="input-lastname">Image</label>
														<div class="imagebox col-sm-5 col-xs-12">
															<span id="thumb-image"><img src="#" alt="" title="" height="120" width="120"/></span>
														</div>
														<div class="col-sm-4 col-xs-12 text-right">
														<button type="button" id="button-upload" data-loading-text="Loading..." 
														class="btn btn-default"><i class="fa fa-upload"></i> Upload File</button>
														<input type="hidden" name="image" value="" id="input-image" />
														</div>
													</div>
											
													<div class="form-group required">
														<div class="col-sm-12">
															<div class="input-group date">
																<div class="input-effect">
																<input type="text" name="date_of_birth" value="" placeholder="Date of Birth" data-date-format="YYYY-MM-DD" id="input-date-available" class="form-control" />
																	<label for="input-date-available">Date of Birth</label>
																</div>
																<span class="input-group-btn">
																<button class="btn btn-default" id="btnSubmit" type="button"><i class="fa fa-calendar"></i></button>
																</span>
															</div>
														</div>
													</div>

													<div class="form-group required">
														<div class="col-sm-12">
															<div class="input-effect">
																<select name="jobtype_id" class="jobtype form-control selectpicker" id="jobtype_id">
																	<option selected="" value="0">----select options----</option>
																	<option  value="1">Part Time</option>
																	<option   value="2">Full Time </option>
																</select>
																<label for="jobtype_id">Job Type</label>
												
															</div>
														</div>
													</div>

													<div class="form-group required">
														<div class="col-sm-12">
															<div class="input-effect">
																<input class="form-control" id="input-job" placeholder="e.g. PHP, Web designer, Manager *" value="" name="jobcategory" type="text">
																<label for="input-job">Job Category</label>
																<input type="hidden" name="category_id" value="">
															</div>
														</div>
													</div>
											</fieldset>
										
											<fieldset id="address">
												<legend class="">Your Address</legend>
												<div class="form-group required">
													<div class="col-sm-12">
														<div class="input-effect">
															<textarea type="text" name="address" value="" placeholder="Address" id="input-address" class="form-control"></textarea>
															<label for="input-address">Address</label>
																							</div>
													</div>
												</div>
												
												<div class="form-group required">
													<div class="col-sm-12">
														<div class="input-effect">
															<input type="text" name="city" value="" placeholder="City" id="input-city" class="form-control" />
															<label for="input-city">City</label>
																							</div>
													</div>
												</div>
												
												<div class="form-group required">
													<div class="col-sm-12">
														<div class="input-effect">
															<input type="text" name="pincode" value="" placeholder="Pin Code" id="input-pincode" class="form-control" />
															<label for="input-pincode">Pin Code</label>
																							</div>
													</div>
												</div>
												
												<div class="form-group required">
													<div class="col-sm-12">
														<div class="input-effect">
														<select name="country_id" id="input-country" class="form-control">
															<option value="">----select options----</option>
																																	<option value="244">Aaland Islands</option>
																																										<option value="1">Afghanistan</option>
																																										<option value="2">Albania</option>
																																										<option value="3">Algeria</option>
																																										<option value="4">American Samoa</option>
																																										<option value="5">Andorra</option>
																																										<option value="6">Angola</option>
																																										<option value="7">Anguilla</option>
																																										<option value="8">Antarctica</option>
																																										<option value="9">Antigua and Barbuda</option>
																																										<option value="10">Argentina</option>
																																										<option value="11">Armenia</option>
																																										<option value="12">Aruba</option>
																																										<option value="252">Ascension Island (British)</option>
																																										<option value="13">Australia</option>
																																										<option value="14">Austria</option>
																																										<option value="15">Azerbaijan</option>
																																										<option value="16">Bahamas</option>
																																										<option value="17">Bahrain</option>
																																										<option value="18">Bangladesh</option>
																																										<option value="19">Barbados</option>
																																										<option value="20">Belarus</option>
																																										<option value="21">Belgium</option>
																																										<option value="22">Belize</option>
																																										<option value="23">Benin</option>
																																										<option value="24">Bermuda</option>
																																										<option value="25">Bhutan</option>
																																										<option value="26">Bolivia</option>
																																										<option value="245">Bonaire, Sint Eustatius and Saba</option>
																																										<option value="27">Bosnia and Herzegovina</option>
																																										<option value="28">Botswana</option>
																																										<option value="29">Bouvet Island</option>
																																										<option value="30">Brazil</option>
																																										<option value="31">British Indian Ocean Territory</option>
																																										<option value="32">Brunei Darussalam</option>
																																										<option value="33">Bulgaria</option>
																																										<option value="34">Burkina Faso</option>
																																										<option value="35">Burundi</option>
																																										<option value="36">Cambodia</option>
																																										<option value="37">Cameroon</option>
																																										<option value="38">Canada</option>
																																										<option value="251">Canary Islands</option>
																																										<option value="39">Cape Verde</option>
																																										<option value="40">Cayman Islands</option>
																																										<option value="41">Central African Republic</option>
																																										<option value="42">Chad</option>
																																										<option value="43">Chile</option>
																																										<option value="44">China</option>
																																										<option value="45">Christmas Island</option>
																																										<option value="46">Cocos (Keeling) Islands</option>
																																										<option value="47">Colombia</option>
																																										<option value="48">Comoros</option>
																																										<option value="49">Congo</option>
																																										<option value="50">Cook Islands</option>
																																										<option value="51">Costa Rica</option>
																																										<option value="52">Cote D'Ivoire</option>
																																										<option value="53">Croatia</option>
																																										<option value="54">Cuba</option>
																																										<option value="246">Curacao</option>
																																										<option value="55">Cyprus</option>
																																										<option value="56">Czech Republic</option>
																																										<option value="237">Democratic Republic of Congo</option>
																																										<option value="57">Denmark</option>
																																										<option value="58">Djibouti</option>
																																										<option value="59">Dominica</option>
																																										<option value="60">Dominican Republic</option>
																																										<option value="61">East Timor</option>
																																										<option value="62">Ecuador</option>
																																										<option value="63">Egypt</option>
																																										<option value="64">El Salvador</option>
																																										<option value="65">Equatorial Guinea</option>
																																										<option value="66">Eritrea</option>
																																										<option value="67">Estonia</option>
																																										<option value="68">Ethiopia</option>
																																										<option value="69">Falkland Islands (Malvinas)</option>
																																										<option value="70">Faroe Islands</option>
																																										<option value="71">Fiji</option>
																																										<option value="72">Finland</option>
																																										<option value="74">France, Metropolitan</option>
																																										<option value="75">French Guiana</option>
																																										<option value="76">French Polynesia</option>
																																										<option value="77">French Southern Territories</option>
																																										<option value="126">FYROM</option>
																																										<option value="78">Gabon</option>
																																										<option value="79">Gambia</option>
																																										<option value="80">Georgia</option>
																																										<option value="81">Germany</option>
																																										<option value="82">Ghana</option>
																																										<option value="83">Gibraltar</option>
																																										<option value="84">Greece</option>
																																										<option value="85">Greenland</option>
																																										<option value="86">Grenada</option>
																																										<option value="87">Guadeloupe</option>
																																										<option value="88">Guam</option>
																																										<option value="89">Guatemala</option>
																																										<option value="256">Guernsey</option>
																																										<option value="90">Guinea</option>
																																										<option value="91">Guinea-Bissau</option>
																																										<option value="92">Guyana</option>
																																										<option value="93">Haiti</option>
																																										<option value="94">Heard and Mc Donald Islands</option>
																																										<option value="95">Honduras</option>
																																										<option value="96">Hong Kong</option>
																																										<option value="97">Hungary</option>
																																										<option value="98">Iceland</option>
																																										<option value="99">India</option>
																																										<option value="100">Indonesia</option>
																																										<option value="101">Iran (Islamic Republic of)</option>
																																										<option value="102">Iraq</option>
																																										<option value="103">Ireland</option>
																																										<option value="254">Isle of Man</option>
																																										<option value="104">Israel</option>
																																										<option value="105">Italy</option>
																																										<option value="106">Jamaica</option>
																																										<option value="107">Japan</option>
																																										<option value="257">Jersey</option>
																																										<option value="108">Jordan</option>
																																										<option value="109">Kazakhstan</option>
																																										<option value="110">Kenya</option>
																																										<option value="111">Kiribati</option>
																																										<option value="253">Kosovo, Republic of</option>
																																										<option value="114">Kuwait</option>
																																										<option value="115">Kyrgyzstan</option>
																																										<option value="116">Lao People's Democratic Republic</option>
																																										<option value="117">Latvia</option>
																																										<option value="118">Lebanon</option>
																																										<option value="119">Lesotho</option>
																																										<option value="120">Liberia</option>
																																										<option value="121">Libyan Arab Jamahiriya</option>
																																										<option value="122">Liechtenstein</option>
																																										<option value="123">Lithuania</option>
																																										<option value="124">Luxembourg</option>
																																										<option value="125">Macau</option>
																																										<option value="127">Madagascar</option>
																																										<option value="128">Malawi</option>
																																										<option value="129">Malaysia</option>
																																										<option value="130">Maldives</option>
																																										<option value="131">Mali</option>
																																										<option value="132">Malta</option>
																																										<option value="133">Marshall Islands</option>
																																										<option value="134">Martinique</option>
																																										<option value="135">Mauritania</option>
																																										<option value="136">Mauritius</option>
																																										<option value="137">Mayotte</option>
																																										<option value="138">Mexico</option>
																																										<option value="139">Micronesia, Federated States of</option>
																																										<option value="140">Moldova, Republic of</option>
																																										<option value="141">Monaco</option>
																																										<option value="142">Mongolia</option>
																																										<option value="242">Montenegro</option>
																																										<option value="143">Montserrat</option>
																																										<option value="144">Morocco</option>
																																										<option value="145">Mozambique</option>
																																										<option value="146">Myanmar</option>
																																										<option value="147">Namibia</option>
																																										<option value="148">Nauru</option>
																																										<option value="149">Nepal</option>
																																										<option value="150">Netherlands</option>
																																										<option value="151">Netherlands Antilles</option>
																																										<option value="152">New Caledonia</option>
																																										<option value="153">New Zealand</option>
																																										<option value="154">Nicaragua</option>
																																										<option value="155">Niger</option>
																																										<option value="156">Nigeria</option>
																																										<option value="157">Niue</option>
																																										<option value="158">Norfolk Island</option>
																																										<option value="112">North Korea</option>
																																										<option value="159">Northern Mariana Islands</option>
																																										<option value="160">Norway</option>
																																										<option value="161">Oman</option>
																																										<option value="162">Pakistan</option>
																																										<option value="163">Palau</option>
																																										<option value="247">Palestinian Territory, Occupied</option>
																																										<option value="164">Panama</option>
																																										<option value="165">Papua New Guinea</option>
																																										<option value="166">Paraguay</option>
																																										<option value="167">Peru</option>
																																										<option value="168">Philippines</option>
																																										<option value="169">Pitcairn</option>
																																										<option value="170">Poland</option>
																																										<option value="171">Portugal</option>
																																										<option value="172">Puerto Rico</option>
																																										<option value="173">Qatar</option>
																																										<option value="174">Reunion</option>
																																										<option value="175">Romania</option>
																																										<option value="176">Russian Federation</option>
																																										<option value="177">Rwanda</option>
																																										<option value="178">Saint Kitts and Nevis</option>
																																										<option value="179">Saint Lucia</option>
																																										<option value="180">Saint Vincent and the Grenadines</option>
																																										<option value="181">Samoa</option>
																																										<option value="182">San Marino</option>
																																										<option value="183">Sao Tome and Principe</option>
																																										<option value="184">Saudi Arabia</option>
																																										<option value="185">Senegal</option>
																																										<option value="243">Serbia</option>
																																										<option value="186">Seychelles</option>
																																										<option value="187">Sierra Leone</option>
																																										<option value="188">Singapore</option>
																																										<option value="189">Slovak Republic</option>
																																										<option value="190">Slovenia</option>
																																										<option value="191">Solomon Islands</option>
																																										<option value="192">Somalia</option>
																																										<option value="193">South Africa</option>
																																										<option value="194">South Georgia &amp; South Sandwich Islands</option>
																																										<option value="113">South Korea</option>
																																										<option value="248">South Sudan</option>
																																										<option value="195">Spain</option>
																																										<option value="196">Sri Lanka</option>
																																										<option value="249">St. Barthelemy</option>
																																										<option value="197">St. Helena</option>
																																										<option value="250">St. Martin (French part)</option>
																																										<option value="198">St. Pierre and Miquelon</option>
																																										<option value="199">Sudan</option>
																																										<option value="200">Suriname</option>
																																										<option value="201">Svalbard and Jan Mayen Islands</option>
																																										<option value="202">Swaziland</option>
																																										<option value="203">Sweden</option>
																																										<option value="204">Switzerland</option>
																																										<option value="205">Syrian Arab Republic</option>
																																										<option value="206">Taiwan</option>
																																										<option value="207">Tajikistan</option>
																																										<option value="208">Tanzania, United Republic of</option>
																																										<option value="209">Thailand</option>
																																										<option value="210">Togo</option>
																																										<option value="211">Tokelau</option>
																																										<option value="212">Tonga</option>
																																										<option value="213">Trinidad and Tobago</option>
																																										<option value="255">Tristan da Cunha</option>
																																										<option value="214">Tunisia</option>
																																										<option value="215">Turkey</option>
																																										<option value="216">Turkmenistan</option>
																																										<option value="217">Turks and Caicos Islands</option>
																																										<option value="218">Tuvalu</option>
																																										<option value="219">Uganda</option>
																																										<option value="220">Ukraine</option>
																																										<option value="221">United Arab Emirates</option>
																																										<option value="222" selected="selected">United Kingdom</option>
																																										<option value="223">United States</option>
																																										<option value="224">United States Minor Outlying Islands</option>
																																										<option value="225">Uruguay</option>
																																										<option value="226">Uzbekistan</option>
																																										<option value="227">Vanuatu</option>
																																										<option value="228">Vatican City State (Holy See)</option>
																																										<option value="229">Venezuela</option>
																																										<option value="230">Viet Nam</option>
																																										<option value="231">Virgin Islands (British)</option>
																																										<option value="232">Virgin Islands (U.S.)</option>
																																										<option value="233">Wallis and Futuna Islands</option>
																																										<option value="234">Western Sahara</option>
																																										<option value="235">Yemen</option>
																																										<option value="238">Zambia</option>
																																										<option value="239">Zimbabwe</option>
																																</select>
														<label for="input-country">Country</label>
																							</div>
													</div>
												</div>
												
												<div class="form-group required">
													<div class="col-sm-12">
														<div class="input-effect">
															<select name="zone_id" value="" id="input-zone" class="form-control">
															</select>
															<label for="input-zone">Region / State</label>
																							</div>
													</div>
												</div>
												
																			<div class="form-group required">
														<div class="col-sm-12">
															<div class="input-effect">
																<input type="tel" name="mobile_phone" value="" placeholder="Mobile" id="input-mobile_phone" class="form-control" />
																<label for="input-mobile_phone">Mobile</label>
																									</div>
														</div>
													</div>
													<div class="form-group required">
														<div class="col-sm-12">
															<div class="input-effect">
																<input type="text" name="home_phone" value="" placeholder="Home Phone" id="input-package-titl" class="form-control">
																<label for="input-package-titl">Home Phone</label>
																									</div>
														</div>
													</div>
													<div class="form-group required">
														<div class="col-sm-12">
															<div class="input-effect">
																<input type="text" name="profissional" value="" placeholder="Profissional" id="input-profissional" class="form-control">
																<label for="input-profissional">Profissional</label>
																									</div>
														</div>
													</div>
												
													<div class="form-group required">
														<div class="col-sm-12">
															<div class="input-effect">
																<input type="text" name="experience" value="" placeholder="Experience" id="input-experience" class="form-control">
																<label for="input-experience">Experience</label>
																									</div>
														</div>
													</div>
													
													<div class="form-group required">
														<div class="col-sm-12">
															<div class="input-effect">
																<input type="text" name="about_self" value="" placeholder="About your self" id="input-about_self" class="form-control">
																<label for="input-about_self">About your self</label>
															</div>
														</div>
													</div>
													
													<div class="form-group">
														<div class="col-sm-12">
														<label for="input-educations">Education</label>	
														<ul class="nav nav-tabs" id="language">
																							<li><a href="#language1" data-toggle="tab"><img src="catalog/language/en-gb/en-gb.png" title="English" /> English</a></li>
																							</ul>
														<div class="tab-content">
																								<div class="tab-pane table-responsive" id="language1">
																<table id="educations1" class="table table-striped table-bordered table-hover">
																	<thead class="text-center">
																		<tr>
																			<td>Degree</td>
																			<td>Collage/School</td>
																			<td>Passed Year</td>
																			<td>Percentage %</td>
																		</tr>
																	</thead>
																	<tbody>
																														<tr id="education-row0">
																			<td></td>
																			<td></td>
																			<td></td>
																			<td></td>
																		</tr>
																													</tbody>
																	<tfoot>
																		<tr>
																			<td colspan="4"></td>
																			<td class="text-right"><button type="button" onclick="addAducation('1');" data-toggle="tooltip" title="Add" class="btn btn-inverse"><i class="fa fa-plus-circle"></i></button></td>
																		</tr>
																	</tfoot>
																</table>
															</div>
																							</div>
													</div>
												</div>	

														<table id="employ-skill" class="table table-striped table-bordered table-hover">
															<thead>
															<tr>
																<td class="text-left">Skill</td>
																<td class="text-left"></td>

															</tr>
															</thead>
															<tbody>
																			<tr id="skill-row0">
																<td class="text-left"></td>
																<td class="text-left"></td>
															</tr>
																	
															</tbody>
															<tfoot>
															<tr>
																<td colspan="1"></td>

																<td class="text-left"><button type="button" onclick="addSkills();" data-toggle="tooltip" title="" class="btn btn-default"><i class="fa fa-plus-circle"></i></button></td>
															</tr>
															</tfoot>
														</table>
												
												<div class="form-group required">
													<div class="col-sm-12">
														<div class="input-effect">
															<input type="text" name="interest" value="" placeholder="Interest" id="input-additional" class="form-control">
															<label for="input-additional">Additional</label>
																							</div>
													</div>
												</div>
												
												<div class="form-group required">
													<div class="col-sm-12">
														<input type="text" name="career" value="" placeholder="Career" id="input-career" class="form-control">
													</div>
												</div>
												
												<div class="form-group required">
													<div class="col-sm-12">
														<input type="text" name="achievement" value="" placeholder="Achievement" id="input-achievement" class="form-control">
													</div>
												</div>
												
											</fieldset>
											
											<div class="form-group uploadresume">
												<label class="col-sm-3 col-xs-12" for="input-lastname">Add your CV</label>
												<div class="col-sm-9 col-xs-12">		
													<div class="browse row">
														<div class="imagebox col-sm-6 col-xs-12">
														<span id="thumb-cvimage"><img src="#" alt="" title="" height="120" width="120"/></span>
														</div>
														<div class="col-sm-6 col-xs-12 text-right">
														<button type="button" id="button-cvupload" data-loading-text="Loading..."class="btn btn-default">
														<i class="fa fa-upload"></i> Upload File</button>
														
														<input type="" name="resumelist" value="" id="input-cvimage" readonly />
														</div>
													</div>
												</div>
											</div>	
																					
											<div class="form-group">
												<div class="col-sm-12 confirmation">
													<label>
																						<input type="checkbox" name="agree" value="1" />
																						I have read and agree to the <a href="index5c04.html?route=information/information/agree&amp;information_id=4" class="agree"><b>About Us</b></a>							</label>							
												</div>
											</div>

											
											<div class="buttons">
												&nbsp;
												<input type="submit" value="Register Now" class="btn btn-danger btn-block btnus f_rubik"/>
											</div>
															<p>Already Have An Account? <a href="login.php">Click Here</a>.
										</form>	
											<!-- /. form -->
									</div>
											<div class="tab-pane" id="tab-company">
												<form action="http://ocsolutions.co.in/jobportal-v2/index.php?route=employ/register" method="post" enctype="multipart/form-data" class="form-horizontal">
														<fieldset id="account">
															<div class="form-group required">
																<div class="col-sm-12">
																	<div class="input-effect">	
																		<input type="text" name="fullname" value="" id="input-title" class="form-control" >
																		<label for="input-title">Full Name</label>	
																		<i class="fa fa-user" aria-hidden="true"></i>
																											</div>
																</div>
															</div>
															<div class="form-group required">
																<div class="col-sm-12">
																	<div class="input-effect">
																		<input type="email" name="email" value="" id="input-email" class="form-control" />
																		<label for="input-email">E-Mail Address</label>
																		<i class="fa fa-envelope-o" aria-hidden="true"></i>
																											</div>
																</div>
															</div>
															<div class="form-group required">
																<div class="col-sm-12">
																<div class="input-effect">
																	<input type="password" name="password" value="" id="input-password" class="form-control" />
																	<label for="input-password">Password</label>
																	<i class="fa fa-lock" aria-hidden="true"></i>
																										</div>
																</div>
															</div>
															<div class="form-group required">
																<div class="col-sm-12">
																	<div class="input-effect">
																		<input type="password" name="confirm" value="" id="input-confirm" class="form-control" />
																		<label for="input-confirm">Password Confirm</label>
																		<i class="fa fa-lock" aria-hidden="true"></i>
																											</div>
																</div>
															</div>
															
															<div class="form-group required">
																<div class="col-sm-12">
																	<div class="input-effect">
																	<select class="form-control" value="" id="input-gender" name="gender">
																		<option value="">-------- Please Select --------</option>
																		<option value="1" >Male</option>
																		<option value="0" >Female</option>
																	</select>
																	<label for="input-gender">Gender</label>
																										</div>
																</div>	 
															</div>
													
															<div class="form-group required">
																<label class="col-sm-3 col-xs-12" for="input-lastname">Image</label>
																<div class="imagebox col-sm-5 col-xs-12">
																	<span id="thumb-image"><img src="#" alt="" title="" height="120" width="120"/></span>
																</div>
																<div class="col-sm-4 col-xs-12 text-right">
																<button type="button" id="button-upload" data-loading-text="Loading..." 
																class="btn btn-default"><i class="fa fa-upload"></i> Upload File</button>
																<input type="hidden" name="image" value="" id="input-image" />
																</div>
															</div>
													
														<div class="form-group required">
															<div class="col-sm-12">
																<div class="input-group date">
																	<div class="input-effect">
																	<input type="text" name="date_of_birth" value="" placeholder="Date of Birth" data-date-format="YYYY-MM-DD" id="input-date-available" class="form-control" />
																		<label for="input-date-available">Date of Birth</label>
																	</div>
																	<span class="input-group-btn">
																	<button class="btn btn-default" id="btnSubmit" type="button"><i class="fa fa-calendar"></i></button>
																	</span>
																</div>
																							</div>
														</div>

														<div class="form-group required">
															<div class="col-sm-12">
																<div class="input-effect">
																	<select name="jobtype_id" class="jobtype form-control selectpicker" id="jobtype_id">
																		<option selected="" value="0">----select options----</option>
																		<option  value="1">Part Time</option>
																		<option   value="2">Full Time </option>
																	</select>
																	<label for="jobtype_id">Job Type</label>
													
																									</div>
															</div>
														</div>

														<div class="form-group required">
															<div class="col-sm-12">
																<div class="input-effect">
																	<input class="form-control" id="input-job" placeholder="e.g. PHP, Web designer, Manager *" value="" name="jobcategory" type="text">
																	<label for="input-job">Job Category</label>
																	<input type="hidden" name="category_id" value="">
																									</div>
															</div>
														</div>
													</fieldset>
													
													<fieldset id="address">
														<legend class="">Your Address</legend>
														<div class="form-group required">
															<div class="col-sm-12">
																<div class="input-effect">
																	<textarea type="text" name="address" value="" placeholder="Address" id="input-address" class="form-control"></textarea>
																	<label for="input-address">Address</label>
																									</div>
															</div>
														</div>
														
														<div class="form-group required">
															<div class="col-sm-12">
																<div class="input-effect">
																	<input type="text" name="city" value="" placeholder="City" id="input-city" class="form-control" />
																	<label for="input-city">City</label>
																									</div>
															</div>
														</div>
														
														<div class="form-group required">
															<div class="col-sm-12">
																<div class="input-effect">
																	<input type="text" name="pincode" value="" placeholder="Pin Code" id="input-pincode" class="form-control" />
																	<label for="input-pincode">Pin Code</label>
																									</div>
															</div>
														</div>
														
														<div class="form-group required">
															<div class="col-sm-12">
																<div class="input-effect">
																<select name="country_id" id="input-country" class="form-control">
																	<option value="">----select options----</option>
																																			<option value="244">Aaland Islands</option>
																																												<option value="1">Afghanistan</option>
																																												<option value="2">Albania</option>
																																												<option value="3">Algeria</option>
																																												<option value="4">American Samoa</option>
																																												<option value="5">Andorra</option>
																																												<option value="6">Angola</option>
																																												<option value="7">Anguilla</option>
																																												<option value="8">Antarctica</option>
																																												<option value="9">Antigua and Barbuda</option>
																																												<option value="10">Argentina</option>
																																												<option value="11">Armenia</option>
																																												<option value="12">Aruba</option>
																																												<option value="252">Ascension Island (British)</option>
																																												<option value="13">Australia</option>
																																												<option value="14">Austria</option>
																																												<option value="15">Azerbaijan</option>
																																												<option value="16">Bahamas</option>
																																												<option value="17">Bahrain</option>
																																												<option value="18">Bangladesh</option>
																																												<option value="19">Barbados</option>
																																												<option value="20">Belarus</option>
																																												<option value="21">Belgium</option>
																																												<option value="22">Belize</option>
																																												<option value="23">Benin</option>
																																												<option value="24">Bermuda</option>
																																												<option value="25">Bhutan</option>
																																												<option value="26">Bolivia</option>
																																												<option value="245">Bonaire, Sint Eustatius and Saba</option>
																																												<option value="27">Bosnia and Herzegovina</option>
																																												<option value="28">Botswana</option>
																																												<option value="29">Bouvet Island</option>
																																												<option value="30">Brazil</option>
																																												<option value="31">British Indian Ocean Territory</option>
																																												<option value="32">Brunei Darussalam</option>
																																												<option value="33">Bulgaria</option>
																																												<option value="34">Burkina Faso</option>
																																												<option value="35">Burundi</option>
																																												<option value="36">Cambodia</option>
																																												<option value="37">Cameroon</option>
																																												<option value="38">Canada</option>
																																												<option value="251">Canary Islands</option>
																																												<option value="39">Cape Verde</option>
																																												<option value="40">Cayman Islands</option>
																																												<option value="41">Central African Republic</option>
																																												<option value="42">Chad</option>
																																												<option value="43">Chile</option>
																																												<option value="44">China</option>
																																												<option value="45">Christmas Island</option>
																																												<option value="46">Cocos (Keeling) Islands</option>
																																												<option value="47">Colombia</option>
																																												<option value="48">Comoros</option>
																																												<option value="49">Congo</option>
																																												<option value="50">Cook Islands</option>
																																												<option value="51">Costa Rica</option>
																																												<option value="52">Cote D'Ivoire</option>
																																												<option value="53">Croatia</option>
																																												<option value="54">Cuba</option>
																																												<option value="246">Curacao</option>
																																												<option value="55">Cyprus</option>
																																												<option value="56">Czech Republic</option>
																																												<option value="237">Democratic Republic of Congo</option>
																																												<option value="57">Denmark</option>
																																												<option value="58">Djibouti</option>
																																												<option value="59">Dominica</option>
																																												<option value="60">Dominican Republic</option>
																																												<option value="61">East Timor</option>
																																												<option value="62">Ecuador</option>
																																												<option value="63">Egypt</option>
																																												<option value="64">El Salvador</option>
																																												<option value="65">Equatorial Guinea</option>
																																												<option value="66">Eritrea</option>
																																												<option value="67">Estonia</option>
																																												<option value="68">Ethiopia</option>
																																												<option value="69">Falkland Islands (Malvinas)</option>
																																												<option value="70">Faroe Islands</option>
																																												<option value="71">Fiji</option>
																																												<option value="72">Finland</option>
																																												<option value="74">France, Metropolitan</option>
																																												<option value="75">French Guiana</option>
																																												<option value="76">French Polynesia</option>
																																												<option value="77">French Southern Territories</option>
																																												<option value="126">FYROM</option>
																																												<option value="78">Gabon</option>
																																												<option value="79">Gambia</option>
																																												<option value="80">Georgia</option>
																																												<option value="81">Germany</option>
																																												<option value="82">Ghana</option>
																																												<option value="83">Gibraltar</option>
																																												<option value="84">Greece</option>
																																												<option value="85">Greenland</option>
																																												<option value="86">Grenada</option>
																																												<option value="87">Guadeloupe</option>
																																												<option value="88">Guam</option>
																																												<option value="89">Guatemala</option>
																																												<option value="256">Guernsey</option>
																																												<option value="90">Guinea</option>
																																												<option value="91">Guinea-Bissau</option>
																																												<option value="92">Guyana</option>
																																												<option value="93">Haiti</option>
																																												<option value="94">Heard and Mc Donald Islands</option>
																																												<option value="95">Honduras</option>
																																												<option value="96">Hong Kong</option>
																																												<option value="97">Hungary</option>
																																												<option value="98">Iceland</option>
																																												<option value="99">India</option>
																																												<option value="100">Indonesia</option>
																																												<option value="101">Iran (Islamic Republic of)</option>
																																												<option value="102">Iraq</option>
																																												<option value="103">Ireland</option>
																																												<option value="254">Isle of Man</option>
																																												<option value="104">Israel</option>
																																												<option value="105">Italy</option>
																																												<option value="106">Jamaica</option>
																																												<option value="107">Japan</option>
																																												<option value="257">Jersey</option>
																																												<option value="108">Jordan</option>
																																												<option value="109">Kazakhstan</option>
																																												<option value="110">Kenya</option>
																																												<option value="111">Kiribati</option>
																																												<option value="253">Kosovo, Republic of</option>
																																												<option value="114">Kuwait</option>
																																												<option value="115">Kyrgyzstan</option>
																																												<option value="116">Lao People's Democratic Republic</option>
																																												<option value="117">Latvia</option>
																																												<option value="118">Lebanon</option>
																																												<option value="119">Lesotho</option>
																																												<option value="120">Liberia</option>
																																												<option value="121">Libyan Arab Jamahiriya</option>
																																												<option value="122">Liechtenstein</option>
																																												<option value="123">Lithuania</option>
																																												<option value="124">Luxembourg</option>
																																												<option value="125">Macau</option>
																																												<option value="127">Madagascar</option>
																																												<option value="128">Malawi</option>
																																												<option value="129">Malaysia</option>
																																												<option value="130">Maldives</option>
																																												<option value="131">Mali</option>
																																												<option value="132">Malta</option>
																																												<option value="133">Marshall Islands</option>
																																												<option value="134">Martinique</option>
																																												<option value="135">Mauritania</option>
																																												<option value="136">Mauritius</option>
																																												<option value="137">Mayotte</option>
																																												<option value="138">Mexico</option>
																																												<option value="139">Micronesia, Federated States of</option>
																																												<option value="140">Moldova, Republic of</option>
																																												<option value="141">Monaco</option>
																																												<option value="142">Mongolia</option>
																																												<option value="242">Montenegro</option>
																																												<option value="143">Montserrat</option>
																																												<option value="144">Morocco</option>
																																												<option value="145">Mozambique</option>
																																												<option value="146">Myanmar</option>
																																												<option value="147">Namibia</option>
																																												<option value="148">Nauru</option>
																																												<option value="149">Nepal</option>
																																												<option value="150">Netherlands</option>
																																												<option value="151">Netherlands Antilles</option>
																																												<option value="152">New Caledonia</option>
																																												<option value="153">New Zealand</option>
																																												<option value="154">Nicaragua</option>
																																												<option value="155">Niger</option>
																																												<option value="156">Nigeria</option>
																																												<option value="157">Niue</option>
																																												<option value="158">Norfolk Island</option>
																																												<option value="112">North Korea</option>
																																												<option value="159">Northern Mariana Islands</option>
																																												<option value="160">Norway</option>
																																												<option value="161">Oman</option>
																																												<option value="162">Pakistan</option>
																																												<option value="163">Palau</option>
																																												<option value="247">Palestinian Territory, Occupied</option>
																																												<option value="164">Panama</option>
																																												<option value="165">Papua New Guinea</option>
																																												<option value="166">Paraguay</option>
																																												<option value="167">Peru</option>
																																												<option value="168">Philippines</option>
																																												<option value="169">Pitcairn</option>
																																												<option value="170">Poland</option>
																																												<option value="171">Portugal</option>
																																												<option value="172">Puerto Rico</option>
																																												<option value="173">Qatar</option>
																																												<option value="174">Reunion</option>
																																												<option value="175">Romania</option>
																																												<option value="176">Russian Federation</option>
																																												<option value="177">Rwanda</option>
																																												<option value="178">Saint Kitts and Nevis</option>
																																												<option value="179">Saint Lucia</option>
																																												<option value="180">Saint Vincent and the Grenadines</option>
																																												<option value="181">Samoa</option>
																																												<option value="182">San Marino</option>
																																												<option value="183">Sao Tome and Principe</option>
																																												<option value="184">Saudi Arabia</option>
																																												<option value="185">Senegal</option>
																																												<option value="243">Serbia</option>
																																												<option value="186">Seychelles</option>
																																												<option value="187">Sierra Leone</option>
																																												<option value="188">Singapore</option>
																																												<option value="189">Slovak Republic</option>
																																												<option value="190">Slovenia</option>
																																												<option value="191">Solomon Islands</option>
																																												<option value="192">Somalia</option>
																																												<option value="193">South Africa</option>
																																												<option value="194">South Georgia &amp; South Sandwich Islands</option>
																																												<option value="113">South Korea</option>
																																												<option value="248">South Sudan</option>
																																												<option value="195">Spain</option>
																																												<option value="196">Sri Lanka</option>
																																												<option value="249">St. Barthelemy</option>
																																												<option value="197">St. Helena</option>
																																												<option value="250">St. Martin (French part)</option>
																																												<option value="198">St. Pierre and Miquelon</option>
																																												<option value="199">Sudan</option>
																																												<option value="200">Suriname</option>
																																												<option value="201">Svalbard and Jan Mayen Islands</option>
																																												<option value="202">Swaziland</option>
																																												<option value="203">Sweden</option>
																																												<option value="204">Switzerland</option>
																																												<option value="205">Syrian Arab Republic</option>
																																												<option value="206">Taiwan</option>
																																												<option value="207">Tajikistan</option>
																																												<option value="208">Tanzania, United Republic of</option>
																																												<option value="209">Thailand</option>
																																												<option value="210">Togo</option>
																																												<option value="211">Tokelau</option>
																																												<option value="212">Tonga</option>
																																												<option value="213">Trinidad and Tobago</option>
																																												<option value="255">Tristan da Cunha</option>
																																												<option value="214">Tunisia</option>
																																												<option value="215">Turkey</option>
																																												<option value="216">Turkmenistan</option>
																																												<option value="217">Turks and Caicos Islands</option>
																																												<option value="218">Tuvalu</option>
																																												<option value="219">Uganda</option>
																																												<option value="220">Ukraine</option>
																																												<option value="221">United Arab Emirates</option>
																																												<option value="222" selected="selected">United Kingdom</option>
																																												<option value="223">United States</option>
																																												<option value="224">United States Minor Outlying Islands</option>
																																												<option value="225">Uruguay</option>
																																												<option value="226">Uzbekistan</option>
																																												<option value="227">Vanuatu</option>
																																												<option value="228">Vatican City State (Holy See)</option>
																																												<option value="229">Venezuela</option>
																																												<option value="230">Viet Nam</option>
																																												<option value="231">Virgin Islands (British)</option>
																																												<option value="232">Virgin Islands (U.S.)</option>
																																												<option value="233">Wallis and Futuna Islands</option>
																																												<option value="234">Western Sahara</option>
																																												<option value="235">Yemen</option>
																																												<option value="238">Zambia</option>
																																												<option value="239">Zimbabwe</option>
																																		</select>
																<label for="input-country">Country</label>
																									</div>
															</div>
														</div>
														
														<div class="form-group required">
															<div class="col-sm-12">
																<div class="input-effect">
																	<select name="zone_id" value="" id="input-zone" class="form-control">
																	</select>
																	<label for="input-zone">Region / State</label>
																									</div>
															</div>
														</div>
														
															<div class="form-group required">
																<div class="col-sm-12">
																	<div class="input-effect">
																		<input type="tel" name="mobile_phone" value="" placeholder="Mobile" id="input-mobile_phone" class="form-control" />
																		<label for="input-mobile_phone">Mobile</label>
																											</div>
																</div>
															</div>
															<div class="form-group required">
																<div class="col-sm-12">
																	<div class="input-effect">
																		<input type="text" name="home_phone" value="" placeholder="Home Phone" id="input-package-titl" class="form-control">
																		<label for="input-package-titl">Home Phone</label>
																											</div>
																</div>
															</div>
															<div class="form-group required">
																<div class="col-sm-12">
																	<div class="input-effect">
																		<input type="text" name="profissional" value="" placeholder="Profissional" id="input-profissional" class="form-control">
																		<label for="input-profissional">Profissional</label>
																											</div>
																</div>
															</div>
														
															<div class="form-group required">
																<div class="col-sm-12">
																	<div class="input-effect">
																		<input type="text" name="experience" value="" placeholder="Experience" id="input-experience" class="form-control">
																		<label for="input-experience">Experience</label>
																											</div>
																</div>
															</div>
															
															<div class="form-group required">
																<div class="col-sm-12">
																	<div class="input-effect">
																		<input type="text" name="about_self" value="" placeholder="About your self" id="input-about_self" class="form-control">
																		<label for="input-about_self">About your self</label>
																	</div>
																</div>
															</div>
															
															<div class="form-group">
																<div class="col-sm-12">
																	<label for="input-educations">Education</label>	
																	<ul class="nav nav-tabs" id="language">
																										<li><a href="#language1" data-toggle="tab"><img src="catalog/language/en-gb/en-gb.png" title="English" /> English</a></li>
																										</ul>
																	<div class="tab-content">
																		<div class="tab-pane table-responsive" id="language1">
																			<table id="educations1" class="table table-striped table-bordered table-hover">
																				<thead class="text-center">
																					<tr>
																						<td>Degree</td>
																						<td>Collage/School</td>
																						<td>Passed Year</td>
																						<td>Percentage %</td>
																					</tr>
																				</thead>
																				<tbody>
																																	<tr id="education-row0">
																						<td></td>
																						<td></td>
																						<td></td>
																						<td></td>
																					</tr>
																																</tbody>
																				<tfoot>
																					<tr>
																						<td colspan="4"></td>
																						<td class="text-right"><button type="button" onclick="addAducation('1');" data-toggle="tooltip" title="Add" class="btn btn-inverse"><i class="fa fa-plus-circle"></i></button></td>
																					</tr>
																				</tfoot>
																			</table>
																		</div>
																	</div>
																</div>
															</div>	

																<table id="employ-skill" class="table table-striped table-bordered table-hover">
																	<thead>
																	<tr>
																		<td class="text-left">Skill</td>
																		<td class="text-left"></td>

																	</tr>
																	</thead>
																	<tbody>
																					<tr id="skill-row0">
																		<td class="text-left"></td>
																		<td class="text-left"></td>
																	</tr>
																			
																	</tbody>
																	<tfoot>
																	<tr>
																		<td colspan="1"></td>

																		<td class="text-left"><button type="button" onclick="addSkills();" data-toggle="tooltip" title="" class="btn btn-default"><i class="fa fa-plus-circle"></i></button></td>
																	</tr>
																	</tfoot>
																</table>
														
														<div class="form-group required">
															<div class="col-sm-12">
																<div class="input-effect">
																	<input type="text" name="interest" value="" placeholder="Interest" id="input-additional" class="form-control">
																	<label for="input-additional">Additional</label>
																									</div>
															</div>
														</div>
														
														<div class="form-group required">
															<div class="col-sm-12">
																<input type="text" name="career" value="" placeholder="Career" id="input-career" class="form-control">
															</div>
														</div>
														
														<div class="form-group required">
															<div class="col-sm-12">
																<input type="text" name="achievement" value="" placeholder="Achievement" id="input-achievement" class="form-control">
															</div>
														</div>
														
													</fieldset>
													
													<div class="form-group uploadresume">
														<label class="col-sm-3 col-xs-12" for="input-lastname">Add your CV</label>
														<div class="col-sm-9 col-xs-12">		
															<div class="browse row">
																<div class="imagebox col-sm-6 col-xs-12">
																<span id="thumb-cvimage"><img src="#" alt="" title="" height="120" width="120"/></span>
																</div>
																<div class="col-sm-6 col-xs-12 text-right">
																<button type="button" id="button-cvupload" data-loading-text="Loading..."class="btn btn-default">
																<i class="fa fa-upload"></i> Upload File</button>
																
																<input type="" name="resumelist" value="" id="input-cvimage" readonly />
																</div>
															</div>
														</div>
													</div>	
																							
													<div class="form-group">
														<div class="col-sm-12 confirmation">
															<label>
																								<input type="checkbox" name="agree" value="1" />
																								I have read and agree to the <a href="index5c04.html?route=information/information/agree&amp;information_id=4" class="agree"><b>About Us</b></a>							</label>							
														</div>
													</div>

													
													<div class="buttons">
														&nbsp;
														<input type="submit" value="Register Now" class="btn btn-danger btn-block btnus f_rubik"/>
													</div>
																		<p>Already Have An Account? <a href="login.php">Click Here</a>.
												</form>
												<!-- /. form -->
											</div>
									<?php 
											}elseif ($register == "company") {

									?>
											<ul class="nav nav-tabs jobprofile">
												<li><a href="#tab-employee" data-toggle="tab">Employee</a></li>
												<li class="active"><a href="#tab-company" data-toggle="tab">Company</a></li>
											</ul>
											<div class="tab-pane" id="tab-employee">
												<form action="http://ocsolutions.co.in/jobportal-v2/index.php?route=employ/register" method="post" enctype="multipart/form-data" class="form-horizontal">
													<fieldset id="account">
															<div class="form-group required">
																<div class="col-sm-12">
																	<div class="input-effect">	
																		<input type="text" name="fullname" value="" id="input-title" class="form-control" >
																		<label for="input-title">Full Name</label>	
																		<i class="fa fa-user" aria-hidden="true"></i>
																											</div>
																</div>
															</div>
															<div class="form-group required">
																<div class="col-sm-12">
																	<div class="input-effect">
																		<input type="email" name="email" value="" id="input-email" class="form-control" />
																		<label for="input-email">E-Mail Address</label>
																		<i class="fa fa-envelope-o" aria-hidden="true"></i>
																											</div>
																</div>
															</div>
															<div class="form-group required">
																<div class="col-sm-12">
																<div class="input-effect">
																	<input type="password" name="password" value="" id="input-password" class="form-control" />
																	<label for="input-password">Password</label>
																	<i class="fa fa-lock" aria-hidden="true"></i>
																										</div>
																</div>
															</div>
															<div class="form-group required">
																<div class="col-sm-12">
																	<div class="input-effect">
																		<input type="password" name="confirm" value="" id="input-confirm" class="form-control" />
																		<label for="input-confirm">Password Confirm</label>
																		<i class="fa fa-lock" aria-hidden="true"></i>
																											</div>
																</div>
															</div>
															
															<div class="form-group required">
																<div class="col-sm-12">
																	<div class="input-effect">
																	<select class="form-control" value="" id="input-gender" name="gender">
																		<option value="">-------- Please Select --------</option>
																		<option value="1" >Male</option>
																		<option value="0" >Female</option>
																	</select>
																	<label for="input-gender">Gender</label>
																										</div>
																</div>	 
															</div>
													
															<div class="form-group required">
																<label class="col-sm-3 col-xs-12" for="input-lastname">Image</label>
																<div class="imagebox col-sm-5 col-xs-12">
																	<span id="thumb-image"><img src="#" alt="" title="" height="120" width="120"/></span>
																</div>
																<div class="col-sm-4 col-xs-12 text-right">
																<button type="button" id="button-upload" data-loading-text="Loading..." 
																class="btn btn-default"><i class="fa fa-upload"></i> Upload File</button>
																<input type="hidden" name="image" value="" id="input-image" />
																</div>
															</div>
													
															<div class="form-group required">
																<div class="col-sm-12">
																	<div class="input-group date">
																		<div class="input-effect">
																		<input type="text" name="date_of_birth" value="" placeholder="Date of Birth" data-date-format="YYYY-MM-DD" id="input-date-available" class="form-control" />
																			<label for="input-date-available">Date of Birth</label>
																		</div>
																		<span class="input-group-btn">
																		<button class="btn btn-default" id="btnSubmit" type="button"><i class="fa fa-calendar"></i></button>
																		</span>
																	</div>
																</div>
															</div>
		
															<div class="form-group required">
																<div class="col-sm-12">
																	<div class="input-effect">
																		<select name="jobtype_id" class="jobtype form-control selectpicker" id="jobtype_id">
																			<option selected="" value="0">----select options----</option>
																			<option  value="1">Part Time</option>
																			<option   value="2">Full Time </option>
																		</select>
																		<label for="jobtype_id">Job Type</label>
														
																	</div>
																</div>
															</div>
		
															<div class="form-group required">
																<div class="col-sm-12">
																	<div class="input-effect">
																		<input class="form-control" id="input-job" placeholder="e.g. PHP, Web designer, Manager *" value="" name="jobcategory" type="text">
																		<label for="input-job">Job Category</label>
																		<input type="hidden" name="category_id" value="">
																	</div>
																</div>
															</div>
													</fieldset>
												
													<fieldset id="address">
														<legend class="">Your Address</legend>
														<div class="form-group required">
															<div class="col-sm-12">
																<div class="input-effect">
																	<textarea type="text" name="address" value="" placeholder="Address" id="input-address" class="form-control"></textarea>
																	<label for="input-address">Address</label>
																									</div>
															</div>
														</div>
														
														<div class="form-group required">
															<div class="col-sm-12">
																<div class="input-effect">
																	<input type="text" name="city" value="" placeholder="City" id="input-city" class="form-control" />
																	<label for="input-city">City</label>
																									</div>
															</div>
														</div>
														
														<div class="form-group required">
															<div class="col-sm-12">
																<div class="input-effect">
																	<input type="text" name="pincode" value="" placeholder="Pin Code" id="input-pincode" class="form-control" />
																	<label for="input-pincode">Pin Code</label>
																									</div>
															</div>
														</div>
														
														<div class="form-group required">
															<div class="col-sm-12">
																<div class="input-effect">
																<select name="country_id" id="input-country" class="form-control">
																	<option value="">----select options----</option>
																																			<option value="244">Aaland Islands</option>
																																												<option value="1">Afghanistan</option>
																																												<option value="2">Albania</option>
																																												<option value="3">Algeria</option>
																																												<option value="4">American Samoa</option>
																																												<option value="5">Andorra</option>
																																												<option value="6">Angola</option>
																																												<option value="7">Anguilla</option>
																																												<option value="8">Antarctica</option>
																																												<option value="9">Antigua and Barbuda</option>
																																												<option value="10">Argentina</option>
																																												<option value="11">Armenia</option>
																																												<option value="12">Aruba</option>
																																												<option value="252">Ascension Island (British)</option>
																																												<option value="13">Australia</option>
																																												<option value="14">Austria</option>
																																												<option value="15">Azerbaijan</option>
																																												<option value="16">Bahamas</option>
																																												<option value="17">Bahrain</option>
																																												<option value="18">Bangladesh</option>
																																												<option value="19">Barbados</option>
																																												<option value="20">Belarus</option>
																																												<option value="21">Belgium</option>
																																												<option value="22">Belize</option>
																																												<option value="23">Benin</option>
																																												<option value="24">Bermuda</option>
																																												<option value="25">Bhutan</option>
																																												<option value="26">Bolivia</option>
																																												<option value="245">Bonaire, Sint Eustatius and Saba</option>
																																												<option value="27">Bosnia and Herzegovina</option>
																																												<option value="28">Botswana</option>
																																												<option value="29">Bouvet Island</option>
																																												<option value="30">Brazil</option>
																																												<option value="31">British Indian Ocean Territory</option>
																																												<option value="32">Brunei Darussalam</option>
																																												<option value="33">Bulgaria</option>
																																												<option value="34">Burkina Faso</option>
																																												<option value="35">Burundi</option>
																																												<option value="36">Cambodia</option>
																																												<option value="37">Cameroon</option>
																																												<option value="38">Canada</option>
																																												<option value="251">Canary Islands</option>
																																												<option value="39">Cape Verde</option>
																																												<option value="40">Cayman Islands</option>
																																												<option value="41">Central African Republic</option>
																																												<option value="42">Chad</option>
																																												<option value="43">Chile</option>
																																												<option value="44">China</option>
																																												<option value="45">Christmas Island</option>
																																												<option value="46">Cocos (Keeling) Islands</option>
																																												<option value="47">Colombia</option>
																																												<option value="48">Comoros</option>
																																												<option value="49">Congo</option>
																																												<option value="50">Cook Islands</option>
																																												<option value="51">Costa Rica</option>
																																												<option value="52">Cote D'Ivoire</option>
																																												<option value="53">Croatia</option>
																																												<option value="54">Cuba</option>
																																												<option value="246">Curacao</option>
																																												<option value="55">Cyprus</option>
																																												<option value="56">Czech Republic</option>
																																												<option value="237">Democratic Republic of Congo</option>
																																												<option value="57">Denmark</option>
																																												<option value="58">Djibouti</option>
																																												<option value="59">Dominica</option>
																																												<option value="60">Dominican Republic</option>
																																												<option value="61">East Timor</option>
																																												<option value="62">Ecuador</option>
																																												<option value="63">Egypt</option>
																																												<option value="64">El Salvador</option>
																																												<option value="65">Equatorial Guinea</option>
																																												<option value="66">Eritrea</option>
																																												<option value="67">Estonia</option>
																																												<option value="68">Ethiopia</option>
																																												<option value="69">Falkland Islands (Malvinas)</option>
																																												<option value="70">Faroe Islands</option>
																																												<option value="71">Fiji</option>
																																												<option value="72">Finland</option>
																																												<option value="74">France, Metropolitan</option>
																																												<option value="75">French Guiana</option>
																																												<option value="76">French Polynesia</option>
																																												<option value="77">French Southern Territories</option>
																																												<option value="126">FYROM</option>
																																												<option value="78">Gabon</option>
																																												<option value="79">Gambia</option>
																																												<option value="80">Georgia</option>
																																												<option value="81">Germany</option>
																																												<option value="82">Ghana</option>
																																												<option value="83">Gibraltar</option>
																																												<option value="84">Greece</option>
																																												<option value="85">Greenland</option>
																																												<option value="86">Grenada</option>
																																												<option value="87">Guadeloupe</option>
																																												<option value="88">Guam</option>
																																												<option value="89">Guatemala</option>
																																												<option value="256">Guernsey</option>
																																												<option value="90">Guinea</option>
																																												<option value="91">Guinea-Bissau</option>
																																												<option value="92">Guyana</option>
																																												<option value="93">Haiti</option>
																																												<option value="94">Heard and Mc Donald Islands</option>
																																												<option value="95">Honduras</option>
																																												<option value="96">Hong Kong</option>
																																												<option value="97">Hungary</option>
																																												<option value="98">Iceland</option>
																																												<option value="99">India</option>
																																												<option value="100">Indonesia</option>
																																												<option value="101">Iran (Islamic Republic of)</option>
																																												<option value="102">Iraq</option>
																																												<option value="103">Ireland</option>
																																												<option value="254">Isle of Man</option>
																																												<option value="104">Israel</option>
																																												<option value="105">Italy</option>
																																												<option value="106">Jamaica</option>
																																												<option value="107">Japan</option>
																																												<option value="257">Jersey</option>
																																												<option value="108">Jordan</option>
																																												<option value="109">Kazakhstan</option>
																																												<option value="110">Kenya</option>
																																												<option value="111">Kiribati</option>
																																												<option value="253">Kosovo, Republic of</option>
																																												<option value="114">Kuwait</option>
																																												<option value="115">Kyrgyzstan</option>
																																												<option value="116">Lao People's Democratic Republic</option>
																																												<option value="117">Latvia</option>
																																												<option value="118">Lebanon</option>
																																												<option value="119">Lesotho</option>
																																												<option value="120">Liberia</option>
																																												<option value="121">Libyan Arab Jamahiriya</option>
																																												<option value="122">Liechtenstein</option>
																																												<option value="123">Lithuania</option>
																																												<option value="124">Luxembourg</option>
																																												<option value="125">Macau</option>
																																												<option value="127">Madagascar</option>
																																												<option value="128">Malawi</option>
																																												<option value="129">Malaysia</option>
																																												<option value="130">Maldives</option>
																																												<option value="131">Mali</option>
																																												<option value="132">Malta</option>
																																												<option value="133">Marshall Islands</option>
																																												<option value="134">Martinique</option>
																																												<option value="135">Mauritania</option>
																																												<option value="136">Mauritius</option>
																																												<option value="137">Mayotte</option>
																																												<option value="138">Mexico</option>
																																												<option value="139">Micronesia, Federated States of</option>
																																												<option value="140">Moldova, Republic of</option>
																																												<option value="141">Monaco</option>
																																												<option value="142">Mongolia</option>
																																												<option value="242">Montenegro</option>
																																												<option value="143">Montserrat</option>
																																												<option value="144">Morocco</option>
																																												<option value="145">Mozambique</option>
																																												<option value="146">Myanmar</option>
																																												<option value="147">Namibia</option>
																																												<option value="148">Nauru</option>
																																												<option value="149">Nepal</option>
																																												<option value="150">Netherlands</option>
																																												<option value="151">Netherlands Antilles</option>
																																												<option value="152">New Caledonia</option>
																																												<option value="153">New Zealand</option>
																																												<option value="154">Nicaragua</option>
																																												<option value="155">Niger</option>
																																												<option value="156">Nigeria</option>
																																												<option value="157">Niue</option>
																																												<option value="158">Norfolk Island</option>
																																												<option value="112">North Korea</option>
																																												<option value="159">Northern Mariana Islands</option>
																																												<option value="160">Norway</option>
																																												<option value="161">Oman</option>
																																												<option value="162">Pakistan</option>
																																												<option value="163">Palau</option>
																																												<option value="247">Palestinian Territory, Occupied</option>
																																												<option value="164">Panama</option>
																																												<option value="165">Papua New Guinea</option>
																																												<option value="166">Paraguay</option>
																																												<option value="167">Peru</option>
																																												<option value="168">Philippines</option>
																																												<option value="169">Pitcairn</option>
																																												<option value="170">Poland</option>
																																												<option value="171">Portugal</option>
																																												<option value="172">Puerto Rico</option>
																																												<option value="173">Qatar</option>
																																												<option value="174">Reunion</option>
																																												<option value="175">Romania</option>
																																												<option value="176">Russian Federation</option>
																																												<option value="177">Rwanda</option>
																																												<option value="178">Saint Kitts and Nevis</option>
																																												<option value="179">Saint Lucia</option>
																																												<option value="180">Saint Vincent and the Grenadines</option>
																																												<option value="181">Samoa</option>
																																												<option value="182">San Marino</option>
																																												<option value="183">Sao Tome and Principe</option>
																																												<option value="184">Saudi Arabia</option>
																																												<option value="185">Senegal</option>
																																												<option value="243">Serbia</option>
																																												<option value="186">Seychelles</option>
																																												<option value="187">Sierra Leone</option>
																																												<option value="188">Singapore</option>
																																												<option value="189">Slovak Republic</option>
																																												<option value="190">Slovenia</option>
																																												<option value="191">Solomon Islands</option>
																																												<option value="192">Somalia</option>
																																												<option value="193">South Africa</option>
																																												<option value="194">South Georgia &amp; South Sandwich Islands</option>
																																												<option value="113">South Korea</option>
																																												<option value="248">South Sudan</option>
																																												<option value="195">Spain</option>
																																												<option value="196">Sri Lanka</option>
																																												<option value="249">St. Barthelemy</option>
																																												<option value="197">St. Helena</option>
																																												<option value="250">St. Martin (French part)</option>
																																												<option value="198">St. Pierre and Miquelon</option>
																																												<option value="199">Sudan</option>
																																												<option value="200">Suriname</option>
																																												<option value="201">Svalbard and Jan Mayen Islands</option>
																																												<option value="202">Swaziland</option>
																																												<option value="203">Sweden</option>
																																												<option value="204">Switzerland</option>
																																												<option value="205">Syrian Arab Republic</option>
																																												<option value="206">Taiwan</option>
																																												<option value="207">Tajikistan</option>
																																												<option value="208">Tanzania, United Republic of</option>
																																												<option value="209">Thailand</option>
																																												<option value="210">Togo</option>
																																												<option value="211">Tokelau</option>
																																												<option value="212">Tonga</option>
																																												<option value="213">Trinidad and Tobago</option>
																																												<option value="255">Tristan da Cunha</option>
																																												<option value="214">Tunisia</option>
																																												<option value="215">Turkey</option>
																																												<option value="216">Turkmenistan</option>
																																												<option value="217">Turks and Caicos Islands</option>
																																												<option value="218">Tuvalu</option>
																																												<option value="219">Uganda</option>
																																												<option value="220">Ukraine</option>
																																												<option value="221">United Arab Emirates</option>
																																												<option value="222" selected="selected">United Kingdom</option>
																																												<option value="223">United States</option>
																																												<option value="224">United States Minor Outlying Islands</option>
																																												<option value="225">Uruguay</option>
																																												<option value="226">Uzbekistan</option>
																																												<option value="227">Vanuatu</option>
																																												<option value="228">Vatican City State (Holy See)</option>
																																												<option value="229">Venezuela</option>
																																												<option value="230">Viet Nam</option>
																																												<option value="231">Virgin Islands (British)</option>
																																												<option value="232">Virgin Islands (U.S.)</option>
																																												<option value="233">Wallis and Futuna Islands</option>
																																												<option value="234">Western Sahara</option>
																																												<option value="235">Yemen</option>
																																												<option value="238">Zambia</option>
																																												<option value="239">Zimbabwe</option>
																																		</select>
																<label for="input-country">Country</label>
																									</div>
															</div>
														</div>
														
														<div class="form-group required">
															<div class="col-sm-12">
																<div class="input-effect">
																	<select name="zone_id" value="" id="input-zone" class="form-control">
																	</select>
																	<label for="input-zone">Region / State</label>
																									</div>
															</div>
														</div>
														
																					<div class="form-group required">
																<div class="col-sm-12">
																	<div class="input-effect">
																		<input type="tel" name="mobile_phone" value="" placeholder="Mobile" id="input-mobile_phone" class="form-control" />
																		<label for="input-mobile_phone">Mobile</label>
																											</div>
																</div>
															</div>
															<div class="form-group required">
																<div class="col-sm-12">
																	<div class="input-effect">
																		<input type="text" name="home_phone" value="" placeholder="Home Phone" id="input-package-titl" class="form-control">
																		<label for="input-package-titl">Home Phone</label>
																											</div>
																</div>
															</div>
															<div class="form-group required">
																<div class="col-sm-12">
																	<div class="input-effect">
																		<input type="text" name="profissional" value="" placeholder="Profissional" id="input-profissional" class="form-control">
																		<label for="input-profissional">Profissional</label>
																											</div>
																</div>
															</div>
														
															<div class="form-group required">
																<div class="col-sm-12">
																	<div class="input-effect">
																		<input type="text" name="experience" value="" placeholder="Experience" id="input-experience" class="form-control">
																		<label for="input-experience">Experience</label>
																											</div>
																</div>
															</div>
															
															<div class="form-group required">
																<div class="col-sm-12">
																	<div class="input-effect">
																		<input type="text" name="about_self" value="" placeholder="About your self" id="input-about_self" class="form-control">
																		<label for="input-about_self">About your self</label>
																	</div>
																</div>
															</div>
															
															<div class="form-group">
																<div class="col-sm-12">
																<label for="input-educations">Education</label>	
																<ul class="nav nav-tabs" id="language">
																									<li><a href="#language1" data-toggle="tab"><img src="catalog/language/en-gb/en-gb.png" title="English" /> English</a></li>
																									</ul>
																<div class="tab-content">
																										<div class="tab-pane table-responsive" id="language1">
																		<table id="educations1" class="table table-striped table-bordered table-hover">
																			<thead class="text-center">
																				<tr>
																					<td>Degree</td>
																					<td>Collage/School</td>
																					<td>Passed Year</td>
																					<td>Percentage %</td>
																				</tr>
																			</thead>
																			<tbody>
																																<tr id="education-row0">
																					<td></td>
																					<td></td>
																					<td></td>
																					<td></td>
																				</tr>
																															</tbody>
																			<tfoot>
																				<tr>
																					<td colspan="4"></td>
																					<td class="text-right"><button type="button" onclick="addAducation('1');" data-toggle="tooltip" title="Add" class="btn btn-inverse"><i class="fa fa-plus-circle"></i></button></td>
																				</tr>
																			</tfoot>
																		</table>
																	</div>
																									</div>
															</div>
														</div>	
		
																<table id="employ-skill" class="table table-striped table-bordered table-hover">
																	<thead>
																	<tr>
																		<td class="text-left">Skill</td>
																		<td class="text-left"></td>
		
																	</tr>
																	</thead>
																	<tbody>
																					<tr id="skill-row0">
																		<td class="text-left"></td>
																		<td class="text-left"></td>
																	</tr>
																			
																	</tbody>
																	<tfoot>
																	<tr>
																		<td colspan="1"></td>
		
																		<td class="text-left"><button type="button" onclick="addSkills();" data-toggle="tooltip" title="" class="btn btn-default"><i class="fa fa-plus-circle"></i></button></td>
																	</tr>
																	</tfoot>
																</table>
														
														<div class="form-group required">
															<div class="col-sm-12">
																<div class="input-effect">
																	<input type="text" name="interest" value="" placeholder="Interest" id="input-additional" class="form-control">
																	<label for="input-additional">Additional</label>
																									</div>
															</div>
														</div>
														
														<div class="form-group required">
															<div class="col-sm-12">
																<input type="text" name="career" value="" placeholder="Career" id="input-career" class="form-control">
															</div>
														</div>
														
														<div class="form-group required">
															<div class="col-sm-12">
																<input type="text" name="achievement" value="" placeholder="Achievement" id="input-achievement" class="form-control">
															</div>
														</div>
														
													</fieldset>
													
													<div class="form-group uploadresume">
														<label class="col-sm-3 col-xs-12" for="input-lastname">Add your CV</label>
														<div class="col-sm-9 col-xs-12">		
															<div class="browse row">
																<div class="imagebox col-sm-6 col-xs-12">
																<span id="thumb-cvimage"><img src="#" alt="" title="" height="120" width="120"/></span>
																</div>
																<div class="col-sm-6 col-xs-12 text-right">
																<button type="button" id="button-cvupload" data-loading-text="Loading..."class="btn btn-default">
																<i class="fa fa-upload"></i> Upload File</button>
																
																<input type="" name="resumelist" value="" id="input-cvimage" readonly />
																</div>
															</div>
														</div>
													</div>	
																							
													<div class="form-group">
														<div class="col-sm-12 confirmation">
															<label>
																								<input type="checkbox" name="agree" value="1" />
																								I have read and agree to the <a href="index5c04.html?route=information/information/agree&amp;information_id=4" class="agree"><b>About Us</b></a>							</label>							
														</div>
													</div>
		
													
													<div class="buttons">
														&nbsp;
														<input type="submit" value="Register Now" class="btn btn-danger btn-block btnus f_rubik"/>
													</div>
																	<p>Already Have An Account? <a href="login.php">Click Here</a>.
												</form>	
													<!-- /. form -->
											</div>
													<div class="tab-pane active" id="tab-company">
														<form action="http://ocsolutions.co.in/jobportal-v2/index.php?route=employ/register" method="post" enctype="multipart/form-data" class="form-horizontal">
																<fieldset id="account">
																	<div class="form-group required">
																		<div class="col-sm-12">
																			<div class="input-effect">	
																				<input type="text" name="fullname" value="" id="input-title" class="form-control" >
																				<label for="input-title">Full Name</label>	
																				<i class="fa fa-user" aria-hidden="true"></i>
																													</div>
																		</div>
																	</div>
																	<div class="form-group required">
																		<div class="col-sm-12">
																			<div class="input-effect">
																				<input type="email" name="email" value="" id="input-email" class="form-control" />
																				<label for="input-email">E-Mail Address</label>
																				<i class="fa fa-envelope-o" aria-hidden="true"></i>
																													</div>
																		</div>
																	</div>
																	<div class="form-group required">
																		<div class="col-sm-12">
																		<div class="input-effect">
																			<input type="password" name="password" value="" id="input-password" class="form-control" />
																			<label for="input-password">Password</label>
																			<i class="fa fa-lock" aria-hidden="true"></i>
																												</div>
																		</div>
																	</div>
																	<div class="form-group required">
																		<div class="col-sm-12">
																			<div class="input-effect">
																				<input type="password" name="confirm" value="" id="input-confirm" class="form-control" />
																				<label for="input-confirm">Password Confirm</label>
																				<i class="fa fa-lock" aria-hidden="true"></i>
																													</div>
																		</div>
																	</div>
																	
																	<div class="form-group required">
																		<div class="col-sm-12">
																			<div class="input-effect">
																			<select class="form-control" value="" id="input-gender" name="gender">
																				<option value="">-------- Please Select --------</option>
																				<option value="1" >Male</option>
																				<option value="0" >Female</option>
																			</select>
																			<label for="input-gender">Gender</label>
																												</div>
																		</div>	 
																	</div>
															
																	<div class="form-group required">
																		<label class="col-sm-3 col-xs-12" for="input-lastname">Image</label>
																		<div class="imagebox col-sm-5 col-xs-12">
																			<span id="thumb-image"><img src="#" alt="" title="" height="120" width="120"/></span>
																		</div>
																		<div class="col-sm-4 col-xs-12 text-right">
																		<button type="button" id="button-upload" data-loading-text="Loading..." 
																		class="btn btn-default"><i class="fa fa-upload"></i> Upload File</button>
																		<input type="hidden" name="image" value="" id="input-image" />
																		</div>
																	</div>
															
																<div class="form-group required">
																	<div class="col-sm-12">
																		<div class="input-group date">
																			<div class="input-effect">
																			<input type="text" name="date_of_birth" value="" placeholder="Date of Birth" data-date-format="YYYY-MM-DD" id="input-date-available" class="form-control" />
																				<label for="input-date-available">Date of Birth</label>
																			</div>
																			<span class="input-group-btn">
																			<button class="btn btn-default" id="btnSubmit" type="button"><i class="fa fa-calendar"></i></button>
																			</span>
																		</div>
																									</div>
																</div>
		
																<div class="form-group required">
																	<div class="col-sm-12">
																		<div class="input-effect">
																			<select name="jobtype_id" class="jobtype form-control selectpicker" id="jobtype_id">
																				<option selected="" value="0">----select options----</option>
																				<option  value="1">Part Time</option>
																				<option   value="2">Full Time </option>
																			</select>
																			<label for="jobtype_id">Job Type</label>
															
																											</div>
																	</div>
																</div>
		
																<div class="form-group required">
																	<div class="col-sm-12">
																		<div class="input-effect">
																			<input class="form-control" id="input-job" placeholder="e.g. PHP, Web designer, Manager *" value="" name="jobcategory" type="text">
																			<label for="input-job">Job Category</label>
																			<input type="hidden" name="category_id" value="">
																											</div>
																	</div>
																</div>
															</fieldset>
															
															<fieldset id="address">
																<legend class="">Your Address</legend>
																<div class="form-group required">
																	<div class="col-sm-12">
																		<div class="input-effect">
																			<textarea type="text" name="address" value="" placeholder="Address" id="input-address" class="form-control"></textarea>
																			<label for="input-address">Address</label>
																											</div>
																	</div>
																</div>
																
																<div class="form-group required">
																	<div class="col-sm-12">
																		<div class="input-effect">
																			<input type="text" name="city" value="" placeholder="City" id="input-city" class="form-control" />
																			<label for="input-city">City</label>
																											</div>
																	</div>
																</div>
																
																<div class="form-group required">
																	<div class="col-sm-12">
																		<div class="input-effect">
																			<input type="text" name="pincode" value="" placeholder="Pin Code" id="input-pincode" class="form-control" />
																			<label for="input-pincode">Pin Code</label>
																											</div>
																	</div>
																</div>
																
																<div class="form-group required">
																	<div class="col-sm-12">
																		<div class="input-effect">
																		<select name="country_id" id="input-country" class="form-control">
																			<option value="">----select options----</option>
																																					<option value="244">Aaland Islands</option>
																																														<option value="1">Afghanistan</option>
																																														<option value="2">Albania</option>
																																														<option value="3">Algeria</option>
																																														<option value="4">American Samoa</option>
																																														<option value="5">Andorra</option>
																																														<option value="6">Angola</option>
																																														<option value="7">Anguilla</option>
																																														<option value="8">Antarctica</option>
																																														<option value="9">Antigua and Barbuda</option>
																																														<option value="10">Argentina</option>
																																														<option value="11">Armenia</option>
																																														<option value="12">Aruba</option>
																																														<option value="252">Ascension Island (British)</option>
																																														<option value="13">Australia</option>
																																														<option value="14">Austria</option>
																																														<option value="15">Azerbaijan</option>
																																														<option value="16">Bahamas</option>
																																														<option value="17">Bahrain</option>
																																														<option value="18">Bangladesh</option>
																																														<option value="19">Barbados</option>
																																														<option value="20">Belarus</option>
																																														<option value="21">Belgium</option>
																																														<option value="22">Belize</option>
																																														<option value="23">Benin</option>
																																														<option value="24">Bermuda</option>
																																														<option value="25">Bhutan</option>
																																														<option value="26">Bolivia</option>
																																														<option value="245">Bonaire, Sint Eustatius and Saba</option>
																																														<option value="27">Bosnia and Herzegovina</option>
																																														<option value="28">Botswana</option>
																																														<option value="29">Bouvet Island</option>
																																														<option value="30">Brazil</option>
																																														<option value="31">British Indian Ocean Territory</option>
																																														<option value="32">Brunei Darussalam</option>
																																														<option value="33">Bulgaria</option>
																																														<option value="34">Burkina Faso</option>
																																														<option value="35">Burundi</option>
																																														<option value="36">Cambodia</option>
																																														<option value="37">Cameroon</option>
																																														<option value="38">Canada</option>
																																														<option value="251">Canary Islands</option>
																																														<option value="39">Cape Verde</option>
																																														<option value="40">Cayman Islands</option>
																																														<option value="41">Central African Republic</option>
																																														<option value="42">Chad</option>
																																														<option value="43">Chile</option>
																																														<option value="44">China</option>
																																														<option value="45">Christmas Island</option>
																																														<option value="46">Cocos (Keeling) Islands</option>
																																														<option value="47">Colombia</option>
																																														<option value="48">Comoros</option>
																																														<option value="49">Congo</option>
																																														<option value="50">Cook Islands</option>
																																														<option value="51">Costa Rica</option>
																																														<option value="52">Cote D'Ivoire</option>
																																														<option value="53">Croatia</option>
																																														<option value="54">Cuba</option>
																																														<option value="246">Curacao</option>
																																														<option value="55">Cyprus</option>
																																														<option value="56">Czech Republic</option>
																																														<option value="237">Democratic Republic of Congo</option>
																																														<option value="57">Denmark</option>
																																														<option value="58">Djibouti</option>
																																														<option value="59">Dominica</option>
																																														<option value="60">Dominican Republic</option>
																																														<option value="61">East Timor</option>
																																														<option value="62">Ecuador</option>
																																														<option value="63">Egypt</option>
																																														<option value="64">El Salvador</option>
																																														<option value="65">Equatorial Guinea</option>
																																														<option value="66">Eritrea</option>
																																														<option value="67">Estonia</option>
																																														<option value="68">Ethiopia</option>
																																														<option value="69">Falkland Islands (Malvinas)</option>
																																														<option value="70">Faroe Islands</option>
																																														<option value="71">Fiji</option>
																																														<option value="72">Finland</option>
																																														<option value="74">France, Metropolitan</option>
																																														<option value="75">French Guiana</option>
																																														<option value="76">French Polynesia</option>
																																														<option value="77">French Southern Territories</option>
																																														<option value="126">FYROM</option>
																																														<option value="78">Gabon</option>
																																														<option value="79">Gambia</option>
																																														<option value="80">Georgia</option>
																																														<option value="81">Germany</option>
																																														<option value="82">Ghana</option>
																																														<option value="83">Gibraltar</option>
																																														<option value="84">Greece</option>
																																														<option value="85">Greenland</option>
																																														<option value="86">Grenada</option>
																																														<option value="87">Guadeloupe</option>
																																														<option value="88">Guam</option>
																																														<option value="89">Guatemala</option>
																																														<option value="256">Guernsey</option>
																																														<option value="90">Guinea</option>
																																														<option value="91">Guinea-Bissau</option>
																																														<option value="92">Guyana</option>
																																														<option value="93">Haiti</option>
																																														<option value="94">Heard and Mc Donald Islands</option>
																																														<option value="95">Honduras</option>
																																														<option value="96">Hong Kong</option>
																																														<option value="97">Hungary</option>
																																														<option value="98">Iceland</option>
																																														<option value="99">India</option>
																																														<option value="100">Indonesia</option>
																																														<option value="101">Iran (Islamic Republic of)</option>
																																														<option value="102">Iraq</option>
																																														<option value="103">Ireland</option>
																																														<option value="254">Isle of Man</option>
																																														<option value="104">Israel</option>
																																														<option value="105">Italy</option>
																																														<option value="106">Jamaica</option>
																																														<option value="107">Japan</option>
																																														<option value="257">Jersey</option>
																																														<option value="108">Jordan</option>
																																														<option value="109">Kazakhstan</option>
																																														<option value="110">Kenya</option>
																																														<option value="111">Kiribati</option>
																																														<option value="253">Kosovo, Republic of</option>
																																														<option value="114">Kuwait</option>
																																														<option value="115">Kyrgyzstan</option>
																																														<option value="116">Lao People's Democratic Republic</option>
																																														<option value="117">Latvia</option>
																																														<option value="118">Lebanon</option>
																																														<option value="119">Lesotho</option>
																																														<option value="120">Liberia</option>
																																														<option value="121">Libyan Arab Jamahiriya</option>
																																														<option value="122">Liechtenstein</option>
																																														<option value="123">Lithuania</option>
																																														<option value="124">Luxembourg</option>
																																														<option value="125">Macau</option>
																																														<option value="127">Madagascar</option>
																																														<option value="128">Malawi</option>
																																														<option value="129">Malaysia</option>
																																														<option value="130">Maldives</option>
																																														<option value="131">Mali</option>
																																														<option value="132">Malta</option>
																																														<option value="133">Marshall Islands</option>
																																														<option value="134">Martinique</option>
																																														<option value="135">Mauritania</option>
																																														<option value="136">Mauritius</option>
																																														<option value="137">Mayotte</option>
																																														<option value="138">Mexico</option>
																																														<option value="139">Micronesia, Federated States of</option>
																																														<option value="140">Moldova, Republic of</option>
																																														<option value="141">Monaco</option>
																																														<option value="142">Mongolia</option>
																																														<option value="242">Montenegro</option>
																																														<option value="143">Montserrat</option>
																																														<option value="144">Morocco</option>
																																														<option value="145">Mozambique</option>
																																														<option value="146">Myanmar</option>
																																														<option value="147">Namibia</option>
																																														<option value="148">Nauru</option>
																																														<option value="149">Nepal</option>
																																														<option value="150">Netherlands</option>
																																														<option value="151">Netherlands Antilles</option>
																																														<option value="152">New Caledonia</option>
																																														<option value="153">New Zealand</option>
																																														<option value="154">Nicaragua</option>
																																														<option value="155">Niger</option>
																																														<option value="156">Nigeria</option>
																																														<option value="157">Niue</option>
																																														<option value="158">Norfolk Island</option>
																																														<option value="112">North Korea</option>
																																														<option value="159">Northern Mariana Islands</option>
																																														<option value="160">Norway</option>
																																														<option value="161">Oman</option>
																																														<option value="162">Pakistan</option>
																																														<option value="163">Palau</option>
																																														<option value="247">Palestinian Territory, Occupied</option>
																																														<option value="164">Panama</option>
																																														<option value="165">Papua New Guinea</option>
																																														<option value="166">Paraguay</option>
																																														<option value="167">Peru</option>
																																														<option value="168">Philippines</option>
																																														<option value="169">Pitcairn</option>
																																														<option value="170">Poland</option>
																																														<option value="171">Portugal</option>
																																														<option value="172">Puerto Rico</option>
																																														<option value="173">Qatar</option>
																																														<option value="174">Reunion</option>
																																														<option value="175">Romania</option>
																																														<option value="176">Russian Federation</option>
																																														<option value="177">Rwanda</option>
																																														<option value="178">Saint Kitts and Nevis</option>
																																														<option value="179">Saint Lucia</option>
																																														<option value="180">Saint Vincent and the Grenadines</option>
																																														<option value="181">Samoa</option>
																																														<option value="182">San Marino</option>
																																														<option value="183">Sao Tome and Principe</option>
																																														<option value="184">Saudi Arabia</option>
																																														<option value="185">Senegal</option>
																																														<option value="243">Serbia</option>
																																														<option value="186">Seychelles</option>
																																														<option value="187">Sierra Leone</option>
																																														<option value="188">Singapore</option>
																																														<option value="189">Slovak Republic</option>
																																														<option value="190">Slovenia</option>
																																														<option value="191">Solomon Islands</option>
																																														<option value="192">Somalia</option>
																																														<option value="193">South Africa</option>
																																														<option value="194">South Georgia &amp; South Sandwich Islands</option>
																																														<option value="113">South Korea</option>
																																														<option value="248">South Sudan</option>
																																														<option value="195">Spain</option>
																																														<option value="196">Sri Lanka</option>
																																														<option value="249">St. Barthelemy</option>
																																														<option value="197">St. Helena</option>
																																														<option value="250">St. Martin (French part)</option>
																																														<option value="198">St. Pierre and Miquelon</option>
																																														<option value="199">Sudan</option>
																																														<option value="200">Suriname</option>
																																														<option value="201">Svalbard and Jan Mayen Islands</option>
																																														<option value="202">Swaziland</option>
																																														<option value="203">Sweden</option>
																																														<option value="204">Switzerland</option>
																																														<option value="205">Syrian Arab Republic</option>
																																														<option value="206">Taiwan</option>
																																														<option value="207">Tajikistan</option>
																																														<option value="208">Tanzania, United Republic of</option>
																																														<option value="209">Thailand</option>
																																														<option value="210">Togo</option>
																																														<option value="211">Tokelau</option>
																																														<option value="212">Tonga</option>
																																														<option value="213">Trinidad and Tobago</option>
																																														<option value="255">Tristan da Cunha</option>
																																														<option value="214">Tunisia</option>
																																														<option value="215">Turkey</option>
																																														<option value="216">Turkmenistan</option>
																																														<option value="217">Turks and Caicos Islands</option>
																																														<option value="218">Tuvalu</option>
																																														<option value="219">Uganda</option>
																																														<option value="220">Ukraine</option>
																																														<option value="221">United Arab Emirates</option>
																																														<option value="222" selected="selected">United Kingdom</option>
																																														<option value="223">United States</option>
																																														<option value="224">United States Minor Outlying Islands</option>
																																														<option value="225">Uruguay</option>
																																														<option value="226">Uzbekistan</option>
																																														<option value="227">Vanuatu</option>
																																														<option value="228">Vatican City State (Holy See)</option>
																																														<option value="229">Venezuela</option>
																																														<option value="230">Viet Nam</option>
																																														<option value="231">Virgin Islands (British)</option>
																																														<option value="232">Virgin Islands (U.S.)</option>
																																														<option value="233">Wallis and Futuna Islands</option>
																																														<option value="234">Western Sahara</option>
																																														<option value="235">Yemen</option>
																																														<option value="238">Zambia</option>
																																														<option value="239">Zimbabwe</option>
																																				</select>
																		<label for="input-country">Country</label>
																											</div>
																	</div>
																</div>
																
																<div class="form-group required">
																	<div class="col-sm-12">
																		<div class="input-effect">
																			<select name="zone_id" value="" id="input-zone" class="form-control">
																			</select>
																			<label for="input-zone">Region / State</label>
																											</div>
																	</div>
																</div>
																
																	<div class="form-group required">
																		<div class="col-sm-12">
																			<div class="input-effect">
																				<input type="tel" name="mobile_phone" value="" placeholder="Mobile" id="input-mobile_phone" class="form-control" />
																				<label for="input-mobile_phone">Mobile</label>
																													</div>
																		</div>
																	</div>
																	<div class="form-group required">
																		<div class="col-sm-12">
																			<div class="input-effect">
																				<input type="text" name="home_phone" value="" placeholder="Home Phone" id="input-package-titl" class="form-control">
																				<label for="input-package-titl">Home Phone</label>
																													</div>
																		</div>
																	</div>
																	<div class="form-group required">
																		<div class="col-sm-12">
																			<div class="input-effect">
																				<input type="text" name="profissional" value="" placeholder="Profissional" id="input-profissional" class="form-control">
																				<label for="input-profissional">Profissional</label>
																													</div>
																		</div>
																	</div>
																
																	<div class="form-group required">
																		<div class="col-sm-12">
																			<div class="input-effect">
																				<input type="text" name="experience" value="" placeholder="Experience" id="input-experience" class="form-control">
																				<label for="input-experience">Experience</label>
																													</div>
																		</div>
																	</div>
																	
																	<div class="form-group required">
																		<div class="col-sm-12">
																			<div class="input-effect">
																				<input type="text" name="about_self" value="" placeholder="About your self" id="input-about_self" class="form-control">
																				<label for="input-about_self">About your self</label>
																			</div>
																		</div>
																	</div>
																	
																	<div class="form-group">
																		<div class="col-sm-12">
																			<label for="input-educations">Education</label>	
																			<ul class="nav nav-tabs" id="language">
																												<li><a href="#language1" data-toggle="tab"><img src="catalog/language/en-gb/en-gb.png" title="English" /> English</a></li>
																												</ul>
																			<div class="tab-content">
																				<div class="tab-pane table-responsive" id="language1">
																					<table id="educations1" class="table table-striped table-bordered table-hover">
																						<thead class="text-center">
																							<tr>
																								<td>Degree</td>
																								<td>Collage/School</td>
																								<td>Passed Year</td>
																								<td>Percentage %</td>
																							</tr>
																						</thead>
																						<tbody>
																																			<tr id="education-row0">
																								<td></td>
																								<td></td>
																								<td></td>
																								<td></td>
																							</tr>
																																		</tbody>
																						<tfoot>
																							<tr>
																								<td colspan="4"></td>
																								<td class="text-right"><button type="button" onclick="addAducation('1');" data-toggle="tooltip" title="Add" class="btn btn-inverse"><i class="fa fa-plus-circle"></i></button></td>
																							</tr>
																						</tfoot>
																					</table>
																				</div>
																			</div>
																		</div>
																	</div>	
		
																		<table id="employ-skill" class="table table-striped table-bordered table-hover">
																			<thead>
																			<tr>
																				<td class="text-left">Skill</td>
																				<td class="text-left"></td>
		
																			</tr>
																			</thead>
																			<tbody>
																							<tr id="skill-row0">
																				<td class="text-left"></td>
																				<td class="text-left"></td>
																			</tr>
																					
																			</tbody>
																			<tfoot>
																			<tr>
																				<td colspan="1"></td>
		
																				<td class="text-left"><button type="button" onclick="addSkills();" data-toggle="tooltip" title="" class="btn btn-default"><i class="fa fa-plus-circle"></i></button></td>
																			</tr>
																			</tfoot>
																		</table>
																
																<div class="form-group required">
																	<div class="col-sm-12">
																		<div class="input-effect">
																			<input type="text" name="interest" value="" placeholder="Interest" id="input-additional" class="form-control">
																			<label for="input-additional">Additional</label>
																											</div>
																	</div>
																</div>
																
																<div class="form-group required">
																	<div class="col-sm-12">
																		<input type="text" name="career" value="" placeholder="Career" id="input-career" class="form-control">
																	</div>
																</div>
																
																<div class="form-group required">
																	<div class="col-sm-12">
																		<input type="text" name="achievement" value="" placeholder="Achievement" id="input-achievement" class="form-control">
																	</div>
																</div>
																
															</fieldset>
															
															<div class="form-group uploadresume">
																<label class="col-sm-3 col-xs-12" for="input-lastname">Add your CV</label>
																<div class="col-sm-9 col-xs-12">		
																	<div class="browse row">
																		<div class="imagebox col-sm-6 col-xs-12">
																		<span id="thumb-cvimage"><img src="#" alt="" title="" height="120" width="120"/></span>
																		</div>
																		<div class="col-sm-6 col-xs-12 text-right">
																		<button type="button" id="button-cvupload" data-loading-text="Loading..."class="btn btn-default">
																		<i class="fa fa-upload"></i> Upload File</button>
																		
																		<input type="" name="resumelist" value="" id="input-cvimage" readonly />
																		</div>
																	</div>
																</div>
															</div>	
																									
															<div class="form-group">
																<div class="col-sm-12 confirmation">
																	<label>
																										<input type="checkbox" name="agree" value="1" />
																										I have read and agree to the <a href="index5c04.html?route=information/information/agree&amp;information_id=4" class="agree"><b>About Us</b></a>							</label>							
																</div>
															</div>
		
															
															<div class="buttons">
																&nbsp;
																<input type="submit" value="Register Now" class="btn btn-danger btn-block btnus f_rubik"/>
															</div>
																				<p>Already Have An Account? <a href="login.php">Click Here</a>.
														</form>
														<!-- /. form -->
													</div>
								<?php
											}
										}
								?>
										<!-- /#tab-employee -->

											<!-- /#tab-company -->
							</div>	
								<!-- /.tab-content -->
			
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript"><!--
$('#language a:first').tab('show');
//--></script>

<script type="text/javascript"><!--
var education_row = 1;
function addAducation(language_id) {
	html  = '<tr id="education-row' + education_row + '">';
	
	html += '<td class="text-right"><input name="education_rows[' + language_id + '][' + education_row + '][degree]" placeholder="Degree" class="form-control"></td>';
	
	html += '<td class="text-right"><input name="education_rows[' + language_id + '][' + education_row + '][collage]" placeholder="Collage/School" class="form-control"></td>';
	
	html += '<td class="text-right"><input name="education_rows[' + language_id + '][' + education_row + '][passed_year]" placeholder="Passed Year" class="form-control"></td>';
  	
	html += '<td class="text-right"><input name="education_rows[' + language_id + '][' + education_row + '][percentage]" placeholder="Percentage %" class="form-control"></td>';
	
	html += '<td class="text-left"><button type="button" onclick="$(\'#education-row' + education_row  + ', .tooltip\').remove();" data-toggle="tooltip" title="Remove" class="btn btn-danger"><i class="fa fa-minus-circle"></i></button></td>';
	html += '</tr>';
	
   $('#educations' + language_id + ' tbody').append(html);
  education_row++;
}
//--></script>

<script type="text/javascript"><!--
var skill_row = 1;

function addSkills() {
	html  = '<tr id="skill-row' + skill_row + '">';	
	html += '    <td>';
		html += '    <div class="input-group">';
	html += '      <span class="input-group-addon"><img src="catalog/language/en-gb/en-gb.png" title="English" /></span><input type="text" name="skill[' + skill_row + '][skill_description][1][name]" value="" placeholder="Skill" class="form-control" />';
    html += '    </div>';
		html += '  </td>';
	html += '  <td class="text-left"><button type="button" onclick="$(\'#skill-row' + skill_row + '\').remove();" data-toggle="tooltip" title="Remove" class="btn btn-danger"><i class="fa fa-minus-circle"></i></button></td>';
	html += '</tr>';	
	
	$('#employ-skill tbody').append(html);
	
	skill_row++;
}
//--></script>


<script type="text/javascript"><!--
$('.date').datetimepicker({
	pickTime: false
});

$('.time').datetimepicker({
	pickDate: false
});

$('.datetime').datetimepicker({
	pickDate: true,
	pickTime: true
});
//--></script>


<script>
$('button[id^=\'button-upload\']').on('click', function() {
	//alert();
	var node = this;

	$('#form-upload').remove();

	$('body').prepend('<form enctype="multipart/form-data" id="form-upload" style="display: none;"><input type="file" name="file" /></form>');

	$('#form-upload input[name=\'file\']').trigger('click');

	if (typeof timer != 'undefined') {
    	clearInterval(timer);
	}

	timer = setInterval(function() {
		if ($('#form-upload input[name=\'file\']').val() != '') {
			clearInterval(timer);

			$.ajax({
				url: 'index.php?route=employ/register/upload',
				type: 'post',
				dataType: 'json',
				data: new FormData($('#form-upload')[0]),
				cache: false,
				contentType: false,
				processData: false,
				beforeSend: function() {
					$(node).button('loading');
				},
				complete: function() {
					$(node).button('reset');
				},
				success: function(json) {
					$('.text-danger').remove();

					if (json['error']) {
						$(node).parent().find('input').after('<div class="text-danger">' + json['error'] + '</div>');
					}

					if (json['success']) {
						var imageurl="index.html";
						$("#thumb-image").html('<img src="'+imageurl+"image/"+json['location1']+'" alt="" title="" width="100"/>');
						$("#input-image").val(json['location1']);
					}
				},
				error: function(xhr, ajaxOptions, thrownError) {
					alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
				}
			});
		}
	}, 500);
});

</script>

<script>
$('button[id^=\'button-cvupload\']').on('click', function() {
	//alert();
	var node = this;

	$('#form-cvupload').remove();

	$('body').prepend('<form enctype="multipart/form-data" id="form-cvupload" style="display: none;"><input type="file" name="file" /></form>');

	$('#form-cvupload input[name=\'file\']').trigger('click');

	if (typeof timer != 'undefined') {
    	clearInterval(timer);
	}

	timer = setInterval(function() {
		if ($('#form-cvupload input[name=\'file\']').val() != '') {
			clearInterval(timer);

			$.ajax({
				url: 'index.php?route=employ/register/upload',
				type: 'post',
				dataType: 'json',
				data: new FormData($('#form-cvupload')[0]),
				cache: false,
				contentType: false,
				processData: false,
				beforeSend: function() {
					$(node).button('loading');
				},
				complete: function() {
					$(node).button('reset');
				},
				success: function(json) {
					$('.text-danger').remove();

					if (json['error']) {
						$(node).parent().find('input').after('<div class="text-danger">' + json['error'] + '</div>');
					}

					if (json['success']) {
						var imageurl="index.html";
						$("#thumb-cvimage").html('<img src="'+imageurl+"image/"+json['location1']+'" alt="" title="" width="100"/>');
						$("#input-cvimage").val(json['location1']);
					}
				},
				error: function(xhr, ajaxOptions, thrownError) {
					alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
				}
			});
		}
	}, 500);
});

</script>


<script type="text/javascript">
$('input[name=\'jobcategory\']').autocomplete({
	'source': function(request, response) {
		$.ajax({
			url: 'index.php?route=employ/register/autocomplete&filter_name=' +  encodeURIComponent(request),
			type: 'GET',
			dataType: 'json',
			success: function(json) {
				json.unshift({
					category_id: 0,
					name:' --- None --- '
				});

				response($.map(json, function(item) {
					return {
						label: item['name'],
						value: item['category_id']
					}
				}));
			}
		});
	},
	'select': function(item) {
		$('input[name=\'jobcategory\']').val(item['label']);
		$('input[name=\'category_id\']').val(item['value']);
	}
});
</script>


<?php
include "include/footer.php";
?>