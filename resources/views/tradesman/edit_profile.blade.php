@extends('layouts.app')

@section('content')





<div class="dashboard-container" style="height: 287px;">

		<!-- Dashboard Sidebar
	================================================== -->
	@include('layouts.sidebar')
	<!-- Dashboard Sidebar / End -->


	<!-- Dashboard Content
	================================================== -->
	<div class="dashboard-content-container" data-simplebar="init" style="height: 521px;"><div class="simplebar-track vertical" style="visibility: visible;"><div class="simplebar-scrollbar" style="visibility: visible; top: 0px; height: 64px;"></div></div><div class="simplebar-track horizontal" style="visibility: visible;"><div class="simplebar-scrollbar" style="visibility: visible; left: 0px; width: 25px;"></div></div><div class="simplebar-scroll-content" style="padding-right: 20px; margin-bottom: -20px;"><div class="simplebar-content" style="padding-bottom: 20px;">
		<div class="dashboard-content-inner" style="min-height: 521px;">
			
			<!-- Dashboard Headline -->
			<div class="dashboard-headline">
				<h3>Settings</h3>

				<!-- Breadcrumbs -->
				<nav id="breadcrumbs" class="dark">
					<ul>
						<li><a href="#">Home</a></li>
						<li><a href="#">Dashboard</a></li>
						<li>Settings</li>
					</ul>
				</nav>
			</div>
	
			<!-- Row -->
			<div class="row">
				<form action="/tradesman/edit-profile/{{$user->id}}" method="post">
					@csrf
					@method('put')

				<!-- Dashboard Box -->
				<div class="col-xl-12">
					<div class="dashboard-box margin-top-0">

						<!-- Headline -->
						<div class="headline">
							<h3><i class="icon-material-outline-account-circle"></i> My Account</h3>
						</div>

						<div class="content with-padding padding-bottom-0">

							<div class="row">

								<div class="col-auto">
									<div class="avatar-wrapper" data-tippy-placement="bottom" data-tippy="" data-original-title="Change Avatar">
										<img class="profile-pic" src="images/user-avatar-placeholder.png" alt="">
										<div class="upload-button"></div>
										<input class="file-upload" type="file" accept="image/*">
									</div>
								</div>

								<div class="col">
									<div class="row">

										<div class="col-xl-6">
											<div class="submit-field">
												<h5>First Name</h5>
												<input name="first_name" type="text" class="with-border" value="{{$user->first_name}}">
											</div>
										</div>

										<div class="col-xl-6">
											<div class="submit-field">
												<h5>Last Name</h5>
												<input name="last_name" type="text" class="with-border" value="{{$user->last_name}}">
											</div>
										</div>

										<div class="col-xl-6">
											<!-- Account Type -->
											<div class="submit-field">
												<h5>Contact Number</h5>
												<input name="contact_number" type="text" class="with-border" value="{{$user->contact_number}}">
											</div>
										</div>

										<div class="col-xl-6">
											<div class="submit-field">
												<h5>Email</h5>
												<input type="text" class="with-border" value="{{$user->email}}">
											</div>
										</div>

									</div>
								</div>
							</div>

						</div>
					</div>
				</div>

				<!-- Dashboard Box -->
				<div class="col-xl-12">
					<div class="dashboard-box">

						<!-- Headline -->
						<div class="headline">
							<h3><i class="icon-material-outline-face"></i> My Profile</h3>
						</div>

						<div class="content">
							<ul class="fields-ul">
							<li>
								<div class="row">
									<div class="col-xl-4">
										<div class="submit-field">
											<div class="bidding-widget">
												<!-- Headline -->
												<span class="bidding-detail">Set your <strong>minimal hourly rate</strong></span>

												<!-- Slider -->
												<div class="bidding-value margin-bottom-10">$<span id="biddingVal">35</span></div>
												<div class="slider slider-horizontal" id="">
													<div class="slider-track">
														<div class="slider-track-low" style="left: 0px; width: 0%;"></div>
														<div class="slider-selection" style="left: 0%; width: 20.6897%;"></div>
														<div class="slider-track-high" style="right: 0px; width: 79.3103%;"></div>
													</div>
														<div class="tooltip tooltip-main top hide" role="presentation" style="left: 20.6897%;">
															<div class="tooltip-arrow"></div><div class="tooltip-inner">35</div></div>
															<div class="tooltip tooltip-min top hide" role="presentation">
																<div class="tooltip-arrow"></div><div class="tooltip-inner"></div>
															</div>
																<div class="tooltip tooltip-max top hide" role="presentation">
																	<div class="tooltip-arrow"></div><div class="tooltip-inner"></div>
																</div>
																<div class="slider-handle min-slider-handle custom" role="slider" aria-valuemin="5" aria-valuemax="150" aria-valuenow="35" tabindex="0" style="left: 20.6897%;"></div>
																<div class="slider-handle max-slider-handle custom hide" role="slider" aria-valuemin="5" aria-valuemax="150" aria-valuenow="5" tabindex="0" style="left: 0%;"></div></div>
																<input class="bidding-slider" type="text" value="35" data-slider-handle="custom" data-slider-currency="$" data-slider-min="5" data-slider-max="150" data-slider-value="35" data-slider-step="1" data-slider-tooltip="hide" style="display: none;" data-value="35">
											</div>
										</div>
									</div>

									<div class="col-xl-4">
										<div class="submit-field">
											<h5>Skills <i class="help-icon" data-tippy-placement="right" data-tippy="" data-original-title="Add up to 10 skills"></i></h5>

											<!-- Skills List -->
											<div class="keywords-container">
												<div class="keyword-input-container">
													<input type="text" class="keyword-input with-border" placeholder="e.g. Angular, Laravel">
													<button class="keyword-input-button ripple-effect"><i class="icon-material-outline-add"></i></button>
												</div>
												<div class="keywords-list">
													<span class="keyword"><span class="keyword-remove"></span><span class="keyword-text">Angular</span></span>
													<span class="keyword"><span class="keyword-remove"></span><span class="keyword-text">Vue JS</span></span>
													<span class="keyword"><span class="keyword-remove"></span><span class="keyword-text">iOS</span></span>
													<span class="keyword"><span class="keyword-remove"></span><span class="keyword-text">Android</span></span>
													<span class="keyword"><span class="keyword-remove"></span><span class="keyword-text">Laravel</span></span>
												</div>
												<div class="clearfix"></div>
											</div>
										</div>
									</div>

									<div class="col-xl-4">
										<div class="submit-field">
											<h5>Attachments</h5>
											
											<!-- Attachments -->
											<div class="attachments-container margin-top-0 margin-bottom-0">
												<div class="attachment-box ripple-effect">
													<span>Cover Letter</span>
													<i>PDF</i>
													<button class="remove-attachment" data-tippy-placement="top" data-tippy="" data-original-title="Remove"></button>
												</div>
												<div class="attachment-box ripple-effect">
													<span>Contract</span>
													<i>DOCX</i>
													<button class="remove-attachment" data-tippy-placement="top" data-tippy="" data-original-title="Remove"></button>
												</div>
											</div>
											<div class="clearfix"></div>
											
											<!-- Upload Button -->
											<div class="uploadButton margin-top-0">
												<input class="uploadButton-input" type="file" accept="image/*, application/pdf" id="upload" multiple="">
												<label class="uploadButton-button ripple-effect" for="upload">Upload Files</label>
												<span class="uploadButton-file-name">Maximum file size: 10 MB</span>
											</div>

										</div>
									</div>
								</div>
							</li>
							<li>
								Location Here
							</li>
						</ul>
						</div>
					</div>
				</div>

				<div class="col-xl-12">
					<div class="dashboard-box">

						<!-- Headline -->
						<div class="headline">
							<h3><i class="icon-material-outline-face"></i> Banking Details</h3>
						</div>
						
						<div class="content">
							<div class="col">
								<div class="row">
							<div class="col-xl-6">
								<div class="submit-field">
									<h5>Bank Name</h5>
									<input name="bank_name" type="text" class="with-border" value="{{$user->employee->bank_name}}">
								</div>
							</div>

							<div class="col-xl-6">
								<div class="submit-field">
									<h5>Branch Code</h5>
									<input name="branch_code" type="text" class="with-border" value="{{$user->employee->branch_code}}">
								</div>
							</div>
							<div class="col-xl-6">
								<div class="submit-field">
									<h5>Account Number</h5>
									<input name="account_number" type="text" class="with-border" value="{{$user->employee->account_number}}">
								</div>
							</div>
							<div class="col-xl-6">
								<div class="submit-field">
									<h5>Account Name</h5>
									<input name="account_name" type="text" class="with-border" value="{{$user->employee->account_name}}">
								</div>
							</div>
						</div>
						</div>
						</div>
					</div>
				</div>

				<div class="col-xl-12">
					<button type="submit" class="button ripple-effect big margin-top-30">Save Changes</button>
				</div>

			</form>

			</div>
			<!-- Row / End -->

			<!-- Footer -->
			<div class="dashboard-footer-spacer"></div>
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