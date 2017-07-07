<?php
App::uses('AppController', 'Controller');
/**
 * Delegues Controller
 *
 * @property Delegue $Delegue
 */
class DeleguesController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Delegue->recursive = 0;
		$this->set('delegues', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Delegue->id = $id;
		if (!$this->Delegue->exists()) {
			throw new NotFoundException(__('Invalid delegue'));
		}
		$this->set('delegue', $this->Delegue->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Delegue->create();
			if ($this->Delegue->save($this->request->data)) {
				$this->Session->setFlash(__('The delegue has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The delegue could not be saved. Please, try again.'));
			}
		}
		$villes = $this->Delegue->Ville->find('list');
		$laboratoires = $this->Delegue->Laboratoire->find('list');
		$zones = $this->Delegue->Zone->find('list');
		$this->set(compact('villes', 'laboratoires', 'zones'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Delegue->id = $id;
		if (!$this->Delegue->exists()) {
			throw new NotFoundException(__('Invalid delegue'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Delegue->save($this->request->data)) {
				$this->Session->setFlash(__('The delegue has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The delegue could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Delegue->read(null, $id);
		}
		$villes = $this->Delegue->Ville->find('list');
		$laboratoires = $this->Delegue->Laboratoire->find('list');
		$zones = $this->Delegue->Zone->find('list');
		$this->set(compact('villes', 'laboratoires', 'zones'));
	}

/**
 * delete method
 *
 * @throws MethodNotAllowedException
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->Delegue->id = $id;
		if (!$this->Delegue->exists()) {
			throw new NotFoundException(__('Invalid delegue'));
		}
		if ($this->Delegue->delete()) {
			$this->Session->setFlash(__('Delegue deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Delegue was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
