<?php
// autogenerated file 18.03.2011 12:48
// $Id: $
// $Log: $
//
//
require_once 'BuyerProtectionSourceCodeType.php';
require_once 'EbatNs_ComplexType.php';
require_once 'BuyerProtectionCodeType.php';

/**
 * Contains the data for different buyer protection schemes and the various status 
 * associated with each one of them. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/BuyerProtectionDetailsType.html
 *
 */
class BuyerProtectionDetailsType extends EbatNs_ComplexType
{
	/**
	 * @var BuyerProtectionSourceCodeType
	 */
	protected $BuyerProtectionSource;
	/**
	 * @var BuyerProtectionCodeType
	 */
	protected $BuyerProtectionStatus;

	/**
	 * @return BuyerProtectionSourceCodeType
	 */
	function getBuyerProtectionSource()
	{
		return $this->BuyerProtectionSource;
	}
	/**
	 * @return void
	 * @param BuyerProtectionSourceCodeType $value 
	 */
	function setBuyerProtectionSource($value)
	{
		$this->BuyerProtectionSource = $value;
	}
	/**
	 * @return BuyerProtectionCodeType
	 */
	function getBuyerProtectionStatus()
	{
		return $this->BuyerProtectionStatus;
	}
	/**
	 * @return void
	 * @param BuyerProtectionCodeType $value 
	 */
	function setBuyerProtectionStatus($value)
	{
		$this->BuyerProtectionStatus = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('BuyerProtectionDetailsType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'BuyerProtectionSource' =>
					array(
						'required' => false,
						'type' => 'BuyerProtectionSourceCodeType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'BuyerProtectionStatus' =>
					array(
						'required' => false,
						'type' => 'BuyerProtectionCodeType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					)
				));
	}
}
?>
