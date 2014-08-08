<?php
namespace ValidatorService\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Validators Model
 */
class ValidatorsTable extends Table {

/**
 * Initialize method
 *
 * @param array $config The configuration for the Table.
 * @return void
 */
	public function initialize(array $config) {
		$this->table('validators');
		$this->displayField('title');
		$this->primaryKey('id');
		$this->addBehavior('Timestamp');

	}

/**
 * Default validation rules.
 *
 * @param \Cake\Validation\Validator $validator
 * @return \Cake\Validation\Validator
 */
	public function validationDefault(Validator $validator) {
		$validator
			->add('id', 'valid', ['rule' => 'numeric'])
			->allowEmpty('id', 'create')
			->add('authorid', 'valid', ['rule' => 'numeric'])
			->validatePresence('authorid', 'create')
			->notEmpty('authorid')
			->allowEmpty('title')
			->allowEmpty('body');

		return $validator;
	}

}
