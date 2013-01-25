<?php
// autogenerated file 15.11.2010 08:36
// $Id: $
// $Log: $
//
require_once 'EbatNs_FacetType.php';

/**
 * BidderTypeCodeType - Type declaration to be used by other schema.Specifies the 
 * whether to retrieve all bidders for ended or openlistings. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/BidderTypeCodeType.html
 *
 * @property string AllBidder
 * @property string HighBidder
 * @property string CustomCode
 */
class BidderTypeCodeType extends EbatNs_FacetType
{
	const CodeType_AllBidder = 'AllBidder';
	const CodeType_HighBidder = 'HighBidder';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('BidderTypeCodeType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_BidderTypeCodeType = new BidderTypeCodeType();

?>
