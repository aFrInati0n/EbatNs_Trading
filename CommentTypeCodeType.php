<?php
// autogenerated file 29.12.2011 14:50
// $Id: $
// $Log: $
//
require_once 'EbatNs_FacetType.php';

/**
 * These are the codes used to specify the type of feedback/comments in a single 
 * feedback record. Additional information about feedback is available in theonline 
 * Help of the eBay website. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/CommentTypeCodeType.html
 *
 * @property string Positive
 * @property string Neutral
 * @property string Negative
 * @property string Withdrawn
 * @property string IndependentlyWithdrawn
 * @property string CustomCode
 */
class CommentTypeCodeType extends EbatNs_FacetType
{
	const CodeType_Positive = 'Positive';
	const CodeType_Neutral = 'Neutral';
	const CodeType_Negative = 'Negative';
	const CodeType_Withdrawn = 'Withdrawn';
	const CodeType_IndependentlyWithdrawn = 'IndependentlyWithdrawn';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('CommentTypeCodeType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_CommentTypeCodeType = new CommentTypeCodeType();

?>
