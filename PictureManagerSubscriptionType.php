<?php
// autogenerated file 10.09.2012 12:33
// $Id: $
// $Log: $
//
//
require_once 'PictureManagerSubscriptionLevelCodeType.php';
require_once 'EbatNs_ComplexType.php';
require_once 'AmountType.php';

/**
 * Describes one type of Picture Manager subscription that is available. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/PictureManagerSubscriptionType.html
 *
 */
class PictureManagerSubscriptionType extends EbatNs_ComplexType
{
	/**
	 * @var PictureManagerSubscriptionLevelCodeType
	 */
	protected $SubscriptionLevel;
	/**
	 * @var AmountType
	 */
	protected $Fee;
	/**
	 * @var int
	 */
	protected $StorageSize;

	/**
	 * @return PictureManagerSubscriptionLevelCodeType
	 */
	function getSubscriptionLevel()
	{
		return $this->SubscriptionLevel;
	}
	/**
	 * @return void
	 * @param PictureManagerSubscriptionLevelCodeType $value 
	 */
	function setSubscriptionLevel($value)
	{
		$this->SubscriptionLevel = $value;
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
	 * @return int
	 */
	function getStorageSize()
	{
		return $this->StorageSize;
	}
	/**
	 * @return void
	 * @param int $value 
	 */
	function setStorageSize($value)
	{
		$this->StorageSize = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('PictureManagerSubscriptionType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'SubscriptionLevel' =>
					array(
						'required' => false,
						'type' => 'PictureManagerSubscriptionLevelCodeType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
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
					'StorageSize' =>
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
