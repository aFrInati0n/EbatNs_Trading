<?php
// autogenerated file 24.02.2011 11:36
// $Id: $
// $Log: $
//
//
require_once 'EbatNs_ComplexType.php';

/**
 * Defines the CrossBorderTradeAustraliaEnabledDefinitionType feature (used for 
 * specifying that listings be displayed in the default search results of other 
 * sites). If the field is present, the corresponding feature applies to the 
 * category. The field is returned as an empty element (i.e., a boolean value is 
 * not returned). 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/CrossBorderTradeAustraliaEnabledDefinitionType.html
 *
 */
class CrossBorderTradeAustraliaEnabledDefinitionType extends EbatNs_ComplexType
{

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('CrossBorderTradeAustraliaEnabledDefinitionType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__])) {
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()], array());
		}
	}
}
?>
