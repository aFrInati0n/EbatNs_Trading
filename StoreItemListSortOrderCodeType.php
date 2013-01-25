<?php
// autogenerated file 22.07.2011 09:21
// $Id: $
// $Log: $
//
require_once 'EbatNs_FacetType.php';

/**
 * List of available options for how items are sorted in an eBay Store. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/StoreItemListSortOrderCodeType.html
 *
 * @property string EndingFirst
 * @property string NewlyListed
 * @property string LowestPriced
 * @property string HighestPriced
 * @property string LowestPricedPlusShipping
 * @property string HighestPricedPlusShipping
 * @property string CustomCode
 */
class StoreItemListSortOrderCodeType extends EbatNs_FacetType
{
	const CodeType_EndingFirst = 'EndingFirst';
	const CodeType_NewlyListed = 'NewlyListed';
	const CodeType_LowestPriced = 'LowestPriced';
	const CodeType_HighestPriced = 'HighestPriced';
	const CodeType_LowestPricedPlusShipping = 'LowestPricedPlusShipping';
	const CodeType_HighestPricedPlusShipping = 'HighestPricedPlusShipping';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('StoreItemListSortOrderCodeType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_StoreItemListSortOrderCodeType = new StoreItemListSortOrderCodeType();

?>
