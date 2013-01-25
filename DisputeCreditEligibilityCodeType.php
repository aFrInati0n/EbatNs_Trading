<?php
// autogenerated file 24.02.2011 11:33
// $Id: $
// $Log: $
//
require_once 'EbatNs_FacetType.php';

/**
 * Indicates whether the dispute is currently eligible for Final Value Fee credit. 
 * The valuedoes not indicate whether the credit will actually be made. Applies to 
 * Unpaid Itemdisputes. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/DisputeCreditEligibilityCodeType.html
 *
 * @property string InEligible
 * @property string Eligible
 * @property string CustomCode
 */
class DisputeCreditEligibilityCodeType extends EbatNs_FacetType
{
	const CodeType_InEligible = 'InEligible';
	const CodeType_Eligible = 'Eligible';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('DisputeCreditEligibilityCodeType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_DisputeCreditEligibilityCodeType = new DisputeCreditEligibilityCodeType();

?>
