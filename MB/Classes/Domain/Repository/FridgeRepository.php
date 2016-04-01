<?php
/**
 * Created by PhpStorm.
 * User: Cox
 * Date: 24.03.2016
 * Time: 20:34
 */

namespace MB\Classes\Domain\Repository;


class FridgeRepository {

	public static function initDB() {
		$sql = array();

		try {
			$db = new PDO( 'mysql:host=localhost;dbname=fringes;charset=utf8mb4', 'root', '' );
			$db->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );//Error Handling

			$sql[] = "CREATE TABLE IF NOT EXISTS fridges (
			id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
			temperature VARCHAR(30) NOT NULL,
			volume FLOAT (30) NOT NULL,
			energy int(11) NOT NULL,
			stateLight INT (11) NOT NULL,
			stateDoor INT (11) NOT NULL,
			drawers INT(11) NOT NULL
				)";

			$sql[] = "CREATE TABLE IF NOT EXISTS drawer (
			id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
			volume FLOAT (30) NOT NULL,
			fridge_id INT (11) NOT NULL
				)";

			foreach ( $sql as $query ) {
				$db->exec( $query );
			}

		} catch ( \PDOException $e ) {
			echo $e->getMessage();
		}
	}


}