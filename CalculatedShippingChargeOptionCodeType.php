<?php
// autogenerated file 15.11.2010 08:32
// $Id: $
// $Log: $
//
require_once 'EbatNs_FacetType.php';

/**
 * Calculated Shipping Charge Options 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/CalculatedShippingChargeOptionCodeType.html
 *
 * @property string ChargeEachItem
 * @property string ChargeEntireOrder
 * @property string CustomCode
 */
class CalculatedShippingChargeOptionCodeType extends EbatNs_FacetType
{
	const CodeType_ChargeEachItem = 'ChargeEachItem';
	const CodeType_ChargeEntireOrder = 'ChargeEntireOrder';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('CalculatedShippingChargeOptionCodeType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_CalculatedShippingChargeOptionCodeType = new CalculatedShippingChargeOptionCodeType();

?>
