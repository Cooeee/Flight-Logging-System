<?php
App::uses('AppController', 'Controller');
/**
 * Flights Controller
 *
 * @property Flight $Flight
 */
class FlightsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Flight->recursive = 0;

		if (isset($this->request->named['date']) && strtotime($this->request->named['date']) > 0) {
			$refdate = date('Y-m-d',strtotime($this->request->named['date']));
		}
		else {
			$refdate = date('Y-m-d');
		}
		$this->paginate = array('conditions' => array('Flight.date' => $refdate), 'order' => array('Flight.line' => 'asc'), 'limit' => 50);
		$flights = $this->paginate('Flight');
		$this->set(compact('flights'));
		$this->set('refdate', $refdate);
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Flight->exists($id)) {
			throw new NotFoundException(__('Invalid flight'));
		}
		$options = array('conditions' => array('Flight.' . $this->Flight->primaryKey => $id));
		$this->set('flight', $this->Flight->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Flight->create($this->request->data);
			$this->Flight->data['Flight']['airfield_id'] = '1';
			$this->Flight->data['Flight']['tuggie_id'] = '1';
			$this->Flight->data['Flight']['date'] = date('Y-m-d');
			if ($this->Flight->save()) {
				$this->Session->setFlash(__('The flight has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The flight could not be saved. Please, try again.'));
			}
		}
		$airfields = $this->Flight->Airfield->find('list');
		$tuggies = $this->Flight->Tuggie->find('list');
		//$pilots = $this->Flight->Pilot->find('list');
		$pilots = $this->Flight->Pilot->find('list', array(
			'joins' => array(
				array(
					'table' => 'visitors',
					'alias' => 'VisitorJoin',
					'type' => 'INNER',
					'conditions' => array(
						'VisitorJoin.person_id = Pilot.id'
					)
				)
			),
			'conditions' => array(
				'VisitorJoin.date' => date('Y-m-d')
			),
			'order' => 'Pilot.fullname ASC'
		));
		//$passengers = $this->Flight->Passenger->find('list');
                $passengers = $this->Flight->Passenger->find('list', array(
                        'joins' => array(
                                array(
                                        'table' => 'visitors',
                                        'alias' => 'VisitorJoin',
                                        'type' => 'INNER',
                                        'conditions' => array(
                                                'VisitorJoin.person_id = Passenger.id'
                                        )
                                )
                        ),
                        'conditions' => array(
                                'VisitorJoin.date' => date('Y-m-d')
                        ),
                        'order' => 'Passenger.fullname ASC'
                ));

		$tugs = $this->Flight->Tug->find('list',array('conditions' => array('Tug.aircraft_type_id' => 2)));
		$gliders = $this->Flight->Glider->find('list',array('conditions' => array('Glider.aircraft_type_id' => 1)));
		$flightTypes = $this->Flight->FlightType->find('list');
		$this->set(compact('airfields', 'tuggies', 'pilots', 'passengers', 'tugs', 'gliders', 'flightTypes'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Flight->exists($id)) {
			throw new NotFoundException(__('Invalid flight'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Flight->save($this->request->data)) {
				$this->Session->setFlash(__('The flight has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The flight could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Flight.' . $this->Flight->primaryKey => $id));
			$this->request->data = $this->Flight->find('first', $options);
		}
		$airfields = $this->Flight->Airfield->find('list');
		$tuggies = $this->Flight->Tuggie->find('list');
		$pilots = $this->Flight->Pilot->find('list');
		$passengers = $this->Flight->Passenger->find('list');
		$tugs = $this->Flight->Tug->find('list',array('conditions' => array('Tug.aircraft_type_id' => 2)));
		$gliders = $this->Flight->Glider->find('list',array('conditions' => array('Glider.aircraft_type_id' => 1)));
		$flightTypes = $this->Flight->FlightType->find('list');
		$this->set(compact('airfields', 'tuggies', 'pilots', 'passengers', 'tugs', 'gliders', 'flightTypes'));
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
		$this->Flight->id = $id;
		if (!$this->Flight->exists()) {
			throw new NotFoundException(__('Invalid flight'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Flight->delete()) {
			$this->Session->setFlash(__('Flight deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Flight was not deleted'));
		$this->redirect(array('action' => 'index'));
	}


/**
 * land method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function land($id = null) {
		$this->Flight->id = $id;
		if (!$this->Flight->exists()) {
			throw new NotFoundException(__('Invalid flight'));
		}
		if ($this->Flight->land()) {
			$this->Session->setFlash(__('The flight has been saved'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('The flight could not be saved. Please, try again.'));
		$this->redirect(array('action' => 'index'));
	}

/**
 * launch method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function launch($id = null) {
		$this->Flight->id = $id;
		if (!$this->Flight->exists()) {
			throw new NotFoundException(__('Invalid flight'));
		}
		$options = array('conditions' => array('Flight.' . $this->Flight->primaryKey => $id));
		$this->set('flight', $this->Flight->find('first', $options));
		
		if ($this->Flight->launch()) {
			$this->Session->setFlash(__('The flight has been saved'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('The flight could not be saved. Please, try again.'));
		$this->redirect(array('action' => 'index'));
	}


/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Flight->recursive = 0;
		$this->set('flights', $this->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Flight->exists($id)) {
			throw new NotFoundException(__('Invalid flight'));
		}
		$options = array('conditions' => array('Flight.' . $this->Flight->primaryKey => $id));
		$this->set('flight', $this->Flight->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		debug($this->data);
		if ($this->request->is('post')) {
			$this->Flight->create($this->request->data);
			debug($this->Flight->data);
			if ($this->Flight->save($this->request->data)) {
				$this->Session->setFlash(__('The flight has been saved'));
				//$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The flight could not be saved. Please, try again.'));
			}
		}
		$airfields = $this->Flight->Airfield->find('list');
		$tuggies = $this->Flight->Tuggie->find('list');
		$pilots = $this->Flight->Pilot->find('list');
		$passengers = $this->Flight->Passenger->find('list');
		$tugs = $this->Flight->Tug->find('list');
		$gliders = $this->Flight->Glider->find('list');
		$flightTypes = $this->Flight->FlightType->find('list');
		$this->set(compact('airfields', 'tuggies', 'pilots', 'passengers', 'tugs', 'gliders', 'flightTypes'));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->Flight->exists($id)) {
			throw new NotFoundException(__('Invalid flight'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Flight->save($this->request->data)) {
				$this->Session->setFlash(__('The flight has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The flight could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Flight.' . $this->Flight->primaryKey => $id));
			$this->request->data = $this->Flight->find('first', $options);
		}
		$airfields = $this->Flight->Airfield->find('list');
		$tuggies = $this->Flight->Tuggie->find('list');
		$pilots = $this->Flight->Pilot->find('list');
		$passengers = $this->Flight->Passenger->find('list');
		$tugs = $this->Flight->Tug->find('list');
		$gliders = $this->Flight->Glider->find('list');
		$flightTypes = $this->Flight->FlightType->find('list');
		$this->set(compact('airfields', 'tuggies', 'pilots', 'passengers', 'tugs', 'gliders', 'flightTypes'));
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
		$this->Flight->id = $id;
		if (!$this->Flight->exists()) {
			throw new NotFoundException(__('Invalid flight'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Flight->delete()) {
			$this->Session->setFlash(__('Flight deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Flight was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
