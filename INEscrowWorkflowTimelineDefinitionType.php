<?php
// autogenerated file 10.09.2012 12:30
// $Id: $
// $Log: $
//
//
require_once 'EbatNs_ComplexType.php';

/**
 * Defines the escrow workflow version applicable for the given category on the 
 * India site, if the categorysupports PaisaPayFullEscrow. If this field is 
 * present, the corresponding feature applies to the category. The fieldis returned 
 * as an empty element. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/INEscrowWorkflowTimelineDefinitionType.html
 *
 */
class INEscrowWorkflowTimelineDefinitionType extends EbatNs_ComplexType
{

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('INEscrowWorkflowTimelineDefinitionType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__])) {
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()], array());
		}
	}
}
?>
