<?php
App::uses('AppController', 'Controller');
/**
 * PeopleGroups Controller
 *
 * @property PeopleGroup $PeopleGroup
 */
class PeopleGroupsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->PeopleGroup->recursive = 0;
		$this->set('peopleGroups', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->PeopleGroup->exists($id)) {
			throw new NotFoundException(__('Invalid people group'));
		}
		$options = array('conditions' => array('PeopleGroup.' . $this->PeopleGroup->primaryKey => $id));
		$this->set('peopleGroup', $this->PeopleGroup->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->PeopleGroup->create();
			if ($this->PeopleGroup->save($this->request->data)) {
				$this->Session->setFlash(__('The people group has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The people group could not be saved. Please, try again.'));
			}
		}
		$people = $this->PeopleGroup->Person->find('list');
		$groups = $this->PeopleGroup->Group->find('list');
		$this->set(compact('people', 'groups'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->PeopleGroup->exists($id)) {
			throw new NotFoundException(__('Invalid people group'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->PeopleGroup->save($this->request->data)) {
				$this->Session->setFlash(__('The people group has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The people group could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('PeopleGroup.' . $this->PeopleGroup->primaryKey => $id));
			$this->request->data = $this->PeopleGroup->find('first', $options);
		}
		$people = $this->PeopleGroup->Person->find('list');
		$groups = $this->PeopleGroup->Group->find('list');
		$this->set(compact('people', 'groups'));
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
		$this->PeopleGroup->id = $id;
		if (!$this->PeopleGroup->exists()) {
			throw new NotFoundException(__('Invalid people group'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->PeopleGroup->delete()) {
			$this->Session->setFlash(__('People group deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('People group was not deleted'));
		$this->redirect(array('action' => 'index'));
	}

	public function isMember($userId = null, $groupId = null) {
		$this->set('result',$this->PeopleGroup->isMember($userId, $groupId));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->PeopleGroup->recursive = 0;
		$this->set('peopleGroups', $this->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->PeopleGroup->exists($id)) {
			throw new NotFoundException(__('Invalid people group'));
		}
		$options = array('conditions' => array('PeopleGroup.' . $this->PeopleGroup->primaryKey => $id));
		$this->set('peopleGroup', $this->PeopleGroup->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->PeopleGroup->create();
			if ($this->PeopleGroup->save($this->request->data)) {
				$this->Session->setFlash(__('The people group has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The people group could not be saved. Please, try again.'));
			}
		}
		$people = $this->PeopleGroup->Person->find('list');
		$groups = $this->PeopleGroup->Group->find('list');
		$this->set(compact('people', 'groups'));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->PeopleGroup->exists($id)) {
			throw new NotFoundException(__('Invalid people group'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->PeopleGroup->save($this->request->data)) {
				$this->Session->setFlash(__('The people group has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The people group could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('PeopleGroup.' . $this->PeopleGroup->primaryKey => $id));
			$this->request->data = $this->PeopleGroup->find('first', $options);
		}
		$people = $this->PeopleGroup->Person->find('list');
		$groups = $this->PeopleGroup->Group->find('list');
		$this->set(compact('people', 'groups'));
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
		$this->PeopleGroup->id = $id;
		if (!$this->PeopleGroup->exists()) {
			throw new NotFoundException(__('Invalid people group'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->PeopleGroup->delete()) {
			$this->Session->setFlash(__('People group deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('People group was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
