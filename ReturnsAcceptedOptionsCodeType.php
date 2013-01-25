<?php
// autogenerated file 10.09.2012 12:30
// $Id: $
// $Log: $
//
require_once 'EbatNs_FacetType.php';

/**
 * Specified whether returns are accepted. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/ReturnsAcceptedOptionsCodeType.html
 *
 * @property string ReturnsAccepted
 * @property string ReturnsNotAccepted
 * @property string CustomCode
 */
class ReturnsAcceptedOptionsCodeType extends EbatNs_FacetType
{
	const CodeType_ReturnsAccepted = 'ReturnsAccepted';
	const CodeType_ReturnsNotAccepted = 'ReturnsNotAccepted';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('ReturnsAcceptedOptionsCodeType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_ReturnsAcceptedOptionsCodeType = new ReturnsAcceptedOptionsCodeType();

?>
