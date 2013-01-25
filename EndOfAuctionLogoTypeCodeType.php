<?php
// autogenerated file 10.09.2012 12:53
// $Id: $
// $Log: $
//
require_once 'EbatNs_FacetType.php';

/**
 * EndOfAuctionLogoTypeCodeType - Type declaration to be used by other 
 * schema.Indicatest the type of logo to be used in a customize end of auction 
 * (EOA) email. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/EndOfAuctionLogoTypeCodeType.html
 *
 * @property string WinningBidderNotice
 * @property string Store
 * @property string Customized
 * @property string CustomCode
 * @property string None
 */
class EndOfAuctionLogoTypeCodeType extends EbatNs_FacetType
{
	const CodeType_WinningBidderNotice = 'WinningBidderNotice';
	const CodeType_Store = 'Store';
	const CodeType_Customized = 'Customized';
	const CodeType_CustomCode = 'CustomCode';
	const CodeType_None = 'None';

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('EndOfAuctionLogoTypeCodeType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_EndOfAuctionLogoTypeCodeType = new EndOfAuctionLogoTypeCodeType();

?>
