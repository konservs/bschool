<?php
namespace BSchool\Tests;

/**
 * Basic class to control Portfolio Categories
 *
 * @method \BSchool\Tests\Category itemGet(integer $id)
 * @method \BSchool\Tests\Category[] itemsGet(integer[] $ids)
 * @method \BSchool\Tests\Category[] itemsFilter($params)
 *
 * @author Andrii Biriev <a@konservs.com>
 * @copyright © Andrii Biriev, a@konservs.com, www.konservs.com
 */
class Categories extends \Brilliant\Items\BItemsTree{
	use \Brilliant\BSingleton;
	protected $tableName='portfolio_categories';
	protected $itemClassName='\BSchool\Tests\Category';
	}
