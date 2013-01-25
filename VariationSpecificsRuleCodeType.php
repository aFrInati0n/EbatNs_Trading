<?php
// autogenerated file 22.07.2011 09:06
// $Id: $
// $Log: $
//
require_once 'EbatNs_FacetType.php';

/**
 * Defines option for whether an Item Specific can be used as a variation specific. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/VariationSpecificsRuleCodeType.html
 *
 * @property string Enabled
 * @property string Disabled
 * @property string CustomCode
 */
class VariationSpecificsRuleCodeType extends EbatNs_FacetType
{
	const CodeType_Enabled = 'Enabled';
	const CodeType_Disabled = 'Disabled';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('VariationSpecificsRuleCodeType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_VariationSpecificsRuleCodeType = new VariationSpecificsRuleCodeType();

?>
