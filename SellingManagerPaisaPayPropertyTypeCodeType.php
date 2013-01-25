<?php
// autogenerated file 29.12.2011 14:15
// $Id: $
// $Log: $
//
require_once 'EbatNs_FacetType.php';

/**
 * Container for the PaisaPay alert types. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/SellingManagerPaisaPayPropertyTypeCodeType.html
 *
 * @property string PaisaPayAwaitingShipment
 * @property string PaisaPayTimeExtensionRequestDeclined
 * @property string PaisaPayPendingReceived
 * @property string PaisaPayRefundInitiated
 * @property string PaisaPayTimeExtensionRequested
 * @property string CustomCode
 */
class SellingManagerPaisaPayPropertyTypeCodeType extends EbatNs_FacetType
{
	const CodeType_PaisaPayAwaitingShipment = 'PaisaPayAwaitingShipment';
	const CodeType_PaisaPayTimeExtensionRequestDeclined = 'PaisaPayTimeExtensionRequestDeclined';
	const CodeType_PaisaPayPendingReceived = 'PaisaPayPendingReceived';
	const CodeType_PaisaPayRefundInitiated = 'PaisaPayRefundInitiated';
	const CodeType_PaisaPayTimeExtensionRequested = 'PaisaPayTimeExtensionRequested';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('SellingManagerPaisaPayPropertyTypeCodeType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_SellingManagerPaisaPayPropertyTypeCodeType = new SellingManagerPaisaPayPropertyTypeCodeType();

?>
