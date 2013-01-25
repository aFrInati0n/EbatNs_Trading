<?php
// autogenerated file 10.09.2012 12:53
// $Id: $
// $Log: $
//
//
require_once 'EbatNs_ComplexType.php';

/**
 * Defines the minimum requirement for compatible applications as part of the 
 * partscompatibility feature. If the field is present, the corresponding feature 
 * appliesto the site. The field is returned as an empty element (e.g., a boolean 
 * value isnot returned).<br><br>Parts compatibility listings contain information 
 * to determine the assemblies withwhich a part is compatible. For example, an 
 * automotive part or accessory listedwitih parts compatibility can be matched with 
 * vehicles (e.g., specific years,makes, and models) with which the part or 
 * accessory can be used.<br><br>There are two ways to enter parts compatibility: 
 * by application and byspecification. <ul><li> Entering parts compatibility by 
 * application specifies the assemblies(e.g., a specific year, make, and model of 
 * car) to which the item applies. This canbe done automatically by listing with a 
 * catalog product that supports partscompatibility, or manually, using 
 * <bclass="con">Item.ItemCompatibilityList</b> when listing or revising anitem. 
 * </li><li>Entering parts compatibility by specification involves specifying 
 * thepart's relevant dimensions and characteristics necessary to determine 
 * theassemblies with which the part is compatible (e.g., Section Width, Aspect 
 * Ratio,Rim Diammeter, Load Index, and Speed Rating values for a tire) 
 * usingattributes.</li></ul> 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/MinItemCompatibilityDefinitionType.html
 *
 */
class MinItemCompatibilityDefinitionType extends EbatNs_ComplexType
{

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('MinItemCompatibilityDefinitionType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__])) {
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()], array());
		}
	}
}
?>
