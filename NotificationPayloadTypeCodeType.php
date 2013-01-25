<?php
// autogenerated file 10.09.2012 12:38
// $Id: $
// $Log: $
//
require_once 'EbatNs_FacetType.php';

/**
 * The schema options for Platform Notifications. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/NotificationPayloadTypeCodeType.html
 *
 * @property string eBLSchemaSOAP
 * @property string CustomCode
 */
class NotificationPayloadTypeCodeType extends EbatNs_FacetType
{
	const CodeType_eBLSchemaSOAP = 'eBLSchemaSOAP';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('NotificationPayloadTypeCodeType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_NotificationPayloadTypeCodeType = new NotificationPayloadTypeCodeType();

?>
