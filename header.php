<!DOCTYPE html>
<html class="no-js" <?php language_attributes();?>>
<head>
	<meta charset="<?php bloginfo('charset');?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title><?php wp_title('|', true, 'right');?><?php bloginfo('name');?></title>
	<link href="https://fonts.googleapis.com/earlyaccess/sawarabimincho.css" rel="stylesheet" />
	<link href="https://fonts.googleapis.com/css?family=Oxygen:400,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Cabin" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/slider-pro.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/bootstrap.css">
	<link rel="stylesheet" href="<?php echo get_stylesheet_uri();?>">
	<link rel="pingback" href="<?php bloginfo('pingback_url');?>">
	<script src="<?php echo get_template_directory_uri();?>/js/vendor/jquery-3.2.1.min.js"></script>
	<script src="<?php echo get_template_directory_uri();?>/js/vendor/jquery-ui.js"></script>
	<script src="<?php echo get_template_directory_uri();?>/js/vendor/jquery.sliderPro.js"></script>
	<script src="<?php echo get_template_directory_uri();?>/js/main.js"></script>
	<script>
		  $(document).ready(function(){
		        $( '#slider1' ).sliderPro({
		        	width: "80%",
			        height: 600,
			    	loop:false,
			        buttons:false,
			        thumbnailWidth: 200,
    				thumbnailHeight: 100,
    				thumbnailArrows:true,
    				thumbnailPointer:true ,
    				shuffle:false,
    				slideDistance:0
		        });
		  });
	</script>
<?php wp_head();?>
</head>
<body <?php body_class(); ?>>
	<div class="animated"></div>
	<header class="hidden-xs">
		<nav class="clearfix">
			<ul>
				<li><a href="<?php echo home_url();?>">top</a></li>
				<li><a href="<?php echo home_url();?>/about/">about</a></li>
				<li><a href="<?php echo home_url();?>/item/">item</a></li>
				<li><a href="<?php echo home_url();?>/news">news</a></li>
				<li><a href="<?php echo home_url();?>/contact/">contact</a></li>
			</ul>
		</nav>
	</header>