<?php
// autogenerated file 22.07.2011 09:21
// $Id: $
// $Log: $
//
//
require_once 'EbatNs_ComplexType.php';

/**
 * About shipping service group 3. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/Group3MaxFlatShippingCostDefinitionType.html
 *
 */
class Group3MaxFlatShippingCostDefinitionType extends EbatNs_ComplexType
{

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('Group3MaxFlatShippingCostDefinitionType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__])) {
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()], array());
		}
	}
}
?>
