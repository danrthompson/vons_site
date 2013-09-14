	
	jQuery(document).ready(function() {
		
		var wpts_meta_field = null;
		var storeSendToEditor = window.send_to_editor;
				
		jQuery('.dc-upload-admin').on("click", function() {
			wpts_meta_field = jQuery(this).siblings(".dc-upload-admin-input");
			formfield = jQuery(this).siblings(".dc-upload-admin-input").attr('name');
			tb_show('', 'media-upload.php?type=image&amp;TB_iframe=true');
			
			window.send_to_editor = function(html) {
				imgurl = jQuery('img',html).attr('src');
				wpts_meta_field.val(imgurl);
				jQuery("#layer-params #layer-fields").trigger("updated");
				tb_remove();
				window.send_to_editor = storeSendToEditor;
			}
			
			return false;
		});
	
	});