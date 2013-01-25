<?php
// autogenerated file 10.09.2012 12:33
// $Id: $
// $Log: $
//
require_once 'EbatNs_FacetType.php';

/**
 * Defines the source for discount price treatment. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/PricingTreatmentCodeType.html
 *
 * @property string STP
 * @property string MAP
 * @property string None
 * @property string MFO
 * @property string CustomCode
 */
class PricingTreatmentCodeType extends EbatNs_FacetType
{
	const CodeType_STP = 'STP';
	const CodeType_MAP = 'MAP';
	const CodeType_None = 'None';
	const CodeType_MFO = 'MFO';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('PricingTreatmentCodeType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_PricingTreatmentCodeType = new PricingTreatmentCodeType();

?>
