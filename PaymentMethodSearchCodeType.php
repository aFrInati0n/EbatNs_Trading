<?php
// autogenerated file 10.09.2012 12:33
// $Id: $
// $Log: $
//
require_once 'EbatNs_FacetType.php';

/**
 * Used for specifying items for which a specific payment method or methods are 
 * accepted. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/PaymentMethodSearchCodeType.html
 *
 * @property string PayPal
 * @property string PaisaPay
 * @property string PayPalOrPaisaPay
 * @property string CustomCode
 * @property string PaisaPayEscrowEMI
 */
class PaymentMethodSearchCodeType extends EbatNs_FacetType
{
	const CodeType_PayPal = 'PayPal';
	const CodeType_PaisaPay = 'PaisaPay';
	const CodeType_PayPalOrPaisaPay = 'PayPalOrPaisaPay';
	const CodeType_CustomCode = 'CustomCode';
	const CodeType_PaisaPayEscrowEMI = 'PaisaPayEscrowEMI';

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('PaymentMethodSearchCodeType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_PaymentMethodSearchCodeType = new PaymentMethodSearchCodeType();

?>
