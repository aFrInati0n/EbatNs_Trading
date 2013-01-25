<?php
// autogenerated file 10.09.2012 12:38
// $Id: $
// $Log: $
//
require_once 'EbatNs_FacetType.php';

/**
 * The purpose of a purchase (e.g., by a PayPal application). 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/PurchasePurposeTypeCodeType.html
 *
 * @property string Other
 * @property string BuyNowItem
 * @property string ShoppingCart
 * @property string AuctionItem
 * @property string GiftCertificates
 * @property string Subscription
 * @property string Donation
 * @property string eBayBilling
 * @property string CustomCode
 */
class PurchasePurposeTypeCodeType extends EbatNs_FacetType
{
	const CodeType_Other = 'Other';
	const CodeType_BuyNowItem = 'BuyNowItem';
	const CodeType_ShoppingCart = 'ShoppingCart';
	const CodeType_AuctionItem = 'AuctionItem';
	const CodeType_GiftCertificates = 'GiftCertificates';
	const CodeType_Subscription = 'Subscription';
	const CodeType_Donation = 'Donation';
	const CodeType_eBayBilling = 'eBayBilling';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('PurchasePurposeTypeCodeType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_PurchasePurposeTypeCodeType = new PurchasePurposeTypeCodeType();

?>
