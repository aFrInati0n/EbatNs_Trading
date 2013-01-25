<?php
// autogenerated file 24.02.2011 11:33
// $Id: $
// $Log: $
//
require_once 'EbatNs_FacetType.php';

/**
 * Used to indicate whether Best Offer is enabled for a category belonging to the 
 * Classified Ad Format. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/ClassifiedAdBestOfferEnabledCodeType.html
 *
 * @property string Disabled
 * @property string Enabled
 * @property string Required
 * @property string CustomCode
 */
class ClassifiedAdBestOfferEnabledCodeType extends EbatNs_FacetType
{
	const CodeType_Disabled = 'Disabled';
	const CodeType_Enabled = 'Enabled';
	const CodeType_Required = 'Required';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('ClassifiedAdBestOfferEnabledCodeType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_ClassifiedAdBestOfferEnabledCodeType = new ClassifiedAdBestOfferEnabledCodeType();

?>
