<?php
// autogenerated file 10.09.2012 12:30
// $Id: $
// $Log: $
//
require_once 'EbatNs_FacetType.php';

/**
 * Indicates the user's eBay PowerSeller tier. PowerSellers are distinguished in 
 * 5tiers based on average monthly sales. Benefits and services vary for each 
 * tier.eBay calculates eligibility for each tier monthly. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/SellerLevelCodeType.html
 *
 * @property string Bronze
 * @property string Silver
 * @property string Gold
 * @property string Platinum
 * @property string Titanium
 * @property string None
 * @property string CustomCode
 */
class SellerLevelCodeType extends EbatNs_FacetType
{
	const CodeType_Bronze = 'Bronze';
	const CodeType_Silver = 'Silver';
	const CodeType_Gold = 'Gold';
	const CodeType_Platinum = 'Platinum';
	const CodeType_Titanium = 'Titanium';
	const CodeType_None = 'None';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('SellerLevelCodeType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_SellerLevelCodeType = new SellerLevelCodeType();

?>
