<?php/*
Template Name: Orientation Issue 2015
*/ ?>

<?php get_header(); ?>

<link rel="stylesheet" href="../css/orientationissue-2015.css" type="text/css">

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-hashchange/v1.3/jquery.ba-hashchange.min.js"></script>
<script src="../js/orientationissue-2015.js"></script>


<link href='//fonts.googleapis.com/css?family=Biryani:700|Raleway:800|Open+Sans' rel='stylesheet' type='text/css'>


<!-- PAGE STARTS HERE -->

<div class="row">
    <h1 class="subhead">Orientation Issue 2015</h1>
    <div class="small-12 columns text-center banner">
        <img src="//dailybruin.com/images/2015/07/oissue-coverillo-final-web.jpg"/>
        <p class="caption">(Kelly Brennan/Daily Bruin senior staff)</p>
        <div class="title">
            <h1>First Steps</h1>
            <p>Starting the UCLA experience can be daunting, nerve-wracking and exciting at the same time. We hope you'll let the Daily Bruin guide you through your time on campus, keeping you informed as news breaks in the area and beyond. We're UCLA's student-run daily newspaper, and we're here to serve you. Welcome to Westwood.</p>
        </div>
    </div>

    <div id="belowbanner" class="small-12 columns">
        <nav class="top-bar" data-topbar role="navigation">
            <section class="top-bar-section">
                <!-- TOP Nav Section -->
                <ul class="right">
                    <li class="active"><a href="#news">News</a></li>
                    <li><a href="#opinion">Opinion</a></li>
                    <li><a href="#ae">A&amp;E</a></li>
                    <li><a href="#sports">Sports</a></li>
                    <li><a href="#multimedia">Multimedia</a></li>
                </ul>
            </section>
        </nav>
    
        <!-- Main content column -->
        <div class="small-12 columns">
                                 
            <div class="main-section news">
                <h1>News</h1>
                <div id="stories">
                    <?php
                    global $post;
                    $myposts = get_posts( array('tag_slug__and'  => 'oissue-2015-news', 'posts_per_page' => '-1'));
                    foreach( $myposts as $post ) :  
                    setup_postdata($post); ?>
                    <div class="row db-list">
                      <?php if(has_post_thumbnail()): ?>
                        <div class="small-12 columns hide-for-large hide-for-medium show-for-small text-center">
                          <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'db-category-thumb', array('class'=>'category-thumb') ); ?></a>
                        </div>
                        <div class="medium-8 small-12 columns" style="padding-left:0">
                      <?php endif; ?>
                     <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                          <span class="db-section-date">
                                  <h4><?php the_category(', ');?></h4> 
                                  <h4>|</h4> 
                                  <h5><?php the_time('F j, g:i a');?> </h5>
                                  </span>
                            <h2><a href="<?php the_permalink(); ?>"><?php the_headline(); ?></a></h2>
                      
                      <div class="entry-content">
                        <?php the_audio(); ?>
                            <p><?php echo get_the_excerpt();  ?> <a href="<?php the_permalink(); ?>">Read more... </a></p>
                    </div>
                    <?php if(has_post_thumbnail()): ?>
                    </div>
                      <div class="medium-4 columns hide-for-small">
                        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'db-category-thumb', array('class'=>'category-thumb') ); ?></a>
                      </div>
                    <?php endif; ?>
                    </article>
                  </div>
                    <?php endforeach; ?>
                    </div>
                </div>
            </div>
            
            <div class="main-section opinion">
                <h1>Opinion</h1>

                <div id="stories">
                    <?php
                    global $post;
                    $myposts = get_posts( array('tag_slug__and'  => 'oissue-2015-opinion', 'posts_per_page' => '-1'));
                    foreach( $myposts as $post ) :  
                    setup_postdata($post); ?>
                    <div class="row db-list">
                      <?php if(has_post_thumbnail()): ?>
                        <div class="small-12 columns hide-for-large hide-for-medium show-for-small text-center">
                          <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'db-category-thumb', array('class'=>'category-thumb') ); ?></a>
                        </div>
                        <div class="medium-8 small-12 columns" style="padding-left:0">
                      <?php endif; ?>
                     <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                          <span class="db-section-date">
                                  <h4><?php the_category(', ');?></h4> 
                                  <h4>|</h4> 
                                  <h5><?php the_time('F j, g:i a');?> </h5>
                                  </span>
                            <h2><a href="<?php the_permalink(); ?>"><?php the_headline(); ?></a></h2>
                      
                      <div class="entry-content">
                        <?php the_audio(); ?>
                            <p><?php echo get_the_excerpt();  ?> <a href="<?php the_permalink(); ?>">Read more... </a></p>
                    </div>
                    <?php if(has_post_thumbnail()): ?>
                    </div>
                      <div class="medium-4 columns hide-for-small">
                        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'db-category-thumb', array('class'=>'category-thumb') ); ?></a>
                      </div>
                    <?php endif; ?>
                    </article>
                  </div>
                    <?php endforeach; ?>
                    </div>
                </div>
            </div>

            <div class="main-section ae">
                <h1>Arts &amp; Entertainment</h1>

                <div id="stories">
                    <?php
                    global $post;
                    $myposts = get_posts( array('tag_slug__and'  => 'oissue-2015-ae', 'posts_per_page' => '-1'));
                    foreach( $myposts as $post ) :  
                    setup_postdata($post); ?>
                    <div class="row db-list">
                      <?php if(has_post_thumbnail()): ?>
                        <div class="small-12 columns hide-for-large hide-for-medium show-for-small text-center">
                          <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'db-category-thumb', array('class'=>'category-thumb') ); ?></a>
                        </div>
                        <div class="medium-8 small-12 columns" style="padding-left:0">
                      <?php endif; ?>
                     <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                          <span class="db-section-date">
                                  <h4><?php the_category(', ');?></h4> 
                                  <h4>|</h4> 
                                  <h5><?php the_time('F j, g:i a');?> </h5>
                                  </span>
                            <h2><a href="<?php the_permalink(); ?>"><?php the_headline(); ?></a></h2>
                      
                      <div class="entry-content">
                        <?php the_audio(); ?>
                            <p><?php echo get_the_excerpt();  ?> <a href="<?php the_permalink(); ?>">Read more... </a></p>
                    </div>
                    <?php if(has_post_thumbnail()): ?>
                    </div>
                      <div class="medium-4 columns hide-for-small">
                        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'db-category-thumb', array('class'=>'category-thumb') ); ?></a>
                      </div>
                    <?php endif; ?>
                    </article>
                  </div>
                    <?php endforeach; ?>
                    </div>
                </div>
            </div>

            <div class="main-section sports">
                <h1>Sports</h1>
                <div id="stories">
                    <?php
                    global $post;
                    $myposts = get_posts( array('tag_slug__and'  => 'oissue-2015-sports', 'posts_per_page' => '-1'));
                    foreach( $myposts as $post ) :  
                    setup_postdata($post); ?>
                    <div class="row db-list">
                      <?php if(has_post_thumbnail()): ?>
                        <div class="small-12 columns hide-for-large hide-for-medium show-for-small text-center">
                          <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'db-category-thumb', array('class'=>'category-thumb') ); ?></a>
                        </div>
                        <div class="medium-8 small-12 columns" style="padding-left:0">
                      <?php endif; ?>
                     <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                          <span class="db-section-date">
                                  <h4><?php the_category(', ');?></h4> 
                                  <h4>|</h4> 
                                  <h5><?php the_time('F j, g:i a');?> </h5>
                                  </span>
                            <h2><a href="<?php the_permalink(); ?>"><?php the_headline(); ?></a></h2>
                      
                      <div class="entry-content">
                        <?php the_audio(); ?>
                            <p><?php echo get_the_excerpt();  ?> <a href="<?php the_permalink(); ?>">Read more... </a></p>
                    </div>
                    <?php if(has_post_thumbnail()): ?>
                    </div>
                      <div class="medium-4 columns hide-for-small">
                        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'db-category-thumb', array('class'=>'category-thumb') ); ?></a>
                      </div>
                    <?php endif; ?>
                    </article>
                  </div>
                    <?php endforeach; ?>
                    </div>
                </div>
            </div>

            <div class="main-section multimedia">
                <h1>Multimedia</h1>

                <div id="stories">
                    <?php
                    global $post;
                    $myposts = get_posts( array('tag_slug__and'  => 'oissue-2015-multimedia', 'posts_per_page' => '-1'));
                    foreach( $myposts as $post ) :  
                    setup_postdata($post); ?>
                    <div class="row db-list">
                      <?php if(has_post_thumbnail()): ?>
                        <div class="small-12 columns hide-for-large hide-for-medium show-for-small text-center">
                          <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'db-category-thumb', array('class'=>'category-thumb') ); ?></a>
                        </div>
                        <div class="medium-8 small-12 columns" style="padding-left:0">
                      <?php endif; ?>
                     <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                          <span class="db-section-date">
                                  <h4><?php the_category(', ');?></h4> 
                                  <h4>|</h4> 
                                  <h5><?php the_time('F j, g:i a');?> </h5>
                                  </span>
                            <h2><a href="<?php the_permalink(); ?>"><?php the_headline(); ?></a></h2>
                      
                      <div class="entry-content">
                        <?php the_audio(); ?>
                            <p><?php echo get_the_excerpt();  ?> <a href="<?php the_permalink(); ?>">Read more... </a></p>
                    </div>
                    <?php if(has_post_thumbnail()): ?>
                    </div>
                      <div class="medium-4 columns hide-for-small">
                        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'db-category-thumb', array('class'=>'category-thumb') ); ?></a>
                      </div>
                    <?php endif; ?>
                    </article>
                  </div>
                    <?php endforeach; ?>
                    </div>
                </div>
            </div>

</div>
</div>
</div>

<?php get_footer(); ?>
