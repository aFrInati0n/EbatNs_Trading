<?php
// autogenerated file 10.09.2012 12:38
// $Id: $
// $Log: $
//
require_once 'EbatNs_FacetType.php';

/**
 * Number of days. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/CombinedPaymentPeriodCodeType.html
 *
 * @property string Days_3
 * @property string Days_5
 * @property string Days_7
 * @property string Days_14
 * @property string Days_30
 * @property string Ineligible
 * @property string CustomCode
 */
class CombinedPaymentPeriodCodeType extends EbatNs_FacetType
{
	const CodeType_Days_3 = 'Days_3';
	const CodeType_Days_5 = 'Days_5';
	const CodeType_Days_7 = 'Days_7';
	const CodeType_Days_14 = 'Days_14';
	const CodeType_Days_30 = 'Days_30';
	const CodeType_Ineligible = 'Ineligible';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('CombinedPaymentPeriodCodeType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_CombinedPaymentPeriodCodeType = new CombinedPaymentPeriodCodeType();

?>
