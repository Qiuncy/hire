@extends('layouts.app')

@section('content')





<div class="dashboard-container" style="height: 287px;">

	<!-- Dashboard Sidebar
	================================================== -->
	<div class="dashboard-sidebar">
		<div class="dashboard-sidebar-inner" data-simplebar="init" style="height: 287px;"><div class="simplebar-track vertical" style="visibility: visible; display: none;"><div class="simplebar-scrollbar" style="visibility: visible; top: 0px; height: 25px;"></div></div><div class="simplebar-track horizontal" style="visibility: visible; display: none;"><div class="simplebar-scrollbar" style="visibility: visible; left: 0px; width: 25px;"></div></div><div class="simplebar-scroll-content" style="padding-right: 17px; margin-bottom: -34px;"><div class="simplebar-content" style="padding-bottom: 17px; margin-right: -17px;">
			<div class="dashboard-nav-container">

				<!-- Responsive Navigation Trigger -->
				<a href="#" class="dashboard-responsive-nav-trigger">
					<span class="hamburger hamburger--collapse">
						<span class="hamburger-box">
							<span class="hamburger-inner"></span>
						</span>
					</span>
					<span class="trigger-title">Dashboard Navigation</span>
				</a>
				
				<!-- Navigation -->
				<div class="dashboard-nav">
					<div class="dashboard-nav-inner">

						<ul data-submenu-title="Start">
							<li class="active"><a href="dashboard.html"><i class="icon-material-outline-dashboard"></i> Dashboard</a></li>
							<li><a href="dashboard-messages.html"><i class="icon-material-outline-question-answer"></i> Messages <span class="nav-tag">2</span></a></li>
							<li><a href="dashboard-bookmarks.html"><i class="icon-material-outline-star-border"></i> Bookmarks</a></li>
							<li><a href="dashboard-reviews.html"><i class="icon-material-outline-rate-review"></i> Reviews</a></li>
						</ul>
						
						<ul data-submenu-title="Organize and Manage">
							<li><a href="#"><i class="icon-material-outline-business-center"></i> Jobs</a>
								<ul>
									<li><a href="dashboard-manage-jobs.html">Manage Jobs <span class="nav-tag">3</span></a></li>
									<li><a href="dashboard-manage-candidates.html">Manage Candidates</a></li>
									<li><a href="dashboard-post-a-job.html">Post a Job</a></li>
								</ul>	
							</li>
							<li><a href="#"><i class="icon-material-outline-assignment"></i> Tasks</a>
								<ul>
									<li><a href="dashboard-manage-tasks.html">Manage Tasks <span class="nav-tag">2</span></a></li>
									<li><a href="dashboard-manage-bidders.html">Manage Bidders</a></li>
									<li><a href="dashboard-my-active-bids.html">My Active Bids <span class="nav-tag">4</span></a></li>
									<li><a href="dashboard-post-a-task.html">Post a Task</a></li>
								</ul>	
							</li>
						</ul>

						<ul data-submenu-title="Account">
							<li><a href="dashboard-settings.html"><i class="icon-material-outline-settings"></i> Settings</a></li>
							<li><a href="index-logged-out.html"><i class="icon-material-outline-power-settings-new"></i> Logout</a></li>
						</ul>
						
					</div>
				</div>
				<!-- Navigation / End -->

			</div>
		</div></div></div>
	</div>
	<!-- Dashboard Sidebar / End -->


	<!-- Dashboard Content
	================================================== -->
  <div class="dashboard-content-container" data-simplebar="init" style="height: 116px;"><div class="simplebar-track vertical" style="visibility: visible;"><div class="simplebar-scrollbar" style="visibility: visible; top: 0px; height: 25px;"></div></div><div class="simplebar-track horizontal" style="visibility: visible;"><div class="simplebar-scrollbar" style="visibility: visible; left: 0px; width: 25px;"></div></div><div class="simplebar-scroll-content" style="padding-right: 17px; margin-bottom: -34px;"><div class="simplebar-content" style="padding-bottom: 17px; margin-right: -17px;">
		<div class="dashboard-content-inner" style="min-height: 116px;">
			
			<!-- Dashboard Headline -->
			<div class="dashboard-headline">
				<h3>Manage Bidders</h3>
				<span class="margin-top-7">Bids for <a href="#">Food Delivery Mobile Application</a></span>

				<!-- Breadcrumbs -->
				<nav id="breadcrumbs" class="dark">
					<ul>
						<li><a href="#">Home</a></li>
						<li><a href="#">Dashboard</a></li>
						<li>Manage Bidders</li>
					</ul>
				</nav>
			</div>
	
			<!-- Row -->
			<div class="row">

				<!-- Dashboard Box -->
				<div class="col-xl-12">
					<div class="dashboard-box margin-top-0">

						<!-- Headline -->
						<div class="headline">
							<h3><i class="icon-material-outline-supervisor-account"></i> 3 Bidders</h3>
							<div class="sort-by">
								<div class="btn-group bootstrap-select hide-tick"><button type="button" class="btn dropdown-toggle btn-default" data-toggle="dropdown" role="button" title="Highest First"><span class="filter-option pull-left">Highest First</span>&nbsp;<span class="bs-caret"><span class="caret"></span></span></button><div class="dropdown-menu open" role="combobox"><ul class="dropdown-menu inner" role="listbox" aria-expanded="false"><li data-original-index="0" class="selected"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="true"><span class="text">Highest First</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="1"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Lowest First</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="2"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Fastest First</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li></ul></div><select class="selectpicker hide-tick" tabindex="-98">
									<option>Highest First</option>
									<option>Lowest First</option>
									<option>Fastest First</option>
								</select></div>
							</div>
						</div>

						<div class="content">
							<ul class="dashboard-box-list">
								<li>
									<!-- Overview -->
									<div class="freelancer-overview manage-candidates">
										<div class="freelancer-overview-inner">

											<!-- Avatar -->
											<div class="freelancer-avatar">
												<div class="verified-badge"></div>
												<a href="#"><img src="images/user-avatar-big-02.jpg" alt=""></a>
											</div>

											<!-- Name -->
											<div class="freelancer-name">
												<h4><a href="#">David Peterson <img class="flag" src="images/flags/de.svg" alt="" data-tippy-placement="top" data-tippy="" data-original-title="Germany"></a></h4>

												<!-- Details -->
												<span class="freelancer-detail-item"><a href="#"><i class="icon-feather-mail"></i> david@example.com</a></span>

												<!-- Rating -->
												<div class="freelancer-rating">
													<div class="star-rating" data-rating="5.0"><span class="star"></span><span class="star"></span><span class="star"></span><span class="star"></span><span class="star"></span></div>
												</div>

												<!-- Bid Details -->
												<ul class="dashboard-task-info bid-info">
													<li><strong>$3,200</strong><span>Fixed Price</span></li>
													<li><strong>14 Days</strong><span>Delivery Time</span></li>
												</ul>

												<!-- Buttons -->
												<div class="buttons-to-right always-visible margin-top-25 margin-bottom-0">
													<a href="#small-dialog-1" class="popup-with-zoom-anim button ripple-effect"><i class="icon-material-outline-check"></i> Accept Offer</a>
													<a href="#small-dialog-2" class="popup-with-zoom-anim button dark ripple-effect"><i class="icon-feather-mail"></i> Send Message</a>
													<a href="#" class="button gray ripple-effect ico" data-tippy-placement="top" data-tippy="" data-original-title="Remove Bid"><i class="icon-feather-trash-2"></i></a>
												</div>
											</div>
										</div>
									</div>
								</li>
								<li>
									<!-- Overview -->
									<div class="freelancer-overview manage-candidates">
										<div class="freelancer-overview-inner">

											<!-- Avatar -->
											<div class="freelancer-avatar">
												<a href="#"><img src="images/user-avatar-placeholder.png" alt=""></a>
											</div>

											<!-- Name -->
											<div class="freelancer-name">
												<h4><a href="#">Oldrich Ćuk <img class="flag" src="images/flags/sk.svg" alt="" data-tippy-placement="top" data-tippy="" data-original-title="Slovakia"></a></h4>

												<!-- Details -->
												<span class="freelancer-detail-item"><a href="#"><i class="icon-feather-mail"></i> oldrich@example.com</a></span>
												<span class="freelancer-detail-item"><i class="icon-feather-phone"></i> (+421) 123-456-789</span>


												<!-- Rating -->
												<br>
												<span class="company-not-rated">Minimum of 3 votes required</span>

												<!-- Bid Details -->
												<ul class="dashboard-task-info bid-info">
													<li><strong>$3,000</strong><span>Fixed Price</span></li>
													<li><strong>14 Days</strong><span>Delivery Time</span></li>
												</ul>

												<!-- Buttons -->
												<div class="buttons-to-right always-visible margin-top-25 margin-bottom-0">
													<a href="#small-dialog-1" class="popup-with-zoom-anim button ripple-effect"><i class="icon-material-outline-check"></i> Accept Offer</a>
													<a href="#small-dialog-2" class="popup-with-zoom-anim button dark ripple-effect"><i class="icon-feather-mail"></i> Send Message</a>
													<a href="#" class="button gray ripple-effect ico" data-tippy-placement="top" data-tippy="" data-original-title="Remove Bid"><i class="icon-feather-trash-2"></i></a>
												</div>
											</div>
										</div>
									</div>
								</li>
								<li>
									<!-- Overview -->
									<div class="freelancer-overview manage-candidates">
										<div class="freelancer-overview-inner">

											<!-- Avatar -->
											<div class="freelancer-avatar">
												<div class="verified-badge"></div>
												<a href="#"><img src="images/user-avatar-placeholder.png" alt=""></a>
											</div>

											<!-- Name -->
											<div class="freelancer-name">
												<h4><a href="#">Kuba Adamczyk <img class="flag" src="images/flags/pl.svg" alt="" data-tippy-placement="top" data-tippy="" data-original-title="Poland"></a></h4>

												<!-- Details -->
												<span class="freelancer-detail-item"><a href="#"><i class="icon-feather-mail"></i> kuba@example.com</a></span>
												<span class="freelancer-detail-item"><i class="icon-feather-phone"></i> (+48) 123-456-789</span>

												<!-- Rating -->
												<div class="freelancer-rating">
													<div class="star-rating" data-rating="5.0"><span class="star"></span><span class="star"></span><span class="star"></span><span class="star"></span><span class="star"></span></div>
												</div>

												<!-- Bid Details -->
												<ul class="dashboard-task-info bid-info">
													<li><strong>$2,700</strong><span>Fixed Price</span></li>
													<li><strong>30 Days</strong><span>Delivery Time</span></li>
												</ul>

												<!-- Buttons -->
												<div class="buttons-to-right always-visible margin-top-25 margin-bottom-0">
													<a href="#small-dialog-1" class="popup-with-zoom-anim button ripple-effect"><i class="icon-material-outline-check"></i> Accept Offer</a>
													<a href="#small-dialog-2" class="popup-with-zoom-anim button dark ripple-effect"><i class="icon-feather-mail"></i> Send Message</a>
													<a href="#" class="button gray ripple-effect ico" data-tippy-placement="top" data-tippy="" data-original-title="Remove Bid"><i class="icon-feather-trash-2"></i></a>
												</div>
											</div>
										</div>
									</div>
								</li>

							</ul>
						</div>
					</div>
				</div>

			</div>
			<!-- Row / End -->

			<!-- Footer -->
			<div class="dashboard-footer-spacer" style="padding-top: 124px;"></div>
			<div class="small-footer margin-top-15">
				<div class="small-footer-copyrights">
					© 2019 <strong>Hireo</strong>. All Rights Reserved.
				</div>
				<ul class="footer-social-links">
					<li>
						<a href="#" data-tippy-placement="top" data-tippy="" data-original-title="Facebook">
							<i class="icon-brand-facebook-f"></i>
						</a>
					</li>
					<li>
						<a href="#" data-tippy-placement="top" data-tippy="" data-original-title="Twitter">
							<i class="icon-brand-twitter"></i>
						</a>
					</li>
					<li>
						<a href="#" data-tippy-placement="top" data-tippy="" data-original-title="Google Plus">
							<i class="icon-brand-google-plus-g"></i>
						</a>
					</li>
					<li>
						<a href="#" data-tippy-placement="top" data-tippy="" data-original-title="LinkedIn">
							<i class="icon-brand-linkedin-in"></i>
						</a>
					</li>
				</ul>
				<div class="clearfix"></div>
			</div>
			<!-- Footer / End -->

		</div>
	</div></div></div>	
	<!-- Dashboard Content / End -->

</div>

@endsection