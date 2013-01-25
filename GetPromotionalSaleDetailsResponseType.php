<?php
// autogenerated file 24.02.2011 11:33
// $Id: $
// $Log: $
//
//
require_once 'PromotionalSaleArrayType.php';
require_once 'AbstractResponseType.php';

/**
 * Contains information about promotional sales. This callis part of the 
 * Promotional Price Display feature. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/GetPromotionalSaleDetailsResponseType.html
 *
 */
class GetPromotionalSaleDetailsResponseType extends AbstractResponseType
{
	/**
	 * @var PromotionalSaleArrayType
	 */
	protected $PromotionalSaleDetails;

	/**
	 * @return PromotionalSaleArrayType
	 */
	function getPromotionalSaleDetails()
	{
		return $this->PromotionalSaleDetails;
	}
	/**
	 * @return void
	 * @param PromotionalSaleArrayType $value 
	 */
	function setPromotionalSaleDetails($value)
	{
		$this->PromotionalSaleDetails = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('GetPromotionalSaleDetailsResponseType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'PromotionalSaleDetails' =>
					array(
						'required' => false,
						'type' => 'PromotionalSaleArrayType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					)
				));
	}
}
?>
