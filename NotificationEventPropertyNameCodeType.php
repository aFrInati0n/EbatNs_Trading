<?php
// autogenerated file 10.09.2012 12:53
// $Id: $
// $Log: $
//
require_once 'EbatNs_FacetType.php';

/**
 * Defines all property names that can be used. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/NotificationEventPropertyNameCodeType.html
 *
 * @property string TimeLeft
 * @property string CustomCode
 */
class NotificationEventPropertyNameCodeType extends EbatNs_FacetType
{
	const CodeType_TimeLeft = 'TimeLeft';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('NotificationEventPropertyNameCodeType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_NotificationEventPropertyNameCodeType = new NotificationEventPropertyNameCodeType();

?>
