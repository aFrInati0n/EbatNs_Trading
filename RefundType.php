<?php
// autogenerated file 22.07.2011 09:06
// $Id: $
// $Log: $
//
//
require_once 'EbatNs_ComplexType.php';
require_once 'AmountType.php';

/**
 * Contains information about a single refund. A refund contains informationabout 
 * the amount refunded for an order line item to a single buyer. This 
 * refundcontains information about the amount refunded from seller, refunded 
 * timeand total amount refunded to buyer (amount from seller + half) 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/RefundType.html
 *
 */
class RefundType extends EbatNs_ComplexType
{
	/**
	 * @var AmountType
	 */
	protected $RefundFromSeller;
	/**
	 * @var AmountType
	 */
	protected $TotalRefundToBuyer;
	/**
	 * @var dateTime
	 */
	protected $RefundTime;

	/**
	 * @return AmountType
	 */
	function getRefundFromSeller()
	{
		return $this->RefundFromSeller;
	}
	/**
	 * @return void
	 * @param AmountType $value 
	 */
	function setRefundFromSeller($value)
	{
		$this->RefundFromSeller = $value;
	}
	/**
	 * @return AmountType
	 */
	function getTotalRefundToBuyer()
	{
		return $this->TotalRefundToBuyer;
	}
	/**
	 * @return void
	 * @param AmountType $value 
	 */
	function setTotalRefundToBuyer($value)
	{
		$this->TotalRefundToBuyer = $value;
	}
	/**
	 * @return dateTime
	 */
	function getRefundTime()
	{
		return $this->RefundTime;
	}
	/**
	 * @return void
	 * @param dateTime $value 
	 */
	function setRefundTime($value)
	{
		$this->RefundTime = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('RefundType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'RefundFromSeller' =>
					array(
						'required' => false,
						'type' => 'AmountType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'TotalRefundToBuyer' =>
					array(
						'required' => false,
						'type' => 'AmountType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'RefundTime' =>
					array(
						'required' => false,
						'type' => 'dateTime',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					)
				));
	}
}
?>
