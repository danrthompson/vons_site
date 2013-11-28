<?php 

function theme_comments($comment, $args, $depth) 
{
	$GLOBALS['comment'] = $comment; 

	$authID=get_the_author_meta('ID');

	?>
	<li <?php comment_class('blog_comment notepad-border'); ?> id="comment-<?php comment_ID(); ?>">
        <div class="blog_comment_user">
            <a href="<?php echo get_comment_author_url($coment-ID); ?>"><?php echo get_avatar($comment,$size='60',$default=''); ?></a>
            <?php if($authID == $comment->user_id) : ?>
        	<span><?php _e("AUTHOR", 'avod'); ?></span>
        	<?php endif; ?>
        </div>
        <div class="blog_comment_det">
            <p class="blog_comment_name_det">
                <a href="<?php echo get_comment_author_url($comment->user_id); ?>"><?php echo comment_author(); ?> </a> <?php echo get_comment_date(); ?>
            	<?php 
				$reply = get_comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth'], 'reply_text' => __('Reply', 'avod') )));
				$reply = str_replace("comment-reply-link", "comment-reply-link reply", $reply);
				echo $reply;
				?>
            </p>
            <div class="blog_comment_text">
                <?php comment_text() ?>
				<?php if ($comment->comment_approved == '0') : ?>
					<p><strong><?php _e('Your comment are waiting for approval! Just wait...', 'avod') ?></strong></p>
				<?php endif; ?>
            </div>
        </div><!--blog_comment_det-->
        <div class="clearboth"></div>
    </li><!--blog_comment-->
	
<?php
}
?>
<?php if ( comments_open() ) : ?>
			<?php if(get_comments_number() > 0) : ?>

				<div class="comments" id="comments">

                    <div id="comments_section">
                        <div id="comments_header"><h3><?php printf( _n( '1 Comment', '%1$s Comments', get_comments_number(), 'avod' ),
							number_format_i18n( get_comments_number() ), get_the_title() ); ?></h3></div>

							<div class="comments-nav">
							<?php 
								paginate_comments_links();
							?>
							</div>

							<ul class="comments-list">

								<?php

								wp_list_comments( array( 'callback' => 'theme_comments' ) );
								?>

							</ul>

							<div class="comments-nav">
							<?php 
								paginate_comments_links();
							?>
							</div>
                                                
                    </div><!--comments_section-->

				</div> <!-- #comments -->

				<?php endif; ?>

					<div id="leave_a_reponse">
	     	                    
						<?php 

							$commenter = wp_get_current_commenter();
							$req = get_option( 'require_name_email' );
							$aria_req = ( $req ? " aria-required='true'" : '' );

							$fields = array(
								'author' => '<div class="one_half">
								<input type="text" onfocus="if(this.value==\''.__("Name (required)", 'avod').'\')this.value=\'\';" 
                            onblur="if(this.value==\'\')this.value=\''.__("Name (required)", 'avod').'\'" onclick="if(this.value==\''.__("Name (required)", 'avod').'\')this.value=\'\';" 
                            class="text_box_small input_field" value="'.__("Name (required)", 'avod').'" name="author" id="author" />
                            </div>',
								
								'email'  => '<div class="one_half last">
								<input type="text" onfocus="if(this.value==\''.__("E-mail (will not be published)", 'avod').'\')this.value=\'\';" 
                            onblur="if(this.value==\'\')this.value=\''.__("E-mail (will not be published)", 'avod').'\';" onclick="if(this.value==\''.__("E-mail (will not be published)", 'avod').'\')this.value=\'\';" 
                            class="text_box_small input_field" value="'.__("E-mail (will not be published)", 'avod').'" name="email" id="email" />
                                </div> <div class="clearboth"></div>',
								
								'url'    => '<input type="text" onfocus="if(this.value==\''.__("Website (optional)", 'avod').'\')this.value=\'\';"                                     
                            onblur="if(this.value==\'\')this.value=\''.__("Website (optional)", 'avod').'\';" onclick="if(this.value==\''.__("Website (optional)", 'avod').'\')this.value=\'\';" 
                            class="text_box_small input_field last" value="'.__("Website (optional)", 'avod').'" name="url">'
							);

							$defaults = array(
								'comment_notes_before' => null,
								'comment_notes_after' => null,
								'fields'               => apply_filters( 'comment_form_default_fields', $fields ),
								'comment_field'  => '<textarea class="text_area input_field"  onfocus="if(this.value==\''.__("Comments (required)", 'avod').'\')this.value=\'\';"
                            		onblur="if(this.value==\'\')this.value=\''.__("Comments (required)", 'avod').'\';" name="comment" id="comment">'.__("Comments (required)", 'avod').'</textarea>',
								'title_reply'          => __('Leave a Comment', 'avod'),
								'title_reply_to'       => __( 'Reply to %s', 'avod'),
								'cancel_reply_link'    => __( ' - Cancel Reply', 'avod'),
								'label_submit'         => __( 'Submit', 'avod'),
								'id_form' => 'respond',
								'id_submit' => 'response_btn'

							);


							comment_form($defaults); 
						?>	
						<script type="text/javascript">
							jQuery(document).ready(function() {
								jQuery("#respond").submit(function() {
								
									if(jQuery("#author").length > 0) {
										if(jQuery("#author").val() != "" && jQuery("#author").val() == "<?php _e("Name (required)", 'avod'); ?>") {
											alert("<?php _e("Please, type your name.", 'avod'); ?>");
											jQuery("#author").focus();
											return false;
										}
									}
									
									if(jQuery("#email").length > 0) {
										if(jQuery("#email").val() != "" && jQuery("#email").val() == "<?php _e("E-mail (will not be published)", 'avod'); ?>") {
											alert("<?php _e("Please, type your email.", 'avod'); ?>");
											jQuery("#email").focus();
											return false;
										}
									}
									
									if(jQuery("#comment").length > 0) {
										if(jQuery("#comment").val() != "" && jQuery("#comment").val() == "<?php _e("Comments (required)", 'avod'); ?>") {
											alert("<?php _e("Please, type your comment.", 'avod'); ?>");
											jQuery("#comment").focus();
											return false;
										}
									}
								
									return true;
								});
							});
						</script>
					</div><!--leave_a_response-->						
<?php endif; ?>
