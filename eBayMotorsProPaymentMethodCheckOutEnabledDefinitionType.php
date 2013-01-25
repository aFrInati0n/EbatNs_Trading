<?php
// autogenerated file 29.12.2011 14:39
// $Id: $
// $Log: $
//
//
require_once 'EbatNs_ComplexType.php';

/**
 * Indicates whether the category supports the use of payment method checkOutfor 
 * Classified Ad format listings.Added for EbayMotors Pro users. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/eBayMotorsProPaymentMethodCheckOutEnabledDefinitionType.html
 *
 */
class eBayMotorsProPaymentMethodCheckOutEnabledDefinitionType extends EbatNs_ComplexType
{

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('eBayMotorsProPaymentMethodCheckOutEnabledDefinitionType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__])) {
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()], array());
		}
	}
}
?>
