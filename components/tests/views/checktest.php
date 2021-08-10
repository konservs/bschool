<?php
defined('BEXEC') or die('No direct access!');
use \Brilliant\CMS\BLang;

class View_tests_checktest extends \Brilliant\MVC\BView{
	/**
	 * Generate HTML and some headers.
	 */
	public function generate($data = NULL){
		$lang=BLang::$langcode;
		//Set headers
		$this->item = $data->item;
		//$this->setTitle($title);
		//$this->addMeta('description', $metadesc);
		//$this->addMeta('keywords', $metakeyw);
		//Cache (if the cache is enabled) and return HTML!
		$this->setcache(true,3600);//Cache for 1 hour
		return $this->templateLoad();
		}
	}
