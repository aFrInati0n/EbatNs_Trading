<?php
// autogenerated file 29.12.2011 14:05
// $Id: $
// $Log: $
//
require_once 'EbatNs_FacetType.php';

/**
 * This is used to specify the refund option that the seller supports for a given 
 * item. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/RefundOptionsCodeType.html
 *
 * @property string MoneyBack
 * @property string Exchange
 * @property string MerchandiseCredit
 * @property string CustomCode
 */
class RefundOptionsCodeType extends EbatNs_FacetType
{
	const CodeType_MoneyBack = 'MoneyBack';
	const CodeType_Exchange = 'Exchange';
	const CodeType_MerchandiseCredit = 'MerchandiseCredit';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('RefundOptionsCodeType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_RefundOptionsCodeType = new RefundOptionsCodeType();

?>
