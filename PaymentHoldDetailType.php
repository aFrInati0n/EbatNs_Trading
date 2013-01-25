<?php
// autogenerated file 22.07.2011 09:21
// $Id: $
// $Log: $
//
//
require_once 'EbatNs_ComplexType.php';
require_once 'RequiredSellerActionArrayType.php';

/**
 * This type defines the PaymentHoldDetails container that is returned in 
 * orderretrieval calls if a seller's funds are placed in hold status. 
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
