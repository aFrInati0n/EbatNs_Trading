<?php
// autogenerated file 10.09.2012 12:33
// $Id: $
// $Log: $
//
require_once 'EbatNs_FacetType.php';

/**
 * Enumeration type that indicates whether the buyer's payment was above or below 
 * the actualtotal cost of an order going through the new eBay payment process. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/MismatchTypeCodeType.html
 *
 * @property string OverPayment
 * @property string UnderPayment
 * @property string CustomCode
 */
class MismatchTypeCodeType extends EbatNs_FacetType
{
	const CodeType_OverPayment = 'OverPayment';
	const CodeType_UnderPayment = 'UnderPayment';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('MismatchTypeCodeType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_MismatchTypeCodeType = new MismatchTypeCodeType();

?>
