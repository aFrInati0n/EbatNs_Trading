<?php
// autogenerated file 10.09.2012 12:33
// $Id: $
// $Log: $
//
require_once 'EbatNs_FacetType.php';

/**
 * The status of a payment. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/RCSPaymentStatusCodeType.html
 *
 * @property string Canceled
 * @property string Paid
 * @property string Pending
 * @property string CustomCode
 */
class RCSPaymentStatusCodeType extends EbatNs_FacetType
{
	const CodeType_Canceled = 'Canceled';
	const CodeType_Paid = 'Paid';
	const CodeType_Pending = 'Pending';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('RCSPaymentStatusCodeType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_RCSPaymentStatusCodeType = new RCSPaymentStatusCodeType();

?>
