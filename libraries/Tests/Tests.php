<?php
namespace BSchool\Tests;

/**
 * Basic class to control test items/lists
 *
 * @method \BSchool\Tests\Test itemGet(integer $id)
 * @method \BSchool\Tests\Test[] itemsGet(integer[] $ids)
 * @method \BSchool\Tests\Test[] itemsFilter($params)
 *
 * @author Andrii Biriev <a@konservs.com>
 * @copyright © Andrii Biriev, a@konservs.com, www.konservs.com
 */
class Tests extends \Brilliant\Items\BItemsList{
	use \Brilliant\BSingleton;
	protected $tableName='bschool_tests';
	protected $itemClassName='\BSchool\Tests\Test';
	}
