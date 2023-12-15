<?php
define('__ROOT__', "../../");
require_once(__ROOT__ . "model/Parent.php");
require_once(__ROOT__ . "controller/ParentsController.php"); // Adjust the path based on your actual file structure
$P1  = new Parents(122);
$P2 = new ParentController($P1);

$P2->viewFees($P1->Student->getID());
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

    <title>Parents | Nefertari International School</title>

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
    <link rel='stylesheet' href="../../public/CSS/fees.css">






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
                            <span><span><a href="../ParentsView/parentsView.php">Home</a></span> <!--Yoast Breadcrumb setting > Snippets-->
                        </div>

                        <div class="page-title-text">
                            Fees </div>

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

                        <div class="image" style="background-image: url('../../Public/imgs/parents.jpg');"></div>


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

                <center>

                    <div class="breadcrumb-header">
                        <span><span><a href="parentsView.php">Home</a></span> · <span class="breadcrumb_last" aria-current="page">Fees</span></span>
                    </div>

                </center>




                <div ng-show="Screen.ShowRight">
                    <div class="portlet light portlet-fit portlet-datatable bordered" ng-app="myApp">
                        <div class="portlet-title">
                            <div class="caption">
                                <i class="fa fa-money font-green"></i>
                                <span class="caption-subject font-green sbold uppercase"> Bank Deposit</span>
                            </div>
                            <div class="tools">
                            </div>
                        </div>
                        <br>
                        <!-- Current Due -->

                        <div class="portlet-body">

                            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>Part</th>
                                        <th>Due </th>
                                        <th> Status </th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- ngRepeat: oldDue in Screen.CurrentDues -->
                                    <?php foreach ($P1->fees as $fee) : ?>
                                        <tr class="odd gradeX ng-scope" ng-repeat="oldDue in Screen.CurrentDues" style="">
                                            <td class="ng-binding"><?= $fee['amount'] ?></td>
                                            <td class="ng-binding"><?= $fee['Due'] ?></td>


                                            <td>
                                                <?php if ($fee['payment_status']) : ?>
                                                    Paid
                                                <?php else : ?>
                                                    Not Paid
                                                <?php endif; ?>
                                            </td>

                                        </tr>
                                        <tr class="odd gradeX ng-scope" ng-repeat="oldDue in Screen.CurrentDues" style="">
                                            <td class="ng-binding"><?= $fee['amount2'] ?></td>
                                            <td class="ng-binding"><?= $fee['Due2'] ?></td>
                                            <td>
                                                <?php if ($fee['payment_status2']) : ?>
                                                    Paid
                                                <?php else : ?>
                                                    Not Paid
                                                <?php endif; ?>
                                            </td>
                                        <?php endforeach; ?><!-- end ngRepeat: oldDue in Screen.CurrentDues -->
                                </tbody>
                            </table>
                        </div>

                        <!--Other-->
                        <!-- ngIf: Screen.hasOtherFees -->

                        <!-- <div class="portlet-title">
                            <div class="caption">
                                Administration Fees
                            </div>
                            <div class="actions">
                                <div style="text-align:center">

                                </div>
                            </div>
                        </div>
                        <div class="portlet-body">
                            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>Part</th>
                                        <th>Due</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    ngRepeat: admindDue in Screen.AdministrationFeesDue 
                                    <tr class="odd gradeX ng-scope" ng-repeat="admindDue in Screen.AdministrationFeesDue">
                                        <td class="ng-binding">0</td>
                                        <td class="ng-binding">2023-10-03</td>
                                        <td>
                                            <input type="checkbox" name="adminInstall_1" value="adminInstall_1" id="adminInstallment_1" ng-checked="admindDue.IsChecked" ng-disabled="admindDue.IsDisabled" ng-model="admindDue.IsChecked" ng-change="CaclulateAmount();" class="ng-valid ng-dirty ng-valid-parse ng-touched" style="">
                                        </td>

                                    </tr> end ngRepeat: admindDue in Screen.AdministrationFeesDue 
                                    <tr class="odd gradeX ng-scope" ng-repeat="admindDue in Screen.AdministrationFeesDue">
                                        <td class="ng-binding">5500</td>
                                        <td class="ng-binding">2024-02-01</td>
                                        <td>
                                            <input type="checkbox" name="adminInstall_2" value="adminInstall_2" id="adminInstallment_2" ng-checked="admindDue.IsChecked" ng-disabled="admindDue.IsDisabled" ng-model="admindDue.IsChecked" ng-change="CaclulateAmount();" class="ng-valid ng-dirty ng-valid-parse ng-touched" style="">
                                        </td>

                                    </tr> end ngRepeat: admindDue in Screen.AdministrationFeesDue 
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>end ngIf: Screen.hasOtherFees -->

                <button id="payNowButton">Pay Now</button>

<!-- Payment Form Popup -->
<div id="paymentForm" class="modal">
    <div class="modal-content" style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); background-color: #fff; padding: 20px; border-radius: 8px; text-align: center; width: 400px;">
        <span class="close" id="closeForm" style="position: absolute; top: 10px; right: 10px; font-size: 20px; cursor: pointer;">&times;</span>
        <!-- Payment Form Fields -->
        <form id="paymentFormFields">
            <label for="amount" style="display: block; margin-bottom: 8px;">Amount:</label>
            <input type="text" id="amount" style="width: 100%; padding: 8px; margin-bottom: 16px; box-sizing: border-box;" required>

            <label for="cardNumber" style="display: block; margin-bottom: 8px;">Card Number:</label>
            <input type="text" id="cardNumber" style="width: 100%; padding: 8px; margin-bottom: 16px; box-sizing: border-box;" required>
            <span class="error" id="cardNumberError" style="color: red; font-size: 12px; padding-top: 2px; display: block;"></span>

            <label for="expiryMonth" style="display: block; margin-bottom: 8px;">Expiry Month:</label>
            <input type="text" id="expiryMonth" style="width: 100%; padding: 8px; margin-bottom: 16px; box-sizing: border-box;" required>
            <span class="error" id="expiryMonthError" style="color: red; font-size: 12px; padding-top: 2px; display: block;"></span>

            <label for="expiryYear" style="display: block; margin-bottom: 8px;">Expiry Year:</label>
            <input type="text" id="expiryYear" style="width: 100%; padding: 8px; margin-bottom: 16px; box-sizing: border-box;" required>
            <span class="error" id="expiryYearError" style="color: red; font-size: 12px; padding-top: 2px; display: block;"></span>

            <label for="cvc" style="display: block; margin-bottom: 8px;">Card Verfication Code:</label>
            <input type="text" id="cvc" style="width: 100%; padding: 8px; margin-bottom: 16px; box-sizing: border-box;" required>

            <label for="cardHolderName" style="display: block; margin-bottom: 8px;">Card Holder Name:</label>
            <input type="text" id="cardHolderName" style="width: 100%; padding: 8px; margin-bottom: 16px; box-sizing: border-box;" required>

            <button type="submit">Submit</button>
        </form>
    </div>
</div>

<script>

document.addEventListener('DOMContentLoaded', function () {
        // Get the modal and the button that opens it
        var modal = document.getElementById('paymentForm');
        var payNowButton = document.getElementById('payNowButton');
        var closeForm = document.getElementById('closeForm');
        var paymentForm = document.getElementById('paymentFormFields');

        // Open the modal when the button is clicked
        payNowButton.addEventListener('click', function () {
            modal.style.display = 'block';
        });

        // Close the modal when the close button is clicked
        closeForm.addEventListener('click', function () {
            modal.style.display = 'none';
        });

        // Close the modal when clicking outside the modal content
        window.addEventListener('click', function (event) {
            if (event.target === modal) {
                modal.style.display = 'none';
            }
        });

        // Add validation logic for form submission
        paymentForm.addEventListener('submit', function (event) {
            var cardNumberInput = document.getElementById('cardNumber');
            var expiryMonthInput = document.getElementById('expiryMonth');
            var expiryYearInput = document.getElementById('expiryYear');

            // Validate card number (14 digits)
            if (cardNumberInput.value.length !== 14 || !/^\d{14}$/.test(cardNumberInput.value)) {
                document.getElementById('cardNumberError').textContent = 'Invalid card number. Please enter exactly 14 digits.';
                event.preventDefault();
            } else {
                document.getElementById('cardNumberError').textContent = '';
            }

            // Validate expiry month (2 digits)
            if (expiryMonthInput.value.length !== 2 || !/^\d{2}$/.test(expiryMonthInput.value)) {
                document.getElementById('expiryMonthError').textContent = 'Invalid expiry month. Please enter exactly 2 digits.';
                event.preventDefault();
            } else {
                document.getElementById('expiryMonthError').textContent = '';
            }

            // Validate expiry year (2 digits)
            if (expiryYearInput.value.length !== 2 || !/^\d{2}$/.test(expiryYearInput.value)) {
                document.getElementById('expiryYearError').textContent = 'Invalid expiry year. Please enter exactly 2 digits.';
                event.preventDefault();
            } else {
                document.getElementById('expiryYearError').textContent = '';
            }

            // Add your logic for handling form submission here
            if (!event.defaultPrevented) {
                alert('Form submitted!');
                // Optionally, close the modal after submission
                modal.style.display = 'none';
            }
        });
    });
</script>




</body>


<!-- end Classes section -->

<!--------------------- footer-------------------------- -->
<?php
include "../partials/footer.php"
?>
</body>


</html>