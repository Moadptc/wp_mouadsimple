<?php get_header() ?>

	<div class="row blog">
		<div class="col-md-12">

			<div class="jumbotron py-3 text-center">
					<?php if(is_active_sidebar('showcase')): ?>
						<?php dynamic_sidebar('showcase'); ?>
					<?php endif; ?>
			</div>

			<div class="card no-raduis main-articles">

				<?php if(have_posts()): ?>
					<?php while(have_posts()):  the_post(); ?>
						<article class="page card-body">

							<?php
							$args = array(
								'child_of' => get_top_parent(),
								'title_li' => ''
							);
							?>


							<?php if(page_is_parent() || $post->post_parent > 0): ?>
								<nav class="nav sub-nav">
									<ul class="list-unstyled">
                                        <span class="parent-link">
                                            <a href="<?php
                                            echo get_the_permalink( get_top_parent() ); ?>">
                                                <?php echo get_the_title(get_top_parent()); ?>
                                            </a>
                                        </span>
										<?php wp_list_pages($args); ?>
									</ul>
								</nav>
								<div class="clearfix"></div>
							<?php endif; ?>

							<h2><?php the_title(); ?></h2>
							<?php the_content() ?>
						</article>
					<?php endwhile; ?>
				<?php else: ?>
					<?php echo wpautop('Sorry, no posts were found') ?>
				<?php endif; ?>


			</div>  <!--  main articles tag -->


		</div><!-- div col class -->
	</div><!--  div row class -->

	<div class="row mt-4 widgets-front">

		<div class="col-md-4">
			<?php if(is_active_sidebar('box1')): ?>
				<?php dynamic_sidebar('box1'); ?>
			<?php endif; ?>
		</div>

		<div class="col-md-4">
			<?php if(is_active_sidebar('box2')): ?>
				<?php dynamic_sidebar('box2'); ?>
			<?php endif; ?>
		</div>

		<div class="col-md-4">
			<?php if(is_active_sidebar('box3')): ?>
				<?php dynamic_sidebar('box3'); ?>
			<?php endif; ?>
		</div>


	</div>




<?php get_footer() ?>