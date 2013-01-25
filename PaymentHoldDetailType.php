<?php
// autogenerated file 10.09.2012 12:26
// $Id: $
// $Log: $
//
//
require_once 'EbatNs_ComplexType.php';
require_once 'RequiredSellerActionArrayType.php';

/**
 * This type defines the <b>PaymentHoldDetails</b> container, which consists of 
 * information that can assist DE or AT sellers expedite the payout process for 
 * orders that are subject to the new eBay payment process. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/PaymentHoldDetailType.html
 *
 */
class PaymentHoldDetailType extends EbatNs_ComplexType
{
	/**
	 * @var dateTime
	 */
	protected $ExpectedReleaseDate;
	/**
	 * @var RequiredSellerActionArrayType
	 */
	protected $RequiredSellerActionArray;
	/**
	 * @var int
	 */
	protected $NumOfReqSellerActions;

	/**
	 * @return dateTime
	 */
	function getExpectedReleaseDate()
	{
		return $this->ExpectedReleaseDate;
	}
	/**
	 * @return void
	 * @param dateTime $value 
	 */
	function setExpectedReleaseDate($value)
	{
		$this->ExpectedReleaseDate = $value;
	}
	/**
	 * @return RequiredSellerActionArrayType
	 */
	function getRequiredSellerActionArray()
	{
		return $this->RequiredSellerActionArray;
	}
	/**
	 * @return void
	 * @param RequiredSellerActionArrayType $value 
	 */
	function setRequiredSellerActionArray($value)
	{
		$this->RequiredSellerActionArray = $value;
	}
	/**
	 * @return int
	 */
	function getNumOfReqSellerActions()
	{
		return $this->NumOfReqSellerActions;
	}
	/**
	 * @return void
	 * @param int $value 
	 */
	function setNumOfReqSellerActions($value)
	{
		$this->NumOfReqSellerActions = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('PaymentHoldDetailType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'ExpectedReleaseDate' =>
					array(
						'required' => false,
						'type' => 'dateTime',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'RequiredSellerActionArray' =>
					array(
						'required' => false,
						'type' => 'RequiredSellerActionArrayType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'NumOfReqSellerActions' =>
					array(
						'required' => false,
						'type' => 'int',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					)
				));
	}
}
?>
