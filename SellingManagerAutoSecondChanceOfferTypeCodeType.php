<?php
// autogenerated file 24.02.2011 11:33
// $Id: $
// $Log: $
//
require_once 'EbatNs_FacetType.php';

/**
 * SellingManagerAutoSecondChanceOfferTypeCodeType - Specifies the type of second 
 * chance offer automation rule that will be added to an item. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/SellingManagerAutoSecondChanceOfferTypeCodeType.html
 *
 * @property string BidsGreaterThanAmount
 * @property string BidsGreaterThanCostPlusAmount
 * @property string BidsGreaterThanCostPlusPercentage
 * @property string CustomCode
 */
class SellingManagerAutoSecondChanceOfferTypeCodeType extends EbatNs_FacetType
{
	const CodeType_BidsGreaterThanAmount = 'BidsGreaterThanAmount';
	const CodeType_BidsGreaterThanCostPlusAmount = 'BidsGreaterThanCostPlusAmount';
	const CodeType_BidsGreaterThanCostPlusPercentage = 'BidsGreaterThanCostPlusPercentage';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('SellingManagerAutoSecondChanceOfferTypeCodeType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_SellingManagerAutoSecondChanceOfferTypeCodeType = new SellingManagerAutoSecondChanceOfferTypeCodeType();

?>
