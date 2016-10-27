<?php/*
Template Name: Opinion Blog
*/ ?>
<?php get_header(); ?>
<link href='//fonts.googleapis.com/css?family=Playfair+Display+SC:400,700' rel='stylesheet' type='text/css'><style>
	
	/*Daria's Style*/
	.featured-img {margin: 10px 0 10px 0;}
	.category {margin: 10px 0 5px 0; height: 24px; display: inline-block; padding: 2px 20px 0 20px; font-family: "Open Sans", sans-serif; font-size: 10pt; font-weight: bold; color: #fff; text-transform: uppercase;}
	.c1 {background-color: #15134b; color: #fff;}
	.c2 {background-color: #881e2f; color: #fff;}
	.c3 {background-color: #19562a; color: #fff;}
	.c4 {background-color: #c7ba26; color: #fff;}
	.feature-date {margin-top: 50px; text-align: right; float: right; color: #545454; font-size: 8pt;}
	.date {color: #545454; font-size: 8pt;}
	a.heading {color: #000; font-family: Georgia; font-size: 18.2pt; font-weight: bold; line-height: 1.1em;}
	.author {text-transform: uppercase;font-weight: bold; font-family: Georgia;text-transform:uppercase;font-size:9pt;margin: 10px 0 5px 0;}
	.sub-img {margin: 10px 0 10px 0;}
	.recent-cols {padding: 20px 0 10px 10px;}
	a.sec-head {font-size: 14pt; font-family: Georgia; font-weight: bold; line-height: 1.1em;}
	a.sub-head {font-family: Georgia; font-weight: bold; line-height: 1.1em;}
	a.title {color: #000;}
	.illo {margin: 10px 0 10px 0;}

	/*Simon's Style*/
	.blog-posts {
		font-size: 1.2em;
	}

	.two-cents-post {
		border-top: 1px solid gray;
		margin-bottom: 10px;
		padding-left: 10px;
	}

    .widget-title {
		font-family: Open Sans,Arial,Decima,"Helvetica Neue",Helvetica,sans-serif;
		letter-spacing: 1px;
		background-color: #222;
		color: #fefefe;
		text-transform: uppercase;
		padding: 7px 0 5px 10px;
		font-size: 10pt; 
		font-weight: bold;
		line-height: 20px;
    margin-top: 0.2rem;
    margin-bottom: 0.5rem;
	}
	
	#widget-reaction-quote {padding-bottom: 10px;}

	blockquote p {
		display: inline-block;
		margin-bottom: 1em;
		line-height: 1.16667em;
		margin-left: 1em;
		margin-right: 1em;
		font-style: italic;
	}

	#quotation-mark {
		float: left;
		font-size: 5em;
		margin-bottom: .1em;
		position: relative;
		top: .3em;
		font-family: "Harriet Display", Georgia, Times, "Times New Roman", serif;
	}

	blockquote.reaction {
		border-left: 0;
	}

	#right-column {
		border-left: 1px solid #eeeeee;
		padding-left: 10px;
		border-right: 1px solid #eee;
		padding-right: 10px;
	}

	p.attribution {
		float: right;
		color: gray;
	}

	#blog-title {
		margin-top: 30px;
		font-family: 'Playfair Display SC', serif;
		font-size: 5.5em;
		line-height: 90%;	
	}

	.blog-header img {
	  float: left;
	  height: 70px;
	}

	.blog-header h1 {
	  position: relative;
	  left: 10px;
	}

    /*Phillip's Style*/

	.video-wrapper {
		position: relative;
		padding-bottom: 56.25%;
		padding-top: 25px;
		height: 0;
	}

	.video-wrapper iframe {
		position: absolute;
		top: 0;
		left: 0;
		width: 100%;
		height: 100%;
	}

    .columnist-row {
        margin-bottom: 20px !important;
        width: 100% !important;
    }

    .columnist-info {
        display: inline-block;
        text-align: left;
		font-size: 1.4em;
    }

    .columnist-name {
        font-weight: bold;
        word-wrap: break-word;
    }

    .columnist-line {
        margin: 5px 10px 10px 10px;
    }

    .columnist-line-content {
        display: inline-block;
    }

    .columnist-text {
        font-size: 14px;
        vertical-align: middle;
    }

    .columnist-cat {
        display: inline-block;
        vertical-align: 1px;
        height: 14px;
        width: 14px;
        background-color: black;
    }

    @media only screen and (min-width: 40.063em) and (max-width: 64em) {
        .columnist-text {
            font-size: 10px;
        } 
        
        .columnist-cat {
           vertical-align: 2px; 
        }
    }

  .cat-two-cents {
		background-color: black;
	}

	.cat-idle-thoughts {
		background-color: #660066;
	}

	.cat-political-commentary {
		background-color: #19562a;
	}

	.cat-social-commentary {
		background-color: #c7ba26;
	}

	.cat-sports {
		background-color: #881e2f;
	}

</style>

<?php
	$slug_to_cat = array(
			'two-cents' => array('name' => 'Two Cents', 'css' => 'cat-two-cents'),
			'idle-thoughts' => array('name' => 'Idle Thoughts', 'css' => 'cat-idle-thoughts'),
			'political-commentary' => array('name' => 'Political Commentary', 'css' => 'cat-political-commentary'),
			'social-commentary' => array('name' => 'Social Commentary', 'css' => 'cat-social-commentary'),
			'sports-two-cents' => array('name' => 'Sports', 'css' => 'cat-sports')
		);

	$cats = array(
			'Two Cents', 'Idle Thoughts', 'Political Commentary', 'Social Commentary', 'Sports'
		);

	$contributors = array(
		array(
			'name' => 'Natalie Delgadillo',
			'email' => 'ndelgadillo@media.ucla.edu',
			'img' => '//dailybruin.com/images/2014/11/web.Natalie.Delgadillo-212x300.jpg',
			'slugs' => array('idle-thoughts'),
			'position' => 'Opinion Editor'
			),
		array(
			'name' => 'Julia McCarthy',
			'email' => 'jmccarthy@media.ucla.edu',
			'img' => '//dailybruin.com/images/2014/11/web.Julia_.McCarthy-211x300.jpg',
			'slugs' => array('social-commentary'),
			'position' => 'Assistant Opinion Editor'
			),
		array(
			'name' => 'Aram Ghoogasian',
			'email' => 'aghoogasian@media.ucla.edu',
			'img' => '//dailybruin.com/images/2014/11/web.Aram_.Ghoogasian-211x300.jpg',
			'slugs' => array('political-commentary'),
			'position' => 'Opinion Staff Writer'
			),
		array(
			'name' => 'Jordan Lee',
			'email' => 'jlee2@media.ucla.edu',
			'img' => '//dailybruin.com/images/2014/11/web.Jordan.Lee_-211x300.jpg',
			'slugs' => array('sports-two-cents'),
			'position' => 'Sports Staff Writer'
			),
		array(
			'name' => 'Chloe Lew',
			'email' => 'clew@media.ucla.edu',
			'img' => '//dailybruin.com/images/2014/11/web.Chloe_.Lew_-211x300.jpg',
			'slugs' => array('social-commentary'),
			'position' => 'Opinion Staff Writer'
			),
		array(
			'name' => 'Ryan Nelson',
			'email' => 'rnelson@media.ucla.edu',
			'img' => '//dailybruin.com/images/2014/11/web.Ryan_.Nelson-212x300.jpg',
			'slugs' => array('idle-thoughts'),
			'position' => 'Opinion Staff Writer'
			),
		array(
			'name' => 'Travis Fife',
			'email' => 'tfife@media.ucla.edu',
			'img' => '//dailybruin.com/images/2014/11/web.Travis.Fife_-211x300.jpg',
			'slugs' => array('political-commentary'),
			'position' => 'Opinion Staff Writer'
			)
		);
?>
<body>

        
    <div class="container-fluid">


		<div class="row blog-header">
			<div class="small-12 large-12 columns">
			<img src="//dailybruin.com/images/2014/09/2centsblog-cropped.jpg" alt="logo" style="width: 200px; height: 100%;">
			<h1 id="blog-title">Two Cents</h1>
			</div>
		</div>
        <div class="row">

            <div class="medium-7 columns blog-posts">

			<div class="row">
				<div class="small-12 large-12 columns">
					<?php
						$categoryObject = get_category_by_slug('two-cents');

						$args = array('posts_per_page'   => 8, 'category' => $categoryObject->cat_ID);
						
						$posts = get_posts( $args );

						foreach ($posts as $post) : setup_postdata($post);
							echo "<div class=\"two-cents-post\">"; ?>

							<?php $categories = get_the_category();

							foreach ($categories as $cat){
								if(in_array($cat->cat_name,$cats)) {
									echo "<div class=\"category " . $slug_to_cat[$cat->slug]['css'] . "\">" . $slug_to_cat[$cat->slug]['name'] . "</div><br/>";
									break;
								}
							}
							?>

							<h2><a class="" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

							<span class="date"><?php the_time('M j, Y'); ?></span><br/>

							<span class="author"><?php the_author(); ?></span>

							<p> <?php the_excerpt(); ?> <a href="<?php the_permalink(the_ID()); ?>">More >></a></p>
							</div>

						<?php endforeach;
				
						wp_reset_postdata(); 
					?>
				</div>
			</div>
	     </div>

            <div class="medium-5 columns" id="right-column">
            	<div class="video-section">
            		<div class="widget-title">Bruins on the Street</div>
	            	<div class="video-wrapper">
		            <?php
						$video_category = get_category_by_slug('two-cents-video');
						$video_args = array('posts_per_page' => 1, 'category' => $video_category->cat_ID);
						$lastposts = get_posts( $video_args );
						foreach( $lastposts as $post ) :	setup_postdata($post); ?>
		                 <span><?php the_content(); ?></span>
					<?php endforeach; 
						wp_reset_postdata();
					
					?>

<!-- 		            <?php
						$video_category = get_category_by_slug('two-cents-video');

						$video_args = array('posts_per_page' => 1, 'category' => $video_category->cat_ID);

						$video_posts = get_posts( $video_args );

						foreach ($video_posts as $video_post) : setup_postdata($video_post);
							echo html_entity_decode(get_the_content());
						endforeach;

						wp_reset_postdata();
					?>
 -->	            </div>
 				</div>
				<!-- 
            	<div id="widget-reaction-quote">
            		<h2 class="widget-title">Recent Reactions</h2>
                    <?php
                        // TODO fill in appropriate parameters.
                    	$reaction_slug = 'reactions';
                        $num_reactions = 3;
                        $reaction_cat_id = get_category_by_slug($reaction_slug)->cat_ID;
                        $args = array('posts_per_page' => $num_reactions, 'category' => $reaction_cat_id);
                        $reaction_posts = get_posts($args);
                        foreach ( $reaction_posts as $post ) :
                    ?>
                            <blockquote class="reaction">
                            <span id="quotation-mark">“</span>
                            <p><a href="<?php the_permalink(); ?>">
                            <?php
                                setup_postdata($post);
                                $excerpt = get_the_excerpt();
                                echo $excerpt
                            ?>
                            </a></p>
            		        <p class="attribution">&ndash; <?php the_author(); ?></p></blockquote>
                    <?php
                        endforeach;
                        wp_reset_postdata();
                    ?>
            	</div>
            	-->
                <div class="columnist-column">
                    <div class="widget-title">Columnists</div>
                    <?php
                    	foreach ($contributors as $contributor) :
	                    	$user = get_user_by('email', $contributor['email']);
	                    	$name = $user->first_name . ' ' . $user->last_name;
                    ?>
                    <div class="row columnist-row <?php if ($contributor === end($contributors)) echo 'end'; ?>">
                    	<div id="columnist-mugshot" class="small-4 large-4 columns">
                    		<img src="<?php echo $contributor['img'] ?>" alt="<?php echo $contributor['name'] ?>">
                		</div>
                		<div id="columnist-info" class="small-8 large-8 columns columnist-info">
                			<div class="columnist-name"><?php echo $contributor['name'] ?></div>
                			<?php 
                				foreach ($contributor['slugs'] as $contributor_slug) ;
                					$contributor_cat = $slug_to_cat[$contributor_slug];
            				?>
	            				<div class="columnist-line end">
	            					<div class="columnist-line-content">
                            <span class="columnist-cat <?php echo $contributor_cat['css'] ?>"></span>
                            <span class="columnist-text"> 
                                      &nbsp; 
	                                    <?php echo $contributor['position'] ?>
	                                    <!--<?php echo $contributor_cat['name'] ?>-->
	                                    </span>
	                                </div>
	                            </div>
                            <?php
                            	// endforeach;
                            ?>
                        </div>
                    </div>
                    <?php	
                    endforeach;
                    ?>
                </div>
            </div>   

	</div>
    </div>
</body>

<?php get_footer(); ?>
