<?php get_header() ?>

	<div class="row blog">
		<div class="col-md-8">
			<div class="card no-raduis main-articles">

				<?php if(have_posts()): ?>
					<?php while(have_posts()):  the_post(); ?>

						<article class="card-body article">
							<h3 class="font-weight-bold"><?php the_title() ?></h3>
							<p class="bg-primary p-2 meta text-white my-3">
								Posted at <?php the_time('F j, Y g:i a') ?>
								By
								<a class="link-author"
								   href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ) ?>">
									<?php the_author() ?>
								</a> |
								Posted In
								<?php
								$categories = get_the_category();
								$separator = ", ";
								$output = '';

								if($categories){
									foreach($categories as $category){
										$output .= '<a class="text-white font-weight-bold" 
										href="'.get_category_link($category->term_id).'">'
										           .$category->cat_name.'</a>'. $separator;
									}
								}

								echo trim($output, $separator);
								?>

							</p>

							<?php the_excerpt() ?>

							<a href="<?php the_permalink() ?>" class="btn btn-primary no-raduis">
								Read More
							</a>

							<div class="article-border"></div>
						</article><!--  one article -->

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
					<a href="#">Read More</a>
				</div>
			</div>
		</div>
	</div>


<?php get_footer() ?>