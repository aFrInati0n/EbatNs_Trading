<?php
// autogenerated file 22.07.2011 08:50
// $Id: $
// $Log: $
//
//
require_once 'EbatNs_ComplexType.php';

/**
 * Defines the options available for an automated listing rule thatkeeps a minimum 
 * number of items on the site. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/SellingManagerAutoListMinActiveItemsType.html
 *
 */
class SellingManagerAutoListMinActiveItemsType extends EbatNs_ComplexType
{
	/**
	 * @var int
	 */
	protected $MinActiveItemCount;
	/**
	 * @var time
	 */
	protected $ListTimeFrom;
	/**
	 * @var time
	 */
	protected $ListTimeTo;
	/**
	 * @var int
	 */
	protected $SpacingIntervalInMinutes;
	/**
	 * @var int
	 */
	protected $ListingHoldInventoryLevel;

	/**
	 * @return int
	 */
	function getMinActiveItemCount()
	{
		return $this->MinActiveItemCount;
	}
	/**
	 * @return void
	 * @param int $value 
	 */
	function setMinActiveItemCount($value)
	{
		$this->MinActiveItemCount = $value;
	}
	/**
	 * @return time
	 */
	function getListTimeFrom()
	{
		return $this->ListTimeFrom;
	}
	/**
	 * @return void
	 * @param time $value 
	 */
	function setListTimeFrom($value)
	{
		$this->ListTimeFrom = $value;
	}
	/**
	 * @return time
	 */
	function getListTimeTo()
	{
		return $this->ListTimeTo;
	}
	/**
	 * @return void
	 * @param time $value 
	 */
	function setListTimeTo($value)
	{
		$this->ListTimeTo = $value;
	}
	/**
	 * @return int
	 */
	function getSpacingIntervalInMinutes()
	{
		return $this->SpacingIntervalInMinutes;
	}
	/**
	 * @return void
	 * @param int $value 
	 */
	function setSpacingIntervalInMinutes($value)
	{
		$this->SpacingIntervalInMinutes = $value;
	}
	/**
	 * @return int
	 */
	function getListingHoldInventoryLevel()
	{
		return $this->ListingHoldInventoryLevel;
	}
	/**
	 * @return void
	 * @param int $value 
	 */
	function setListingHoldInventoryLevel($value)
	{
		$this->ListingHoldInventoryLevel = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('SellingManagerAutoListMinActiveItemsType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'MinActiveItemCount' =>
					array(
						'required' => false,
						'type' => 'int',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'ListTimeFrom' =>
					array(
						'required' => false,
						'type' => 'time',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'ListTimeTo' =>
					array(
						'required' => false,
						'type' => 'time',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'SpacingIntervalInMinutes' =>
					array(
						'required' => false,
						'type' => 'int',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'ListingHoldInventoryLevel' =>
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
