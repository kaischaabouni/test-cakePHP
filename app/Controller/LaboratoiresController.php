<?php
App::uses('AppController', 'Controller');
/**
 * Laboratoires Controller
 *
 * @property Laboratoire $Laboratoire
 */
class LaboratoiresController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Laboratoire->recursive = 0;
		$this->set('laboratoires', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Laboratoire->id = $id;
		if (!$this->Laboratoire->exists()) {
			throw new NotFoundException(__('Invalid laboratoire'));
		}
		$this->set('laboratoire', $this->Laboratoire->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Laboratoire->create();
			if ($this->Laboratoire->save($this->request->data)) {
				$this->Session->setFlash(__('The laboratoire has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The laboratoire could not be saved. Please, try again.'));
			}
		}
		$delegues = $this->Laboratoire->Delegue->find('list');
		$this->set(compact('delegues'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Laboratoire->id = $id;
		if (!$this->Laboratoire->exists()) {
			throw new NotFoundException(__('Invalid laboratoire'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Laboratoire->save($this->request->data)) {
				$this->Session->setFlash(__('The laboratoire has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The laboratoire could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Laboratoire->read(null, $id);
		}
		$delegues = $this->Laboratoire->Delegue->find('list');
		$this->set(compact('delegues'));
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
		$this->Laboratoire->id = $id;
		if (!$this->Laboratoire->exists()) {
			throw new NotFoundException(__('Invalid laboratoire'));
		}
		if ($this->Laboratoire->delete()) {
			$this->Session->setFlash(__('Laboratoire deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Laboratoire was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
