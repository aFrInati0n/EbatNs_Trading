<?php
// autogenerated file 24.02.2011 11:33
// $Id: $
// $Log: $
//
require_once 'EbatNs_FacetType.php';

/**
 * Specifies whether a listing feature is available for the site specified in the 
 * request. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/BoldTitleCodeType.html
 *
 * @property string Enabled
 * @property string Disabled
 * @property string CustomCode
 */
class BoldTitleCodeType extends EbatNs_FacetType
{
	const CodeType_Enabled = 'Enabled';
	const CodeType_Disabled = 'Disabled';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('BoldTitleCodeType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_BoldTitleCodeType = new BoldTitleCodeType();

?>
