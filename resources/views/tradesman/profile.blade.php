@extends('layouts.app')

@section('content')





<div class="dashboard-container" style="height: 287px;">
	<!-- Dashboard Sidebar
	================================================== -->
	@include('layouts.sidebar')
	<!-- Dashboard Sidebar / End -->

	<div class="dashboard-content-container" data-simplebar="init" style="height: 302px;"><div class="simplebar-track vertical" style="visibility: visible;"><div class="simplebar-scrollbar" style="visibility: visible; top: 0px; height: 86px;"></div></div><div class="simplebar-track horizontal" style="visibility: visible;"><div class="simplebar-scrollbar" style="visibility: visible; left: 0px; width: 25px;"></div></div><div class="simplebar-scroll-content" style="padding-right: 20px; margin-bottom: -20px;"><div class="simplebar-content" style="padding-bottom: 20px;">
		<div class="dashboard-content-inner" style="min-height: 302px;">
			
			
	
			<!-- Row -->
			<div class="row">

				<!-- Dashboard Box -->
				<div class="col-xl-12">
					<div class="dashboard-box margin-top-0">
						<div id="wrapper" style="padding-top: 82px;">

		
							<!-- Titlebar
							================================================== -->
							<div class="single-page-header freelancer-header" data-background-image="images/single-freelancer.jpg">
								<div class="container">
									<div class="row">
										<div class="col-md-12">
											<div class="single-page-header-inner">
												<div class="left-side">
													<div class="header-image freelancer-avatar"><img src="images/user-avatar-big-02.jpg" alt=""></div>
													<div class="header-details">
														<h3>{{$user->name}} <span>iOS Expert + Node Dev</span></h3>
														<ul>
															<li><div class="star-rating" data-rating="5.0"><span class="star"></span><span class="star"></span><span class="star"></span><span class="star"></span><span class="star"></span></div></li>
															<li><img class="flag" src="images/flags/de.svg" alt=""> Germany</li>
															<li><div class="verified-badge-with-title">Verified</div></li>
														</ul>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							<div class="background-image-container" style="background-image: url(&quot;images/single-freelancer.jpg&quot;);"></div></div>
							
							
							<!-- Page Content
							================================================== -->
							<div class="container">
								<div class="row">
									
									<!-- Content -->
									<div class="col-xl-8 col-lg-8 content-right-offset">
										
										<!-- Page Content -->
										<div class="single-page-section">
											<h3 class="margin-bottom-25">About Me</h3>
											tests
										</div>
							
										<!-- Boxed List -->
										<div class="boxed-list margin-bottom-60">
											<div class="boxed-list-headline">
												<h3><i class="icon-material-outline-thumb-up"></i> Work History and Feedback</h3>
											</div>
											<ul class="boxed-list-ul">
												<li>
													<div class="boxed-list-item">
														<!-- Content -->
														<div class="item-content">
															<h4>Web, Database and API Developer <span>Rated as Freelancer</span></h4>
															<div class="item-details margin-top-10">
																<div class="star-rating" data-rating="5.0"><span class="star"></span><span class="star"></span><span class="star"></span><span class="star"></span><span class="star"></span></div>
																<div class="detail-item"><i class="icon-material-outline-date-range"></i> August 2019</div>
															</div>
															<div class="item-description">
																<p>Excellent programmer - fully carried out my project in a very professional manner. </p>
															</div>
														</div>
													</div>
												</li>
												<li>
													<div class="boxed-list-item">
														<!-- Content -->
														<div class="item-content">
															<h4>WordPress Theme Installation <span>Rated as Freelancer</span></h4>
															<div class="item-details margin-top-10">
																<div class="star-rating" data-rating="5.0"><span class="star"></span><span class="star"></span><span class="star"></span><span class="star"></span><span class="star"></span></div>
																<div class="detail-item"><i class="icon-material-outline-date-range"></i> June 2019</div>
															</div>
														</div>
													</div>
												</li>
												<li>
													<div class="boxed-list-item">
														<!-- Content -->
														<div class="item-content">
															<h4>Fix Python Selenium Code <span>Rated as Employer</span></h4>
															<div class="item-details margin-top-10">
																<div class="star-rating" data-rating="5.0"><span class="star"></span><span class="star"></span><span class="star"></span><span class="star"></span><span class="star"></span></div>
																<div class="detail-item"><i class="icon-material-outline-date-range"></i> May 2019</div>
															</div>
															<div class="item-description">
																<p>I was extremely impressed with the quality of work AND how quickly he got it done. He then offered to help with another side part of the project that we didn't even think about originally.</p>
															</div>
														</div>
													</div>
												</li>
												<li>
													<div class="boxed-list-item">
														<!-- Content -->
														<div class="item-content">
															<h4>PHP Core Website Fixes <span>Rated as Freelancer</span></h4>
															<div class="item-details margin-top-10">
																<div class="star-rating" data-rating="5.0"><span class="star"></span><span class="star"></span><span class="star"></span><span class="star"></span><span class="star"></span></div>
																<div class="detail-item"><i class="icon-material-outline-date-range"></i> May 2019</div>
															</div>
															<div class="item-description">
																<p>Awesome work, definitely will rehire. Poject was completed not only with the requirements, but on time, within our small budget.</p>
															</div>
														</div>
													</div>
												</li>
											</ul>
							
											<!-- Pagination -->
											<div class="clearfix"></div>
											<div class="pagination-container margin-top-40 margin-bottom-10">
												<nav class="pagination">
													<ul>
														<li><a href="#" class="ripple-effect current-page">1</a></li>
														<li><a href="#" class="ripple-effect">2</a></li>
														<li class="pagination-arrow"><a href="#" class="ripple-effect"><i class="icon-material-outline-keyboard-arrow-right"></i></a></li>
													</ul>
												</nav>
											</div>
											<div class="clearfix"></div>
											<!-- Pagination / End -->
							
										</div>
										<!-- Boxed List / End -->
										
										<!-- Boxed List -->
										<div class="boxed-list margin-bottom-60">
											<div class="boxed-list-headline">
												<h3><i class="icon-material-outline-business"></i> Employment History</h3>
											</div>
											<ul class="boxed-list-ul">
												<li>
													<div class="boxed-list-item">
														<!-- Avatar -->
														<div class="item-image">
															<img src="images/browse-companies-03.png" alt="">
														</div>
														
														<!-- Content -->
														<div class="item-content">
															<h4>Development Team Leader</h4>
															<div class="item-details margin-top-7">
																<div class="detail-item"><a href="#"><i class="icon-material-outline-business"></i> Acodia</a></div>
																<div class="detail-item"><i class="icon-material-outline-date-range"></i> May 2019 - Present</div>
															</div>
															<div class="item-description">
																<p>Focus the team on the tasks at hand or the internal and external customer requirements.</p>
															</div>
														</div>
													</div>
												</li>
												<li>
													<div class="boxed-list-item">
														<!-- Avatar -->
														<div class="item-image">
															<img src="images/browse-companies-04.png" alt="">
														</div>
														
														<!-- Content -->
														<div class="item-content">
															<h4><a href="#">Lead UX/UI Designer</a></h4>
															<div class="item-details margin-top-7">
																<div class="detail-item"><a href="#"><i class="icon-material-outline-business"></i> Acorta</a></div>
																<div class="detail-item"><i class="icon-material-outline-date-range"></i> April 2014 - May 2019</div>
															</div>
															<div class="item-description">
																<p>I designed and implemented 10+ custom web-based CRMs, workflow systems, payment solutions and mobile apps.</p>
															</div>
														</div>
													</div>
												</li>
											</ul>
										</div>
										<!-- Boxed List / End -->
							
									</div>
									
							
									<!-- Sidebar -->
									<div class="col-xl-4 col-lg-4">
										<div class="sidebar-container">
											
											<!-- Profile Overview -->
											<div class="profile-overview">
												<div class="overview-item"><strong>$35</strong><span>Hourly Rate</span></div>
												<div class="overview-item"><strong>53</strong><span>Jobs Done</span></div>
												<div class="overview-item"><strong>22</strong><span>Rehired</span></div>
											</div>
							
											<!-- Button -->
											<a href="#small-dialog" class="apply-now-button popup-with-zoom-anim margin-bottom-50">Make an Offer <i class="icon-material-outline-arrow-right-alt"></i></a>
							
											<!-- Freelancer Indicators -->
											<div class="sidebar-widget">
												<div class="freelancer-indicators">
							
													<!-- Indicator -->
													<div class="indicator">
														<strong>88%</strong>
														<div class="indicator-bar" data-indicator-percentage="88"><span style="width: 88%;"></span></div>
														<span>Job Success</span>
													</div>
							
													<!-- Indicator -->
													<div class="indicator">
														<strong>100%</strong>
														<div class="indicator-bar" data-indicator-percentage="100"><span style="width: 100%;"></span></div>
														<span>Recommendation</span>
													</div>
													
													<!-- Indicator -->
													<div class="indicator">
														<strong>90%</strong>
														<div class="indicator-bar" data-indicator-percentage="90"><span style="width: 90%;"></span></div>
														<span>On Time</span>
													</div>	
																		
													<!-- Indicator -->
													<div class="indicator">
														<strong>80%</strong>
														<div class="indicator-bar" data-indicator-percentage="80"><span style="width: 80%;"></span></div>
														<span>On Budget</span>
													</div>
												</div>
											</div>
											
											<!-- Widget -->
											<div class="sidebar-widget">
												<h3>Social Profiles</h3>
												<div class="freelancer-socials margin-top-25">
													<ul>
														<li><a href="#" data-tippy-placement="top" data-tippy="" data-original-title="Dribbble"><i class="icon-brand-dribbble"></i></a></li>
														<li><a href="#" data-tippy-placement="top" data-tippy="" data-original-title="Twitter"><i class="icon-brand-twitter"></i></a></li>
														<li><a href="#" data-tippy-placement="top" data-tippy="" data-original-title="Behance"><i class="icon-brand-behance"></i></a></li>
														<li><a href="#" data-tippy-placement="top" data-tippy="" data-original-title="GitHub"><i class="icon-brand-github"></i></a></li>
													
													</ul>
												</div>
											</div>
							
											<!-- Widget -->
											<div class="sidebar-widget">
												<h3>Skills</h3>
												<div class="task-tags">
													<span>iOS</span>
													<span>Android</span>
													<span>mobile apps</span>
													<span>design</span>
													<span>Python</span>
													<span>Flask</span>
													<span>PHP</span>
													<span>WordPress</span>
												</div>
											</div>
							
											<!-- Widget -->
											<div class="sidebar-widget">
												<h3>Attachments</h3>
												<div class="attachments-container">
													<a href="#" class="attachment-box ripple-effect"><span>Cover Letter</span><i>PDF</i></a>
													<a href="#" class="attachment-box ripple-effect"><span>Contract</span><i>DOCX</i></a>
												</div>
											</div>
							
											<!-- Sidebar Widget -->
											<div class="sidebar-widget">
												<h3>Bookmark or Share</h3>
							
												<!-- Bookmark Button -->
												<button class="bookmark-button margin-bottom-25">
													<span class="bookmark-icon"></span>
													<span class="bookmark-text">Bookmark</span>
													<span class="bookmarked-text">Bookmarked</span>
												</button>
							
												<!-- Copy URL -->
												<div class="copy-url">
													<input id="copy-url" type="text" value="" class="with-border">
													<button class="copy-url-button ripple-effect" data-clipboard-target="#copy-url" data-tippy-placement="top" data-tippy="" data-original-title="Copy to Clipboard"><i class="icon-material-outline-file-copy"></i></button>
												</div>
							
												<!-- Share Buttons -->
												<div class="share-buttons margin-top-25">
													<div class="share-buttons-trigger"><i class="icon-feather-share-2"></i></div>
													<div class="share-buttons-content">
														<span>Interesting? <strong>Share It!</strong></span>
														<ul class="share-buttons-icons">
															<li><a href="#" data-button-color="#3b5998" data-tippy-placement="top" data-tippy="" data-original-title="Share on Facebook" style="background-color: rgb(59, 89, 152);"><i class="icon-brand-facebook-f"></i></a></li>
															<li><a href="#" data-button-color="#1da1f2" data-tippy-placement="top" data-tippy="" data-original-title="Share on Twitter" style="background-color: rgb(29, 161, 242);"><i class="icon-brand-twitter"></i></a></li>
															<li><a href="#" data-button-color="#dd4b39" data-tippy-placement="top" data-tippy="" data-original-title="Share on Google Plus" style="background-color: rgb(221, 75, 57);"><i class="icon-brand-google-plus-g"></i></a></li>
															<li><a href="#" data-button-color="#0077b5" data-tippy-placement="top" data-tippy="" data-original-title="Share on LinkedIn" style="background-color: rgb(0, 119, 181);"><i class="icon-brand-linkedin-in"></i></a></li>
														</ul>
													</div>
												</div>
											</div>
							
										</div>
									</div>
							
								</div>
							</div>
							
							
							<!-- Spacer -->
							<div class="margin-top-15"></div>
							<!-- Spacer / End-->
							
							<!-- Footer
							================================================== -->
							<div id="footer">
								
								<!-- Footer Top Section -->
								<div class="footer-top-section">
									<div class="container">
										<div class="row">
											<div class="col-xl-12">
							
												<!-- Footer Rows Container -->
												<div class="footer-rows-container">
													
													<!-- Left Side -->
													<div class="footer-rows-left">
														<div class="footer-row">
															<div class="footer-row-inner footer-logo">
																<img src="images/logo2.png" alt="">
															</div>
														</div>
													</div>
													
													<!-- Right Side -->
													<div class="footer-rows-right">
							
														<!-- Social Icons -->
														<div class="footer-row">
															<div class="footer-row-inner">
																<ul class="footer-social-links">
																	<li>
																		<a href="#" data-tippy-placement="bottom" data-tippy-theme="light" data-tippy="" data-original-title="Facebook">
																			<i class="icon-brand-facebook-f"></i>
																		</a>
																	</li>
																	<li>
																		<a href="#" data-tippy-placement="bottom" data-tippy-theme="light" data-tippy="" data-original-title="Twitter">
																			<i class="icon-brand-twitter"></i>
																		</a>
																	</li>
																	<li>
																		<a href="#" data-tippy-placement="bottom" data-tippy-theme="light" data-tippy="" data-original-title="Google Plus">
																			<i class="icon-brand-google-plus-g"></i>
																		</a>
																	</li>
																	<li>
																		<a href="#" data-tippy-placement="bottom" data-tippy-theme="light" data-tippy="" data-original-title="LinkedIn">
																			<i class="icon-brand-linkedin-in"></i>
																		</a>
																	</li>
																</ul>
																<div class="clearfix"></div>
															</div>
														</div>
														
														<!-- Language Switcher -->
														<div class="footer-row">
															<div class="footer-row-inner">
																<div class="btn-group bootstrap-select language-switcher"><button type="button" class="btn dropdown-toggle btn-default" data-toggle="dropdown" role="button" title="English"><span class="filter-option pull-left">English</span>&nbsp;<span class="bs-caret"><span class="caret"></span></span></button><div class="dropdown-menu open" role="combobox"><ul class="dropdown-menu inner" role="listbox" aria-expanded="false"><li data-original-index="0" class="selected"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="true"><span class="text">English</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="1"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Français</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="2"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Español</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="3"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Deutsch</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li></ul></div><select class="selectpicker language-switcher" data-selected-text-format="count" data-size="5" tabindex="-98">
																	<option selected="">English</option>
																	<option>Français</option>
																	<option>Español</option>
																	<option>Deutsch</option>
																</select></div>
															</div>
														</div>
													</div>
							
												</div>
												<!-- Footer Rows Container / End -->
											</div>
										</div>
									</div>
								</div>
								<!-- Footer Top Section / End -->
							
								<!-- Footer Middle Section -->
								<div class="footer-middle-section">
									<div class="container">
										<div class="row">
							
											<!-- Links -->
											<div class="col-xl-2 col-lg-2 col-md-3">
												<div class="footer-links">
													<h3>For Candidates</h3>
													<ul>
														<li><a href="#"><span>Browse Jobs</span></a></li>
														<li><a href="#"><span>Add Resume</span></a></li>
														<li><a href="#"><span>Job Alerts</span></a></li>
														<li><a href="#"><span>My Bookmarks</span></a></li>
													</ul>
												</div>
											</div>
							
											<!-- Links -->
											<div class="col-xl-2 col-lg-2 col-md-3">
												<div class="footer-links">
													<h3>For Employers</h3>
													<ul>
														<li><a href="#"><span>Browse Candidates</span></a></li>
														<li><a href="#"><span>Post a Job</span></a></li>
														<li><a href="#"><span>Post a Task</span></a></li>
														<li><a href="#"><span>Plans &amp; Pricing</span></a></li>
													</ul>
												</div>
											</div>
							
											<!-- Links -->
											<div class="col-xl-2 col-lg-2 col-md-3">
												<div class="footer-links">
													<h3>Helpful Links</h3>
													<ul>
														<li><a href="#"><span>Contact</span></a></li>
														<li><a href="#"><span>Privacy Policy</span></a></li>
														<li><a href="#"><span>Terms of Use</span></a></li>
													</ul>
												</div>
											</div>
							
											<!-- Links -->
											<div class="col-xl-2 col-lg-2 col-md-3">
												<div class="footer-links">
													<h3>Account</h3>
													<ul>
														<li><a href="#"><span>Log In</span></a></li>
														<li><a href="#"><span>My Account</span></a></li>
													</ul>
												</div>
											</div>
							
											<!-- Newsletter -->
											<div class="col-xl-4 col-lg-4 col-md-12">
												<h3><i class="icon-feather-mail"></i> Sign Up For a Newsletter</h3>
												<p>Weekly breaking news, analysis and cutting edge advices on job searching.</p>
												<form action="#" method="get" class="newsletter">
													<input type="text" name="fname" placeholder="Enter your email address">
													<button type="submit"><i class="icon-feather-arrow-right"></i></button>
												</form>
											</div>
										</div>
									</div>
								</div>
								<!-- Footer Middle Section / End -->
								
								<!-- Footer Copyrights -->
								<div class="footer-bottom-section">
									<div class="container">
										<div class="row">
											<div class="col-xl-12">
												© 2019 <strong>Hireo</strong>. All Rights Reserved.
											</div>
										</div>
									</div>
								</div>
								<!-- Footer Copyrights / End -->
							
							</div>
							<!-- Footer / End -->
							
							</div>

					</div>
				</div>
			</div>
			
		</div>
	</div>


@endsection