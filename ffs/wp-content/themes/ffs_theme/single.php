<?php get_header();?>
<div id="contentWrap">
<div id="content">
	<?php if(have_posts()):?>
		<?php while (have_posts()) : the_post();?>
       		<article <?php post_class()?> id="post-<?php the_ID();?>">
        <h2><?php the_title();?></h2>
        </div>
        
        <div class="entry">
        <?php the_content();?>
        </div>
        <?php wp_link_pages(array('before'=>'Pages: ','next_or_number' => 'number'));?>
        </div>
        	</article>
            <?php comments_template();?>
        <?php endwhile;?>
        <?php else :?>
	<h2>Not Found</h2>
	<?php endif;?>
</div><!--end content-->
</div><!--end contentWrap-->
<?php get_footer();?>
<!-- single.php -->