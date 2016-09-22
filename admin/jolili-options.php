<?php
// create jolili_theme settings menu
add_action('admin_menu', 'jolili_create_menu');

function jolili_create_menu() {
	
    //create new submenu
    add_theme_page( 'Theme Options', 'Jolili Options', 'administrator', 'jolili-options-page', 'jolili_settings_page');
		
}
//call register settings function
add_action( 'admin_init', 'jolili_register_settings' );
function jolili_register_settings() {
    //register theme settings
    register_setting( 'jolili-settings-group', 'jolili_footer_text' );
    register_setting( 'jolili-settings-group', 'jolili_footer_address' );
    register_setting( 'jolili-settings-group', 'jolili_analytics' );
 	register_setting( 'jolili-settings-group', 'jolili_sat' );
 	register_setting( 'jolili-settings-group', 'jolili_sun' );
 	register_setting( 'jolili-settings-group', 'jolili_mo' );
 	register_setting( 'jolili-settings-group', 'jolili_tue' );
 	register_setting( 'jolili-settings-group', 'jolili_wed' );
 	register_setting( 'jolili-settings-group', 'jolili_thu' );
 	register_setting( 'jolili-settings-group', 'jolili_fri' );
	register_setting( 'jolili-settings-group', 'fb_id' );
	register_setting( 'jolili-settings-group', 'opening_text' );
	register_setting( 'jolili-settings-group', 'twitter_id' );
	register_setting( 'jolili-settings-group', 'gplus_id' );


}

// theme options css file
add_action( 'admin_print_styles', 'mytheme_add_init' );
function mytheme_add_init() {
	$file_dir=get_bloginfo('template_directory');
	wp_enqueue_style("functions", $file_dir."/admin/options.css", false, "1.0", "all");
	wp_enqueue_script("rm_script", $file_dir."/admin/options.js", false, "1.0");
}
add_action( 'wp_enqueue_scripts', 'mytheme_add_init' );

function jolili_settings_page() {

?>
<!-- theme options page start -->
<div class="wrap">
<h2><?php echo __( 'Jolili Settings', 'jolili_theme') ?></h2>

<form id="landingOptions" method="post" action="options.php">
    <?php settings_fields( 'jolili-settings-group' ); ?>
    <table class="form-table jolilipress">
      	
        
        <tr>
	        <td scope="row"><?php echo __( 'Footer Text', 'jolili_theme') ?>:</td>
	        <td>
	            <textarea name="jolili_footer_text" ><?php echo get_option('jolili_footer_text'); ?></textarea>
	        </td>
        </tr>
        
        <tr>
	        <td scope="row"><?php echo __( 'Footer Text 2', 'jolili_theme') ?>:</td>
	        <td>
	            <textarea name="jolili_footer_address" ><?php echo get_option('jolili_footer_address'); ?></textarea>
	        </td>
        </tr>
		
		<tr>
	        <td scope="row"><?php echo __( 'Openingsuren:', 'jolili_theme') ?></td>
	        <td>
		        <b>Maandag:</b><br>
	            <input placeholder="Maandag" type="text" name="jolili_mo" value="<?php print get_option('jolili_mo'); ?>"></input><br>
				<b>Dinsdag:</b> <br>
	            <input placeholder="Dinsdag" type="text" name="jolili_tue" value="<?php print get_option('jolili_tue'); ?>"></input><br>
	            <b>Woensdag:</b><br>
	            <input placeholder="Woensdag" type="text" name="jolili_wed" value="<?php print get_option('jolili_wed'); ?>"></input><br>
	            <b>Donderdag:</b><br>
	            <input placeholder="Donderdag" type="text" name="jolili_thu" value="<?php print get_option('jolili_thu'); ?>"></input><br>
	            <b>Vrijdag:</b><br>
	            <input placeholder="Vrijdag" type="text" name="jolili_fri" value="<?php print get_option('jolili_fri'); ?>"></input><br>
	            <b>Zaterdag:</b><br>
	            <input placeholder="Zaterdag" type="text" name="jolili_sat" value="<?php print get_option('jolili_sat'); ?>"></input><br>
	            <b>Zondag:</b><br>
	            <input placeholder="Zondag" type="text" name="jolili_sun" value="<?php print get_option('jolili_sun'); ?>"></input>
	            
	        </td>
        </tr>            
		 <tr>
	        <td scope="row"><?php echo __( 'Openingsuren Text', 'jolili_theme') ?>:</td>
	        <td>
	            <textarea name="opening_text" ><?php print get_option('opening_text'); ?></textarea>
	        </td>
        </tr>
        <tr>
	        <td scope="row"><?php echo __( 'Google Analytics', 'jolili_theme') ?>:</td>
	        <td>
	            <textarea name="jolili_analytics" ><?php print get_option('jolili_analytics'); ?></textarea>
	        </td>
        </tr>
			
        <tr>
	        <td scope="row"><?php echo __( 'Facebook page id', 'jolili_theme') ?></td>
	        <td>
	            <input type="text" name="fb_id" value="<?php print get_option('fb_id'); ?>"></input>
	        </td>
        </tr>   
        <tr>
	        <td scope="row"><?php echo __( 'Twitter id', 'jolili_theme') ?></td>
	        <td>
	            <input type="text" name="twitter_id" value="<?php print get_option('twitter_id'); ?>"></input>
	        </td>
        </tr>   
        <tr>
	        <td scope="row"><?php echo __( 'Google+ id', 'jolili_theme') ?></td>
	        <td>
	            <input type="text" name="gplus_id" value="<?php print get_option('gplus_id'); ?>"></input>
	        </td>
        </tr>   
        
    </table>
    <p class="submit">
    <input type="submit" class="button-primary" value="<?php _e('Save Changes','jolili_theme') ?>" />
    </p>
</form>
</div>
<?php
} ?>