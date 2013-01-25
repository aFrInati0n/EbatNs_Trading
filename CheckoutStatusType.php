<?php
// autogenerated file 10.09.2012 12:33
// $Id: $
// $Log: $
//
//
require_once 'PaymentStatusCodeType.php';
require_once 'CompleteStatusCodeType.php';
require_once 'eBayPaymentMismatchDetailsType.php';
require_once 'EbatNs_ComplexType.php';
require_once 'BuyerPaymentMethodCodeType.php';

/**
 *  
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/CheckoutStatusType.html
 *
 */
class CheckoutStatusType extends EbatNs_ComplexType
{
	/**
	 * @var PaymentStatusCodeType
	 */
	protected $eBayPaymentStatus;
	/**
	 * @var dateTime
	 */
	protected $LastModifiedTime;
	/**
	 * @var BuyerPaymentMethodCodeType
	 */
	protected $PaymentMethod;
	/**
	 * @var CompleteStatusCodeType
	 */
	protected $Status;
	/**
	 * @var boolean
	 */
	protected $IntegratedMerchantCreditCardEnabled;
	/**
	 * @var eBayPaymentMismatchDetailsType
	 */
	protected $eBayPaymentMismatchDetails;

	/**
	 * @return PaymentStatusCodeType
	 */
	function getEBayPaymentStatus()
	{
		return $this->eBayPaymentStatus;
	}
	/**
	 * @return void
	 * @param PaymentStatusCodeType $value 
	 */
	function setEBayPaymentStatus($value)
	{
		$this->eBayPaymentStatus = $value;
	}
	/**
	 * @return dateTime
	 */
	function getLastModifiedTime()
	{
		return $this->LastModifiedTime;
	}
	/**
	 * @return void
	 * @param dateTime $value 
	 */
	function setLastModifiedTime($value)
	{
		$this->LastModifiedTime = $value;
	}
	/**
	 * @return BuyerPaymentMethodCodeType
	 */
	function getPaymentMethod()
	{
		return $this->PaymentMethod;
	}
	/**
	 * @return void
	 * @param BuyerPaymentMethodCodeType $value 
	 */
	function setPaymentMethod($value)
	{
		$this->PaymentMethod = $value;
	}
	/**
	 * @return CompleteStatusCodeType
	 */
	function getStatus()
	{
		return $this->Status;
	}
	/**
	 * @return void
	 * @param CompleteStatusCodeType $value 
	 */
	function setStatus($value)
	{
		$this->Status = $value;
	}
	/**
	 * @return boolean
	 */
	function getIntegratedMerchantCreditCardEnabled()
	{
		return $this->IntegratedMerchantCreditCardEnabled;
	}
	/**
	 * @return void
	 * @param boolean $value 
	 */
	function setIntegratedMerchantCreditCardEnabled($value)
	{
		$this->IntegratedMerchantCreditCardEnabled = $value;
	}
	/**
	 * @return eBayPaymentMismatchDetailsType
	 */
	function getEBayPaymentMismatchDetails()
	{
		return $this->eBayPaymentMismatchDetails;
	}
	/**
	 * @return void
	 * @param eBayPaymentMismatchDetailsType $value 
	 */
	function setEBayPaymentMismatchDetails($value)
	{
		$this->eBayPaymentMismatchDetails = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('CheckoutStatusType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'eBayPaymentStatus' =>
					array(
						'required' => false,
						'type' => 'PaymentStatusCodeType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'LastModifiedTime' =>
					array(
						'required' => false,
						'type' => 'dateTime',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'PaymentMethod' =>
					array(
						'required' => false,
						'type' => 'BuyerPaymentMethodCodeType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'Status' =>
					array(
						'required' => false,
						'type' => 'CompleteStatusCodeType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'IntegratedMerchantCreditCardEnabled' =>
					array(
						'required' => false,
						'type' => 'boolean',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'eBayPaymentMismatchDetails' =>
					array(
						'required' => false,
						'type' => 'eBayPaymentMismatchDetailsType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					)
				));
	}
}
?>
