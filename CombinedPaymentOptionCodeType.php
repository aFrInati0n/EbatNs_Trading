<?php
// autogenerated file 24.02.2011 11:36
// $Id: $
// $Log: $
//
require_once 'EbatNs_FacetType.php';

/**
 * Combined Purchase Options 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/CombinedPaymentOptionCodeType.html
 *
 * @property string NoCombinedPayment
 * @property string DiscountSpecified
 * @property string SpecifyDiscountLater
 * @property string CustomCode
 */
class CombinedPaymentOptionCodeType extends EbatNs_FacetType
{
	const CodeType_NoCombinedPayment = 'NoCombinedPayment';
	const CodeType_DiscountSpecified = 'DiscountSpecified';
	const CodeType_SpecifyDiscountLater = 'SpecifyDiscountLater';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('CombinedPaymentOptionCodeType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_CombinedPaymentOptionCodeType = new CombinedPaymentOptionCodeType();

?>
