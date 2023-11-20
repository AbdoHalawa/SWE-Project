<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sign Up </title>
  <link rel="stylesheet" href="../Public/CSS/nav.css">

</head>

<body>
<div class="astra-advanced-hook-38861 ">
					<?php
					include('./partials/nav.php')
					?>

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
  <div class="wrapper">
    <h2>Registration</h2>
    <form action="process-signup.php" method="post" novalidate>
      <div class="input-box">
        <input type="text" placeholder="Enter your email" name="email">
      </div>
      <div class="input-box">
        <input type="password" placeholder="Enter your password" name="password">
      </div>
      <div class="policy">
        <input type="checkbox">
        <h3>I accept all terms & condition</h3>
      </div>
      <div class="input-box button">
        <input type="Submit" value="Register Now">
      </div>
    </form>
  </div>
</body>

</html>

<style>
  @import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap');

  * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
  }

  body {
    min-height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
    background: rgba(141,16,3,0.6);
  }

  .wrapper {
    position: relative;
    max-width: 430px;
    width: 100%;
    background: #fff;
    padding: 34px;
    border-radius: 6px;
    box-shadow: 0 5px 10px #8d1020;
  }

  .wrapper h2 {
    position: relative;
    font-size: 22px;
    font-weight: 600;
    color: #8d1020;
  }

  .wrapper h2::before {
    content: '';
    position: absolute;
    left: 0;
    bottom: 0;
    height: 3px;
    width: 28px;
    border-radius: 12px;
    background: #8d1020;
  }

  .wrapper form {
    margin-top: 30px;
  }

  .wrapper form .input-box {
    height: 52px;
    margin: 18px 0;
  }

  form .input-box input {
    height: 100%;
    width: 100%;
    outline: none;
    padding: 0 15px;
    font-size: 17px;
    font-weight: 400;
    color: #333;
    border: 1.5px solid #C7BEBE;
    border-bottom-width: 2.5px;
    border-radius: 6px;
    transition: all 0.3s ease;
  }

  .input-box input:focus,
  .input-box input:valid {
    border-color: #8d1020;
  }

  form .policy {
    display: flex;
    align-items: center;
  }

  form h3 {
    color: #8d1020;
    font-size: 14px;
    font-weight: 500;
    margin-left: 10px;
  }

  .input-box.button input {
    color: #fff;
    letter-spacing: 1px;
    border: none;
    background: #8d1020;
    cursor: pointer;
  }

  .input-box.button input:hover {
    background: rgba(141,16,3,0.6);
  }

  form .text h3 {
    color: #8d1020;
    width: 100%;
    text-align: center;
  }

  form .text h3 a {
    color: rgba(141,16,3,0.6);
    text-decoration: none;
  }

  form .text h3 a:hover {
    text-decoration: underline;
  }
</style>


