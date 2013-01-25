<?php
// autogenerated file 29.12.2011 14:09
// $Id: $
// $Log: $
//
//
require_once 'AbstractResponseType.php';
require_once 'PromotionalSaleStatusCodeType.php';

/**
 * Contains the status of a promotional sale. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/SetPromotionalSaleListingsResponseType.html
 *
 */
class SetPromotionalSaleListingsResponseType extends AbstractResponseType
{
	/**
	 * @var PromotionalSaleStatusCodeType
	 */
	protected $Status;

	/**
	 * @return PromotionalSaleStatusCodeType
	 */
	function getStatus()
	{
		return $this->Status;
	}
	/**
	 * @return void
	 * @param PromotionalSaleStatusCodeType $value 
	 */
	function setStatus($value)
	{
		$this->Status = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('SetPromotionalSaleListingsResponseType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'Status' =>
					array(
						'required' => false,
						'type' => 'PromotionalSaleStatusCodeType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					)
				));
	}
}
?>
