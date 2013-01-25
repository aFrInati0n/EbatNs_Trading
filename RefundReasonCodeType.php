<?php
// autogenerated file 10.09.2012 12:30
// $Id: $
// $Log: $
//
require_once 'EbatNs_FacetType.php';

/**
 * Explanation of the reason that the refund is being issued. Applicable to 
 * Half.com refunds only. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/RefundReasonCodeType.html
 *
 * @property string CannotShipProduct
 * @property string WrongItemShipped
 * @property string ItemBadQuality
 * @property string ItemDamaged
 * @property string BuyerRemorse
 * @property string Other
 * @property string CustomCode
 */
class RefundReasonCodeType extends EbatNs_FacetType
{
	const CodeType_CannotShipProduct = 'CannotShipProduct';
	const CodeType_WrongItemShipped = 'WrongItemShipped';
	const CodeType_ItemBadQuality = 'ItemBadQuality';
	const CodeType_ItemDamaged = 'ItemDamaged';
	const CodeType_BuyerRemorse = 'BuyerRemorse';
	const CodeType_Other = 'Other';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('RefundReasonCodeType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_RefundReasonCodeType = new RefundReasonCodeType();

?>
