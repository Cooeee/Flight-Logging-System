<?php
App::uses('AppController', 'Controller');
/**
 * PeopleCertificates Controller
 *
 * @property PeopleCertificate $PeopleCertificate
 */
class PeopleCertificatesController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->PeopleCertificate->recursive = 0;
		$this->set('peopleCertificates', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->PeopleCertificate->exists($id)) {
			throw new NotFoundException(__('Invalid people certificate'));
		}
		$options = array('conditions' => array('PeopleCertificate.' . $this->PeopleCertificate->primaryKey => $id));
		$this->set('peopleCertificate', $this->PeopleCertificate->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->PeopleCertificate->create();
			if ($this->PeopleCertificate->save($this->request->data)) {
				$this->Session->setFlash(__('The people certificate has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The people certificate could not be saved. Please, try again.'));
			}
		}
		$people = $this->PeopleCertificate->Person->find('list');
		$certificates = $this->PeopleCertificate->Certificate->find('list');
		$certifiedBies = $this->PeopleCertificate->CertifiedBy->find('list');
		$this->set(compact('people', 'certificates', 'certifiedBies'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->PeopleCertificate->exists($id)) {
			throw new NotFoundException(__('Invalid people certificate'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->PeopleCertificate->save($this->request->data)) {
				$this->Session->setFlash(__('The people certificate has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The people certificate could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('PeopleCertificate.' . $this->PeopleCertificate->primaryKey => $id));
			$this->request->data = $this->PeopleCertificate->find('first', $options);
		}
		$people = $this->PeopleCertificate->Person->find('list');
		$certificates = $this->PeopleCertificate->Certificate->find('list');
		$certifiedBies = $this->PeopleCertificate->CertifiedBy->find('list');
		$this->set(compact('people', 'certificates', 'certifiedBies'));
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
		$this->PeopleCertificate->id = $id;
		if (!$this->PeopleCertificate->exists()) {
			throw new NotFoundException(__('Invalid people certificate'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->PeopleCertificate->delete()) {
			$this->Session->setFlash(__('People certificate deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('People certificate was not deleted'));
		$this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->PeopleCertificate->recursive = 0;
		$this->set('peopleCertificates', $this->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->PeopleCertificate->exists($id)) {
			throw new NotFoundException(__('Invalid people certificate'));
		}
		$options = array('conditions' => array('PeopleCertificate.' . $this->PeopleCertificate->primaryKey => $id));
		$this->set('peopleCertificate', $this->PeopleCertificate->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->PeopleCertificate->create();
			if ($this->PeopleCertificate->save($this->request->data)) {
				$this->Session->setFlash(__('The people certificate has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The people certificate could not be saved. Please, try again.'));
			}
		}
		$people = $this->PeopleCertificate->Person->find('list');
		$certificates = $this->PeopleCertificate->Certificate->find('list');
		$certifiedBies = $this->PeopleCertificate->CertifiedBy->find('list');
		$this->set(compact('people', 'certificates', 'certifiedBies'));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->PeopleCertificate->exists($id)) {
			throw new NotFoundException(__('Invalid people certificate'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->PeopleCertificate->save($this->request->data)) {
				$this->Session->setFlash(__('The people certificate has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The people certificate could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('PeopleCertificate.' . $this->PeopleCertificate->primaryKey => $id));
			$this->request->data = $this->PeopleCertificate->find('first', $options);
		}
		$people = $this->PeopleCertificate->Person->find('list');
		$certificates = $this->PeopleCertificate->Certificate->find('list');
		$certifiedBies = $this->PeopleCertificate->CertifiedBy->find('list');
		$this->set(compact('people', 'certificates', 'certifiedBies'));
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
		$this->PeopleCertificate->id = $id;
		if (!$this->PeopleCertificate->exists()) {
			throw new NotFoundException(__('Invalid people certificate'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->PeopleCertificate->delete()) {
			$this->Session->setFlash(__('People certificate deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('People certificate was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
