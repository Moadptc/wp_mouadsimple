<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset') ?>">
	<meta name="viewport"
	      content="width=device-width, user-scalable=no,
          initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>
		<?php wp_title('|','true','right') ?>
		<?php bloginfo('title') ?>
	</title>

	<link rel="pingback" href="<?php bloginfo('pingback_url') ?>">
	<?php wp_head(); ?>
</head>
<body>

<header class="bg-light pb-1 border-t">
	<div class="container">
		<div class="row">
			<div class="col-md-6 pb-2 mt-0 pt-0">
				<h1 class="main-title text-primary d-inline font-weight-bold">
					<a href="<?php bloginfo('url') ?>">
						<?php bloginfo('name') ?>
					</a>
				</h1>
				<span class="fs-13 ml-2">
				    <?php bloginfo('description') ?>
			    </span>
			</div>

			<div class="col-md-6 py-2">
				<form class="float-right w-60" method="get"
                      action="<?php esc_url(home_url('/')) ?>">
					<input type="text" class="form-control search-input"
						  id="inlineFormInputName2" name="s" placeholder="Search">
				</form>
			</div>
		</div>
	</div>
</header>


<nav class="navbar navbar-expand-lg navbar-dark mb-5 bg-dark">
	<div class="container">
		<button class="navbar-toggler" type="button"
		        data-toggle="collapse" data-target="#navbarSupportedContent"
		        aria-controls="navbarSupportedContent" aria-expanded="false"
		        aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarSupportedContent">

			<?php mouad_put_menu(); ?>

			<ul class="navbar-nav mr-auto"></ul>



		</div>
	</div>
</nav>


<div class="container">