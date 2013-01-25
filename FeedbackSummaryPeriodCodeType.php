<?php
// autogenerated file 29.12.2011 14:50
// $Id: $
// $Log: $
//
require_once 'EbatNs_FacetType.php';

/**
 * These are the various summary periods for which feedback is calculated. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/FeedbackSummaryPeriodCodeType.html
 *
 * @property string ThirtyDays
 * @property string FiftyTwoWeeks
 * @property string CustomCode
 */
class FeedbackSummaryPeriodCodeType extends EbatNs_FacetType
{
	const CodeType_ThirtyDays = 'ThirtyDays';
	const CodeType_FiftyTwoWeeks = 'FiftyTwoWeeks';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('FeedbackSummaryPeriodCodeType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_FeedbackSummaryPeriodCodeType = new FeedbackSummaryPeriodCodeType();

?>
