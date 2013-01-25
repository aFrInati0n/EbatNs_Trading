<?php
// autogenerated file 10.09.2012 12:38
// $Id: $
// $Log: $
//
//
require_once 'EbatNs_ComplexType.php';
require_once 'AmountType.php';

/**
 * Contains summary information about the items the seller is selling. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/MyeBaySellingSummaryType.html
 *
 */
class MyeBaySellingSummaryType extends EbatNs_ComplexType
{
	/**
	 * @var int
	 */
	protected $ActiveAuctionCount;
	/**
	 * @var int
	 */
	protected $AuctionSellingCount;
	/**
	 * @var int
	 */
	protected $AuctionBidCount;
	/**
	 * @var AmountType
	 */
	protected $TotalAuctionSellingValue;
	/**
	 * @var int
	 */
	protected $TotalSoldCount;
	/**
	 * @var AmountType
	 */
	protected $TotalSoldValue;
	/**
	 * @var int
	 */
	protected $SoldDurationInDays;
	/**
	 * @var int
	 */
	protected $ClassifiedAdCount;
	/**
	 * @var int
	 */
	protected $TotalLeadCount;
	/**
	 * @var int
	 */
	protected $ClassifiedAdOfferCount;
	/**
	 * @var int
	 */
	protected $TotalListingsWithLeads;
	/**
	 * @var long
	 */
	protected $QuantityLimitRemaining;
	/**
	 * @var AmountType
	 */
	protected $AmountLimitRemaining;

	/**
	 * @return int
	 */
	function getActiveAuctionCount()
	{
		return $this->ActiveAuctionCount;
	}
	/**
	 * @return void
	 * @param int $value 
	 */
	function setActiveAuctionCount($value)
	{
		$this->ActiveAuctionCount = $value;
	}
	/**
	 * @return int
	 */
	function getAuctionSellingCount()
	{
		return $this->AuctionSellingCount;
	}
	/**
	 * @return void
	 * @param int $value 
	 */
	function setAuctionSellingCount($value)
	{
		$this->AuctionSellingCount = $value;
	}
	/**
	 * @return int
	 */
	function getAuctionBidCount()
	{
		return $this->AuctionBidCount;
	}
	/**
	 * @return void
	 * @param int $value 
	 */
	function setAuctionBidCount($value)
	{
		$this->AuctionBidCount = $value;
	}
	/**
	 * @return AmountType
	 */
	function getTotalAuctionSellingValue()
	{
		return $this->TotalAuctionSellingValue;
	}
	/**
	 * @return void
	 * @param AmountType $value 
	 */
	function setTotalAuctionSellingValue($value)
	{
		$this->TotalAuctionSellingValue = $value;
	}
	/**
	 * @return int
	 */
	function getTotalSoldCount()
	{
		return $this->TotalSoldCount;
	}
	/**
	 * @return void
	 * @param int $value 
	 */
	function setTotalSoldCount($value)
	{
		$this->TotalSoldCount = $value;
	}
	/**
	 * @return AmountType
	 */
	function getTotalSoldValue()
	{
		return $this->TotalSoldValue;
	}
	/**
	 * @return void
	 * @param AmountType $value 
	 */
	function setTotalSoldValue($value)
	{
		$this->TotalSoldValue = $value;
	}
	/**
	 * @return int
	 */
	function getSoldDurationInDays()
	{
		return $this->SoldDurationInDays;
	}
	/**
	 * @return void
	 * @param int $value 
	 */
	function setSoldDurationInDays($value)
	{
		$this->SoldDurationInDays = $value;
	}
	/**
	 * @return int
	 */
	function getClassifiedAdCount()
	{
		return $this->ClassifiedAdCount;
	}
	/**
	 * @return void
	 * @param int $value 
	 */
	function setClassifiedAdCount($value)
	{
		$this->ClassifiedAdCount = $value;
	}
	/**
	 * @return int
	 */
	function getTotalLeadCount()
	{
		return $this->TotalLeadCount;
	}
	/**
	 * @return void
	 * @param int $value 
	 */
	function setTotalLeadCount($value)
	{
		$this->TotalLeadCount = $value;
	}
	/**
	 * @return int
	 */
	function getClassifiedAdOfferCount()
	{
		return $this->ClassifiedAdOfferCount;
	}
	/**
	 * @return void
	 * @param int $value 
	 */
	function setClassifiedAdOfferCount($value)
	{
		$this->ClassifiedAdOfferCount = $value;
	}
	/**
	 * @return int
	 */
	function getTotalListingsWithLeads()
	{
		return $this->TotalListingsWithLeads;
	}
	/**
	 * @return void
	 * @param int $value 
	 */
	function setTotalListingsWithLeads($value)
	{
		$this->TotalListingsWithLeads = $value;
	}
	/**
	 * @return long
	 */
	function getQuantityLimitRemaining()
	{
		return $this->QuantityLimitRemaining;
	}
	/**
	 * @return void
	 * @param long $value 
	 */
	function setQuantityLimitRemaining($value)
	{
		$this->QuantityLimitRemaining = $value;
	}
	/**
	 * @return AmountType
	 */
	function getAmountLimitRemaining()
	{
		return $this->AmountLimitRemaining;
	}
	/**
	 * @return void
	 * @param AmountType $value 
	 */
	function setAmountLimitRemaining($value)
	{
		$this->AmountLimitRemaining = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('MyeBaySellingSummaryType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'ActiveAuctionCount' =>
					array(
						'required' => false,
						'type' => 'int',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'AuctionSellingCount' =>
					array(
						'required' => false,
						'type' => 'int',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'AuctionBidCount' =>
					array(
						'required' => false,
						'type' => 'int',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'TotalAuctionSellingValue' =>
					array(
						'required' => false,
						'type' => 'AmountType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'TotalSoldCount' =>
					array(
						'required' => false,
						'type' => 'int',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'TotalSoldValue' =>
					array(
						'required' => false,
						'type' => 'AmountType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'SoldDurationInDays' =>
					array(
						'required' => false,
						'type' => 'int',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'ClassifiedAdCount' =>
					array(
						'required' => false,
						'type' => 'int',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'TotalLeadCount' =>
					array(
						'required' => false,
						'type' => 'int',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'ClassifiedAdOfferCount' =>
					array(
						'required' => false,
						'type' => 'int',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'TotalListingsWithLeads' =>
					array(
						'required' => false,
						'type' => 'int',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'QuantityLimitRemaining' =>
					array(
						'required' => false,
						'type' => 'long',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'AmountLimitRemaining' =>
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
