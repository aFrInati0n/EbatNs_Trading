<?php
// autogenerated file 22.07.2011 09:21
// $Id: $
// $Log: $
//
require_once 'EbatNs_FacetType.php';

/**
 * Indicates whether listing images areincluded in the search results (in both 
 * Picture Gallery andList Views) and, if so, which image listing enhancements 
 * applyto them. Items that have pictures but do not have image listingenhancements 
 * display a generic photo image in search results. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/GalleryTypeCodeType.html
 *
 * @property string None
 * @property string Featured
 * @property string Gallery
 * @property string Plus
 * @property string CustomCode
 */
class GalleryTypeCodeType extends EbatNs_FacetType
{
	const CodeType_None = 'None';
	const CodeType_Featured = 'Featured';
	const CodeType_Gallery = 'Gallery';
	const CodeType_Plus = 'Plus';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('GalleryTypeCodeType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_GalleryTypeCodeType = new GalleryTypeCodeType();

?>
