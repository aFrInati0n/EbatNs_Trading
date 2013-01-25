<?php
// autogenerated file 10.09.2012 12:53
// $Id: $
// $Log: $
//
require_once 'EbatNs_FacetType.php';

/**
 * A compressed, representative title for the eBay URL. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/URLTypeCodeType.html
 *
 * @property string ViewItemURL
 * @property string ViewUserURL
 * @property string MyeBayURL
 * @property string MyeBayBiddingURL
 * @property string MyeBayNotWonURL
 * @property string MyeBayWonURL
 * @property string MyeBayWatchingURL
 * @property string eBayStoreURL
 * @property string SmallLogoURL
 * @property string MediumLogoURL
 * @property string LargeLogoURL
 * @property string CustomCode
 */
class URLTypeCodeType extends EbatNs_FacetType
{
	const CodeType_ViewItemURL = 'ViewItemURL';
	const CodeType_ViewUserURL = 'ViewUserURL';
	const CodeType_MyeBayURL = 'MyeBayURL';
	const CodeType_MyeBayBiddingURL = 'MyeBayBiddingURL';
	const CodeType_MyeBayNotWonURL = 'MyeBayNotWonURL';
	const CodeType_MyeBayWonURL = 'MyeBayWonURL';
	const CodeType_MyeBayWatchingURL = 'MyeBayWatchingURL';
	const CodeType_eBayStoreURL = 'eBayStoreURL';
	const CodeType_SmallLogoURL = 'SmallLogoURL';
	const CodeType_MediumLogoURL = 'MediumLogoURL';
	const CodeType_LargeLogoURL = 'LargeLogoURL';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('URLTypeCodeType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_URLTypeCodeType = new URLTypeCodeType();

?>
