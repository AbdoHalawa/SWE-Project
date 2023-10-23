<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="../Public/CSS/nav.css">

<style>
		.wus-menu {
			width: 100vw;
			height: 100vh;
			background-color: #032e47;
			position: fixed;
			top: 0;
			left: -100vw;
			z-index: 9999;
			-webkit-transition: -webkit-transform 0.5s ease-in-out;
			transition: -webkit-transform 0.5s ease-in-out;
			-o-transition: transform 0.5s ease-in-out;
			transition: transform 0.5s ease-in-out;
			transition: transform 0.5s ease-in-out, -webkit-transform 0.5s ease-in-out;
		}

		@media (max-width:600px) {
			.wus-menu {
				padding: 120px 20px 0px 20px;

			}
		}

		.wus-menu__content {
			overflow-y: auto;
			overflow-x: hidden;
			height: 100%;
		}

		.wus-menu__close {
			position: absolute;
			top: 40px;
			right: 40px;
			width: 40px;
			height: 40px;
			cursor: pointer;
		}

		.wus-menu__close:after,
		.wus-menu__close:before {
			content: "";
			position: absolute;
			width: 55px;
			height: 2px;
			background: #fff;
			-webkit-transform: rotate(45deg);
			-ms-transform: rotate(45deg);
			transform: rotate(45deg);
			-webkit-transform-origin: top left;
			-ms-transform-origin: top left;
			transform-origin: top left;
		}

		.wus-menu__close:before {
			-webkit-transform: rotate(-45deg);
			-ms-transform: rotate(-45deg);
			transform: rotate(-45deg);
			-webkit-transform-origin: top right;
			-ms-transform-origin: top right;
			transform-origin: top right;
			right: 2px;
		}

		.wus-menu .heading-menu {
			font-size: 0.8em;
			text-transform: uppercase;
			letter-spacing: 3px;
			margin-bottom: 2em;
			color: #222329;
			font-weight: 600;
			text-align: left;
		}

		.wus-menu p {
			color: white;
			font-size: 19px;
		}

		.wus-menu.is-open {
			-webkit-transform: translateX(100vw);
			-ms-transform: translateX(100vw);
			transform: translateX(100vw);
		}

		.wus-menu.is-open::after {
			content: "";
			background: url(https://www.westminster.org.uk/wp-content/uploads/2022/09/Crest-blackwhite-600dpi.png);
			background-repeat: no-repeat;
			background-position: 50% 50%;
			background-attachment: scroll;
			background-size: 600px 600px;
			opacity: 0.1;
			top: 0;
			left: 0;
			bottom: 0;
			right: 0;
			position: fixed;
			z-index: -1;
		}

		@media (max-width:600px) {
			.wus-menu.is-open {
				-webkit-transform: translateX(100vw);
				-ms-transform: translateX(100vw);
				transform: translateX(100vw);
			}
		}

		.wus-menu.is-open .wus-menu__button {
			display: none;
		}

		.wus-menu__button {
			position: absolute;
			right: -76px;
			top: 10px;
			cursor: pointer;
		}

		.socials-color {
			fill: #fff;
		}

		.wus-burger-icon {
			margin: 0;
			display: inline-block;
			padding: 0.8em;
			border: 1px solid #fff;
			background: hsla(345, 88.3%, 73.1%, .6);
		}

		.wus-burger-bar {
			width: 40px;
			height: 1px;
			background-color: #fff;
			margin: 8px 0;
		}

		.wus-nav-container {
			width: 100%;
			margin-left: 6em;
			height: 100%;
		}


		@media (max-width:600px) {
			.wus-nav-container {
				margin-left: 0;
			}
		}
		.wus-nav {
			margin: 15px 0;
			padding: 0 15px;
			border-top: 1px solid transparent;
			border-bottom: 1px solid transparent;
		}

		.wus-nav-item {
			list-style: none;
			margin: 10px 0 5px;
		}

		.wus-nav-item:last-of-type {
			margin-bottom: 4em;
		}

		.wus-nav-item__title {
			cursor: pointer;
			font-weight: 500;
			z-index: 10;
			position: relative;
			font-size: 1em;
			color: #f77e9d;
			text-transform: uppercase;
			letter-spacing: 4px;
		}

		.wus-nav-item__title:hover {
			color: #f77e9d;
		}

		.wus-nav-item__title-link {
			cursor: pointer;
			font-weight: 500;
			z-index: 10;
			color: #f77e9d;
			text-transform: uppercase;
			letter-spacing: 5px;
		}

		.wus-nav-item--active .wus-nav-item__title {
			color: #f7f7f7;
			padding: 0;
			font-weight: 400;
		}

		.wus-nav-item__title::before {
			opacity: 1;
			display: inline-block;
		}

		.wus-nav-item__level-two {
			position: absolute;
			opacity: 0;
			z-index: -1;
			background: transparent;
			padding: 1em;
			font-weight: normal;
			margin-top: -10%;
			font-size: 1em;
			color: #f77e9d;
		}

		.wus-nav-item .wus-nav-item__level-two {
			opacity: 0;
			z-index: -1;
			position: absolute;
			top: 0;
			left: 0;
			margin-top: 0;
		}

		.wus-nav-item--active .wus-nav-item__level-two {
			opacity: 1;
			z-index: 999;
			position: relative;
			top: 0;
			left: 0;
			font-weight: 300;
			margin-top: 0;
			-webkit-transition: all 0.6s;
			transition: all 0.6s;
		}

		@media (min-width: 780px) {
			.wus-nav {
				position: relative;
				margin-left: auto;
				margin-right: auto;
				height: 100%;
			}

			.wus-nav::before {
				opacity: 1;
			}

			.wus-nav-item {
				margin: 1em 0 1em 0;
			}

			.wus-nav-item .wus-nav-item__title {
				width: 50%;
				padding-right: 40px;
				display: inline-block;
			}

			.wus-nav-item .wus-nav-item__title::after {
				display: hidden;
			}

			.wus-nav-item .wus-nav-item__level-two {
				position: absolute;
				top: 1em;
				left: 30%;
				width: 50%;
				padding-left: 10px;
				border-left: 1px solid #fff;
			}

			.wus-nav-item__level-two {
				background: transparent;
				border: 0;
			}
		}

		.wus-nav-links {
			list-style-type: none;
			counter-reset: section;
		}

		.wus-nav-links li::before {
			margin-right: 0.8em;
			line-height: 1.5em;
			counter-increment: section;
			content: counter(section, decimal-leading-zero);
		}

		.wus-nav-links a {
			color: #f7f7f7;
		}

		.wus-nav-item__title {
			opacity: 0;
		}

		.wus-nav-item__title {
			transform: translateY(40px);
			transition: opacity 0.3s ease;
			animation: fade-in-stagger 0.8s ease forwards;
		}

		.wus-nav-item__title {
			-webkit-animation-delay: 2s;
		}

		@keyframes fade-in-stagger {
			to {
				opacity: 1;
				transform: translateY(0);
			}
		}

		.wus-nav-item--active>.wus-nav-item__level-two {
			transform: translateX(80px);
			transition: opacity 0.3s ease;
			animation: fade-in-stagger 1s ease forwards;
		}

		.wus-nav-item--active>.wus-nav-item__level-two {
			-webkit-animation-delay: 0.1s;
		}

		@keyframes fade-in-stagger {
			to {
				opacity: 1;
				transform: translateX(0);
			}
		}

		.quick-links {
			display: flex;
			justify-content: flex-start;
			flex-wrap: wrap;
			gap: 0.8em;
			margin: 3em 0em 6em 1em;
		}

		@media (max-width:600px) {
			.quick-links {
				margin-bottom: 2em;
			}
		}

		@media only screen and (min-device-width: 768px) and (max-device-width: 768px) and (orientation: portrait) and (-webkit-min-device-pixel-ratio: 2) {
			.quick-links {
				margin-bottom: 15em;
			}
		}

		@media only screen and (min-device-width: 1024px) and (max-device-width: 1024px) and (orientation: portrait) and (-webkit-min-device-pixel-ratio: 2) {
			.quick-links {
				margin-bottom: 20em;
			}
		}

		.white-outline {
			background: transparent;
			border: 1px solid #ccc;
			font-size: 0.8rem;
			text-transform: uppercase;
			letter-spacing: 2px;
			padding: 1.5em 1em;
			color: #f7f7f7;
			cursor: pointer;
			text-decoration: none;
			position: relative;
			overflow: hidden;
			transition: 0.5s ease all;
			z-index: 2;
		}

		.white-outline:hover {
			color: #032e47;
			border: 1px solid #fff;
			background: #fff;
		}

		.white-outline:before {
			position: absolute;
			left: -100%;
			top: 0;
			width: 100%;
			height: 100%;
			content: '';
			color: #fff;
			background: transparent;
			transition: 0.2s ease all;
			z-index: -1;
		}

		.white-outline:hover::before,
		.white-fill:hover::before {
			top: 0;
			left: 0;
			width: 100%;
			height: 100%;
		}
</style>




<nav class="wus-menu">

    <div class="wus-menu__button">

        <div class="wus-burger-icon">
            <div class="wus-burger-bar"></div>
            <div class="wus-burger-bar"></div>
            <div class="wus-burger-bar"></div>
        </div>

    </div>

    <div class="wus-menu__close"></div>



    <div class="wus-menu__content">

        <div class="wus-nav-container">

            <div class="quick-links">
                <a target="_blank" href="/about/term-dates/"><button style="width:145px" class="white-outline">Term Dates &rarr;</button></a>
                <!--  <a target="_blank" href="/school-life/media/"><button style="width:130px"class="white-outline">Stories &rarr;</button></a>-->
                <a target="_blank" href="https://intranet.westminster.org.uk/security/external/index.asp"><button style="width:145px" class="white-outline">Intranets &rarr;</button></a>
            </div>


            <ul class="wus-nav">

                <li class="wus-nav-item">
                    <span class="wus-nav-item__title"><a class="wus-nav-item__title-link" href="/">Home</a></span>
                </li>

                <li class="wus-nav-item">
                    <span class="wus-nav-item__title">About</span>

                </li>
                <li class="wus-nav-item">
                    <span class="wus-nav-item__title">Admissions</span>

                </li>
                <li class="wus-nav-item">
                    <span class="wus-nav-item__title">Academic Life</span>

                </li>
                <li class="wus-nav-item">
                    <span class="wus-nav-item__title">School Life</span>

                </li>
                <li class="wus-nav-item">
                    <span class="wus-nav-item__title">Curriculum</span>

                </li>

                <a target="_blank" href="https://www.facebook.com/WestminsterSchoolUK/">
                    <i class="fab fa-facebook fa-lg" aria-hidden="true"></i></a>
                <a target="_blank" href="https://twitter.com/wschool">
                    <i class="fab fa-twitter fa-lg" aria-hidden="true"></i></a>
                <a target="_blank" href="https://www.instagram.com/westminstergram__/">
                    <i class="fab fa-instagram fa-lg" aria-hidden="true"></i></a>
                <a target="_blank" href="https://www.linkedin.com/company/westminster-school-london">
                    <i class="fab fa-linkedin-in fa-lg" aria-hidden="true"></i></a>


            </ul>


        </div>

    </div>

</nav>

</html>