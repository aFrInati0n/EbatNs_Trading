<?php
// autogenerated file 29.12.2011 14:05
// $Id: $
// $Log: $
//
//
require_once 'EbatNs_ComplexType.php';
require_once 'SearchStandingStatusCodeType.php';

/**
 * Provides information about the visibility level you've earned for your eBay 
 * listings. When you have a better search standing, your listings may receive 
 * higher placement in Best Match search results. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/SearchStandingDashboardType.html
 *
 */
class SearchStandingDashboardType extends EbatNs_ComplexType
{
	/**
	 * @var SearchStandingStatusCodeType
	 */
	protected $Status;

	/**
	 * @return SearchStandingStatusCodeType
	 */
	function getStatus()
	{
		return $this->Status;
	}
	/**
	 * @return void
	 * @param SearchStandingStatusCodeType $value 
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
		parent::__construct('SearchStandingDashboardType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'Status' =>
					array(
						'required' => false,
						'type' => 'SearchStandingStatusCodeType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					)
				));
	}
}
?>
