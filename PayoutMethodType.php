<?php
// autogenerated file 10.09.2012 12:53
// $Id: $
// $Log: $
//
require_once 'EbatNs_FacetType.php';

/**
 * Enumeration type that contains the payout methods available to DE and AT sellers 
 * for orders going through thenew eBay payment process flow. Once a DE or AT 
 * seller has accepted the supplemental user agreement for the neweBay payment 
 * process, that seller must set the default payout account in My eBay preferences. 
 * eBay willdistribute seller payouts to this account. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/PayoutMethodType.html
 *
 * @property string PAYPAL
 * @property string EFT
 * @property string MONEYBOOKERS
 */
class PayoutMethodType extends EbatNs_FacetType
{
	const CodeType_PAYPAL = 'PAYPAL';
	const CodeType_EFT = 'EFT';
	const CodeType_MONEYBOOKERS = 'MONEYBOOKERS';

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('PayoutMethodType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_PayoutMethodType = new PayoutMethodType();

?>
