<?php
namespace ValidatorService\Controller;

use ValidatorService\Controller\AppController;

/**
 * Validators Controller
 *
 * @property ValidatorService\Model\Table\ValidatorsTable $Validators
 */
class ValidatorsController extends AppController {

/**
 * Index method
 *
 * @return void
 */
	public function index() {
		$this->set('validators', $this->paginate($this->Validators));
	}

/**
 * View method
 *
 * @param string $id
 * @return void
 * @throws NotFoundException
 */
	public function view($id = null) {
		$validator = $this->Validators->get($id, [
			'contain' => []
		]);
		$this->set('validator', $validator);
	}

/**
 * Add method
 *
 * @return void
 */
	public function add() {
		$validator = $this->Validators->newEntity($this->request->data);
		if ($this->request->is('post')) {
			if ($this->Validators->save($validator)) {
				$this->Flash->success('The validator has been saved.');
				return $this->redirect(['action' => 'index']);
			} else {
				$this->Flash->error('The validator could not be saved. Please, try again.');
			}
		}
		$this->set(compact('validator'));
	}

/**
 * Edit method
 *
 * @param string $id
 * @return void
 * @throws NotFoundException
 */
	public function edit($id = null) {
		$validator = $this->Validators->get($id, [
			'contain' => []
		]);
		if ($this->request->is(['post', 'put'])) {
			$validator = $this->Validators->patchEntity($validator, $this->request->data);
			if ($this->Validators->save($validator)) {
				$this->Flash->success('The validator has been saved.');
				return $this->redirect(['action' => 'index']);
			} else {
				$this->Flash->error('The validator could not be saved. Please, try again.');
			}
		}
		$this->set(compact('validator'));
	}

/**
 * Delete method
 *
 * @param string $id
 * @return void
 * @throws NotFoundException
 */
	public function delete($id = null) {
		$validator = $this->Validators->get($id);
		$this->request->allowMethod('post', 'delete');
		if ($this->Validators->delete($validator)) {
			$this->Flash->success('The validator has been deleted.');
		} else {
			$this->Flash->error('The validator could not be deleted. Please, try again.');
		}
		return $this->redirect(['action' => 'index']);
	}
}
