<?php
// autogenerated file 24.02.2011 11:36
// $Id: $
// $Log: $
//
require_once 'EbatNs_FacetType.php';

/**
 * Specifies which discount type to use. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/DiscountCodeType.html
 *
 * @property string Percentage
 * @property string Price
 * @property string CustomCode
 */
class DiscountCodeType extends EbatNs_FacetType
{
	const CodeType_Percentage = 'Percentage';
	const CodeType_Price = 'Price';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('DiscountCodeType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_DiscountCodeType = new DiscountCodeType();

?>
