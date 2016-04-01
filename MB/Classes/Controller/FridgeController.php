<?php
namespace MB\Classes\Controller;
/**
 * Created by PhpStorm.
 * User: Cox
 * Date: 24.03.2016
 * Time: 20:20
 */


class FridgeController extends ActionController{



	function showAction () {
		echo $this->view->render( 'Index.html');
	}
	/**
	 * @param $object

	function showAction( $object ) {
		$content = '<ul>';
		foreach ( (array) $object as $key => $value ) {
			$method    = '';
			$getMethod = 'get' . ucfirst( trim( str_replace( '*', '', $key ) ) );
			$isMethod  = 'is' . ucfirst( trim( str_replace( '*', '', $key ) ) );
			if ( method_exists( $object, $getMethod ) ) {
				$method = $getMethod;
			}
			if ( method_exists( $object, $isMethod ) ) {
				$method = $isMethod;
			}
			if ( method_exists( $object, $method ) ) {
				if ( is_object( $object->$method() ) ) {
					$content .= '<li>' . ucfirst( trim( str_replace( '*', '', $key ) ) ) . ': <ul>';
					foreach ( $object->$method() as $subValue ) {
						foreach ( (array) $subValue as $subKey => $value ) {
							$method = 'get' . ucfirst( trim( str_replace( '*', '', $subKey ) ) );
							if ( method_exists( $object, $method ) ) {
								$content .= '<li>';
								$content .= ucfirst( trim( str_replace( '*', '', $subKey ) ) ) . ':' . $subValue->$method();
								$content .= '</li>';
							}
						}
					}
					$content .= '</li></ul>';
				} else {
					$content .= '<li>';
					$content .= ucfirst( trim( str_replace( '*', '', $key ) ) ) . ':' . $object->$method();
					$content .= '</li>';
				}

			}
		}
		$content .= '</ul>';
		print_r( $content );
	}
	 */
	public function listAction() {

	}


}

