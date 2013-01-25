<?php
// autogenerated file 10.09.2012 12:26
// $Id: $
// $Log: $
//
//
require_once 'AbstractResponseType.php';

/**
 * Returned after calling ValidateTestUserRegistrationRequest; confirms a 
 * successful call. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/ValidateTestUserRegistrationResponseType.html
 *
 */
class ValidateTestUserRegistrationResponseType extends AbstractResponseType
{

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('ValidateTestUserRegistrationResponseType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__])) {
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()], array());
		}
	}
}
?>
