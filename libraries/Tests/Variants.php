<?php
namespace BSchool\Tests;

/**
 * Basic class to control tests variants
 *
 * @method \BSchool\Tests\Variant itemGet(integer $id)
 * @method \BSchool\Tests\Variant[] itemsGet(integer[] $ids)
 * @method \BSchool\Tests\Variant[] itemsFilter($params)
 *
 * @author Andrii Biriev <a@konservs.com>
 * @copyright © Andrii Biriev, a@konservs.com, www.konservs.com
 */
class Variants extends \Brilliant\Items\BItemsList{
	use \Brilliant\BSingleton;
	protected $tableName='bschool_tests_variants';
	protected $itemClassName='\BSchool\Tests\Variant';
	}
