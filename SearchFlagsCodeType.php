<?php
// autogenerated file 15.11.2010 08:36
// $Id: $
// $Log: $
//
require_once 'EbatNs_FacetType.php';

/**
 * SearchFlagsCodeType - Search flags for GetSearchResults. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/SearchFlagsCodeType.html
 *
 * @property string Charity
 * @property string SearchInDescription
 * @property string PayPalBuyerPaymentOption
 * @property string NowAndNew
 * @property string CustomCode
 */
class SearchFlagsCodeType extends EbatNs_FacetType
{
	const CodeType_Charity = 'Charity';
	const CodeType_SearchInDescription = 'SearchInDescription';
	const CodeType_PayPalBuyerPaymentOption = 'PayPalBuyerPaymentOption';
	const CodeType_NowAndNew = 'NowAndNew';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('SearchFlagsCodeType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_SearchFlagsCodeType = new SearchFlagsCodeType();

?>
