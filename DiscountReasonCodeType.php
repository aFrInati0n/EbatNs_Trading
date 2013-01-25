<?php
// autogenerated file 15.11.2010 08:29
// $Id: $
// $Log: $
//
require_once 'EbatNs_FacetType.php';

/**
 * The nature of the discount. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/DiscountReasonCodeType.html
 *
 * @property string SpecialOffer
 * @property string Promotion
 * @property string CustomCode
 */
class DiscountReasonCodeType extends EbatNs_FacetType
{
	const CodeType_SpecialOffer = 'SpecialOffer';
	const CodeType_Promotion = 'Promotion';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('DiscountReasonCodeType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_DiscountReasonCodeType = new DiscountReasonCodeType();

?>
