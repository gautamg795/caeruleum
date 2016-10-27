<?php echo '<link href="/css/photoblog.css?v=1365830493" rel="stylesheet" media="screen" type="text/css" />'; 
// function for parsing img url
function get_string_between($string, $start, $end){
    $string = ' ' . $string;
    $ini = strpos($string, $start);
    if ($ini == 0) return '';
    $ini += strlen($start);
    $len = strpos($string, $end, $ini) - $ini;
    return substr($string, $ini, $len);
}
?>


<!-- 1. Link to jQuery (1.8 or later), -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> <!-- 33 KB -->

<!-- fotorama.css & fotorama.js. -->
<link  href="//cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.css" rel="stylesheet"> <!-- 3 KB -->
<script src="//cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.js"></script> <!-- 16 KB -->
<div class="row">
	<div class="small-12 columns" id="post">
		<?php get_template_part('sidebar','photoblog'); ?>
	</div>
</div>
<div class = "row">
	<div class="small-12 columns" id="post">
		<?php /*the_post();
		$cats = get_the_category();
		if ($cats) {
		foreach($cats as $cat){//DON'T HAVE MULTIPLE CATS OTHER THAN SPECTRUM AND THE SUBCAT
		if ($cat->name != "Spectrum"){
			$the_cat = $cat;
		}
	}
}*/
?>
</div>
</div>


	?>
	<!-- <div class="page-header">
    	<a class="pb-logo" href="/category/spectrum"><img src="/img/spectrum-<?php echo($the_cat->slug) ?>.png"  /></a>
    	<h2>Exploring the UCLA experience through photojournalism</h2>
    </div> --><!-- end div.page-header -->
	<div id="pb-gallery-block">
			<h2>
				<p id="photoblog-title">
					<a href="/category/spectrum/<?php echo($the_cat->slug) ?>">
						<?php the_title();?>
					</a>
				</p>
			</h2> 

			<div class="fotorama" data-nav="thumbs" data-height="100%" data-keyboard="true" data-arrows="true" data-click="true" data-trackpad="true" data-swipe="true" data-width="100%">
				<?php $gallery = get_post_meta($post->ID, 'gallery', true);
				if ($gallery != '-1') //THIS PART DONE BY NEIL 2012
					// echo do_shortcode('[nggallery id='.$gallery.' template="galleryview" images=0]');
				global $nggdb;
				$galleryt = $nggdb->get_gallery($gallery, 'sortorder', 'ASC', true, 0, 0);
				foreach($galleryt as $image) {
					echo '<img class="showcaption" src="' . $image->imageURL . '" data-caption="' . $image->description . ' (' . $image->alttext . '/Daily Bruin)">';
				}
				?>
			</div>


<br><br>

<h2><p id="photoblog-title"><a>Suggested Galleries</a></p></h2> 

<div class="grid-wrapper">
	<div class="grid">
		<?php 
		$categories = get_the_category();
		foreach ( $categories as $category ) { 
		    if ($category->name == 'Sports Spectrum') {
		    	$currentPostCategory = $category->name;
		    	break;
		    } elseif ($category->name == 'News Spectrum') {
		    	$currentPostCategory = $category->name;
		    	break;
		    } else {
		    	$currentPostCategory = 'A&E Spectrum';
		    }
		}
		
		query_posts(array(
			'showposts' => 3,
			'orderby' => 'rand',
			'category_name' => $currentPostCategory
		));
		while (have_posts() ): the_post();
			$cats = get_the_category();
			//$the_cat = get_the_category()[0];
			if ($cats) {
				foreach($cats as $cat){
					if ($cat->slug == 'ae-spectrum') {
						$the_cat = $cat;
						break;
					} elseif ($cat->slug == 'news-spectrum') {
						$the_cat = $cat;
						break;
					} elseif ($cat->slug == 'sports-spectrum') {
						$the_cat = $cat;
						break;
					}
					$the_cat = $cat;
				}
			} ?>
			<div class="grid-item <?php echo $the_cat->slug ?>">
				<div id="photoblog-post-block">
					<a href="<?php the_permalink(); ?>">
						<div class="photoblog-post-image" id ="pb-image-<?php echo $the_cat->slug; ?>"
							style="background-image: url('<?php 
															$picID = get_post_meta($post->ID, 'singlepic', true);
															$image = do_shortcode('[singlepic id='.$picID.']');
                                                            $parsed = get_string_between($image, 'data-src="', PHP_EOL);
											            	$parsed = str_replace("\"", "", $parsed);
											            	echo $parsed;  
														?>');">
						</div>
					</a>

					<div class="picOverlay">
						<!-- <a href= "/category/spectrum/<?php echo $the_cat->slug; ?>" class="photoblog-post-tag pb-tag-<?php echo $the_cat->slug; ?>">
						<?php if ($the_cat->slug == "archives"): { ?>
							ARCHIVES <?php } ?>
						<?php elseif ($the_cat->slug == "campus-spectrum"): { ?>
							CAMPUS <?php } ?>
						<?php elseif ($the_cat->slug == "humans-of-westwood"):{ ?>
							HOWEWO <?php } ?>
						<?php elseif ($the_cat->slug == "sports-spectrum"):{ ?>
							SPORTS <?php } ?>
						<?php elseif ($the_cat->slug == "westwoodla"):{ ?>
							WW/LA <?php } ?>
						<?php endif ?>
						</a> -->
						
						<div class="photoblog-text" id="photoblog-post-text">
							<h3>
								<p id="photoblog-title">
									<a href="<?php the_permalink() ?>">
										<?php
										the_title();
										?>
									</a>
								</p>
							</h3> 
							<p id="photoblog-post-excerpt">
								<?php $t = get_the_excerpt(); 
									$periodPosition = strpos($t, '.');
									if ($periodPosition > 0) {
										echo  $t = substr($t, 0, $periodPosition); 
									} else {
										echo $t . '...';
									}
									?>
							</p>
							<p id="photoblog-post-author">Credit: <?php coauthors(); ?></p>
							<p class="photoblog-sm">
							    <div class="fb-like" data-href="<?php echo get_permalink(); ?>" data-layout="button" data-action="like" data-show-faces="true" data-share="true"></div>
							</p>
						</div>
					</div>
				</div> <!--photoblog-post-block-->
			</div> <!-- isotope grid -->
			<?php endwhile; ?>
	</div>
</div>




		<?php if(function_exists('the_audio')) the_audio(); ?>
		<!-- <hr>
		<?php the_content(); ?>
		<p id="photoblog-post-author">Credit: <?php coauthors(); ?></p>
		<p class="photoblog-sm">
			<div class="fb-like" data-href="<?php echo get_permalink(); ?>" data-send="true" data-width="450" data-show-faces="true" data-colorscheme="dark"></div>
		</p> -->

		<!-- <?php wp_link_pages(array('before' => '<nav class="pagination">', 'after' => '</nav>')); ?> -->
		
	</div> <!--photoblog-post-block-->
</div>

</div><!-- end div#post -->






<script type="text/javascript">
	 /* Isotope
  * ==================== */
var elem = document.querySelector('.grid');
var iso = new Isotope( elem, {
  // options
  itemSelector: '.grid-item',
  layoutMode: 'fitRows'
});
// element argument can be a selector string
//   for an individual element
var iso = new Isotope( '.grid', {
  // options
});
$("div.grid-item").hover(
	function () {
		$(this).find(".picOverlay").stop().fadeIn();
	}, 
	function () {
		$(this).find(".picOverlay").stop().fadeOut();
	}
);


/*
 * Isotope animations
 */

function filterPhotos(tag) {
  	iso.arrange({
  		filter: tag
	})
}

function setupGrid() {
	var allImgs = $(document).find('.photoblog-post-image');
	allImgs.height($(window).width() / 4);
	$(document).find('.grid-item').width($(document).find('.grid-wrapper').width() / 3);
	filterPhotos('*');
}

setupGrid();

$(window).on('resize', function(){
	setupGrid();
});

</script>



