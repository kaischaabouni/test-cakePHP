<?php
App::uses('Delegue', 'Model');

/**
 * Delegue Test Case
 *
 */
class DelegueTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.delegue',
		'app.ville',
		'app.region',
		'app.zone',
		'app.delegues_zone',
		'app.laboratoire',
		'app.delegues_laboratoire'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Delegue = ClassRegistry::init('Delegue');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Delegue);

		parent::tearDown();
	}

}
