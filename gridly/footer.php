	

<?php if ( is_active_sidebar( 'gridly_footer')) { ?>     
   <div id="footer-area">
			<?php if ( is_user_logged_in() ) { dynamic_sidebar( 'gridly_footer' ); } ?>
        </div><!-- // footer area -->   
<?php }  ?>     
      


 <div id="copyright">
 <p>&copy; <?php echo date("Y"); echo " "; bloginfo('name'); ?> | <a href="<?php echo esc_url( __('http://www.cyeonlife.com/', 'eleventhemes') ); ?>" title="Eleven WordPress Themes" target="_blank">By your local Scotch Wizard, C </a></p>
 </div><!-- // copyright -->   
     
</div><!-- // wrap -->   

	<?php wp_footer(); ?>
	<h4>Registered Images Sizes</h4>
<?php
print '<pre>';
  global $_wp_additional_image_sizes;
  print_r( $_wp_additional_image_sizes );
print '</pre>';
?>
	
</body>
</html>