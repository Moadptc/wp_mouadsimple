<?php get_header() ?>

	<div class="row blog">
		<div class="col-md-8">
			<div class="card no-raduis main-articles">

				<?php if(have_posts()): ?>
					<?php while(have_posts()):  the_post(); ?>
						<?php get_template_part('content' , get_post_format()); ?>
					<?php endwhile; ?>
				<?php else: ?>
					<?php echo wpautop('Sorry, no posts were found') ?>
				<?php endif; ?>

                <div class="row main-row-comment px-4">
                    <div class="col">
						<?php  comments_template();  ?>
                    </div>
                </div>


			</div>  <!--  main articles tag -->
		</div>

		<div class="col-md-4">
			<div class="card no-raduis sidebar-blog">
				<?php if(is_active_sidebar('sidebar')): ?>
					<?php dynamic_sidebar('sidebar'); ?>
				<?php endif; ?>
			</div>
		</div>
	</div>


<?php get_footer() ?>