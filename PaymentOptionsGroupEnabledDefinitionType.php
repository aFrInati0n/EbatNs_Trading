<?php
// autogenerated file 10.09.2012 12:38
// $Id: $
// $Log: $
//
//
require_once 'EbatNs_ComplexType.php';

/**
 * The PaymentOptionsGroupEnabled field is returned in the GetCategoryFeature 
 * response if the Payment Options Group featureapplies to the category. The field 
 * is returned as an empty element. The Payment Options Group feature is only 
 * applicable to DE and AT listings. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/PaymentOptionsGroupEnabledDefinitionType.html
 *
 */
class PaymentOptionsGroupEnabledDefinitionType extends EbatNs_ComplexType
{

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('PaymentOptionsGroupEnabledDefinitionType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__])) {
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()], array());
		}
	}
}
?>
