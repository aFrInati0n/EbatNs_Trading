<?php
// autogenerated file 10.09.2012 12:30
// $Id: $
// $Log: $
//
//
require_once 'EbatNs_ComplexType.php';

/**
 * Defines the feature that specifies whether a return policycould be enabled on 
 * the site. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/ReturnPolicyEnabledDefinitionType.html
 *
 */
class ReturnPolicyEnabledDefinitionType extends EbatNs_ComplexType
{

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('ReturnPolicyEnabledDefinitionType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__])) {
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()], array());
		}
	}
}
?>
