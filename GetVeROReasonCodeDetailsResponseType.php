<?php
// autogenerated file 10.09.2012 12:38
// $Id: $
// $Log: $
//
//
require_once 'VeROReasonCodeDetailsType.php';
require_once 'AbstractResponseType.php';

/**
 * Contains the reason codes for all sites. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/GetVeROReasonCodeDetailsResponseType.html
 *
 */
class GetVeROReasonCodeDetailsResponseType extends AbstractResponseType
{
	/**
	 * @var VeROReasonCodeDetailsType
	 */
	protected $VeROReasonCodeDetails;

	/**
	 * @return VeROReasonCodeDetailsType
	 */
	function getVeROReasonCodeDetails()
	{
		return $this->VeROReasonCodeDetails;
	}
	/**
	 * @return void
	 * @param VeROReasonCodeDetailsType $value 
	 */
	function setVeROReasonCodeDetails($value)
	{
		$this->VeROReasonCodeDetails = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('GetVeROReasonCodeDetailsResponseType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'VeROReasonCodeDetails' =>
					array(
						'required' => false,
						'type' => 'VeROReasonCodeDetailsType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					)
				));
	}
}
?>
