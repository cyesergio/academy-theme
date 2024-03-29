<?php get_header(); ?>


<?php if (have_posts()) : ?>
<div id="sidebar">
   <?php 
      if ( dynamic_sidebar('gridly_sidebar') ) : 
      else : 
   ?>
   <?php endif; ?>
</div>
<div id="post-area">
<?php while (have_posts()) : the_post(); ?>	

   		<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		 <?php if ( has_post_thumbnail() ) { ?>
     <div class="post-info">
        <div><a href="<?php the_permalink() ?>"><?php $content = strip_tags( strip_shortcodes( get_the_content() ) );$content = str_replace("\t", '', $content);$content = str_replace("\n", '', $content);$content = str_replace("\r", '', $content); if ($content != "") echo $content; else echo "Click Me!" ?></a></div>
     </div>
<div class="gridly-image">
  <a href="<?php the_permalink() ?>"><?php the_post_thumbnail('summary-image');  ?></a>
</div>

<!-- Temporary solution to hide navigation! Remove when live! -->
<?php if ( is_user_logged_in() ) { ?>
<div class="gridly-category">
  <p>
    <!-- <?php the_category(', ') ?> -->
    <?php
$posttags = get_the_tags();
$count=0;
if ($posttags) {
  foreach($posttags as $tag) {
    $count++;
    echo '<a href="'.get_tag_link($tag->term_id).'">'.$tag->name.'</a> ';
    if( $count >4 ) break;
  }
}
?>
  </p>
</div>
<?php } ?>
       
		  <?php } ?>
       			<div class="gridly-copy"><h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
                <p class="gridly-date"><?php the_time(get_option('date_format')); ?>  </p>

<?php the_excerpt(); ?> 

               <!-- <p class="gridly-link"><a href="<?php the_permalink() ?>">View more &rarr;</a></p> -->
         </div>
       </div>
       
       

<?php endwhile; ?>
</div>
<?php else : ?>
<?php endif; ?>
<div>
  <?php next_posts_link('<p class="view-older">View Older Entries</p>') ?>
</div>
 
<?php get_footer(); ?>
