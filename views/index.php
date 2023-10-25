<?php
include './partials/nav.php';
?>

<!-- Nourrrrr ahahahaah -->
<!DOCTYPE html>

<html lang="en-GB">

<head>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.css">
	<link href="https://fonts.googleapis.com/css2?family=Lora:ital@1&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/cd800095c4.js" crossorigin="anonymous"></script>
	<script src="https://kit.fontawesome.com/11298abef4.js" crossorigin="anonymous"></script>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Nefertari</title>
	<meta name="description" content="A progressive school on an ancient site in the heart of the world&#039;s most vibrant city." />
	<meta property="og:locale" content="en_GB" />
	<meta property="og:type" content="website" />
	<meta property="og:title" content="Welcome" />
	<meta property="og:description" content="A progressive school on an ancient site in the heart of the world&#039;s most vibrant city." />
	<meta property="og:site_name" content="Nefertari" />
	<meta property="article:modified_time" content="2023-10-15T15:54:05+00:00" />
	<meta name="twitter:card" content="summary_large_image" />
	<link rel="stylesheet" href="../Public/CSS/footerNour.css">
	<link rel='stylesheet' id='astra-theme-css-css' href='../Public/external-css/astra-style.min.css' media='all' />
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

		.ast-small-footer {
			color: #222329;
		}

		.ast-small-footer>.ast-footer-overlay {
			background-color: #8d1020;

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
	<link rel='stylesheet' id='astra-google-fonts-css' href='https://www.westminster.org.uk/wp-content/astra-local-fonts/astra-local-fonts.css?ver=4.3.1' media='all' />
	<style id='global-styles-inline-css'>
		body {
			--wp--preset--color--black: #000000;
			--wp--preset--color--cyan-bluish-gray: #abb8c3;
			--wp--preset--color--white: #ffffff;
			--wp--preset--color--pale-pink: #f78da7;
			--wp--preset--color--vivid-red: #cf2e2e;
			--wp--preset--color--luminous-vivid-orange: #ff6900;
			--wp--preset--color--luminous-vivid-amber: #fcb900;
			--wp--preset--color--light-green-cyan: #7bdcb5;
			--wp--preset--color--vivid-green-cyan: #00d084;
			--wp--preset--color--pale-cyan-blue: #8ed1fc;
			--wp--preset--color--vivid-cyan-blue: #0693e3;
			--wp--preset--color--vivid-purple: #9b51e0;
			--wp--preset--color--ast-global-color-0: var(--ast-global-color-0);
			--wp--preset--color--ast-global-color-1: var(--ast-global-color-1);
			--wp--preset--color--ast-global-color-2: var(--ast-global-color-2);
			--wp--preset--color--ast-global-color-3: var(--ast-global-color-3);
			--wp--preset--color--ast-global-color-4: var(--ast-global-color-4);
			--wp--preset--color--ast-global-color-5: var(--ast-global-color-5);
			--wp--preset--color--ast-global-color-6: var(--ast-global-color-6);
			--wp--preset--color--ast-global-color-7: var(--ast-global-color-7);
			--wp--preset--color--ast-global-color-8: var(--ast-global-color-8);
			--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg, rgba(6, 147, 227, 1) 0%, rgb(155, 81, 224) 100%);
			--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg, rgb(122, 220, 180) 0%, rgb(0, 208, 130) 100%);
			--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg, rgba(252, 185, 0, 1) 0%, rgba(255, 105, 0, 1) 100%);
			--wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg, rgba(255, 105, 0, 1) 0%, rgb(207, 46, 46) 100%);
			--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg, rgb(238, 238, 238) 0%, rgb(169, 184, 195) 100%);
			--wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg, rgb(74, 234, 220) 0%, rgb(151, 120, 209) 20%, rgb(207, 42, 186) 40%, rgb(238, 44, 130) 60%, rgb(251, 105, 98) 80%, rgb(254, 248, 76) 100%);
			--wp--preset--gradient--blush-light-purple: linear-gradient(135deg, rgb(255, 206, 236) 0%, rgb(152, 150, 240) 100%);
			--wp--preset--gradient--blush-bordeaux: linear-gradient(135deg, rgb(254, 205, 165) 0%, rgb(254, 45, 45) 50%, rgb(107, 0, 62) 100%);
			--wp--preset--gradient--luminous-dusk: linear-gradient(135deg, rgb(255, 203, 112) 0%, rgb(199, 81, 192) 50%, rgb(65, 88, 208) 100%);
			--wp--preset--gradient--pale-ocean: linear-gradient(135deg, rgb(255, 245, 203) 0%, rgb(182, 227, 212) 50%, rgb(51, 167, 181) 100%);
			--wp--preset--gradient--electric-grass: linear-gradient(135deg, rgb(202, 248, 128) 0%, rgb(113, 206, 126) 100%);
			--wp--preset--gradient--midnight: linear-gradient(135deg, rgb(2, 3, 129) 0%, rgb(40, 116, 252) 100%);
			--wp--preset--font-size--small: 13px;
			--wp--preset--font-size--medium: 20px;
			--wp--preset--font-size--large: 36px;
			--wp--preset--font-size--x-large: 42px;
			--wp--preset--spacing--20: 0.44rem;
			--wp--preset--spacing--30: 0.67rem;
			--wp--preset--spacing--40: 1rem;
			--wp--preset--spacing--50: 1.5rem;
			--wp--preset--spacing--60: 2.25rem;
			--wp--preset--spacing--70: 3.38rem;
			--wp--preset--spacing--80: 5.06rem;
			--wp--preset--shadow--natural: 6px 6px 9px rgba(0, 0, 0, 0.2);
			--wp--preset--shadow--deep: 12px 12px 50px rgba(0, 0, 0, 0.4);
			--wp--preset--shadow--sharp: 6px 6px 0px rgba(0, 0, 0, 0.2);
			--wp--preset--shadow--outlined: 6px 6px 0px -3px rgba(255, 255, 255, 1), 6px 6px rgba(0, 0, 0, 1);
			--wp--preset--shadow--crisp: 6px 6px 0px rgba(0, 0, 0, 1);
		}

		body {
			margin: 0;
			--wp--style--global--content-size: var(--wp--custom--ast-content-width-size);
			--wp--style--global--wide-size: var(--wp--custom--ast-wide-width-size);
		}

		.wp-site-blocks>.alignleft {
			float: left;
			margin-right: 2em;
		}

		.wp-site-blocks>.alignright {
			float: right;
			margin-left: 2em;
		}

		.wp-site-blocks>.aligncenter {
			justify-content: center;
			margin-left: auto;
			margin-right: auto;
		}

		:where(.wp-site-blocks)>* {
			margin-block-start: 24px;
			margin-block-end: 0;
		}

		:where(.wp-site-blocks)> :first-child:first-child {
			margin-block-start: 0;
		}

		:where(.wp-site-blocks)> :last-child:last-child {
			margin-block-end: 0;
		}

		body {
			--wp--style--block-gap: 24px;
		}

		:where(body .is-layout-flow)> :first-child:first-child {
			margin-block-start: 0;
		}

		:where(body .is-layout-flow)> :last-child:last-child {
			margin-block-end: 0;
		}

		:where(body .is-layout-flow)>* {
			margin-block-start: 24px;
			margin-block-end: 0;
		}

		:where(body .is-layout-constrained)> :first-child:first-child {
			margin-block-start: 0;
		}

		:where(body .is-layout-constrained)> :last-child:last-child {
			margin-block-end: 0;
		}

		:where(body .is-layout-constrained)>* {
			margin-block-start: 24px;
			margin-block-end: 0;
		}

		:where(body .is-layout-flex) {
			gap: 24px;
		}

		:where(body .is-layout-grid) {
			gap: 24px;
		}

		body .is-layout-flow>.alignleft {
			float: left;
			margin-inline-start: 0;
			margin-inline-end: 2em;
		}

		body .is-layout-flow>.alignright {
			float: right;
			margin-inline-start: 2em;
			margin-inline-end: 0;
		}

		body .is-layout-flow>.aligncenter {
			margin-left: auto !important;
			margin-right: auto !important;
		}

		body .is-layout-constrained>.alignleft {
			float: left;
			margin-inline-start: 0;
			margin-inline-end: 2em;
		}

		body .is-layout-constrained>.alignright {
			float: right;
			margin-inline-start: 2em;
			margin-inline-end: 0;
		}

		body .is-layout-constrained>.aligncenter {
			margin-left: auto !important;
			margin-right: auto !important;
		}

		body .is-layout-constrained> :where(:not(.alignleft):not(.alignright):not(.alignfull)) {
			max-width: var(--wp--style--global--content-size);
			margin-left: auto !important;
			margin-right: auto !important;
		}

		body .is-layout-constrained>.alignwide {
			max-width: var(--wp--style--global--wide-size);
		}

		body .is-layout-flex {
			display: flex;
		}

		body .is-layout-flex {
			flex-wrap: wrap;
			align-items: center;
		}

		body .is-layout-flex>* {
			margin: 0;
		}

		body .is-layout-grid {
			display: grid;
		}

		body .is-layout-grid>* {
			margin: 0;
		}

		body {
			padding-top: 0px;
			padding-right: 0px;
			padding-bottom: 0px;
			padding-left: 0px;
		}

		a:where(:not(.wp-element-button)) {
			text-decoration: none;
		}

		.wp-element-button,
		.wp-block-button__link {
			background-color: #32373c;
			border-width: 0;
			color: #fff;
			font-family: inherit;
			font-size: inherit;
			line-height: inherit;
			padding: calc(0.667em + 2px) calc(1.333em + 2px);
			text-decoration: none;
		}

		.has-black-color {
			color: var(--wp--preset--color--black) !important;
		}

		.has-cyan-bluish-gray-color {
			color: var(--wp--preset--color--cyan-bluish-gray) !important;
		}

		.has-white-color {
			color: var(--wp--preset--color--white) !important;
		}

		.has-pale-pink-color {
			color: var(--wp--preset--color--pale-pink) !important;
		}

		.has-vivid-red-color {
			color: var(--wp--preset--color--vivid-red) !important;
		}

		.has-luminous-vivid-orange-color {
			color: var(--wp--preset--color--luminous-vivid-orange) !important;
		}

		.has-luminous-vivid-amber-color {
			color: var(--wp--preset--color--luminous-vivid-amber) !important;
		}

		.has-light-green-cyan-color {
			color: var(--wp--preset--color--light-green-cyan) !important;
		}

		.has-vivid-green-cyan-color {
			color: var(--wp--preset--color--vivid-green-cyan) !important;
		}

		.has-pale-cyan-blue-color {
			color: var(--wp--preset--color--pale-cyan-blue) !important;
		}

		.has-vivid-cyan-blue-color {
			color: var(--wp--preset--color--vivid-cyan-blue) !important;
		}

		.has-vivid-purple-color {
			color: var(--wp--preset--color--vivid-purple) !important;
		}

		.has-ast-global-color-0-color {
			color: var(--wp--preset--color--ast-global-color-0) !important;
		}

		.has-ast-global-color-1-color {
			color: var(--wp--preset--color--ast-global-color-1) !important;
		}

		.has-ast-global-color-2-color {
			color: var(--wp--preset--color--ast-global-color-2) !important;
		}

		.has-ast-global-color-3-color {
			color: var(--wp--preset--color--ast-global-color-3) !important;
		}

		.has-ast-global-color-4-color {
			color: var(--wp--preset--color--ast-global-color-4) !important;
		}

		.has-ast-global-color-5-color {
			color: var(--wp--preset--color--ast-global-color-5) !important;
		}

		.has-ast-global-color-6-color {
			color: var(--wp--preset--color--ast-global-color-6) !important;
		}

		.has-ast-global-color-7-color {
			color: var(--wp--preset--color--ast-global-color-7) !important;
		}

		.has-ast-global-color-8-color {
			color: var(--wp--preset--color--ast-global-color-8) !important;
		}

		.has-black-background-color {
			background-color: var(--wp--preset--color--black) !important;
		}

		.has-cyan-bluish-gray-background-color {
			background-color: var(--wp--preset--color--cyan-bluish-gray) !important;
		}

		.has-white-background-color {
			background-color: var(--wp--preset--color--white) !important;
		}

		.has-pale-pink-background-color {
			background-color: var(--wp--preset--color--pale-pink) !important;
		}

		.has-vivid-red-background-color {
			background-color: var(--wp--preset--color--vivid-red) !important;
		}

		.has-luminous-vivid-orange-background-color {
			background-color: var(--wp--preset--color--luminous-vivid-orange) !important;
		}

		.has-luminous-vivid-amber-background-color {
			background-color: var(--wp--preset--color--luminous-vivid-amber) !important;
		}

		.has-light-green-cyan-background-color {
			background-color: var(--wp--preset--color--light-green-cyan) !important;
		}

		.has-vivid-green-cyan-background-color {
			background-color: var(--wp--preset--color--vivid-green-cyan) !important;
		}

		.has-pale-cyan-blue-background-color {
			background-color: var(--wp--preset--color--pale-cyan-blue) !important;
		}

		.has-vivid-cyan-blue-background-color {
			background-color: var(--wp--preset--color--vivid-cyan-blue) !important;
		}

		.has-vivid-purple-background-color {
			background-color: var(--wp--preset--color--vivid-purple) !important;
		}

		.has-ast-global-color-0-background-color {
			background-color: var(--wp--preset--color--ast-global-color-0) !important;
		}

		.has-ast-global-color-1-background-color {
			background-color: var(--wp--preset--color--ast-global-color-1) !important;
		}

		.has-ast-global-color-2-background-color {
			background-color: var(--wp--preset--color--ast-global-color-2) !important;
		}

		.has-ast-global-color-3-background-color {
			background-color: var(--wp--preset--color--ast-global-color-3) !important;
		}

		.has-ast-global-color-4-background-color {
			background-color: var(--wp--preset--color--ast-global-color-4) !important;
		}

		.has-ast-global-color-5-background-color {
			background-color: var(--wp--preset--color--ast-global-color-5) !important;
		}

		.has-ast-global-color-6-background-color {
			background-color: var(--wp--preset--color--ast-global-color-6) !important;
		}

		.has-ast-global-color-7-background-color {
			background-color: var(--wp--preset--color--ast-global-color-7) !important;
		}

		.has-ast-global-color-8-background-color {
			background-color: var(--wp--preset--color--ast-global-color-8) !important;
		}

		.has-black-border-color {
			border-color: var(--wp--preset--color--black) !important;
		}

		.has-cyan-bluish-gray-border-color {
			border-color: var(--wp--preset--color--cyan-bluish-gray) !important;
		}

		.has-white-border-color {
			border-color: var(--wp--preset--color--white) !important;
		}

		.has-pale-pink-border-color {
			border-color: var(--wp--preset--color--pale-pink) !important;
		}

		.has-vivid-red-border-color {
			border-color: var(--wp--preset--color--vivid-red) !important;
		}

		.has-luminous-vivid-orange-border-color {
			border-color: var(--wp--preset--color--luminous-vivid-orange) !important;
		}

		.has-luminous-vivid-amber-border-color {
			border-color: var(--wp--preset--color--luminous-vivid-amber) !important;
		}

		.has-light-green-cyan-border-color {
			border-color: var(--wp--preset--color--light-green-cyan) !important;
		}

		.has-vivid-green-cyan-border-color {
			border-color: var(--wp--preset--color--vivid-green-cyan) !important;
		}

		.has-pale-cyan-blue-border-color {
			border-color: var(--wp--preset--color--pale-cyan-blue) !important;
		}

		.has-vivid-cyan-blue-border-color {
			border-color: var(--wp--preset--color--vivid-cyan-blue) !important;
		}

		.has-vivid-purple-border-color {
			border-color: var(--wp--preset--color--vivid-purple) !important;
		}

		.has-ast-global-color-0-border-color {
			border-color: var(--wp--preset--color--ast-global-color-0) !important;
		}

		.has-ast-global-color-1-border-color {
			border-color: var(--wp--preset--color--ast-global-color-1) !important;
		}

		.has-ast-global-color-2-border-color {
			border-color: var(--wp--preset--color--ast-global-color-2) !important;
		}

		.has-ast-global-color-3-border-color {
			border-color: var(--wp--preset--color--ast-global-color-3) !important;
		}

		.has-ast-global-color-4-border-color {
			border-color: var(--wp--preset--color--ast-global-color-4) !important;
		}

		.has-ast-global-color-5-border-color {
			border-color: var(--wp--preset--color--ast-global-color-5) !important;
		}

		.has-ast-global-color-6-border-color {
			border-color: var(--wp--preset--color--ast-global-color-6) !important;
		}

		.has-ast-global-color-7-border-color {
			border-color: var(--wp--preset--color--ast-global-color-7) !important;
		}

		.has-ast-global-color-8-border-color {
			border-color: var(--wp--preset--color--ast-global-color-8) !important;
		}

		.has-vivid-cyan-blue-to-vivid-purple-gradient-background {
			background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;
		}

		.has-light-green-cyan-to-vivid-green-cyan-gradient-background {
			background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;
		}

		.has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background {
			background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;
		}

		.has-luminous-vivid-orange-to-vivid-red-gradient-background {
			background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;
		}

		.has-very-light-gray-to-cyan-bluish-gray-gradient-background {
			background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;
		}

		.has-cool-to-warm-spectrum-gradient-background {
			background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;
		}

		.has-blush-light-purple-gradient-background {
			background: var(--wp--preset--gradient--blush-light-purple) !important;
		}

		.has-blush-bordeaux-gradient-background {
			background: var(--wp--preset--gradient--blush-bordeaux) !important;
		}

		.has-luminous-dusk-gradient-background {
			background: var(--wp--preset--gradient--luminous-dusk) !important;
		}

		.has-pale-ocean-gradient-background {
			background: var(--wp--preset--gradient--pale-ocean) !important;
		}

		.has-electric-grass-gradient-background {
			background: var(--wp--preset--gradient--electric-grass) !important;
		}

		.has-midnight-gradient-background {
			background: var(--wp--preset--gradient--midnight) !important;
		}

		.has-small-font-size {
			font-size: var(--wp--preset--font-size--small) !important;
		}

		.has-medium-font-size {
			font-size: var(--wp--preset--font-size--medium) !important;
		}

		.has-large-font-size {
			font-size: var(--wp--preset--font-size--large) !important;
		}

		.has-x-large-font-size {
			font-size: var(--wp--preset--font-size--x-large) !important;
		}

		.wp-block-navigation a:where(:not(.wp-element-button)) {
			color: inherit;
		}

		.wp-block-pullquote {
			font-size: 1.5em;
			line-height: 1.6;
		}
	</style>
	<link rel='stylesheet' id='searchandfilter-css' href='https://www.westminster.org.uk/wp-content/plugins/search-filter/style.css?ver=1' media='all' />
	<link rel='stylesheet' id='wpmf-singleimage-popup-style-css' href='https://www.westminster.org.uk/wp-content/plugins/wp-media-folder/assets/css/display-gallery/magnific-popup.css?ver=0.9.9' media='all' />
	<link rel='stylesheet' id='maxx-style-css' href='https://www.westminster.org.uk/wp-content/themes/westminster-child/maxx-style.css?ver=_S_VERSION' media='all' />
	<link rel='stylesheet' id='astra-addon-css-css' href='https://www.westminster.org.uk/wp-content/uploads/astra-addon/astra-addon-6515c7a595fc09-78981692.css?ver=4.3.3' media='all' />
	<style id='astra-addon-css-inline-css'>
		#content:before {
			content: "768";
			position: absolute;
			overflow: hidden;
			opacity: 0;
			visibility: hidden;
		}

		.single .ast-author-details .author-title {
			color: #f77e9d;
		}

		@media (max-width:768px) {
			.single.ast-separate-container .ast-author-meta {
				padding: 1.5em 2.14em;
			}

			.single .ast-author-meta .post-author-avatar {
				margin-bottom: 1em;
			}

			.ast-separate-container .ast-grid-2 .ast-article-post,
			.ast-separate-container .ast-grid-3 .ast-article-post,
			.ast-separate-container .ast-grid-4 .ast-article-post {
				width: 100%;
			}

			.blog-layout-1 .post-content,
			.blog-layout-1 .ast-blog-featured-section {
				float: none;
			}

			.ast-separate-container .ast-article-post.remove-featured-img-padding.has-post-thumbnail .blog-layout-1 .post-content .ast-blog-featured-section:first-child .square .posted-on {
				margin-top: 0;
			}

			.ast-separate-container .ast-article-post.remove-featured-img-padding.has-post-thumbnail .blog-layout-1 .post-content .ast-blog-featured-section:first-child .circle .posted-on {
				margin-top: 1em;
			}

			.ast-separate-container .ast-article-post.remove-featured-img-padding .blog-layout-1 .post-content .ast-blog-featured-section:first-child .post-thumb-img-content {
				margin-top: -1.5em;
			}

			.ast-separate-container .ast-article-post.remove-featured-img-padding .blog-layout-1 .post-thumb-img-content {
				margin-left: -2.14em;
				margin-right: -2.14em;
			}

			.ast-separate-container .ast-article-single.remove-featured-img-padding .single-layout-1 .entry-header .post-thumb-img-content:first-child {
				margin-top: -1.5em;
			}

			.ast-separate-container .ast-article-single.remove-featured-img-padding .single-layout-1 .post-thumb-img-content {
				margin-left: -2.14em;
				margin-right: -2.14em;
			}

			.ast-separate-container.ast-blog-grid-2 .ast-article-post.remove-featured-img-padding.has-post-thumbnail .blog-layout-1 .post-content .ast-blog-featured-section .square .posted-on,
			.ast-separate-container.ast-blog-grid-3 .ast-article-post.remove-featured-img-padding.has-post-thumbnail .blog-layout-1 .post-content .ast-blog-featured-section .square .posted-on,
			.ast-separate-container.ast-blog-grid-4 .ast-article-post.remove-featured-img-padding.has-post-thumbnail .blog-layout-1 .post-content .ast-blog-featured-section .square .posted-on {
				margin-left: -1.5em;
				margin-right: -1.5em;
			}

			.ast-separate-container.ast-blog-grid-2 .ast-article-post.remove-featured-img-padding.has-post-thumbnail .blog-layout-1 .post-content .ast-blog-featured-section .circle .posted-on,
			.ast-separate-container.ast-blog-grid-3 .ast-article-post.remove-featured-img-padding.has-post-thumbnail .blog-layout-1 .post-content .ast-blog-featured-section .circle .posted-on,
			.ast-separate-container.ast-blog-grid-4 .ast-article-post.remove-featured-img-padding.has-post-thumbnail .blog-layout-1 .post-content .ast-blog-featured-section .circle .posted-on {
				margin-left: -0.5em;
				margin-right: -0.5em;
			}

			.ast-separate-container.ast-blog-grid-2 .ast-article-post.remove-featured-img-padding.has-post-thumbnail .blog-layout-1 .post-content .ast-blog-featured-section:first-child .square .posted-on,
			.ast-separate-container.ast-blog-grid-3 .ast-article-post.remove-featured-img-padding.has-post-thumbnail .blog-layout-1 .post-content .ast-blog-featured-section:first-child .square .posted-on,
			.ast-separate-container.ast-blog-grid-4 .ast-article-post.remove-featured-img-padding.has-post-thumbnail .blog-layout-1 .post-content .ast-blog-featured-section:first-child .square .posted-on {
				margin-top: 0;
			}

			.ast-separate-container.ast-blog-grid-2 .ast-article-post.remove-featured-img-padding.has-post-thumbnail .blog-layout-1 .post-content .ast-blog-featured-section:first-child .circle .posted-on,
			.ast-separate-container.ast-blog-grid-3 .ast-article-post.remove-featured-img-padding.has-post-thumbnail .blog-layout-1 .post-content .ast-blog-featured-section:first-child .circle .posted-on,
			.ast-separate-container.ast-blog-grid-4 .ast-article-post.remove-featured-img-padding.has-post-thumbnail .blog-layout-1 .post-content .ast-blog-featured-section:first-child .circle .posted-on {
				margin-top: 1em;
			}

			.ast-separate-container.ast-blog-grid-2 .ast-article-post.remove-featured-img-padding .blog-layout-1 .post-content .ast-blog-featured-section:first-child .post-thumb-img-content,
			.ast-separate-container.ast-blog-grid-3 .ast-article-post.remove-featured-img-padding .blog-layout-1 .post-content .ast-blog-featured-section:first-child .post-thumb-img-content,
			.ast-separate-container.ast-blog-grid-4 .ast-article-post.remove-featured-img-padding .blog-layout-1 .post-content .ast-blog-featured-section:first-child .post-thumb-img-content {
				margin-top: -1.5em;
			}

			.ast-separate-container.ast-blog-grid-2 .ast-article-post.remove-featured-img-padding .blog-layout-1 .post-thumb-img-content,
			.ast-separate-container.ast-blog-grid-3 .ast-article-post.remove-featured-img-padding .blog-layout-1 .post-thumb-img-content,
			.ast-separate-container.ast-blog-grid-4 .ast-article-post.remove-featured-img-padding .blog-layout-1 .post-thumb-img-content {
				margin-left: -1.5em;
				margin-right: -1.5em;
			}

			.blog-layout-2 {
				display: flex;
				flex-direction: column-reverse;
			}

			.ast-separate-container .blog-layout-3,
			.ast-separate-container .blog-layout-1 {
				display: block;
			}

			.ast-plain-container .ast-grid-2 .ast-article-post,
			.ast-plain-container .ast-grid-3 .ast-article-post,
			.ast-plain-container .ast-grid-4 .ast-article-post,
			.ast-page-builder-template .ast-grid-2 .ast-article-post,
			.ast-page-builder-template .ast-grid-3 .ast-article-post,
			.ast-page-builder-template .ast-grid-4 .ast-article-post {
				width: 100%;
			}
		}

		@media (max-width:768px) {
			.ast-separate-container .ast-article-post.remove-featured-img-padding.has-post-thumbnail .blog-layout-1 .post-content .ast-blog-featured-section .square .posted-on {
				margin-top: 0;
				margin-left: -2.14em;
			}

			.ast-separate-container .ast-article-post.remove-featured-img-padding.has-post-thumbnail .blog-layout-1 .post-content .ast-blog-featured-section .circle .posted-on {
				margin-top: 0;
				margin-left: -1.14em;
			}
		}

		@media (min-width:769px) {

			.ast-separate-container.ast-blog-grid-2 .ast-archive-description,
			.ast-separate-container.ast-blog-grid-3 .ast-archive-description,
			.ast-separate-container.ast-blog-grid-4 .ast-archive-description {
				margin-bottom: 1.33333em;
			}

			.blog-layout-2.ast-no-thumb .post-content,
			.blog-layout-3.ast-no-thumb .post-content {
				width: calc(100% - 5.714285714em);
			}

			.blog-layout-2.ast-no-thumb.ast-no-date-box .post-content,
			.blog-layout-3.ast-no-thumb.ast-no-date-box .post-content {
				width: 100%;
			}

			.ast-separate-container .ast-grid-2 .ast-article-post.ast-separate-posts,
			.ast-separate-container .ast-grid-3 .ast-article-post.ast-separate-posts,
			.ast-separate-container .ast-grid-4 .ast-article-post.ast-separate-posts {
				border-bottom: 0;
			}

			.ast-separate-container .ast-grid-2>.site-main>.ast-row,
			.ast-separate-container .ast-grid-3>.site-main>.ast-row,
			.ast-separate-container .ast-grid-4>.site-main>.ast-row {
				margin-left: 0;
				margin-right: 0;
				display: flex;
				flex-flow: row wrap;
				align-items: stretch;
			}

			.ast-separate-container .ast-grid-2>.site-main>.ast-row:before,
			.ast-separate-container .ast-grid-2>.site-main>.ast-row:after,
			.ast-separate-container .ast-grid-3>.site-main>.ast-row:before,
			.ast-separate-container .ast-grid-3>.site-main>.ast-row:after,
			.ast-separate-container .ast-grid-4>.site-main>.ast-row:before,
			.ast-separate-container .ast-grid-4>.site-main>.ast-row:after {
				flex-basis: 0;
				width: 0;
			}

			.ast-separate-container .ast-grid-2 .ast-article-post,
			.ast-separate-container .ast-grid-3 .ast-article-post,
			.ast-separate-container .ast-grid-4 .ast-article-post {
				display: flex;
				padding: 0;
			}

			.ast-plain-container .ast-grid-2>.site-main>.ast-row,
			.ast-plain-container .ast-grid-3>.site-main>.ast-row,
			.ast-plain-container .ast-grid-4>.site-main>.ast-row,
			.ast-page-builder-template .ast-grid-2>.site-main>.ast-row,
			.ast-page-builder-template .ast-grid-3>.site-main>.ast-row,
			.ast-page-builder-template .ast-grid-4>.site-main>.ast-row {
				margin-left: -1em;
				margin-right: -1em;
				display: flex;
				flex-flow: row wrap;
				align-items: stretch;
			}

			.ast-plain-container .ast-grid-2>.site-main>.ast-row:before,
			.ast-plain-container .ast-grid-2>.site-main>.ast-row:after,
			.ast-plain-container .ast-grid-3>.site-main>.ast-row:before,
			.ast-plain-container .ast-grid-3>.site-main>.ast-row:after,
			.ast-plain-container .ast-grid-4>.site-main>.ast-row:before,
			.ast-plain-container .ast-grid-4>.site-main>.ast-row:after,
			.ast-page-builder-template .ast-grid-2>.site-main>.ast-row:before,
			.ast-page-builder-template .ast-grid-2>.site-main>.ast-row:after,
			.ast-page-builder-template .ast-grid-3>.site-main>.ast-row:before,
			.ast-page-builder-template .ast-grid-3>.site-main>.ast-row:after,
			.ast-page-builder-template .ast-grid-4>.site-main>.ast-row:before,
			.ast-page-builder-template .ast-grid-4>.site-main>.ast-row:after {
				flex-basis: 0;
				width: 0;
			}

			.ast-plain-container .ast-grid-2 .ast-article-post,
			.ast-plain-container .ast-grid-3 .ast-article-post,
			.ast-plain-container .ast-grid-4 .ast-article-post,
			.ast-page-builder-template .ast-grid-2 .ast-article-post,
			.ast-page-builder-template .ast-grid-3 .ast-article-post,
			.ast-page-builder-template .ast-grid-4 .ast-article-post {
				display: flex;
			}

			.ast-plain-container .ast-grid-2 .ast-article-post:last-child,
			.ast-plain-container .ast-grid-3 .ast-article-post:last-child,
			.ast-plain-container .ast-grid-4 .ast-article-post:last-child,
			.ast-page-builder-template .ast-grid-2 .ast-article-post:last-child,
			.ast-page-builder-template .ast-grid-3 .ast-article-post:last-child,
			.ast-page-builder-template .ast-grid-4 .ast-article-post:last-child {
				margin-bottom: 2.5em;
			}

			.single .ast-author-meta .ast-author-details {
				display: flex;
			}
		}

		@media (min-width:769px) {

			.single .post-author-avatar,
			.single .post-author-bio {
				float: left;
				clear: right;
			}

			.single .ast-author-meta .post-author-avatar {
				margin-right: 1.33333em;
			}

			.single .ast-author-meta .about-author-title-wrapper,
			.single .ast-author-meta .post-author-bio {
				text-align: left;
			}

			.blog-layout-2 .post-content {
				padding-right: 2em;
			}

			.blog-layout-2.ast-no-date-box.ast-no-thumb .post-content {
				padding-right: 0;
			}

			.blog-layout-3 .post-content {
				padding-left: 2em;
			}

			.blog-layout-3.ast-no-date-box.ast-no-thumb .post-content {
				padding-left: 0;
			}

			.ast-separate-container .ast-grid-2 .ast-article-post.ast-separate-posts:nth-child(2n+0),
			.ast-separate-container .ast-grid-2 .ast-article-post.ast-separate-posts:nth-child(2n+1),
			.ast-separate-container .ast-grid-3 .ast-article-post.ast-separate-posts:nth-child(2n+0),
			.ast-separate-container .ast-grid-3 .ast-article-post.ast-separate-posts:nth-child(2n+1),
			.ast-separate-container .ast-grid-4 .ast-article-post.ast-separate-posts:nth-child(2n+0),
			.ast-separate-container .ast-grid-4 .ast-article-post.ast-separate-posts:nth-child(2n+1) {
				padding: 0 1em 0;
			}
		}

		@media (max-width:544px) {
			.ast-separate-container .ast-article-post.remove-featured-img-padding.has-post-thumbnail .blog-layout-1 .post-content .ast-blog-featured-section:first-child .circle .posted-on {
				margin-top: 0.5em;
			}

			.ast-separate-container .ast-article-post.remove-featured-img-padding .blog-layout-1 .post-thumb-img-content,
			.ast-separate-container .ast-article-single.remove-featured-img-padding .single-layout-1 .post-thumb-img-content,
			.ast-separate-container.ast-blog-grid-2 .ast-article-post.remove-featured-img-padding.has-post-thumbnail .blog-layout-1 .post-content .ast-blog-featured-section .square .posted-on,
			.ast-separate-container.ast-blog-grid-3 .ast-article-post.remove-featured-img-padding.has-post-thumbnail .blog-layout-1 .post-content .ast-blog-featured-section .square .posted-on,
			.ast-separate-container.ast-blog-grid-4 .ast-article-post.remove-featured-img-padding.has-post-thumbnail .blog-layout-1 .post-content .ast-blog-featured-section .square .posted-on {
				margin-left: -1em;
				margin-right: -1em;
			}

			.ast-separate-container.ast-blog-grid-2 .ast-article-post.remove-featured-img-padding.has-post-thumbnail .blog-layout-1 .post-content .ast-blog-featured-section .circle .posted-on,
			.ast-separate-container.ast-blog-grid-3 .ast-article-post.remove-featured-img-padding.has-post-thumbnail .blog-layout-1 .post-content .ast-blog-featured-section .circle .posted-on,
			.ast-separate-container.ast-blog-grid-4 .ast-article-post.remove-featured-img-padding.has-post-thumbnail .blog-layout-1 .post-content .ast-blog-featured-section .circle .posted-on {
				margin-left: -0.5em;
				margin-right: -0.5em;
			}

			.ast-separate-container.ast-blog-grid-2 .ast-article-post.remove-featured-img-padding.has-post-thumbnail .blog-layout-1 .post-content .ast-blog-featured-section:first-child .circle .posted-on,
			.ast-separate-container.ast-blog-grid-3 .ast-article-post.remove-featured-img-padding.has-post-thumbnail .blog-layout-1 .post-content .ast-blog-featured-section:first-child .circle .posted-on,
			.ast-separate-container.ast-blog-grid-4 .ast-article-post.remove-featured-img-padding.has-post-thumbnail .blog-layout-1 .post-content .ast-blog-featured-section:first-child .circle .posted-on {
				margin-top: 0.5em;
			}

			.ast-separate-container.ast-blog-grid-2 .ast-article-post.remove-featured-img-padding .blog-layout-1 .post-content .ast-blog-featured-section:first-child .post-thumb-img-content,
			.ast-separate-container.ast-blog-grid-3 .ast-article-post.remove-featured-img-padding .blog-layout-1 .post-content .ast-blog-featured-section:first-child .post-thumb-img-content,
			.ast-separate-container.ast-blog-grid-4 .ast-article-post.remove-featured-img-padding .blog-layout-1 .post-content .ast-blog-featured-section:first-child .post-thumb-img-content {
				margin-top: -1.33333em;
			}

			.ast-separate-container.ast-blog-grid-2 .ast-article-post.remove-featured-img-padding .blog-layout-1 .post-thumb-img-content,
			.ast-separate-container.ast-blog-grid-3 .ast-article-post.remove-featured-img-padding .blog-layout-1 .post-thumb-img-content,
			.ast-separate-container.ast-blog-grid-4 .ast-article-post.remove-featured-img-padding .blog-layout-1 .post-thumb-img-content {
				margin-left: -1em;
				margin-right: -1em;
			}

			.ast-separate-container .ast-grid-2 .ast-article-post .blog-layout-1,
			.ast-separate-container .ast-grid-2 .ast-article-post .blog-layout-2,
			.ast-separate-container .ast-grid-2 .ast-article-post .blog-layout-3 {
				padding: 1.33333em 1em;
			}

			.ast-separate-container .ast-grid-3 .ast-article-post .blog-layout-1,
			.ast-separate-container .ast-grid-4 .ast-article-post .blog-layout-1 {
				padding: 1.33333em 1em;
			}

			.single.ast-separate-container .ast-author-meta {
				padding: 1.5em 1em;
			}
		}

		@media (max-width:544px) {
			.ast-separate-container .ast-article-post.remove-featured-img-padding.has-post-thumbnail .blog-layout-1 .post-content .ast-blog-featured-section .square .posted-on {
				margin-left: -1em;
			}

			.ast-separate-container .ast-article-post.remove-featured-img-padding.has-post-thumbnail .blog-layout-1 .post-content .ast-blog-featured-section .circle .posted-on {
				margin-left: -0.5em;
			}
		}

		@media (min-width:769px) {
			.ast-hide-display-device-desktop {
				display: none;
			}
		}

		@media (min-width:545px) and (max-width:768px) {
			.ast-hide-display-device-tablet {
				display: none;
			}
		}

		@media (max-width:544px) {
			.ast-hide-display-device-mobile {
				display: none;
			}
		}

		.ast-article-post .ast-date-meta .posted-on,
		.ast-article-post .ast-date-meta .posted-on * {
			background: #f77e9d;
			color: #000000;
		}

		.ast-article-post .ast-date-meta .posted-on .date-month,
		.ast-article-post .ast-date-meta .posted-on .date-year {
			color: #000000;
		}

		.ast-load-more:hover {
			color: #000000;
			border-color: #f77e9d;
			background-color: #f77e9d;
		}

		.ast-loader>div {
			background-color: #f77e9d;
		}

		h4,
		.entry-content h4 {
			color: #f7f7f7;
		}

		.read-more a:not(.ast-button):hover,
		.entry-meta a:hover,
		.entry-meta a:hover * {
			color: #f77e9d;
		}

		.entry-meta a,
		.entry-meta a *,
		.read-more a:not(.ast-button) {
			color: #f77e9d;
		}

		.entry-meta,
		.entry-meta * {
			color: #404a54;
		}

		.ast-small-footer {
			color: #222329;
		}

		.ast-small-footer a {
			color: #f77e9d;
		}

		.ast-small-footer a:hover {
			color: #ffffff;
		}

		@media (max-width:544px) {

			.main-header-menu .current-menu-item>.menu-link,
			.main-header-menu .current-menu-ancestor>.menu-link {
				color: #ffffff;
			}
		}

		.ast-header-search .ast-search-menu-icon .search-field {
			border-radius: 2px;
		}

		.ast-header-search .ast-search-menu-icon .search-submit {
			border-radius: 2px;
		}

		.ast-header-search .ast-search-menu-icon .search-form {
			border-top-width: 1px;
			border-bottom-width: 1px;
			border-left-width: 1px;
			border-right-width: 1px;
			border-color: #ddd;
			border-radius: 2px;
		}

		.footer-adv a {
			color: #f77e9d;
		}

		.footer-adv .tagcloud a:hover,
		.footer-adv .tagcloud a.current-item {
			border-color: #f77e9d;
			background-color: #f77e9d;
		}

		.footer-adv .calendar_wrap #today,
		.footer-adv a:hover+.post-count {
			background-color: #f77e9d;
		}

		.footer-adv .widget-title,
		.footer-adv .widget-title a.rsswidget,
		.ast-no-widget-row .widget-title {
			font-family: Arial, Helvetica, Verdana, sans-serif;
			font-weight: 700;
			font-size: 16px;
			font-size: 1.0666666666667rem;
			text-transform: inherit;
		}

		.footer-adv .widget>*:not(.widget-title) {
			font-family: 'Montserrat', sans-serif;
		}

		.footer-adv .tagcloud a:hover,
		.footer-adv .tagcloud a.current-item {
			color: #000000;
		}

		.footer-adv .calendar_wrap #today {
			color: #000000;
		}

		.ast-fullscreen-menu-enable.ast-header-break-point .main-header-bar-navigation .close:after,
		.ast-fullscreen-above-menu-enable.ast-header-break-point .ast-above-header-navigation-wrap .close:after,
		.ast-fullscreen-below-menu-enable.ast-header-break-point .ast-below-header-navigation-wrap .close:after {
			content: "\e5cd";
			display: inline-block;
			font-family: 'Astra';
			font-size: 2rem;
			text-rendering: auto;
			-webkit-font-smoothing: antialiased;
			-moz-osx-font-smoothing: grayscale;
			line-height: 40px;
			height: 40px;
			width: 40px;
			text-align: center;
			margin: 0;
		}

		.ast-flyout-above-menu-enable.ast-header-break-point .ast-above-header-navigation-wrap .close:after {
			content: "\e5cd";
			display: inline-block;
			font-family: 'Astra';
			font-size: 28px;
			text-rendering: auto;
			-webkit-font-smoothing: antialiased;
			-moz-osx-font-smoothing: grayscale;
			line-height: normal;
		}

		.ast-flyout-below-menu-enable.ast-header-break-point .ast-below-header-navigation-wrap .close:after {
			content: "\e5cd";
			display: inline-block;
			font-family: 'Astra';
			font-size: 28px;
			text-rendering: auto;
			-webkit-font-smoothing: antialiased;
			-moz-osx-font-smoothing: grayscale;
			line-height: normal;
		}

		.ast-header-break-point .main-header-bar .main-header-bar-navigation .main-header-menu {
			border-top-width: 0px;
			border-color: #dadada;
		}

		.ast-header-break-point .main-navigation ul .menu-item .menu-link {
			border-color: #dadada;
			border-style: solid;
		}

		.ast-header-break-point li.ast-masthead-custom-menu-items {
			border-color: #dadada;
			border-style: solid;
			margin-top: 0;
			margin-bottom: 0;
		}

		@media (max-width:544px) {

			.ast-header-break-point .main-header-menu .menu-item.current-menu-item>.ast-menu-toggle,
			.ast-header-break-point .main-header-menu .menu-item.current-menu-ancestor>.ast-menu-toggle,
			.ast-header-break-point .main-header-menu .menu-item.current-menu-item>.menu-link,
			.ast-header-break-point .main-header-menu .menu-item.current-menu-ancestor>.menu-link {
				color: #ffffff;
			}
		}

		@media (max-width:544px) {

			.ast-flyout-menu-enable.ast-main-header-nav-open .main-header-bar,
			.ast-fullscreen-menu-enable.ast-main-header-nav-open .main-header-bar {
				padding-bottom: 0em;
			}
		}

		@media (min-width:769px) {
			.ast-container {
				max-width: 1240px;
			}
		}

		@media (min-width:993px) {
			.ast-container {
				max-width: 1240px;
			}
		}

		@media (min-width:1201px) {
			.ast-container {
				max-width: 1240px;
			}
		}

		.site-header .ast-site-identity {
			padding-top: 0px;
			padding-left: 80px;
		}

		@media (max-width:768px) {

			.ast-separate-container .ast-article-post,
			.ast-separate-container .ast-article-single,
			.ast-separate-container .ast-comment-list li.depth-1,
			.ast-separate-container .comment-respond,
			.single.ast-separate-container .ast-author-details,
			.ast-separate-container .ast-related-posts-wrap,
			.ast-separate-container .ast-woocommerce-container {
				padding-top: 1.5em;
				padding-bottom: 1.5em;
			}

			.ast-separate-container .ast-article-post,
			.ast-separate-container .ast-article-single,
			.ast-separate-container .comments-count-wrapper,
			.ast-separate-container .ast-comment-list li.depth-1,
			.ast-separate-container .comment-respond,
			.ast-separate-container .related-posts-title-wrapper,
			.ast-separate-container .related-posts-title-wrapper,
			.single.ast-separate-container .ast-author-details,
			.single.ast-separate-container .about-author-title-wrapper,
			.ast-separate-container .ast-related-posts-wrap,
			.ast-separate-container .ast-woocommerce-container,
			.ast-separate-container .ast-single-related-posts-container {
				padding-right: 2.14em;
				padding-left: 2.14em;
			}

			.ast-narrow-container .ast-article-post,
			.ast-narrow-container .ast-article-single,
			.ast-narrow-container .ast-comment-list li.depth-1,
			.ast-narrow-container .comment-respond,
			.single.ast-narrow-container .ast-author-details,
			.ast-narrow-container .ast-related-posts-wrap,
			.ast-narrow-container .ast-woocommerce-container,
			.ast-narrow-container .ast-single-related-posts-container {
				padding-top: 1.5em;
				padding-bottom: 1.5em;
			}

			.ast-narrow-container .ast-article-post,
			.ast-narrow-container .ast-article-single,
			.ast-narrow-container .comments-count-wrapper,
			.ast-narrow-container .ast-comment-list li.depth-1,
			.ast-narrow-container .comment-respond,
			.ast-narrow-container .related-posts-title-wrapper,
			.ast-narrow-container .related-posts-title-wrapper,
			.single.ast-narrow-container .ast-author-details,
			.single.ast-narrow-container .about-author-title-wrapper,
			.ast-narrow-container .ast-related-posts-wrap,
			.ast-narrow-container .ast-woocommerce-container,
			.ast-narrow-container .ast-single-related-posts-container {
				padding-right: 2.14em;
				padding-left: 2.14em;
			}

			.ast-separate-container.ast-right-sidebar #primary,
			.ast-separate-container.ast-left-sidebar #primary,
			.ast-separate-container #primary,
			.ast-plain-container #primary,
			.ast-narrow-container #primary {
				margin-top: 1.5em;
				margin-bottom: 1.5em;
			}

			.ast-left-sidebar #primary,
			.ast-right-sidebar #primary,
			.ast-separate-container.ast-right-sidebar #primary,
			.ast-separate-container.ast-left-sidebar #primary,
			.ast-separate-container #primary,
			.ast-narrow-container #primary {
				padding-left: 0em;
				padding-right: 0em;
			}

			.ast-no-sidebar.ast-separate-container .entry-content .alignfull,
			.ast-no-sidebar.ast-narrow-container .entry-content .alignfull {
				margin-right: -2.14em;
				margin-left: -2.14em;
			}

			.site-header .ast-site-identity {
				padding-top: 0px;
				padding-left: 20px;
			}
		}

		@media (max-width:544px) {

			.ast-separate-container .ast-article-post,
			.ast-separate-container .ast-article-single,
			.ast-separate-container .ast-comment-list li.depth-1,
			.ast-separate-container .comment-respond,
			.single.ast-separate-container .ast-author-details,
			.ast-separate-container .ast-related-posts-wrap,
			.ast-separate-container .ast-woocommerce-container {
				padding-top: 1.5em;
				padding-bottom: 1.5em;
			}

			.ast-narrow-container .ast-article-post,
			.ast-narrow-container .ast-article-single,
			.ast-narrow-container .ast-comment-list li.depth-1,
			.ast-narrow-container .comment-respond,
			.single.ast-narrow-container .ast-author-details,
			.ast-narrow-container .ast-related-posts-wrap,
			.ast-narrow-container .ast-woocommerce-container,
			.ast-narrow-container .ast-single-related-posts-container {
				padding-top: 1.5em;
				padding-bottom: 1.5em;
			}

			.ast-separate-container .ast-article-post,
			.ast-separate-container .ast-article-single,
			.ast-separate-container .comments-count-wrapper,
			.ast-separate-container .ast-comment-list li.depth-1,
			.ast-separate-container .comment-respond,
			.ast-separate-container .related-posts-title-wrapper,
			.ast-separate-container .related-posts-title-wrapper,
			.single.ast-separate-container .ast-author-details,
			.single.ast-separate-container .about-author-title-wrapper,
			.ast-separate-container .ast-related-posts-wrap,
			.ast-separate-container .ast-woocommerce-container {
				padding-right: 1em;
				padding-left: 1em;
			}

			.ast-narrow-container .ast-article-post,
			.ast-narrow-container .ast-article-single,
			.ast-narrow-container .comments-count-wrapper,
			.ast-narrow-container .ast-comment-list li.depth-1,
			.ast-narrow-container .comment-respond,
			.ast-narrow-container .related-posts-title-wrapper,
			.ast-narrow-container .related-posts-title-wrapper,
			.single.ast-narrow-container .ast-author-details,
			.single.ast-narrow-container .about-author-title-wrapper,
			.ast-narrow-container .ast-related-posts-wrap,
			.ast-narrow-container .ast-woocommerce-container,
			.ast-narrow-container .ast-single-related-posts-container {
				padding-right: 1em;
				padding-left: 1em;
			}

			.ast-no-sidebar.ast-separate-container .entry-content .alignfull,
			.ast-no-sidebar.ast-narrow-container .entry-content .alignfull {
				margin-right: -1em;
				margin-left: -1em;
			}

			.site-header .ast-site-identity {
				padding-top: 0px;
				padding-left: 0px;
			}
		}

		@media (max-width:768px) {
			.ast-header-break-point .main-header-bar .main-header-bar-navigation .menu-item-has-children>.ast-menu-toggle {
				top: 0px;
				right: calc(20px - 0.907em);
			}

			.ast-flyout-menu-enable.ast-header-break-point .main-header-bar .main-header-bar-navigation .main-header-menu>.menu-item-has-children>.ast-menu-toggle {
				right: calc(20px - 0.907em);
			}
		}

		@media (max-width:544px) {

			.ast-header-break-point .header-main-layout-2 .site-branding,
			.ast-header-break-point .ast-mobile-header-stack .ast-mobile-menu-buttons {
				padding-bottom: 0;
			}
		}

		@media (max-width:768px) {

			.ast-separate-container.ast-two-container #secondary .widget,
			.ast-separate-container #secondary .widget {
				margin-bottom: 1.5em;
			}
		}

		@media (max-width:768px) {

			.ast-separate-container #primary,
			.ast-narrow-container #primary {
				padding-top: 0;
			}
		}

		@media (max-width:768px) {

			.ast-separate-container #primary,
			.ast-narrow-container #primary {
				padding-bottom: 0;
			}
		}

		@media (max-width:768px) {
			.ast-separate-container .ast-article-single.remove-featured-img-padding .single-layout-1 .entry-header .post-thumb-img-content:first-child {
				margin-top: -1.5em;
			}

			.ast-separate-container .ast-article-single.remove-featured-img-padding .single-layout-1 .entry-header .post-thumb-img-content:first-child,
			.ast-separate-container .ast-article-single.remove-featured-img-padding .single-layout-1 .post-thumb-img-content {
				margin-left: -2.14em;
				margin-right: -2.14em;
			}
		}

		@media (max-width:544px) {
			.ast-separate-container .ast-article-single.remove-featured-img-padding .single-layout-1 .entry-header .post-thumb-img-content:first-child {
				margin-top: -1.5em;
			}

			.ast-separate-container .ast-article-single.remove-featured-img-padding .single-layout-1 .entry-header .post-thumb-img-content:first-child,
			.ast-separate-container .ast-article-single.remove-featured-img-padding .single-layout-1 .post-thumb-img-content {
				margin-left: -1em;
				margin-right: -1em;
			}
		}

		.main-header-bar .ast-container,
		#masthead .ast-container {
			padding-right: 0px;
		}

		.ast-default-menu-enable.ast-main-header-nav-open.ast-header-break-point .main-header-bar,
		.ast-main-header-nav-open .main-header-bar {
			padding-bottom: 0;
		}

		.ast-fullscreen-menu-enable.ast-header-break-point .main-header-bar .main-header-bar-navigation .main-header-menu>.menu-item-has-children>.ast-menu-toggle {
			right: 0;
		}

		.ast-fullscreen-menu-enable.ast-header-break-point .main-header-bar .main-header-bar-navigation .sub-menu .menu-item-has-children>.ast-menu-toggle {
			right: 0;
		}

		.ast-fullscreen-menu-enable.ast-header-break-point .ast-above-header-menu .sub-menu .menu-item.menu-item-has-children>.menu-link,
		.ast-default-menu-enable.ast-header-break-point .ast-above-header-menu .sub-menu .menu-item.menu-item-has-children>.menu-link,
		.ast-flyout-menu-enable.ast-header-break-point .ast-above-header-menu .sub-menu .menu-item.menu-item-has-children>.menu-link {
			padding-right: 0;
		}

		.ast-fullscreen-menu-enable.ast-header-break-point .ast-below-header-menu .sub-menu .menu-item.menu-item-has-children>.menu-link,
		.ast-default-menu-enable.ast-header-break-point .ast-below-header-menu .sub-menu .menu-item.menu-item-has-children>.menu-link,
		.ast-flyout-menu-enable.ast-header-break-point .ast-below-header-menu .sub-menu .menu-item.menu-item-has-children>.menu-link {
			padding-right: 0;
		}

		.ast-fullscreen-below-menu-enable.ast-header-break-point .ast-below-header-enabled .ast-below-header-navigation .ast-below-header-menu .menu-item.menu-item-has-children>.menu-link,
		.ast-default-below-menu-enable.ast-header-break-point .ast-below-header-enabled .ast-below-header-navigation .ast-below-header-menu .menu-item.menu-item-has-children>.menu-link,
		.ast-flyout-below-menu-enable.ast-header-break-point .ast-below-header-enabled .ast-below-header-navigation .ast-below-header-menu .menu-item.menu-item-has-children>.menu-link {
			padding-right: 0;
		}

		.ast-fullscreen-below-menu-enable.ast-header-break-point .ast-below-header-navigation .menu-item-has-children>.ast-menu-toggle,
		.ast-fullscreen-below-menu-enable.ast-header-break-point .ast-below-header-menu-items .menu-item-has-children>.ast-menu-toggle {
			right: 0;
		}

		.ast-fullscreen-below-menu-enable .ast-below-header-enabled .ast-below-header-navigation .ast-below-header-menu .menu-item.menu-item-has-children .sub-menu .ast-menu-toggle {
			right: 0;
		}

		.ast-above-header {
			padding-top: 20px;
			padding-bottom: 20px;
		}

		.ast-above-header-wrap .ast-above-header .ast-container,
		#masthead .ast-above-header-wrap .ast-above-header .ast-container {
			padding-right: 20px;
		}

		.ast-fullscreen-above-menu-enable.ast-header-break-point .ast-above-header-enabled .ast-above-header-navigation .ast-above-header-menu .menu-item.menu-item-has-children>.menu-link,
		.ast-default-above-menu-enable.ast-header-break-point .ast-above-header-enabled .ast-above-header-navigation .ast-above-header-menu .menu-item.menu-item-has-children>.menu-link,
		.ast-flyout-above-menu-enable.ast-header-break-point .ast-above-header-enabled .ast-above-header-navigation .ast-above-header-menu .menu-item.menu-item-has-children>.menu-link {
			padding-right: 0;
		}

		.ast-fullscreen-above-menu-enable.ast-header-break-point .ast-above-header-navigation .menu-item-has-children>.ast-menu-toggle,
		.ast-fullscreen-above-menu-enable.ast-header-break-point .ast-above-header-menu-items .menu-item-has-children>.ast-menu-toggle {
			right: 0;
		}

		.ast-fullscreen-above-menu-enable .ast-above-header-enabled .ast-above-header-navigation .ast-above-header-menu .menu-item.menu-item-has-children .sub-menu .ast-menu-toggle {
			right: 0;
		}

		.ast-footer-overlay {
			padding-top: 20px;
			padding-bottom: 20px;
		}

		@media (max-width:768px) {

			.main-header-bar,
			.ast-header-break-point .main-header-bar,
			.ast-header-break-point .header-main-layout-2 .main-header-bar {
				padding-top: 0em;
			}

			.main-header-bar .ast-container,
			#masthead .ast-container {
				padding-right: 0em;
			}

			.ast-default-menu-enable.ast-main-header-nav-open.ast-header-break-point .main-header-bar,
			.ast-main-header-nav-open .main-header-bar {
				padding-bottom: 0;
			}

			.main-navigation ul .menu-item .menu-link,
			.ast-header-break-point .main-navigation ul .menu-item .menu-link,
			.ast-header-break-point li.ast-masthead-custom-menu-items,
			li.ast-masthead-custom-menu-items {
				padding-top: 0px;
				padding-right: 20px;
				padding-bottom: 0px;
				padding-left: 20px;
			}

			.ast-fullscreen-menu-enable.ast-header-break-point .main-header-bar .main-header-bar-navigation .main-header-menu>.menu-item-has-children>.ast-menu-toggle {
				right: 0;
			}

			.ast-flyout-menu-enable.ast-header-break-point .main-header-bar .main-header-bar-navigation .menu-item-has-children>.ast-menu-toggle {
				top: 0px;
			}

			.ast-desktop .main-navigation .ast-mm-template-content,
			.ast-desktop .main-navigation .ast-mm-custom-content,
			.ast-desktop .main-navigation .ast-mm-custom-text-content,
			.main-navigation .sub-menu .menu-item .menu-link,
			.ast-header-break-point .main-navigation .sub-menu .menu-item .menu-link {
				padding-top: 0px;
				padding-right: 0;
				padding-bottom: 0px;
				padding-left: 30px;
			}

			.ast-header-break-point .main-navigation .sub-menu .menu-item .menu-item .menu-link {
				padding-left: calc(30px + 10px);
			}

			.ast-header-break-point .main-navigation .sub-menu .menu-item .menu-item .menu-item .menu-link {
				padding-left: calc(30px + 20px);
			}

			.ast-header-break-point .main-navigation .sub-menu .menu-item .menu-item .menu-item .menu-item .menu-link {
				padding-left: calc(30px + 30px);
			}

			.ast-header-break-point .main-navigation .sub-menu .menu-item .menu-item .menu-item .menu-item .menu-item .menu-link {
				padding-left: calc(30px + 40px);
			}

			.ast-header-break-point .main-header-bar .main-header-bar-navigation .sub-menu .menu-item-has-children>.ast-menu-toggle {
				top: 0px;
				right: calc(20px - 0.907em);
			}

			.ast-fullscreen-menu-enable.ast-header-break-point .main-header-bar .main-header-bar-navigation .sub-menu .menu-item-has-children>.ast-menu-toggle {
				margin-right: 20px;
				right: 0;
			}

			.ast-flyout-menu-enable.ast-header-break-point .main-header-bar .main-header-bar-navigation .sub-menu .menu-item-has-children>.ast-menu-toggle {
				right: calc(20px - 0.907em);
			}

			.ast-flyout-menu-enable.ast-header-break-point .main-header-bar .main-header-bar-navigation .menu-item-has-children .sub-menu .ast-menu-toggle {
				top: 0px;
			}

			.ast-fullscreen-menu-enable.ast-header-break-point .main-navigation .sub-menu .menu-item.menu-item-has-children>.menu-link,
			.ast-default-menu-enable.ast-header-break-point .main-navigation .sub-menu .menu-item.menu-item-has-children>.menu-link,
			.ast-flyout-menu-enable.ast-header-break-point .main-navigation .sub-menu .menu-item.menu-item-has-children>.menu-link {
				padding-top: 0px;
				padding-bottom: 0px;
				padding-left: 30px;
			}

			.ast-fullscreen-menu-enable.ast-header-break-point .ast-above-header-menu .sub-menu .menu-item.menu-item-has-children>.menu-link,
			.ast-default-menu-enable.ast-header-break-point .ast-above-header-menu .sub-menu .menu-item.menu-item-has-children>.menu-link,
			.ast-flyout-menu-enable.ast-header-break-point .ast-above-header-menu .sub-menu .menu-item.menu-item-has-children>.menu-link {
				padding-right: 0;
				padding-top: 0px;
				padding-bottom: 0px;
				padding-left: 30px;
			}

			.ast-fullscreen-menu-enable.ast-header-break-point .ast-below-header-menu .sub-menu .menu-item.menu-item-has-children>.menu-link,
			.ast-default-menu-enable.ast-header-break-point .ast-below-header-menu .sub-menu .menu-item.menu-item-has-children>.menu-link,
			.ast-flyout-menu-enable.ast-header-break-point .ast-below-header-menu .sub-menu .menu-item.menu-item-has-children>.menu-link {
				padding-right: 0;
				padding-top: 0px;
				padding-bottom: 0px;
				padding-left: 30px;
			}

			.ast-fullscreen-menu-enable.ast-header-break-point .ast-below-header-menu .sub-menu .menu-link,
			.ast-fullscreen-menu-enable.ast-header-break-point .ast-header-break-point .ast-below-header-actual-nav .sub-menu .menu-item .menu-link,
			.ast-fullscreen-menu-enable.ast-header-break-point .ast-below-header-navigation .sub-menu .menu-item .menu-link,
			.ast-fullscreen-menu-enable.ast-header-break-point .ast-below-header-menu-items .sub-menu .menu-item .menu-link,
			.ast-fullscreen-menu-enable.ast-header-break-point .main-navigation .sub-menu .menu-item .menu-link {
				padding-top: 0px;
				padding-bottom: 0px;
				padding-left: 30px;
			}

			.ast-below-header,
			.ast-header-break-point .ast-below-header {
				padding-top: 1em;
				padding-bottom: 1em;
			}

			.ast-below-header-menu .menu-link,
			.below-header-nav-padding-support .below-header-section-1 .below-header-menu>.menu-item>.menu-link,
			.below-header-nav-padding-support .below-header-section-2 .below-header-menu>.menu-item>.menu-link,
			.ast-header-break-point .ast-below-header-actual-nav>.ast-below-header-menu>.menu-item>.menu-link {
				padding-top: 0px;
				padding-right: 20px;
				padding-bottom: 0px;
				padding-left: 20px;
			}

			.ast-desktop .ast-below-header-menu .ast-mm-template-content,
			.ast-desktop .ast-below-header-menu .ast-mm-custom-text-content,
			.ast-below-header-menu .sub-menu .menu-link,
			.ast-header-break-point .ast-below-header-actual-nav .sub-menu .menu-item .menu-link {
				padding-top: 0px;
				padding-right: 20px;
				padding-bottom: 0px;
				padding-left: 20px;
			}

			.ast-header-break-point .ast-below-header-actual-nav .sub-menu .menu-item .menu-item .menu-link,
			.ast-header-break-point .ast-below-header-menu-items .sub-menu .menu-item .menu-item .menu-link {
				padding-left: calc(20px + 10px);
			}

			.ast-header-break-point .ast-below-header-actual-nav .sub-menu .menu-item .menu-item .menu-item .menu-link,
			.ast-header-break-point .ast-below-header-menu-items .sub-menu .menu-item .menu-item .menu-item .menu-link {
				padding-left: calc(20px + 20px);
			}

			.ast-header-break-point .ast-below-header-actual-nav .sub-menu .menu-item .menu-item .menu-item .menu-item .menu-link,
			.ast-header-break-point .ast-below-header-menu-items .sub-menu .menu-item .menu-item .menu-item .menu-item .menu-link {
				padding-left: calc(20px + 30px);
			}

			.ast-header-break-point .ast-below-header-actual-nav .sub-menu .menu-item .menu-item .menu-item .menu-item .menu-item .menu-link,
			.ast-header-break-point .ast-below-header-menu-items .sub-menu .menu-item .menu-item .menu-item .menu-item .menu-item .menu-link {
				padding-left: calc(20px + 40px);
			}

			.ast-default-below-menu-enable.ast-header-break-point .ast-below-header-navigation .menu-item-has-children>.ast-menu-toggle,
			.ast-default-below-menu-enable.ast-header-break-point .ast-below-header-menu-items .menu-item-has-children>.ast-menu-toggle,
			.ast-flyout-below-menu-enable.ast-header-break-point .ast-below-header-navigation .menu-item-has-children>.ast-menu-toggle,
			.ast-flyout-below-menu-enable.ast-header-break-point .ast-below-header-menu-items .menu-item-has-children>.ast-menu-toggle {
				top: 0px;
				right: calc(20px - 0.907em);
			}

			.ast-default-below-menu-enable .ast-below-header-enabled .ast-below-header-navigation .ast-below-header-menu .menu-item.menu-item-has-children .sub-menu .ast-menu-toggle,
			.ast-flyout-below-menu-enable .ast-below-header-enabled .ast-below-header-navigation .ast-below-header-menu .menu-item.menu-item-has-children .sub-menu .ast-menu-toggle {
				top: 0px;
				right: calc(20px - 0.907em);
			}

			.ast-fullscreen-below-menu-enable.ast-header-break-point .ast-below-header-navigation .menu-item-has-children>.ast-menu-toggle,
			.ast-fullscreen-below-menu-enable.ast-header-break-point .ast-below-header-menu-items .menu-item-has-children>.ast-menu-toggle {
				right: 0;
			}

			.ast-fullscreen-below-menu-enable .ast-below-header-enabled .ast-below-header-navigation .ast-below-header-menu .menu-item.menu-item-has-children .sub-menu .ast-menu-toggle {
				right: 0;
			}

			.ast-above-header {
				padding-top: 4px;
				padding-bottom: 5px;
			}

			.ast-above-header-wrap .ast-above-header .ast-container,
			#masthead .ast-above-header-wrap .ast-above-header .ast-container {
				padding-right: 10px;
			}

			.ast-above-header-enabled .ast-above-header-navigation .ast-above-header-menu>.menu-item>.menu-link,
			.ast-header-break-point .ast-above-header-enabled .ast-above-header-menu>.menu-item:first-child>.menu-link,
			.ast-header-break-point .ast-above-header-enabled .ast-above-header-menu>.menu-item:last-child>.menu-link {
				padding-top: 0px;
				padding-right: 20px;
				padding-bottom: 0px;
				padding-left: 20px;
			}

			.ast-header-break-point .ast-above-header-navigation>ul>.menu-item-has-children>.ast-menu-toggle {
				top: 0px;
			}

			.ast-desktop .ast-above-header-navigation .ast-mm-custom-text-content,
			.ast-desktop .ast-above-header-navigation .ast-mm-template-content,
			.ast-above-header-enabled .ast-above-header-navigation .ast-above-header-menu .menu-item .sub-menu .menu-link,
			.ast-header-break-point .ast-above-header-enabled .ast-above-header-menu .menu-item .sub-menu .menu-link,
			.ast-above-header-enabled .ast-above-header-menu>.menu-item:first-child .sub-menu .menu-item .menu-link {
				padding-top: 0px;
				padding-right: 20px;
				padding-bottom: 0px;
				padding-left: 20px;
			}

			.ast-header-break-point .ast-above-header-enabled .ast-above-header-menu .menu-item .sub-menu .menu-item .menu-link {
				padding-left: calc(20px + 10px);
			}

			.ast-header-break-point .ast-above-header-enabled .ast-above-header-menu .menu-item .sub-menu .menu-item .menu-item .menu-link {
				padding-left: calc(20px + 20px);
			}

			.ast-header-break-point .ast-above-header-enabled .ast-above-header-menu .menu-item .sub-menu .menu-item .menu-item .menu-item .menu-link {
				padding-left: calc(20px + 30px);
			}

			.ast-header-break-point .ast-above-header-enabled .ast-above-header-menu .menu-item .sub-menu .menu-item .menu-item .menu-item .menu-item .menu-link {
				padding-left: calc(20px + 40px);
			}

			.ast-default-above-menu-enable.ast-header-break-point .ast-above-header-navigation .menu-item-has-children>.ast-menu-toggle,
			.ast-default-above-menu-enable.ast-header-break-point .ast-above-header-menu-items .menu-item-has-children>.ast-menu-toggle,
			.ast-flyout-above-menu-enable.ast-header-break-point .ast-above-header-navigation .menu-item-has-children>.ast-menu-toggle,
			.ast-flyout-above-menu-enable.ast-header-break-point .ast-above-header-menu-items .menu-item-has-children>.ast-menu-toggle {
				top: 0px;
				right: calc(20px - 0.907em);
			}

			.ast-default-above-menu-enable .ast-above-header-enabled .ast-above-header-navigation .ast-above-header-menu .menu-item.menu-item-has-children .sub-menu .ast-menu-toggle,
			.ast-flyout-above-menu-enable .ast-above-header-enabled .ast-above-header-navigation .ast-above-header-menu .menu-item.menu-item-has-children .sub-menu .ast-menu-toggle {
				top: 0px;
				right: calc(20px - 0.907em);
			}

			.ast-fullscreen-above-menu-enable.ast-header-break-point .ast-above-header-navigation .menu-item-has-children>.ast-menu-toggle,
			.ast-fullscreen-above-menu-enable.ast-header-break-point .ast-above-header-menu-items .menu-item-has-children>.ast-menu-toggle {
				right: 0;
			}

			.ast-fullscreen-above-menu-enable .ast-above-header-enabled .ast-above-header-navigation .ast-above-header-menu .menu-item.menu-item-has-children .sub-menu .ast-menu-toggle {
				margin-right: 20px;
				right: 0;
			}

			.ast-small-footer .ast-container {
				padding-right: 0px;
			}

			.ast-small-footer .ast-row {
				margin-right: 0px;
			}

			.ast-small-footer .nav-menu a,
			.footer-sml-layout-2 .ast-small-footer-section-1 .menu-item a,
			.footer-sml-layout-2 .ast-small-footer-section-2 .menu-item a {
				padding-top: 0em;
				padding-right: .5em;
				padding-bottom: 0em;
				padding-left: .5em;
			}
		}

		@media (max-width:544px) {

			.main-header-bar,
			.ast-header-break-point .main-header-bar,
			.ast-header-break-point .header-main-layout-2 .main-header-bar,
			.ast-header-break-point .ast-mobile-header-stack .main-header-bar {
				padding-bottom: 0em;
			}

			.main-header-bar .ast-container,
			#masthead .ast-container {
				padding-right: 0em;
			}

			.ast-default-menu-enable.ast-main-header-nav-open.ast-header-break-point .main-header-bar,
			.ast-main-header-nav-open .main-header-bar {
				padding-bottom: 0;
			}

			.ast-fullscreen-menu-enable.ast-header-break-point .main-header-bar .main-header-bar-navigation .main-header-menu>.menu-item-has-children>.ast-menu-toggle {
				right: 0;
			}

			.ast-desktop .main-navigation .ast-mm-template-content,
			.ast-desktop .main-navigation .ast-mm-custom-content,
			.ast-desktop .main-navigation .ast-mm-custom-text-content,
			.main-navigation .sub-menu .menu-item .menu-link,
			.ast-header-break-point .main-navigation .sub-menu .menu-item .menu-link {
				padding-right: 0;
			}

			.ast-fullscreen-menu-enable.ast-header-break-point .main-header-bar .main-header-bar-navigation .sub-menu .menu-item-has-children>.ast-menu-toggle {
				right: 0;
			}

			.ast-fullscreen-menu-enable.ast-header-break-point .ast-above-header-menu .sub-menu .menu-item.menu-item-has-children>.menu-link,
			.ast-default-menu-enable.ast-header-break-point .ast-above-header-menu .sub-menu .menu-item.menu-item-has-children>.menu-link,
			.ast-flyout-menu-enable.ast-header-break-point .ast-above-header-menu .sub-menu .menu-item.menu-item-has-children>.menu-link {
				padding-right: 0;
			}

			.ast-fullscreen-menu-enable.ast-header-break-point .ast-below-header-menu .sub-menu .menu-item.menu-item-has-children>.menu-link,
			.ast-default-menu-enable.ast-header-break-point .ast-below-header-menu .sub-menu .menu-item.menu-item-has-children>.menu-link,
			.ast-flyout-menu-enable.ast-header-break-point .ast-below-header-menu .sub-menu .menu-item.menu-item-has-children>.menu-link {
				padding-right: 0;
			}

			.ast-fullscreen-below-menu-enable.ast-header-break-point .ast-below-header-navigation .menu-item-has-children>.ast-menu-toggle,
			.ast-fullscreen-below-menu-enable.ast-header-break-point .ast-below-header-menu-items .menu-item-has-children>.ast-menu-toggle {
				right: 0;
			}

			.ast-fullscreen-below-menu-enable .ast-below-header-enabled .ast-below-header-navigation .ast-below-header-menu .menu-item.menu-item-has-children .sub-menu .ast-menu-toggle {
				right: 0;
			}

			.ast-above-header {
				padding-top: 0%;
				padding-bottom: 0%;
			}

			.ast-above-header-wrap .ast-above-header .ast-container,
			#masthead .ast-above-header-wrap .ast-above-header .ast-container {
				padding-right: 2%;
			}

			.ast-fullscreen-above-menu-enable.ast-header-break-point .ast-above-header-enabled .ast-above-header-navigation .ast-above-header-menu .menu-item.menu-item-has-children>.menu-link,
			.ast-default-above-menu-enable.ast-header-break-point .ast-above-header-enabled .ast-above-header-navigation .ast-above-header-menu .menu-item.menu-item-has-children>.menu-link,
			.ast-flyout-above-menu-enable.ast-header-break-point .ast-above-header-enabled .ast-above-header-navigation .ast-above-header-menu .menu-item.menu-item-has-children>.menu-link {
				padding-right: 0;
			}

			.ast-fullscreen-above-menu-enable.ast-header-break-point .ast-above-header-navigation .menu-item-has-children>.ast-menu-toggle,
			.ast-fullscreen-above-menu-enable.ast-header-break-point .ast-above-header-menu-items .menu-item-has-children>.ast-menu-toggle {
				right: 0;
			}

			.ast-fullscreen-above-menu-enable .ast-above-header-enabled .ast-above-header-navigation .ast-above-header-menu .menu-item.menu-item-has-children .sub-menu .ast-menu-toggle {
				right: 0;
			}
		}

		@media (max-width:544px) {

			.ast-header-break-point .header-main-layout-2 .site-branding,
			.ast-header-break-point .ast-mobile-header-stack .ast-mobile-menu-buttons {
				padding-bottom: 0;
			}
		}

		.ast-above-header,
		.main-header-bar,
		.ast-below-header {
			-webkit-transition: all 0.2s linear;
			transition: all 0.2s linear;
		}

		.ast-above-header,
		.main-header-bar,
		.ast-below-header {
			max-width: 100%;
		}

		.site-title,
		.site-title a {
			font-weight: 300;
			font-family: 'Montserrat', sans-serif;
			line-height: 2em;
			text-transform: uppercase;
		}

		.site-header .site-description {
			font-family: 'Montserrat', sans-serif;
			font-weight: 400;
			text-transform: uppercase;
		}

		.entry-meta,
		.read-more {
			font-weight: 100;
			font-size: 14px;
			font-size: 0.93333333333333rem;
			line-height: 1.23em;
			text-transform: uppercase;
		}

		.ast-pagination .page-numbers,
		.ast-pagination .page-navigation {
			font-size: 1em;
			text-transform: none;
		}

		.secondary .widget-title,
		.woocommerce-page #secondary .widget .widget-title {
			font-size: 0.9em;
			font-weight: 600;
			font-family: 'Montserrat', sans-serif;
			line-height: 1em;
			text-transform: uppercase;
		}

		.ast-small-footer {
			font-size: 14px;
			font-size: 0.93333333333333rem;
		}

		.ast-single-post .entry-title,
		.page-title {
			font-family: 'Montserrat', sans-serif;
			font-weight: 400;
			text-transform: uppercase;
		}

		.blog .entry-title,
		.blog .entry-title a,
		.archive .entry-title,
		.archive .entry-title a,
		.search .entry-title,
		.search .entry-title a {
			font-family: 'Montserrat', sans-serif;
			font-weight: 500;
		}

		button,
		.ast-button,
		input#submit,
		input[type="button"],
		input[type="submit"],
		input[type="reset"] {
			font-size: 0.9em;
			font-weight: 500;
			text-transform: uppercase;
		}

		.main-navigation {
			font-weight: 400;
			font-family: 'Montserrat', sans-serif;
		}

		@media (max-width:768px) {

			.entry-meta,
			.read-more {
				font-size: 20px;
				font-size: 1.3333333333333rem;
			}

			.secondary .widget-title,
			.woocommerce-page #secondary .widget .widget-title {
				font-size: 0.9em;
			}
		}

		@media (max-width:544px) {

			.entry-meta,
			.read-more {
				font-size: 14px;
				font-size: 0.93333333333333rem;
			}

			.secondary .widget-title,
			.woocommerce-page #secondary .widget .widget-title {
				font-size: 0.9em;
			}
		}

		.ast-header-sections-navigation,
		.ast-above-header-menu-items,
		.ast-below-header-menu-items {
			font-weight: 400;
			font-family: 'Montserrat', sans-serif;
		}

		.ast-desktop .ast-mega-menu-enabled.ast-below-header-menu .menu-item .menu-link:hover,
		.ast-desktop .ast-mega-menu-enabled.ast-below-header-menu .menu-item .menu-link:focus {
			background-color: #575757;
		}

		.ast-desktop .ast-below-header-navigation .astra-megamenu-li .menu-item .menu-link:hover,
		.ast-desktop .ast-below-header-navigation .astra-megamenu-li .menu-item .menu-link:focus {
			color: #ffffff;
		}

		.ast-above-header-menu .astra-full-megamenu-wrapper {
			box-shadow: 0 5px 20px rgba(0, 0, 0, 0.06);
		}

		.ast-above-header-menu .astra-full-megamenu-wrapper .sub-menu,
		.ast-above-header-menu .astra-megamenu .sub-menu {
			box-shadow: none;
		}

		.ast-below-header-menu.ast-mega-menu-enabled.submenu-with-border .astra-full-megamenu-wrapper {
			border-color: #ffffff;
		}

		.ast-below-header-menu .astra-full-megamenu-wrapper {
			box-shadow: 0 5px 20px rgba(0, 0, 0, 0.06);
		}

		.ast-below-header-menu .astra-full-megamenu-wrapper .sub-menu,
		.ast-below-header-menu .astra-megamenu .sub-menu {
			box-shadow: none;
		}

		.ast-desktop .main-header-menu.submenu-with-border .astra-megamenu,
		.ast-desktop .main-header-menu.ast-mega-menu-enabled.submenu-with-border .astra-full-megamenu-wrapper {
			border-top-width: 0px;
			border-left-width: 0px;
			border-bottom-width: 0px;
			border-style: solid;
		}

		.ast-desktop .ast-mega-menu-enabled.main-header-menu .menu-item-heading>.menu-link {
			font-weight: 700;
			font-size: 1.1em;
		}

		.ast-desktop .ast-above-header .submenu-with-border .astra-full-megamenu-wrapper {
			border-top-width: 0px;
			border-left-width: 0px;
			border-right-width: 0px;
			border-bottom-width: 0px;
			border-style: solid;
		}

		.ast-desktop .ast-below-header .submenu-with-border .astra-full-megamenu-wrapper {
			border-top-width: 2px;
			border-left-width: 0px;
			border-right-width: 0px;
			border-bottom-width: 0px;
			border-style: solid;
		}

		.ast-desktop .ast-mega-menu-enabled.main-header-menu>.menu-item-has-children>.menu-link .sub-arrow:after,
		.ast-desktop .ast-mega-menu-enabled.ast-below-header-menu>.menu-item-has-children>.menu-link .sub-arrow:after,
		.ast-desktop .ast-mega-menu-enabled.ast-above-header-menu>.menu-item-has-children>.menu-link .sub-arrow:after {
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

		.ast-search-box.header-cover #close::before,
		.ast-search-box.full-screen #close::before {
			font-family: Astra;
			content: "\e5cd";
			display: inline-block;
			transition: transform .3s ease-in-out;
		}

		.ast-advanced-headers-different-logo .advanced-header-logo,
		.ast-header-break-point .ast-has-mobile-header-logo .advanced-header-logo {
			display: inline-block;
		}

		.ast-header-break-point.ast-advanced-headers-different-logo .ast-has-mobile-header-logo .ast-mobile-header-logo {
			display: none;
		}

		.ast-advanced-headers-layout {
			width: 100%;
		}

		.ast-header-break-point .ast-advanced-headers-parallax {
			background-attachment: fixed;
		}

		#masthead .site-logo-img .sticky-custom-logo .astra-logo-svg,
		.site-logo-img .sticky-custom-logo .astra-logo-svg,
		.ast-sticky-main-shrink .ast-sticky-shrunk .site-logo-img .astra-logo-svg {
			width: 200px;
		}

		.ast-hfb-header .site-logo-img .sticky-custom-logo img {
			max-width: 200px;
		}

		@media (max-width:768px) {

			#masthead .site-logo-img .sticky-custom-logo .astra-logo-svg,
			.site-logo-img .sticky-custom-logo .astra-logo-svg,
			.ast-sticky-main-shrink .ast-sticky-shrunk .site-logo-img .astra-logo-svg {
				width: 200px;
			}

			.ast-hfb-header .site-logo-img .sticky-custom-logo img {
				max-width: 200px;
			}
		}

		@media (max-width:543px) {

			#masthead .site-logo-img .sticky-custom-logo .astra-logo-svg,
			.site-logo-img .sticky-custom-logo .astra-logo-svg,
			.ast-sticky-main-shrink .ast-sticky-shrunk .site-logo-img .astra-logo-svg {
				width: 150px;
			}

			.ast-hfb-header .site-logo-img .sticky-custom-logo img {
				max-width: 150px;
			}
		}

		#masthead .site-logo-img .astra-logo-svg,
		.ast-header-break-point #ast-fixed-header .site-logo-img .custom-logo-link img {
			max-width: 250px;
		}

		@media (max-width:768px) {

			#masthead .site-logo-img .astra-logo-svg,
			.ast-header-break-point #ast-fixed-header .site-logo-img .custom-logo-link img {
				max-width: 200px;
			}
		}

		@media (max-width:543px) {

			#masthead .site-logo-img .astra-logo-svg,
			.ast-header-break-point #ast-fixed-header .site-logo-img .custom-logo-link img {
				max-width: 120px;
			}
		}

		#ast-fixed-header .ast-container {
			max-width: 100%;
			padding-left: 35px;
			padding-right: 35px;
		}

		@media (max-width:1150px) {
			#ast-fixed-header .ast-container {
				padding-left: 20px;
				padding-right: 20px;
			}
		}

		#ast-fixed-header .site-title a,
		#ast-fixed-header .site-title a:focus,
		#ast-fixed-header .site-title a:hover,
		#ast-fixed-header .site-title a:visited {
			color: #222;
		}

		#ast-fixed-header.site-header .site-description {
			color: #4e5768;
		}

		.ast-transparent-header #ast-fixed-header .main-header-bar,
		.ast-transparent-header.ast-primary-sticky-enabled .ast-main-header-wrap .main-header-bar.ast-header-sticked,
		.ast-primary-sticky-enabled .ast-main-header-wrap .main-header-bar.ast-header-sticked,
		.ast-primary-sticky-header-ast-primary-sticky-enabled .ast-main-header-wrap .main-header-bar.ast-header-sticked,
		#ast-fixed-header .main-header-bar,
		#ast-fixed-header .ast-masthead-custom-menu-items .ast-inline-search .search-field,
		#ast-fixed-header .ast-masthead-custom-menu-items .ast-inline-search .search-field:focus {
			backdrop-filter: unset;
		}

		#ast-fixed-header .ast-above-header {
			background: rgba(0, 0, 0, 0.6);
		}
	</style>
	<script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.js?ver=6.3.2' id='jquery-js'></script>
	<script src='https://use.typekit.net/edp8drj.js?ver=6.3.2' id='typekit-js'></script>
	<link rel="https://api.w.org/" href="https://www.westminster.org.uk/wp-json/" />
	<link rel="alternate" type="application/json" href="https://www.westminster.org.uk/wp-json/wp/v2/pages/33778" />
	<link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://www.westminster.org.uk/xmlrpc.php?rsd" />
	<script type="text/javascript">
		document.documentElement.className += " js";
	</script>
	<link rel="stylesheet" href="../public/css/index.css">
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
		.post-password-form {
			padding: 3em 2em 3em 2em;
			background-color: #fde5eb;
			width: 100%;
		}
	</style>
	<style>
		/* ASTRA SETTINGS
#wpadminbar {
	z-index: 4!important;
} */

		@media only screen and (max-width: 1000px) {
			.ast-header-break-point .ast-above-header-section-2 {
				padding-top: 0;
				padding-bottom: 0;
			}
		}

		@media only screen and (max-width: 1000px) {
			.ast-above-header {
				padding-top: 0;
				padding-bottom: 0;
			}
		}

		@media only screen and (max-width: 1150px) {
			.ast-header-break-point .ast-above-header-section-2 {
				padding-top: 0;
				padding-bottom: 0;
			}
		}

		@media only screen and (max-width: 1150px) {
			.ast-above-header {
				padding-top: 0;
				padding-bottom: 0;
			}
		}

		.ast-left-sidebar #primary {
			border-left: 10px solid #fff;
		}

		article.page header.entry-header h1.entry-title {
			display: none;
		}

		article.post header.entry-header h1.entry-title {
			display: none;
		}

		.ast-single-post-order {
			display: none;
		}

		.ast-archive-title {
			display: none;
		}

		.ast-archive-description {
			display: none;
		}

		.ast-article-post .ast-date-meta .posted-on,
		.ast-article-post .ast-date-meta .posted-on * {
			background: #c3d7d2;
			color: #4e5768;
		}

		.ast-article-post .ast-date-meta .posted-on .date-month,
		.ast-article-post .ast-date-meta .posted-on .date-year {
			color: #4e5768;
		}

		.entry-title {
			text-align: center;
		}

		.ast-load-more {
			border: #404a54 solid 1px;
			letter-spacing: 2px;
			text-transform: uppercase;
			font-size: 0.9em;
		}

		.ast-load-more:hover {
			border: #f77e9d solid 1px;
			background: #f77e9d;
			color: #ffffff;
		}


		/* END ASTRA SETTINGS */
	</style>
	<style>
		blockquote {
			font-family: 'Lora';
			font-style: italic;
			font-size: 16px;
			width: 100%;
			margin: 0 0 2em 0;
			padding: 2em 40px;
			line-height: 1.45;
			position: relative;
			color: #222329;
			background: #c3d7d2;
			border-left: none;
		}
	</style>
	<style>
		.gallery-container {
			display: flex;
			flex-wrap: wrap;
			justify-content: center;
			gap: 2em;
			margin: 2em auto 4em auto;
			max-width: 1200px;
			width: 85%;
		}

		.mun-gallery h5 {
			text-transform: uppercase;
			letter-spacing: 3px;
			line-height: 1;
			font-weight: bold;
			text-align: center;
			margin-bottom: 2em;
		}

		.mun-gallery p {
			text-align: center;
		}

		.gallery-container .gallery-card {
			background: #fff;
			box-shadow: 0 15px 20px rgb(0, 0, 0, 0.2);
			color: #333;
			width: 380px;
		}

		.gallery-container .mun-gallery-card {
			background: #fff;
			box-shadow: 0 15px 20px rgb(0, 0, 0, 0.2);
			color: #333;
			width: 180px;
		}

		.gallery-container .gallery-card-image {
			background: #fff;
			display: block;
			padding-top: 70%;
			position: relative;
			width: 100%;
		}

		.gallery-container .gallery-card-image img {
			display: block;
			position: absolute;
			top: 0;
			left: 0;
			width: 100%;
			height: 100%;
			object-fit: cover;
		}

		.fancybox__nav .carousel__button {
			background-color: hsla(345, 88.3%, 73.1%, .8);
		}

		.carousel__button.is-close {
			background-color: hsla(345, 88.3%, 73.1%, .8);
		}

		.fancybox__caption {
			/*background-color: hsla(345,88.3%,73.1%,.6);*/
			padding: 2em;
			border-radius: 50px;
			margin-top: 2em;
			text-align: center;
			font-size: 16px;
		}

		@media (max-width: 600px) {
			.fancybox__caption {
				width: 100%;
			}
		}
	</style>
	<style>
		/* Settings for Cats and Tags */
		.ast-row {
			display: none !important;
		}

		.blog-layout-1 {
			display: none;
		}

		.h2-page-heading-related-news {
			font-size: 2.5em;
			font-weight: 300;
			color: #f77e9d;
			text-align: center;
			margin-bottom: 1em;
		}

		@media (max-width: 600px) {
			.h2-page-heading-related-news {
				font-size: 2em;
			}
		}

		.news-archive {
			max-width: 1200px;
			width: 85%;
			margin: 2em auto;
		}

		.news-search-form {
			margin-left: 3em;
		}

		.search-submit {
			padding: 0.6em !important;
			background-color: #f77e9d !important;
			color: #fff !important;
		}

		.page-section {
			display: grid;
		}

		@media only screen and (min-width: 1205px) {
			.page-section {
				grid-template-columns: auto 40%;
				grid-gap: 2rem;
			}
		}

		.page-content,
		.archive-sidebar {
			margin-bottom: 30px;
		}

		.archived-posts {
			display: grid;
			grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
			grid-gap: 1.2rem;
			margin-top: 15px;
		}

		.archive-item {
			background: #fff;
			box-shadow: 0 15px 20px rgb(0, 0, 0, 0.2);
		}

		.post-title {
			padding: 1em 0.5em 2.5em 1.5em;
			line-height: 20px;
		}

		.post-title-search {
			padding: 1em 0.5em 1em 1.5em;
			line-height: 20px;
		}

		.post-title h6 {
			line-height: 20px;
			margin-top: 0.5em;
			margin-bottom: 0.5em;
		}

		.archive-pagination {
			position: relative;
			text-align: center;
			margin: 35px 0 0;
		}

		.page-numbers {
			margin: 0 10px;
			font-size: 17px;
			font-weight: 400;
			color: #333;
			border-radius: 50%;
			line-height: 32px;
		}

		.page-numbers.current {
			background: #f77e9d;
			padding: 8px 14px;
			color: #fff;
		}

		/*From ONE age-checker */
		.pagination .page-numbers {
			font-family: 'Montserrat' !important;
			text-decoration: none;
			font-size: 14px !important;
		}

		ul.category-list li {
			display: inline-block;
		}

		ul.category-list li {
			list-style: none;
		}

		ul.category-list li a {
			margin: 0 10px 5px 0;
			float: left;
			background: #f7f7f7;
			color: #333;
			padding: 5px 10px;
		}

		ul.category-list li a:hover {
			background: #f77e9d;
			color: #fff;
		}

		.tag-cloud {
			background-color: #fff;
			padding: 0.5em 1em;
			margin-left: 3em;
			margin-bottom: 2em;
			box-shadow: 0 20px 20px rgba(0, 0, 0, 0.2)
		}

		.news-meta {
			display: inline;
		}

		ul.post-categories {
			list-style: none;
			margin: 0;
			float: left;
		}

		/*ul.post-categories:before {
content: 'Category:';
font-weight: 500;
} */
		ul.post-categories li {
			display: inline;
			text-transform: uppercase;
			letter-spacing: 2px;
			font-size: 0.9em;
		}

		ul.post-categories li:not(:last-of-type):after {
			content: ',';
		}

		.post-thumbnail {
			height: 200px;
			overflow: hidden;
			position: relative;
		}

		.post-title-date {
			text-transform: uppercase;
			letter-spacing: 2px;
			margin-bottom: 1em;
			position: absolute;
			top: 0;
			left: 0;
			background-color: rgba(247, 126, 156, 0.6);
			color: #fff;
			font-size: 0.8em;
			font-weight: 600;
			padding: 0.5em 1em 0.5em 1em;
			z-index: 1;
		}

		.news-latest-pic {
			position: relative;
			background-size: cover;
			background-position: center;
			background-repeat: no-repeat;
			overflow: hidden;
			height: 500px;
		}

		.news-latest-title {
			position: absolute;
			left: 0;
			bottom: 0;
			background-color: rgba(0, 0, 0, 0.6);
			color: #fff;
			width: 100%;
			padding: 1em;
			text-align: center;
		}

		.image-triangle {
			height: 265px;
			width: 265px;
			background-color: rgba(247, 126, 156, 0.9);
			color: #f7f7f7;
			text-transform: uppercase;
			letter-spacing: 2px;
			font-size: 12px;
			font-weight: 500;
			line-height: 1.5;
			display: flex;
			align-items: flex-end;
			justify-content: center;
			transform: rotate(-45deg);
			position: absolute;
			top: -150px;
			left: -150px;
		}

		.image-triangle-text {
			margin-bottom: 18px;
			text-align: center;
		}
	</style>
	<style>
		.homepage-feature-outer-container {
			width: min(1200px, 85%);
			display: block;
			margin-left: auto;
			margin-right: auto;
		}

		.news-date {
			color: #404a54;
			text-transform: uppercase;
			letter-spacing: 3px;
			padding: 0;
			font-size: 12px;
			font-weight: bold;
		}

		/* Featured Posts */
		.featured-posts-wrapper {
			box-sizing: border-box;
			display: flex;
			clear: both;
		}

		.featured-posts-wrapper .featured-post-item-wrapper {
			box-sizing: border-box;
			width: 33.33%;
			flex: 1;
		}

		.padding-right {
			padding-right: 20px;
		}

		.padding-both {
			padding-left: 10px;
			margin-right: 10px;
		}

		.padding-left {
			padding-left: 20px;
		}

		.featured-post-content-wrapper {
			box-sizing: border-box;
			margin: 0 0 4em 0;
			padding: 0;
			max-width: 1200px;
			overflow: hidden;
			width: 100%;
			display: table;
		}

		.featured-post-content {
			box-sizing: border-box;
			font-size: 16px;
			line-height: 25px;
			font-weight: 300;
		}

		.featured-post-image {
			background-size: cover;
			background-position: center;
			background-repeat: no-repeat;
			box-sizing: border-box;
			height: 200px;
			position: relative;
		}

		.image-triangle {
			height: 265px;
			width: 265px;
			background-color: rgba(247, 126, 156, 0.9);
			color: #f7f7f7;
			text-transform: uppercase;
			letter-spacing: 2px;
			font-size: 12px;
			font-weight: 500;
			line-height: 1.5;
			display: flex;
			align-items: flex-end;
			justify-content: center;
			transform: rotate(-45deg);
			position: absolute;
			top: -150px;
			left: -150px;
		}

		.image-triangle-text {
			margin-bottom: 18px;
			text-align: center;
		}

		.featured-post-text {
			padding: 24px;
		}

		.featured-posts-wrapper .featured-post-text {
			min-height: 325px;
			/* Update this based on max characters */
		}

		/* WIP: Fix media queries so that it stacks up nicely */
		@media screen and (max-width:770px) {
			.featured-posts-wrapper {
				display: block;
			}

			.featured-posts-wrapper .featured-post-item-wrapper {
				width: 100%;
			}

			.padding-right {
				padding: 0;
			}

			.padding-both {
				padding: 0;
			}

			.padding-left {
				padding: 0;
			}
		}

		@media screen and (min-width:770px) {

			/* Main Featured Image */
			.main-featured-post-wrapper .featured-post-image {
				box-sizing: border-box;
				width: 50%;
				float: left;
				min-height: 350px;
				/* Note that this will not work if there is too much text - check max characters */
			}

			.main-featured-post-wrapper .featured-post-text {
				box-sizing: border-box;
				width: 50%;
				float: left;
				min-height: 350px;
				background-color: #fde5eb;
			}
		}
	</style>
	<style>
		.homepage-cta {
			background-color: #f9f9f9;
		}

		.full-image-clear-container {
			position: relative;
			display: block;
			width: 100%;
			margin-left: auto;
			margin-right: auto;
		}

		.full-image-clear-text-block-pinkbg {
			position: absolute;
			top: 30%;
			margin-right: 20%;
			margin-left: 20%;
			background-color: hsla(345, 88.3%, 73.1%, .92);
			padding: 60px;
		}

		.full-image-clear-text-block-blackbg {
			position: absolute;
			top: 30%;
			margin-right: 20%;
			margin-left: 20%;
			background-color: hsla(0, 0%, 0%, 0.8);
			padding: 60px;
		}

		.full-image-clear-text-block-bluebg {
			position: absolute;
			top: 30%;
			margin-right: 20%;
			margin-left: 20%;
			background-color: hsla(202, 91.9%, 14.5%, .8);
			padding: 60px;
		}

		@media (max-width: 1000px) {

			.full-image-clear-text-block-pinkbg,
			.full-image-clear-text-block-blackbg,
			.full-image-clear-text-block-bluebg {
				position: relative;
				margin: 0%;
			}
		}

		.full-image-clear-text-block-solid-title {
			font-size: 14px;
			text-transform: uppercase;
			font-weight: 700;
			color: #e7e7e7;
			letter-spacing: 3px;
		}

		.full-image-clear-text-block-pinkbg p,
		.full-image-clear-text-block-blackbg p,
		.full-image-clear-text-block-bluebg p {
			color: #e7e7e7;
			margin-top: 20px;
		}

		.full-image-clear-container-quote {
			position: relative;
		}

		.full-image-clear-container-quote:before {
			content: '';
			position: absolute;
			left: 0;
			top: 0;
			width: 100%;
			height: 100%;
			background-image: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4));
		}

		.full-image-clear-text-block-quote {
			position: absolute;
			top: 45%;
			left: 0px;
			margin-right: 60%;
			padding: 40px;
		}

		@media (max-width: 1000px) {
			.full-image-clear-text-block-quote {
				position: relative;
				margin: 0%;
				background-color: #404a54;
			}
		}

		.full-image-clear-text-block-quote p {
			color: #ffffff;
			margin-top: 20px;
			font-family: 'Lora';
			font-style: italic;
			font-size: 26px;
			line-height: 25px;
		}

		@media (max-width: 1000px) {
			.full-image-clear-text-block-quote p {
				font-size: 18px;
			}
		}
	</style>
	<style>
		#homepage-slider {
			width: min(1200px, 85%);
			margin: 0 auto;
			min-height: 60vh;
			display: flex;
			flex-direction: column;
			justify-content: center;
			padding-block: 0em 2em;
			background: #FFF;
		}

		#homepage-slider .header {
			margin-bottom: 0px !important;
			margin-top: 3em;
		}

		@media screen and (max-width: 600px) {
			#homepage-slider .header {
				margin-bottom: 70px !important;
			}
		}

		#homepage-slider .header h1 {
			font-weight: 800;
			font-size: 3rem;
			margin: 5px -5px 15px;
		}

		#homepage-slider .header span {
			text-transform: uppercase;
			letter-spacing: 1px;
			display: inline-block;
			font-weight: 700;
			font-size: 14px;
			color: #471AA0;
		}

		#homepage-slider .header p {
			max-width: min(40ch, 100% - 2rem);
			line-height: 1.6;
			color: #565656;
			position: relative;
		}

		#homepage-slider .item {
			width: 100%;
			height: 400px;
			position: relative;
			border-radius: 0px;
			overflow: hidden;
		}

		#homepage-slider .item img {
			width: 100%;
			height: 100%;
			object-fit: cover;
			position: absolute;
			inset: 0;
		}

		#homepage-slider .item .overlay {
			position: absolute;
			top: 0;
			left: 0;
			width: 100%;
			height: 100%;
			color: #FFF;
			/*background: rgb(2, 0, 36);
			background: linear-gradient(
				0deg,
				#020024 0%,
				#000032AL 3%,
				#17D9FF00 100%
			); */
			display: flex;
			flex-direction: column;
			justify-content: space-between;
			align-items: flex-start;
		}

		#homepage-slider .item .overlay span {
			background: rgba(247, 126, 156, 0.6);
			/*background: rgba(255, 255, 255, 0.25);
				backdrop-filter: blur(4px);
				-webkit-backdrop-filter: blur(4px); */
			border-radius: 0px;
			text-transform: uppercase;
			letter-spacing: 3px;
			font-size: 12px;
			padding: 10px 20px;
			display: inline-block;
		}

		#homepage-slider .item .overlay .item-caption {
			background: rgba(3, 46, 71, 0.8);
			width: 100%;
			padding: 1em;
			text-align: center;
		}

		#homepage-slider .item .overlay>div h2 {
			letter-spacing: 0.5px;
			margin-bottom: 5px;
		}

		.owl-nav {
			position: absolute;
			top: -100px;
			right: 0;
		}

		@media screen and (max-width: 600px) {
			.owl-nav {
				top: -60px !important;
			}
		}

		.owl-nav button {
			background: #F77E9D !important;
			width: 45px;
			height: 45px;
			font-size: 25px !important;
			font-weight: 500 !important;
			box-shadow: 0px 0px 17px #00000005;
			color: #FFF !important;
			border-radius: 0%;
		}

		.owl-nav button:nth-of-type(1) {
			margin-right: 13px;
		}

		.owl-carousel .owl-stage-outer {
			box-shadow: 0 15px 20px rgba(0, 0, 0, 0.2);
		}
	</style>
	<style>
		.homepage-section-one-heading {
			text-align: center;
			background-color: #f77e9d;
			padding: 2em 1em 1.5em 1em;
			font-size: 14px;
			text-transform: uppercase;
			letter-spacing: 3px;
			color: #fff;
			font-weight: 500;
		}

		@media(max-width:600px) {
			.homepage-section-one-heading {
				font-size: 12px;
				line-height: 18px;
				letter-spacing: 2px;
				padding: 2em;
			}
		}

		.homepage-section-one {
			background-color: #032e47;
			height: 550px;
			/* 032e47 */
			left: 0;
			width: 100%;
			-webkit-mask-image: -webkit-linear-gradient(top, #ffffff 0%, #ffffff 100%);
			position: relative;
		}

		.homepage-section-one::after {
			content: "";
			background: url('../Public/imgs/nefertari-logo.webp');
			background-repeat: no-repeat;
			background-position: 50% 50%;
			background-attachment: scroll;
			background-size: 450px 450px;
			opacity: 0.5;
			top: 0;
			left: 0;
			bottom: 0;
			right: 0;
			position: absolute;
			z-index: -1;
		}

		@media (max-width: 800px) {
			.homepage-section-one::after {
				background-size: 400px 400px;
			}
		}

		.section-one-text {
			display: block;
			text-align: center;
			margin: auto;
			width: 500px;
			max-width: 80%;
			color: #f7f7f7;
			transform: translateY(50%);
			position: relative;
		}

		@media (max-width: 600px) {
			.section-one-text {
				transform: translateY(38%);
				line-height: 1.6;
			}
		}


		.homepage-text-button {
			border: 0;
			color: #e9e9e9;
			text-transform: uppercase;
			letter-spacing: 4px;
			padding: 0;
			background: transparent;
			font-size: 12px;
			font-weight: bold;
			text-decoration: none;
			border-radius: 0;
			transform: translateX(-50%);
		}

		.homepage-cta-button {
			border: 0;
			color: #e9e9e9;
			text-transform: uppercase;
			letter-spacing: 4px;
			padding: 0;
			background: transparent;
			font-size: 12px;
			font-weight: bold;
			text-decoration: none;
			border-radius: 0;
			transform: translateX(-50%);
		}

		.homepage-cta-button:hover {
			color: #e9e9e9;
		}

		.homepage-section-two {
			background: #FFF;
			position: relative;
		}

		.homepage-ow-profiles {
			position: absolute;
			top: -1em;
			left: 0;
			padding: 0.5em 2em 1.5em 1.5em;
			background: #032e47;
			border-bottom-right-radius: 20px;
			font-weight: 500;
		}

		.homepage-ow-profiles::before {
			content: 'Old Westminsters →\A';
			white-space: pre;
			text-transform: uppercase;
			letter-spacing: 5px;
			font-size: 0.8em;
			color: #fff;
			font-weight: 700;
		}

		.homepage-news-archive-link {
			font-size: 12px;
			text-transform: uppercase;
			font-weight: 400;
		}

		.homepage-section-three {
			background-color: #F9F9F9;
		}
	</style>
	<style>
		.YouTube-wrapper-grid {
			width: 100%;
			/*box-shadow: 6px 6px 10px hsl(206.5, 0%, 75%); */
			margin: 0;
		}

		.YouTube-wrapper {
			width: 100%;
			/*box-shadow: 6px 6px 10px hsl(206.5, 0%, 75%); */
			margin: 1em 0 1em 0;
		}

		.YouTube-embed {
			position: relative;
			padding-bottom: 56.15%;
			height: 0;
			overflow: hidden;
		}
	</style>
	<style>
		.wpmf-slick-text {
			z-index: 1 !important;
			/**background-color: hsla(345,88.3%,73.1%,.9);
	**/
			background-color: rgba(3, 46, 71, 0.85);
			border-bottom: 0 !important;
			width: 100% !important;
			padding: 1em !important;
			display: flex !important;
			align-items: center;
			justify-content: center;
			top: 0;
			right: 0;
			bottom: 0 !important;
			left: 0;
		}

		.wpmf-slick-text span {
			font-size: 14px !important;
			color: #ffffff;
			bottom: 1px !important;
			transition: all 0.15s linear;
			padding-bottom: 0 !important;
			text-overflow: ellipsis !important;
			overflow: hidden !important;
			white-space: normal !important;
			max-width: 100%;
			text-align: center;
			line-height: 20px !important;
		}
	</style>
	<style>
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
	<style>
		.cws-accordion-container {
			max-width: 1200px;
			margin-left: auto;
			margin-right: auto;
		}

		.cws-accordion-column {
			float: left;
			width: 50%;
			padding: 10px;
		}

		.cws-accordion-row:after {
			content: "";
			display: table;
			clear: both;
		}

		@media screen and (max-width: 600px) {
			.cws-accordion-column {
				width: 100%;
			}
		}

		.cws-accordion {
			background-color: #f7f7f7;
			color: #404a54;
			text-transform: uppercase;
			letter-spacing: 2px;
			font-size: 1em;
			cursor: pointer;
			padding: 18px;
			width: 100%;
			border: #ffffff solid 1px;
			text-align: left;
			transition: 0.4s;
		}

		.cws-active,
		.cws-accordion:hover,
		.cws-accordion:focus {
			background-color: #c3d7d2;
			color: #404a54;
			border-color: #ffffff;
		}

		.cws-accordion:after {
			content: '\2193';
			font-weight: 500;
			color: #4e5768;
			float: left;
			margin-right: 10px;
		}

		.cws-active:after {
			content: '\2192';
		}

		.cws-panel {
			background-color: #f9f9f9;
			max-height: 0;
			width: 100%;
			overflow: hidden;
			transition: max-height 0.4s ease-out;
		}

		.panel-highlight {
			text-transform: uppercase;
			font-size: 0.8rem;
			font-weight: 600;
			letter-spacing: 1.5px;
			color: #222329;
		}

		.cws-staff-panel {
			background-color: #ffffff;
			max-height: 0;
			width: 100%;
			overflow: hidden;
			transition: max-height 0.2s ease-out;
		}

		.cws-accordion-text {
			margin-left: 18px;
			margin-right: 18px;
			margin-top: 10px;
			margin-bottom: 10px;
		}

		.cws-accordion-light {
			background-color: #fde5eb !important;
			color: #4e5768 !important;
			letter-spacing: 2px;
			font-size: 0.8rem;
			font-weight: 500;
			cursor: pointer;
			padding: 18px;
			width: 100%;
			border: #ffffff solid 1px !important;
			text-align: left;
			transition: 0.4s;
		}

		.cws-active-light,
		.cws-accordion-light:hover {
			background-color: #fde5eb !important;
			color: #4e5768 !important;
			border: #ffffff solid 1px !important;
		}

		.cws-accordion-light:after {
			content: '\25B8';
			color: #f77e9d;
			font-family: 'Times New Roman';
			font-weight: bold;
			float: left;
			margin-right: 10px;
		}

		.cws-active-light:after {
			content: "\25BE";
		}

		.cws-panel-light {
			background-color: #ffffff;
			max-height: 0;
			width: 100%;
			overflow: hidden;
			transition: max-height 0.2s ease-out;
		}

		.cws-accordion-text-light {
			margin-left: 18px;
			margin-right: 18px;
			margin-top: 10px;
			margin-bottom: 10px;
		}

		.document-format {
			display: inline-block;
			position: relative;
		}

		.document-format-button {
			display: inline-block;
			border: #4e5768 solid 1px;
			padding: 10px 10px 10px 10px;
			margin-bottom: 10px;
			cursor: pointer;
			white-space: nowrap;
			font-size: 0.8rem;
			text-transform: uppercase;
			letter-spacing: 2px;
		}

		.document-format-button:hover {
			background: transparent;
		}

		.document-format-input {
			display: none;
		}

		.document-format-menu {
			position: absolute;
			bottom: 100%;
			border: #4e5768 solid 1px;
			padding: 5px;
			margin: 0 0 5px 0;
			background: #ffffff;
			list-style-type: none;
		}

		.document-format-input+.document-format-menu {
			display: none;
		}

		.document-format-input:checked+.document-format-menu {
			display: block;
		}

		.document-format-menu li {
			font-size: 0.9rem;
			padding: 0 10px;
			cursor: pointer;
			white-space: nowrap;
		}

		.document-format-menu li:hover {
			background: transparent;
		}

		.document-format-menu li a {
			display: block;
		}

		.doc-arrow {
			color: #4e5768;
		}
	</style>
	<style>
		.content-columns {
			columns: 350px 2;
			column-gap: 4em;

		}

		@media (max-width:600px) {
			.content-columns {
				columns: 1;
			}
		}

		.toggle-para,
		.toggle-para-MUN {
			display: block;
			text-align: justify;
			text-justify: inter-word;
			width: 1200px;
			max-width: 95%;
			margin: auto;
		}

		@media (max-width: 1024px) {

			.toggle-para,
			.toggle-para-MUN {
				width: 90%;
			}
		}

		@media (max-width: 600px) {

			.toggle-para,
			.toggle-para-MUN {
				width: auto;
				text-align: left;
			}
		}

		.toggle-para-MUN strong {
			color: #5b92e5;
			text-transform: uppercase;
			letter-spacing: 2px;
			font-size: 0.8em;
		}

		.toggle:nth-child(odd) {
			background-color: #f8f8f8;
		}

		.toggle:nth-child(even) {
			background-color: #ffffff;
		}

		.toggle-dept:nth-child(odd) {
			background-color: #ffffff;
		}

		.toggle-dept:nth-child(even) {
			background-color: #f7f7f7;
		}

		.toggle-schol:nth-child(odd) {
			background-color: #ffffff;
		}

		.toggle-schol:nth-child(even) {
			background-color: #f9f9f9;
		}

		#weekend-meals.toggle-schol {
			background-color: #f77e9d;
		}

		.toggle .toggle-title {
			display: block;
			position: relative;
			margin: auto;
			text-align: center;
			padding: 50px 0 50px 0;
		}

		.toggle {
			position: relative;
		}

		.toggle .toggle-number {
			position: absolute;
			opacity: 0.2;
			top: -40px;
			left: 0;
			right: 0;
			margin-left: auto;
			margin-right: auto;
			width: 100px;
			font-size: 8em;
			font-weight: 800;
			color: hsla(216, 73%, 63%, .8);
			font-family: Arial, Helvetica, sans-serif;
		}

		@media (max-width: 600px) {
			.toggle .toggle-number {
				display: none;
			}
		}

		.toggle-title h5 {
			text-transform: uppercase;
			position: relative;
			display: inline-block;
			letter-spacing: 3px;
			margin: 10px;
			line-height: 2;
			cursor: pointer;
			font-weight: bold;
		}

		.toggle-para h5 {
			text-transform: uppercase;
			position: relative;
			display: inline-block;
			letter-spacing: 3px;
			margin: 15px 0;
			line-height: 2;
			font-weight: bold;
		}

		.toggle .toggle-inner {
			padding: 10px 25px 10px 25px;
			display: none;
			background-color: #fff;
		}

		.toggle .toggle-inner div {
			max-width: 100%;
		}

		.toggle .toggle-title .title-name {
			padding: 25px 0 15px 0;
			line-height: 1.6;
		}

		.toggle .toggle-title:after {
			content: '\2193';
			color: #404A54;
			font-weight: 500;
		}

		.toggle .toggle-title.active:after {
			content: '\2191';
			font-weight: 500;
		}

		.toggle-schol .toggle-title {
			display: block;
			position: relative;
			margin: auto;
			text-align: center;
			padding: 50px 0 50px 0;
		}

		.toggle-title h5 {
			text-transform: uppercase;
			position: relative;
			display: inline-block;
			letter-spacing: 3px;
			margin: 10px;
			line-height: 1;
			cursor: pointer;
			font-weight: bold;
		}

		.toggle-schol .toggle-inner {
			padding: 10px 25px 10px 25px;
			display: none;
			background-color: #fff;
			margin-bottom: 2em;
		}

		.toggle .toggle-inner div {
			max-width: 100%;
		}

		.toggle .toggle-title .title-name {
			padding: 25px 0 15px 0;
		}

		.toggle-schol .toggle-title:after {
			content: '\2193';
			color: #404A54;
			font-weight: 500;
		}

		.toggle-schol .toggle-title.active:after {
			content: '\2191';
			font-weight: 500;
		}

		.toggle-list-items ul>li:before {
			color: #4e5768;
			content: "\2192";
			font-size: 14px;
			left: 0;
			position: absolute;
		}

		.toggle-list-items ul li {
			list-style-type: none;
			padding-left: 20px;
			position: relative;
		}

		.toggle-para ul,
		.toggle-para-MUN ul {
			margin: 1em 0 1em 0;
		}

		.toggle-para li,
		.toggle-para-MUN li {
			/*padding-bottom: 0.5em; */
		}

		.toggle-para ul>li:before {
			color: #f77e9d;
			content: "\25C6";
			font-size: 16px;
			left: 0px;
			position: absolute;
		}

		.toggle-para-MUN ul>li:before {
			color: #4e5768;
			content: "\2192";
			font-size: 14px;
			left: 0;
			position: absolute;
		}

		.toggle-para ul li {
			list-style-type: none;
			padding-left: 2em;
			margin-bottom: 0.5em;
			position: relative;
		}

		.toggle-para-MUN ul li {
			list-style-type: none;
			padding-left: 2em;
			position: relative;
		}

		.admissions-list ul,
		.main-content ul,
		.content-layout-one ul {
			margin: 1em 0 1em 0;
		}

		.admissions-list li,
		.main-content li,
		.content-layout-one li {
			/*padding-bottom: 2em;*/
		}

		.admissions-list ul>li:before,
		.main-content ul>li:before,
		.content-layout-one ul>li:before {
			color: #f77e9d;
			content: "\25C6";
			font-size: 16px;
			left: 0px;
			position: absolute;
		}

		.admissions-list ul li,
		.main-content ul li,
		.content-layout-one ul li {
			list-style-type: none;
			padding-left: 2em;
			position: relative;
		}

		.admissions-list-16-plus ul {
			margin: 1em 0 1em 0;
		}

		.admissions-list-16-plus li {
			/*padding-bottom: 2em;*/
		}

		.admissions-list-16-plus ul>li:before {
			color: #79bdc5;
			content: "\25C6";
			font-size: 16px;
			left: 0px;
			position: absolute;
		}

		.admissions-list-16-plus ul li {
			list-style-type: none;
			padding-left: 2em;
			position: relative;
		}

		.station-list-items ul {
			margin: 0 0 1.5em 2.5em;
		}

		.station-list-items ul>li:before {
			color: #4e5768;
			content: "\2192";
			font-size: 14px;
			left: 0;
			position: absolute;
		}

		.station-list-items ul li {
			list-style-type: none;
			padding-left: 30px;
			position: relative;
		}

		@media screen and (max-width: 960px) {
			.station-list-items {
				display: none;
			}
		}

		.toggle-list-items p {
			text-align: center;
		}

		.toggle-message:nth-child(odd) {
			background-color: #f8f8f8;
		}

		.toggle-message:nth-child(even) {
			background-color: #ffffff;
		}

		.toggle-message .toggle-message-title {
			display: block;
			position: relative;
			margin: auto;
			text-align: center;
			padding: 50px 0 50px 0;
		}

		.toggle-message-title h5 {
			text-transform: uppercase;
			position: relative;
			display: inline-block;
			letter-spacing: 3px;
			margin: 10px;
			line-height: 1;
			cursor: pointer;
			font-weight: bold;
		}

		.toggle-message .toggle-message-inner {
			padding: 10px 25px 10px 25px;
			display: none;
		}

		.toggle-message .toggle-message-inner div {
			max-width: 100%;
		}

		.toggle-message .toggle-message-title .title-message-name {
			padding: 25px 0 15px 0;
		}

		.toggle-message .toggle-message-title:after {
			content: '\2193';
			color: #404A54;
			font-weight: 500;
		}

		.toggle-message .toggle-message-title.active:after {
			content: '\2191';
			font-weight: 500;
		}

		.toggle-message-list-items ul>li:before {
			color: #4e5768;
			content: "\2192";
			font-size: 14px;
			left: 0;
			position: absolute;
		}

		.toggle-message-list-items ul li {
			list-style-type: none;
			padding-left: 20px;
			position: relative;
		}

		.toggle-message-list-items p {
			text-align: center;
		}

		.socialtoggle .socialtoggle-title {
			display: block;
			position: relative;
			margin: 0 auto 60px auto;
			text-align: center;
			padding: 80px 0 80px 0;
			background-color: #fff;
			box-shadow: 0 25px 20px rgb(0, 0, 0, 0.2);
		}

		.social-icon {
			position: absolute;
			cursor: pointer;
			opacity: 0.3;
			top: 30px;
			left: 0;
			right: 0;
			margin-left: auto;
			margin-right: auto;
			width: 100px;
		}

		.twitter-color {
			filter: invert(67%) sepia(49%) saturate(6350%) hue-rotate(179deg) brightness(96%) contrast(96%);
		}

		.insta-color {
			filter: invert(25%) sepia(27%) saturate(5174%) hue-rotate(294deg) brightness(95%) contrast(95%);
		}

		.socialtoggle .socialtoggle-title h3 {
			text-transform: uppercase;
			position: relative;
			display: inline-block;
			font-size: 14px;
			margin: 10px;
			line-height: 1;
			cursor: pointer;
			font-weight: 700;
			opacity: 0.4;
		}

		.socialtoggle .socialtoggle-inner {
			padding: 10px 25px 10px 25px;
			display: none;
			margin: -7px 0 6px;
		}

		.socialtoggle .socialtoggle-inner div {
			max-width: 100%;
		}
	</style>
	<style>
		/*MUN styles */
		.acf-fields>.acf-field {
			border-top-color: #fff !important;
		}

		@media (max-width:768px) {
			.acf-fields>.acf-field {
				width: 100% !important;
				border-top-color: #fff !important;
				border-left: 1px solid #fff !important;
			}
		}

		.af-page-button.current {
			background: #5b92e5 !important;
		}

		.af-page-button.current:after {
			border-left-color: #5b92e5 !important;
		}

		.af-page-button .title {
			font-size: 0.8em;
			letter-spacing: 1px;
			text-transform: uppercase;
			font-weight: 500;
		}

		.af-page-button.current .title {
			color: #fff !important;
			font-size: 0.8em;
			letter-spacing: 1px;
			text-transform: uppercase;
			font-weight: 500;
		}

		.af-field-instructions {
			margin: 0;
			font-size: 0.8em;
			font-weight: 400;
		}

		.af-page-wrap {
			border: 1px solid #eee;
			display: flex;
			margin: 2em 12px !important;
		}

		@media (max-width:600px) {
			.af-page-wrap {
				display: none !important;
			}
		}

		/*End MUN styles */
		.button-wrapper {
			display: flex;
			justify-content: center;
			flex-wrap: wrap;
			gap: 2em;
			padding: 3.5em;
		}

		.button-wrapper-results {
			display: flex;
			justify-content: flex-start;
			flex-wrap: wrap;
			gap: 1em;
		}

		.button-wrapper-frontpage-news {
			display: flex;
			justify-content: flex-start;
			flex-wrap: wrap;
			gap: 1em;
		}

		.button-wrapper-entry-points {
			display: flex;
			justify-content: center;
			flex-wrap: wrap;
			gap: 2em;
			padding: 1.5em;
		}

		.white-outline {
			background: transparent;
			border: 1px solid #fff;
			font-size: 0.8rem;
			text-transform: uppercase;
			letter-spacing: 2px;
			padding: 0.5em 1em;
			color: #fff;
			cursor: pointer;
			position: relative;
			overflow: hidden;
			transition: 0.5s ease all;
			z-index: 2;
		}

		.white-outline:hover {
			color: #404a54;
			border: 1px solid #032e47;
			background: #fff;
		}

		.white-outline:before {
			position: absolute;
			left: -100%;
			overflow: hidden;
			top: 0;
			width: 100%;
			height: 100%;
			content: '';
			color: #fff;
			background: #fff;
			transition: 0.2s ease all;
			z-index: -1;
		}

		.pink-outline {
			background: transparent;
			border: 1px solid #f77e9d;
			font-size: 0.8rem;
			text-transform: uppercase;
			letter-spacing: 2px;
			padding: 0.5em 1em;
			color: #f77e9d;
			cursor: pointer;
			position: relative;
			overflow: hidden;
			transition: 0.5s ease all;
			z-index: 2;
		}

		.pink-outline:hover {
			color: #fff;
			border: 1px solid #f77e9d;
			background: transparent;
		}

		.pink-outline:before {
			position: absolute;
			left: -100%;
			overflow: hidden;
			top: 0;
			width: 100%;
			height: 100%;
			content: '';
			color: #fff;
			background: #f77e9d;
			transition: 0.2s ease all;
			z-index: -1;
		}

		.pink-outline-x {
			background: transparent;
			border: 1px solid #f77e9d;
			font-size: 1.5rem;
			text-transform: uppercase;
			letter-spacing: 2px;
			padding: 0.5em 1em;
			color: #f77e9d;
			cursor: pointer;
			position: relative;
			overflow: hidden;
			transition: 0.5s ease all;
			z-index: 2;
		}

		.pink-outline-x:hover {
			color: #fff;
			border: 1px solid #f77e9d;
			background: transparent;
		}

		.pink-outline-x:before {
			position: absolute;
			left: -100%;
			top: 0;
			width: 100%;
			height: 100%;
			content: '';
			color: #fff;
			background: #f77e9d;
			transition: 0.2s ease all;
			z-index: -1;
		}

		.pink-fill,
		.acf-button {
			background: #f77e9d;
			border: 1px solid #f77e9d;
			font-size: 0.8rem;
			text-transform: uppercase;
			letter-spacing: 2px;
			padding: 0.5em 1em;
			color: #fff;
			cursor: pointer;
			position: relative;
			overflow: hidden;
			transition: 0.5s ease all;
			z-index: 2;
		}

		.pink-fill:hover,
		.acf-button:hover {
			color: #f77e9d;
			border: 1px solid #f77e9d;
			background: #fff;
		}

		.pink-fill:before,
		.acf-button:before {
			position: absolute;
			left: -100%;
			top: 0;
			width: 100%;
			height: 100%;
			content: '';
			color: #f77e9d;
			background: #fff;
			transition: 0.2s ease all;
			z-index: -1;
		}

		.charcoal-outline,
		#charcoal-outline {
			background: transparent;
			border: 1px solid #404a54;
			font-size: 0.8rem;
			text-transform: uppercase;
			letter-spacing: 2px;
			padding: 0.5em 1em;
			color: #404a54;
			cursor: pointer;
			position: relative;
			overflow: hidden;
			transition: 0.5s ease all;
			z-index: 2;
		}

		.charcoal-outline:hover,
		#charcoal-outline:hover {
			color: #fff;
			border: 1px solid #404a54;
			background: transparent;
		}

		.charcoal-outline:before,
		#charcoal-outline:before {
			position: absolute;
			left: -100%;
			top: 0;
			width: 100%;
			height: 100%;
			content: '';
			color: #fff;
			background: #404a54;
			transition: 0.2s ease all;
			z-index: -1;
		}

		#wesmun button,
		.wesmun {
			background: transparent;
			border: 1px solid #5b92e5;
			font-size: 0.8rem;
			text-transform: uppercase;
			letter-spacing: 2px;
			padding: 0.5em 1em;
			color: #5b92e5;
			cursor: pointer;
			position: relative;
			overflow: hidden;
			transition: 0.5s ease all;
			z-index: 2;
		}

		#wesmun button:hover,
		.wesmun:hover {
			color: #fff;
			border: 1px solid #5b92e5;
			background: transparent;
		}

		#wesmun button:before,
		.wesmun:before {
			position: absolute;
			left: -100%;
			top: 0;
			width: 100%;
			height: 100%;
			content: '';
			color: #fff;
			background: #5b92e5;
			transition: 0.2s ease all;
			z-index: -1;
		}

		.charcoal-fill {
			background: #404a54;
			border: 1px solid #404a54;
			font-size: 0.8rem;
			text-transform: uppercase;
			letter-spacing: 2px;
			padding: 0.5em 1em;
			color: #fff;
			cursor: pointer;
			position: relative;
			overflow: hidden;
			transition: 0.5s ease all;
			z-index: 2;
		}

		.charcoal-fill:hover {
			color: #404a54;
			border: 1px solid #404a54;
			background: #fff;
		}

		.charcoal-fill:before {
			position: absolute;
			left: -100%;
			top: 0;
			width: 100%;
			height: 100%;
			content: '';
			color: #404a54;
			background: #fff;
			transition: 0.2s ease all;
			z-index: -1;
		}

		.navy-outline {
			background: transparent;
			border: 1px solid #032e47;
			font-size: 0.8rem;
			text-transform: uppercase;
			letter-spacing: 2px;
			padding: 0.5em 1em;
			color: #032e47;
			cursor: pointer;
			position: relative;
			overflow: hidden;
			transition: 0.5s ease all;
			z-index: 2;
		}

		.navy-outline:hover {
			color: #fff;
			border: 1px solid #032e47;
			background: transparent;
		}

		.navy-outline:before {
			position: absolute;
			left: -100%;
			top: 0;
			width: 100%;
			height: 100%;
			content: '';
			color: #fff;
			background: #032e47;
			transition: 0.2s ease all;
			z-index: -1;
		}

		.navy-fill {
			background: #032e47;
			border: 1px solid #032e47;
			font-size: 0.8rem;
			text-transform: uppercase;
			letter-spacing: 2px;
			padding: 0.5em 1em;
			color: #fff;
			cursor: pointer;
			position: relative;
			overflow: hidden;
			transition: 0.5s ease all;
			z-index: 2;
		}

		.navy-fill:hover {
			color: #032e47;
			border: 1px solid #032e47;
			background: #fff;
		}

		.navy-fill:before {
			position: absolute;
			left: -100%;
			top: 0;
			width: 100%;
			height: 100%;
			content: '';
			color: #032e47;
			background: #fff;
			transition: 0.2s ease all;
			z-index: -1;
		}

		#wesmun button:hover::before,
		.wesmun:hover::before,
		.pink-outline-x:hover::before,
		.white-outline:hover::before,
		.pink-outline:hover::before,
		.pink-fill:hover::before,
		.charcoal-outline:hover::before,
		#charcoal-outline:hover::before,
		.charcoal-fill:hover::before,
		.navy-outline:hover::before,
		.navy-fill:hover::before,
		.acf-button:hover::before {
			top: 0;
			left: 0;
			width: 100%;
			height: 100%;
		}

		@media (any-pointer: coarse) {

			#wesmun button:hover::before,
			.wesmun:hover::before,
			.pink-outline-x:hover::before,
			.white-outline:hover::before,
			.pink-outline:hover::before,
			.pink-fill:hover::before,
			.charcoal-outline:hover::before,
			#charcoal-outline:hover::before,
			.charcoal-fill:hover::before,
			.navy-outline:hover::before,
			.navy-fill:hover::before,
			.acf-button:hover::before {
				display: none;
			}
		}

		.button-news {
			background-color: #f77e9d;
			color: #ffffff;
			border: #f77e9d solid 0;
		}

		.button-news:hover {
			background-color: #404a54;
			color: #ffffff;
			border: #404a54 solid 0;
		}

		@media only screen and (max-width: 600px) {
			.button-news {
				font-size: 12px;
			}
		}

		.button-staff {
			background-color: #ffffff;
			color: #4e5768;
			border: #404a54 solid 1px;
			padding: 10px;
		}

		.button-staff:hover {
			background-color: #ffffff;
			color: #f77e9d;
			border: #f77e9d solid 1px;
		}

		@media only screen and (max-width: 600px) {
			.button-staff {
				font-size: 12px;
			}
		}

		.button-about {
			background-color: transparent;
			color: #4e5768;
			border: #404a54 solid 1px;
			padding: 10px;
			text-transform: uppercase;
			font-weight: 500;
			letter-spacing: 4px;
			font-size: 12px;
		}

		.button-about:hover {
			background-color: transparent;
			color: #f77e9d;
			border: #f77e9d solid 1px;
		}

		@media only screen and (max-width: 600px) {
			.button-about {
				font-size: 12px;
			}
		}

		.button-music {
			background-color: transparent;
			color: #ffffff;
			border: #f77e9d solid 1px;
			padding: 10px;
			text-transform: uppercase;
			font-weight: 500;
			letter-spacing: 4px;
			font-size: 12px;
		}

		.button-music:hover {
			background-color: transparent;
			color: #f77e9d;
			border: #ffffff solid 1px;
		}

		@media only screen and (max-width: 600px) {
			.button-music {
				font-size: 12px;
			}
		}

		.wgs-button {
			padding: 15px;
			letter-spacing: 3px;
			text-transform: uppercase;
		}
	</style>
	<style>
		.entry-meta,
		.entry-meta * {
			text-align: center;
		}

		.photo-gallery {
			margin-left: auto;
			margin-right: auto;
			margin-bottom: 50px;
			max-width: 90%;
			width: 1200px;
		}

		@media screen and (max-width: 600px) {
			.photo-gallery {
				width: 85%;
			}
		}

		div.announcement-container {
			max-width: 100%;
			padding: 0 0 30px 0;
			margin-left: auto;
			margin-right: auto;
			background-color: #ffffff;
		}

		@media only screen and (max-width: 600px) {
			div.announcement-container {
				padding: 20px;
			}
		}

		@media only screen and (max-width: 900px) {
			div.announcement-container {
				padding: 20px;
			}
		}

		div.announcement-date {
			text-align: center;
			text-transform: uppercase;
			letter-spacing: 3px;
			font-size: 1em;
			font-weight: 700;
			padding: 1em;
		}

		@media (min-width: 786px) {
			div.announcement-date {
				font-size: 1em;
				font-weight: 700;
				padding: 1em;
			}
		}

		div.announcement-text {
			display: block;
			width: 1200px;
			max-width: 90%;
			text-align: justify;
			margin-left: auto;
			margin-right: auto;
		}

		.announcement-heading {
			width: 1200px;
			max-width: 90%;
			margin-left: auto;
			margin-right: auto;
			margin-bottom: 10px;
			padding-bottom: 10px;
			font-size: 0.9em;
			font-weight: 500;
			color: #f77e9d;
			text-transform: uppercase;
			letter-spacing: 3px;
			border-bottom: 0 solid #f77e9d;
			text-align: justify;
		}

		@media (max-width: 600px) {

			div.announcement-text,
			.announcement-heading {
				text-align: left;
			}
		}

		.announcement-link-border {
			text-transform: uppercase;
			background-color: #ffffff;
			border: #404a54 solid 1px;
			margin-top: 30px;
			padding-top: 10px;
			padding-bottom: 10px;
			max-width: 400px;
		}

		.social-media-share {
			text-align: center;
			font-weight: normal;
			margin-right: 10px;
		}

		.social-media-icons {
			display: flex;
			align-items: center;
			justify-content: center;
			background-color: #fde5eb;
			padding: 20px;
			margin: 0 0 20px 0;
			box-shadow: 0 20px 20px rgb(0, 0, 0, 0.2);
		}

		@media (min-width: 857px) {
			.social-media-icons {
				margin: 20px 0 20px 0;
			}
		}

		.fa {
			padding: 8px;
			font-size: 24px;
			width: 40px;
			text-align: center;
			text-decoration: none;
			margin: 5px 5px;
			border-radius: 50%;
			opacity: 0.7;
		}

		@media screen and (max-width: 600px) {
			.social-media-share {
				font-size: 14px;
				margin-right: 5px;
			}
		}

		@media screen and (max-width: 600px) {
			.fa {
				padding: 10px;
				font-size: 16px;
				width: 30px;
				border-radius: 50%;
				padding: 8px;
			}
		}

		.fa-facebook {
			background: #404a54;
			color: white;
		}

		.fa-facebook:hover {
			background: #3B5998;
			color: #ffffff;
		}

		.fa-twitter {
			background: #404a54;
			color: white;
		}

		.fa-twitter:hover {
			background: #55ACEE;
			color: white;
		}

		.fa-linkedin {
			background: #404a54;
			color: white;
		}

		.fa-linkedin:hover {
			background: #007bb5;
			color: white;
		}

		.fa-whatsapp {
			background: #404a54;
			color: white;
		}

		.fa-whatsapp:hover {
			background: #25d366;
			color: white;
		}

		.fa-envelope {
			background: #404a54;
			color: white;
		}

		.fa-envelope:hover {
			background: #f77e9d;
			color: white;
		}

		.fa-file-pdf {
			font-size: 1.3rem;
			color: #e9e9e9 !important;
		}

		.fa-file-download {
			font-size: 20px;
			margin-right: 10px;
		}

		.fa-file-download,
		.fa-instagram {
			font-size: 18px;
			/* margin-right : 10px; */
		}

		.fa-file-download {
			font-size: 20px;
			margin-right: 10px;
			color: #cccccc;
		}
	</style>
	<style>
		.disclaimer-text {
			line-height: 20px;
			font-size: 0.9em;
			font-style: italic;
			margin-top: 1em;
			text-align: justify;
			color: #aaa;
		}

		.jobs {
			text-align: center;
			text-transform: uppercase;
			font-size: 0.8rem;
			letter-spacing: 4px;
			font-weight: 600;
		}

		i.fas {
			font-size: 3em;
			color: #ffffff;
		}

		@media screen and (max-width: 600px) {
			i.fas {
				font-size: 2em;
			}
		}

		.icon-strip {
			padding: 2em;
			background: #95b1bc;
			display: flex;
			flex-wrap: wrap;
			justify-content: center;
			margin-bottom: 0;
			position: relative;
		}

		.icon-single {
			margin: 1.5em 1em 1.5em 1em;
			border: #ffffff solid 1px;
			border-radius: 50%;
			padding: 1em;
		}

		@media screen and (max-width: 600px) {
			.icon-single {
				padding: 1em 1em 1em 1em;
				margin: 1em 0.5em 0.5em 0.5em;
			}
		}

		.icon-single .icon-text {
			visibility: hidden;
			background-color: #fde5eb;
			color: #404a54;
			text-align: center;
			border-radius: 2px;
			padding: 5px 0;
			position: absolute;
			top: 0;
			left: 0;
			z-index: 1;
			width: 100%;
			opacity: 0;
			transition: opacity 1s;
		}

		@media screen and (max-width: 600px) {
			.icon-single .icon-text {
				font-size: 0.8em;
				transition: none;
			}
		}

		.icon-single:hover .icon-text {
			visibility: visible;
			opacity: 1;
		}

		.icon-single:hover {
			cursor: pointer;
			border: #404a54 solid 1px;
			background: #404a54;
		}

		.job-apply-button {
			display: flex;
			justify-content: center;
			margin-bottom: 30px;
		}

		.wgstable-jobs {
			border-collapse: collapse;
			width: 100%;
		}

		.wgstable-jobs td,
		.wgstable-jobs th {
			border: #ddd solid 1px;
			text-align: center;
			vertical-align: middle;
		}

		.wgstable-jobs tr:nth-child(even) {
			background-color: #f7f7f7;
		}

		.wgstable-jobs th {
			text-align: center;
			background-color: #404a54;
			color: white;
		}

		.wgs-jobs-other {
			width: 100%;
			margin-bottom: 0;
			padding: 2rem;
			color: #f7f7f7;
			background-color: #032e47;
			text-align: center;
		}

		.wgs-jobs-container {
			max-width: 1200px;
			margin-left: auto;
			margin-right: auto;
		}

		h4.wgs-jobs-data {
			color: #ffffff;
			background-color: #404a54;
			text-transform: uppercase;
			padding: 10px;
			text-align: center;
			font-size: 0.8rem;
			letter-spacing: 4px;
			font-weight: 600;
		}

		p.wgs-jobs-dates {
			padding-top: 10px;
			padding-bottom: 10px;
		}

		.wgs-jobs-summary {
			max-width: 1200px;
			margin-top: 2em;
			margin-left: auto;
			margin-right: auto;
			padding: 1em;
		}

		.wgs-jobs-column {
			float: left;
			width: 25%;
			padding: 0 2px;
			display: table;
		}

		.wgs-jobs-row:after {
			content: "";
			display: table;
			clear: both;
		}

		.wgs-jobs-card {
			text-align: center;
			background-color: #f7f7f7;
		}

		.wgs-otherjobs-card {
			text-align: center;
			background-color: #ffffff;
		}

		@media screen and (max-width: 600px) {
			.wgs-jobs-column {
				width: 100%;
				display: block;
			}
		}

		@media screen and (max-width: 800px) {
			.wgs-jobs-container {
				width: 90%;
			}
		}

		@media screen and (max-width: 600px) {
			.wgs-jobs-container {
				width: 85%;
			}
		}

		.job-dates-container,
		.job-app-container {
			max-width: 1200px;
			width: 95%;
			margin-inline: auto;
		}

		.job-dates-blocks {
			list-style: none;
			display: grid;
			margin: 0;
			grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
			grid-column-gap: 15px;
			grid-row-gap: 10px;
		}

		.job-app-docs {
			list-style: none;
			display: grid;
			margin: 0;
			grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
			grid-column-gap: 15px;
			grid-row-gap: 2px;
		}

		.job-dates-block-content {
			background: #f7f7f7;
			border-top: 3px solid #f77e9d;
			text-align: center;
			padding: 2em;
		}

		@media (max-width:600px) {
			.job-dates-block-content {
				border: 1px solid #404a54;
				padding: 1em 0 0 0;
			}
		}

		.job-dates-block-content h5 {
			text-align: center;
			text-transform: uppercase;
			font-size: 12px;
			letter-spacing: 3px;
			font-weight: 700;
		}

		.job-dates-block-content p {
			text-align: center;
			padding: 0.5em 0 0.5em 0;
			line-height: 20px;
		}

		.job-app-docs-content {
			background: #fff;
			text-align: center;
			border: 1px solid #ccc;
			margin: 0.5em 0 0.5em 0;
		}

		.job-app-docs-content p {
			text-align: center;
			margin: 0.5em 0 0.5em 0;
		}

		.job-app-link:hover {
			text-decoration: underline;
		}
	</style>
	<style>
		html {
			scroll-behavior: smooth;
		}

		*,
		*:after,
		*:before {
			box-sizing: border-box;
		}

		.top-content {
			line-height: 1.4em;
			text-align: center;
			max-width: 90%;
			margin-left: auto;
			margin-right: auto;
		}

		@media screen and (min-width: 50rem) {
			.top-content {
				max-width: 700px;
			}
		}

		h5.main_text_heading,
		.main_text_heading h5 {
			text-transform: uppercase;
			text-align: center;
			letter-spacing: 4px;
			font-weight: 600;
			width: 1200px;
			max-width: 90%;
			margin-left: auto;
			margin-right: auto;
		}

		h5.main_text_heading_blue {
			text-transform: uppercase;
			text-align: center;
			letter-spacing: 4px;
			font-weight: 600;
			color: #ffffff;
		}

		.main_heading_bg_pink {
			background-color: #fde5eb;
			padding-top: 30px;
		}

		.main_heading_bg_white {
			background-color: #ffffff;
			padding-top: 30px;
		}

		.main_heading_bg_blue {
			background-color: #79bdc5;
			padding-top: 30px;
		}

		.content-layout-container-greybg {
			max-width: 100%;
			background-color: #f7f7f7;
			padding: 5px 30px 10px 30px;
		}

		.content-layout-container-pinkbg {
			max-width: 100%;
			background-color: #fde5eb;
			padding: 10px;
		}

		.content-layout-container-bluebg {
			max-width: 100%;
			background-color: #79bdc5;
			color: #ffffff;
			padding: 10px;
		}

		.content-layout-container-whitebg {
			max-width: 100%;
			background-color: #ffffff;
			padding: 10px;
		}

		.content-layout {
			column-count: 2;
			column-gap: 50px;
			text-align: justify;
			width: 1200px;
			max-width: 90%;
			margin-top: 0;
			margin-left: auto;
			margin-right: auto;
			padding-top: 20px;
			padding-bottom: 20px;
		}

		.content-layout-one {
			column-count: 1;
			text-align: justify;
			width: 1200px;
			max-width: 90%;
			margin-left: auto;
			margin-right: auto;
			padding-top: 20px;
			padding-bottom: 20px;
		}

		@media screen and (max-width: 600px) {
			.content-layout {
				column-count: 1;
				padding-bottom: 5px;
				text-align: left;
			}
		}

		.hero-image {
			height: 450px;
			background-position: center;
			background-repeat: no-repeat;
			background-size: cover;
			position: relative;
		}

		.darken-overlay div {
			width: 100%;
			height: 100%;
			background-color: rgb(0, 0, 0, 0.5);
		}

		.hero-text {
			text-align: center;
			font-size: 3rem;
			position: absolute;
			top: 60%;
			left: 50%;
			transform: translate(-50%, -50%);
		}

		.hero-text button {
			border: none;
			outline: 0;
			display: inline-block;
			padding: 1.2em 1.2em;
			color: #ffffff;
			background-color: transparent;
			border: #f77e9d solid 1px;
			text-align: center;
			letter-spacing: 4px;
			font-weight: 500;
			font-size: 1rem;
			cursor: pointer;
		}

		.hero-text button:hover {
			background: #f77e9d;
		}

		@media screen and (max-width: 750px) {
			.hero-text {
				font-size: 2rem;
				line-height: 60px;
				width: 100%;
			}
		}

		@media screen and (max-width: 750px) {
			.hero-text button {
				font-size: 0.8rem;
			}
		}

		.wgs-messagewrapper {
			display: flex;
			width: 100%;
		}

		.messageitem {
			background-color: #fde5eb;
			display: flex;
			height: auto;
		}

		.messageitem-grey {
			background-color: #f7f7f7;
			display: flex;
			height: auto;
		}

		.messageitem-charcoal {
			background-color: #404a54;
			display: flex;
			height: auto;
		}

		.message-one {
			padding: 30px;
			align-items: center;
			justify-content: center;
			text-align: right;
			flex: 1 1 40px;
		}

		.message-two {
			border-left: 2px solid #f77e9d;
			padding: 30px;
			align-items: center;
			justify-content: center;
			flex: 2 1 50px;
		}

		.message-one h2,
		.message-two h2 {
			font-size: 2em;
		}

		.message-one-charcoal {
			padding: 30px;
			align-items: center;
			justify-content: center;
			text-align: right;
			flex: 1 1 40px;
		}

		.message-two-charcoal {
			border-left: 2px solid #f77e9d;
			color: #ffffff;
			padding: 30px;
			align-items: center;
			justify-content: center;
			flex: 2 1 50px;
		}

		.h2-charcoal {
			color: #ffffff;
			font-size: 2em;
		}

		@media only screen and (max-width: 600px) {
			.wgs-messagewrapper {
				display: table;
			}
		}

		@media only screen and (max-width: 600px) {

			.message-two,
			.message-two-charcoal {
				padding: 5px;
				border-left: 0;
			}
		}

		.full-image-clear-container {
			position: relative;
		}

		.full-image-clear-text-block-solid {
			position: absolute;
			top: 35%;
			right: 0px;
			margin-left: 50%;
			/*background-color: hsla(345,88.3%,73.1%,.94); */
			background-color: hsla(202, 91.9%, 14.5%, .8);
			padding: 60px;
		}

		@media (max-width: 1000px) {
			.full-image-clear-text-block-solid {
				position: relative;
				margin: 0%;
			}
		}

		.full-image-clear-text-block-solid-title {
			font-size: 14px;
			text-transform: uppercase;
			font-weight: 700;
			color: #e7e7e7;
			letter-spacing: 3px;
		}

		.full-image-clear-text-block-solid p {
			color: #e7e7e7;
			margin-top: 20px;
		}

		.image-wrapper {
			display: flex;
			justify-content: center;
		}

		.image-container {
			max-width: 100%;
			display: block;
			margin-left: auto;
			margin-right: auto;
		}

		.image-container-text-width {
			max-width: 1200px;
			display: block;
			margin-left: auto;
			margin-right: auto;
			margin-bottom: 25px;
		}

		.full-image-clear-container-quote {
			position: relative;
		}

		.full-image-clear-container-quote img {
			width: 100%;
		}

		.text-width-clear-container-quote {
			position: relative;
			max-width: 1200px;
			width: 90%;
			display: block;
			margin: 2em auto 1em auto;
		}

		.full-image-clear-container-quote:before,
		.text-width-clear-container-quote:before {
			content: '';
			position: absolute;
			left: 0;
			top: 0;
			width: 100%;
			height: 100%;
			background-image: linear-gradient(rgb(0, 0, 0, 0.4), rgb(0, 0, 0, 0.4));
		}

		.full-image-clear-text-block-quote {
			position: absolute;
			top: 45%;
			left: 0;
			margin-right: 60%;
			padding: 40px;
		}

		@media (max-width: 1000px) {
			.full-image-clear-text-block-quote {
				position: relative;
				margin: 0%;
				background-color: #404a54;
			}
		}

		.full-image-clear-text-block-quote p {
			color: #ffffff;
			margin-top: 20px;
			font-family: 'Lora';
			font-style: italic;
			font-size: 26px;
			line-height: 25px;
		}

		@media (max-width: 1000px) {
			.full-image-clear-text-block-quote p {
				font-size: 18px;
			}
		}

		.full-image-clear-text-block-quote h4 {
			font-size: 0.9rem;
			text-transform: uppercase;
			letter-spacing: 2px;
			font-weight: 500;
			color: #ffffff;
		}

		.WGS-listlinkscontainer {
			max-width: 1200px;
			width: 95%;
			margin-left: auto;
			margin-right: auto;
			padding-top: 25px;
			padding-bottom: 25px;
		}

		@media screen and (max-width: 800px) {
			.WGS-listlinkscontainer {
				max-width: 95%;
				margin-left: auto;
				margin-right: auto;
				padding-top: 5px;
			}
		}

		.WGS-listlinks-table {
			border: #ffffff solid 1px;
		}

		.WGS-listlinks-table tr.border_bottom td {
			border-right: 1pt solid #ffffff;
			/*border-bottom : 1pt solid #cccccc; */
		}

		.WGS-listlinkscolumn {
			float: left;
			width: 50%;
			padding: 0;
		}

		.listlinkimage {
			display: block;
			margin-left: auto;
			margin-right: 0;
			margin-bottom: 25px;
			width: 100%;
		}

		@media screen and (min-width: 800px) {
			.listlinkimage {
				width: 80%;
			}
		}

		@media screen and (max-width: 800px) {
			.WGS-listlinkscolumn {
				width: 100%;
			}
		}

		.fa-external-link-alt,
		.fa-arrow-down,
		.fa-arrow-alt-circle-right {
			font-size: 16px;
			margin-right: 10px;
		}

		@media screen and (max-width: 800px) {
			.WGS-listlinks-table {
				width: 98%;
				margin-top: 5px;
				margin-left: auto;
				margin-right: auto;
			}
		}

		.wgs-heading {
			background-color: #ffffff;
			text-align: center;
			padding-top: 30px;
			padding-bottom: 30px;
		}

		.wgs-heading h5 {
			text-transform: uppercase;
			text-align: center;
			letter-spacing: 4px;
			font-weight: 600;
		}

		.discover-box-container {
			max-width: 1200px;
			display: block;
			margin: auto;
		}

		@media screen and (max-width: 800px) {}

		.discover-box-column {
			float: left;
			width: 33.3%;
			padding: 0 11px;
			margin-bottom: 1px;
		}

		.discover-box-row {
			margin: 0 -5px;
		}

		.discover-box-row:after {
			content: "";
			display: table;
			clear: both;
		}

		.discover-box-card {
			margin-bottom: 20px;
			border: #ffffff solid 0;
			background-color: #404a54;
			font-size: 0.9em;
			text-transform: uppercase;
			font-weight: 500;
			letter-spacing: 2px;
			line-height: 3;
		}

		.discover-box-card:hover {
			border: #ffffff solid 0;
			background-color: #f77e9d;
		}

		@media screen and (max-width: 600px) {
			.discover-box-column {
				width: 100%;
				display: block;
				margin-bottom: 5px;
			}
		}

		@media screen and (max-width: 600px) {
			.discover-box-card {
				margin-bottom: 20px;
				border: #ffffff solid 0;
				background-color: #404a54;
				font-size: 14px;
				line-height: 1;
			}
		}

		@media screen and (max-width: 800px) {
			.discover-box-card {
				margin-bottom: 20px;
				border: #ffffff solid 0;
				background-color: #404a54;
				font-size: 14px;
				line-height: 3;
			}
		}

		.blank-text-container {
			max-width: 1200px;
			margin-left: auto;
			margin-right: auto;
			margin-bottom: 0;
		}

		@media screen and (max-width: 600px) {
			.blank-text-container {
				width: 95%;
				margin-bottom: 20px;
			}
		}

		@media screen and (max-width: 800px) {
			.blank-text-container {
				width: 90%;
				margin-bottom: 35px;
			}
		}

		.image-text-grid-container {
			max-width: 1200px;
			width: 90%;
			margin: 0 auto 4em auto;
		}

		.text-section {
			height: 25em;
		}

		.image-text-grid {
			display: -webkit-box;
			display: -webkit-flex;
			display: -ms-flexbox;
			display: flex;
			-webkit-box-flex: 1;
			-webkit-flex-grow: 1;
			-ms-flex-positive: 1;
			flex-grow: 1;
			flex-direction: row;
			-webkit-flex-direction: row;
			-webkit-flex-wrap: wrap;
			-webkit-justify-content: space-around;
		}

		.strip-layout {
			-webkit-box-flex: 1;
			-webkit-flex: 1;
			-ms-flex: 1;
			flex: 1;
		}

		h5.strip-header {
			text-transform: uppercase;
			letter-spacing: 3px;
			font-size: 14px;
			font-weight: 600;
			color: #fff;
			padding-bottom: 1em;
		}

		.text-section {
			display: flex;
			align-items: center;
			justify-content: center;
			background-color: #032e47;
			color: #fff;
		}

		.text-section div p {
			line-height: 24px;
		}

		.image-text-link a {
			text-transform: uppercase;
			color: #fff;
			letter-spacing: 3px;
			font-size: 12px;
			font-weight: 600;
			text-decoration: none;
		}

		.strip-divide {
			width: 60%;
		}

		.image-section {
			background-size: cover;
			background-position: center center;
		}

		@media (max-width: 840px) {
			.image-text-grid {
				height: 40em;
				display: -webkit-flex;
				-webkit-flex-direction: column;
				flex-direction: column;
			}

			.image-section {
				order: 1;
			}

			.text-section {
				order: 2;
			}

			.strip-layout {
				order: vertical;
			}

			.strip-header,
			.text-section div p {
				padding: 1em;
			}

			.strip-divide {
				width: 90%;
			}
		}

		.text-block-image-container,
		.text-block-image-container-L {
			position: relative;
			text-align: center;
			width: 1000px;
			max-width: 60%;
			display: table;
			margin: 20px auto 50px auto;
		}

		@media (max-width: 1200px) {

			.text-block-image-container,
			.text-block-image-container-L {
				width: 90%;
				max-width: 90%;
			}
		}

		.text-block-container {
			position: absolute;
			top: 40%;
			right: -200px;
			width: 400px;
		}

		@media(max-width: 1200px) {
			.text-block-container {
				position: relative;
				right: 0;
				width: 100%;
			}
		}

		.text-block-container-L {
			position: absolute;
			top: 40%;
			left: -200px;
			width: 400px;
		}

		@media(max-width: 1200px) {
			.text-block-container-L {
				position: relative;
				left: 0;
				width: 100%;
			}
		}

		.text-block {
			background-color: #032e47;
			color: #ffffff;
			padding: 50px 40px 50px 40px;
			opacity: 0.8;
			font-family: 'Lora';
			font-style: italic;
			font-size: 20px;
			line-height: 1.2;
		}

		@media(max-width: 1200px) {
			.text-block {
				font-size: 18px;
				padding: 30px;
			}
		}

		.text-block-container h4 {
			font-size: 0.9rem;
			text-transform: uppercase;
			letter-spacing: 2px;
			font-weight: 500;
			font-style: normal;
			color: #ffffff;
			padding: 20px 0 0 0;
		}

		@media (max-width: 1200px) {
			.text-block-container h4 {
				text-align: center;
				padding: 15px 0 0 0;
			}
		}
	</style>
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

		.mun-hashtag {
			position: absolute;
			color: #fff;
			font-size: 1.5em;
			top: 20px;
			left: 20px;
			z-index: 1;
			padding: 1em;
			background: hsla(345, 88.3%, 73.1%, .8);
			border: none;
			box-shadow: 0 15px 20px rgb(0, 0, 0, 0.2);
			border-radius: 50px;
		}

		@media (max-width: 600px) {
			.mun-hashtag {
				top: 15px;
				left: 15px;
				padding: 1em;
				font-size: 1.2em;
			}
		}

		.mun-logo-image {
			width: 180px;
			position: absolute;
			right: 28px;
			top: 0;
			z-index: 1;
			padding: 30px 22px 24px 22px;
			background: rgb(0, 0, 0, 0.6);
			border: none;
		}

		@media (min-width: 768px) {
			.mun-logo-image {
				background: rgb(0, 0, 0, 0.6);
				border: none;
			}
		}

		@media screen and (max-width: 600px) {
			.mun-logo-image {
				right: 20px;
				width: 120px;
				padding: 20px 12px 15px 12px;
			}
		}

		.mun-logo-subheading {
			width: 180px;
			position: absolute;
			right: 28px;
			top: 180px;
			z-index: 1;
			padding: 0.5em 1em 0.5em 1em;
			text-align: center;
			font-weight: 500;
			color: #fff;
			letter-spacing: 1px;
			background: hsla(345, 88.3%, 73.1%, .8);
			border: none;
		}

		@media screen and (max-width: 600px) {
			.mun-logo-subheading {
				right: 20px;
				top: 120px;
				padding: 0.4em 0.2em 0.4em 0.2em;
				font-size: 0.8em;
				width: 120px;
			}
		}

		/*
@media screen and (min-width: 850px) {
	.mobile-links {
		display: none;
	}
}
*/
		@media screen and (max-width: 768px) {
			.mobile-links {
				position: absolute;
				z-index: 3;
				border: none;
				top: 128px;
				right: 20px;
				width: 120px;
			}
		}

		@media screen and (min-width: 768px) {
			.mobile-links {
				position: absolute;
				z-index: 3;
				border: none;
				top: 272.5px;
				right: 32px;
				width: 180px;
			}
		}

		.mobile-links .mobile-links-group a {
			background-color: hsla(345, 88.3%, 73.1%, .7);
			margin-bottom: 5px;
			color: #fff;
			font-weight: 500;
			font-size: 0.9em;
			display: -ms-flexbox;
			display: flex;
			min-height: 30px;
			padding: 8px;
			-ms-flex-align: center;
			align-items: center;
			text-decoration: none;
			position: relative;
			text-align: left;
		}

		.mobile-links .mobile-links-group a:after {
			position: absolute;
			font-family: FontAwesome;
			content: "";
			right: 8px;
			top: 50%;
			transform: translateY(-50%);
			width: 26px;
			content: "\f105";
			border: 1px solid #fff;
			color: #fff;
			display: -ms-flexbox;
			display: flex;
			-ms-flex-pack: center;
			justify-content: center;
			-ms-flex-align: center;
			align-items: center;
			transition: all .3s ease-out
		}

		.mobile-links .mobile-links-group a:hover {
			background: rgba(0, 0, 0, 0.5);
		}

		.mobile-links .mobile-links-group a:after {
			color: #fff;
			background: transparent;
			border: 1px solid #fff;
		}

		@media screen and (max-width: 768px) {
			.mobile-links .mobile-links-group a:after {
				display: none;
			}
		}


		@media screen and (min-width: 768px) {
			.logo-image {
				right: 32px;
				width: 180px;
				padding: 35px 22px 25px 22px;
			}
		}

		@media screen and (min-width: 992px) {
			.logo-image {
				right: 32px;
				width: 180px;
				padding: 35px 22px 25px 22px;
			}
		}

		.flyout-menu-top {
			margin: 3rem 0 0 2rem;
			line-height: 2.5em;
			font-size: 0.85rem;
			font-weight: 500;
			text-transform: uppercase;
			letter-spacing: 4px;
		}

		#wgs-header-wrapper {
			overflow: hidden;
		}

		@media (max-width: 800px) {
			#wgs-header-wrapper-mobile {
				display: none;
			}
		}

		@media (min-width: 800px) {
			#wgs-header-wrapper-desktop {
				display: none;
			}
		}

		.masthead-links {
			position: absolute;
			z-index: 1;
			right: 2rem;
			bottom: 2rem;
		}

		@media (max-width: 600px) {
			.masthead-links {
				right: 0.5rem;
				bottom: 2rem;
			}
		}

		.masthead-links-button {
			background: rgb(0, 0, 0, 0.55);
			padding: 1.2rem;
			border: #ffffff solid 1px;
			text-transform: uppercase;
			text-align: center;
			color: #ffffff;
			letter-spacing: 3px;
			font-size: 0.9rem;
			cursor: pointer;
		}

		.masthead-links-button:hover {
			background: transparent;
			color: #ffffff;
		}

		@media (max-width: 600px) {
			.masthead-links-button {
				padding: 0.5rem 0.8rem;
				letter-spacing: 2px;
				font-size: 0.8rem;
			}
		}

		/*MASTHEAD LINKS */
		.header-links {
			position: absolute;
			z-index: 1;
			padding: 1rem;
			right: 1px;
			bottom: 5px;
			width: 420px;
		}

		@media (max-width: 850px) {
			.header-links {
				display: none;
			}
		}

		.showdiv {
			display: block;
			position: absolute;
			margin-left: auto;
			margin-right: auto;
			left: 0;
			right: 0;
			top: 0;
			bottom: auto;
			background: rgba(0, 0, 0, 0.6);
			padding-top: 50px;
			width: 100%;
		}

		.menu-links {
			background: hsla(345, 88.3%, 73.1%, .6);
			border: 0px solid #fff;
			padding: 20px 15px;
			color: #fff;
			cursor: pointer;
			letter-spacing: 2px;
			font-size: 10px;
			font-weight: 600;
			border-radius: 0 !important;
		}

		/*
.menu-links::after {
	content: '\f0c9';
	font-family: 'FontAwesome';
	margin-left: 15px;
	font-weight: 300;
	border: 1px solid #fff;
	padding: 1em;
}
*/
		.menu-links:hover,
		.menu-links:focus,
		.menu-links:active {
			background: rgba(0, 0, 0, 0.6) !important;
		}

		@media (min-width: 850px) {
			.menu-links {
				display: none;
			}
		}

		/*
.featured_box_content{
	position:static;
	top:50%;
	margin-top:30px;
	right:4vw;
	width:90%;
	z-index:5;
	max-width:420px;
	margin-left:auto;
	margin-right:auto
}
.alert-box-container {
	position: relative;
	background:rgba(0,0,0,0.5);
	padding: 4em 1em 2em 1.5em;
	margin-bottom: 5px;
}
.alert-box-container p {
	color: white;
	line-height: 20px;
}
.featured_box_content .box-content .alert-box {
	background:hsla(345,88.3%,73.1%,.6);
	position: absolute;
	color: #f7f7f7;
	letter-spacing: 3px;
	text-transform: uppercase;
	font-family: 'Montserrat', arial, sans-serif;
	font-size: 0.8em;
	font-weight: 500;
	top: 0;
	left: 0;
	padding: 10px;
}
.featured_box_content .box-content .alert-box-green {
	background:hsla(165, 20.0%, 80.4%,.8);
	position: absolute;
	color: #f7f7f7;
	letter-spacing: 3px;
	text-transform: uppercase;
	font-family: 'Montserrat', arial, sans-serif;
	font-size: 0.8em;
	font-weight: 500;
	top: 0;
	left: 0;
	padding: 10px
}
.featured_box_content .box-content .alert-box-navy {
	background:hsla(202, 91.9%, 14.5%,.8);
	position: absolute;
	color: #f7f7f7;
	letter-spacing: 3px;
	text-transform: uppercase;
	font-family: 'Montserrat', arial, sans-serif;
	font-size: 0.8em;
	font-weight: 500;
	top: 0;
	left: 0;
	padding: 10px
}
.featured_box_content .box-content a {
	color:#fff;
}
.featured_box_content .alert-box-link {
	background:transparent;
	padding: 5px;
	text-transform: uppercase;
	font-family: 'Montserrat', arial, sans-serif;
	font-size: 0.8em;
	font-weight: 600;
	letter-spacing: 3px;
	transition:all .3s ease-out;
}
.featured_box_content .links-group {
	display:-ms-flexbox;
	display:flex;
	-ms-flex-direction:column;
	flex-direction:column;
	text-align:center
}
.featured_box_content .links-group a {
	background:hsla(345,88.3%,73.1%,.7);
	padding:15px;
	margin-bottom:5px;
	color: #fff;
	font-weight:500;
	font-size:1em;
	font-family: 'Montserrat', arial, sans-serif;
	padding-right:60px;
	padding-bottom:0;
	display:-ms-flexbox;
	display:flex;
	min-height:52px;
	padding-top:12px;
	padding-bottom:12px;
	-ms-flex-align:center;
	align-items:center;
	text-decoration:none;
	position:relative;
	text-align:left;
	min-height:62px;
	transition:all .3s ease-out
}
.featured_box_content .links-group-green a {
	background:hsla(165, 20.0%, 80.4%,.8);
	padding:15px;
	margin-bottom:5px;
	color: #fff;
	font-weight:500;
	font-size:1em;
	font-family: 'Montserrat', arial, sans-serif;
	padding-right:60px;
	padding-bottom:0;
	display:-ms-flexbox;
	display:flex;
	min-height:52px;
	padding-top:12px;
	padding-bottom:12px;
	-ms-flex-align:center;
	align-items:center;
	text-decoration:none;
	position:relative;
	text-align:left;
	min-height:62px;
	transition:all .3s ease-out;
}
.links-group-navy a {
	background:hsla(202, 91.9%, 14.5%,.8);
	padding:15px;
	margin-bottom:5px;
	color: #fff;
	font-weight:500;
	font-size:1em;
	font-family: 'Montserrat', arial, sans-serif;
	padding-right:60px;
	padding-bottom:0;
	display:-ms-flexbox;
	display:flex;
	min-height:52px;
	padding-top:12px;
	padding-bottom:12px;
	-ms-flex-align:center;
	align-items:center;
	text-decoration:none;
	position:relative;
	text-align:left;
	min-height:62px;
	transition:all .3s ease-out;
}
.featured_box_content .links-group a:last-child{
	margin-bottom:0;
}
.featured_box_content .links-group a:after, .links-group-green a:after, .links-group-navy a:after{
	position:absolute;
	font-family: FontAwesome;
	content:"";
	right:15px;
	top:50%;
	transform:translateY(-50%);
	width:36px;
	height:36px;
	content:"\f105";
	border:1px solid #fff;
	color:#fff;
	display:-ms-flexbox;
	display:flex;
	-ms-flex-pack:center;
	justify-content:center;
	-ms-flex-align:center;
	align-items:center;
	transition:all .3s ease-out
}
.featured_box_content .links-group a:hover, .links-group-green a:hover, .links-group-navy a:hover{
	background:rgba(0,0,0,0.5);
}
.featured_box_content .links-group a:after, .links-group-geen a:after, .links-group-navy a:after{
	color: #fff;
	background:transparent;
	border: 1px solid #fff;
}

*/

		.wgs-header-strip {
			background-size: cover;
			background-position: center;
			background-color: transparent;
			position: relative;
		}

		.wgs-header-strip--full-height {
			height: 100vh;
			width: 100%;
			margin: 0;
		}

		.wgs-header-strip__banner {
			height: 100%;
		}

		@keyframes zoomOut {
			from {
				transform: scale(1.2) translate(-60px, -10px);
			}

			to {
				transform: scale(1);
			}
		}

		.wgs-header-strip__banner .random-image {
			height: 100vh;
			width: 100%;
			background-size: cover;
			background-position: center;
			animation-name: zoomOut;
			animation-delay: 0s;
			animation-duration: 10s;
			animation-fill-mode: forwards;
		}

		.wgs-header-strip__banner .image {
			height: 100vh;
			width: 100%;
			background-size: cover;
			background-position: center;
		}

		.wgs-header-strip__banner .slideshow {
			list-style-type: none;
			margin: 0;
		}

		/** SLIDESHOW **/
		.wgs-header-strip__banner .slideshow,
		.wgs-header-strip__banner .slideshow:after {
			position: scroll;
			width: 100%;
			height: 100vh;
			left: 0px;
			z-index: 0;
		}

		.wgs-header-strip__banner .slideshow li span {
			position: absolute;
			width: 100%;
			height: 100%;
			top: 0px;
			left: 0px;
			color: transparent;
			background-size: cover;
			background-position: 50% 50%;
			background-repeat: no-repeat;
			opacity: 0;
			z-index: 0;
			animation: imageAnimation 40s linear infinite 0s;
		}

		.wgs-header-strip__banner .slideshow li:nth-child(1) span {}

		.wgs-header-strip__banner .slideshow li:nth-child(2) span {
			animation-delay: 4s;
		}

		.wgs-header-strip__banner .slideshow li:nth-child(3) span {
			animation-delay: 8s;
		}

		.wgs-header-strip__banner .slideshow li:nth-child(4) span {
			animation-delay: 12s;
		}

		.wgs-header-strip__banner .slideshow li:nth-child(5) span {
			animation-delay: 16s;
		}

		.wgs-header-strip__banner .slideshow li:nth-child(6) span {
			animation-delay: 20s;
		}

		.wgs-header-strip__banner .slideshow li:nth-child(7) span {
			animation-delay: 24s;
		}

		.wgs-header-strip__banner .slideshow li:nth-child(8) span {
			animation-delay: 28s;
		}

		.wgs-header-strip__banner .slideshow li:nth-child(9) span {
			animation-delay: 32s;
		}

		.wgs-header-strip__banner .slideshow li:nth-child(10) span {
			animation-delay: 36s;
		}

		@keyframes imageAnimation {
			0% {
				opacity: 0;
				animation-timing-function: ease-in;
			}

			4% {
				opacity: 1;
				animation-timing-function: ease-out;
			}

			10% {
				opacity: 1;
			}

			14% {
				opacity: 0;
			}

			100% {
				opacity: 0;
			}
		}

		.wgs-header-strip__banner .no-cssanimations .slideshow li span {
			opacity: 1;
		}

		.wgs-header-strip__banner-text {
			height: 100vh;
			width: 100vw;
			top: 50px;
			position: absolute;
			display: table;
			color: #ffffff;
		}

		.wgs-header-strip__banner-text .wgs-header-row {
			max-width: 100%;
		}

		@media (min-width: 768px) {
			.wgs-header-strip__banner-text .wgs-header-row {
				max-width: 350px;
			}
		}

		@media (min-width: 768px) and (orientation: portrait) {
			.wgs-header-strip__banner-text .wgs-header-row {
				max-width: 300px;
			}
		}

		.wgs-header-strip__banner-text .contain {
			display: table-cell;
			vertical-align: bottom;
			width: 100vw;
		}

		@media (min-width: 768px) {
			.wgs-header-strip__banner-text .contain {
				vertical-align: middle;
			}
		}

		.wgs-header-strip__banner-bottom {
			position: absolute;
			width: 100vw;
			bottom: 0px;
		}

		.wgs-header-strip__banner-overlay {
			position: absolute;
			width: calc(100% + 20px);
			height: calc(100% + 20px);
			top: -10px;
			left: -10px;
			background: linear-gradient(to right, rgba(0, 0, 0, 0.6) 0%, rgba(0, 0, 0, 0.4) 30%, rgba(255, 255, 255, 0) 70%, rgba(255, 255, 255, 0) 100%);
			-ms-transform-origin: left top;
			-webkit-transform-origin: left top;
			transform-origin: left top;
			display: table;
		}

		.wgs-header-strip__banner-overlay-temp {
			position: absolute;
			width: calc(100% + 20px);
			height: calc(100% + 20px);
			top: -10px;
			left: -10px;
			background: linear-gradient(to right, rgba(0, 0, 0, 0.6) 0%, rgba(0, 0, 0, 0.4) 30%, rgba(255, 255, 255, 0) 70%, rgba(255, 255, 255, 0) 100%);
			-ms-transform-origin: left top;
			-webkit-transform-origin: left top;
			transform-origin: left top;
			display: table;
		}

		.wgs-header-strip__banner-overlay-lighter {
			background: linear-gradient(to right, rgba(0, 0, 0, 0.6) 0%, rgba(0, 0, 0, 0.4) 30%, rgba(255, 255, 255, 0) 70%, rgba(255, 255, 255, 0) 100%);
		}

		.wgs-header-strip__banner-overlay-darker {
			background: linear-gradient(to right, rgba(0, 0, 0, 1) 0%, rgba(0, 0, 0, 0.9) 30%, rgba(0, 0, 0, 0.85) 40%, rgba(0, 0, 0, 0.7) 50%, rgba(255, 255, 255, 0) 70%, rgba(255, 255, 255, 0) 100%);
		}

		.wgs-header-strip__banner-overlay-temp {
			background: linear-gradient(to right, rgba(0, 0, 0, 1) 0%, rgba(0, 0, 0, 0.9) 20%, rgba(0, 0, 0, 0.85) 30%, rgba(0, 0, 0, 0.8) 40%, rgba(0, 0, 0, 0.75) 50%, rgba(0, 0, 0, 0.7) 60%, rgba(0, 0, 0, 0.65) 70%, rgba(0, 0, 0, 0.5) 100%);
		}

		@media screen and (max-width: 768px) {
			.wgs-header-strip__banner .image {
				height: calc(100% + 20px);
			}

			.wgs-header-strip__banner-text {
				height: 60vh;
			}

			.wgs-header-strip__banner-bottom {
				bottom: 0px;
			}

			.wgs-header-strip .scroll-down {
				display: none;
			}

			.wgs-header-strip__banner-overlay {
				width: calc(100% + 20px);
				background: linear-gradient(to right, rgba(0, 0, 0, 0.5) 0%, rgba(0, 0, 0, 0.4) 40%, rgba(255, 255, 255, 0) 100%);
				-ms-transform: none;
				/* IE 9 */
				-webkit-transform: none;
				/* Safari */
				transform: none;
				/* Safari */
			}

			.wgs-header-strip__banner-overlay-temp {
				width: calc(100% + 20px);
				background: linear-gradient(to right, rgba(0, 0, 0, 0.9) 0%, rgba(0, 0, 0, 0.85) 20%, rgba(0, 0, 0, 0.8) 30%, rgba(0, 0, 0, 0.75) 40%, rgba(0, 0, 0, 0.7) 50%, rgba(0, 0, 0, 0.65) 60%, rgba(0, 0, 0, 0.6) 70%, rgba(0, 0, 0, 0.5) 100%);
				-ms-transform: none;
				/* IE 9 */
				-webkit-transform: none;
				/* Safari */
				transform: none;
				/* Safari */
			}
		}

		@media screen and (min-width: 767px) and (max-width: 768px) {

			.wgs-header-strip--full-height,
			.wgs-header-strip__banner-text {
				height: 90vh;
			}

			.wgs-header-strip__banner-text .wgs-header-row {
				max-width: 510px;
			}
		}

		.wgs-header-container {
			padding-right: 15px;
			padding-left: 15px;
			margin-right: auto;
			margin-left: auto;
		}

		@media (min-width: 768px) {
			.wgs-header-container {
				width: 750px;
			}
		}

		@media (min-width: 992px) {
			.wgs-header-container {
				width: 970px;
			}
		}

		@media (min-width: 1200px) {
			.wgs-header-container {
				width: 1170px;
			}
		}

		.wgs-header-row {
			margin-right: 0;
			margin-left: 0;
		}

		.wgs-header-row h1 {
			font-size: 28px;
			font-weight: 300;
			hyphens: auto;
			color: #ffffff;
			padding-bottom: 20px;
		}

		@media (min-width: 768px) {
			.wgs-header-row h1 {
				font-size: 50px;
				hyphens: auto;
				/* padding-bottom : 50px; */
			}
		}

		.wgs-header-row p {
			line-height: 1.2em;
			font-size: 1rem;
			font-weight: 500;
		}

		@media (min-width: 768px) {
			.wgs-header-row p {
				font-size: 1.2rem;
			}
		}

		@media (max-width: 768px) {
			.wgs-header-row p {
				max-width: 70%;
			}
		}

		.header-video {
			position: relative;
			background-color: black;
			height: 75vh;
			min-height: 25rem;
			width: 100%;
			overflow: hidden;
		}

		.header-video_background iframe {
			background: #000;
			position: absolute;
			top: 50%;
			left: 50%;
			transform: translate(-50%, -50%);
			overflow: hidden;
			pointer-events: none;
			width: 100vw;
			height: 56.25vw;
			min-height: 100vh;
			min-width: 177.77vh;
		}

		.layout-header {
			height: 200vh;
		}

		.layout-container {
			clip: rect(0, auto, auto, 0);
			overflow: hidden;
			position: absolute;
			height: 100vh;
			left: 0;
			width: 100%;
			-webkit-mask-image: -webkit-linear-gradient(top, #ffffff 0%, #ffffff 100%);
		}

		.layout-container_solid {
			background: #032e47;
			top: 0;
		}

		.layout-container_solid::after {
			content: "";
			background: url("https://www.westminster.org.uk/wp-content/uploads/2021/11/Westminster-School-crest-blackwhite-600dpi.png");
			background-repeat: no-repeat;
			background-position: 50% 50%;
			background-attachment: fixed;
			background-size: 450px 450px;
			opacity: 0.1;
			top: 0;
			left: 0;
			bottom: 0;
			right: 0;
			position: absolute;
			z-index: -1;
		}

		@media (max-width: 600px) {
			.layout-container_solid::after {
				background-attachment: fixed;
				background-size: 320px 320px;
			}
		}

		@media only screen and (device-width: 768px) {
			.layout-container_solid::after {
				background-attachment: fixed;
			}
		}

		@media only screen and (min-device-width: 481px) and (max-device-width: 1024px) and (orientation:portrait) {
			.layout-container_solid::after {
				background-attachment: fixed;
			}
		}

		@media only screen and (min-device-width: 481px) and (max-device-width: 1024px) and (orientation:landscape) {
			.layout-container_solid::after {
				background-attachment: fixed;
			}
		}

		.title_wrapper {
			position: fixed;
			display: block;
			margin: auto;
			width: 100%;
			top: 60%;
			transform: translateY(-50%);
		}

		@media (min-width: 768px) {
			.title_wrapper {
				top: 60%;
			}
		}

		@media (max-width: 768px) and (orientation: landscape) {
			.title_wrapper {
				top: 90%;
			}
		}

		.title_wrapper h1 {
			text-align: center;
			font-size: 30px;
			text-align: center;
			font-weight: 300;
			color: #ffffff;
		}

		@media (min-width: 768px) {
			.title_wrapper h1 {
				font-size: 50px;
			}
		}

		.layout-container_solid .title_wrapper h1 {
			background-size: 100vw auto;
			background-position: center;
			background-clip: text;
			color: #ffffff;
		}

		.title_wrapper p {
			max-width: 700px;
			margin-left: 5%;
			margin-right: 5%;
			font-size: 1rem;
			margin-top: 50px;
			color: #f7f7f7;
			text-align: center;
		}

		@media (min-width: 768px) {
			.title_wrapper p {
				margin-left: auto;
				margin-right: auto;
			}
		}

		.layout-item-button-title-wrapper {
			border: 0;
			color: #e9e9e9;
			text-transform: uppercase;
			letter-spacing: 4px;
			padding: 0;
			background: transparent;
			font-size: 12px;
			font-weight: bold;
			text-decoration: none;
			border-radius: 0;
			display: inline-block;
			margin-left: 50%;
			transform: translateX(-50%);
		}

		.layout-item-button-title-wrapper::after {
			content: '';
			display: block;
			background: #e9e9e9;
			width: 0;
			height: 1px;
			margin-top: 15px;
			transition: width 0.4s;
		}

		.layout-item-button-title-wrapper:hover {
			color: #e9e9e9;
			background: transparent;
			border: 0;
		}

		.layout-item-button-title-wrapper:hover::after {
			width: 80%;
		}

		@media (any-pointer: coarse) {
			.layout-item-button-title-wrapper::after {
				display: none;
			}
		}

		.layout-container_image {
			background-size: auto;
			background-attachment: fixed;
			top: 100vh;
		}

		.school-selector {
			position: absolute;
			z-index: 1;
			padding: 1.5rem;
			right: 15px;
			bottom: 15px;
		}

		@media (max-width: 600px) {
			.school-selector {
				display: flex;
				justify-content: center;
				align-items: center;
			}
		}

		.school-selector-link {
			background: rgb(0, 0, 0, 0.5);
			color: #ffffff;
			border: #ffffff solid 1px;
			padding: 1.5rem;
			text-transform: uppercase;
			font-weight: 500;
			letter-spacing: 4px;
			font-size: 1rem;
		}

		.school-selector-link:hover {
			background: rgb(0, 0, 0, 0.4);
			color: #ffffff;
			border: #f77e9d solid 1px;
		}

		@media (max-width: 600px) {
			.school-selector-link {
				background: #032e47;
				border: #ffffff solid 1px;
				text-align: center;
				padding: 0.8rem;
			}
		}

		.layout-container_image::before {
			content: "";
			position: absolute;
			top: 0;
			right: 0;
			bottom: 0;
			left: 0;
			background-color: rgb(0, 0, 0, 0.4);
		}

		.layout-container_image.title_wrapper h1 {
			text-align: center;
			font-size: 28px;
			text-align: center;
			font-weight: 300;
			color: #ffffff;
		}

		@media (min-width: 768px) {
			.layout-container_image .title_wrapper h1 {
				font-size: 50px;
			}
		}

		.layout-section {
			padding: 0 2em 0 2em;
			margin: auto;
			max-width: 100%;
			background-color: #e9e9e9;
		}

		.layout-section-top {
			padding: 1em 2em 1em 2em;
			margin: auto;
			max-width: 1200px;
			text-align: justify;
		}

		.layout-section-top h2 {
			font-family: 'Montserrat';
			font-size: 2em;
			margin: 30px 0 10px 0;
		}

		.layout-section-heading {
			position: absolute;
			max-width: 850px;
			left: 0;
			right: 0;
			margin-left: auto;
			margin-right: auto;
			padding-top: 15px;
			text-align: center;
			bottom: 0;
			height: 135px;
			background-color: #e9e9e9;
			z-index: 1;
		}

		@media (min-width: 600px) {
			.layout-section-heading {
				max-width: 850px;
			}
		}

		.layout-section-heading h2 {
			font-family: 'Montserrat';
			font-size: 3em;
			margin: 30px 0 10px 0;
		}

		.layout-section-heading .layout-breadcrumbs {
			text-transform: uppercase;
			letter-spacing: 3px;
			font-size: 12px;
			font-weight: normal;
		}

		.layout-section p {
			padding-top: 20px;
			font-family: 'Montserrat';
			margin-top: 0;
			columns: 400px 2;
			column-rule: 1px dotted #bbbbbb;
			column-gap: 4em;
		}

		.layout-section h2 {
			font-size: 3em;
			line-height: 2;
			color: #222329;
			font-family: 'Montserrat';
		}

		.layout-section .layout-section-title {
			font-size: 15px;
			font-weight: 700;
			text-transform: uppercase;
			letter-spacing: 4px;
			margin-bottom: 20px;
		}

		.mouse_scroll {
			display: block;
			margin: 0 auto;
			width: 24px;
			height: 100px;
			margin-top: 125px;
		}

		.mouse_scroll_header {
			width: 24px;
			height: calc(100% + 20px);
			cursor: pointer;
			position: relative;
			z-index: 999;
		}

		.m_scroll_arrows {
			display: block;
			transform: rotate(45deg);
			border-right: 2px solid white;
			border-bottom: 2px solid white;
			margin: 0 0 3px 4px;
			width: 16px;
			height: 16px;
		}

		.unu {
			margin-top: 1px;
		}

		.unu,
		.doi {
			animation: mouse-scroll 1s infinite;
		}

		.unu {
			animation-direction: alternate;
		}

		.doi {
			animation-delay: 0.2s;
			animation-direction: alternate;
			margin-top: -6px;
		}

		.mouse {
			height: 42px;
			width: 24px;
			border-radius: 14px;
			transform: none;
			border: white solid 2px;
			top: 170px;
		}

		@keyframes mouse-scroll {
			0% {
				opacity: 0;
			}

			50% {
				opacity: 0.5;
			}

			100% {
				opacity: 1;
			}
		}

		.footer-above {
			max-width: 100%;
			background-color: #404a54;
			padding: 40px;
		}

		.footer-above p {
			color: #e7e7e7;
			font-family: 'lora';
			font-style: italic;
			font-size: 22px;
			text-align: center;
		}

		section {
			margin: 0;
		}

		section article {
			text-align: center;
			margin-top: 50px;
			color: #fff;
			font-size: 1.5em;
			letter-spacing: 0.12em;
			text-shadow: 1px 1px 1px rgb(0, 0, 0, 0.6);
		}

		.breadcrumb-header {
			text-align: center;
			margin: 2.5em 0 2.5em 0;
			text-transform: uppercase;
			font-size: 0.8em;
			letter-spacing: 4px;
			font-weight: 500;
			color: #4e5768;
		}

		@media screen and (max-width: 600px) {
			.breadcrumb-header {
				margin: 3em 0 2.5em 0;
				font-size: 0.7em;
			}
		}

		.top-page-wrapper {
			position: relative;
		}
	</style>
	<style>
		.GenTableContainer {
			max-width: 1200px;
			margin-left: auto;
			margin-right: auto;
			padding-top: 25px;
			padding-bottom: 10px;
		}

		@media screen and (max-width: 800px) {
			.GenTableContainer {
				max-width: 95%;
				margin-left: auto;
				margin-right: auto;
			}
		}

		.zebra-even {
			background-color: #f7f7f7;
		}

		.zebra-odd {
			background-color: #ffffff;
		}

		td.light-pink {
			background-color: #fde5eb;
		}

		td.pinkCol,
		th.pinkCol {
			background-color: #404a54;
			color: #ffffff;
		}

		td.TermCol {
			color: #ffffff;
			background-color: #404a54;
			text-transform: uppercase;
			font-size: 0.8rem;
			font-weight: bold;
			letter-spacing: 4px;
		}

		td.ExamResults {
			color: #ffffff;
			background-color: #404a54;
			text-transform: uppercase;
			font-size: 0.8rem;
			font-weight: bold;
			letter-spacing: 4px;
			text-align: center;
		}

		td.ExamResults-data {
			text-align: center;
		}

		table.WGS-contact tr.even {
			background-color: #f7f7f7;
		}

		table.WGS-contact td {
			vertical-align: middle;
		}

		table.HousesHoMs {
			border-collapse: collapse;
		}

		table.HousesHoMs td {
			border-bottom: 1px solid #cccccc;
			border-top: 1px solid #cccccc;
			border-left: 1px solid #ffffff;
			border-right: 1px solid #ffffff;
			padding: 10px;
			text-align: left;
		}
	</style>
	<style>
		p.border {
			border: solid 1px;
			padding-left: 20px;
			padding-right: 20px;
			padding-top: 10px;
			padding-bottom: 10px;
			text-align: center;
		}

		p.border-color {
			border: solid 1px;
			padding-left: 20px;
			padding-right: 20px;
			padding-top: 10px;
			padding-bottom: 10px;
			text-align: center;
			color: #ffffff;
			background-color: #404a54;
		}

		p.border-colour {
			border: #4e5768 solid 1px;
			padding-left: 20px;
			padding-right: 20px;
			padding-top: 10px;
			padding-bottom: 10px;
			text-align: center;
			color: #4e5768;
			background-color: #f7f7f7;
		}

		div.border-color {
			border: solid 1px;
			font-size: 12px;
			margin-top: 50px;
			padding-left: 10px;
			padding-right: 10px;
			padding-top: 20px;
			padding-bottom: 10px;
			background-color: #ffffff;
		}

		.border-heading {
			text-transform: uppercase;
			letter-spacing: 3px;
			font-size: 0.75rem;
			font-weight: 600;
		}

		h2.news-header {
			text-transform: uppercase;
			color: #f7f7f7;
			letter-spacing: 4px;
			font-weight: 600;
			font-size: 0.5em;
			text-align: center;
			margin: 2rem;
		}

		@media (min-width: 786px) {
			h2.news-header {
				font-weight: 500;
				text-align: left;
				margin: 0;
			}
		}

		h4 {
			border-top: 0 solid;
			border-bottom: 0 solid;
			text-align: center;
		}

		@media (min-width: 786px) {
			h4 {
				border-top: 0 solid;
				border-bottom: 0 solid;
				text-align: left;
				line-height: 2.5rem;
			}
		}

		.h2-page-heading {
			font-size: 2.5em;
			font-weight: 300;
			color: #f77e9d;
			text-align: center;
			max-width: 95%;
		}

		.h2-page-heading-MUN {
			font-size: 2.5em;
			font-weight: 300;
			color: #5b92e5;
			max-width: 90%;
		}

		.vertline::after {
			background-color: #4e5768;
			content: '';
			display: block;
			height: 0;
			margin: 10px auto;
			width: 1px;
		}

		@media (min-width: 65.625em) {
			.vertline::after {
				margin: 10px auto 20px;
			}
		}

		@media (max-width: 600px) {
			.h2-page-heading {
				font-size: 2em;
			}
		}
	</style>
	<style>
		.err_page {
			position: absolute;
			top: 40%;
			width: 100%;
			text-align: center;
			display: flex;
			align-items: center;
		}

		.err_page_content {
			width: 100%;
			position: relative;
			z-index: 1;
		}

		.err_page h1 {
			font-size: 200px;
			font-family: 'Montserrat';
			font-weight: bold;
			margin: 0;
			color: hsla(345, 88.3%, 73.1%, .8);
		}

		@media screen and (max-width: 800px) {
			.err_page {
				top: 30%;
			}

			.err_page h1 {
				font-size: 80px;
			}
		}

		.error-message {
			margin: 4em 0 2em 0;
			width: 700px;
			max-width: 80%;
			margin-inline: auto;
		}
	</style>
	<style>
		.masthead-links-input {
			display: none;
		}

		.masthead-links-menu {
			position: absolute;
			bottom: 100%;
			border: #000000 solid 1px;
			padding: 5px;
			margin: 0 0 5px 0;
			background: rgb(0, 0, 0, 0.6);
			list-style-type: none;
		}

		.masthead-links-input+.masthead-links-menu {
			display: none;
		}

		.masthead-links-input:checked+.masthead-links-menu {
			display: block;
		}

		.masthead-links-menu li {
			font-size: 0.9rem;
			padding: 0 10px;
			cursor: pointer;
			white-space: nowrap;
		}

		.masthead-links-menu li:hover {
			background: transparent;
		}

		.masthead-links-menu li a {
			display: block;
		}

		.masthead-links-arrow {
			color: #f7f7f7;
		}
	</style>
	<style>
		.music-vid-link {
			background-color: #fde5eb;
			padding: 2em;
			text-align: center;
		}

		.MVL {
			letter-spacing: 2px;
			text-transform: uppercase;
			font-weight: 600;
			font-size: 12px;
		}

		#image-text {
			max-width: 1200px;
			width: 80%;
			margin-left: auto;
			margin-right: auto;
		}

		.col-text {
			height: 40em;
		}

		.col-vid-text {
			height: auto;
		}

		.grid-flex,
		.grid-vid-flex {
			display: flex;
			flex-grow: 1;
			flex-direction: row;
			margin-bottom: 4em;
			box-shadow: 0 15px 20px rgb(0, 0, 0, 0.2);
		}

		.col {
			flex: 1;
			background-color: #eeeeee;
			color: #222329;
		}

		.col-news {
			flex: 1;
			background-color: #c3d7d2;
			color: #222329;
		}

		.col-left {
			order: -1;
			background-color: #032e47;
			color: #e7e7e7;
		}

		.col-left-vid {
			order: -1;
			background-color: #032e47;
			color: #ffffff;
		}

		.col-text {
			display: flex;
			align-items: center;
			justify-content: center;
			position: relative;
		}

		.covid {
			background: #404a54;
			position: absolute;
			padding: 0.5em;
			top: 0;
			left: 0;
		}

		.covid a {
			color: #ffffff;
			text-transform: uppercase;
			font-size: 0.75rem;
			letter-spacing: 2px;
			font-weight: 500;
		}

		@media (min-width: 40rem) {
			.covid {
				padding: 1em;
			}
		}

		@media (min-width: 40rem) {
			.covid a {
				font-size: 1rem;
			}
		}

		.col-vid-text {
			display: flex;
			align-items: center;
			justify-content: center;
		}

		.aligner-item,
		.aligner-item-left,
		.aligner-item-left-vid {
			width: 80%;
		}

		.aligner-item h2 {
			font-size: 2rem;
			color: #4e5768;
			margin: 1rem 0 1rem 0;
		}

		.aligner-item-left h2 {
			font-size: 2rem;
			color: #e7e7e7;
			margin: 1rem 0 1rem 0;
		}

		@media (max-width: 600px) {

			.aligner-item h2,
			.aligner-item-left h2 {
				font-size: 1.5rem;
			}

			.aligner-item p,
			.aligner-item-left-vid p {
				line-height: 20px;
			}
		}

		.aligner-item-left-vid h2 {
			font-size: 2rem;
			color: #ffffff;
			margin: 1rem 0 1rem 0;
		}

		@media (max-width: 600px) {
			.aligner-item-left-vid h2 {
				font-size: 1.5rem;
			}
		}

		.aligner-item .aligner-title {
			max-width: 300px;
			margin-left: auto;
			margin-right: auto;
			font-size: 15px;
			font-weight: 500;
			text-transform: uppercase;
			letter-spacing: 4px;
			text-align: center;
		}

		.aligner-item-left .aligner-title {
			max-width: 300px;
			margin-left: auto;
			margin-right: auto;
			font-size: 15px;
			color: #e7e7e7;
			font-weight: 500;
			text-transform: uppercase;
			letter-spacing: 4px;
			text-align: center;
		}

		.aligner-title-vid {
			max-width: 300px;
			margin-left: auto;
			margin-right: auto;
			font-size: 15px;
			color: #ffffff;
			font-weight: 500;
			text-transform: uppercase;
			letter-spacing: 4px;
			text-align: center;
		}

		.aligner-title-vid h2 {
			color: #ffffff;
		}

		.aligner-item .news-date {
			color: #404a54;
			text-transform: uppercase;
			letter-spacing: 3px;
			padding: 0;
			font-size: 15px;
		}

		.aligner-item-left .news-date {
			color: #e7e7e7;
			text-transform: uppercase;
			letter-spacing: 3px;
			padding: 0;
			font-size: 15px;
		}

		.layout-item-button {
			text-transform: uppercase;
			color: #404a54;
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
			margin-bottom: 2em;
		}

		.layout-item-button-left {
			color: #ffffff;
			text-transform: uppercase;
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
			margin-bottom: 2em;
		}

		.layout-item-button::after {
			content: '';
			display: block;
			width: 0;
			height: 1px;
			background: #404a54;
			margin-top: 15px;
			transition: width 0.4s;
		}

		.layout-item-button-left::after {
			content: '';
			display: block;
			width: 0;
			height: 1px;
			background: #ffffff;
			margin-top: 15px;
			transition: width 0.4s;
		}

		.layout-item-button:hover {
			background: transparent;
			color: #222329;
		}

		.layout-item-button-left:hover {
			background: transparent;
			color: #f7f7f7;
		}

		.layout-item-button:hover::after,
		.layout-item-button-left:hover::after {
			width: 85%;
		}

		@media (any-pointer: coarse) {

			.layout-item-button::after,
			.layout-item-button-left::after {
				display: none;
			}
		}

		.col-image {
			background-size: cover;
			background-position: center center;
			flex: 15%;
		}

		.col-vid {
			background-size: cover;
			background-position: center center;
			flex: 15%;
		}

		@media (max-width: 640px) {
			.grid-flex {
				height: 40em;
				flex-direction: column;
				padding: 2em;
			}

			.col-left {
				order: 0;
			}

			.aligner-item {
				width: 90%;
			}
		}

		@media (max-width: 1144px) {
			.grid-vid-flex {
				display: block;
			}
		}

		@media (max-width: 1144px) {

			.aligner-title,
			.aligner-title-vid,
			.video-description {
				font-size: 1em;
				margin-top: 3em;
				margin-bottom: 3em;
				line-height: 22px;
			}
		}

		.velocity-embed {
			margin: 0 0 0 0 !important;
			/*overflow: hidden !important; */
		}

		.velocity-embed .velocity-play-btn {
			opacity: 0.8 !important;
		}
	</style>

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


	<script>
		jQuery(document).ready(function($) {

			$('.scroll-down').on('click', function(e) {
				e.preventDefault();
				var target = $(this).data('target');
				var $target = $(target);
				$('html, body').animate({
					'scrollTop': $target.offset().top
				}, 500, 'linear');
			});

		});
	</script>
	<link rel="icon" href="https://www.westminster.org.uk/wp-content/uploads/2018/07/Westminster-Favicon.png" sizes="32x32" />
	<link rel="icon" href="https://www.westminster.org.uk/wp-content/uploads/2018/07/Westminster-Favicon.png" sizes="192x192" />
	<link rel="apple-touch-icon" href="https://www.westminster.org.uk/wp-content/uploads/2018/07/Westminster-Favicon.png" />
	<meta name="msapplication-TileImage" content="https://www.westminster.org.uk/wp-content/uploads/2018/07/Westminster-Favicon.png" />
	<style id="wp-custom-css">
		/* To be deleted from Age Checker CSS */
		.pagination .page-numbers.next,
		.pagination .page-numbers.prev {
			display: none;
		}

		.plyr__play-large {
			display: none;
		}

		.plyr__controls {
			display: none;
		}

		/* END delete */
	</style>
</head>

<body itemtype='https://schema.org/WebPage' itemscope='itemscope' class="home page-template-default page page-id-33778 ast-desktop ast-page-builder-template ast-no-sidebar astra-4.3.1 ast-header-custom-item-inside ast-full-width-primary-header group-blog ast-single-post ast-mobile-inherit-site-logo ast-inherit-site-logo-transparent ast-above-mobile-menu-align-inline ast-default-menu-enable ast-flyout-above-menu-enable ast-flyout-above-left-side ast-default-below-menu-enable ast-full-width-layout ast-full-width-header ast-inherit-site-logo-sticky ast-normal-title-enabled astra-addon-4.3.3">
	<a class="skip-link screen-reader-text" href="#content" role="link" title="Skip to content">
		Skip to content</a>

	<div class="hfeed site" id="page">
		<header class="ast-custom-header" itemscope="itemscope" itemtype="https://schema.org/WPHeader">
			<div class="astra-advanced-hook-38855 ">
				<div class="logo-image">
					<a href="#	"><img src="../Public/imgs/nefertari-logo.webp" width="200px" height="500px"> </a>
				</div>

				<div class="astra-advanced-hook-38859 ">
					<div class="mobile-links">

						<div class="mobile-links-group">
							<a href="./loggin1.php">
								Log in</a>
						</div>

						 <div class="mobile-links-group">
							<a href="../views/add.php">
								Add User </a>
						</div>

						<!-- <div class="mobile-links-group">
							<a href="./StudentView/studentView.php">
								News</a>
						</div>  -->

					</div>
				</div>
				<!--Homepage Below Crest Links Mobile -->

				<div class="hero-carousel-wrapper">


					<ul class="slideshow"><!--here slideshow-->
						<li><span style="background-image: url('../Public/imgs/2.webp');"></span></li>
						<li><span style="background-image: url('../Public/imgs/1.webp');"></span></li>
						<li><span style="background-image: url('../Public/imgs/3.webp');"></span></li>
						<li><span style="background-image: url('../Public/imgs/4.png');"></span></li>
						<li><span style="background-image: url('../Public/imgs/5.png');"></span></li>
						<li><span style="background-image: url('../Public/imgs/7.webp');"></span></li>
						<li><span style="background-image: url('../Public/imgs/3.webp');"></span></li>
						<li><span style="background-image: url('../Public/imgs/4.png');"></span></li>
					</ul>


					<div class="front-page-overlay">
					</div>

					<div class="front-page-title-wrapper">

						<h3 class="hero-intro-title">Welcome to</h3>
						<h2 class="hero-title">Nefertari International Schools</h2>

						<div class="mouse_scroll_frontpage scroll-down" role="Scroll for More" data-target="#ScrollToContent">
							<div>
								<span class="m_scroll_arrows_front unu"></span>
								<span class="m_scroll_arrows_front doi"></span>
							</div>
						</div>

					</div>

				</div>

				<!--Homepage Alert Text-->
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
				</div>
				<!--Nav Menu V2-->
			</div>
		</header>
		<div class="astra-advanced-hook-34726 ">
			<div id="ScrollToContent"></div>
		</div>
		<div id="content" class="site-content">
			<div class="ast-container">


				<div id="primary" class="content-area primary">

					<div class="astra-advanced-hook-33781 ">
						<div class="homepage-section-one-heading">
							25 Years Graduating
							Generations of Pioneers
						</div>

						<div class="homepage-section-one">

							<div class="section-one-text">

								<p>
									Nefertari School’s reputation as one of the world’s foremost centres of academic excellence is built upon our pupils’ genuine enjoyment of open-minded enquiry, rigorous discussion and the search for explanation well beyond any examination syllabus. Westminster is a safe, stimulating and supportive environment: pupils enhance their intellectual, physical, spiritual and social development by taking full advantage of the many opportunities available to them in art, drama, music, sport and volunteering in the community.</p>

								<p>
									<a class="homepage-text-button" href="#">Read More →</a>
								</p>
							</div>

						</div>


						<div class="homepage-section-two">


							<section id="homepage-slider">
								<div class="header">
									<h2 class="h2-page-heading vertline">Discover Nefertari</h2>
									<p>Latest news and events from life at Nefertari School. <a class="homepage-news-archive-link" target="_blank" href="/news-archive/">News Archive &rarr;</a></p>
								</div>

								<div class="owl-carousel owl-theme">

									<div class="item">


										<img width="2560" height="1707" src="https://www.westminster.org.uk/wp-content/uploads/2023/04/WestminsterSchoolDay2Sep2021.-294-Copy-scaled.jpg" class="featured-page-img wp-post-image" alt="" decoding="async" srcset="https://www.westminster.org.uk/wp-content/uploads/2023/04/WestminsterSchoolDay2Sep2021.-294-Copy-scaled.jpg 2560w, https://www.westminster.org.uk/wp-content/uploads/2023/04/WestminsterSchoolDay2Sep2021.-294-Copy-768x512.jpg 768w, https://www.westminster.org.uk/wp-content/uploads/2023/04/WestminsterSchoolDay2Sep2021.-294-Copy-1536x1024.jpg 1536w, https://www.westminster.org.uk/wp-content/uploads/2023/04/WestminsterSchoolDay2Sep2021.-294-Copy-2048x1365.jpg 2048w" sizes="(max-width: 2560px) 100vw, 2560px" />
										<a href="#">
											<div class="overlay">
												<span>Co-Curriculum</span>
												<div class="item-caption">
													Sport </div>
											</div>
										</a>
									</div>
									<div class="item">


										<img width="2560" height="1709" src="https://www.westminster.org.uk/wp-content/uploads/2022/02/Oliver-2022-01-scaled.jpg" class="featured-page-img wp-post-image" alt="" decoding="async" srcset="https://www.westminster.org.uk/wp-content/uploads/2022/02/Oliver-2022-01-scaled.jpg 2560w, https://www.westminster.org.uk/wp-content/uploads/2022/02/Oliver-2022-01-scaled-768x513.jpg 768w, https://www.westminster.org.uk/wp-content/uploads/2022/02/Oliver-2022-01-scaled-1536x1025.jpg 1536w, https://www.westminster.org.uk/wp-content/uploads/2022/02/Oliver-2022-01-scaled-2048x1367.jpg 2048w" sizes="(max-width: 2560px) 100vw, 2560px" />
										<a href="#">
											<div class="overlay">
												<span>School Life</span>
												<div class="item-caption">
													Watch Nefertari </div>
											</div>
										</a>
									</div>


									<div class="item">


										<img width="1723" height="1147" src="https://www.westminster.org.uk/wp-content/uploads/2023/01/IMG_9027-v2-e1673623094933.jpg" class="featured-page-img wp-post-image" alt="" decoding="async" srcset="https://www.westminster.org.uk/wp-content/uploads/2023/01/IMG_9027-v2-e1673623094933.jpg 1723w, https://www.westminster.org.uk/wp-content/uploads/2023/01/IMG_9027-v2-e1673623094933-768x511.jpg 768w, https://www.westminster.org.uk/wp-content/uploads/2023/01/IMG_9027-v2-e1673623094933-1536x1023.jpg 1536w" sizes="(max-width: 1723px) 100vw, 1723px" />
										<a href="https://www.westminster.org.uk/admissions/16-entry/">
											<div class="overlay">
												<span>Admissions</span>
												<div class="item-caption">
													16+ Entry </div>
											</div>
										</a>
									</div>



								</div>

							</section>


							<!--Latest News Strip-->

						</div>


						<div class="homepage-section-three">
							<div class="astra-advanced-hook-33968 ">
								<section class="home-featured-pages-strip">
									<div class="home-featured-pages-heading">
										<h5>Discover More</h5>
										Find out about life at Westminster School, both inside and outside the classroom
									</div>
									<div class="home-featured-pages">

										<div class="featured-page">

											<img width="2355" height="1568" src="https://www.westminster.org.uk/wp-content/uploads/2022/10/GWL_4210_gwl-scaled-e1666018527542.jpg" class="home-featured-page-img wp-post-image" alt="" decoding="async" srcset="https://www.westminster.org.uk/wp-content/uploads/2022/10/GWL_4210_gwl-scaled-e1666018527542.jpg 2355w, https://www.westminster.org.uk/wp-content/uploads/2022/10/GWL_4210_gwl-scaled-e1666018527542-768x511.jpg 768w, https://www.westminster.org.uk/wp-content/uploads/2022/10/GWL_4210_gwl-scaled-e1666018527542-1536x1023.jpg 1536w, https://www.westminster.org.uk/wp-content/uploads/2022/10/GWL_4210_gwl-scaled-e1666018527542-2048x1364.jpg 2048w" sizes="(max-width: 2355px) 100vw, 2355px" /><a href="https://www.westminster.org.uk/about/">

												<span class="home-featured-page-caption-b">
													About Nefertari</span>

											</a>
										</div>




										<div class="featured-page">

											<img width="1728" height="1152" src="https://www.westminster.org.uk/wp-content/uploads/2023/04/rem_brunch_2-scaled-e1681472550724.jpg" class="home-featured-page-img wp-post-image" alt="" decoding="async" srcset="https://www.westminster.org.uk/wp-content/uploads/2023/04/rem_brunch_2-scaled-e1681472550724.jpg 1728w, https://www.westminster.org.uk/wp-content/uploads/2023/04/rem_brunch_2-scaled-e1681472550724-768x512.jpg 768w, https://www.westminster.org.uk/wp-content/uploads/2023/04/rem_brunch_2-scaled-e1681472550724-1536x1024.jpg 1536w" sizes="(max-width: 1728px) 100vw, 1728px" /><a href="https://www.westminster.org.uk/admissions/">

												<span class="home-featured-page-caption">
													Admissions</span>

											</a>
										</div>


										<div class="featured-page">

											<img width="2560" height="1707" src="https://www.westminster.org.uk/wp-content/uploads/2023/06/WestminsterSchoolSep2021.-268-scaled.jpg" class="home-featured-page-img wp-post-image" alt="" decoding="async" srcset="https://www.westminster.org.uk/wp-content/uploads/2023/06/WestminsterSchoolSep2021.-268-scaled.jpg 2560w, https://www.westminster.org.uk/wp-content/uploads/2023/06/WestminsterSchoolSep2021.-268-768x512.jpg 768w, https://www.westminster.org.uk/wp-content/uploads/2023/06/WestminsterSchoolSep2021.-268-1536x1024.jpg 1536w, https://www.westminster.org.uk/wp-content/uploads/2023/06/WestminsterSchoolSep2021.-268-2048x1366.jpg 2048w" sizes="(max-width: 2560px) 100vw, 2560px" /><a href="https://www.westminster.org.uk/academic-life/">

												<span class="home-featured-page-caption-b">
													Academic Life</span>

											</a>
										</div>

										<div class="featured-page">

											<img width="2560" height="1703" src="https://www.westminster.org.uk/wp-content/uploads/2023/04/WS-21-03-23-415-scaled.jpg" class="home-featured-page-img wp-post-image" alt="" decoding="async" srcset="https://www.westminster.org.uk/wp-content/uploads/2023/04/WS-21-03-23-415-scaled.jpg 2560w, https://www.westminster.org.uk/wp-content/uploads/2023/04/WS-21-03-23-415-scaled-768x511.jpg 768w, https://www.westminster.org.uk/wp-content/uploads/2023/04/WS-21-03-23-415-scaled-1536x1022.jpg 1536w, https://www.westminster.org.uk/wp-content/uploads/2023/04/WS-21-03-23-415-scaled-2048x1362.jpg 2048w" sizes="(max-width: 2560px) 100vw, 2560px" /><a href="https://www.westminster.org.uk/co-curriculum/">

												<span class="home-featured-page-caption-b">
													Curriculum</span>

											</a>
										</div>

									</div>
								</section>


							</div>
							<!--Website Section Pages-->
						</div>

						<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
						<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
						<script>
							$(".owl-carousel").owlCarousel({
								loop: true,
								margin: 10,
								autoplay: true,
								autoplayTimeout: 3000,
								autoplayHoverPause: true,
								nav: true,
								responsive: {
									0: {
										items: 1
									},
									600: {
										items: 3
									}
								}
							});
						</script>

					</div>


					<?php
					include './partials/footer.php';
					?>
					<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
					<script>
						AOS.init();
					</script>
					<script type="text/javascript">
						function fetch() {

							jQuery.ajax({
								url: 'https://www.westminster.org.uk/wp-admin/admin-ajax.php',
								type: 'post',
								data: {
									action: 'data_fetch',
									keyword: jQuery('#keyword').val()
								},
								success: function(data) {
									jQuery('#datafetch').html(data);
								}
							});

						}
					</script>

					<script id='astra-theme-js-js-extra'>
						var astra = {
							"break_point": "1150",
							"isRtl": "",
							"is_scroll_to_id": "",
							"is_scroll_to_top": "",
							"is_header_footer_builder_active": "",
							"edit_post_url": "https:\/\/www.westminster.org.uk\/wp-admin\/post.php?post={{id}}&action=edit",
							"ajax_url": "https:\/\/www.westminster.org.uk\/wp-admin\/admin-ajax.php",
							"infinite_count": "2",
							"infinite_total": "0",
							"pagination": "number",
							"infinite_scroll_event": "scroll",
							"no_more_post_message": "No more posts to show.",
							"grid_layout": "2",
							"site_url": "https:\/\/www.westminster.org.uk",
							"show_comments": "Show Comments",
							"masonryEnabled": "",
							"blogMasonryBreakPoint": "768"
						};
					</script>
					<script src='https://www.westminster.org.uk/wp-content/themes/astra/assets/js/minified/style.min.js?ver=4.3.1' id='astra-theme-js-js'></script>
					<script src='https://www.westminster.org.uk/wp-content/plugins/velocity/core/js/velocity.min.js?ver=1.2.1' id='velocity-js'></script>
					<script src='https://www.westminster.org.uk/wp-content/plugins/wp-media-folder/assets/js/display-gallery/jquery.magnific-popup.min.js?ver=0.9.9' id='wpmf-gallery-popup-js'></script>
					<script src='https://www.westminster.org.uk/wp-content/themes/westminster-child/js/jquery.mCustomScrollbar.concat.min.js?ver=_S_VERSION' id='maxx-scrollbar-js'></script>
					<script src='https://www.westminster.org.uk/wp-content/themes/westminster-child/js/moment-with-locales.js?ver=_S_VERSION' id='maxx-moment-js'></script>
					<script src='https://www.westminster.org.uk/wp-content/themes/westminster-child/js/core.js?ver=_S_VERSION' id='maxx-core-js'></script>
					<script id='astra-addon-js-js-extra'>
						var astraAddon = {
							"sticky_active": "1",
							"svgIconClose": "<span class=\"ast-icon icon-close\"><\/span>",
							"hook_sticky_header": "",
							"hook_shrink_header": "",
							"hook_sticky_header_on_devices": "desktop",
							"hook_custom_header_break_point": "921",
							"header_main_stick": "",
							"header_above_stick": "1",
							"header_below_stick": "",
							"stick_header_meta": "",
							"header_main_stick_meta": "",
							"header_above_stick_meta": "",
							"header_below_stick_meta": "",
							"sticky_header_on_devices": "both",
							"sticky_header_style": "fade",
							"sticky_hide_on_scroll": "",
							"break_point": "1150",
							"tablet_break_point": "768",
							"mobile_break_point": "544",
							"header_main_shrink": "",
							"header_logo_width": "",
							"responsive_header_logo_width": {
								"desktop": "250",
								"tablet": "200",
								"mobile": 120
							},
							"stick_origin_position": "",
							"site_layout": "ast-full-width-layout",
							"site_content_width": "1240",
							"site_layout_padded_width": "1200",
							"site_layout_box_width": "1200",
							"header_builder_active": "",
							"component_limit": "10",
							"is_header_builder_active": ""
						};
					</script>
					<script src='https://www.westminster.org.uk/wp-content/uploads/astra-addon/astra-addon-6515c7a5964590-00885884.js?ver=4.3.3' id='astra-addon-js-js'></script>
					<script>
						/(trident|msie)/i.test(navigator.userAgent) && document.getElementById && window.addEventListener && window.addEventListener("hashchange", function() {
							var t, e = location.hash.substring(1);
							/^[A-z0-9_-]+$/.test(e) && (t = document.getElementById(e)) && (/^(?:a|select|input|button|textarea)$/i.test(t.tagName) || (t.tabIndex = -1), t.focus())
						}, !1);
					</script>
</body>

</html>