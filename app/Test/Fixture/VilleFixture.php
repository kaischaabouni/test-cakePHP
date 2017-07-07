<?php
/**
 * VilleFixture
 *
 */
class VilleFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'region_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'nom_ville' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 20, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'id_region' => array('column' => 'region_id', 'unique' => 0),
			'id_region_2' => array('column' => 'region_id', 'unique' => 0),
			'id_region_3' => array('column' => 'region_id', 'unique' => 0)
		),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'region_id' => 1,
			'nom_ville' => 'Lorem ipsum dolor '
		),
	);

}
