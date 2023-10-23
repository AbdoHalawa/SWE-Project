<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="../Public/CSS/footer.css">
<script src="https://kit.fontawesome.com/cd800095c4.js" crossorigin="anonymous"></script>
	<script src="https://kit.fontawesome.com/11298abef4.js" crossorigin="anonymous"></script>

	<style>
		#link-back-bottom {
			width: 100%;
		}

		.col-link-back-bottom {
			height: 8em;
		}

		.col-link-back-bottom {
			flex: 1;
			background-color: #032e47;
			color: #ffffff;
		}

		.col-link-back-bottom {
			display: flex;
			align-items: center;
			justify-content: center;
		}

		.link-back-button-bottom {
			text-transform: uppercase;
			color: #ffffff;
			letter-spacing: 4px;
			padding: 0;
			background: transparent;
			font-size: 12px;
			font-weight: bold;
			border-radius: 0;
			display: inline-block;
			text-decoration: none;
			border: none;
		}

		.link-back-button-bottom:hover {
			background: transparent;
			color: #ffffff;
		}

		#text-text-bottom {
			width: 100%;
		}

		.col-text-text-bottom {
			height: 20em;
		}

		.grid-flex-text-bottom {
			display: flex;
			flex-grow: 1;
			flex-direction: row;
		}

		.col-bottom {
			flex: 1;
			background-color: #c3d7d2;
			color: #222329;
		}

		.col-text-text-bottom {
			display: flex;
			align-items: center;
			justify-content: center;
		}

		.aligner-item-bottom {
			width: 70%;
		}

		.aligner-item-bottom h2 {
			font-size: 2em;
			color: #222329;
		}

		@media only screen and (max-width: 1200px) {
			.aligner-item-bottom h2 {
				font-size: 2em;
				line-height: 1;
				padding-bottom: 10px;
			}
		}

		.layout-item-button-bottom {
			text-transform: uppercase;
			color: #222329;
			letter-spacing: 4px;
			padding: 0;
			background: transparent;
			font-size: 12px;
			font-weight: bold;
			border-radius: 0;
			display: inline-block;
			text-decoration: none;
			border: none;
			position: relative;
			z-index: 999;
		}

		.layout-item-button-bottom::after {
			content: '';
			display: block;
			width: 0;
			height: 1px;
			background: #222329;
			margin-top: 15px;
			transition: width 0.4s;
		}

		.layout-item-button-bottom:hover {
			background: transparent;
			color: #222329;
		}

		.layout-item-button-bottom:hover::after {
			width: 80%;
		}

		.layout-item-button-bottom:active {
			background: transparent;
		}

		@media (max-width: 640px) {
			.grid-flex-text-bottom {
				height: 40em;
				flex-direction: column;
			}

			.col-left {
				order: 0;
			}

			.col-text-text-bottom div p {
				padding: 1em;
			}

			.aligner-item-bottom {
				width: 90%;
			}
		}

		.bottom-icon-links {
			display: flex;
			margin: 1em 0 1em 0;
		}

		.bottom-icon-links-content-1 {
			border: 1px solid #404a54;
			color: #222329;
			font-size: 20px;
			text-align: center;
			padding-top: 0.5em;
			padding-right: 0.8em;
			padding-bottom: 0.5em;
			padding-left: 0.8em;
		}

		.bottom-icon-links-content-2 {
			display: flex;
			align-items: center;
			text-transform: uppercase;
			padding-left: 1em;
			letter-spacing: 3px;
			font-weight: bold;
			width: 100%;
			border-bottom: 1px solid #404a54;
		}
	</style>
<style>
		.westfooter {
			width: 100%;
			position: relative;
			height: auto;
			background-color: #222329;
			padding: 45px 0 45px 0;
		}

		.westfooter .westcol {
			width: 240px;
			height: auto;
			float: left;
			box-sizing: border-box;
			padding: 0 20px 20px 20px;
		}

		.westfooter .westcol h1 {
			margin: 0;
			padding: 0;
			font-family: inherit;
			font-size: 12px;
			line-height: 17px;
			padding: 20px 0 5px 0;
			color: rgb(255, 255, 255, 0.2);
			font-weight: bold;
			text-transform: uppercase;
			letter-spacing: 0.250em;
		}

		.westfooter .westcol ul {
			list-style-type: none;
			margin: 0;
			padding: 0;
		}

		.westfooter .westcol ul li a {
			color: #aaaaaa;
			font-size: 14px;
			font-family: inherit;
			font-weight: normal;
			padding: 1px 0 1px 0;
			cursor: pointer;
			transition: 0.2s;
		}

		.social ul li {
			display: inline-block;
			padding-right: 5px !important;
		}

		.westfooter .westcol ul li a:hover {
			color: #ffffff;
			transition: 0.1s;
		}

		.fab,
		.far {
			color: #e7e7e7;
			width: 32px;
			height: 32px;
			background: transparent;
		}

		.fab:hover {
			background: transparent;
		}

		.clearfix {
			clear: both;
		}

		@media only screen and (min-width: 1280px) {
			.contain {
				width: 1200px;
				margin: 0 auto;
			}
		}

		@media only screen and (max-width: 1139px) {
			.contain .social {
				width: 1000px;
				display: block;
			}

			.social h1 {
				margin: 0;
			}
		}

		@media only screen and (max-width: 950px) {
			.westfooter .westcol {
				width: 33%;
			}

			.westfooter .westcol h1 {
				font-size: 14px;
			}

			.westfooter .westcol ul li {
				font-size: 13px;
			}
		}

		@media only screen and (max-width: 500px) {
			.westfooter .westcol {
				width: 50%;
			}

			.westfooter .westcol h1 {
				font-size: 14px;
			}

			.westfooter .westcol ul li {
				font-size: 13px;
			}
		}

		@media only screen and (max-width: 340px) {
			.westfooter .westcol {
				width: 100%;
			}
		}
	</style>




<div class="astra-advanced-hook-19201 ">
		</div>
		<div class="astra-advanced-hook-18182 ">
			<div data-aos="fade-in" data-aos-delay="400" data-aos-duration="1500" class="aos-init aos-animate">


				<section id="text-text-bottom">
					<div class="grid-flex-text-bottom">
						<div class="col-bottom col-text-text-bottom">
							<div class="aligner-item-bottom">

								<div class="bottom-icon-links">
									<div class="bottom-icon-links-content-1"><i class="fa-light fa-user-pen"></i></div>
									<div class="bottom-icon-links-content-2">Join Us</div>
								</div>
								<p>Find out when your child is able to join the School using the personalised age checker and timeline.</p>
								<a class="layout-item-button-bottom" href="/admissions/age-checker/">read more &rarr;</a>

							</div>
						</div>

						<div class="col-bottom col-text-text-bottom">
							<div class="aligner-item-bottom">

								<div class="bottom-icon-links">
									<div class="bottom-icon-links-content-1"><i class="fal fa-hands-helping"></i></div>
									<div class="bottom-icon-links-content-2">Support Us</div>
								</div>
								<p>Westminster School gratefully welcomes donations to support fundraising efforts across the School community.</p>
								<a class="layout-item-button-bottom" href="https://www.westminster.org.uk/support-us/">read more &rarr;</a>

							</div>
						</div>


					</div>
				</section>


			</div>


			<div class="westfooter">
				<div class="contain">
					<div class="westcol">
						<h1>About</h1>

						<ul>
							<div class="menu-footer-about-container">
								<ul id="menu-footer-about" class="menu">
									<li id="menu-item-34349" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-34349"><a href="https://www.westminster.org.uk/about/" class="menu-link">About Westminster</a></li>
									<li id="menu-item-18215" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-18215"><a href="https://www.westminster.org.uk/about/policies-and-reports/" class="menu-link">Policies and Reports</a></li>
									<li id="menu-item-18398" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-18398"><a href="https://www.westminster.org.uk/about/employment/" class="menu-link">Job Vacancies</a></li>
									<li id="menu-item-18217" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-18217"><a href="https://www.westminster.org.uk/privacy/" class="menu-link">Legal and Privacy</a></li>
								</ul>
							</div>
						</ul>
					</div>
					<div class="westcol">
						<h1>Admissions</h1>
						<ul>
							<ul>
								<div class="menu-footer-admissions-container">
									<ul id="menu-footer-admissions" class="menu">
										<li id="menu-item-34345" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-34345"><a href="https://www.westminster.org.uk/admissions/13-entry/" class="menu-link">13+ Entry</a></li>
										<li id="menu-item-34346" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-34346"><a href="https://www.westminster.org.uk/admissions/16-entry/" class="menu-link">16+ Entry</a></li>
										<li id="menu-item-34347" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-34347"><a href="https://www.westminster.org.uk/admissions/fees/" class="menu-link">School Fees</a></li>
										<li id="menu-item-38948" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-38948"><a href="https://www.westminster.org.uk/admissions/international-applications/" class="menu-link">International Applicants</a></li>
									</ul>
								</div>
							</ul>
						</ul>
					</div>
					<div class="westcol">
						<h1>School Life</h1>
						<ul>
							<div class="menu-footer-school-life-container">
								<ul id="menu-footer-school-life" class="menu">
									<li id="menu-item-36100" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-36100"><a href="https://www.westminster.org.uk/academic-life/curriculum/" class="menu-link">The Curriculum</a></li>
									<li id="menu-item-36101" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-36101"><a href="https://www.westminster.org.uk/co-curriculum/" class="menu-link">The Co-Curriculum</a></li>
									<li id="menu-item-36099" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-36099"><a href="https://www.westminster.org.uk/academic-life/exam-results-he/" class="menu-link">Exam Results and HE</a></li>
									<li id="menu-item-18223" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-18223"><a href="https://www.westminster.org.uk/school-life/watch-westminster/" class="menu-link">Watch Westminster</a></li>
								</ul>
							</div>
						</ul>
					</div>
					<div class="westcol">
						<h1>Quick Links</h1>
						<ul>
							<div class="menu-footer-quick-links-container">
								<ul id="menu-footer-quick-links" class="menu">
									<li id="menu-item-18226" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-18226"><a href="https://intranet.westminster.org.uk" class="menu-link">Intranet Logins</a></li>
									<li id="menu-item-18227" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-18227"><a href="https://www.westminster.org.uk/about/visitor-info/" class="menu-link">Visitor Info</a></li>
									<li id="menu-item-18228" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-18228"><a href="https://www.westminster.org.uk/about/term-dates/" class="menu-link">Term Dates</a></li>
									<li id="menu-item-18399" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-18399"><a href="https://www.westminster.org.uk/about/contact/" class="menu-link">Contact Us</a></li>
								</ul>
							</div>
						</ul>
					</div>

					<div class="westcol">
						<h1>Websites</h1>
						<ul>
							<div class="menu-footer-websites-container">
								<ul id="menu-footer-websites" class="menu">
									<li id="menu-item-22478" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-22478"><a href="https://www.westminster.org.uk/support-us/" class="menu-link">Support Us</a></li>
									<li id="menu-item-22477" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-22477"><a href="https://www.oldwestminster.org.uk" class="menu-link">Old Westminsters</a></li>
									<li id="menu-item-22476" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-22476"><a href="https://www.westminsterunder.org.uk" class="menu-link">Westminster Under School</a></li>
								</ul>
							</div>
						</ul>
					</div>

					<div class="westcol social">
						<h1>Social</h1>
						<a target="_blank" href="https://www.facebook.com/WestminsterSchoolUK/"><i class="fab fa-facebook fa-lg"></i></a>
						<a target="_blank" href="https://twitter.com/wschool"><i class="fab fa-twitter fa-lg"></i></a>
						<a target="_blank" href="https://www.instagram.com/westminstergram__/"><i class="fab fa-instagram fa-lg"></i></a>
						<a target="_blank" href="https://www.linkedin.com/company/westminster-school-london"><i class="fab fa-linkedin-in fa-lg"></i></a>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>


		</div>

		<footer class="site-footer" id="colophon" itemtype="https://schema.org/WPFooter" itemscope="itemscope" itemid="#colophon">



			<div class="ast-small-footer footer-sml-layout-1">
				<div class="ast-footer-overlay">
					<div class="ast-container">
						<div class="ast-small-footer-wrap">
							<div class="ast-small-footer-section ast-small-footer-section-1">
								Copyright © 2023 <span class="ast-footer-site-title">Westminster School</span><br>
								Registered Charity No 312728 </div>


						</div><!-- .ast-row .ast-small-footer-wrap -->
					</div><!-- .ast-container -->
				</div><!-- .ast-footer-overlay -->
			</div><!-- .ast-small-footer-->


		</footer><!-- #colophon -->
        <div>