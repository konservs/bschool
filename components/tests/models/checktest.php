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
		$bSchoolTestVariants = Variants::getInstance();
		$data->item = $bSchoolTestVariants->itemGet($segments['id']);
		return $data;
		}
	}
