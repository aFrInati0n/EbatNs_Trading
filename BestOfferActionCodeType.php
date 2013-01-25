<?php
// autogenerated file 10.09.2012 12:53
// $Id: $
// $Log: $
//
require_once 'EbatNs_FacetType.php';

/**
 * Indicates the action taken by a seller for a best offer. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/BestOfferActionCodeType.html
 *
 * @property string Accept
 * @property string Decline
 * @property string Counter
 * @property string CustomCode
 */
class BestOfferActionCodeType extends EbatNs_FacetType
{
	const CodeType_Accept = 'Accept';
	const CodeType_Decline = 'Decline';
	const CodeType_Counter = 'Counter';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('BestOfferActionCodeType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_BestOfferActionCodeType = new BestOfferActionCodeType();

?>
