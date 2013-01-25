<?php
// autogenerated file 29.12.2011 14:15
// $Id: $
// $Log: $
//
require_once 'EbatNs_FacetType.php';

/**
 * Alerts can be either informational or a warning that identifies a problem. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/SellerDashboardAlertSeverityCodeType.html
 *
 * @property string Informational
 * @property string Warning
 * @property string StrongWarning
 * @property string CustomCode
 */
class SellerDashboardAlertSeverityCodeType extends EbatNs_FacetType
{
	const CodeType_Informational = 'Informational';
	const CodeType_Warning = 'Warning';
	const CodeType_StrongWarning = 'StrongWarning';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('SellerDashboardAlertSeverityCodeType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_SellerDashboardAlertSeverityCodeType = new SellerDashboardAlertSeverityCodeType();

?>
