<?php
/**
 * Check test model
 *
 * @author Andrii Biriev <a@konservs.com>
 * @copyright © Andrii Biriev, a@konservs.com, www.konservs.com
 */
defined('BEXEC') or die('No direct access!');

use \BSchool\Tests\Variants;

class Model_tests_checktest extends \Brilliant\MVC\BModel{
	public function getData($segments){
		$data=new stdClass;
		$data->status = -1;
		$bSchoolTestVariants = Variants::getInstance();
		$data->itemId = $segments['id'];
		$data->item = $bSchoolTestVariants->itemGet($data->itemId);
		if(!$data->item){
			$data->status = 1;
			return $data;
			}
		$data->status = 0;
		return $data;
		}
	}
