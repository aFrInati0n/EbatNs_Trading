<?php
// autogenerated file 29.12.2011 15:00
// $Id: $
// $Log: $
//
//
require_once 'EbatNs_ComplexType.php';

/**
 * About shipping service group 2. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/Group2MaxFlatShippingCostDefinitionType.html
 *
 */
class Group2MaxFlatShippingCostDefinitionType extends EbatNs_ComplexType
{

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('Group2MaxFlatShippingCostDefinitionType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__])) {
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()], array());
		}
	}
}
?>
