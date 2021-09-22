<?php
namespace BSchool\Tests;
use BSchool\Tests\Tests;

/**
 * Basic class to control single test item
 *
 * @author Andrii Biriev <a@konservs.com>
 * @copyright © Andrii Biriev, a@konservs.com, www.konservs.com
 */
class Test extends \Brilliant\Items\BItemsItem{
	protected $collectionname='\BSchool\Tests\Tests';
	protected $tableName='bschool_tests';
	/**
	 * @var DateTime
	 */
	public $created;
	/**
	 * @var DateTime
	 */
	public $modified;
	/**
	 * Constructor - init fields...
	 */
	function __construct() {
		parent::__construct();
		$this->fieldAddRaw('name','string');
		$this->fieldAddRaw('requirements_time','string');
		//Created & modified
		$this->fieldAddRaw('created','dt',array('readonly'=>true));
		$this->fieldAddRaw('modified','dt',array('readonly'=>true));
		}
	}
