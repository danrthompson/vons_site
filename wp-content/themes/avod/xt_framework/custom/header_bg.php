<?php

/*
	Metabox to Custom Header Background Selector
*/
	
	add_action("admin_init", "xt_custom_header_metabox");     
      
    function xt_custom_header_metabox() {  
		
		add_meta_box("xt_custom_header_metabox_options", "Page Header Settings", "xt_custom_header_metabox_options", "page", "normal");
	}
      
	/* Custom Header Background Options */
	  
    function xt_custom_header_metabox_options()
	{  
		global $post;  
		if ( defined('DOING_AUTOSAVE') && DOING_AUTOSAVE ) return $post_id;  
		$custom = get_post_custom($post->ID);  
	
		$header_bg = (isset($custom["header-bg"])) ? $custom["header-bg"][0] : '';
		$header_type = (isset($custom["header-type"])) ? $custom["header-type"][0] : '';
		$header_fixed = (isset($custom["header-fixed"])) ? $custom["header-fixed"][0] : '';
		$header_height = (isset($custom["header-height"])) ? $custom["header-height"][0] : '';
		$header_text = (isset($custom["header-text"])) ? $custom["header-text"][0] : '';
		$header_position = (isset($custom["header-position"])) ? $custom["header-position"][0] : 'center center';
    ?>  
		<div class="xt-metabox">
		
			<div class="xt-title"><h2>Header Settings</h2></div>

			<?php wp_nonce_field( basename( __FILE__ ), 'xt_custom_header_settings_nonce' ); ?>
			
			<div id="xt-header-bg" class="xt-input">
				<div class="xt-preview">
					<?php if($header_bg != '') : ?>
					<img src="<?php echo $header_bg; ?>" alt="" />
					<?php endif; ?>
				</div>

				<label>Upload Header Image</label>
				<input type="text" class="upload-admin-input" name="header-bg" value="<?php echo $header_bg; ?>" /> 
				<input class="button button-primary upload-admin" type="button" value="Upload" />

				<div class="xt-clear"></div>
			</div>

			<div class="xt-input">
				<label>Background Type</label>
				<select name="header-type">
					<option value="full"<?php if($header_type == 'full') echo ' selected="selected"'; ?>>Full Size (No Repeat)</option>
					<option value="tile"<?php if($header_type == 'tile') echo ' selected="selected"'; ?>>Tile (Repeat)</option>
				</select>
			</div>

			<div class="xt-input">
				<label>Header Bar Height</label>
				<input type="text" name="header-height" value="<?php echo $header_height; ?>" />
				<small>Value in pixels, don't use 'px', only numbers. Default: 100</small>
			</div>

			<div class="xt-input">
				<label>Position Type</label>
				<select name="header-fixed">
					<option value=""<?php if($header_fixed == '') echo ' selected="selected"'; ?>>Normal</option>
					<option value="fixed"<?php if($header_fixed == 'fixed') echo ' selected="selected"'; ?>>Fixed</option>
				</select>
				<small>Select the <em>Fixed</em> option to create an effect like parallax.</small>
			</div>

			<div class="xt-input">
				<label>Background Position:</label>
				<select name="header-position">
					<option value="center center"<?php if($header_position == 'center center') echo ' selected="selected"'; ?>>center center</option>
					<option value="center top"<?php if($header_position == 'center top') echo ' selected="selected"'; ?>>center top</option>
					<option value="center bottom"<?php if($header_position == 'center bottom') echo ' selected="selected"'; ?>>center bottom</option>
					<option value="left top"<?php if($header_position == 'left top') echo ' selected="selected"'; ?>>left top</option>
					<option value="left center"<?php if($header_position == 'left center') echo ' selected="selected"'; ?>>left center</option>
					<option value="left bottom"<?php if($header_position == 'left bottom') echo ' selected="selected"'; ?>>left bottom</option>
					<option value="right top"<?php if($header_position == 'right top') echo ' selected="selected"'; ?>>right top</option>
					<option value="right center"<?php if($header_position == 'right center') echo ' selected="selected"'; ?>>right center</option>
					<option value="right bottom"<?php if($header_position == 'right bottom') echo ' selected="selected"'; ?>>right bottom</option>
				</select>
				<small>Select the way the background will be positioned. Horizontal and Vertical alignment respectively.</small>
			</div>

			<div class="xt-input">
				<label>Optional Text</label>
				<input type="text" name="header-text" value="<?php echo $header_text; ?>" />
				<small>Optional text that will be inserted inside this header block.</small>
			</div>
			
		</div>
    <?php  
    }  
	
	add_action('save_post', 'xt_custom_header_save');   
      
	function xt_custom_header_save(){  
		global $post; 
		global $post_id;   

		if( defined('DOING_AUTOSAVE') && DOING_AUTOSAVE ) return $post_id;

		if( !isset( $_POST['xt_custom_header_settings_nonce'] ) || !wp_verify_nonce( $_POST['xt_custom_header_settings_nonce'], basename( __FILE__ ) ) ) return $post_id;

		update_post_meta($post->ID, "header-bg", $_POST["header-bg"]);
		update_post_meta($post->ID, "header-type", $_POST["header-type"]);
		update_post_meta($post->ID, "header-height", $_POST["header-height"]);
		update_post_meta($post->ID, "header-fixed", $_POST["header-fixed"]);
		update_post_meta($post->ID, "header-position", $_POST["header-position"]);
		update_post_meta($post->ID, "header-text", $_POST["header-text"]);
	}

	function xt_custom_header_print() {

		$header_bg = get_post_meta(get_the_ID(), 'header-bg', true);
		$header_type = get_post_meta(get_the_ID(), 'header-type', true);
		$header_height = get_post_meta(get_the_ID(), 'header-height', true);
		if($header_height == '')
			$header_height = 100;
		$header_fixed = get_post_meta(get_the_ID(), 'header-fixed', true);
		$header_position = get_post_meta(get_the_ID(), 'header-position', true);
		$header_text = get_post_meta(get_the_ID(), 'header-text', true);

		if($header_bg != '' || $header_text != '') :

			$css = '';

			// Text
			if($header_text != '')
				$header_text = '<div class="container"><h1 style="line-height: '.$header_height.'px;">'.$header_text.'</h1></div>';

			// Add height
			if($header_height != '')
				$css .= ' height: '.$header_height.'px;';
			// Add background type
			if($header_bg != '') :
				if($header_type == 'full' OR $header_type == '')
					$css .= 'background: url('.$header_bg.') no-repeat '.$header_position.' '.$header_fixed.'; -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover;';
				else
					$css .= 'background: url('.$header_bg.') repeat '.$header_position.' '.$header_fixed.';';
			endif;
		?>
			<div id="image-header" style="<?php echo $css; ?>"><?php echo $header_text; ?></div>
		<?php
		endif;
	}

	function xt_custom_header_print_manual($bg, $type, $height, $fixed, $position) {

		$header_bg = $bg;
		$header_type = $type;
		$header_height = $height;
		$header_fixed = $fixed;
		$header_position = $position;

		if($header_bg != '') :

			$css = '';

			// Add height
			if($header_height != '')
				$css .= ' height: '.$header_height.'px;';
			// Add background type
			if($header_type == 'full' OR $header_type == '')
				$css .= 'background: url('.$header_bg.') no-repeat '.$header_position.' '.$header_fixed.'; -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover;';
			else
				$css .= 'background: url('.$header_bg.') repeat '.$header_position.' '.$header_fixed.';';
		?>
			<div id="image-header" style="<?php echo $css; ?>"></div>
		<?php
		endif;
	}