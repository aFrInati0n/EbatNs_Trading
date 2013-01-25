<?php
// autogenerated file 24.02.2011 11:36
// $Id: $
// $Log: $
//
//
require_once 'BestOfferIDType.php';
require_once 'PaginationType.php';
require_once 'BestOfferStatusCodeType.php';
require_once 'AbstractRequestType.php';
require_once 'ItemIDType.php';

/**
 * Retrieves best offers. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/GetBestOffersRequestType.html
 *
 */
class GetBestOffersRequestType extends AbstractRequestType
{
	/**
	 * @var ItemIDType
	 */
	protected $ItemID;
	/**
	 * @var BestOfferIDType
	 */
	protected $BestOfferID;
	/**
	 * @var BestOfferStatusCodeType
	 */
	protected $BestOfferStatus;
	/**
	 * @var PaginationType
	 */
	protected $Pagination;

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
	 * @return BestOfferIDType
	 */
	function getBestOfferID()
	{
		return $this->BestOfferID;
	}
	/**
	 * @return void
	 * @param BestOfferIDType $value 
	 */
	function setBestOfferID($value)
	{
		$this->BestOfferID = $value;
	}
	/**
	 * @return BestOfferStatusCodeType
	 */
	function getBestOfferStatus()
	{
		return $this->BestOfferStatus;
	}
	/**
	 * @return void
	 * @param BestOfferStatusCodeType $value 
	 */
	function setBestOfferStatus($value)
	{
		$this->BestOfferStatus = $value;
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
		parent::__construct('GetBestOffersRequestType', 'urn:ebay:apis:eBLBaseComponents');
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
					'BestOfferID' =>
					array(
						'required' => false,
						'type' => 'BestOfferIDType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'BestOfferStatus' =>
					array(
						'required' => false,
						'type' => 'BestOfferStatusCodeType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
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
