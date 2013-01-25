<?php
// autogenerated file 18.03.2011 12:48
// $Id: $
// $Log: $
//
require_once 'EbatNs_FacetType.php';

/**
 *  
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/MeasurementSystemCodeType.html
 *
 * @property string English
 * @property string Metric
 */
class MeasurementSystemCodeType extends EbatNs_FacetType
{
	const CodeType_English = 'English';
	const CodeType_Metric = 'Metric';

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('MeasurementSystemCodeType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_MeasurementSystemCodeType = new MeasurementSystemCodeType();

?>
