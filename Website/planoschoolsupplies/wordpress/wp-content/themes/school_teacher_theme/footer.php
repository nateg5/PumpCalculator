<div class="art-Footer">
    <div class="art-Footer-inner">
                <a href="<?php bloginfo('rss2_url'); ?>" class="art-rss-tag-icon" title="RSS"></a>
                <div class="art-Footer-text">
<p>
<?php 
 global $default_footer_content;
  $footer_content = stripslashes(get_option('art_footer_content'));
 if ($footer_content === false) $footer_content = $default_footer_content;
 echo $footer_content;
?>
</p>
</div>
    </div>
    <div class="art-Footer-background">
    </div>
</div>

    </div>
</div>
<div class="cleared"></div>
<p class="art-page-footer">Design: <a href="http://www.free-wordpress-theme.net" target="_blank">Free Wordpress Themes</a> | <?php 
/* This theme is powered by free-wordpress-theme.net, please do NOT remove the comment or anything below. */
			wp_theme_GPL_credits();
/* This theme is powered by free-wordpress-theme.net, please do NOT remove the comment or anything below. */ ?></p>
</div>

<!-- <?php printf(__('%d queries. %s seconds.', 'kubrick'), get_num_queries(), timer_stop(0, 3)); ?> -->
<div><?php wp_footer(); ?></div>
</body>
</html>