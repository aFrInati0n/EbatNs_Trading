<?php
// autogenerated file 15.11.2010 08:32
// $Id: $
// $Log: $
//
//
require_once 'EbatNs_ComplexType.php';
require_once 'ProductStateCodeType.php';
require_once 'AmountType.php';

/**
 *  
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/ProductInfoType.html
 *
 */
class ProductInfoType extends EbatNs_ComplexType
{
	/**
	 * @var AmountType
	 */
	protected $AverageStartPrice;
	/**
	 * @var AmountType
	 */
	protected $AverageSoldPrice;
	/**
	 * @var string
	 */
	protected $Title;
	/**
	 * @var ProductStateCodeType
	 */
	protected $ProductState;

	/**
	 * @return AmountType
	 */
	function getAverageStartPrice()
	{
		return $this->AverageStartPrice;
	}
	/**
	 * @return void
	 * @param AmountType $value 
	 */
	function setAverageStartPrice($value)
	{
		$this->AverageStartPrice = $value;
	}
	/**
	 * @return AmountType
	 */
	function getAverageSoldPrice()
	{
		return $this->AverageSoldPrice;
	}
	/**
	 * @return void
	 * @param AmountType $value 
	 */
	function setAverageSoldPrice($value)
	{
		$this->AverageSoldPrice = $value;
	}
	/**
	 * @return string
	 */
	function getTitle()
	{
		return $this->Title;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setTitle($value)
	{
		$this->Title = $value;
	}
	/**
	 * @return ProductStateCodeType
	 */
	function getProductState()
	{
		return $this->ProductState;
	}
	/**
	 * @return void
	 * @param ProductStateCodeType $value 
	 */
	function setProductState($value)
	{
		$this->ProductState = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('ProductInfoType', 'http://www.w3.org/2001/XMLSchema');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'AverageStartPrice' =>
					array(
						'required' => false,
						'type' => 'AmountType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'AverageSoldPrice' =>
					array(
						'required' => false,
						'type' => 'AmountType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'Title' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'ProductState' =>
					array(
						'required' => false,
						'type' => 'ProductStateCodeType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					)
				));	$this->_attributes = array_merge($this->_attributes,
		array(
			'productInfoID' =>
			array(
				'name' => 'productInfoID',
				'type' => 'string',
				'use' => 'required'
			)
		));

	}
}
?>
