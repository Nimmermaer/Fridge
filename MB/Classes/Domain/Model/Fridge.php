<?php
namespace MB\Classes\Domain\Model;
	/**
	 * Created by PhpStorm.
	 * User: Cox
	 * Date: 24.03.2016
	 * Time: 19:12
	 */
/**
 * Class Fridge
 * @package MB\Classes\Domain\Model
 */
class Fridge extends Prototype {

	/**
	 * @var integer
	 */
	protected $temperature = 0;

	/**
	 * @var integer
	 */
	protected $total = 0;

	/**
	 * @var \SplObjectStorage<\MB\Classes\Domain\Model\Drawer>
	 */
	protected $drawers;

	/**
	 * @var boolean
	 */
	protected $energy = 0;

	/** @var  boolean */
	protected $stateDoor = 0;

	/**
	 * @var boolean
	 */
	protected $stateLight = 0;

	/**
	 * @return int
	 */
	public function getTemperature() {
		return $this->temperature;
	}

	/**
	 * @param int
	 */
	public function setTemperature( $temperature ) {
		if ( $temperature >= 3 && $temperature <= 7 ) {
			$this->temperature = $temperature;
		} else {
			if ( $temperature > 7 ) {
				$temperature = 7;
			}
			if ( $temperature < 3 ) {
				$temperature = 3;
			}
		}
		$this->temperature = $temperature;

	}

	/**
	 * @return \SplObjectStorage<\MB\Classes\Domain\Model\Drawer>
	 */
	public function getDrawers() {

		return $this->drawers;
	}

	/**
	 * @param \SplObjectStorage<\MB\Classes\Domain\Model\Drawer> $drawers
	 */
	public function setDrawers( $drawers ) {
		$this->drawers = $drawers;
	}

	/**
	 * @param \MB\Classes\Domain\Model\Drawer $drawerToAdd
	 */
	public function addDrawer( \MB\Classes\Domain\Model\Drawer $drawerToAdd ) {
		if ( $this->controlValue( $drawerToAdd ) ) {
			$this->drawers->attach( $drawerToAdd );
		}

	}

	/**
	 * @param \MB\Classes\Domain\Model\Drawer $drawerToRemove
	 */
	public function removeDrawer( \MB\Classes\Domain\Model\Drawer $drawerToRemove ) {
		$this->drawers->detach( $drawerToRemove );
	}

	/**
	 * @return boolean
	 */
	public function isEnergy() {

		return $this->energy;
	}

	/**
	 * @param boolean $energy
	 */
	public function setEnergy( $energy ) {
		if ( $this->isEnergy() == 0 ) {
			$this->setStateLight( 0 );
		}
		$this->energy = $energy;
	}

	/**
	 * @return boolean
	 */
	public function isStateDoor() {

		return $this->stateDoor;
	}

	/**
	 * @param boolean $stateDoor
	 */
	public function setStateDoor( $stateDoor ) {
		if ( $this->isStateDoor() == 1 && $this->isEnergy() == 1 ) {
			$this->setStateLight( 1 );
		}
		$this->stateDoor = $stateDoor;
	}

	/**
	 * @return boolean
	 */
	public function isStateLight() {

		return $this->stateLight;
	}

	/**
	 * @param boolean $stateLight
	 */
	public function setStateLight( $stateLight ) {
		$this->stateLight = $stateLight;
		if ( $this->isStateLight() != $this->isStateDoor() && $this->isEnergy() == 1 ) {
			$this->stateLight =  $this->isStateDoor() ;
		}

	}

	/**
	 * @return int
	 */
	public function getTotal() {
		return $this->total;
	}

	/**
	 * @param int $total
	 */
	public function setTotal( $total ) {
		$total       = $this->volume - $total;
		$this->total = $total;
	}

	/**
	 * @param string $drawerToAdd
	 *
	 * @return bool
	 */
	public function controlValue( \MB\Classes\Domain\Model\Drawer $drawerToAdd ) {
		$total = 0;
		if ( $drawerToAdd ) {
			$total = $drawerToAdd->getVolume();
		}
		foreach ( $this->drawers as $key => $drawer ) {
			$count = '';
			$count = $this->drawers->current()->getVolume();
			$total = $count + $total;
			if ( $total >= $this->getVolume() ) {
				echo 'Kühlschrank voll';

				return false;
			}
			$this->setTotal( $total );
		}

		return true;
	}


}