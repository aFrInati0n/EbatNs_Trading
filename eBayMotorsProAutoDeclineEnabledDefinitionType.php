<?php
// autogenerated file 24.02.2011 11:36
// $Id: $
// $Log: $
//
//
require_once 'EbatNs_ComplexType.php';

/**
 * Indicates whether automatic decline of best offers is allowed for this 
 * category.Returned only if this category overrides the site default.Added for 
 * EbayMotors Pro users. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/eBayMotorsProAutoDeclineEnabledDefinitionType.html
 *
 */
class eBayMotorsProAutoDeclineEnabledDefinitionType extends EbatNs_ComplexType
{

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('eBayMotorsProAutoDeclineEnabledDefinitionType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__])) {
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()], array());
		}
	}
}
?>
