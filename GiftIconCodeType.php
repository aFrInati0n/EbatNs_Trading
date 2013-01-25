<?php
// autogenerated file 22.07.2011 09:06
// $Id: $
// $Log: $
//
require_once 'EbatNs_FacetType.php';

/**
 * Specifies whether a listing feature is available for the site specified in the 
 * request. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/GiftIconCodeType.html
 *
 * @property string Enabled
 * @property string Disabled
 * @property string CustomCode
 */
class GiftIconCodeType extends EbatNs_FacetType
{
	const CodeType_Enabled = 'Enabled';
	const CodeType_Disabled = 'Disabled';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('GiftIconCodeType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_GiftIconCodeType = new GiftIconCodeType();

?>
