<?php
// autogenerated file 22.07.2011 09:06
// $Id: $
// $Log: $
//
//
require_once 'ExternalTransactionType.php';
require_once 'CheckoutMethodCodeType.php';
require_once 'BuyerPaymentMethodCodeType.php';
require_once 'RCSPaymentStatusCodeType.php';
require_once 'CompleteStatusCodeType.php';
require_once 'ItemIDType.php';
require_once 'AmountType.php';
require_once 'InsuranceSelectedCodeType.php';
require_once 'AbstractRequestType.php';
require_once 'AddressType.php';

/**
 * A seller can use this call to update the payment details, the shipping 
 * details,and the status of an order. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/ReviseCheckoutStatusRequestType.html
 *
 */
class ReviseCheckoutStatusRequestType extends AbstractRequestType
{
	/**
	 * @var ItemIDType
	 */
	protected $ItemID;
	/**
	 * @var string
	 */
	protected $TransactionID;
	/**
	 * @var string
	 */
	protected $OrderID;
	/**
	 * @var AmountType
	 */
	protected $AmountPaid;
	/**
	 * @var BuyerPaymentMethodCodeType
	 */
	protected $PaymentMethodUsed;
	/**
	 * @var CompleteStatusCodeType
	 */
	protected $CheckoutStatus;
	/**
	 * @var token
	 */
	protected $ShippingService;
	/**
	 * @var boolean
	 */
	protected $ShippingIncludedInTax;
	/**
	 * @var CheckoutMethodCodeType
	 */
	protected $CheckoutMethod;
	/**
	 * @var InsuranceSelectedCodeType
	 */
	protected $InsuranceType;
	/**
	 * @var RCSPaymentStatusCodeType
	 */
	protected $PaymentStatus;
	/**
	 * @var AmountType
	 */
	protected $AdjustmentAmount;
	/**
	 * @var AddressType
	 */
	protected $ShippingAddress;
	/**
	 * @var string
	 */
	protected $BuyerID;
	/**
	 * @var AmountType
	 */
	protected $ShippingInsuranceCost;
	/**
	 * @var AmountType
	 */
	protected $SalesTax;
	/**
	 * @var AmountType
	 */
	protected $ShippingCost;
	/**
	 * @var string
	 */
	protected $EncryptedID;
	/**
	 * @var ExternalTransactionType
	 */
	protected $ExternalTransaction;
	/**
	 * @var string
	 */
	protected $MultipleSellerPaymentID;
	/**
	 * @var AmountType
	 */
	protected $CODCost;
	/**
	 * @var string
	 */
	protected $OrderLineItemID;

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
	 * @return string
	 */
	function getTransactionID()
	{
		return $this->TransactionID;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setTransactionID($value)
	{
		$this->TransactionID = $value;
	}
	/**
	 * @return string
	 */
	function getOrderID()
	{
		return $this->OrderID;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setOrderID($value)
	{
		$this->OrderID = $value;
	}
	/**
	 * @return AmountType
	 */
	function getAmountPaid()
	{
		return $this->AmountPaid;
	}
	/**
	 * @return void
	 * @param AmountType $value 
	 */
	function setAmountPaid($value)
	{
		$this->AmountPaid = $value;
	}
	/**
	 * @return BuyerPaymentMethodCodeType
	 */
	function getPaymentMethodUsed()
	{
		return $this->PaymentMethodUsed;
	}
	/**
	 * @return void
	 * @param BuyerPaymentMethodCodeType $value 
	 */
	function setPaymentMethodUsed($value)
	{
		$this->PaymentMethodUsed = $value;
	}
	/**
	 * @return CompleteStatusCodeType
	 */
	function getCheckoutStatus()
	{
		return $this->CheckoutStatus;
	}
	/**
	 * @return void
	 * @param CompleteStatusCodeType $value 
	 */
	function setCheckoutStatus($value)
	{
		$this->CheckoutStatus = $value;
	}
	/**
	 * @return token
	 */
	function getShippingService()
	{
		return $this->ShippingService;
	}
	/**
	 * @return void
	 * @param token $value 
	 */
	function setShippingService($value)
	{
		$this->ShippingService = $value;
	}
	/**
	 * @return boolean
	 */
	function getShippingIncludedInTax()
	{
		return $this->ShippingIncludedInTax;
	}
	/**
	 * @return void
	 * @param boolean $value 
	 */
	function setShippingIncludedInTax($value)
	{
		$this->ShippingIncludedInTax = $value;
	}
	/**
	 * @return CheckoutMethodCodeType
	 */
	function getCheckoutMethod()
	{
		return $this->CheckoutMethod;
	}
	/**
	 * @return void
	 * @param CheckoutMethodCodeType $value 
	 */
	function setCheckoutMethod($value)
	{
		$this->CheckoutMethod = $value;
	}
	/**
	 * @return InsuranceSelectedCodeType
	 */
	function getInsuranceType()
	{
		return $this->InsuranceType;
	}
	/**
	 * @return void
	 * @param InsuranceSelectedCodeType $value 
	 */
	function setInsuranceType($value)
	{
		$this->InsuranceType = $value;
	}
	/**
	 * @return RCSPaymentStatusCodeType
	 */
	function getPaymentStatus()
	{
		return $this->PaymentStatus;
	}
	/**
	 * @return void
	 * @param RCSPaymentStatusCodeType $value 
	 */
	function setPaymentStatus($value)
	{
		$this->PaymentStatus = $value;
	}
	/**
	 * @return AmountType
	 */
	function getAdjustmentAmount()
	{
		return $this->AdjustmentAmount;
	}
	/**
	 * @return void
	 * @param AmountType $value 
	 */
	function setAdjustmentAmount($value)
	{
		$this->AdjustmentAmount = $value;
	}
	/**
	 * @return AddressType
	 */
	function getShippingAddress()
	{
		return $this->ShippingAddress;
	}
	/**
	 * @return void
	 * @param AddressType $value 
	 */
	function setShippingAddress($value)
	{
		$this->ShippingAddress = $value;
	}
	/**
	 * @return string
	 */
	function getBuyerID()
	{
		return $this->BuyerID;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setBuyerID($value)
	{
		$this->BuyerID = $value;
	}
	/**
	 * @return AmountType
	 */
	function getShippingInsuranceCost()
	{
		return $this->ShippingInsuranceCost;
	}
	/**
	 * @return void
	 * @param AmountType $value 
	 */
	function setShippingInsuranceCost($value)
	{
		$this->ShippingInsuranceCost = $value;
	}
	/**
	 * @return AmountType
	 */
	function getSalesTax()
	{
		return $this->SalesTax;
	}
	/**
	 * @return void
	 * @param AmountType $value 
	 */
	function setSalesTax($value)
	{
		$this->SalesTax = $value;
	}
	/**
	 * @return AmountType
	 */
	function getShippingCost()
	{
		return $this->ShippingCost;
	}
	/**
	 * @return void
	 * @param AmountType $value 
	 */
	function setShippingCost($value)
	{
		$this->ShippingCost = $value;
	}
	/**
	 * @return string
	 */
	function getEncryptedID()
	{
		return $this->EncryptedID;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setEncryptedID($value)
	{
		$this->EncryptedID = $value;
	}
	/**
	 * @return ExternalTransactionType
	 */
	function getExternalTransaction()
	{
		return $this->ExternalTransaction;
	}
	/**
	 * @return void
	 * @param ExternalTransactionType $value 
	 */
	function setExternalTransaction($value)
	{
		$this->ExternalTransaction = $value;
	}
	/**
	 * @return string
	 */
	function getMultipleSellerPaymentID()
	{
		return $this->MultipleSellerPaymentID;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setMultipleSellerPaymentID($value)
	{
		$this->MultipleSellerPaymentID = $value;
	}
	/**
	 * @return AmountType
	 */
	function getCODCost()
	{
		return $this->CODCost;
	}
	/**
	 * @return void
	 * @param AmountType $value 
	 */
	function setCODCost($value)
	{
		$this->CODCost = $value;
	}
	/**
	 * @return string
	 */
	function getOrderLineItemID()
	{
		return $this->OrderLineItemID;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setOrderLineItemID($value)
	{
		$this->OrderLineItemID = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('ReviseCheckoutStatusRequestType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'ItemID' =>
					array(
						'required' => false,
						'type' => 'ItemIDType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'TransactionID' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'OrderID' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'AmountPaid' =>
					array(
						'required' => false,
						'type' => 'AmountType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'PaymentMethodUsed' =>
					array(
						'required' => false,
						'type' => 'BuyerPaymentMethodCodeType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'CheckoutStatus' =>
					array(
						'required' => false,
						'type' => 'CompleteStatusCodeType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'ShippingService' =>
					array(
						'required' => false,
						'type' => 'token',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'ShippingIncludedInTax' =>
					array(
						'required' => false,
						'type' => 'boolean',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'CheckoutMethod' =>
					array(
						'required' => false,
						'type' => 'CheckoutMethodCodeType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'InsuranceType' =>
					array(
						'required' => false,
						'type' => 'InsuranceSelectedCodeType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'PaymentStatus' =>
					array(
						'required' => false,
						'type' => 'RCSPaymentStatusCodeType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'AdjustmentAmount' =>
					array(
						'required' => false,
						'type' => 'AmountType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'ShippingAddress' =>
					array(
						'required' => false,
						'type' => 'AddressType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'BuyerID' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'ShippingInsuranceCost' =>
					array(
						'required' => false,
						'type' => 'AmountType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'SalesTax' =>
					array(
						'required' => false,
						'type' => 'AmountType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'ShippingCost' =>
					array(
						'required' => false,
						'type' => 'AmountType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'EncryptedID' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'ExternalTransaction' =>
					array(
						'required' => false,
						'type' => 'ExternalTransactionType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'MultipleSellerPaymentID' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'CODCost' =>
					array(
						'required' => false,
						'type' => 'AmountType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'OrderLineItemID' =>
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
