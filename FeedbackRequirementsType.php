<?php
// autogenerated file 10.09.2012 12:26
// $Id: $
// $Log: $
//
//
require_once 'EbatNs_ComplexType.php';

/**
 *  
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/FeedbackRequirementsType.html
 *
 */
class FeedbackRequirementsType extends EbatNs_ComplexType
{

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('FeedbackRequirementsType', 'http://www.w3.org/2001/XMLSchema');
		if (!isset(self::$_elements[__CLASS__])) {
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()], array());
		}	$this->_attributes = array_merge($this->_attributes,
		array(
			'minimum' =>
			array(
				'name' => 'minimum',
				'type' => 'string',
				'use' => 'required'
			)
		));

	}
}
?>
