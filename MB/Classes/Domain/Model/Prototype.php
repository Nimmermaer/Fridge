<?php
/**
 * Created by PhpStorm.
 * User: Cox
 * Date: 24.03.2016
 * Time: 22:53
 */

namespace MB\Classes\Domain\Model;

/**
 * Class Prototype
 * @package MB\Classes\Domain\Model
 */
class Prototype {

	/**
	 * @var float
	 */
	protected $volume;

	/**
	 * @return float
	 */
	public function getVolume() {
		return $this->volume;
	}

	/**
	 * @param float $volume
	 */
	public function setVolume( $volume ) {
		$this->volume = $volume;
	}


	/**
	 * @param $values
	 */
	public function __construct( $values ) {
		foreach ( $values as $key => $value ) {
			if ( property_exists( $this, $key ) ) {
				$setter = 'set'.ucfirst($key);
				$this->$setter($value) ;
			}
		}

	}


}