<?php
// autogenerated file 10.09.2012 12:26
// $Id: $
// $Log: $
//
require_once 'EbatNs_FacetType.php';

/**
 * Types of feedback responses. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/FeedbackResponseCodeType.html
 *
 * @property string Reply
 * @property string FollowUp
 * @property string CustomCode
 */
class FeedbackResponseCodeType extends EbatNs_FacetType
{
	const CodeType_Reply = 'Reply';
	const CodeType_FollowUp = 'FollowUp';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('FeedbackResponseCodeType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_FeedbackResponseCodeType = new FeedbackResponseCodeType();

?>
