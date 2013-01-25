<?php
// autogenerated file 22.07.2011 08:50
// $Id: $
// $Log: $
//
require_once 'EbatNs_FacetType.php';

/**
 * Part of the mechanism for eBay to control which announcement messages areto be 
 * made available to the user. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/AnnouncementMessageCodeType.html
 *
 * @property string None
 * @property string Deprecation
 * @property string Mapping
 * @property string DeprecationAndMapping
 * @property string CustomCode
 */
class AnnouncementMessageCodeType extends EbatNs_FacetType
{
	const CodeType_None = 'None';
	const CodeType_Deprecation = 'Deprecation';
	const CodeType_Mapping = 'Mapping';
	const CodeType_DeprecationAndMapping = 'DeprecationAndMapping';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('AnnouncementMessageCodeType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_AnnouncementMessageCodeType = new AnnouncementMessageCodeType();

?>
