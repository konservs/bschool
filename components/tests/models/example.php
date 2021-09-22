<?php
/**
 * Model to view single test example variant
 *
 * @author Andrii Biriev <a@konservs.com>
 * @copyright © Andrii Biriev, a@konservs.com, www.konservs.com
 */
defined('BEXEC') or die('No direct access!');

use \BSchool\Tests\Tests;
use \BSchool\Tests\Questions;

class Model_tests_example extends \Brilliant\MVC\BModel{
	/**
	 * Get test, get questions, randomize them.
	 */
	public function getData($segments){
		$data=new stdClass;
		$data->status = -1;
		$bSchoolTestTests = Tests::getInstance();
		$data->itemId = (int)$segments['id'];
		$data->item = $bSchoolTestTests->itemGet($data->itemId);
		if(!$data->item){
			$data->status = 1;
			return $data;
			}
		$bSchoolTestQuestions = Tests::getInstance();
		$data->questions = $bSchoolTestQuestions->itemsFilter(['test'=>$data->itemId]);

		$data->status = 0;
		return $data;
		}
	}
