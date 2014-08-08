<?php
namespace ValidatorService\Model\Entity;

use Cake\ORM\Entity;

/**
 * Validator Entity.
 */
class Validator extends Entity {

/**
 * Fields that can be mass assigned using newEntity() or patchEntity().
 *
 * @var array
 */
	protected $_accessible = [
		'authorid' => true,
		'title' => true,
		'body' => true,
	];

}
