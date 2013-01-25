<?php
// autogenerated file 10.09.2012 12:30
// $Id: $
// $Log: $
//
require_once 'EbatNs_FacetType.php';

/**
 * A code indicating whether the refund for the DE/AT order was applied toward the 
 * purchase price, the original shipping price, or for an additional amount. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/RefundLineTypeCodeType.html
 *
 * @property string PurchasePrice
 * @property string ShippingPrice
 * @property string Additional
 * @property string CustomCode
 */
class RefundLineTypeCodeType extends EbatNs_FacetType
{
	const CodeType_PurchasePrice = 'PurchasePrice';
	const CodeType_ShippingPrice = 'ShippingPrice';
	const CodeType_Additional = 'Additional';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('RefundLineTypeCodeType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_RefundLineTypeCodeType = new RefundLineTypeCodeType();

?>
