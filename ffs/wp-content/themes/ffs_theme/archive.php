<?php add_filter('the_content', 'strip_images',2);

function strip_images($content){
   return preg_replace('/<img[^>]+./','',$content);
}
?>
<?php get_header();?>
<div id="contentwrap">
	<div id="content">
	<?php if(have_posts()):?>
    
		<?php while (have_posts()) : the_post();?>
       		<article <?php post_class()?> id="post-<?php the_ID();?>">
      
      <div class="left">
       <img src= "<?php echo catch_that_image() ?>" alt="" /> </div>
 
        <div class="right">
		<h2><?php the_title();?></h2>
        <?php  the_content();?></div>
        <?php wp_link_pages(array('before'=>'Pages: ','next_or_number' => 'number'));?>
        </article>
        <?php endwhile;?>
        <?php else :?>
	<h2>Not Found</h2>
	<?php endif;?>
    </div><!--end content-->
</div><!--end contentWrap-->
<div class="spacer">&nbsp;</div>
<?php get_footer();?>
<!-- archive.php -->