<?php
namespace BSchool\Tests;
use BSchool\Tests\Variants;

/**
 * Basic class to control single test variant
 *
 * @author Andrii Biriev <a@konservs.com>
 * @copyright © Andrii Biriev, a@konservs.com, www.konservs.com
 */
class Variant extends \Brilliant\Items\BItemsItemTree{
	protected $collectionname='\BSchool\Tests\Variants';
	protected $tableName='bschool_tests_variants';
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
		//Created & modified
		$this->fieldAddRaw('created','dt',array('readonly'=>true));
		$this->fieldAddRaw('modified','dt',array('readonly'=>true));
		}
	}
