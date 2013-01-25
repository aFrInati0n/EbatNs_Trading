<?php
// autogenerated file 22.07.2011 08:50
// $Id: $
// $Log: $
//
require_once 'EbatNs_FacetType.php';

/**
 * Values specify or indicate the type of promotional sale offered. Promotional 
 * sales give store owners the ability to apply discounts and/or free shipping 
 * across many listings for a specific duration. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/PromotionalSaleTypeCodeType.html
 *
 * @property string PriceDiscountOnly
 * @property string FreeShippingOnly
 * @property string PriceDiscountAndFreeShipping
 * @property string CustomCode
 */
class PromotionalSaleTypeCodeType extends EbatNs_FacetType
{
	const CodeType_PriceDiscountOnly = 'PriceDiscountOnly';
	const CodeType_FreeShippingOnly = 'FreeShippingOnly';
	const CodeType_PriceDiscountAndFreeShipping = 'PriceDiscountAndFreeShipping';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('PromotionalSaleTypeCodeType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_PromotionalSaleTypeCodeType = new PromotionalSaleTypeCodeType();

?>
