<?php
// autogenerated file 24.02.2011 11:36
// $Id: $
// $Log: $
//
//
require_once 'ItemType.php';
require_once 'TransactionArrayType.php';
require_once 'AbstractResponseType.php';
require_once 'PaginationResultType.php';

/**
 * Returns an array of order line item (transaction) data for the item specified in 
 * the request.The results can be used to create a report of data that is 
 * commonlynecessary for order processing.Zero, one, or many <b>Transaction</b> 
 * objects can be returned in the <b>TransactionArray</b>.The set of order line 
 * items returned is limited to those that were modified betweenthe times specified 
 * in the request's <b>ModTimeFrom</b> and <b>ModTime</b> filters.Also returns the 
 * <b>Item</b> object that spawned the order line items.If pagination filters were 
 * specified in the request, returns meta-data describingthe effects of those 
 * filters on the current response and the estimated effects ifthe same filters are 
 * used in subsequent calls.<br><br>Data from the <b>TransactionArray</b> may be 
 * used to trigger the following PlatformNotifications: EndOfAuction, 
 * AuctionCheckoutComplete, FixedPriceEndOfTransaction,CheckoutBuyerRequestTotal, 
 * FixedPriceTransaction, Checkout,FixedPriceTransactionForSeller, 
 * FixedPriceTransactionForBuyer, ItemMarkedAsShipped,and ItemMarkedAsPaid. Each 
 * notification will be based on the state of the item(a 'snapshot' of the item) at 
 * the time the order line item was created. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/GetItemTransactionsResponseType.html
 *
 */
class GetItemTransactionsResponseType extends AbstractResponseType
{
	/**
	 * @var PaginationResultType
	 */
	protected $PaginationResult;
	/**
	 * @var boolean
	 */
	protected $HasMoreTransactions;
	/**
	 * @var int
	 */
	protected $TransactionsPerPage;
	/**
	 * @var int
	 */
	protected $PageNumber;
	/**
	 * @var int
	 */
	protected $ReturnedTransactionCountActual;
	/**
	 * @var ItemType
	 */
	protected $Item;
	/**
	 * @var TransactionArrayType
	 */
	protected $TransactionArray;
	/**
	 * @var boolean
	 */
	protected $PayPalPreferred;

	/**
	 * @return PaginationResultType
	 */
	function getPaginationResult()
	{
		return $this->PaginationResult;
	}
	/**
	 * @return void
	 * @param PaginationResultType $value 
	 */
	function setPaginationResult($value)
	{
		$this->PaginationResult = $value;
	}
	/**
	 * @return boolean
	 */
	function getHasMoreTransactions()
	{
		return $this->HasMoreTransactions;
	}
	/**
	 * @return void
	 * @param boolean $value 
	 */
	function setHasMoreTransactions($value)
	{
		$this->HasMoreTransactions = $value;
	}
	/**
	 * @return int
	 */
	function getTransactionsPerPage()
	{
		return $this->TransactionsPerPage;
	}
	/**
	 * @return void
	 * @param int $value 
	 */
	function setTransactionsPerPage($value)
	{
		$this->TransactionsPerPage = $value;
	}
	/**
	 * @return int
	 */
	function getPageNumber()
	{
		return $this->PageNumber;
	}
	/**
	 * @return void
	 * @param int $value 
	 */
	function setPageNumber($value)
	{
		$this->PageNumber = $value;
	}
	/**
	 * @return int
	 */
	function getReturnedTransactionCountActual()
	{
		return $this->ReturnedTransactionCountActual;
	}
	/**
	 * @return void
	 * @param int $value 
	 */
	function setReturnedTransactionCountActual($value)
	{
		$this->ReturnedTransactionCountActual = $value;
	}
	/**
	 * @return ItemType
	 */
	function getItem()
	{
		return $this->Item;
	}
	/**
	 * @return void
	 * @param ItemType $value 
	 */
	function setItem($value)
	{
		$this->Item = $value;
	}
	/**
	 * @return TransactionArrayType
	 */
	function getTransactionArray()
	{
		return $this->TransactionArray;
	}
	/**
	 * @return void
	 * @param TransactionArrayType $value 
	 */
	function setTransactionArray($value)
	{
		$this->TransactionArray = $value;
	}
	/**
	 * @return boolean
	 */
	function getPayPalPreferred()
	{
		return $this->PayPalPreferred;
	}
	/**
	 * @return void
	 * @param boolean $value 
	 */
	function setPayPalPreferred($value)
	{
		$this->PayPalPreferred = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('GetItemTransactionsResponseType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'PaginationResult' =>
					array(
						'required' => false,
						'type' => 'PaginationResultType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'HasMoreTransactions' =>
					array(
						'required' => false,
						'type' => 'boolean',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'TransactionsPerPage' =>
					array(
						'required' => false,
						'type' => 'int',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'PageNumber' =>
					array(
						'required' => false,
						'type' => 'int',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'ReturnedTransactionCountActual' =>
					array(
						'required' => false,
						'type' => 'int',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'Item' =>
					array(
						'required' => false,
						'type' => 'ItemType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'TransactionArray' =>
					array(
						'required' => false,
						'type' => 'TransactionArrayType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'PayPalPreferred' =>
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
