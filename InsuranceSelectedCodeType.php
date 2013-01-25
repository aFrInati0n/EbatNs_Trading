<?php
// autogenerated file 15.11.2010 08:36
// $Id: $
// $Log: $
//
require_once 'EbatNs_FacetType.php';

/**
 * The insurance selected by the buyer. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/InsuranceSelectedCodeType.html
 *
 * @property string NotOffered
 * @property string OfferedNotSelected
 * @property string OfferedSelected
 * @property string Required
 * @property string IncludedInShippingHandling
 * @property string CustomCode
 */
class InsuranceSelectedCodeType extends EbatNs_FacetType
{
	const CodeType_NotOffered = 'NotOffered';
	const CodeType_OfferedNotSelected = 'OfferedNotSelected';
	const CodeType_OfferedSelected = 'OfferedSelected';
	const CodeType_Required = 'Required';
	const CodeType_IncludedInShippingHandling = 'IncludedInShippingHandling';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('InsuranceSelectedCodeType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_InsuranceSelectedCodeType = new InsuranceSelectedCodeType();

?>
