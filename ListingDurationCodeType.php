<?php
// autogenerated file 15.11.2010 08:29
// $Id: $
// $Log: $
//
require_once 'EbatNs_FacetType.php';

/**
 * Applications should not depend on the completeness of 
 * ListingDurationCodeType.GetCategoryFeatures will return the complete list of 
 * listing durations.<br><br>Each code in this code list specifies a number of days 
 * that a listing can be active(i.e., available for bidding/buying). The validity 
 * of a code depends on the listingtype.<br><br>Call GetCategoryFeatures to 
 * determine which listing formats support each durationfor the site you are using. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/ListingDurationCodeType.html
 *
 * @property string Days_1
 * @property string Days_3
 * @property string Days_5
 * @property string Days_7
 * @property string Days_10
 * @property string Days_14
 * @property string Days_21
 * @property string Days_30
 * @property string Days_60
 * @property string Days_90
 * @property string Days_120
 * @property string GTC
 * @property string CustomCode
 */
class ListingDurationCodeType extends EbatNs_FacetType
{
	const CodeType_Days_1 = 'Days_1';
	const CodeType_Days_3 = 'Days_3';
	const CodeType_Days_5 = 'Days_5';
	const CodeType_Days_7 = 'Days_7';
	const CodeType_Days_10 = 'Days_10';
	const CodeType_Days_14 = 'Days_14';
	const CodeType_Days_21 = 'Days_21';
	const CodeType_Days_30 = 'Days_30';
	const CodeType_Days_60 = 'Days_60';
	const CodeType_Days_90 = 'Days_90';
	const CodeType_Days_120 = 'Days_120';
	const CodeType_GTC = 'GTC';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('ListingDurationCodeType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_ListingDurationCodeType = new ListingDurationCodeType();

?>
