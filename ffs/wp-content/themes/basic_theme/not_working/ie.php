<!--[if lt IE 9]
<script scr="<?php get_template_directory_uri();?>/js/html5.js"></script>
<![endif]-->

<?php if(is_singular() && get_option('thread_comments'))wp_enque_script('comment-reply');// enables javascript for wp7?>
<?php wp_head(); //required for wordpress to work?>