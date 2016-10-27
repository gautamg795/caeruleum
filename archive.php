<?php get_header(); ?>
<div class="row db-story">
    <div class="large-8 columns db-story-post">
        <div class="page-header">
          <h2>
            <?php
              $articleFormat = $articleFormats[0]->slug;
              if(empty($articleFormat) || $articleFormat === 'normal')
                $articleFormat = get_field('db_article_format');
              $displayMugshot = false;
              if($articleFormat)
              {
                switch($articleFormat)
                {
                  case 'brief':
                    $displayAuthor = false;
                    break;
                  case 'column':
                    $displayMugshot = true;
                    break;
                  case 'default':
                    $displayMugshot = in_array('mugshot', get_field('db_display_options'));
                }
              }
              $sectionPage = false;
              $mainSection = false;
              $multSection = false;
              $sectionTag = "";
              $term = get_term_by('slug', get_query_var('term'), get_query_var('taxonomy'));
              $categoryTitle = single_cat_title('',false);
              if ($term) {
                echo $term->name;
              } elseif (is_post_type_archive()) { 
                echo get_queried_object()->labels->name;
              } elseif (is_day()) {
                printf(__('Daily Archives: %s', 'roots'), get_the_date());
              } elseif (is_month()) {
                printf(__('Monthly Archives: %s', 'roots'), get_the_date('F Y'));
              } elseif (is_year()) {
                printf(__('Yearly Archives: %s', 'roots'), get_the_date('Y'));
              } elseif (is_author()) {
                  //Author Box Variables
                  $ID = get_the_author_meta( 'ID' );
                  $position= get_the_author_meta('position', $ID);
                  $description = get_the_author_meta('description', $ID);
                  $email = get_the_author_meta('user_email', $ID);
                  $twitter = get_the_author_meta( 'twitter_handle', $ID );
                  if (strpos($email, 'wordpress') !== false) {
                      $email=false;
                    }
                  ?>
                 <div class="author-wrapper">
                   <div class="row author-box">
                      <div class="large-12 medium-12 small-12 columns author-title">
                        <div class="author-header"><?php echo get_the_author() ?> 
                        <?php if ( get_the_author_meta('position')): ?>
                            |
                        <? endif; ?> 
                        </div>
                        <?php if ( $position): ?>
                            <div class="author-position"> <?php echo $position ?></div>
                        <?php endif; ?>
                      </div>
                    </div>
                  <div class="bio row">
                  <?php // Display the columnist's mugshot
                      if($displayMugshot && false)
                      {
                        ?>
                        <div class="image large-2 small-3 medium-2 columns"> 
                        <?php
                          ob_start();
                        if(function_exists('userphoto_the_author_photo'))
                          userphoto_the_author_photo();
                        $thumbnail = ob_get_contents();
                        $thumbnail_class = "";
                        ob_end_clean();
                        if(!empty($thumbnail))
                        {
                            ?>
                              <div class="author-photo"> <?php userphoto_the_author_photo(); ?></div>
                              </div>
                              <?php
                        }else{
                          ?>
                        </div>
                          <?php
                          $displayMugshot=false;
                        }
                      }
                  ?>
                    <?php if ($description && $displayMugshot): ?>
                          <p class="bio-text-mugshot">
                        <?php echo get_the_author_meta('description'); ?>
                          </p>
                      <?php elseif($description && $displayMugshot): ?>
                        <p class="bio-text">
                        <?php echo get_the_author_meta('description');?>
                          </p>
                      <?php elseif($description): ?>
                        <p class="bio-text">
                        <?php echo get_the_author_meta('description'); ?>
                          </p>
                        <?php endif; ?>
                       <?php if (!$description && !$displayMugshot): ?> <!-- Don't make margin so large -->
                            <div class="row contact-info-wrapper-smaller-margin">
                          <?php elseif ($displayMugshot): ?>
                          <div class="row contact-info-wrapper-mugshot">
                          <?php else: ?>
                          <div class="row contact-info-wrapper">
                          <?php endif; ?>
                        <?php if ( $email || $twitter ): ?>
                        <div class="contact large-2 medium-2 columns show-for-medium-up">
                          <p class="contact">contact</p>
                        </div>
                        <?php endif; ?>
                        <div class="email large-5 medium-5 small-6 columns">
                          <?php if ( $email ): ?>
                          <p><span class="entypo-mail"></span>
                           <a class="author-email-inside" href="mailto:<?php the_author_meta('user_email'); ?>">
                            <?php echo $email; ?>
                          </a></p>
                          <?php endif; ?>
                        </div>
                        <div class="twitter large-3 medium-3 small-3 columns">
                          <?php if ( $twitter): ?>
                            <p><span class="entypo-twitter"></span>  
                            <a class="twitter-follow-button" data-show-count="false" href="//twitter.com/<?php the_author_meta('twitter' );?>">
                              <?php echo $twitter;?>
                            </a>
                          <?php endif; ?>
                        </div>
                      </div>
                    </div>                   
                  </div>
                <?php
              } else {
                $sectionPage = true;
                switch ($categoryTitle)
                {
                  case "Bruin Sights":
                    the_blog_banner('bruinsights');
                    break;
                  case "Spotlight":
                    the_blog_banner('spotlight');
                    break;
                  case "Timestamp":
                    the_blog_banner('timestamp');
                    break;
                  case "Idle Thoughts":
                    the_blog_banner('two-cents-idle-thoughts');
                    break;
                  case "Political Commentary":
                    the_blog_banner('two-cents-political-commentary');
                    break;
                  case "Social Commentary":
                    the_blog_banner('two-cents-social-commentary');
                    break;
                  case "The Quad":
                    $directoryurl = get_stylesheet_directory_uri();
                    $result = '<img src="' . $directoryurl . '/img/quad.svg">
                    <p class="quad-explainer">Royce Quad was once an epicenter of student life at UCLA. Now, in the digital age, the Quad is an attempt to recreate these discussion spaces online. Come to the Quad for analysis, explanation and student narratives about life on and off campus, within and without Westwood.</p>
                    <p class="quad-explainer">Students are welcome to submit blog posts at <a href="mailto:quad@media.ucla.edu" style="color: #0080c6">quad@media.ucla.edu</a>. Submissions are subject to the same <a href="/submit" style="color: #0080c6">guidelines for opinion content</a>, with the exception of increased flexibility for word count (300-900 words).</p>';
                    echo $result;
                    break;
                  default:
                    echo $categoryTitle;
                }
                // Separate case for sports as its name is the same as several other categories
                $cat = get_category(get_query_var('cat'));
                if ($cat->slug == 'sports-two-cents')
                {
                  the_blog_banner('two-cents-sports');
                }
              }
            ?>
          </h1>
          <?php
          if($sectionPage):
                $categoryID = get_query_var('cat');
            $cat_args = array(
          'parent' => $categoryID,
          'orderby' => 'name',
          'hide_empty' => 1,
          'title_li' => ''
        );
        $categories = get_categories($cat_args);
        if(!empty($categories)): ?>
        <?php if(count($categories)>8): ?>
        <div class="db-sub-list-col hide-for-small">
        <?php else: ?>
        <div class="db-sub-list">
        <?php endif; ?>
          <ul>
          <?php wp_list_categories($cat_args); ?>
          </ul>
        </div>
        <?php endif;
      endif; ?>
          

        <!--
          <?php if(is_author()): ?>
      <p><?php the_author_meta('description'); ?></p>
      <?php if(!get_the_author_meta('graduated')) : ?>          
        <?php if(get_the_author_meta('twitter_handle')) : ?>
        <a href="https://twitter.com/<?php echo substr(get_the_author_meta('twitter_handle'),1); ?>" class="twitter-follow-button" data-show-count="false">Follow <?php the_author_meta('twitter_handle'); ?></a>
        <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
        <?php endif; ?>
        <a class="author-email-inside" href="mailto:<?php the_author_meta('user_email'); ?>"><i class="ticon-email"></i>Email</a>
      <?php endif; ?>   
          <?php endif; ?>
-->
          <hr>
        </div><!-- end div.page-header -->
        <?php get_template_part('loop', 'category'); ?>
      </div><!-- end div#post-listing -->

<?php if($categoryTitle == "Two Cents"): 
$two_cents_contributors = get_two_cents_contributors(); 
?>
<div class="large-4 columns">
  <div class="row">
    <h2 class='text-center hide-for-medium hide-for-small'>Meet the Columnists</h2>
<?php 
$i = 0;
foreach ($two_cents_contributors as $contributor): 
  ?>
<div class="medium-3 columns hide-for-medium hide-for-small">
  <img data-tooltip class="has-tip tip-left" 
          title="<?php echo $contributor['name']?></br><?php echo $contributor['position']?>" 
          src=<?php echo $contributor['img'] ?> />
</div>
<?php $i++; endforeach ?>
<?php while($i%4!=0): ?>
<div class="medium-3 columns hide-for-medium hide-for-small">
</div>
<?php $i++; endwhile; ?>

</div>
<div class="db-divide hide-for-medium hide-for-small"></div>
<ul id="sidebar-list">
  <?php dynamic_sidebar('sidebar-primary'); ?>
</ul><!-- end div#sidebar-list -->
</div>
<?php else: ?>
<?php get_template_part('sidebar'); ?>  
<?php endif; ?>

    </div><!-- end div#archive-content -->
<?php get_footer(); ?>
