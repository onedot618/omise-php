<?php
require_once dirname(__FILE__).'/OmiseRequestBase.php';

abstract class OmiseSingletonRequestBase extends OmiseRequestBase {
	private static $_instance = null;
	
	private function __construct() {
		/** Do Nothing **/
	}
	
	protected static function getInstance($clazz) {
		if(self::$_instance === null) {
			if(class_exists($class_name)) {
				self::$_instance = new $clazz();
			} else {
				throw new Exception('Undefined class.');
			}
		}
		
		return self::$_instance;
	}
}