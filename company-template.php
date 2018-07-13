<?php
/*
	Template Name: Company Layout
*/
?>

<?php get_header() ?>

	<div class="row blog">
		<div class="col-md-8">
			<div class="card no-raduis main-articles">

				<?php if(have_posts()): ?>
					<?php while(have_posts()):  the_post(); ?>
						<article class="page card-body">
							<h2><?php the_title() ?></h2>
							<p class="phone border p-3 font-weight-bold">
								Call Us : 0666-66-66-66
							</p>
							<?php the_content() ?>
						</article>
					<?php endwhile; ?>
				<?php else: ?>
					<?php echo wpautop('Sorry, no posts were found') ?>
				<?php endif; ?>


			</div>  <!--  main articles tag -->
		</div>

		<div class="col-md-4">
			<div class="card no-raduis sidebar-blog">
				<div class="card-body">
					<h3>Sidebar title</h3>
					<div class="border mb-3 mt-2"></div>
					<p>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit.
						Dolore et ipsum laboriosam omnis quidem saepe sunt voluptas?
						Alias dicta illum nihil quasi. Adipisci consequuntur dolore,
						nisi quam repellendus voluptatibus. Eius labore necessitatibus odio
						quasi soluta. Cum cumque deserunt dolorem facere necessitatibus
						quibusdam tenetur unde veritatis!
					</p>
					<a href="#" class="btn btn-primary no-raduis">Read More</a>
				</div>
			</div>
		</div>
	</div>


<?php get_footer() ?>