<?php
// autogenerated file 10.09.2012 12:26
// $Id: $
// $Log: $
//
require_once 'EbatNs_FacetType.php';

/**
 * Identifies listing-type-related filters. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/ItemTypeCodeType.html
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
 * @property string AdFormat
 */
class ItemTypeCodeType extends EbatNs_FacetType
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
	const CodeType_AdFormat = 'AdFormat';

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('ItemTypeCodeType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_ItemTypeCodeType = new ItemTypeCodeType();

?>
