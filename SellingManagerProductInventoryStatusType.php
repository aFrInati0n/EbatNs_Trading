<?php
// autogenerated file 18.03.2011 12:48
// $Id: $
// $Log: $
//
//
require_once 'EbatNs_ComplexType.php';
require_once 'AmountType.php';

/**
 * Describes the inventory status of a specific Selling Manager Product 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/SellingManagerProductInventoryStatusType.html
 *
 */
class SellingManagerProductInventoryStatusType extends EbatNs_ComplexType
{
	/**
	 * @var int
	 */
	protected $QuantityScheduled;
	/**
	 * @var int
	 */
	protected $QuantityActive;
	/**
	 * @var int
	 */
	protected $QuantitySold;
	/**
	 * @var int
	 */
	protected $QuantityUnsold;
	/**
	 * @var float
	 */
	protected $SuccessPercent;
	/**
	 * @var AmountType
	 */
	protected $AverageSellingPrice;

	/**
	 * @return int
	 */
	function getQuantityScheduled()
	{
		return $this->QuantityScheduled;
	}
	/**
	 * @return void
	 * @param int $value 
	 */
	function setQuantityScheduled($value)
	{
		$this->QuantityScheduled = $value;
	}
	/**
	 * @return int
	 */
	function getQuantityActive()
	{
		return $this->QuantityActive;
	}
	/**
	 * @return void
	 * @param int $value 
	 */
	function setQuantityActive($value)
	{
		$this->QuantityActive = $value;
	}
	/**
	 * @return int
	 */
	function getQuantitySold()
	{
		return $this->QuantitySold;
	}
	/**
	 * @return void
	 * @param int $value 
	 */
	function setQuantitySold($value)
	{
		$this->QuantitySold = $value;
	}
	/**
	 * @return int
	 */
	function getQuantityUnsold()
	{
		return $this->QuantityUnsold;
	}
	/**
	 * @return void
	 * @param int $value 
	 */
	function setQuantityUnsold($value)
	{
		$this->QuantityUnsold = $value;
	}
	/**
	 * @return float
	 */
	function getSuccessPercent()
	{
		return $this->SuccessPercent;
	}
	/**
	 * @return void
	 * @param float $value 
	 */
	function setSuccessPercent($value)
	{
		$this->SuccessPercent = $value;
	}
	/**
	 * @return AmountType
	 */
	function getAverageSellingPrice()
	{
		return $this->AverageSellingPrice;
	}
	/**
	 * @return void
	 * @param AmountType $value 
	 */
	function setAverageSellingPrice($value)
	{
		$this->AverageSellingPrice = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('SellingManagerProductInventoryStatusType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'QuantityScheduled' =>
					array(
						'required' => false,
						'type' => 'int',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'QuantityActive' =>
					array(
						'required' => false,
						'type' => 'int',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'QuantitySold' =>
					array(
						'required' => false,
						'type' => 'int',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'QuantityUnsold' =>
					array(
						'required' => false,
						'type' => 'int',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'SuccessPercent' =>
					array(
						'required' => false,
						'type' => 'float',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'AverageSellingPrice' =>
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
