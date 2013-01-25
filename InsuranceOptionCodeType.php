<?php
// autogenerated file 22.07.2011 09:06
// $Id: $
// $Log: $
//
require_once 'EbatNs_FacetType.php';

/**
 * The seller's requirements regarding whether the buyer paysfor shipping 
 * insurance. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/InsuranceOptionCodeType.html
 *
 * @property string Optional
 * @property string Required
 * @property string NotOffered
 * @property string IncludedInShippingHandling
 * @property string NotOfferedOnSite
 * @property string CustomCode
 */
class InsuranceOptionCodeType extends EbatNs_FacetType
{
	const CodeType_Optional = 'Optional';
	const CodeType_Required = 'Required';
	const CodeType_NotOffered = 'NotOffered';
	const CodeType_IncludedInShippingHandling = 'IncludedInShippingHandling';
	const CodeType_NotOfferedOnSite = 'NotOfferedOnSite';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('InsuranceOptionCodeType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_InsuranceOptionCodeType = new InsuranceOptionCodeType();

?>
