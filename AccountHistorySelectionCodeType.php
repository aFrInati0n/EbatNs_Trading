<?php
// autogenerated file 18.03.2011 12:43
// $Id: $
// $Log: $
//
require_once 'EbatNs_FacetType.php';

/**
 * Specifies a report format to be used to describe the seller's account. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/AccountHistorySelectionCodeType.html
 *
 * @property string LastInvoice
 * @property string SpecifiedInvoice
 * @property string BetweenSpecifiedDates
 * @property string CustomCode
 */
class AccountHistorySelectionCodeType extends EbatNs_FacetType
{
	const CodeType_LastInvoice = 'LastInvoice';
	const CodeType_SpecifiedInvoice = 'SpecifiedInvoice';
	const CodeType_BetweenSpecifiedDates = 'BetweenSpecifiedDates';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('AccountHistorySelectionCodeType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_AccountHistorySelectionCodeType = new AccountHistorySelectionCodeType();

?>
