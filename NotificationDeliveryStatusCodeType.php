<?php
// autogenerated file 18.03.2011 12:48
// $Id: $
// $Log: $
//
require_once 'EbatNs_FacetType.php';

/**
 * Valid notification status codes 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/NotificationDeliveryStatusCodeType.html
 *
 * @property string CustomCode
 * @property string Delivered
 * @property string Failed
 * @property string Rejected
 * @property string MarkedDown
 */
class NotificationDeliveryStatusCodeType extends EbatNs_FacetType
{
	const CodeType_CustomCode = 'CustomCode';
	const CodeType_Delivered = 'Delivered';
	const CodeType_Failed = 'Failed';
	const CodeType_Rejected = 'Rejected';
	const CodeType_MarkedDown = 'MarkedDown';

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('NotificationDeliveryStatusCodeType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_NotificationDeliveryStatusCodeType = new NotificationDeliveryStatusCodeType();

?>
