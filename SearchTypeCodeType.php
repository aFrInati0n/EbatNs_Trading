<?php
// autogenerated file 22.07.2011 08:50
// $Id: $
// $Log: $
//
require_once 'EbatNs_FacetType.php';

/**
 * SearchTypeCodeType - Type declaration to be used by other schema.Identifies the 
 * SearchTypes (e.g., for GetSearchResults requests)used to restrict items returned 
 * to: only Gallery items or galleryand non-Gallery items. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/SearchTypeCodeType.html
 *
 * @property string All
 * @property string Gallery
 * @property string CustomCode
 */
class SearchTypeCodeType extends EbatNs_FacetType
{
	const CodeType_All = 'All';
	const CodeType_Gallery = 'Gallery';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('SearchTypeCodeType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_SearchTypeCodeType = new SearchTypeCodeType();

?>
