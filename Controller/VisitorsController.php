<?php
App::uses('AppController', 'Controller');
/**
 * Visitors Controller
 *
 * @property Visitor $Visitor
 */
class VisitorsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Visitor->recursive = -1;
		$this->paginate = array(
			'conditions' => array(
				'Visitor.date' => date('Y-m-d')
			),
			'contain' => array(
				'Person' => array(
					'fields' => array('id','fullname'),
					'Group' => array(
						'fields' => array('id'),
						'conditions' => array('PeopleGroup.expires > CurDate() or PeopleGroup.expires is null'),
					),
				),
				'FlightType' => array('fields' => array('id','description')),
			),
		);
		//$this->paginate->settings = array(
		//	'joins' => array(
		//		'table' => 'people_groups',
		//		'alias' => 'PeopleGroups',
		//		'type' => 'LEFT',
		//		'conditions' => array('Visitor.person_id = PeopleGroup.person_id')
		//	)
		//);
		$visitors = $this->paginate('Visitor');
		$this->set(compact('visitors'));
		//debug($visitors);
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Visitor->exists($id)) {
			throw new NotFoundException(__('Invalid visitor'));
		}
		$options = array('conditions' => array('Visitor.' . $this->Visitor->primaryKey => $id));
		$this->set('visitor', $this->Visitor->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Visitor->create($this->request->data);
			$this->Visitor->data['Visitor']['date'] = date('Y-m-d');
			if (!$this->Visitor->Person->isMember($this->Visitor->data['Visitor']['person_id']))
				$this->Session->setFlash(__('Check club membership!\nClick on persons name, use &quot;Add Membership&quot; once confirmed.'), 'alert', array(), 'alert');
			if (!$this->Visitor->Person->isGFAMember($this->Visitor->data['Visitor']['person_id']))
				$this->Session->setFlash(__('Check GFA membership!\nClick on persons name, use &quot;Add Membership&quot; once confirmed.'), 'alert', array(), 'alert2');
			if ($this->Visitor->save()) {
				$this->Session->setFlash(__('The visitor has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The visitor could not be saved. Please, try again.'));
			}
		}
		if ($this->request->is('get') && !empty($this->request['named']['person'])) {
			$adduser = $this->request['named']['person'];
		}
		$people = $this->Visitor->Person->find('list');
		$flightTypes = $this->Visitor->FlightType->find('list');
		$this->set(compact('people', 'flightTypes', 'adduser'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Visitor->exists($id)) {
			throw new NotFoundException(__('Invalid visitor'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Visitor->save($this->request->data)) {
				$this->Session->setFlash(__('The visitor has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The visitor could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Visitor.' . $this->Visitor->primaryKey => $id));
			$this->request->data = $this->Visitor->find('first', $options);
		}
		$people = $this->Visitor->Person->find('list');
		$flightTypes = $this->Visitor->FlightType->find('list');
		$this->set(compact('people', 'flightTypes'));
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
		$this->Visitor->id = $id;
		if (!$this->Visitor->exists()) {
			throw new NotFoundException(__('Invalid visitor'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Visitor->delete()) {
			$this->Session->setFlash(__('Visitor deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Visitor was not deleted'));
		$this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Visitor->recursive = 0;
		$this->set('visitors', $this->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Visitor->exists($id)) {
			throw new NotFoundException(__('Invalid visitor'));
		}
		$options = array('conditions' => array('Visitor.' . $this->Visitor->primaryKey => $id));
		$this->set('visitor', $this->Visitor->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Visitor->create();
			if ($this->Visitor->save($this->request->data)) {
				$this->Session->setFlash(__('The visitor has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The visitor could not be saved. Please, try again.'));
			}
		}
		$people = $this->Visitor->Person->find('list');
		$flightTypes = $this->Visitor->FlightType->find('list');
		$this->set(compact('people', 'flightTypes'));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->Visitor->exists($id)) {
			throw new NotFoundException(__('Invalid visitor'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Visitor->save($this->request->data)) {
				$this->Session->setFlash(__('The visitor has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The visitor could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Visitor.' . $this->Visitor->primaryKey => $id));
			$this->request->data = $this->Visitor->find('first', $options);
		}
		$people = $this->Visitor->Person->find('list');
		$flightTypes = $this->Visitor->FlightType->find('list');
		$this->set(compact('people', 'flightTypes'));
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
		$this->Visitor->id = $id;
		if (!$this->Visitor->exists()) {
			throw new NotFoundException(__('Invalid visitor'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Visitor->delete()) {
			$this->Session->setFlash(__('Visitor deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Visitor was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
