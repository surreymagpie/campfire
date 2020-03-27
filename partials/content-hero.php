<?php

if (has_post_thumbnail()): 

	$image_id = get_post_thumbnail_id();
	$img_src = wp_get_attachment_image_url( $image_id, 'large' );
	$img_srcset = wp_get_attachment_image_srcset( $image_id, 'full' );
	$img_alt = get_post_meta( $image_id, '_wp_attachment_image_alt', true ); ?>
<div class="banner ">
	<img 	src="<?php echo esc_attr( $img_src ); ?>"
			srcset="<?php echo esc_attr( $img_srcset ); ?>"
			sizes="100vw"
			alt="<?php echo $img_alt; ?>"
			class="banner__image">
</div>

<?php endif;
