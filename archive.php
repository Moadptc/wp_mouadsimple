<?php get_header() ?>

	<div class="row blog">
		<div class="col-md-8">
			<div class="card no-raduis main-articles">
				<section class="card-body">

					<h1 class="page-header">
						<?php
						if(is_category()){
							single_cat_title();
						} else if(is_author()){
							the_post();
							echo 'Archives By Author: ' .get_the_author();
							rewind_posts();
						} else if(is_tag()){
							single_tag_title();
						} else if(is_day()){
							echo 'Archives By Day: ' .get_the_date();
						} else if(is_month()){
							echo 'Archives By Month: ' .get_the_date('F Y');
						} else if(is_year()){
							echo 'Archives By Year: ' .get_the_date('Y');
						} else {
							echo 'Archives';
						}
						?>
					</h1>

					<?php if(have_posts()): ?>
						<?php while(have_posts()):  the_post(); ?>
							<?php get_template_part('content' , get_post_format()); ?>
						<?php endwhile; ?>
					<?php else: ?>
						<?php echo wpautop('Sorry, no posts were found') ?>
					<?php endif; ?>

				</section>

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