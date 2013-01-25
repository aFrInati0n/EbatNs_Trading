<?php
// autogenerated file 09.05.2012 13:15
// $Id: $
// $Log: $
//
require_once 'EbatNs_FacetType.php';

/**
 * A code indicating the order line item to which the refund was applied. 
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