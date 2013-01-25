<?php
// autogenerated file 10.09.2012 12:38
// $Id: $
// $Log: $
//
//
require_once 'PaginationType.php';
require_once 'ItemIDType.php';
require_once 'AccountEntrySortTypeCodeType.php';
require_once 'AccountHistorySelectionCodeType.php';
require_once 'AbstractRequestType.php';
require_once 'CurrencyCodeType.php';

/**
 * Returns a seller's invoice data for their eBay account, including the 
 * account'ssummary data. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/GetAccountRequestType.html
 *
 */
class GetAccountRequestType extends AbstractRequestType
{
	/**
	 * @var AccountHistorySelectionCodeType
	 */
	protected $AccountHistorySelection;
	/**
	 * @var dateTime
	 */
	protected $InvoiceDate;
	/**
	 * @var dateTime
	 */
	protected $BeginDate;
	/**
	 * @var dateTime
	 */
	protected $EndDate;
	/**
	 * @var PaginationType
	 */
	protected $Pagination;
	/**
	 * @var boolean
	 */
	protected $ExcludeBalance;
	/**
	 * @var boolean
	 */
	protected $ExcludeSummary;
	/**
	 * @var boolean
	 */
	protected $IncludeConversionRate;
	/**
	 * @var AccountEntrySortTypeCodeType
	 */
	protected $AccountEntrySortType;
	/**
	 * @var CurrencyCodeType
	 */
	protected $Currency;
	/**
	 * @var ItemIDType
	 */
	protected $ItemID;

	/**
	 * @return AccountHistorySelectionCodeType
	 */
	function getAccountHistorySelection()
	{
		return $this->AccountHistorySelection;
	}
	/**
	 * @return void
	 * @param AccountHistorySelectionCodeType $value 
	 */
	function setAccountHistorySelection($value)
	{
		$this->AccountHistorySelection = $value;
	}
	/**
	 * @return dateTime
	 */
	function getInvoiceDate()
	{
		return $this->InvoiceDate;
	}
	/**
	 * @return void
	 * @param dateTime $value 
	 */
	function setInvoiceDate($value)
	{
		$this->InvoiceDate = $value;
	}
	/**
	 * @return dateTime
	 */
	function getBeginDate()
	{
		return $this->BeginDate;
	}
	/**
	 * @return void
	 * @param dateTime $value 
	 */
	function setBeginDate($value)
	{
		$this->BeginDate = $value;
	}
	/**
	 * @return dateTime
	 */
	function getEndDate()
	{
		return $this->EndDate;
	}
	/**
	 * @return void
	 * @param dateTime $value 
	 */
	function setEndDate($value)
	{
		$this->EndDate = $value;
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
	function getExcludeBalance()
	{
		return $this->ExcludeBalance;
	}
	/**
	 * @return void
	 * @param boolean $value 
	 */
	function setExcludeBalance($value)
	{
		$this->ExcludeBalance = $value;
	}
	/**
	 * @return boolean
	 */
	function getExcludeSummary()
	{
		return $this->ExcludeSummary;
	}
	/**
	 * @return void
	 * @param boolean $value 
	 */
	function setExcludeSummary($value)
	{
		$this->ExcludeSummary = $value;
	}
	/**
	 * @return boolean
	 */
	function getIncludeConversionRate()
	{
		return $this->IncludeConversionRate;
	}
	/**
	 * @return void
	 * @param boolean $value 
	 */
	function setIncludeConversionRate($value)
	{
		$this->IncludeConversionRate = $value;
	}
	/**
	 * @return AccountEntrySortTypeCodeType
	 */
	function getAccountEntrySortType()
	{
		return $this->AccountEntrySortType;
	}
	/**
	 * @return void
	 * @param AccountEntrySortTypeCodeType $value 
	 */
	function setAccountEntrySortType($value)
	{
		$this->AccountEntrySortType = $value;
	}
	/**
	 * @return CurrencyCodeType
	 */
	function getCurrency()
	{
		return $this->Currency;
	}
	/**
	 * @return void
	 * @param CurrencyCodeType $value 
	 */
	function setCurrency($value)
	{
		$this->Currency = $value;
	}
	/**
	 * @return ItemIDType
	 */
	function getItemID()
	{
		return $this->ItemID;
	}
	/**
	 * @return void
	 * @param ItemIDType $value 
	 */
	function setItemID($value)
	{
		$this->ItemID = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('GetAccountRequestType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'AccountHistorySelection' =>
					array(
						'required' => false,
						'type' => 'AccountHistorySelectionCodeType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'InvoiceDate' =>
					array(
						'required' => false,
						'type' => 'dateTime',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'BeginDate' =>
					array(
						'required' => false,
						'type' => 'dateTime',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'EndDate' =>
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
					'ExcludeBalance' =>
					array(
						'required' => false,
						'type' => 'boolean',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'ExcludeSummary' =>
					array(
						'required' => false,
						'type' => 'boolean',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'IncludeConversionRate' =>
					array(
						'required' => false,
						'type' => 'boolean',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'AccountEntrySortType' =>
					array(
						'required' => false,
						'type' => 'AccountEntrySortTypeCodeType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'Currency' =>
					array(
						'required' => false,
						'type' => 'CurrencyCodeType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'ItemID' =>
					array(
						'required' => false,
						'type' => 'ItemIDType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					)
				));
	}
}
?>
