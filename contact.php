<?php include 'header.php'; ?>
<section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_2.jpg');">
		<div class="overlay"></div>
		<div class="container">
			<div class="row no-gutters slider-text align-items-end">
				<div class="col-md-9 ftco-animate pb-5">
					<p class="breadcrumbs"><span class="mr-2"><a href="index">Home <i class="fa fa-chevron-right"></i></a></span> <span>Contact us <i class="fa fa-chevron-right"></i></span></p>
					<h1 class="mb-0 bread">Contact us</h1>
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-12">
					<div class="wrapper">
						<div class="row no-gutters">
							<div class="col-md-7 d-flex align-items-stretch order-md-last">
								<div class="contact-wrap w-100 p-md-5 p-4">
									<h3 class="mb-4">Get in touch</h3>
									<form method="POST" id="contactForm" name="contactForm" class="contactForm">
										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<input type="text" class="form-control" name="name" id="name" placeholder="Name">
												</div>
											</div>
											<div class="col-md-6"> 
												<div class="form-group">
													<input type="email" class="form-control" name="email" id="email" placeholder="Email">
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<input type="text" class="form-control" name="subject" id="subject" placeholder="Subject">
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<textarea name="message" class="form-control" id="message" cols="30" rows="7" placeholder="Message"></textarea>
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<input type="submit" value="Send Message" class="btn btn-primary">
													<div class="submitting"></div>
												</div>
											</div>
										</div>
									</form>
								</div>
							</div>
							<div class="col-md-5 d-flex align-items-stretch">
								<div class="info-wrap w-100 p-lg-5 p-4">
									<h3 class="mb-4 mt-md-4">Contact us</h3>
									<div class="dbox w-100 d-flex align-items-start">
										<div class="icon d-flex align-items-center justify-content-center">
											<span class="fa fa-map-marker"></span>
										</div>
										<div class="text pl-3">
											<p><span>Address:</span> 198 West 21th Street, Suite 721 New York NY 10016</p>
										</div>
									</div>
									<div class="dbox w-100 d-flex align-items-center">
										<div class="icon d-flex align-items-center justify-content-center">
											<span class="fa fa-phone"></span>
										</div>
										<div class="text pl-3">
											<p><span>Phone:</span> <a href="tel://1234567920">+ 1235 2355 98</a></p>
										</div>
									</div>
									<div class="dbox w-100 d-flex align-items-center">
										<div class="icon d-flex align-items-center justify-content-center">
											<span class="fa fa-paper-plane"></span>
										</div>
										<div class="text pl-3">
											<p><span>Email:</span> <a href="/cdn-cgi/l/email-protection#3c55525a537c4553494e4f554859125f5351"><span class="__cf_email__" data-cfemail="6a03040c052a13051f1819031e0f44090507">[email&#160;protected]</span></a></p>
										</div>
									</div>
									<div class="dbox w-100 d-flex align-items-center">
										<div class="icon d-flex align-items-center justify-content-center">
											<span class="fa fa-globe"></span>
										</div>
										<div class="text pl-3">
											<p><span>Website: </span> <a href="#">yoursite.com</a></p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="col-md-12 mt-5">
					<div id="map" class="bg-white"></div>
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-intro img" style="background-image: url(images/bg_3.jpg);">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-12 heading-section heading-section-white text-center ftco-animate">
					<h2 class="mb-4">Book Your Tickets Now</h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-12">
					<form action="#" class="registry-form ftco-animate">
						<div class="row">
							<div class="col-md">
								<div class="form-group">
									<input type="text" class="form-control" placeholder="First Name">
								</div>
							</div>
							<div class="col-md">
								<div class="form-group">
									<input type="text" class="form-control" placeholder="Last Name">
								</div>
							</div>
							<div class="col-md">
								<div class="form-group">
									<input type="text" class="form-control" placeholder="Phone">
								</div>
							</div>
							<div class="col-md">
								<div class="form-group">
									<div class="form-field">
										<div class="select-wrap">
											<div class="icon"><span class="fa fa-chevron-down"></span></div>
											<select name="" id="" class="form-control">
												<option value="">Select Your Price</option>
												<option value="">$10</option>
												<option value="">$20</option>
												<option value="">$25</option>
												<option value="">$30</option>
												<option value="">$50</option>
												<option value="">$75</option>
												<option value="">$100</option>
											</select>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md">
								<div class="form-group">
									<input type="submit" value="Register Now" class="btn btn-primary py-3 px-4">
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>
    <?php include 'footer.php'; ?>