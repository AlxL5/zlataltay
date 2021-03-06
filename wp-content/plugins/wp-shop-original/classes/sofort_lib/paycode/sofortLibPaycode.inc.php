<?php
require_once(WPSHOP_CLASSES_DIR.'/sofort_lib/core/sofortLibPaycodeAbstract.inc.php');

/**
 * @copyright 2010-2015 SOFORT GmbH
 *
 * @license Released under the GNU LESSER GENERAL PUBLIC LICENSE (Version 3)
 * @license http://www.gnu.org/licenses/lgpl.html
 *
 * Paycode Class
 */
class SofortLibPaycode extends SofortLibPaycodeAbstract {
	
	/**
	 * Codetype
	 * 
	 * @var string
	 */
	protected $_codetype = 'pay';
	
	/**
	 * Paycode
	 * 
	 * @var
	 */
	protected $_paycode;
	
	/**
	 * Paycode URL
	 * 
	 * @var
	 */
	protected $_paycodeUrl;
	
	/**
	 * Root Tag for the XML to be rendered
	 * 
	 * @var string
	 */
	protected $_rootTag = 'paycode';
	
	
	/**
	 * Wrapper to set the Project ID and to call the parent method (sendRequest)
	 * 
	 * @return void
	 */
	public function createPaycode() {
		$this->_parameters['project_id'] = $this->_projectId;
		parent::sendRequest();
	}
	
	
	/**
	 * Wrapper to get the Paycode from the response
	 *
	 * @return string
	 */
	public function getPaycode() {
		return parent::getCode();
	}
	
	
	/**
	 * Wrapper to get the Paycode URL
	 * 
	 * @return string
	 */
	public function getPaycodeUrl() {
		return parent::getCodeUrl();
	}
}