<?php
// autogenerated file 24.02.2011 11:36
// $Id: $
// $Log: $
//
//
require_once 'EbatNs_ComplexType.php';

/**
 * Indicates whether the telephone can be a contact method for the category. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/ClassifiedAdContactByPhoneEnabledDefinitionType.html
 *
 */
class ClassifiedAdContactByPhoneEnabledDefinitionType extends EbatNs_ComplexType
{

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('ClassifiedAdContactByPhoneEnabledDefinitionType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__])) {
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()], array());
		}
	}
}
?>
