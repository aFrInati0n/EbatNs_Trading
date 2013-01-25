<?php
// autogenerated file 29.12.2011 14:09
// $Id: $
// $Log: $
//
//
require_once 'EbatNs_ComplexType.php';

/**
 * Defines the CrossBorderTradeNorthAmericaEnabled feature (used for specifying 
 * that listings be displayed in the default search results of other sites). If the 
 * field is present, the corresponding feature applies to the category. The field 
 * is returned as an empty element (i.e., a boolean value is not returned). 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/CrossBorderTradeNorthAmericaEnabledDefinitionType.html
 *
 */
class CrossBorderTradeNorthAmericaEnabledDefinitionType extends EbatNs_ComplexType
{

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('CrossBorderTradeNorthAmericaEnabledDefinitionType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__])) {
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()], array());
		}
	}
}
?>
