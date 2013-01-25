<?php
// autogenerated file 29.12.2011 14:39
// $Id: $
// $Log: $
//
require_once 'EbatNs_FacetType.php';

/**
 * FedEx Rate Options 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/FedExRateOptionCodeType.html
 *
 * @property string FedExStandardList
 * @property string FedExCounter
 * @property string CustomCode
 */
class FedExRateOptionCodeType extends EbatNs_FacetType
{
	const CodeType_FedExStandardList = 'FedExStandardList';
	const CodeType_FedExCounter = 'FedExCounter';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('FedExRateOptionCodeType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_FedExRateOptionCodeType = new FedExRateOptionCodeType();

?>
