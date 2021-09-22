<?php
/**
 * Model to view single test example variant
 *
 * @author Andrii Biriev <a@konservs.com>
 * @copyright © Andrii Biriev, a@konservs.com, www.konservs.com
 */
defined('BEXEC') or die('No direct access!');

use \BSchool\Tests\Tests;

class Model_tests_example extends \Brilliant\MVC\BModel{
	public function getData($segments){
		$data=new stdClass;
		$data->status = -1;
		$bSchoolTestTests = Tests::getInstance();
		$data->itemId = $segments['id'];
		$data->item = $bSchoolTestTests->itemGet($data->itemId);
		if(!$data->item){
			$data->status = 1;
			return $data;
			}
		$data->status = 0;
		return $data;
		}
	}
