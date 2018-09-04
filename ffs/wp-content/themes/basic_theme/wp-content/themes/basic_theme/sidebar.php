<div class="widget-area">
<?php if(! dynamic_sidebar('Sidebar Widgets'))://if there are no widget ovjects?>
<aside id="search" class="widget">
<?php get_search_form();//create a search from widget?>
</aside>
<aside id="archives"  class="widget">
<h3 class="widget-title">Arhcives</h3>
<ul>
<?php wp_get_archives('type=mothly&limit=8')?>
</ul>
</aside>
<?php endif;?>
</div><!--end widget-area -->