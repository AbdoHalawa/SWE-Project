<!DOCTYPE html>
<html lang="en-GB">

<head>

	<title>School Life | Westminster School</title>


	<link rel='stylesheet' id='astra-theme-css-css' href='https://www.westminster.org.uk/wp-content/themes/astra/assets/css/minified/style.min.css?ver=4.3.1' media='all' />
	<link rel='stylesheet' href="../../public/external-css/global-styles.css">
	<link rel='stylesheet' href="../../public/external-css/astra-addon.css">
	<link rel='stylesheet' href="../../public/external-css/indexcss.css">
	<link rel="stylesheet" href="../../Public/CSS/nav.css">

	<link rel='stylesheet' id='astra-theme-css-css' href='https://www.westminster.org.uk/wp-content/themes/astra/assets/css/minified/style.min.css?ver=4.3.1' media='all' />
	<style id='astra-theme-css-inline-css'>
		.ast-no-sidebar .entry-content .alignfull {
			margin-left: calc(-50vw + 50%);
			margin-right: calc(-50vw + 50%);
			max-width: 100vw;
			width: 100vw;
		}

		.ast-no-sidebar .entry-content .alignwide {
			margin-left: calc(-41vw + 50%);
			margin-right: calc(-41vw + 50%);
			max-width: unset;
			width: unset;
		}

		.ast-no-sidebar .entry-content .alignfull .alignfull,
		.ast-no-sidebar .entry-content .alignfull .alignwide,
		.ast-no-sidebar .entry-content .alignwide .alignfull,
		.ast-no-sidebar .entry-content .alignwide .alignwide,
		.ast-no-sidebar .entry-content .wp-block-column .alignfull,
		.ast-no-sidebar .entry-content .wp-block-column .alignwide {
			width: 100%;
			margin-left: auto;
			margin-right: auto;
		}

		.wp-block-gallery,
		.blocks-gallery-grid {
			margin: 0;
		}

		.wp-block-separator {
			max-width: 100px;
		}

		.wp-block-separator.is-style-wide,
		.wp-block-separator.is-style-dots {
			max-width: none;
		}

		.entry-content .has-2-columns .wp-block-column:first-child {
			padding-right: 10px;
		}

		.entry-content .has-2-columns .wp-block-column:last-child {
			padding-left: 10px;
		}

		@media (max-width: 782px) {
			.entry-content .wp-block-columns .wp-block-column {
				flex-basis: 100%;
			}

			.entry-content .has-2-columns .wp-block-column:first-child {
				padding-right: 0;
			}

			.entry-content .has-2-columns .wp-block-column:last-child {
				padding-left: 0;
			}
		}

		body .entry-content .wp-block-latest-posts {
			margin-left: 0;
		}

		body .entry-content .wp-block-latest-posts li {
			list-style: none;
		}

		.ast-no-sidebar .ast-container .entry-content .wp-block-latest-posts {
			margin-left: 0;
		}

		.ast-header-break-point .entry-content .alignwide {
			margin-left: auto;
			margin-right: auto;
		}

		.entry-content .blocks-gallery-item img {
			margin-bottom: auto;
		}

		.wp-block-pullquote {
			border-top: 4px solid #555d66;
			border-bottom: 4px solid #555d66;
			color: #40464d;
		}

		:root {
			--ast-container-default-xlg-padding: 6.67em;
			--ast-container-default-lg-padding: 5.67em;
			--ast-container-default-slg-padding: 4.34em;
			--ast-container-default-md-padding: 3.34em;
			--ast-container-default-sm-padding: 6.67em;
			--ast-container-default-xs-padding: 2.4em;
			--ast-container-default-xxs-padding: 1.4em;
			--ast-code-block-background: #EEEEEE;
			--ast-comment-inputs-background: #FAFAFA;
		}

		html {
			font-size: 93.75%;
		}

		a,
		.page-title {
			color: #8d1020;
		}

		a:hover,
		a:focus {
			color: #8d1020;
		}

		body,
		button,
		input,
		select,
		textarea,
		.ast-button,
		.ast-custom-button {
			font-family: 'Montserrat', sans-serif;
			font-weight: 400;
			font-size: 15px;
			font-size: 1rem;
		}

		blockquote {
			color: #030c1d;
		}

		p,
		.entry-content p {
			margin-bottom: 1em;
		}

		h1,
		.entry-content h1,
		h2,
		.entry-content h2,
		h3,
		.entry-content h3,
		h4,
		.entry-content h4,
		h5,
		.entry-content h5,
		h6,
		.entry-content h6,
		.site-title,
		.site-title a {
			font-family: 'Montserrat', sans-serif;
			font-weight: 400;
		}

		.ast-site-identity .site-title a {
			color: #ffffff;
		}

		.site-title {
			font-size: 30px;
			font-size: 2rem;
			display: none;
		}

		header .custom-logo-link img {
			max-width: 250px;
		}

		.astra-logo-svg {
			width: 250px;
		}

		.site-header .site-description {
			font-size: 15px;
			font-size: 1rem;
			display: none;
		}

		.entry-title {
			font-size: 14px;
			font-size: 0.93333333333333rem;
		}

		h1,
		.entry-content h1 {
			font-size: 2em;
			font-weight: 700;
			font-family: 'Montserrat', sans-serif;
			text-transform: none;
		}

		h2,
		.entry-content h2 {
			font-size: 3em;
			font-family: 'Montserrat', sans-serif;
		}

		h3,
		.entry-content h3 {
			font-size: 22px;
			font-size: 1.4666666666667rem;
			font-family: 'Montserrat', sans-serif;
		}

		h4,
		.entry-content h4 {
			font-size: 2em;
			line-height: 1.5em;
			font-family: 'Montserrat', sans-serif;
		}

		h5,
		.entry-content h5 {
			font-size: 0.9em;
			font-weight: 400;
			font-family: 'Montserrat', sans-serif;
		}

		h6,
		.entry-content h6 {
			font-size: 15px;
			font-size: 1rem;
			font-family: 'Montserrat', sans-serif;
		}

		::selection {
			background-color: rgba(247, 197, 210, 0.18);
			color: #f7c5d2;
		}

		body,
		h1,
		.entry-title a,
		.entry-content h1,
		h2,
		.entry-content h2,
		h3,
		.entry-content h3,
		h4,
		.entry-content h4,
		h5,
		.entry-content h5,
		h6,
		.entry-content h6 {
			color: #4e5768;
		}

		.tagcloud a:hover,
		.tagcloud a:focus,
		.tagcloud a.current-item {
			color: #000000;
			border-color: #8d1020;
			background-color: #8d1020;
		}

		input:focus,
		input[type="text"]:focus,
		input[type="email"]:focus,
		input[type="url"]:focus,
		input[type="password"]:focus,
		input[type="reset"]:focus,
		input[type="search"]:focus,
		textarea:focus {
			border-color: #8d1020;
		}

		input[type="radio"]:checked,
		input[type=reset],
		input[type="checkbox"]:checked,
		input[type="checkbox"]:hover:checked,
		input[type="checkbox"]:focus:checked,
		input[type=range]::-webkit-slider-thumb {
			border-color: #8d1020;
			background-color: #8d1020;
			box-shadow: none;
		}

		.site-footer a:hover+.post-count,
		.site-footer a:focus+.post-count {
			background: #8d1020;
			border-color: #8d1020;
		}

		.single .nav-links .nav-previous,
		.single .nav-links .nav-next {
			color: #8d1020;
		}

		.entry-meta,
		.entry-meta * {
			line-height: 1.45;
			color: #8d1020;
		}

		.entry-meta a:hover,
		.entry-meta a:hover *,
		.entry-meta a:focus,
		.entry-meta a:focus *,
		.page-links>.page-link,
		.page-links .page-link:hover,
		.post-navigation a:hover {
			color: #8d1020;
		}

		#cat option,
		.secondary .calendar_wrap thead a,
		.secondary .calendar_wrap thead a:visited {
			color: #8d1020;
		}

		.secondary .calendar_wrap #today,
		.ast-progress-val span {
			background: #8d1020;
		}

		.secondary a:hover+.post-count,
		.secondary a:focus+.post-count {
			background: #8d1020;
			border-color: #8d1020;
		}

		.calendar_wrap #today>a {
			color: #000000;
		}

		.page-links .page-link,
		.single .post-navigation a {
			color: #8d1020;
		}

		.widget-title,
		.widget .wp-block-heading {
			font-size: 21px;
			font-size: 1.4rem;
			color: #4e5768;
		}

		.single .ast-author-details .author-title {
			color: #8d1020;
		}

		a:focus-visible,
		.ast-menu-toggle:focus-visible,
		.site .skip-link:focus-visible,
		.wp-block-loginout input:focus-visible,
		.wp-block-search.wp-block-search__button-inside .wp-block-search__inside-wrapper,
		.ast-header-navigation-arrow:focus-visible,
		.woocommerce .wc-proceed-to-checkout>.checkout-button:focus-visible,
		.woocommerce .woocommerce-MyAccount-navigation ul li a:focus-visible,
		.ast-orders-table__row .ast-orders-table__cell:focus-visible,
		.woocommerce .woocommerce-order-details .order-again>.button:focus-visible,
		.woocommerce .woocommerce-message a.button.wc-forward:focus-visible,
		.woocommerce #minus_qty:focus-visible,
		.woocommerce #plus_qty:focus-visible,
		a#ast-apply-coupon:focus-visible,
		.woocommerce .woocommerce-info a:focus-visible,
		.woocommerce .astra-shop-summary-wrap a:focus-visible,
		.woocommerce a.wc-forward:focus-visible,
		#ast-apply-coupon:focus-visible,
		.woocommerce-js .woocommerce-mini-cart-item a.remove:focus-visible {
			outline-style: dotted;
			outline-color: inherit;
			outline-width: thin;
			border-color: transparent;
		}

		input:focus,
		input[type="text"]:focus,
		input[type="email"]:focus,
		input[type="url"]:focus,
		input[type="password"]:focus,
		input[type="reset"]:focus,
		input[type="search"]:focus,
		input[type="number"]:focus,
		textarea:focus,
		.wp-block-search__input:focus,
		[data-section="section-header-mobile-trigger"] .ast-button-wrap .ast-mobile-menu-trigger-minimal:focus,
		.ast-mobile-popup-drawer.active .menu-toggle-close:focus,
		.woocommerce-ordering select.orderby:focus,
		#ast-scroll-top:focus,
		#coupon_code:focus,
		.woocommerce-page #comment:focus,
		.woocommerce #reviews #respond input#submit:focus,
		.woocommerce a.add_to_cart_button:focus,
		.woocommerce .button.single_add_to_cart_button:focus,
		.woocommerce .woocommerce-cart-form button:focus,
		.woocommerce .woocommerce-cart-form__cart-item .quantity .qty:focus,
		.woocommerce .woocommerce-billing-fields .woocommerce-billing-fields__field-wrapper .woocommerce-input-wrapper>.input-text:focus,
		.woocommerce #order_comments:focus,
		.woocommerce #place_order:focus,
		.woocommerce .woocommerce-address-fields .woocommerce-address-fields__field-wrapper .woocommerce-input-wrapper>.input-text:focus,
		.woocommerce .woocommerce-MyAccount-content form button:focus,
		.woocommerce .woocommerce-MyAccount-content .woocommerce-EditAccountForm .woocommerce-form-row .woocommerce-Input.input-text:focus,
		.woocommerce .ast-woocommerce-container .woocommerce-pagination ul.page-numbers li a:focus,
		body #content .woocommerce form .form-row .select2-container--default .select2-selection--single:focus,
		#ast-coupon-code:focus,
		.woocommerce.woocommerce-js .quantity input[type=number]:focus,
		.woocommerce-js .woocommerce-mini-cart-item .quantity input[type=number]:focus,
		.woocommerce p#ast-coupon-trigger:focus {
			border-style: dotted;
			border-color: inherit;
			border-width: thin;
			outline-color: transparent;
		}

		.main-header-menu .menu-link,
		.ast-header-custom-item a {
			color: #4e5768;
		}

		.main-header-menu .menu-item:hover>.menu-link,
		.main-header-menu .menu-item:hover>.ast-menu-toggle,
		.main-header-menu .ast-masthead-custom-menu-items a:hover,
		.main-header-menu .menu-item.focus>.menu-link,
		.main-header-menu .menu-item.focus>.ast-menu-toggle,
		.main-header-menu .current-menu-item>.menu-link,
		.main-header-menu .current-menu-ancestor>.menu-link,
		.main-header-menu .current-menu-item>.ast-menu-toggle,
		.main-header-menu .current-menu-ancestor>.ast-menu-toggle {
			color: #8d1020;
		}

		.header-main-layout-3 .ast-main-header-bar-alignment {
			margin-right: auto;
		}

		.header-main-layout-2 .site-header-section-left .ast-site-identity {
			text-align: left;
		}

		.ast-header-break-point .ast-mobile-menu-buttons-minimal.menu-toggle {
			background: transparent;
			color: #ffffff;
		}

		.ast-header-break-point .ast-mobile-menu-buttons-outline.menu-toggle {
			background: transparent;
			border: 1px solid #ffffff;
			color: #ffffff;
		}

		.ast-header-break-point .ast-mobile-menu-buttons-fill.menu-toggle {
			background: #ffffff;
			color: #000000;
		}

		.ast-page-builder-template .hentry {
			margin: 0;
		}

		.ast-page-builder-template .site-content>.ast-container {
			max-width: 100%;
			padding: 0;
		}

		.ast-page-builder-template .site-content #primary {
			padding: 0;
			margin: 0;
		}

		.ast-page-builder-template .no-results {
			text-align: center;
			margin: 4em auto;
		}

		.ast-page-builder-template .ast-pagination {
			padding: 2em;
		}

		.ast-page-builder-template .entry-header.ast-no-title.ast-no-thumbnail {
			margin-top: 0;
		}

		.ast-page-builder-template .entry-header.ast-header-without-markup {
			margin-top: 0;
			margin-bottom: 0;
		}

		.ast-page-builder-template .entry-header.ast-no-title.ast-no-meta {
			margin-bottom: 0;
		}

		.ast-page-builder-template.single .post-navigation {
			padding-bottom: 2em;
		}

		.ast-page-builder-template.single-post .site-content>.ast-container {
			max-width: 100%;
		}

		.ast-page-builder-template .entry-header {
			margin-top: 4em;
			margin-left: auto;
			margin-right: auto;
			padding-left: 20px;
			padding-right: 20px;
		}

		.single.ast-page-builder-template .entry-header {
			padding-left: 20px;
			padding-right: 20px;
		}

		.ast-page-builder-template .ast-archive-description {
			margin: 4em auto 0;
			padding-left: 20px;
			padding-right: 20px;
		}

		.ast-page-builder-template.ast-no-sidebar .entry-content .alignwide {
			margin-left: 0;
			margin-right: 0;
		}

		.ast-small-footer {
			color: #222329;
		}

		.ast-small-footer>.ast-footer-overlay {
			background-color: #8d1020;
			;
		}

		.ast-small-footer a {
			color: #8d1020;
		}

		.ast-small-footer a:hover {
			color: #ffffff;
		}

		.footer-adv .footer-adv-overlay {
			border-top-style: solid;
			border-top-color: #7a7a7a;
		}

		.footer-adv a {
			color: #8d1020;
		}

		.footer-adv .tagcloud a:hover,
		.footer-adv .tagcloud a.current-item {
			border-color: #8d1020;
			background-color: #8d1020;
		}

		.footer-adv .calendar_wrap #today,
		.footer-adv a:hover+.post-count {
			background-color: #8d1020;
		}

		.footer-adv-overlay {
			background-color: rgba(0, 0, 0, 0.7);
			;
		}

		.wp-block-buttons.aligncenter {
			justify-content: center;
		}

		@media (max-width:782px) {
			.entry-content .wp-block-columns .wp-block-column {
				margin-left: 0px;
			}
		}

		.wp-block-image.aligncenter {
			margin-left: auto;
			margin-right: auto;
		}

		.wp-block-table.aligncenter {
			margin-left: auto;
			margin-right: auto;
		}

		@media (max-width:768px) {

			.ast-separate-container #primary,
			.ast-separate-container #secondary {
				padding: 1.5em 0;
			}

			#primary,
			#secondary {
				padding: 1.5em 0;
				margin: 0;
			}

			.ast-left-sidebar #content>.ast-container {
				display: flex;
				flex-direction: column-reverse;
				width: 100%;
			}

			.ast-separate-container .ast-article-post,
			.ast-separate-container .ast-article-single {
				padding: 1.5em 2.14em;
			}

			.ast-author-box img.avatar {
				margin: 20px 0 0 0;
			}
		}

		@media (min-width:769px) {

			.ast-separate-container.ast-right-sidebar #primary,
			.ast-separate-container.ast-left-sidebar #primary {
				border: 0;
			}

			.search-no-results.ast-separate-container #primary {
				margin-bottom: 4em;
			}
		}

		.menu-toggle,
		button,
		.ast-button,
		.ast-custom-button,
		.button,
		input#submit,
		input[type="button"],
		input[type="submit"],
		input[type="reset"] {
			color: var(--ast-global-color-5);
			border-color: #032e47;
			background-color: #032e47;
			border-top-left-radius: 0;
			border-top-right-radius: 0;
			border-bottom-right-radius: 0;
			border-bottom-left-radius: 0;
			font-family: inherit;
			font-weight: 500;
			font-size: 0.9em;
			text-transform: uppercase;
			letter-spacing: 2px;
		}

		button:focus,
		.menu-toggle:hover,
		button:hover,
		.ast-button:hover,
		.ast-custom-button:hover .button:hover,
		.ast-custom-button:hover,
		input[type=reset]:hover,
		input[type=reset]:focus,
		input#submit:hover,
		input#submit:focus,
		input[type="button"]:hover,
		input[type="button"]:focus,
		input[type="submit"]:hover,
		input[type="submit"]:focus {
			color: var(--ast-global-color-5);
			background-color: #032e47;
			border-color: #032e47;
		}

		@media (max-width:768px) {
			.ast-mobile-header-stack .main-header-bar .ast-search-menu-icon {
				display: inline-block;
			}

			.ast-header-break-point.ast-header-custom-item-outside .ast-mobile-header-stack .main-header-bar .ast-search-icon {
				margin: 0;
			}

			.ast-comment-avatar-wrap img {
				max-width: 2.5em;
			}

			.ast-separate-container .ast-comment-list li.depth-1 {
				padding: 1.5em 2.14em;
			}

			.ast-separate-container .comment-respond {
				padding: 2em 2.14em;
			}

			.ast-comment-meta {
				padding: 0 1.8888em 1.3333em;
			}
		}

		@media (min-width:544px) {
			.ast-container {
				max-width: 100%;
			}
		}

		@media (max-width:544px) {

			.ast-separate-container .ast-article-post,
			.ast-separate-container .ast-article-single,
			.ast-separate-container .comments-title,
			.ast-separate-container .ast-archive-description {
				padding: 1.5em 1em;
			}

			.ast-separate-container #content .ast-container {
				padding-left: 0.54em;
				padding-right: 0.54em;
			}

			.ast-separate-container .ast-comment-list li.depth-1 {
				padding: 1.5em 1em;
				margin-bottom: 1.5em;
			}

			.ast-separate-container .ast-comment-list .bypostauthor {
				padding: .5em;
			}

			.ast-search-menu-icon.ast-dropdown-active .search-field {
				width: 170px;
			}

			.site-branding img,
			.site-header .site-logo-img .custom-logo-link img {
				max-width: 100%;
			}
		}

		.footer-adv .tagcloud a:hover,
		.footer-adv .tagcloud a.current-item {
			color: #000000;
		}

		.footer-adv .calendar_wrap #today {
			color: #000000;
		}

		@media (min-width:769px) {
			.ast-small-footer .ast-container {
				max-width: 100%;
				padding-left: 35px;
				padding-right: 35px;
			}
		}

		@media (min-width:545px) {

			.ast-page-builder-template .comments-area,
			.single.ast-page-builder-template .entry-header,
			.single.ast-page-builder-template .post-navigation,
			.single.ast-page-builder-template .ast-single-related-posts-container {
				max-width: 1240px;
				margin-left: auto;
				margin-right: auto;
			}
		}

		body,
		.ast-separate-container {
			background-color: #ffffff;
			;
			background-image: none;
			;
		}

		.ast-no-sidebar.ast-separate-container .entry-content .alignfull {
			margin-left: -6.67em;
			margin-right: -6.67em;
			width: auto;
		}

		@media (max-width: 1200px) {
			.ast-no-sidebar.ast-separate-container .entry-content .alignfull {
				margin-left: -2.4em;
				margin-right: -2.4em;
			}
		}

		@media (max-width: 768px) {
			.ast-no-sidebar.ast-separate-container .entry-content .alignfull {
				margin-left: -2.14em;
				margin-right: -2.14em;
			}
		}

		@media (max-width: 544px) {
			.ast-no-sidebar.ast-separate-container .entry-content .alignfull {
				margin-left: -1em;
				margin-right: -1em;
			}
		}

		.ast-no-sidebar.ast-separate-container .entry-content .alignwide {
			margin-left: -20px;
			margin-right: -20px;
		}

		.ast-no-sidebar.ast-separate-container .entry-content .wp-block-column .alignfull,
		.ast-no-sidebar.ast-separate-container .entry-content .wp-block-column .alignwide {
			margin-left: auto;
			margin-right: auto;
			width: 100%;
		}

		@media (max-width:768px) {
			.site-title {
				font-size: 30px;
				font-size: 2rem;
				display: none;
			}

			.site-header .site-description {
				display: none;
			}

			.entry-title {
				font-size: 14px;
			}

			h1,
			.entry-content h1 {
				font-size: 2em;
			}

			h2,
			.entry-content h2 {
				font-size: 2.5em;
			}

			h3,
			.entry-content h3 {
				font-size: 20px;
			}

			h4,
			.entry-content h4 {
				font-size: 2em;
			}

			.astra-logo-svg {
				width: 200px;
			}

			header .custom-logo-link img,
			.ast-header-break-point .site-logo-img .custom-mobile-logo-link img {
				max-width: 200px;
			}
		}

		@media (max-width:544px) {
			.site-title {
				font-size: 20px;
				font-size: 1.3333333333333rem;
				display: none;
			}

			.site-header .site-description {
				display: none;
			}

			.entry-title {
				font-size: 12px;
			}

			h1,
			.entry-content h1 {
				font-size: 0em;
			}

			h2,
			.entry-content h2 {
				font-size: 2em;
			}

			h3,
			.entry-content h3 {
				font-size: 20px;
			}

			h4,
			.entry-content h4 {
				font-size: 1.5em;
			}

			header .custom-logo-link img,
			.ast-header-break-point .site-branding img,
			.ast-header-break-point .custom-logo-link img {
				max-width: 120px;
			}

			.astra-logo-svg {
				width: 120px;
			}

			.ast-header-break-point .site-logo-img .custom-mobile-logo-link img {
				max-width: 120px;
			}
		}

		@media (max-width:768px) {
			html {
				font-size: 85.5%;
			}
		}

		@media (max-width:544px) {
			html {
				font-size: 85.5%;
			}
		}

		@media (min-width:769px) {
			.ast-container {
				max-width: 1240px;
			}
		}

		@font-face {
			font-family: "Astra";
			src: url(https://www.westminster.org.uk/wp-content/themes/astra/assets/fonts/astra.woff) format("woff"), url(https://www.westminster.org.uk/wp-content/themes/astra/assets/fonts/astra.ttf) format("truetype"), url(https://www.westminster.org.uk/wp-content/themes/astra/assets/fonts/astra.svg#astra) format("svg");
			font-weight: normal;
			font-style: normal;
			font-display: fallback;
		}

		@media (max-width:1150px) {
			.main-header-bar .main-header-bar-navigation {
				display: none;
			}
		}

		@media (min-width:769px) {

			.blog .site-content>.ast-container,
			.archive .site-content>.ast-container,
			.search .site-content>.ast-container {
				max-width: 1200px;
			}
		}

		@media (min-width:769px) {
			.single-post .site-content>.ast-container {
				max-width: 900px;
			}
		}

		.ast-desktop .main-header-menu.submenu-with-border .sub-menu,
		.ast-desktop .main-header-menu.submenu-with-border .astra-full-megamenu-wrapper {
			border-color: rgba(247, 197, 210, 0.18);
		}

		.ast-desktop .main-header-menu.submenu-with-border .sub-menu {
			border-top-width: 0px;
			border-left-width: 0px;
			border-bottom-width: 0px;
			border-style: solid;
		}

		.ast-desktop .main-header-menu.submenu-with-border .sub-menu .sub-menu {
			top: -0px;
		}

		.ast-desktop .main-header-menu.submenu-with-border .sub-menu .menu-link,
		.ast-desktop .main-header-menu.submenu-with-border .children .menu-link {
			border-bottom-width: 1px;
			border-style: solid;
			border-color: #eaeaea;
		}

		@media (min-width:769px) {

			.main-header-menu .sub-menu .menu-item.ast-left-align-sub-menu:hover>.sub-menu,
			.main-header-menu .sub-menu .menu-item.ast-left-align-sub-menu.focus>.sub-menu {
				margin-left: -0px;
			}
		}

		.ast-small-footer {
			border-top-style: solid;
			border-top-width: 0;
			border-top-color: #eaeaea;
		}

		.ast-small-footer-wrap {
			text-align: center;
		}

		.ast-header-break-point.ast-header-custom-item-inside .main-header-bar .main-header-bar-navigation .ast-search-icon {
			display: none;
		}

		.ast-header-break-point.ast-header-custom-item-inside .main-header-bar .ast-search-menu-icon .search-form {
			padding: 0;
			display: block;
			overflow: hidden;
		}

		.ast-header-break-point .ast-header-custom-item .widget:last-child {
			margin-bottom: 1em;
		}

		.ast-header-custom-item .widget {
			margin: 0.5em;
			display: inline-block;
			vertical-align: middle;
		}

		.ast-header-custom-item .widget p {
			margin-bottom: 0;
		}

		.ast-header-custom-item .widget li {
			width: auto;
		}

		.ast-header-custom-item-inside .button-custom-menu-item .menu-link {
			display: none;
		}

		.ast-header-custom-item-inside.ast-header-break-point .button-custom-menu-item .ast-custom-button-link {
			display: none;
		}

		.ast-header-custom-item-inside.ast-header-break-point .button-custom-menu-item .menu-link {
			display: block;
		}

		.ast-header-break-point.ast-header-custom-item-outside .main-header-bar .ast-search-icon {
			margin-right: 1em;
		}

		.ast-header-break-point.ast-header-custom-item-inside .main-header-bar .ast-search-menu-icon .search-field,
		.ast-header-break-point.ast-header-custom-item-inside .main-header-bar .ast-search-menu-icon.ast-inline-search .search-field {
			width: 100%;
			padding-right: 5.5em;
		}

		.ast-header-break-point.ast-header-custom-item-inside .main-header-bar .ast-search-menu-icon .search-submit {
			display: block;
			position: absolute;
			height: 100%;
			top: 0;
			right: 0;
			padding: 0 1em;
			border-radius: 0;
		}

		.ast-header-break-point .ast-header-custom-item .ast-masthead-custom-menu-items {
			padding-left: 20px;
			padding-right: 20px;
			margin-bottom: 1em;
			margin-top: 1em;
		}

		.ast-header-custom-item-inside.ast-header-break-point .button-custom-menu-item {
			padding-left: 0;
			padding-right: 0;
			margin-top: 0;
			margin-bottom: 0;
		}

		.astra-icon-down_arrow::after {
			content: "\e900";
			font-family: Astra;
		}

		.astra-icon-close::after {
			content: "\e5cd";
			font-family: Astra;
		}

		.astra-icon-drag_handle::after {
			content: "\e25d";
			font-family: Astra;
		}

		.astra-icon-format_align_justify::after {
			content: "\e235";
			font-family: Astra;
		}

		.astra-icon-menu::after {
			content: "\e5d2";
			font-family: Astra;
		}

		.astra-icon-reorder::after {
			content: "\e8fe";
			font-family: Astra;
		}

		.astra-icon-search::after {
			content: "\e8b6";
			font-family: Astra;
		}

		.astra-icon-zoom_in::after {
			content: "\e56b";
			font-family: Astra;
		}

		.astra-icon-check-circle::after {
			content: "\e901";
			font-family: Astra;
		}

		.astra-icon-shopping-cart::after {
			content: "\f07a";
			font-family: Astra;
		}

		.astra-icon-shopping-bag::after {
			content: "\f290";
			font-family: Astra;
		}

		.astra-icon-shopping-basket::after {
			content: "\f291";
			font-family: Astra;
		}

		.astra-icon-circle-o::after {
			content: "\e903";
			font-family: Astra;
		}

		.astra-icon-certificate::after {
			content: "\e902";
			font-family: Astra;
		}

		blockquote {
			padding: 1.2em;
		}

		.ast-header-break-point .ast-mobile-header-wrap .ast-above-header-wrap .main-header-bar-navigation .inline-on-mobile .menu-item .menu-link,
		.ast-header-break-point .ast-mobile-header-wrap .ast-main-header-wrap .main-header-bar-navigation .inline-on-mobile .menu-item .menu-link,
		.ast-header-break-point .ast-mobile-header-wrap .ast-below-header-wrap .main-header-bar-navigation .inline-on-mobile .menu-item .menu-link {
			border: none;
		}

		.ast-header-break-point .ast-mobile-header-wrap .ast-above-header-wrap .main-header-bar-navigation .inline-on-mobile .menu-item-has-children>.ast-menu-toggle::before,
		.ast-header-break-point .ast-mobile-header-wrap .ast-main-header-wrap .main-header-bar-navigation .inline-on-mobile .menu-item-has-children>.ast-menu-toggle::before,
		.ast-header-break-point .ast-mobile-header-wrap .ast-below-header-wrap .main-header-bar-navigation .inline-on-mobile .menu-item-has-children>.ast-menu-toggle::before {
			font-size: .6rem;
		}

		.ast-header-break-point .ast-mobile-header-wrap .ast-flex.inline-on-mobile {
			flex-wrap: unset;
		}

		.ast-header-break-point .ast-mobile-header-wrap .ast-flex.inline-on-mobile .menu-item.ast-submenu-expanded>.sub-menu .menu-link {
			padding: .1em 1em;
		}

		.ast-header-break-point .ast-mobile-header-wrap .ast-flex.inline-on-mobile .menu-item.ast-submenu-expanded>.sub-menu>.menu-item .ast-menu-toggle::before {
			transform: rotate(-90deg);
		}

		.ast-header-break-point .ast-mobile-header-wrap .ast-flex.inline-on-mobile .menu-item.ast-submenu-expanded>.sub-menu>.menu-item.ast-submenu-expanded .ast-menu-toggle::before {
			transform: rotate(-270deg);
		}

		.ast-header-break-point .ast-mobile-header-wrap .ast-flex.inline-on-mobile .menu-item>.sub-menu>.menu-item .menu-link:before {
			content: none;
		}

		.ast-header-break-point .ast-mobile-header-wrap .ast-flex.inline-on-mobile {
			flex-wrap: unset;
		}

		.ast-header-break-point .ast-mobile-header-wrap .ast-flex.inline-on-mobile .menu-item.ast-submenu-expanded>.sub-menu .menu-link {
			padding: .1em 1em;
		}

		.ast-header-break-point .ast-mobile-header-wrap .ast-flex.inline-on-mobile .menu-item.ast-submenu-expanded>.sub-menu>.menu-item .ast-menu-toggle::before {
			transform: rotate(-90deg);
		}

		.ast-header-break-point .ast-mobile-header-wrap .ast-flex.inline-on-mobile .menu-item.ast-submenu-expanded>.sub-menu>.menu-item.ast-submenu-expanded .ast-menu-toggle::before {
			transform: rotate(-270deg);
		}

		.ast-header-break-point .ast-mobile-header-wrap .ast-flex.inline-on-mobile .menu-item>.sub-menu>.menu-item .menu-link:before {
			content: none;
		}

		.ast-header-break-point .inline-on-mobile .sub-menu {
			width: 150px;
		}

		.ast-header-break-point .ast-mobile-header-wrap .ast-flex.inline-on-mobile .menu-item.menu-item-has-children {
			margin-right: 10px;
		}

		.ast-header-break-point .ast-mobile-header-wrap .ast-flex.inline-on-mobile .menu-item.ast-submenu-expanded>.sub-menu {
			display: block;
			position: absolute;
			right: auto;
			left: 0;
		}

		.ast-header-break-point .ast-mobile-header-wrap .ast-flex.inline-on-mobile .menu-item.ast-submenu-expanded>.sub-menu .menu-item .ast-menu-toggle {
			padding: 0;
			right: 1em;
		}

		.ast-header-break-point .ast-mobile-header-wrap .ast-flex.inline-on-mobile .menu-item.ast-submenu-expanded>.sub-menu>.menu-item>.sub-menu {
			left: 100%;
			right: auto;
		}

		.ast-header-break-point .ast-mobile-header-wrap .ast-flex.inline-on-mobile .ast-menu-toggle {
			right: -15px;
		}

		.ast-header-break-point .ast-mobile-header-wrap .ast-flex.inline-on-mobile .menu-item.menu-item-has-children {
			margin-right: 10px;
		}

		.ast-header-break-point .ast-mobile-header-wrap .ast-flex.inline-on-mobile .menu-item.ast-submenu-expanded>.sub-menu {
			display: block;
			position: absolute;
			right: auto;
			left: 0;
		}

		.ast-header-break-point .ast-mobile-header-wrap .ast-flex.inline-on-mobile .menu-item.ast-submenu-expanded>.sub-menu>.menu-item>.sub-menu {
			left: 100%;
			right: auto;
		}

		.ast-header-break-point .ast-mobile-header-wrap .ast-flex.inline-on-mobile .ast-menu-toggle {
			right: -15px;
		}

		:root .has-ast-global-color-0-color {
			color: var(--ast-global-color-0);
		}

		:root .has-ast-global-color-0-background-color {
			background-color: var(--ast-global-color-0);
		}

		:root .wp-block-button .has-ast-global-color-0-color {
			color: var(--ast-global-color-0);
		}

		:root .wp-block-button .has-ast-global-color-0-background-color {
			background-color: var(--ast-global-color-0);
		}

		:root .has-ast-global-color-1-color {
			color: var(--ast-global-color-1);
		}

		:root .has-ast-global-color-1-background-color {
			background-color: var(--ast-global-color-1);
		}

		:root .wp-block-button .has-ast-global-color-1-color {
			color: var(--ast-global-color-1);
		}

		:root .wp-block-button .has-ast-global-color-1-background-color {
			background-color: var(--ast-global-color-1);
		}

		:root .has-ast-global-color-2-color {
			color: var(--ast-global-color-2);
		}

		:root .has-ast-global-color-2-background-color {
			background-color: var(--ast-global-color-2);
		}

		:root .wp-block-button .has-ast-global-color-2-color {
			color: var(--ast-global-color-2);
		}

		:root .wp-block-button .has-ast-global-color-2-background-color {
			background-color: var(--ast-global-color-2);
		}

		:root .has-ast-global-color-3-color {
			color: var(--ast-global-color-3);
		}

		:root .has-ast-global-color-3-background-color {
			background-color: var(--ast-global-color-3);
		}

		:root .wp-block-button .has-ast-global-color-3-color {
			color: var(--ast-global-color-3);
		}

		:root .wp-block-button .has-ast-global-color-3-background-color {
			background-color: var(--ast-global-color-3);
		}

		:root .has-ast-global-color-4-color {
			color: var(--ast-global-color-4);
		}

		:root .has-ast-global-color-4-background-color {
			background-color: var(--ast-global-color-4);
		}

		:root .wp-block-button .has-ast-global-color-4-color {
			color: var(--ast-global-color-4);
		}

		:root .wp-block-button .has-ast-global-color-4-background-color {
			background-color: var(--ast-global-color-4);
		}

		:root .has-ast-global-color-5-color {
			color: var(--ast-global-color-5);
		}

		:root .has-ast-global-color-5-background-color {
			background-color: var(--ast-global-color-5);
		}

		:root .wp-block-button .has-ast-global-color-5-color {
			color: var(--ast-global-color-5);
		}

		:root .wp-block-button .has-ast-global-color-5-background-color {
			background-color: var(--ast-global-color-5);
		}

		:root .has-ast-global-color-6-color {
			color: var(--ast-global-color-6);
		}

		:root .has-ast-global-color-6-background-color {
			background-color: var(--ast-global-color-6);
		}

		:root .wp-block-button .has-ast-global-color-6-color {
			color: var(--ast-global-color-6);
		}

		:root .wp-block-button .has-ast-global-color-6-background-color {
			background-color: var(--ast-global-color-6);
		}

		:root .has-ast-global-color-7-color {
			color: var(--ast-global-color-7);
		}

		:root .has-ast-global-color-7-background-color {
			background-color: var(--ast-global-color-7);
		}

		:root .wp-block-button .has-ast-global-color-7-color {
			color: var(--ast-global-color-7);
		}

		:root .wp-block-button .has-ast-global-color-7-background-color {
			background-color: var(--ast-global-color-7);
		}

		:root .has-ast-global-color-8-color {
			color: var(--ast-global-color-8);
		}

		:root .has-ast-global-color-8-background-color {
			background-color: var(--ast-global-color-8);
		}

		:root .wp-block-button .has-ast-global-color-8-color {
			color: var(--ast-global-color-8);
		}

		:root .wp-block-button .has-ast-global-color-8-background-color {
			background-color: var(--ast-global-color-8);
		}

		:root {
			--ast-global-color-0: #0170B9;
			--ast-global-color-1: #3a3a3a;
			--ast-global-color-2: #3a3a3a;
			--ast-global-color-3: #4B4F58;
			--ast-global-color-4: #F5F5F5;
			--ast-global-color-5: #FFFFFF;
			--ast-global-color-6: #E5E5E5;
			--ast-global-color-7: #424242;
			--ast-global-color-8: #000000;
		}

		:root {
			--ast-border-color: #dddddd;
		}

		#masthead .ast-container,
		.ast-header-breadcrumb .ast-container {
			max-width: 100%;
			padding-left: 35px;
			padding-right: 35px;
		}

		@media (max-width:1150px) {

			#masthead .ast-container,
			.ast-header-breadcrumb .ast-container {
				padding-left: 20px;
				padding-right: 20px;
			}
		}

		.ast-header-break-point.ast-header-custom-item-inside .main-header-bar .main-header-bar-navigation .ast-search-icon {
			display: none;
		}

		.ast-header-break-point.ast-header-custom-item-inside .main-header-bar .ast-search-menu-icon .search-form {
			padding: 0;
			display: block;
			overflow: hidden;
		}

		.ast-header-break-point .ast-header-custom-item .widget:last-child {
			margin-bottom: 1em;
		}

		.ast-header-custom-item .widget {
			margin: 0.5em;
			display: inline-block;
			vertical-align: middle;
		}

		.ast-header-custom-item .widget p {
			margin-bottom: 0;
		}

		.ast-header-custom-item .widget li {
			width: auto;
		}

		.ast-header-custom-item-inside .button-custom-menu-item .menu-link {
			display: none;
		}

		.ast-header-custom-item-inside.ast-header-break-point .button-custom-menu-item .ast-custom-button-link {
			display: none;
		}

		.ast-header-custom-item-inside.ast-header-break-point .button-custom-menu-item .menu-link {
			display: block;
		}

		.ast-header-break-point.ast-header-custom-item-outside .main-header-bar .ast-search-icon {
			margin-right: 1em;
		}

		.ast-header-break-point.ast-header-custom-item-inside .main-header-bar .ast-search-menu-icon .search-field,
		.ast-header-break-point.ast-header-custom-item-inside .main-header-bar .ast-search-menu-icon.ast-inline-search .search-field {
			width: 100%;
			padding-right: 5.5em;
		}

		.ast-header-break-point.ast-header-custom-item-inside .main-header-bar .ast-search-menu-icon .search-submit {
			display: block;
			position: absolute;
			height: 100%;
			top: 0;
			right: 0;
			padding: 0 1em;
			border-radius: 0;
		}

		.ast-header-break-point .ast-header-custom-item .ast-masthead-custom-menu-items {
			padding-left: 20px;
			padding-right: 20px;
			margin-bottom: 1em;
			margin-top: 1em;
		}

		.ast-header-custom-item-inside.ast-header-break-point .button-custom-menu-item {
			padding-left: 0;
			padding-right: 0;
			margin-top: 0;
			margin-bottom: 0;
		}

		.astra-icon-down_arrow::after {
			content: "\e900";
			font-family: Astra;
		}

		.astra-icon-close::after {
			content: "\e5cd";
			font-family: Astra;
		}

		.astra-icon-drag_handle::after {
			content: "\e25d";
			font-family: Astra;
		}

		.astra-icon-format_align_justify::after {
			content: "\e235";
			font-family: Astra;
		}

		.astra-icon-menu::after {
			content: "\e5d2";
			font-family: Astra;
		}

		.astra-icon-reorder::after {
			content: "\e8fe";
			font-family: Astra;
		}

		.astra-icon-search::after {
			content: "\e8b6";
			font-family: Astra;
		}

		.astra-icon-zoom_in::after {
			content: "\e56b";
			font-family: Astra;
		}

		.astra-icon-check-circle::after {
			content: "\e901";
			font-family: Astra;
		}

		.astra-icon-shopping-cart::after {
			content: "\f07a";
			font-family: Astra;
		}

		.astra-icon-shopping-bag::after {
			content: "\f290";
			font-family: Astra;
		}

		.astra-icon-shopping-basket::after {
			content: "\f291";
			font-family: Astra;
		}

		.astra-icon-circle-o::after {
			content: "\e903";
			font-family: Astra;
		}

		.astra-icon-certificate::after {
			content: "\e902";
			font-family: Astra;
		}

		blockquote {
			padding: 1.2em;
		}

		.ast-header-break-point .ast-mobile-header-wrap .ast-above-header-wrap .main-header-bar-navigation .inline-on-mobile .menu-item .menu-link,
		.ast-header-break-point .ast-mobile-header-wrap .ast-main-header-wrap .main-header-bar-navigation .inline-on-mobile .menu-item .menu-link,
		.ast-header-break-point .ast-mobile-header-wrap .ast-below-header-wrap .main-header-bar-navigation .inline-on-mobile .menu-item .menu-link {
			border: none;
		}

		.ast-header-break-point .ast-mobile-header-wrap .ast-above-header-wrap .main-header-bar-navigation .inline-on-mobile .menu-item-has-children>.ast-menu-toggle::before,
		.ast-header-break-point .ast-mobile-header-wrap .ast-main-header-wrap .main-header-bar-navigation .inline-on-mobile .menu-item-has-children>.ast-menu-toggle::before,
		.ast-header-break-point .ast-mobile-header-wrap .ast-below-header-wrap .main-header-bar-navigation .inline-on-mobile .menu-item-has-children>.ast-menu-toggle::before {
			font-size: .6rem;
		}

		.ast-header-break-point .ast-mobile-header-wrap .ast-flex.inline-on-mobile {
			flex-wrap: unset;
		}

		.ast-header-break-point .ast-mobile-header-wrap .ast-flex.inline-on-mobile .menu-item.ast-submenu-expanded>.sub-menu .menu-link {
			padding: .1em 1em;
		}

		.ast-header-break-point .ast-mobile-header-wrap .ast-flex.inline-on-mobile .menu-item.ast-submenu-expanded>.sub-menu>.menu-item .ast-menu-toggle::before {
			transform: rotate(-90deg);
		}

		.ast-header-break-point .ast-mobile-header-wrap .ast-flex.inline-on-mobile .menu-item.ast-submenu-expanded>.sub-menu>.menu-item.ast-submenu-expanded .ast-menu-toggle::before {
			transform: rotate(-270deg);
		}

		.ast-header-break-point .ast-mobile-header-wrap .ast-flex.inline-on-mobile .menu-item>.sub-menu>.menu-item .menu-link:before {
			content: none;
		}

		.ast-header-break-point .ast-mobile-header-wrap .ast-flex.inline-on-mobile {
			flex-wrap: unset;
		}

		.ast-header-break-point .ast-mobile-header-wrap .ast-flex.inline-on-mobile .menu-item.ast-submenu-expanded>.sub-menu .menu-link {
			padding: .1em 1em;
		}

		.ast-header-break-point .ast-mobile-header-wrap .ast-flex.inline-on-mobile .menu-item.ast-submenu-expanded>.sub-menu>.menu-item .ast-menu-toggle::before {
			transform: rotate(-90deg);
		}

		.ast-header-break-point .ast-mobile-header-wrap .ast-flex.inline-on-mobile .menu-item.ast-submenu-expanded>.sub-menu>.menu-item.ast-submenu-expanded .ast-menu-toggle::before {
			transform: rotate(-270deg);
		}

		.ast-header-break-point .ast-mobile-header-wrap .ast-flex.inline-on-mobile .menu-item>.sub-menu>.menu-item .menu-link:before {
			content: none;
		}

		.ast-header-break-point .inline-on-mobile .sub-menu {
			width: 150px;
		}

		.ast-header-break-point .ast-mobile-header-wrap .ast-flex.inline-on-mobile .menu-item.menu-item-has-children {
			margin-right: 10px;
		}

		.ast-header-break-point .ast-mobile-header-wrap .ast-flex.inline-on-mobile .menu-item.ast-submenu-expanded>.sub-menu {
			display: block;
			position: absolute;
			right: auto;
			left: 0;
		}

		.ast-header-break-point .ast-mobile-header-wrap .ast-flex.inline-on-mobile .menu-item.ast-submenu-expanded>.sub-menu .menu-item .ast-menu-toggle {
			padding: 0;
			right: 1em;
		}

		.ast-header-break-point .ast-mobile-header-wrap .ast-flex.inline-on-mobile .menu-item.ast-submenu-expanded>.sub-menu>.menu-item>.sub-menu {
			left: 100%;
			right: auto;
		}

		.ast-header-break-point .ast-mobile-header-wrap .ast-flex.inline-on-mobile .ast-menu-toggle {
			right: -15px;
		}

		.ast-header-break-point .ast-mobile-header-wrap .ast-flex.inline-on-mobile .menu-item.menu-item-has-children {
			margin-right: 10px;
		}

		.ast-header-break-point .ast-mobile-header-wrap .ast-flex.inline-on-mobile .menu-item.ast-submenu-expanded>.sub-menu {
			display: block;
			position: absolute;
			right: auto;
			left: 0;
		}

		.ast-header-break-point .ast-mobile-header-wrap .ast-flex.inline-on-mobile .menu-item.ast-submenu-expanded>.sub-menu>.menu-item>.sub-menu {
			left: 100%;
			right: auto;
		}

		.ast-header-break-point .ast-mobile-header-wrap .ast-flex.inline-on-mobile .ast-menu-toggle {
			right: -15px;
		}

		:root .has-ast-global-color-0-color {
			color: var(--ast-global-color-0);
		}

		:root .has-ast-global-color-0-background-color {
			background-color: var(--ast-global-color-0);
		}

		:root .wp-block-button .has-ast-global-color-0-color {
			color: var(--ast-global-color-0);
		}

		:root .wp-block-button .has-ast-global-color-0-background-color {
			background-color: var(--ast-global-color-0);
		}

		:root .has-ast-global-color-1-color {
			color: var(--ast-global-color-1);
		}

		:root .has-ast-global-color-1-background-color {
			background-color: var(--ast-global-color-1);
		}

		:root .wp-block-button .has-ast-global-color-1-color {
			color: var(--ast-global-color-1);
		}

		:root .wp-block-button .has-ast-global-color-1-background-color {
			background-color: var(--ast-global-color-1);
		}

		:root .has-ast-global-color-2-color {
			color: var(--ast-global-color-2);
		}

		:root .has-ast-global-color-2-background-color {
			background-color: var(--ast-global-color-2);
		}

		:root .wp-block-button .has-ast-global-color-2-color {
			color: var(--ast-global-color-2);
		}

		:root .wp-block-button .has-ast-global-color-2-background-color {
			background-color: var(--ast-global-color-2);
		}

		:root .has-ast-global-color-3-color {
			color: var(--ast-global-color-3);
		}

		:root .has-ast-global-color-3-background-color {
			background-color: var(--ast-global-color-3);
		}

		:root .wp-block-button .has-ast-global-color-3-color {
			color: var(--ast-global-color-3);
		}

		:root .wp-block-button .has-ast-global-color-3-background-color {
			background-color: var(--ast-global-color-3);
		}

		:root .has-ast-global-color-4-color {
			color: var(--ast-global-color-4);
		}

		:root .has-ast-global-color-4-background-color {
			background-color: var(--ast-global-color-4);
		}

		:root .wp-block-button .has-ast-global-color-4-color {
			color: var(--ast-global-color-4);
		}

		:root .wp-block-button .has-ast-global-color-4-background-color {
			background-color: var(--ast-global-color-4);
		}

		:root .has-ast-global-color-5-color {
			color: var(--ast-global-color-5);
		}

		:root .has-ast-global-color-5-background-color {
			background-color: var(--ast-global-color-5);
		}

		:root .wp-block-button .has-ast-global-color-5-color {
			color: var(--ast-global-color-5);
		}

		:root .wp-block-button .has-ast-global-color-5-background-color {
			background-color: var(--ast-global-color-5);
		}

		:root .has-ast-global-color-6-color {
			color: var(--ast-global-color-6);
		}

		:root .has-ast-global-color-6-background-color {
			background-color: var(--ast-global-color-6);
		}

		:root .wp-block-button .has-ast-global-color-6-color {
			color: var(--ast-global-color-6);
		}

		:root .wp-block-button .has-ast-global-color-6-background-color {
			background-color: var(--ast-global-color-6);
		}

		:root .has-ast-global-color-7-color {
			color: var(--ast-global-color-7);
		}

		:root .has-ast-global-color-7-background-color {
			background-color: var(--ast-global-color-7);
		}

		:root .wp-block-button .has-ast-global-color-7-color {
			color: var(--ast-global-color-7);
		}

		:root .wp-block-button .has-ast-global-color-7-background-color {
			background-color: var(--ast-global-color-7);
		}

		:root .has-ast-global-color-8-color {
			color: var(--ast-global-color-8);
		}

		:root .has-ast-global-color-8-background-color {
			background-color: var(--ast-global-color-8);
		}

		:root .wp-block-button .has-ast-global-color-8-color {
			color: var(--ast-global-color-8);
		}

		:root .wp-block-button .has-ast-global-color-8-background-color {
			background-color: var(--ast-global-color-8);
		}

		:root {
			--ast-global-color-0: #0170B9;
			--ast-global-color-1: #3a3a3a;
			--ast-global-color-2: #3a3a3a;
			--ast-global-color-3: #4B4F58;
			--ast-global-color-4: #F5F5F5;
			--ast-global-color-5: #FFFFFF;
			--ast-global-color-6: #E5E5E5;
			--ast-global-color-7: #424242;
			--ast-global-color-8: #000000;
		}

		:root {
			--ast-border-color: #dddddd;
		}

		#masthead .ast-container,
		.ast-header-breadcrumb .ast-container {
			max-width: 100%;
			padding-left: 35px;
			padding-right: 35px;
		}

		@media (max-width:1150px) {

			#masthead .ast-container,
			.ast-header-breadcrumb .ast-container {
				padding-left: 20px;
				padding-right: 20px;
			}
		}

		.ast-single-entry-banner {
			-js-display: flex;
			display: flex;
			flex-direction: column;
			justify-content: center;
			text-align: center;
			position: relative;
			background: #eeeeee;
		}

		.ast-single-entry-banner[data-banner-layout="layout-1"] {
			max-width: 1200px;
			background: inherit;
			padding: 20px 0;
		}

		.ast-single-entry-banner[data-banner-width-type="custom"] {
			margin: 0 auto;
			width: 100%;
		}

		.ast-single-entry-banner+.site-content .entry-header {
			margin-bottom: 0;
		}

		header.entry-header .entry-title {
			font-family: 'Montserrat', sans-serif;
			font-weight: 400;
			font-size: 30px;
			font-size: 2rem;
		}

		header.entry-header>*:not(:last-child) {
			margin-bottom: 10px;
		}

		.ast-archive-entry-banner {
			-js-display: flex;
			display: flex;
			flex-direction: column;
			justify-content: center;
			text-align: center;
			position: relative;
			background: #eeeeee;
		}

		.ast-archive-entry-banner[data-banner-width-type="custom"] {
			margin: 0 auto;
			width: 100%;
		}

		.ast-archive-entry-banner[data-banner-layout="layout-1"] {
			background: inherit;
			padding: 20px 0;
			text-align: left;
		}

		body.archive .ast-archive-description {
			max-width: 1200px;
			width: 100%;
			text-align: left;
			padding-top: 3em;
			padding-right: 3em;
			padding-bottom: 3em;
			padding-left: 3em;
		}

		body.archive .ast-archive-description .ast-archive-title,
		body.archive .ast-archive-description .ast-archive-title * {
			font-size: 14px;
			font-size: 0.93333333333333rem;
			text-transform: capitalize;
		}

		body.archive .ast-archive-description>*:not(:last-child) {
			margin-bottom: 10px;
		}

		.archive section.ast-archive-description {
			background-color: unset;
			;
		}

		@media (max-width:768px) {
			body.archive .ast-archive-description {
				text-align: left;
			}
		}

		@media (max-width:544px) {
			body.archive .ast-archive-description {
				text-align: left;
			}
		}

		.ast-breadcrumbs .trail-browse,
		.ast-breadcrumbs .trail-items,
		.ast-breadcrumbs .trail-items li {
			display: inline-block;
			margin: 0;
			padding: 0;
			border: none;
			background: inherit;
			text-indent: 0;
			text-decoration: none;
		}

		.ast-breadcrumbs .trail-browse {
			font-size: inherit;
			font-style: inherit;
			font-weight: inherit;
			color: inherit;
		}

		.ast-breadcrumbs .trail-items {
			list-style: none;
		}

		.trail-items li::after {
			padding: 0 0.3em;
			content: "\00bb";
		}

		.trail-items li:last-of-type::after {
			display: none;
		}

		h1,
		.entry-content h1,
		h2,
		.entry-content h2,
		h3,
		.entry-content h3,
		h4,
		.entry-content h4,
		h5,
		.entry-content h5,
		h6,
		.entry-content h6 {
			color: var(--ast-global-color-2);
		}

		.ast-header-break-point .main-header-bar {
			border-bottom-width: 0;
		}

		@media (min-width:769px) {
			.main-header-bar {
				border-bottom-width: 0;
			}
		}

		.main-header-menu .menu-item,
		#astra-footer-menu .menu-item,
		.main-header-bar .ast-masthead-custom-menu-items {
			-js-display: flex;
			display: flex;
			-webkit-box-pack: center;
			-webkit-justify-content: center;
			-moz-box-pack: center;
			-ms-flex-pack: center;
			justify-content: center;
			-webkit-box-orient: vertical;
			-webkit-box-direction: normal;
			-webkit-flex-direction: column;
			-moz-box-orient: vertical;
			-moz-box-direction: normal;
			-ms-flex-direction: column;
			flex-direction: column;
		}

		.main-header-menu>.menu-item>.menu-link,
		#astra-footer-menu>.menu-item>.menu-link {
			height: 100%;
			-webkit-box-align: center;
			-webkit-align-items: center;
			-moz-box-align: center;
			-ms-flex-align: center;
			align-items: center;
			-js-display: flex;
			display: flex;
		}

		.ast-primary-menu-disabled .main-header-bar .ast-masthead-custom-menu-items {
			flex: unset;
		}

		.header-main-layout-1 .ast-flex.main-header-container,
		.header-main-layout-3 .ast-flex.main-header-container {
			-webkit-align-content: center;
			-ms-flex-line-pack: center;
			align-content: center;
			-webkit-box-align: center;
			-webkit-align-items: center;
			-moz-box-align: center;
			-ms-flex-align: center;
			align-items: center;
		}

		.main-header-menu .sub-menu .menu-item.menu-item-has-children>.menu-link:after {
			position: absolute;
			right: 1em;
			top: 50%;
			transform: translate(0, -50%) rotate(270deg);
		}

		.ast-header-break-point .main-header-bar .main-header-bar-navigation .page_item_has_children>.ast-menu-toggle::before,
		.ast-header-break-point .main-header-bar .main-header-bar-navigation .menu-item-has-children>.ast-menu-toggle::before,
		.ast-mobile-popup-drawer .main-header-bar-navigation .menu-item-has-children>.ast-menu-toggle::before,
		.ast-header-break-point .ast-mobile-header-wrap .main-header-bar-navigation .menu-item-has-children>.ast-menu-toggle::before {
			font-weight: bold;
			content: "\e900";
			font-family: Astra;
			text-decoration: inherit;
			display: inline-block;
		}

		.ast-header-break-point .main-navigation ul.sub-menu .menu-item .menu-link:before {
			content: "\e900";
			font-family: Astra;
			font-size: .65em;
			text-decoration: inherit;
			display: inline-block;
			transform: translate(0, -2px) rotateZ(270deg);
			margin-right: 5px;
		}

		.widget_search .search-form:after {
			font-family: Astra;
			font-size: 1.2em;
			font-weight: normal;
			content: "\e8b6";
			position: absolute;
			top: 50%;
			right: 15px;
			transform: translate(0, -50%);
		}

		.astra-search-icon::before {
			content: "\e8b6";
			font-family: Astra;
			font-style: normal;
			font-weight: normal;
			text-decoration: inherit;
			text-align: center;
			-webkit-font-smoothing: antialiased;
			-moz-osx-font-smoothing: grayscale;
			z-index: 3;
		}

		.main-header-bar .main-header-bar-navigation .page_item_has_children>a:after,
		.main-header-bar .main-header-bar-navigation .menu-item-has-children>a:after,
		.menu-item-has-children .ast-header-navigation-arrow:after {
			content: "\e900";
			display: inline-block;
			font-family: Astra;
			font-size: .6rem;
			font-weight: bold;
			text-rendering: auto;
			-webkit-font-smoothing: antialiased;
			-moz-osx-font-smoothing: grayscale;
			margin-left: 10px;
			line-height: normal;
		}

		.menu-item-has-children .sub-menu .ast-header-navigation-arrow:after {
			margin-left: 0;
		}

		.ast-mobile-popup-drawer .main-header-bar-navigation .ast-submenu-expanded>.ast-menu-toggle::before {
			transform: rotateX(180deg);
		}

		.ast-header-break-point .main-header-bar-navigation .menu-item-has-children>.menu-link:after {
			display: none;
		}

		.ast-separate-container .blog-layout-1,
		.ast-separate-container .blog-layout-2,
		.ast-separate-container .blog-layout-3 {
			background-color: #ffffff;
			;
			background-image: none;
			;
		}

		.ast-separate-container .ast-article-single:not(.ast-related-post),
		.ast-separate-container .comments-area .comment-respond,
		.ast-separate-container .comments-area .ast-comment-list li,
		.woocommerce.ast-separate-container .ast-woocommerce-container,
		.ast-separate-container .error-404,
		.ast-separate-container .no-results,
		.single.ast-separate-container.ast-author-meta,
		.ast-separate-container .related-posts-title-wrapper,
		.ast-separate-container .comments-count-wrapper,
		.ast-box-layout.ast-plain-container .site-content,
		.ast-padded-layout.ast-plain-container .site-content,
		.ast-separate-container .comments-area .comments-title,
		.ast-separate-container .ast-archive-description {
			background-color: #ffffff;
			;
			background-image: none;
			;
		}

		.ast-separate-container.ast-two-container #secondary .widget {
			background-color: #ffffff;
			;
			background-image: none;
			;
		}

		.ast-desktop .astra-menu-animation-slide-up>.menu-item>.astra-full-megamenu-wrapper,
		.ast-desktop .astra-menu-animation-slide-up>.menu-item>.sub-menu,
		.ast-desktop .astra-menu-animation-slide-up>.menu-item>.sub-menu .sub-menu {
			opacity: 0;
			visibility: hidden;
			transform: translateY(.5em);
			transition: visibility .2s ease, transform .2s ease
		}

		.ast-desktop .astra-menu-animation-slide-up>.menu-item .menu-item.focus>.sub-menu,
		.ast-desktop .astra-menu-animation-slide-up>.menu-item .menu-item:hover>.sub-menu,
		.ast-desktop .astra-menu-animation-slide-up>.menu-item.focus>.astra-full-megamenu-wrapper,
		.ast-desktop .astra-menu-animation-slide-up>.menu-item.focus>.sub-menu,
		.ast-desktop .astra-menu-animation-slide-up>.menu-item:hover>.astra-full-megamenu-wrapper,
		.ast-desktop .astra-menu-animation-slide-up>.menu-item:hover>.sub-menu {
			opacity: 1;
			visibility: visible;
			transform: translateY(0);
			transition: opacity .2s ease, visibility .2s ease, transform .2s ease
		}

		.ast-desktop .astra-menu-animation-slide-up>.full-width-mega.menu-item.focus>.astra-full-megamenu-wrapper,
		.ast-desktop .astra-menu-animation-slide-up>.full-width-mega.menu-item:hover>.astra-full-megamenu-wrapper {
			-js-display: flex;
			display: flex
		}

		.ast-desktop .astra-menu-animation-slide-down>.menu-item>.astra-full-megamenu-wrapper,
		.ast-desktop .astra-menu-animation-slide-down>.menu-item>.sub-menu,
		.ast-desktop .astra-menu-animation-slide-down>.menu-item>.sub-menu .sub-menu {
			opacity: 0;
			visibility: hidden;
			transform: translateY(-.5em);
			transition: visibility .2s ease, transform .2s ease
		}

		.ast-desktop .astra-menu-animation-slide-down>.menu-item .menu-item.focus>.sub-menu,
		.ast-desktop .astra-menu-animation-slide-down>.menu-item .menu-item:hover>.sub-menu,
		.ast-desktop .astra-menu-animation-slide-down>.menu-item.focus>.astra-full-megamenu-wrapper,
		.ast-desktop .astra-menu-animation-slide-down>.menu-item.focus>.sub-menu,
		.ast-desktop .astra-menu-animation-slide-down>.menu-item:hover>.astra-full-megamenu-wrapper,
		.ast-desktop .astra-menu-animation-slide-down>.menu-item:hover>.sub-menu {
			opacity: 1;
			visibility: visible;
			transform: translateY(0);
			transition: opacity .2s ease, visibility .2s ease, transform .2s ease
		}

		.ast-desktop .astra-menu-animation-slide-down>.full-width-mega.menu-item.focus>.astra-full-megamenu-wrapper,
		.ast-desktop .astra-menu-animation-slide-down>.full-width-mega.menu-item:hover>.astra-full-megamenu-wrapper {
			-js-display: flex;
			display: flex
		}

		.ast-desktop .astra-menu-animation-fade>.menu-item>.astra-full-megamenu-wrapper,
		.ast-desktop .astra-menu-animation-fade>.menu-item>.sub-menu,
		.ast-desktop .astra-menu-animation-fade>.menu-item>.sub-menu .sub-menu {
			opacity: 0;
			visibility: hidden;
			transition: opacity ease-in-out .3s
		}

		.ast-desktop .astra-menu-animation-fade>.menu-item .menu-item.focus>.sub-menu,
		.ast-desktop .astra-menu-animation-fade>.menu-item .menu-item:hover>.sub-menu,
		.ast-desktop .astra-menu-animation-fade>.menu-item.focus>.astra-full-megamenu-wrapper,
		.ast-desktop .astra-menu-animation-fade>.menu-item.focus>.sub-menu,
		.ast-desktop .astra-menu-animation-fade>.menu-item:hover>.astra-full-megamenu-wrapper,
		.ast-desktop .astra-menu-animation-fade>.menu-item:hover>.sub-menu {
			opacity: 1;
			visibility: visible;
			transition: opacity ease-in-out .3s
		}

		.ast-desktop .astra-menu-animation-fade>.full-width-mega.menu-item.focus>.astra-full-megamenu-wrapper,
		.ast-desktop .astra-menu-animation-fade>.full-width-mega.menu-item:hover>.astra-full-megamenu-wrapper {
			-js-display: flex;
			display: flex
		}
	</style>



	<!-- Logo and back Pic -->
	<style>
		.logo-image {
			width: 120px;
			position: absolute;
			right: 20px;
			top: 0;
			z-index: 3;
			padding: 20px 12px 15px 12px;
			background: rgb(0, 0, 0, 0.8);
			border: none;
		}

		@media (min-width: 768px) {
			.logo-image {
				background: rgb(0, 0, 0, 0.8);
				border: none;
			}
		}

		@media screen and (max-width: 600px) {
			.logo-image {
				right: 20px;
				width: 120px;
				padding: 20px 12px 15px 12px;
			}
		}


		.wgs-header-image .image {
			background-size: cover;
			background-position: center;
			background-color: transparent;
			position: relative;
			height: 90vh;
			width: 100%;
			margin: 0;
		}
	</style>



	<!-- The main Titel css -->
	<style>
		.page-title-strip {
			border-top-right-radius: 10px;
			overflow: hidden;
			display: inline-block;
			position: absolute;
			z-index: 1;
			max-width: 50%;
			min-width: 20%;
			width: 550px;
			bottom: -1px;
			left: 0;
		}

		@media (max-width: 850px) {
			.page-title-strip {
				display: block;
				background: transparent;
				position: absolute;
				top: 60%;
				left: 50%;
				transform: translate(-50%, -50%);
				margin: auto;
				min-width: 90%;
			}
		}

		.breadcrumb-strip {
			text-transform: uppercase;
			font-size: 0.9em;
			letter-spacing: 4px;
			font-weight: 500;
			color: #4e5768;
			background: #fff;
			padding-top: 1.5em;
			padding-left: 2em;
		}

		@media screen and (max-width: 850px) {
			.breadcrumb-strip {
				display: none;
			}
		}

		.page-title-text {
			display: flex;
			align-items: center;
			justify-content: flex-start;
			font-weight: 400;
			font-family: 'Montserrat';
			font-size: 50px;
			line-height: 1.2;
			background: #fff;
			padding: 0.2em 0.5em 0 0.5em;
		}

		@media (max-width: 850px) {
			.page-title-text {
				justify-content: center;
				color: #fff;
				text-transform: uppercase;
				font-size: 24px;
				font-weight: 700;
				padding: 1em;
				letter-spacing: 3px;
				text-align: center;
				background: transparent;
			}
		}

		.alert-message-strip {
			position: absolute;
			z-index: 3;
			width: 50%;
			bottom: 0px;
			left: 0px;
			background: hsla(0, 0%, 0%, 0.4);
			transform: skewX(+30deg);
			transform-origin: right bottom;
			display: table;
		}

		@media (max-width: 850px) {
			.alert-message-strip {
				width: 100%;
				transform: none;
			}
		}

		.alert-message {
			display: flex;
			text-align: center;
			align-items: center;
			justify-content: center;
			transform: skewX(-30deg);
			color: #fff;
			font-weight: 500;
			font-size: 15px;
			line-height: 25px;
			padding: 1em 2.5em 1em 2.5em;
		}

		@media (max-width: 850px) {
			.alert-message {
				transform: none;
				line-height: 20px;
				padding: 0.5em;
				font-size: 12px;
			}
		}

		.alert-message a {
			color: #fff;
		}

		.alert-message a:hover {
			color: #8d1020;
		}
	</style>



	<!-- Fade in animation -->
	<style>
		body {
			animation: fadeInAnimation ease 3s;
			animation-iteration-count: 1;
			animation-fill-mode: forwards;
		}

		@keyframes fadeInAnimation {
			0% {
				opacity: 0;
			}

			100% {
				opacity: 1;
			}
		}
	</style>





	<style>
		.featured-pages-strip {
			background-color: #fff;
			padding: 20px;
			transition: all 0.3s;
			width: 100%;
		}

		.featured-pages-strip-sidebar {
			background-color: #fff;
			margin-top: 4em;
			transition: all 0.3s;
			width: 100%;
		}

		.featured-pages-heading {
			text-align: center;
			padding-top: 30px;
			padding-bottom: 30px;
		}

		.featured-pages-heading h5 {
			text-transform: uppercase;
			text-align: center;
			letter-spacing: 4px;
			font-weight: 600;
		}

		.featured-pages {
			display: flex;
			flex-wrap: wrap;
			justify-content: center;
			gap: 2em;
			margin: 0 auto 2em auto;
			max-width: 1200px;
		}

		.featured-page {
			position: relative;
			flex-basis: 380px;
			box-shadow: 0 15px 20px rgb(0, 0, 0, 0.2);
		}

		@media (max-width: 600px) {
			.featured-page {
				position: relative;
				flex-basis: 70%;
			}
		}

		.featured-page-caption,
		.mun-featured-page-caption {
			text-transform: uppercase;
			background: rgba(0, 0, 0, 0.3);
			font-size: 0.8em;
			font-weight: 700;
			letter-spacing: 2px;
			display: flex;
			align-items: center;
			justify-content: center;
			position: absolute;
			color: #fff;
			z-index: 1;
			padding: 1em;
			top: 0;
			left: 0;
			right: 0;
			bottom: 0;
		}

		.featured-post-caption {
			text-transform: none;
			background: rgba(0, 0, 0, 0.4);
			font-size: 0.8em;
			font-weight: 500;
			line-height: normal;
			display: flex;
			align-items: center;
			justify-content: center;
			position: absolute;
			color: #fff;
			z-index: 1;
			padding: 1em;
			right: 0;
			bottom: 0;
		}

		.featured-page-caption:hover {
			background: #032e47;
			transition-duration: 1s;
		}

		.mun-featured-page-caption:hover {
			background: #5b92e5;
			transition-duration: 1s;
		}

		@media (any-pointer: coarse) {

			.featured-page-caption:hover,
			.mun-featured-page-caption:hover {
				transition-duration: 0s;
			}
		}

		.featured-post-caption:hover {
			background: #032e47;
			transition-duration: 1s;
		}

		@media (any-pointer: coarse) {
			.featured-post-caption:hover {
				transition-duration: 0s;
			}
		}

		.featured-page-img {
			position: relative;
			width: 100%;
			height: 100%;
			object-fit: cover;
		}

		.home-featured-pages-strip {
			background-color: #f9f9f9;
			padding: 20px;
			transition: all 0.3s;
			width: 100%;
		}

		.home-featured-pages-heading {
			text-align: center;
			padding-top: 30px;
			padding-bottom: 30px;
		}

		.home-featured-pages-heading h5 {
			text-transform: uppercase;
			text-align: center;
			letter-spacing: 4px;
			font-weight: 600;
		}

		.home-featured-pages {
			display: flex;
			flex-wrap: wrap;
			justify-content: center;
			gap: 0.8em;
			margin: 0 auto 2em auto;
			max-width: 1200px;
			position: relative;
		}

		.home-featured-page {
			position: relative;
			flex-basis: 500px;
			box-shadow: 0 15px 20px rgb(0, 0, 0, 0.2);
		}

		@media (max-width: 600px) {
			.featured-page {
				position: relative;
				flex-basis: 80%;
			}
		}

		.home-featured-page-caption,
		.home-featured-page-caption-b {
			text-transform: uppercase;
			font-size: 0.8em;
			font-weight: 700;
			letter-spacing: 2px;
			display: flex;
			align-items: center;
			justify-content: center;
			position: absolute;
			color: #fff;
			z-index: 1;
			padding: 1em;
			top: 0;
			left: 0;
			right: 0;
			bottom: 0;
		}

		.home-featured-page-caption {
			background: hsla(202, 91.9%, 14.5%, .8);
		}

		.home-featured-page-caption:hover {
			background: rgba(0, 0, 0, 0.3);
			transition-duration: 1s;
		}

		@media (any-pointer: coarse) {
			.home-featured-page-caption:hover {
				transition-duration: 0s;
			}
		}

		.home-featured-page-caption-b {
			background: hsla(345, 88.3%, 73.1%, .9);
		}

		.home-featured-page-caption-b:hover {
			background: rgba(0, 0, 0, 0.3);
			transition-duration: 1s;
		}

		@media (any-pointer: coarse) {
			.home-featured-page-caption-b:hover {
				transition-duration: 0s;
			}
		}


		.home-featured-page-img {
			position: relative;
			width: 100%;
			height: 100%;
			object-fit: cover;
		}
	</style>


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
				<div class="astra-advanced-hook-39600 ">
					<div class="page-title-strip">
						<div class="page-title-text">
							Mathh </div>
					</div>
				</div>
				<!--Page Title Strip-->

				<div id="wgs-header-wrapper">
					<div class="wgs-header-image">
						<div class="image" style="background-image: url('../../Public/imgs/study2.jpg');"></div>
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
							Materials
						</div>
					</a>
				</div>
				<div class="featured-page">

					<img width="2560" height="1709" src="../../Public/imgs/Wboard.jpg" class="featured-page-img wp-post-image" alt="" decoding="async" loading="lazy" sizes="(max-width: 2560px) 100vw, 2560px" /><a href="./innerTeacherView.php">
						<div class="featured-page-caption">
							Submitions
						</div>
					</a>
				</div>
				<div class="featured-page">

					<img width="2560" height="1709" src="../../Public/imgs/Wboard.jpg" class="featured-page-img wp-post-image" alt="" decoding="async" loading="lazy" sizes="(max-width: 2560px) 100vw, 2560px" /><a href="../views/innerTeacherView.php">
						<div class="featured-page-caption">
							Grades
						</div>
					</a>
				</div>
				<div class="featured-page">

					<img width="2560" height="1709" src="../../Public/imgs/Wboard.jpg" class="featured-page-img wp-post-image" alt="" decoding="async" loading="lazy" sizes="(max-width: 2560px) 100vw, 2560px" /><a href="../views/innerTeacherView.php">
						<div class="featured-page-caption">
							schedule
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