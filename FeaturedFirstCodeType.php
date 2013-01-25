<?php
// autogenerated file 22.07.2011 09:21
// $Id: $
// $Log: $
//
require_once 'EbatNs_FacetType.php';

/**
 * Specifies whether a listing feature is enabled for this site and whether it is 
 * restricted to a set of sellers. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/FeaturedFirstCodeType.html
 *
 * @property string Enabled
 * @property string Disabled
 * @property string PowerSellerOnly
 * @property string TopRatedSellerOnly
 * @property string CustomCode
 */
class FeaturedFirstCodeType extends EbatNs_FacetType
{
	const CodeType_Enabled = 'Enabled';
	const CodeType_Disabled = 'Disabled';
	const CodeType_PowerSellerOnly = 'PowerSellerOnly';
	const CodeType_TopRatedSellerOnly = 'TopRatedSellerOnly';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('FeaturedFirstCodeType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_FeaturedFirstCodeType = new FeaturedFirstCodeType();

?>
