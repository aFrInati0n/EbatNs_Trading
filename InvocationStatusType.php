<?php
// autogenerated file 22.07.2011 09:10
// $Id: $
// $Log: $
//
require_once 'EbatNs_FacetType.php';

/**
 *  
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/InvocationStatusType.html
 *
 * @property string InProgress
 * @property string Success
 * @property string Failure
 * @property string CustomCode
 */
class InvocationStatusType extends EbatNs_FacetType
{
	const CodeType_InProgress = 'InProgress';
	const CodeType_Success = 'Success';
	const CodeType_Failure = 'Failure';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('InvocationStatusType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_InvocationStatusType = new InvocationStatusType();

?>
