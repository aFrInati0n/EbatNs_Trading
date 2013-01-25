<?php
// autogenerated file 10.09.2012 12:30
// $Id: $
// $Log: $
//
//
require_once 'EbatNs_ComplexType.php';
require_once 'AmountType.php';

/**
 * Identifies the name and cost of a listing feature that a member pays to eBay (or 
 * an eBaycompany). These listing feature names, fees, and possible discounts are 
 * intended only asan aid to help estimate the fees for a listing. Use GetAccount 
 * for an accurate final feebreakdown. Returned in AddItemResponseType and related 
 * response types. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/FeeType.html
 *
 */
class FeeType extends EbatNs_ComplexType
{
	/**
	 * @var string
	 */
	protected $Name;
	/**
	 * @var AmountType
	 */
	protected $Fee;
	/**
	 * @var AmountType
	 */
	protected $PromotionalDiscount;

	/**
	 * @return string
	 */
	function getName()
	{
		return $this->Name;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setName($value)
	{
		$this->Name = $value;
	}
	/**
	 * @return AmountType
	 */
	function getFee()
	{
		return $this->Fee;
	}
	/**
	 * @return void
	 * @param AmountType $value 
	 */
	function setFee($value)
	{
		$this->Fee = $value;
	}
	/**
	 * @return AmountType
	 */
	function getPromotionalDiscount()
	{
		return $this->PromotionalDiscount;
	}
	/**
	 * @return void
	 * @param AmountType $value 
	 */
	function setPromotionalDiscount($value)
	{
		$this->PromotionalDiscount = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('FeeType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'Name' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'Fee' =>
					array(
						'required' => false,
						'type' => 'AmountType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'PromotionalDiscount' =>
					array(
						'required' => false,
						'type' => 'AmountType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					)
				));
	}
}
?>
