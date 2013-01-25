<?php
// autogenerated file 18.03.2011 12:43
// $Id: $
// $Log: $
//
require_once 'EbatNs_FacetType.php';

/**
 * Various groupings of Shipping Service Cost. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/CostGroupFlatCodeType.html
 *
 * @property string Group1MaxFlatShippingCost
 * @property string Group2MaxFlatShippingCost
 * @property string Group3MaxFlatShippingCost
 * @property string CustomCode
 */
class CostGroupFlatCodeType extends EbatNs_FacetType
{
	const CodeType_Group1MaxFlatShippingCost = 'Group1MaxFlatShippingCost';
	const CodeType_Group2MaxFlatShippingCost = 'Group2MaxFlatShippingCost';
	const CodeType_Group3MaxFlatShippingCost = 'Group3MaxFlatShippingCost';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('CostGroupFlatCodeType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_CostGroupFlatCodeType = new CostGroupFlatCodeType();

?>
