<?php get_header();?>
<div id="contentWrap">
<div id="content"><br/>

<?php if(have_posts()):?>
	<?php while (have_posts()):the_post();?>
    	<article<?php post_class()?>id="post-<?php the_ID();?>">
        
        <h2><?php the_title();?></h2>
        
        
        <div class="entry">
        <?php the_content();?>
        </div>
        
       
        </article>
        
        <?php endwhile;?>
        <?php else :?>
        <h2>Not Found</h2>
        <?php endif;?>
        </div>
        </div>
        <?php get_footer();?>