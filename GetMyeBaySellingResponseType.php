<?php
// autogenerated file 29.12.2011 14:09
// $Id: $
// $Log: $
//
//
require_once 'PaginatedOrderTransactionArrayType.php';
require_once 'SellingSummaryType.php';
require_once 'AbstractResponseType.php';
require_once 'PaginatedItemArrayType.php';
require_once 'MyeBaySellingSummaryType.php';

/**
 * Returns summary and detail information about items the user is selling,items 
 * scheduled to sell, currently listed, sold, and closed but not sold. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/GetMyeBaySellingResponseType.html
 *
 */
class GetMyeBaySellingResponseType extends AbstractResponseType
{
	/**
	 * @var SellingSummaryType
	 */
	protected $SellingSummary;
	/**
	 * @var PaginatedItemArrayType
	 */
	protected $ScheduledList;
	/**
	 * @var PaginatedItemArrayType
	 */
	protected $ActiveList;
	/**
	 * @var PaginatedOrderTransactionArrayType
	 */
	protected $SoldList;
	/**
	 * @var PaginatedItemArrayType
	 */
	protected $UnsoldList;
	/**
	 * @var MyeBaySellingSummaryType
	 */
	protected $Summary;
	/**
	 * @var PaginatedItemArrayType
	 */
	protected $BidList;
	/**
	 * @var PaginatedOrderTransactionArrayType
	 */
	protected $DeletedFromSoldList;
	/**
	 * @var PaginatedItemArrayType
	 */
	protected $DeletedFromUnsoldList;

	/**
	 * @return SellingSummaryType
	 */
	function getSellingSummary()
	{
		return $this->SellingSummary;
	}
	/**
	 * @return void
	 * @param SellingSummaryType $value 
	 */
	function setSellingSummary($value)
	{
		$this->SellingSummary = $value;
	}
	/**
	 * @return PaginatedItemArrayType
	 */
	function getScheduledList()
	{
		return $this->ScheduledList;
	}
	/**
	 * @return void
	 * @param PaginatedItemArrayType $value 
	 */
	function setScheduledList($value)
	{
		$this->ScheduledList = $value;
	}
	/**
	 * @return PaginatedItemArrayType
	 */
	function getActiveList()
	{
		return $this->ActiveList;
	}
	/**
	 * @return void
	 * @param PaginatedItemArrayType $value 
	 */
	function setActiveList($value)
	{
		$this->ActiveList = $value;
	}
	/**
	 * @return PaginatedOrderTransactionArrayType
	 */
	function getSoldList()
	{
		return $this->SoldList;
	}
	/**
	 * @return void
	 * @param PaginatedOrderTransactionArrayType $value 
	 */
	function setSoldList($value)
	{
		$this->SoldList = $value;
	}
	/**
	 * @return PaginatedItemArrayType
	 */
	function getUnsoldList()
	{
		return $this->UnsoldList;
	}
	/**
	 * @return void
	 * @param PaginatedItemArrayType $value 
	 */
	function setUnsoldList($value)
	{
		$this->UnsoldList = $value;
	}
	/**
	 * @return MyeBaySellingSummaryType
	 */
	function getSummary()
	{
		return $this->Summary;
	}
	/**
	 * @return void
	 * @param MyeBaySellingSummaryType $value 
	 */
	function setSummary($value)
	{
		$this->Summary = $value;
	}
	/**
	 * @return PaginatedItemArrayType
	 */
	function getBidList()
	{
		return $this->BidList;
	}
	/**
	 * @return void
	 * @param PaginatedItemArrayType $value 
	 */
	function setBidList($value)
	{
		$this->BidList = $value;
	}
	/**
	 * @return PaginatedOrderTransactionArrayType
	 */
	function getDeletedFromSoldList()
	{
		return $this->DeletedFromSoldList;
	}
	/**
	 * @return void
	 * @param PaginatedOrderTransactionArrayType $value 
	 */
	function setDeletedFromSoldList($value)
	{
		$this->DeletedFromSoldList = $value;
	}
	/**
	 * @return PaginatedItemArrayType
	 */
	function getDeletedFromUnsoldList()
	{
		return $this->DeletedFromUnsoldList;
	}
	/**
	 * @return void
	 * @param PaginatedItemArrayType $value 
	 */
	function setDeletedFromUnsoldList($value)
	{
		$this->DeletedFromUnsoldList = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('GetMyeBaySellingResponseType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'SellingSummary' =>
					array(
						'required' => false,
						'type' => 'SellingSummaryType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'ScheduledList' =>
					array(
						'required' => false,
						'type' => 'PaginatedItemArrayType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'ActiveList' =>
					array(
						'required' => false,
						'type' => 'PaginatedItemArrayType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'SoldList' =>
					array(
						'required' => false,
						'type' => 'PaginatedOrderTransactionArrayType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'UnsoldList' =>
					array(
						'required' => false,
						'type' => 'PaginatedItemArrayType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'Summary' =>
					array(
						'required' => false,
						'type' => 'MyeBaySellingSummaryType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'BidList' =>
					array(
						'required' => false,
						'type' => 'PaginatedItemArrayType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'DeletedFromSoldList' =>
					array(
						'required' => false,
						'type' => 'PaginatedOrderTransactionArrayType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'DeletedFromUnsoldList' =>
					array(
						'required' => false,
						'type' => 'PaginatedItemArrayType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					)
				));
	}
}
?>
