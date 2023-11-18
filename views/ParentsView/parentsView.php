<!DOCTYPE html>
<html lang="en-GB">
<link rel="stylesheet" href="../Public/CSS/nav.css">
<head>
	
	<title>School Life | Westminster School</title>
	

	
	
	<link rel='stylesheet' id='astra-theme-css-css' href='https://www.westminster.org.uk/wp-content/themes/astra/assets/css/minified/style.min.css?ver=4.3.1' media='all' />
	<link rel='stylesheet' href="../../public/external-css/global-styles.css">
<link rel='stylesheet' href="../../public/external-css/astra-addon.css">
<link rel='stylesheet' href="../../public/external-css/indexcss.css">
<link rel="stylesheet" href="../../Public/CSS/nav.css">
	
</head>
<?php
include "../partials/nav.php"
?>

<body itemtype='https://schema.org/WebPage' itemscope='itemscope' class="page-template-default page page-id-72 page-parent ast-desktop ast-page-builder-template ast-no-sidebar astra-4.3.1 ast-header-custom-item-inside ast-full-width-primary-header group-blog ast-single-post ast-mobile-inherit-site-logo ast-inherit-site-logo-transparent ast-above-mobile-menu-align-inline ast-default-menu-enable ast-flyout-above-menu-enable ast-flyout-above-left-side ast-default-below-menu-enable ast-full-width-layout ast-full-width-header ast-inherit-site-logo-sticky ast-normal-title-enabled astra-addon-4.3.3">
	<div class="hfeed site" id="page">
		<header class="ast-custom-header" itemscope="itemscope" itemtype="https://schema.org/WPHeader">
			<div class="astra-advanced-hook-39618 ">
				<!--BEGIN HEADER -->
				<!-- TODO :school -->
				<div class="logo-image">
					<a href="/"><img src="../../Public/imgs/nefertari-logo.webp"> </a>
				</div>

				<div class="astra-advanced-hook-38859 ">
					<div class="mobile-links">

						<div class="mobile-links-group">
							<a href="../index.php">
								Log Out</a>
						</div>

					</div>
				</div>
				
				<div class="astra-advanced-hook-39600 ">
					<div class="page-title-strip">
						<div class="page-title-text">
							Parents </div>
					</div>
				</div>
				<!--Page Title Strip-->

				<div id="wgs-header-wrapper">
					<div class="wgs-header-image">
						<div class="image" style="background-image: url('../../Public/imgs/parents.jpg');"></div>
						<div class="wgs-header-image-overlay"></div>
					</div>



					<!-- The nav Bar Function -->
					<div class="astra-advanced-hook-38861 ">
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
		</header>
	</div>
	<div class="astra-advanced-hook-30270 ">
		<section class="featured-pages-strip">
			<div class="featured-pages">
				<div class="featured-page">

					<img width="2560" height="1709" src="../../Public/imgs/Wboard.jpg" class="featured-page-img wp-post-image" alt="" decoding="async" loading="lazy" sizes="(max-width: 2560px) 100vw, 2560px" /><a href="./innerTeacherView.php">
						<div class="featured-page-caption">
							Grades
						</div>
					</a>
				</div>
				<div class="featured-page">

					<img width="2560" height="1709" src="../../Public/imgs/Wboard.jpg" class="featured-page-img wp-post-image" alt="" decoding="async" loading="lazy" sizes="(max-width: 2560px) 100vw, 2560px" /><a href="./innerTeacherView.php">
						<div class="featured-page-caption">
							Fees
						</div>
					</a>
				</div>
			</div>
		</section>
	</div>
			<!--------------------- footer-------------------------- -->
			<?php
			include "../partials/footer.php"
			?>
</body>

</html>