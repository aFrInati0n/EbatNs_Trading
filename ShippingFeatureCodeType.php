<?php
// autogenerated file 15.11.2010 08:32
// $Id: $
// $Log: $
//
require_once 'EbatNs_FacetType.php';

/**
 * Miscellaneous details of the shipment. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/ShippingFeatureCodeType.html
 *
 * @property string DeliveryConfirmation
 * @property string SignatureConfirmation
 * @property string StealthPostage
 * @property string SaturdayDelivery
 * @property string Other
 * @property string NotDefined
 * @property string CustomCode
 */
class ShippingFeatureCodeType extends EbatNs_FacetType
{
	const CodeType_DeliveryConfirmation = 'DeliveryConfirmation';
	const CodeType_SignatureConfirmation = 'SignatureConfirmation';
	const CodeType_StealthPostage = 'StealthPostage';
	const CodeType_SaturdayDelivery = 'SaturdayDelivery';
	const CodeType_Other = 'Other';
	const CodeType_NotDefined = 'NotDefined';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('ShippingFeatureCodeType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_ShippingFeatureCodeType = new ShippingFeatureCodeType();

?>
