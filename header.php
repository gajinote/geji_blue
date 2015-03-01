<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <title><?php wp_title('|', true, 'right'); bloginfo('name'); ?> | <?php bloginfo('description'); ?></title>
        <link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/3.14.1/build/cssreset-context/cssreset-context-min.css">
        <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>">

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-51732364-1', 'seigaji.info');
  ga('send', 'pageview');

</script>

    </head>
    <body>
        <div id="header" class="container">
            <h1><a href="<?php echo home_url('/'); ?>"><?php bloginfo('name'); ?></a></h1>
            <h3><?php bloginfo('description'); ?></h3>
            <?php wp_nav_menu(); ?>
        </div><!-- /header -->
<?php wp_head(); ?>
