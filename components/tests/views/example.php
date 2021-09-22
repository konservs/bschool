<?php
defined('BEXEC') or die('No direct access!');
use \Brilliant\CMS\BLang;

class View_tests_example extends \Brilliant\MVC\BView{
	/**
	 * Generate HTML and some headers.
	 */
	public function generate($data = NULL){
		$lang=BLang::$langcode;
		//
		if($data->status != 0){
			$this->setStatus(500);
			return $this->templateLoad('tests.error', true);
			}
		//Set headers
		$this->item = $data->item;
		$this->itemId = $data->itemId;
		$this->setTitle($data->item->name);
		//$this->addMeta('description', $metadesc);
		//$this->addMeta('keywords', $metakeyw);
		//Cache (if the cache is enabled) and return HTML!
		$this->setcache(true,3600);//Cache for 1 hour
		return $this->templateLoad();
		}
	}
