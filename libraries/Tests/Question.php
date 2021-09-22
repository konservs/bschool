<?php
namespace BSchool\Tests;
use BSchool\Tests\Questions;

/**
 * Basic class to control single test question
 *
 * @author Andrii Biriev <a@konservs.com>
 * @copyright © Andrii Biriev, a@konservs.com, www.konservs.com
 */
class Test extends \Brilliant\Items\BItemsItem{
	protected $collectionname='\BSchool\Tests\Questions';
	protected $tableName='bschool_tests_questions';
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
		//
		$this->fieldAddRaw('test','item');
		$this->fieldAddRaw('block','item');
		//
		$this->fieldAddRaw('question','string');
		$this->fieldAddRaw('answers','json');
		//Created & modified
		$this->fieldAddRaw('created','dt',array('readonly'=>true));
		$this->fieldAddRaw('modified','dt',array('readonly'=>true));
		}
	}
