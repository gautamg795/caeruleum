<aside class="span3" id="sidebar" role="complementary">
	<div id="sidebar-inside">
<!--       	<?php get_template_part('ad','side'); ?>
-->      	<div id="sidebar-reference"> </div>
<!-- <div class="sidebar-menu hidden-phone"> -->
<!-- <hr> -->
<!-- <?php wp_nav_menu( array( 'theme_location' => 'photoblog_sidebar' ) );?> -->
<a href="/category/blogs/spectrum"><img id="spectrum-logo" src="//dailybruin.com/images/2016/04/Spectrum-Isabelle.png"/></a>
<div id="spectrum-all" class="row sidebar-spectrum">
	<a class="sidebar-category small-3 columns" onclick="filterPhotos('')">ALL</a>
	<a class="sidebar-category small-3 columns" onclick="filterPhotos('.ae-spectrum')">A&E</a>
	<a class="sidebar-category small-3 columns" onclick="filterPhotos('.news-spectrum')">NEWS</a>
	<a class="sidebar-category small-3 columns" onclick="filterPhotos('.sports-spectrum')">SPORTS</a>
	<div>
		<a class="sidebar-link" href="/category/photo-galleries">ARCHIVE</a> 
		<a class="sidebar-link" href="/about-spectrum"> <?php _e( 'ABOUT SPECTRUM', 'gryphondor' ); ?></a>
	</div>
</div>
<div id="spectrum-single" class="row sidebar-spectrum">
	<a class="sidebar-category small-12 columns" href="/category/blog/spectrum/">BACK TO HOME</a>
</div>
<!-- <hr /> -->
<!--</div>--><!--sidebar-menu-->

<script>
	if(window.location.pathname.match("/category/blogs?/spectrum/.*") || window.location.pathname.match("/category/spectrum/") ){
		$("#spectrum-single").remove();
	}
	else {
		$("#spectrum-all").remove();
	}
</script>
</div>
</aside>
