<?php
// autogenerated file 24.02.2011 11:33
// $Id: $
// $Log: $
//
//
require_once 'EbatNs_ComplexType.php';

/**
 * Indicates which address option the category supports for Classified Ad format 
 * listings.Added for the For Sale By Owner format. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/ClassifiedAdStreetCountDefinitionType.html
 *
 */
class ClassifiedAdStreetCountDefinitionType extends EbatNs_ComplexType
{

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('ClassifiedAdStreetCountDefinitionType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__])) {
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()], array());
		}
	}
}
?>
