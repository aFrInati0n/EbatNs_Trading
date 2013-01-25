<?php
// autogenerated file 10.09.2012 12:53
// $Id: $
// $Log: $
//
//
require_once 'EbatNs_ComplexType.php';

/**
 * Defines the Payment Method feature. If the field ispresent, the corresponding 
 * feature applies to the category. The field is returnedas an empty element (i.e., 
 * a boolean value is not returned). 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/PaymentMethodDefinitionType.html
 *
 */
class PaymentMethodDefinitionType extends EbatNs_ComplexType
{

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('PaymentMethodDefinitionType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__])) {
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()], array());
		}
	}
}
?>
