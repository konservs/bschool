<?php
namespace BSchool\Tests;

/**
 * Basic class to control test questions
 *
 * @method \BSchool\Tests\Question itemGet(integer $id)
 * @method \BSchool\Tests\Question[] itemsGet(integer[] $ids)
 * @method \BSchool\Tests\Question[] itemsFilter($params)
 *
 * @author Andrii Biriev <a@konservs.com>
 * @copyright © Andrii Biriev, a@konservs.com, www.konservs.com
 */
class Questions extends \Brilliant\Items\BItemsList{
	use \Brilliant\BSingleton;
	protected $tableName='bschool_tests_questions';
	protected $itemClassName='\BSchool\Tests\Question';
	}
