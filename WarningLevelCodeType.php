<?php
// autogenerated file 24.02.2011 11:33
// $Id: $
// $Log: $
//
require_once 'EbatNs_FacetType.php';

/**
 *  
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/WarningLevelCodeType.html
 *
 * @property string Low
 * @property string High
 */
class WarningLevelCodeType extends EbatNs_FacetType
{
	const CodeType_Low = 'Low';
	const CodeType_High = 'High';

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('WarningLevelCodeType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_WarningLevelCodeType = new WarningLevelCodeType();

?>
