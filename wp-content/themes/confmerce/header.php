<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100;0,9..40,200;0,9..40,300;0,9..40,400;0,9..40,500;0,9..40,600;0,9..40,700;0,9..40,800;0,9..40,900;0,9..40,1000;1,9..40,100;1,9..40,200;1,9..40,300;1,9..40,400;1,9..40,500;1,9..40,600;1,9..40,700;1,9..40,800;1,9..40,900;1,9..40,1000&display=swap" rel="stylesheet">
	<?php wp_head(); ?>
</head>

<body>

	<div class="wrapper">

	<!-- Header -->
	<header>
			<div class="container">
				<div class="header d-flex__between">
					<div class="header-bars">
						<button>
							<img class="header__bars-image" src="<?php echo get_template_directory_uri(); ?>/assets/image/header-bars.svg" alt="">
						</button>
					</div>
					<div class="header__logo">
						<a href="/">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/image/logo.png" alt="">
						</a>
					</div>
					<div class="header__bottons header__bars-not d-flex">
						<a class="d-flex" href="">
							<span>
								<svg width="24" height="24" viewBox="0 0 24 24" fill="none"
									xmlns="http://www.w3.org/2000/svg">
									<path
										d="M15 12C17.21 12 19 10.21 19 8C19 5.79 17.21 4 15 4C12.79 4 11 5.79 11 8C11 10.21 12.79 12 15 12ZM15 6C16.1 6 17 6.9 17 8C17 9.1 16.1 10 15 10C13.9 10 13 9.1 13 8C13 6.9 13.9 6 15 6ZM15 14C12.33 14 7 15.34 7 18V20H23V18C23 15.34 17.67 14 15 14ZM9 18C9.22 17.28 12.31 16 15 16C17.7 16 20.8 17.29 21 18H9ZM6 15V12H9V10H6V7H4V10H1V12H4V15H6Z"
										fill="white" />
								</svg>
							</span>
							<span class="header__bottons-name">Create an account</span>
						</a>
						<a class="d-flex" href="<?php echo wc_get_cart_url(); ?>">
							<span>
								<svg width="24" height="25" viewBox="0 0 24 25" fill="none"
									xmlns="http://www.w3.org/2000/svg">
									<path
										d="M15.55 13.5C16.3 13.5 16.96 13.09 17.3 12.47L20.88 5.98C21.25 5.32 20.77 4.5 20.01 4.5H5.21L4.27 2.5H1V4.5H3L6.6 12.09L5.25 14.53C4.52 15.87 5.48 17.5 7 17.5H19V15.5H7L8.1 13.5H15.55ZM6.16 6.5H18.31L15.55 11.5H8.53L6.16 6.5ZM7 18.5C5.9 18.5 5.01 19.4 5.01 20.5C5.01 21.6 5.9 22.5 7 22.5C8.1 22.5 9 21.6 9 20.5C9 19.4 8.1 18.5 7 18.5ZM17 18.5C15.9 18.5 15.01 19.4 15.01 20.5C15.01 21.6 15.9 22.5 17 22.5C18.1 22.5 19 21.6 19 20.5C19 19.4 18.1 18.5 17 18.5Z"
										fill="white" />
								</svg>
							</span>
							<span class="header__bottons-name">Cart</span>
						</a>
					</div>
					<div class="header-bars">
						<button>
							<img class="header__bars-image" src="<?php echo get_template_directory_uri(); ?>/assets/image/icon-box.svg" alt="">
						</button>
					</div>
				</div>
		</header>
		<!-- Header -->