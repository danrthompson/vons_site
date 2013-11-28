<?php

/*
	Metabox to Custom Header Headings (Header and Subline)
*/
	
	add_action("admin_init", "xt_custom_heading_metabox");     
      
    function xt_custom_heading_metabox() {  
		
		add_meta_box("xt_custom_heading_metabox_options", "Page Headings Text", "xt_custom_heading_metabox_options", "page", "normal");
	}
      
	/* Custom Header Background Options */
	  
    function xt_custom_heading_metabox_options()
	{  
		global $post;  
		if ( defined('DOING_AUTOSAVE') && DOING_AUTOSAVE ) return $post_id;  
		$custom = get_post_custom($post->ID);  
	
		$heading_title = (isset($custom["heading-title"])) ? $custom["heading-title"][0] : '';
		$heading_subline = (isset($custom["heading-subline"])) ? $custom["heading-subline"][0] : '';
		$title_position = (isset($custom["title-position"])) ? $custom["title-position"][0] : 'inside';
    ?>  
		<div class="xt-metabox">
		
			<div class="xt-title"><h2>Heading Texts</h2></div>

			<?php wp_nonce_field( basename( __FILE__ ), 'xt_custom_heading_settings_nonce' ); ?>
			
			<div class="xt-input">
				<label>Heading Title</label>
				<input type="text" name="heading-title" value="<?php echo $heading_title; ?>" />
				<small>(Optional) This is the big title of page.</small>
			</div>

			<div class="xt-input">
				<label>Heading Subline</label>
				<input type="text" name="heading-subline" value="<?php echo $heading_subline; ?>" />
				<small>(Optional) This is the subline, appears below title of page.</small>
			</div>

			<div class="xt-input">
				<label>Page Title Position</label>
				<select name="title-position">
					<option value="inside"<?php if($title_position == 'inside') echo ' selected="selected"'; ?>>Inside</option>
					<option value="outside"<?php if($title_position == 'outside') echo ' selected="selected"'; ?>>Outside</option>
					<option value="not"<?php if($title_position == 'not') echo ' selected="selected"'; ?>>Not Display Title</option>
				</select>
				<small>Select the position where the title of page will be displayed.</small>
			</div>
			
		</div>
    <?php  
    }  
	
	add_action('save_post', 'xt_custom_heading_save');   
      
	function xt_custom_heading_save(){  
		global $post; 
		global $post_id;   

		if( defined('DOING_AUTOSAVE') && DOING_AUTOSAVE ) return $post_id;

		if( !isset( $_POST['xt_custom_heading_settings_nonce'] ) || !wp_verify_nonce( $_POST['xt_custom_heading_settings_nonce'], basename( __FILE__ ) ) ) return $post_id;

		update_post_meta($post->ID, "heading-title", $_POST["heading-title"]);
		update_post_meta($post->ID, "heading-subline", $_POST["heading-subline"]);;
		update_post_meta($post->ID, "title-position", $_POST["title-position"]);;
	}

	function xt_custom_heading_print() {

		$heading_title = get_post_meta(get_the_ID(), 'heading-title', true);
		$heading_subline = get_post_meta(get_the_ID(), 'heading-subline', true);

		if($heading_subline != '' OR $heading_title != '') :
		?>
			<div id="header-line">
				<?php if($heading_title != '')
					echo '<h1>'.$heading_title.'</h1>';
				?>
				<?php if($heading_subline != '')
					echo '<p>'.$heading_subline.'</p>';
				?>
			</div><!-- #header-line -->
		<?php
		endif;
	}

	function xt_custom_heading_print_manual($title, $subtitle) {

		$heading_title = $title;
		$heading_subline = $subtitle;

		if($heading_subline != '' OR $heading_title != '') :
		?>
			<div id="header-line">
				<?php if($heading_title != '')
					echo '<h1>'.$heading_title.'</h1>';
				?>
				<?php if($heading_subline != '')
					echo '<p>'.$heading_subline.'</p>';
				?>
			</div><!-- #header-line -->
		<?php
		endif;
	}