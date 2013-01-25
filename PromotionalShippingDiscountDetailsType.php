<?php
// autogenerated file 18.03.2011 12:43
// $Id: $
// $Log: $
//
//
require_once 'EbatNs_ComplexType.php';
require_once 'DiscountNameCodeType.php';
require_once 'AmountType.php';

/**
 * Details of a promotional shipping discount. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/PromotionalShippingDiscountDetailsType.html
 *
 */
class PromotionalShippingDiscountDetailsType extends EbatNs_ComplexType
{
	/**
	 * @var DiscountNameCodeType
	 */
	protected $DiscountName;
	/**
	 * @var AmountType
	 */
	protected $ShippingCost;
	/**
	 * @var AmountType
	 */
	protected $OrderAmount;
	/**
	 * @var int
	 */
	protected $ItemCount;

	/**
	 * @return DiscountNameCodeType
	 */
	function getDiscountName()
	{
		return $this->DiscountName;
	}
	/**
	 * @return void
	 * @param DiscountNameCodeType $value 
	 */
	function setDiscountName($value)
	{
		$this->DiscountName = $value;
	}
	/**
	 * @return AmountType
	 */
	function getShippingCost()
	{
		return $this->ShippingCost;
	}
	/**
	 * @return void
	 * @param AmountType $value 
	 */
	function setShippingCost($value)
	{
		$this->ShippingCost = $value;
	}
	/**
	 * @return AmountType
	 */
	function getOrderAmount()
	{
		return $this->OrderAmount;
	}
	/**
	 * @return void
	 * @param AmountType $value 
	 */
	function setOrderAmount($value)
	{
		$this->OrderAmount = $value;
	}
	/**
	 * @return int
	 */
	function getItemCount()
	{
		return $this->ItemCount;
	}
	/**
	 * @return void
	 * @param int $value 
	 */
	function setItemCount($value)
	{
		$this->ItemCount = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('PromotionalShippingDiscountDetailsType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'DiscountName' =>
					array(
						'required' => false,
						'type' => 'DiscountNameCodeType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'ShippingCost' =>
					array(
						'required' => false,
						'type' => 'AmountType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'OrderAmount' =>
					array(
						'required' => false,
						'type' => 'AmountType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'ItemCount' =>
					array(
						'required' => false,
						'type' => 'int',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					)
				));
	}
}
?>
