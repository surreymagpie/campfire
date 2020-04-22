<?php

if (post_password_required() ){
	return;
}

$comment_args = array(
	'reply_text'        => __('Reply', 'campfire'),
	'format'            => 'html5',
);

// Comment Loop
if ( have_comments() ) : ?>
<section class="comments">
    <h3 class="comments__title"><?php _e('Comments', 'campfire'); ?></h3>
    <p>There are <?php comments_number(); ?> on <?php the_title(); ?></p>
    <ul class="comments__list">
        <?php wp_list_comments( $comment_args); ?>
    </ul>
</section>
<?php else :
	_e('No comments found.', 'campfire');
endif;

// Comment form
$fields = array(
	'author'	=>	'<div class="form__group form__group--author"><label class="form__label" for="author">Name *</label><input id="author" name="author" type="text" class="form__input" value="" maxlength="245" required="required" /></div>',
	'email'	=>	'<div class="form__group form__group--email"><label class="form__label" for="email">Email *</label><input id="email" name="email" type="email" class="form__input" value="" maxlength="100" aria-describedby="email-notes" required="required" /></div>',
	'url'	=>	'<div class="form__group form__group--url"><label class="form__label" for="url">Website</label><input id="url" name="url" type="url" class="form__input" value="" maxlength="200" /></div>',
);

$form_args = array(
	'id_form'			=> 'comment-form',
	'class_form'		=> 'comment-form',
	'id_submit'			=> 'submit',
	'class_submit'		=> 'form__submit',
	'name_submit'		=> 'submit',
	'title_reply'		=> __( 'Leave a Reply' ),
	'title_reply_to'	=> __( 'Leave a Reply to %s' ),
	'cancel_reply_link'	=> __( 'Cancel Reply' ),
	'label_submit'		=> __( 'Post Comment' ),
	'format'			=> 'html5',
	'comment_field'		=> '<div class="form__group form__group--comment"><label class="form__label" for="comment">' . _x( 'Comment', 'campfire' ) . '</label><textarea id="comment" class="form__input" name="comment" aria-required="true" cols="45" rows="6" required="required"></textarea></div>',
	'fields'			=> apply_filters( 'comment_form_default_fields', $fields ),
);

if (comments_open()) :
	comment_form( $form_args);
else :
	_e('Comments are closed.', 'campfire');
endif;