<?php
// autogenerated file 29.12.2011 14:15
// $Id: $
// $Log: $
//
//
require_once 'TransactionPlatformCodeType.php';
require_once 'ItemTransactionIDArrayType.php';
require_once 'OrderIDArrayType.php';
require_once 'AbstractRequestType.php';

/**
 * Use this call to retrieve information about one or more orders based on 
 * OrderIDs, ItemIDs, or SKU values. &nbsp;<b>Also for Half.com</b>. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/GetOrderTransactionsRequestType.html
 *
 */
class GetOrderTransactionsRequestType extends AbstractRequestType
{
	/**
	 * @var ItemTransactionIDArrayType
	 */
	protected $ItemTransactionIDArray;
	/**
	 * @var OrderIDArrayType
	 */
	protected $OrderIDArray;
	/**
	 * @var TransactionPlatformCodeType
	 */
	protected $Platform;
	/**
	 * @var boolean
	 */
	protected $IncludeFinalValueFees;

	/**
	 * @return ItemTransactionIDArrayType
	 */
	function getItemTransactionIDArray()
	{
		return $this->ItemTransactionIDArray;
	}
	/**
	 * @return void
	 * @param ItemTransactionIDArrayType $value 
	 */
	function setItemTransactionIDArray($value)
	{
		$this->ItemTransactionIDArray = $value;
	}
	/**
	 * @return OrderIDArrayType
	 */
	function getOrderIDArray()
	{
		return $this->OrderIDArray;
	}
	/**
	 * @return void
	 * @param OrderIDArrayType $value 
	 */
	function setOrderIDArray($value)
	{
		$this->OrderIDArray = $value;
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
	 * @return boolean
	 */
	function getIncludeFinalValueFees()
	{
		return $this->IncludeFinalValueFees;
	}
	/**
	 * @return void
	 * @param boolean $value 
	 */
	function setIncludeFinalValueFees($value)
	{
		$this->IncludeFinalValueFees = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('GetOrderTransactionsRequestType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'ItemTransactionIDArray' =>
					array(
						'required' => false,
						'type' => 'ItemTransactionIDArrayType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'OrderIDArray' =>
					array(
						'required' => false,
						'type' => 'OrderIDArrayType',
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
					'IncludeFinalValueFees' =>
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
