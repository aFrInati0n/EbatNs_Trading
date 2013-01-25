<?php
// autogenerated file 29.12.2011 14:05
// $Id: $
// $Log: $
//
//
require_once 'PromotionMethodCodeType.php';
require_once 'TradingRoleCodeType.php';
require_once 'AbstractRequestType.php';
require_once 'ItemIDType.php';

/**
 * Retrieves a list of upsell or cross-sell items associated with the specifeiditem 
 * ID. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/GetCrossPromotionsRequestType.html
 *
 */
class GetCrossPromotionsRequestType extends AbstractRequestType
{
	/**
	 * @var ItemIDType
	 */
	protected $ItemID;
	/**
	 * @var PromotionMethodCodeType
	 */
	protected $PromotionMethod;
	/**
	 * @var TradingRoleCodeType
	 */
	protected $PromotionViewMode;

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
	 * @return PromotionMethodCodeType
	 */
	function getPromotionMethod()
	{
		return $this->PromotionMethod;
	}
	/**
	 * @return void
	 * @param PromotionMethodCodeType $value 
	 */
	function setPromotionMethod($value)
	{
		$this->PromotionMethod = $value;
	}
	/**
	 * @return TradingRoleCodeType
	 */
	function getPromotionViewMode()
	{
		return $this->PromotionViewMode;
	}
	/**
	 * @return void
	 * @param TradingRoleCodeType $value 
	 */
	function setPromotionViewMode($value)
	{
		$this->PromotionViewMode = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('GetCrossPromotionsRequestType', 'urn:ebay:apis:eBLBaseComponents');
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
					'PromotionMethod' =>
					array(
						'required' => false,
						'type' => 'PromotionMethodCodeType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'PromotionViewMode' =>
					array(
						'required' => false,
						'type' => 'TradingRoleCodeType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					)
				));
	}
}
?>
