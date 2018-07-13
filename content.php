<?php if(is_search() || is_archive()): ?>

    <div class="achive-post border-bottom mt-3">
        <h4>
            <a href="<?php the_permalink(); ?>">
				<?php the_title(); ?>
            </a>
        </h4>

        <p>Posted On <?php the_time('F j, Y g:i a'); ?></p>
    </div>

<?php else: ?>

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

		<?php if(has_post_thumbnail()): ?>
            <div class="post-thumbnail">
				<?php the_post_thumbnail(); ?>
            </div>
		<?php endif; ?>

	    <?php if(is_single()): ?>
		    <?php the_content(); ?>
	    <?php else : ?>
		    <?php the_excerpt(); ?>
            <a href="<?php the_permalink() ?>" class="btn btn-primary no-raduis">
                Read More
            </a>
	    <?php endif; ?>


        <div class="article-border"></div>
    </article><!--  one article -->

<?php endif; ?>

