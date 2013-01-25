<?php
// autogenerated file 10.09.2012 12:30
// $Id: $
// $Log: $
//
require_once 'EbatNs_FacetType.php';

/**
 * This enumerated type contains the possible refund options that a seller may 
 * offer a buyerfor a given item. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/RefundOptionsCodeType.html
 *
 * @property string MoneyBack
 * @property string Exchange
 * @property string MerchandiseCredit
 * @property string MoneyBackOrExchange
 * @property string CustomCode
 */
class RefundOptionsCodeType extends EbatNs_FacetType
{
	const CodeType_MoneyBack = 'MoneyBack';
	const CodeType_Exchange = 'Exchange';
	const CodeType_MerchandiseCredit = 'MerchandiseCredit';
	const CodeType_MoneyBackOrExchange = 'MoneyBackOrExchange';
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
