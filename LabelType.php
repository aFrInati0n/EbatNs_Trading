<?php
// autogenerated file 29.12.2011 14:15
// $Id: $
// $Log: $
//
//
require_once 'EbatNs_ComplexType.php';

/**
 * Applicable when working with Pre-filled Item Information (Catalogs) 
 * functionality.The label to display when presenting the attribute to a user.Not 
 * necessarily the same as the attribute's label as defined in thecharacteristic 
 * set (i.e., the label could be overridden by the catalog). 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/LabelType.html
 *
 */
class LabelType extends EbatNs_ComplexType
{
	/**
	 * @var string
	 */
	protected $Name;

	/**
	 * @return string
	 */
	function getName()
	{
		return $this->Name;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setName($value)
	{
		$this->Name = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('LabelType', 'http://www.w3.org/2001/XMLSchema');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'Name' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					)
				));	$this->_attributes = array_merge($this->_attributes,
		array(
			'visible' =>
			array(
				'name' => 'visible',
				'type' => 'boolean',
				'use' => 'required'
			)
		));

	}
}
?>
