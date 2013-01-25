<?php
// autogenerated file 29.12.2011 14:15
// $Id: $
// $Log: $
//
//
require_once 'EbatNs_ComplexType.php';
require_once 'AmountType.php';

/**
 * Details about items involved in the summary for the specified time period. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/ItemTotalsType.html
 *
 */
class ItemTotalsType extends EbatNs_ComplexType
{
	/**
	 * @var long
	 */
	protected $TotalQuantity;
	/**
	 * @var AmountType
	 */
	protected $TotalValue;

	/**
	 * @return long
	 */
	function getTotalQuantity()
	{
		return $this->TotalQuantity;
	}
	/**
	 * @return void
	 * @param long $value 
	 */
	function setTotalQuantity($value)
	{
		$this->TotalQuantity = $value;
	}
	/**
	 * @return AmountType
	 */
	function getTotalValue()
	{
		return $this->TotalValue;
	}
	/**
	 * @return void
	 * @param AmountType $value 
	 */
	function setTotalValue($value)
	{
		$this->TotalValue = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('ItemTotalsType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'TotalQuantity' =>
					array(
						'required' => false,
						'type' => 'long',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'TotalValue' =>
					array(
						'required' => false,
						'type' => 'AmountType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					)
				));
	}
}
?>
