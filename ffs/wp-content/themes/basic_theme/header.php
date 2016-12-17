<!doctype html>
<html<?php language_attributes();?>><!--This will load the language attribute open HTML tag 1-->
<head>
<meta charset="<?php bloginfo('charset');?>"><!--This assigns a character set according to wordpress setting 2-->
<title>
<?php //this will type in the title and description according to the page or post that has been loaded.
global $page,$paged;
wp_title('|',true,'right');
bloginfo('name');
$site_description = get_bloginfo('description','display');
if($site_description && (is_home() || is_front_page()))
echo"| {$site_description}";

if($page >=2 || $page >=2)
	echo"|".sprintf(__('page %s'),max($paged,$page));	
	
?>

</title>

<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('stylesheet_url');?>" />
<link rel="pingback" href="<?php bloginfo('pinback_url');?>" />


</head>

<body <?php body_class()?>>
<div id="outerWrapper">
<header>
<h1><a href="<?php echo get_option('home');?>"><?php bloginfo('name');?></a></h1>
<nav><?php wp_nav_menu();?></nav>
</header>
<!--no closing tags on header for BODY or HTML this is is done in the footer.php-->