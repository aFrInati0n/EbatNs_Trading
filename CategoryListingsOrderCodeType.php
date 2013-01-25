<?php
// autogenerated file 22.07.2011 08:50
// $Id: $
// $Log: $
//
require_once 'EbatNs_FacetType.php';

/**
 * CategoryListingsOrderCodeType - Type declaration to be used by other schema. 
 * This code identifies the CategoryListingsOrder codes (e.g., for 
 * GetCategoryListings request) to be used to filter the returned data in the ways 
 * enumerated below. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/CategoryListingsOrderCodeType.html
 *
 * @property string NoFilter
 * @property string ItemsBy24Hr
 * @property string ItemsEndToday
 * @property string ItemsEndIn5Hr
 * @property string SortByPriceAsc
 * @property string SortByPriceDesc
 * @property string BestMatchSort
 * @property string DistanceSort
 * @property string CustomCode
 * @property string BestMatchCategoryGroup
 * @property string PricePlusShippingAsc
 * @property string PricePlusShippingDesc
 */
class CategoryListingsOrderCodeType extends EbatNs_FacetType
{
	const CodeType_NoFilter = 'NoFilter';
	const CodeType_ItemsBy24Hr = 'ItemsBy24Hr';
	const CodeType_ItemsEndToday = 'ItemsEndToday';
	const CodeType_ItemsEndIn5Hr = 'ItemsEndIn5Hr';
	const CodeType_SortByPriceAsc = 'SortByPriceAsc';
	const CodeType_SortByPriceDesc = 'SortByPriceDesc';
	const CodeType_BestMatchSort = 'BestMatchSort';
	const CodeType_DistanceSort = 'DistanceSort';
	const CodeType_CustomCode = 'CustomCode';
	const CodeType_BestMatchCategoryGroup = 'BestMatchCategoryGroup';
	const CodeType_PricePlusShippingAsc = 'PricePlusShippingAsc';
	const CodeType_PricePlusShippingDesc = 'PricePlusShippingDesc';

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('CategoryListingsOrderCodeType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_CategoryListingsOrderCodeType = new CategoryListingsOrderCodeType();

?>
