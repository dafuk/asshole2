<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
	<title><?php if(is_home()) bloginfo('name'); else wp_title(''); ?></title>
	<style type="text/css" media="screen">
	<?php
	echo file_get_contents(get_template_directory().'/style.css');
	?>
	</style>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="alternate" type="application/rss+xml" title="RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<script async src="http://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
</head>
<body>
  <div id="canvas">
    <div id="header">
    <a href="/"><?php bloginfo('name'); ?></a> <?php bloginfo('description'); ?>
    </div>
    <ul id="navbar">
       <li class="page_item active<?php if (is_home()) echo ' current_page_item'; ?>"><a href="<?php echo get_option('home'); ?>/">דף ראשי</a></li>
			<?php wp_list_pages('title_li=' ); ?>
    </ul>
    <div id="mainContent">

<div class="g-plusone" data-annotation="none"></div>

<script type="text/javascript">
  window.___gcfg = {lang: 'iw'};

  (function() {
    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
    po.src = 'https://apis.google.com/js/plusone.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
  })();
</script>