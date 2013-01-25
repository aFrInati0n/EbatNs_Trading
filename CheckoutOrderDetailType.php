<?php
// autogenerated file 15.11.2010 08:36
// $Id: $
// $Log: $
//
//
require_once 'EbatNs_ComplexType.php';
require_once 'AmountType.php';

/**
 * Details of the order for a checked out cart. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/CheckoutOrderDetailType.html
 *
 */
class CheckoutOrderDetailType extends EbatNs_ComplexType
{
	/**
	 * @var AmountType
	 */
	protected $TotalCartMerchandiseCost;
	/**
	 * @var AmountType
	 */
	protected $TotalCartShippingCost;
	/**
	 * @var AmountType
	 */
	protected $TotalTaxAmount;
	/**
	 * @var AmountType
	 */
	protected $TotalAmount;

	/**
	 * @return AmountType
	 */
	function getTotalCartMerchandiseCost()
	{
		return $this->TotalCartMerchandiseCost;
	}
	/**
	 * @return void
	 * @param AmountType $value 
	 */
	function setTotalCartMerchandiseCost($value)
	{
		$this->TotalCartMerchandiseCost = $value;
	}
	/**
	 * @return AmountType
	 */
	function getTotalCartShippingCost()
	{
		return $this->TotalCartShippingCost;
	}
	/**
	 * @return void
	 * @param AmountType $value 
	 */
	function setTotalCartShippingCost($value)
	{
		$this->TotalCartShippingCost = $value;
	}
	/**
	 * @return AmountType
	 */
	function getTotalTaxAmount()
	{
		return $this->TotalTaxAmount;
	}
	/**
	 * @return void
	 * @param AmountType $value 
	 */
	function setTotalTaxAmount($value)
	{
		$this->TotalTaxAmount = $value;
	}
	/**
	 * @return AmountType
	 */
	function getTotalAmount()
	{
		return $this->TotalAmount;
	}
	/**
	 * @return void
	 * @param AmountType $value 
	 */
	function setTotalAmount($value)
	{
		$this->TotalAmount = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('CheckoutOrderDetailType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'TotalCartMerchandiseCost' =>
					array(
						'required' => false,
						'type' => 'AmountType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'TotalCartShippingCost' =>
					array(
						'required' => false,
						'type' => 'AmountType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'TotalTaxAmount' =>
					array(
						'required' => false,
						'type' => 'AmountType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'TotalAmount' =>
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
