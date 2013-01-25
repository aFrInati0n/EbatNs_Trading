<?php
// autogenerated file 29.12.2011 14:50
// $Id: $
// $Log: $
//
//
require_once 'PaginationType.php';
require_once 'RCSPaymentStatusCodeType.php';
require_once 'AbstractRequestType.php';

/**
 * <b>Half.com only.</b>&nbsp;Retrieves a summary of pending or paid payments that 
 * Half.com created for theseller identified by the authentication token in the 
 * request. Only retrievespayments that occurred within a particular pay period. 
 * Each payment is for oneorder line item in one order. An order can contain order 
 * line items formultiple items from multiple sellers, but this call only retrieves 
 * payments thatare relevant to one seller. The financial value of a payment is 
 * typically based onan amount that a buyer paid to Half.com for an order line 
 * item, with adjustments forshipping costs and Half.com's commission. For most 
 * sellers, each month containstwo pay periods: One from the 1st to the 15th of the 
 * month, and one from the 16thto the last day of the month. Sellers can refer to 
 * their account information onthe Half.com site to determine their pay periods. 
 * (You cannot retrieve a seller'spay periods by using eBay Web Services.) When a 
 * buyer makes a purchase and anorder is created, Half.com creates a payment for 
 * the seller and marks it asPending in the seller's Half.com account. Within a 
 * certain number of days afterthe pay period ends, Half.com settles payments for 
 * that period and marks eachcompleted payment as Paid. See the Half.com Web site 
 * online help for moreinformation about how payments are managed. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/GetSellerPaymentsRequestType.html
 *
 */
class GetSellerPaymentsRequestType extends AbstractRequestType
{
	/**
	 * @var RCSPaymentStatusCodeType
	 */
	protected $PaymentStatus;
	/**
	 * @var dateTime
	 */
	protected $PaymentTimeFrom;
	/**
	 * @var dateTime
	 */
	protected $PaymentTimeTo;
	/**
	 * @var PaginationType
	 */
	protected $Pagination;

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
	 * @return dateTime
	 */
	function getPaymentTimeFrom()
	{
		return $this->PaymentTimeFrom;
	}
	/**
	 * @return void
	 * @param dateTime $value 
	 */
	function setPaymentTimeFrom($value)
	{
		$this->PaymentTimeFrom = $value;
	}
	/**
	 * @return dateTime
	 */
	function getPaymentTimeTo()
	{
		return $this->PaymentTimeTo;
	}
	/**
	 * @return void
	 * @param dateTime $value 
	 */
	function setPaymentTimeTo($value)
	{
		$this->PaymentTimeTo = $value;
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
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('GetSellerPaymentsRequestType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'PaymentStatus' =>
					array(
						'required' => false,
						'type' => 'RCSPaymentStatusCodeType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'PaymentTimeFrom' =>
					array(
						'required' => false,
						'type' => 'dateTime',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'PaymentTimeTo' =>
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
					)
				));
	}
}
?>
