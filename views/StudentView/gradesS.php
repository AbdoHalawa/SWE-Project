<?php
require_once('/xampp/htdocs/Ragy_Website/SWE_project/SWE-project/model/Student.php'); // Adjust the path if needed

$student = new Student($_SESSION['user_id']);

$subjects = $student->getSubjectsForStudent();
$grades = $student->getGradesForStudent();
?>
<!DOCTYPE html>
<html lang="en-GB">

<head>
	<script src="https://kit.fontawesome.com/cd800095c4.js" crossorigin="anonymous"></script>
	<script src="https://kit.fontawesome.com/11298abef4.js" crossorigin="anonymous"></script>

	<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
	<link rel="icon" href="..\Public\imgs\nefertari-logo.webp" sizes="32x32" />
	<link rel="icon" href="..\Public\imgs\nefertari-logo.webp" sizes="192x192" />
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Student | Nefertari International School</title>
	<meta property="og:locale" content="en_GB" />
	<meta property="og:type" content="article" />
	<meta property="og:title" content="Academic Life" />
	<meta property="og:url" content="https://www.westminster.org.uk/academic-life/" />
	<meta property="og:site_name" content="Westminster School" />
	<meta property="article:modified_time" content="2023-10-21T21:04:25+00:00" />
	<meta property="og:image" content="https://www.westminster.org.uk/wp-content/uploads/2023/06/WestminsterSchoolSep2021.-268-scaled.jpg" />
	<meta property="og:image:width" content="2560" />
	<meta property="og:image:height" content="1707" />
	<meta property="og:image:type" content="image/jpeg" />
	<meta name="twitter:card" content="summary_large_image" />





	<link rel='dns-prefetch' href='//cdnjs.cloudflare.com' />
	<link rel='dns-prefetch' href='//use.typekit.net' />
	<link rel="alternate" type="application/rss+xml" title="Westminster School &raquo; Feed" href="https://www.westminster.org.uk/feed/" />
	<link rel="alternate" type="application/rss+xml" title="Westminster School &raquo; Comments Feed" href="https://www.westminster.org.uk/comments/feed/" />

	<link rel='stylesheet' id='formidable-css' href='https://www.westminster.org.uk/wp-content/plugins/formidable/css/formidableforms.css?ver=119830' media='all' />
	<link rel='stylesheet' id='wp-block-library-css' href='https://www.westminster.org.uk/wp-includes/css/dist/block-library/style.min.css?ver=6.4.1' media='all' />
	<link rel='stylesheet' id='astra-theme-css-css' href='https://www.westminster.org.uk/wp-content/themes/astra/assets/css/minified/style.min.css?ver=4.4.1' media='all' />


	<link rel='stylesheet' id='astra-google-fonts-css' href='https://www.westminster.org.uk/wp-content/astra-local-fonts/astra-local-fonts.css?ver=4.4.1' media='all' />

	<link rel='stylesheet' id='searchandfilter-css' href='https://www.westminster.org.uk/wp-content/plugins/search-filter/style.css?ver=1' media='all' />
	<link rel='stylesheet' id='wpmf-singleimage-popup-style-css' href='https://www.westminster.org.uk/wp-content/plugins/wp-media-folder/assets/css/display-gallery/magnific-popup.css?ver=0.9.9' media='all' />
	<link rel='stylesheet' id='maxx-style-css' href='https://www.westminster.org.uk/wp-content/themes/westminster-child/maxx-style.css?ver=_S_VERSION' media='all' />
	<link rel='stylesheet' id='astra-addon-css-css' href='https://www.westminster.org.uk/wp-content/uploads/astra-addon/astra-addon-654c98d8b84522-40180515.css?ver=4.4.0' media='all' />

	<link rel='stylesheet' id='age-checker-css' href='https://www.westminster.org.uk/wp-content/themes/westminster-child/age-checker.css' media='' />
	<link rel='stylesheet' id='westminster-school-theme-css-css' href='https://www.westminster.org.uk/wp-content/themes/westminster-child/style.css?ver=1.0.0' media='all' />
	<!--[if IE]>
<script src="https://www.westminster.org.uk/wp-content/themes/astra/assets/js/minified/flexibility.min.js?ver=4.4.1" id="astra-flexibility-js"></script>
<script id="astra-flexibility-js-after">
flexibility(document.documentElement);
</script>
<![endif]-->
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.js?ver=6.4.1" id="jquery-js"></script>
	<script src="https://www.westminster.org.uk/wp-content/plugins/wp-media-folder/assets/js/single_image_lightbox/single_image_lightbox.js?ver=5.7.1" id="wpmf-singleimage-lightbox-js"></script>
	<script src="https://use.typekit.net/edp8drj.js?ver=6.4.1" id="typekit-js"></script>
	<link rel="https://api.w.org/" href="https://www.westminster.org.uk/wp-json/" />
	<link rel="alternate" type="application/json" href="https://www.westminster.org.uk/wp-json/wp/v2/pages/42" />
	<link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://www.westminster.org.uk/xmlrpc.php?rsd" />
	<link rel='shortlink' href='https://www.westminster.org.uk/?p=42' />
	<link rel="alternate" type="application/json+oembed" href="https://www.westminster.org.uk/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fwww.westminster.org.uk%2Facademic-life%2F" />
	<link rel="alternate" type="text/xml+oembed" href="https://www.westminster.org.uk/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fwww.westminster.org.uk%2Facademic-life%2F&#038;format=xml" />
	<script type="text/javascript">
		document.documentElement.className += " js";
	</script>

	<!-- stylesheets -->
	<link rel='stylesheet' href="../../public/external-css/Teacher/external.css">
	<link rel='stylesheet' href="../../public/external-css/indexcss.css">
	<link rel="stylesheet" href="../../Public/CSS/nav.css">
	<link rel='stylesheet' href="../../public/CSS/teacherView.css">
	<link rel='stylesheet' href="../../public/CSS/grades.css">






	<meta name="msapplication-TileImage" content="https://www.westminster.org.uk/wp-content/uploads/2018/07/Westminster-Favicon.png" />

</head>
<?php
include "../partials/nav.php"
?>

<body itemtype='https://schema.org/WebPage' itemscope='itemscope' class="page-template-default page page-id-42 page-parent ast-desktop ast-page-builder-template ast-no-sidebar astra-4.4.1 ast-header-custom-item-inside ast-full-width-primary-header group-blog ast-single-post ast-mobile-inherit-site-logo ast-inherit-site-logo-transparent ast-above-mobile-menu-align-inline ast-default-menu-enable ast-flyout-above-menu-enable ast-flyout-above-left-side ast-default-below-menu-enable ast-full-width-layout ast-full-width-header ast-inherit-site-logo-sticky ast-normal-title-enabled astra-addon-4.4.0">
	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-T7Q5GX8" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->
	<a class="skip-link screen-reader-text" href="#content" role="link" title="Skip to content">
		Skip to content</a>

	<div class="hfeed site" id="page">
		<header class="ast-custom-header" itemscope="itemscope" itemtype="https://schema.org/WPHeader">
			<div class="astra-advanced-hook-39612 ">
				<!--BEGIN HEADER -->

				<div class="logo-image">
					<a href="/"><img src="../../Public/imgs/nefertari-logo.webp"> </a>
				</div>

				<div class="astra-advanced-hook-39600 ">
					<div class="page-title-strip">
						<div class="breadcrumb-strip">
							<span><span><a href="studentView.php"> Welcome <?php echo $_SESSION['user_name']; ?></a></span></span>
						</div>

						<div class="page-title-text">
							Grades </div>

					</div>



				</div>
				<!--Page Title Strip-->

				<div id="wgs-header-wrapper">
					<div class="astra-advanced-hook-39611 ">
						<!--BEGIN DEPT header links wrapper-->
						<div class="header-links" id="divcontent">
							<div class="featured_box_content">
								<div class="box-content">
									<div class="links-group">
										<a href="../../controller/logout-handler.php?action=logout">Logout</a>
									</div>
								</div>
							</div>
						</div>
						<!-- END DEPT header links wrapper -->
					</div>
					<!--Academic & Dept Links-->

					<div class="wgs-header-image">

						<div class="image" style="background-image: url('../../Public/imgs/3.webp');"></div>


						<div class="wgs-header-image-overlay"></div>

					</div>

					<div class="wgs-header-menu-mobile">
						<button id="links" class="menu-links">SECTION MENU</button>
					</div>

				</div>
				<!-- Function to open the section list (resposive)  -->
				<SCRIPT>
					let links = document.getElementById("links");
					let divcontent = document.getElementById("divcontent");

					//will use addeventlistener method and arrow function
					links.addEventListener("click", () => {
						//toggle method to show div
						divcontent.classList.toggle('showdiv');
						//will change text now using if condition
						if (links.innerText == "SECTION MENU") {
							links.innerText = "CLOSE MENU";
						} else {
							links.innerText = "SECTION MENU"
						}
					})
				</SCRIPT>





				<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

				<script>
					wusmenu: {
						$('.wus-menu__button:not(.no-js)').on('click', function() {
							$('.wus-menu').toggleClass('is-open');
						});
						$('.wus-menu__close').on('click', function() {
							$('.wus-menu').removeClass('is-open');
						});
					}
				</script>


				<script>
					$('body').delegate('.wus-nav-item', 'click', function() {
						$('.wus-nav-item').removeClass('wus-nav-item--active');
						$(this).addClass('wus-nav-item--active');
					});
				</script>
			</div>
			<!--Nav Menu-->
	</div>
	</header>
	<div class="astra-advanced-hook-34726 ">
		<div class="astra-advanced-hook-23065 ">
			<!--BEGIN BREADCRUMBS & PAGE TITLE -->
			<div class="top-page-wrapper">

				<?php
				$subjectID = isset($_GET['SubjectID']) ? $_GET['SubjectID'] : null;
				$subjectName = ($subjectID !== null) ? $student->getSubjectNameById($subjectID) : null;


				?>

				<center>

					<div class="breadcrumb-header">
						<span><span><a href="studentView.php">Home</a></span> · <a href="../StudentView/innerStudentView.php?SubjectID=<?php echo $subjectID; ?>">
								<span class="breadcrumb_last" aria-current="page"><?php
																					$subjectID = isset($_GET['SubjectID']) ? $_GET['SubjectID'] : null;
																					$subjectName = ($subjectID !== null) ? $student->getSubjectNameById($subjectID) : null;

																					if ($subjectName !== null) {
																						echo $subjectName;
																					} else {
																						echo '<div class="page-title-text">Subject Not Found</div>';
																					}
																					?>
							</a></span> · <span class="breadcrumb_last" aria-current="page">Grades</span></span>
					</div>

				</center>





				<!-- Classes section -->
				<div class="astra-advanced-hook-30270 ">
					<section class="featured-pages-strip">
						<!DOCTYPE html>
						<html lang="en">

						<head>
							<meta charset="UTF-8">
							<meta name="viewport" content="width=device-width, initial-scale=1.0">
							<title>School Grades</title>
							<link rel="stylesheet" href="styles.css">
						</head>

						<body>

							<div class="grade-container">
								<h1 class="s">School Grades</h1>
								<?php foreach ($grades as $grade) : ?>
									<div class="subject">
										<?php
										$subjectID = isset($grade['SubjectID']) ? $grade['SubjectID'] : null;
										$subjectName = ($subjectID !== null) ? $student->getSubjectNameById($subjectID) : 'Unknown Subject';
										?>
										<h2><?php echo $subjectName; ?></h2>
										<p>Grade: <?php echo $grade['Grade']; ?></p>
									</div>
								<?php endforeach; ?>

						</body>

						</html>

					</section>
				</div>
				<?php
				include "../partials/footer.php"
				?>
</body>


</html>