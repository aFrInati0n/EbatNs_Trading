<?php
// autogenerated file 29.12.2011 14:05
// $Id: $
// $Log: $
//
require_once 'EbatNs_FacetType.php';

/**
 * Specifies the payment status of an order, asseen by the buyer and seller. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/PaidStatusCodeType.html
 *
 * @property string NotPaid
 * @property string BuyerHasNotCompletedCheckout
 * @property string PaymentPendingWithPayPal
 * @property string PaidWithPayPal
 * @property string MarkedAsPaid
 * @property string PaymentPendingWithEscrow
 * @property string PaidWithEscrow
 * @property string EscrowPaymentCancelled
 * @property string PaymentPendingWithPaisaPay
 * @property string PaidWithPaisaPay
 * @property string PaymentPending
 * @property string PaymentPendingWithPaisaPayEscrow
 * @property string PaidWithPaisaPayEscrow
 * @property string PaisaPayNotPaid
 * @property string Refunded
 * @property string WaitingForCODPayment
 * @property string PaidCOD
 * @property string CustomCode
 */
class PaidStatusCodeType extends EbatNs_FacetType
{
	const CodeType_NotPaid = 'NotPaid';
	const CodeType_BuyerHasNotCompletedCheckout = 'BuyerHasNotCompletedCheckout';
	const CodeType_PaymentPendingWithPayPal = 'PaymentPendingWithPayPal';
	const CodeType_PaidWithPayPal = 'PaidWithPayPal';
	const CodeType_MarkedAsPaid = 'MarkedAsPaid';
	const CodeType_PaymentPendingWithEscrow = 'PaymentPendingWithEscrow';
	const CodeType_PaidWithEscrow = 'PaidWithEscrow';
	const CodeType_EscrowPaymentCancelled = 'EscrowPaymentCancelled';
	const CodeType_PaymentPendingWithPaisaPay = 'PaymentPendingWithPaisaPay';
	const CodeType_PaidWithPaisaPay = 'PaidWithPaisaPay';
	const CodeType_PaymentPending = 'PaymentPending';
	const CodeType_PaymentPendingWithPaisaPayEscrow = 'PaymentPendingWithPaisaPayEscrow';
	const CodeType_PaidWithPaisaPayEscrow = 'PaidWithPaisaPayEscrow';
	const CodeType_PaisaPayNotPaid = 'PaisaPayNotPaid';
	const CodeType_Refunded = 'Refunded';
	const CodeType_WaitingForCODPayment = 'WaitingForCODPayment';
	const CodeType_PaidCOD = 'PaidCOD';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('PaidStatusCodeType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_PaidStatusCodeType = new PaidStatusCodeType();

?>
