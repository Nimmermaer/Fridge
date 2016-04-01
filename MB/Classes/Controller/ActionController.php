<?php
namespace MB\Classes\Controller;

/**
 * Created by PhpStorm.
 * User: Cox
 * Date: 01.04.2016
 * Time: 22:31
 */




class ActionController {


	protected $view = null;

	public function __construct() {
		$this->loadView();
		$this->startAutoloader();

	}

	protected function loadView() {

		require_once '/vendor/autoload.php';

		$loader = new \Twig_Loader_Filesystem( 'MB/Resources/Html/Templates' );

		$this->view = new \Twig_Environment( $loader, array(
			'debug' => true,
			'cache' => 'MB/Resources/Html/twig_cache',
		)
		);


	}

	/**
	 *
	 */
	protected function startAutoloader() {




	}
}