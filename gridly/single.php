<?php get_header(); ?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			
           
      <?php if ( function_exists('yoast_breadcrumb') ) {
        yoast_breadcrumb('<p id="breadcrumbs">','</p>');
        } 
      ?> 
   		<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<?php $attachments = get_children( array('post_parent' => get_the_ID(), 'post_type' => 'attachment') );if ( !(has_tag('video')) && !($attachments) && has_post_thumbnail() ) { ?>			
				<div class="gridly-image"><?php the_post_thumbnail( 'detail-image' );  ?></div>
                <div class="gridly-category"><p><?php the_category(', ') ?></p></div>
             <?php } ?>                   

       			<div class="gridly-copy">
                <h1><?php the_title(); ?></h1>
                 <p class="gridly-date"> <?php the_time(get_option('date_format')); ?></p>
           		 <?php the_content(); ?> 
                 <p><?php if ( is_user_logged_in() ) { the_tags(); } ?></p>

                
                <div class="clear"></div>
				<?php comments_template(); ?> 
                </div>


                
                
       </div>
       
		<?php endwhile; endif; ?>
       
       <div class="post-nav">
               <div class="post-prev"><?php previous_post_link('%link'); ?> </div>
			   <div class="post-next"><?php next_post_link('%link'); ?></div>
        </div>      
   
       
       
       
  
 

<?php get_footer(); ?>
