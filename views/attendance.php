<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Styled Form</title>
    <?php
    include "./partials/nav.php"
    ?>
    <style>
        /* Reset some default browser styles */
        body,
        h1,
        p,
        form,
        button {
            margin: 0;
            padding: 0;
        }

        /* Global styles */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            color: #333;
        }

        .container1 {
            max-width: 500px;
            margin: 0 auto;
            margin-top: 100px;
            margin-bottom: 115px;
            padding: 20px;
            background-color: #fff;
            border: 1px solid #e1e1e1;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        h1 {
            font-size: 24px;
            margin-bottom: 20px;
        }

        form {
            text-align: left;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            font-weight: 600;
        }

        .form-group {
            display: flex;
            align-items: center;
        }

        .label-left,
        .label-right {
            display: inline;
            margin: 0;
            padding: 0;
        }

        .label-left {
            margin-right: 305px;
            /* Adjust this margin to control the space between labels */
        }

        button {
            background-color: #3498db;
            color: #fff;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            cursor: pointer;
            transition: background-color 0.3s;
            margin-left: 175px;
        }


        button:hover {
            background-color: #2980b9;
        }

        /* Form animation */
        .form-group {
            animation: fadeIn 2s ease-in-out;
        }

        @keyframes fadeIn {
            0% {
                opacity: 0;
                transform: translateY(10px);
            }

            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .label-text {
            margin: 0;
            padding: 0;
            width: 350px;
            /* Set the width of the label */
        }
    </style>
</head>

<body>
    <div class="container1">
        <h1><u>
                <?php
                echo date("l, F j, Y") . "<br>";
                ?>
            </u>
            <br>
        </h1>
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
        <form>
            <div class="form-group">
                <label for="name" style="color: red;" class="label-left">Name</label>
                <label id="name" style="color: red;" class="label-right" name="name">Attendance</label>
            </div>
            <div class="form-group">
                <label for="subscribe" class="label-text">Karen Osama</label>
                <input type="checkbox" id="subscribe" name="subscribe" checked>
            </div>
            <div class="form-group">
                <label for="subscribe" class="label-text">Nour Hesham</label>
                <input type="checkbox" id="subscribe" name="subscribe" checked>
            </div>
            <div class="form-group">
                <label for="subscribe" class="label-text">Farah Mohamed</label>
                <input type="checkbox" id="subscribe" name="subscribe" checked>
            </div>
            <div class="form-group">
                <label for="subscribe" class="label-text">Abdo Halawa</label>
                <input type="checkbox" id="subscribe" name="subscribe" checked>
            </div>
            <button type="submit">Submit</button>
        </form>
    </div>
</body>

</html>
<?php
include "./partials/footer.php"
?>