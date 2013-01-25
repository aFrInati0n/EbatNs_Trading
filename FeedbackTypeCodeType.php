<?php
// autogenerated file 22.07.2011 09:10
// $Id: $
// $Log: $
//
require_once 'EbatNs_FacetType.php';

/**
 * These are the codes used to specify the type of feedback/feedbacktype in a 
 * single feedback record. Additional information about feedback is available in 
 * theonline Help of the eBay website. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/FeedbackTypeCodeType.html
 *
 * @property string FeedbackReceivedAsSeller
 * @property string FeedbackReceivedAsBuyer
 * @property string FeedbackReceived
 * @property string FeedbackLeft
 * @property string CustomCode
 */
class FeedbackTypeCodeType extends EbatNs_FacetType
{
	const CodeType_FeedbackReceivedAsSeller = 'FeedbackReceivedAsSeller';
	const CodeType_FeedbackReceivedAsBuyer = 'FeedbackReceivedAsBuyer';
	const CodeType_FeedbackReceived = 'FeedbackReceived';
	const CodeType_FeedbackLeft = 'FeedbackLeft';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('FeedbackTypeCodeType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_FeedbackTypeCodeType = new FeedbackTypeCodeType();

?>
