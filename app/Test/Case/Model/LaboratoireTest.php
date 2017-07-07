<?php
App::uses('Laboratoire', 'Model');

/**
 * Laboratoire Test Case
 *
 */
class LaboratoireTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.laboratoire',
		'app.delegue',
		'app.ville',
		'app.region',
		'app.zone',
		'app.delegues_zone',
		'app.delegues_laboratoire'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Laboratoire = ClassRegistry::init('Laboratoire');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Laboratoire);

		parent::tearDown();
	}

}
