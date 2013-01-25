<?php
// autogenerated file 15.11.2010 08:36
// $Id: $
// $Log: $
//
require_once 'EbatNs_FacetType.php';

/**
 * PromotionItemPriceTypeCodeType - Type declaration to be used by other 
 * schema.Indicates the type of offer that can be made for a cross-promoted item. 
 * Note thatfor a Chinese listing with a still-active Buy It Now option, either a 
 * Bid(Auction) or a Buy It Now type offer may be made. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/PromotionItemPriceTypeCodeType.html
 *
 * @property string AuctionPrice
 * @property string BuyItNowPrice
 * @property string BestOfferOnlyPrice
 * @property string ClassifiedAdPrice
 * @property string CustomCode
 */
class PromotionItemPriceTypeCodeType extends EbatNs_FacetType
{
	const CodeType_AuctionPrice = 'AuctionPrice';
	const CodeType_BuyItNowPrice = 'BuyItNowPrice';
	const CodeType_BestOfferOnlyPrice = 'BestOfferOnlyPrice';
	const CodeType_ClassifiedAdPrice = 'ClassifiedAdPrice';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('PromotionItemPriceTypeCodeType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_PromotionItemPriceTypeCodeType = new PromotionItemPriceTypeCodeType();

?>
