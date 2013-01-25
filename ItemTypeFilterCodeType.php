<?php
// autogenerated file 24.02.2011 11:36
// $Id: $
// $Log: $
//
require_once 'EbatNs_FacetType.php';

/**
 * ItemTypeFilterCodeType - Type declaration to be used by otherschema. This code 
 * identifies the ItemTypeFilters (e.g., forGetSearchResults requests) used to 
 * filter items returned by the typeof listing. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/ItemTypeFilterCodeType.html
 *
 * @property string AuctionItemsOnly
 * @property string FixedPricedItem
 * @property string AllItems
 * @property string StoreInventoryOnly
 * @property string FixedPriceExcludeStoreInventory
 * @property string ExcludeStoreInventory
 * @property string AllItemTypes
 * @property string AllFixedPriceItemTypes
 * @property string CustomCode
 * @property string ClassifiedItemsOnly
 */
class ItemTypeFilterCodeType extends EbatNs_FacetType
{
	const CodeType_AuctionItemsOnly = 'AuctionItemsOnly';
	const CodeType_FixedPricedItem = 'FixedPricedItem';
	const CodeType_AllItems = 'AllItems';
	const CodeType_StoreInventoryOnly = 'StoreInventoryOnly';
	const CodeType_FixedPriceExcludeStoreInventory = 'FixedPriceExcludeStoreInventory';
	const CodeType_ExcludeStoreInventory = 'ExcludeStoreInventory';
	const CodeType_AllItemTypes = 'AllItemTypes';
	const CodeType_AllFixedPriceItemTypes = 'AllFixedPriceItemTypes';
	const CodeType_CustomCode = 'CustomCode';
	const CodeType_ClassifiedItemsOnly = 'ClassifiedItemsOnly';

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('ItemTypeFilterCodeType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_ItemTypeFilterCodeType = new ItemTypeFilterCodeType();

?>
