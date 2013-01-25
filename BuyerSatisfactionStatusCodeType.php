<?php
// autogenerated file 29.12.2011 15:00
// $Id: $
// $Log: $
//
require_once 'EbatNs_FacetType.php';

/**
 * Buyer satisfaction status. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/BuyerSatisfactionStatusCodeType.html
 *
 * @property string Excellent
 * @property string Good
 * @property string NeedsWork
 * @property string Poor
 * @property string VeryPoor
 * @property string Unacceptable
 * @property string CustomCode
 */
class BuyerSatisfactionStatusCodeType extends EbatNs_FacetType
{
	const CodeType_Excellent = 'Excellent';
	const CodeType_Good = 'Good';
	const CodeType_NeedsWork = 'NeedsWork';
	const CodeType_Poor = 'Poor';
	const CodeType_VeryPoor = 'VeryPoor';
	const CodeType_Unacceptable = 'Unacceptable';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('BuyerSatisfactionStatusCodeType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_BuyerSatisfactionStatusCodeType = new BuyerSatisfactionStatusCodeType();

?>
