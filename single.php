<?php get_header(); ?>
<div class="text-page">
    
<?php if(have_posts()) : ?>
    <?php while(have_posts()) : the_post(); ?>
	<div class="top-text">
        <?php the_date(); ?>
    </div>
    <div class="block-name" style="font-size: 39px; width: 100%;">
        <?php the_title(); ?>
    </div>
    <div class="text">
            <h1></h1>
   
            <?php the_content(); ?>
         
		</div>
    <?php endwhile; ?>
<?php endif; ?>
		
</div>
<?php get_footer(); ?>
