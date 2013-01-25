<?php
// autogenerated file 10.09.2012 12:53
// $Id: $
// $Log: $
//
//
require_once 'RefundingSourceTypeCodeType.php';
require_once 'EbatNs_ComplexType.php';
require_once 'AmountType.php';

/**
 * Contains information about the funding source for the refund. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/RefundFundingSourceType.html
 *
 */
class RefundFundingSourceType extends EbatNs_ComplexType
{
	/**
	 * @var RefundingSourceTypeCodeType
	 */
	protected $RefundingSourceType;
	/**
	 * @var string
	 */
	protected $AccountNumber;
	/**
	 * @var AmountType
	 */
	protected $RefundAmount;
	/**
	 * @var string
	 */
	protected $SellerExternalTransactionID;
	/**
	 * @var string
	 */
	protected $BuyerExternalTransactionID;

	/**
	 * @return RefundingSourceTypeCodeType
	 */
	function getRefundingSourceType()
	{
		return $this->RefundingSourceType;
	}
	/**
	 * @return void
	 * @param RefundingSourceTypeCodeType $value 
	 */
	function setRefundingSourceType($value)
	{
		$this->RefundingSourceType = $value;
	}
	/**
	 * @return string
	 */
	function getAccountNumber()
	{
		return $this->AccountNumber;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setAccountNumber($value)
	{
		$this->AccountNumber = $value;
	}
	/**
	 * @return AmountType
	 */
	function getRefundAmount()
	{
		return $this->RefundAmount;
	}
	/**
	 * @return void
	 * @param AmountType $value 
	 */
	function setRefundAmount($value)
	{
		$this->RefundAmount = $value;
	}
	/**
	 * @return string
	 */
	function getSellerExternalTransactionID()
	{
		return $this->SellerExternalTransactionID;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setSellerExternalTransactionID($value)
	{
		$this->SellerExternalTransactionID = $value;
	}
	/**
	 * @return string
	 */
	function getBuyerExternalTransactionID()
	{
		return $this->BuyerExternalTransactionID;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setBuyerExternalTransactionID($value)
	{
		$this->BuyerExternalTransactionID = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('RefundFundingSourceType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'RefundingSourceType' =>
					array(
						'required' => false,
						'type' => 'RefundingSourceTypeCodeType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'AccountNumber' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'RefundAmount' =>
					array(
						'required' => false,
						'type' => 'AmountType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'SellerExternalTransactionID' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'BuyerExternalTransactionID' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					)
				));
	}
}
?>
