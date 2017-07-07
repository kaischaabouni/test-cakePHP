<?php
App::uses('AppController', 'Controller');
/**
 * Villes Controller
 *
 * @property Ville $Ville
 */
class VillesController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Ville->recursive = 0;
		$this->set('villes', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Ville->id = $id;
		if (!$this->Ville->exists()) {
			throw new NotFoundException(__('Invalid ville'));
		}
		$this->set('ville', $this->Ville->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Ville->create();
			if ($this->Ville->save($this->request->data)) {
				$this->Session->setFlash(__('The ville has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The ville could not be saved. Please, try again.'));
			}
		}
		$regions = $this->Ville->Region->find('list');
		$this->set(compact('regions'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Ville->id = $id;
		if (!$this->Ville->exists()) {
			throw new NotFoundException(__('Invalid ville'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Ville->save($this->request->data)) {
				$this->Session->setFlash(__('The ville has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The ville could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Ville->read(null, $id);
		}
		$regions = $this->Ville->Region->find('list');
		$this->set(compact('regions'));
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
		$this->Ville->id = $id;
		if (!$this->Ville->exists()) {
			throw new NotFoundException(__('Invalid ville'));
		}
		if ($this->Ville->delete()) {
			$this->Session->setFlash(__('Ville deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Ville was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
