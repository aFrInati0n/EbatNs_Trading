<?php
// autogenerated file 29.12.2011 14:50
// $Id: $
// $Log: $
//
require_once 'EbatNs_FacetType.php';

/**
 * This code identifies the status of the bidder's request 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/BidderStatusCodeType.html
 *
 * @property string Approved
 * @property string Denied
 * @property string Pending
 * @property string CustomCode
 */
class BidderStatusCodeType extends EbatNs_FacetType
{
	const CodeType_Approved = 'Approved';
	const CodeType_Denied = 'Denied';
	const CodeType_Pending = 'Pending';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('BidderStatusCodeType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_BidderStatusCodeType = new BidderStatusCodeType();

?>
