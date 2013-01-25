<?php
// autogenerated file 24.02.2011 11:36
// $Id: $
// $Log: $
//
require_once 'EbatNs_FacetType.php';

/**
 * UPS Rate Options 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/UPSRateOptionCodeType.html
 *
 * @property string UPSDailyRates
 * @property string UPSOnDemandRates
 * @property string CustomCode
 */
class UPSRateOptionCodeType extends EbatNs_FacetType
{
	const CodeType_UPSDailyRates = 'UPSDailyRates';
	const CodeType_UPSOnDemandRates = 'UPSOnDemandRates';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('UPSRateOptionCodeType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_UPSRateOptionCodeType = new UPSRateOptionCodeType();

?>
