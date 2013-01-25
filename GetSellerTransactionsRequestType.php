<?php
// autogenerated file 22.07.2011 08:50
// $Id: $
// $Log: $
//
//
require_once 'TransactionPlatformCodeType.php';
require_once 'PaginationType.php';
require_once 'InventoryTrackingMethodCodeType.php';
require_once 'SKUArrayType.php';
require_once 'AbstractRequestType.php';

/**
 * Retrieves order line item (transaction) information for the user for which 
 * thecall is made, and not for any other user.&nbsp;<b>Also forHalf.com</b>. (To 
 * retrieve order line items for another seller's listings, 
 * useGetItemTransactions.) 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/GetSellerTransactionsRequestType.html
 *
 */
class GetSellerTransactionsRequestType extends AbstractRequestType
{
	/**
	 * @var dateTime
	 */
	protected $ModTimeFrom;
	/**
	 * @var dateTime
	 */
	protected $ModTimeTo;
	/**
	 * @var PaginationType
	 */
	protected $Pagination;
	/**
	 * @var boolean
	 */
	protected $IncludeFinalValueFee;
	/**
	 * @var boolean
	 */
	protected $IncludeContainingOrder;
	/**
	 * @var SKUArrayType
	 */
	protected $SKUArray;
	/**
	 * @var TransactionPlatformCodeType
	 */
	protected $Platform;
	/**
	 * @var int
	 */
	protected $NumberOfDays;
	/**
	 * @var InventoryTrackingMethodCodeType
	 */
	protected $InventoryTrackingMethod;

	/**
	 * @return dateTime
	 */
	function getModTimeFrom()
	{
		return $this->ModTimeFrom;
	}
	/**
	 * @return void
	 * @param dateTime $value 
	 */
	function setModTimeFrom($value)
	{
		$this->ModTimeFrom = $value;
	}
	/**
	 * @return dateTime
	 */
	function getModTimeTo()
	{
		return $this->ModTimeTo;
	}
	/**
	 * @return void
	 * @param dateTime $value 
	 */
	function setModTimeTo($value)
	{
		$this->ModTimeTo = $value;
	}
	/**
	 * @return PaginationType
	 */
	function getPagination()
	{
		return $this->Pagination;
	}
	/**
	 * @return void
	 * @param PaginationType $value 
	 */
	function setPagination($value)
	{
		$this->Pagination = $value;
	}
	/**
	 * @return boolean
	 */
	function getIncludeFinalValueFee()
	{
		return $this->IncludeFinalValueFee;
	}
	/**
	 * @return void
	 * @param boolean $value 
	 */
	function setIncludeFinalValueFee($value)
	{
		$this->IncludeFinalValueFee = $value;
	}
	/**
	 * @return boolean
	 */
	function getIncludeContainingOrder()
	{
		return $this->IncludeContainingOrder;
	}
	/**
	 * @return void
	 * @param boolean $value 
	 */
	function setIncludeContainingOrder($value)
	{
		$this->IncludeContainingOrder = $value;
	}
	/**
	 * @return SKUArrayType
	 */
	function getSKUArray()
	{
		return $this->SKUArray;
	}
	/**
	 * @return void
	 * @param SKUArrayType $value 
	 */
	function setSKUArray($value)
	{
		$this->SKUArray = $value;
	}
	/**
	 * @return TransactionPlatformCodeType
	 */
	function getPlatform()
	{
		return $this->Platform;
	}
	/**
	 * @return void
	 * @param TransactionPlatformCodeType $value 
	 */
	function setPlatform($value)
	{
		$this->Platform = $value;
	}
	/**
	 * @return int
	 */
	function getNumberOfDays()
	{
		return $this->NumberOfDays;
	}
	/**
	 * @return void
	 * @param int $value 
	 */
	function setNumberOfDays($value)
	{
		$this->NumberOfDays = $value;
	}
	/**
	 * @return InventoryTrackingMethodCodeType
	 */
	function getInventoryTrackingMethod()
	{
		return $this->InventoryTrackingMethod;
	}
	/**
	 * @return void
	 * @param InventoryTrackingMethodCodeType $value 
	 */
	function setInventoryTrackingMethod($value)
	{
		$this->InventoryTrackingMethod = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('GetSellerTransactionsRequestType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'ModTimeFrom' =>
					array(
						'required' => false,
						'type' => 'dateTime',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'ModTimeTo' =>
					array(
						'required' => false,
						'type' => 'dateTime',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'Pagination' =>
					array(
						'required' => false,
						'type' => 'PaginationType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'IncludeFinalValueFee' =>
					array(
						'required' => false,
						'type' => 'boolean',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'IncludeContainingOrder' =>
					array(
						'required' => false,
						'type' => 'boolean',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'SKUArray' =>
					array(
						'required' => false,
						'type' => 'SKUArrayType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'Platform' =>
					array(
						'required' => false,
						'type' => 'TransactionPlatformCodeType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'NumberOfDays' =>
					array(
						'required' => false,
						'type' => 'int',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'InventoryTrackingMethod' =>
					array(
						'required' => false,
						'type' => 'InventoryTrackingMethodCodeType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					)
				));
	}
}
?>
