<?php
// autogenerated file 10.09.2012 12:53
// $Id: $
// $Log: $
//
require_once 'EbatNs_FacetType.php';

/**
 * The checkout method used by the buyer at external site. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/CheckoutMethodCodeType.html
 *
 * @property string Other
 * @property string ThirdPartyCheckout
 * @property string CustomCode
 */
class CheckoutMethodCodeType extends EbatNs_FacetType
{
	const CodeType_Other = 'Other';
	const CodeType_ThirdPartyCheckout = 'ThirdPartyCheckout';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('CheckoutMethodCodeType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_CheckoutMethodCodeType = new CheckoutMethodCodeType();

?>
