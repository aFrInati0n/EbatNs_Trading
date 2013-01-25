<?php
// autogenerated file 22.07.2011 09:21
// $Id: $
// $Log: $
//
//
require_once 'EbatNs_ComplexType.php';

/**
 *  
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/ExtendedProductFinderIDType.html
 *
 */
class ExtendedProductFinderIDType extends EbatNs_ComplexType
{
	/**
	 * @var int
	 */
	protected $ProductFinderID;
	/**
	 * @var boolean
	 */
	protected $ProductFinderBuySide;

	/**
	 * @return int
	 */
	function getProductFinderID()
	{
		return $this->ProductFinderID;
	}
	/**
	 * @return void
	 * @param int $value 
	 */
	function setProductFinderID($value)
	{
		$this->ProductFinderID = $value;
	}
	/**
	 * @return boolean
	 */
	function getProductFinderBuySide()
	{
		return $this->ProductFinderBuySide;
	}
	/**
	 * @return void
	 * @param boolean $value 
	 */
	function setProductFinderBuySide($value)
	{
		$this->ProductFinderBuySide = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('ExtendedProductFinderIDType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'ProductFinderID' =>
					array(
						'required' => false,
						'type' => 'int',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'ProductFinderBuySide' =>
					array(
						'required' => false,
						'type' => 'boolean',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					)
				));
	}
}
?>
