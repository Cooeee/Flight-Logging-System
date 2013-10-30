<?php
App::uses('AppController', 'Controller');
/**
 * Aircrafts Controller
 *
 * @property Aircraft $Aircraft
 */
class AircraftsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Aircraft->recursive = 0;
		$this->set('aircrafts', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Aircraft->exists($id)) {
			throw new NotFoundException(__('Invalid aircraft'));
		}
		$options = array('conditions' => array('Aircraft.' . $this->Aircraft->primaryKey => $id));
		$this->set('aircraft', $this->Aircraft->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Aircraft->create();
			if ($this->Aircraft->save($this->request->data)) {
				$this->Session->setFlash(__('The aircraft has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The aircraft could not be saved. Please, try again.'));
			}
		}
		$aircraftTypes = $this->Aircraft->AircraftType->find('list');
		$this->set(compact('aircraftTypes'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Aircraft->exists($id)) {
			throw new NotFoundException(__('Invalid aircraft'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Aircraft->save($this->request->data)) {
				$this->Session->setFlash(__('The aircraft has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The aircraft could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Aircraft.' . $this->Aircraft->primaryKey => $id));
			$this->request->data = $this->Aircraft->find('first', $options);
		}
		$aircraftTypes = $this->Aircraft->AircraftType->find('list');
		$this->set(compact('aircraftTypes'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @throws MethodNotAllowedException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Aircraft->id = $id;
		if (!$this->Aircraft->exists()) {
			throw new NotFoundException(__('Invalid aircraft'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Aircraft->delete()) {
			$this->Session->setFlash(__('Aircraft deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Aircraft was not deleted'));
		$this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Aircraft->recursive = 0;
		$this->set('aircrafts', $this->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Aircraft->exists($id)) {
			throw new NotFoundException(__('Invalid aircraft'));
		}
		$options = array('conditions' => array('Aircraft.' . $this->Aircraft->primaryKey => $id));
		$this->set('aircraft', $this->Aircraft->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Aircraft->create();
			if ($this->Aircraft->save($this->request->data)) {
				$this->Session->setFlash(__('The aircraft has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The aircraft could not be saved. Please, try again.'));
			}
		}
		$aircraftTypes = $this->Aircraft->AircraftType->find('list');
		$this->set(compact('aircraftTypes'));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->Aircraft->exists($id)) {
			throw new NotFoundException(__('Invalid aircraft'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Aircraft->save($this->request->data)) {
				$this->Session->setFlash(__('The aircraft has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The aircraft could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Aircraft.' . $this->Aircraft->primaryKey => $id));
			$this->request->data = $this->Aircraft->find('first', $options);
		}
		$aircraftTypes = $this->Aircraft->AircraftType->find('list');
		$this->set(compact('aircraftTypes'));
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @throws MethodNotAllowedException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->Aircraft->id = $id;
		if (!$this->Aircraft->exists()) {
			throw new NotFoundException(__('Invalid aircraft'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Aircraft->delete()) {
			$this->Session->setFlash(__('Aircraft deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Aircraft was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
