<?php
// autogenerated file 22.07.2011 09:10
// $Id: $
// $Log: $
//
require_once 'EbatNs_FacetType.php';

/**
 * These values indicate type of an address in AddressType. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/AddressUsageCodeType.html
 *
 * @property string DefaultShipping
 * @property string Shipping
 * @property string Invalid
 * @property string CustomCode
 */
class AddressUsageCodeType extends EbatNs_FacetType
{
	const CodeType_DefaultShipping = 'DefaultShipping';
	const CodeType_Shipping = 'Shipping';
	const CodeType_Invalid = 'Invalid';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('AddressUsageCodeType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_AddressUsageCodeType = new AddressUsageCodeType();

?>
