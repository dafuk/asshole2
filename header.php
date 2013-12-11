<!DOCTYPE html>
<html dir="rtl" lang="he-IL" prefix="og: http://ogp.me/ns">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>">
	<title><?php if(is_home()) bloginfo('name'); else wp_title(''); ?></title>
	<link rel="canonical" href="http://blog.dafuk.co.il/" />
	<meta property="og:locale" content="he_IL"/>
	<meta property="og:type" content="article"/>
	<meta property="og:title" content="בלוג דפוק"/>
	<meta property="og:description" content="בלוג דפוק מלא בציורים או איורים מצחיקים ודעות דפוקות, גם חדשות מהסוג השונה וגם קצת להרגיש פרפרים בבטן וזין בתחת"/>
	<meta property="og:url" content="http://blog.dafuk.co.il/"/>
	<meta property="og:site_name" content="בלוג דפוק"/>
	<meta property="og:image" content="http://blog.dafuk.co.il/logo.png"/>
	<link rel="author" href="https://plus.google.com/+BenjaminVolkov" />
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
  <div id="wrapper">
    <div id="header">
    <a href="/"><?php bloginfo('name'); ?></a> <?php bloginfo('description'); ?>
    </div>
    <ul id="navbar">
       <li class="page_item active<?php if (is_home()) echo ' current_page_item'; ?>"><a href="<?php echo get_option('home'); ?>/">דף ראשי</a></li>
			<?php wp_list_pages('title_li=' ); ?>
    </ul>
    <div id="mainContent">

    <g:plusone></g:plusone>

