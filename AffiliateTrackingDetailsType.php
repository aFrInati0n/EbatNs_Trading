<?php
// autogenerated file 10.09.2012 12:30
// $Id: $
// $Log: $
//
//
require_once 'EbatNs_ComplexType.php';
require_once 'ApplicationDeviceTypeCodeType.php';

/**
 * Container for fields related to affiliate tracking. For additional 
 * information,see the annotations to the elements in this type. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/AffiliateTrackingDetailsType.html
 *
 */
class AffiliateTrackingDetailsType extends EbatNs_ComplexType
{
	/**
	 * @var string
	 */
	protected $TrackingID;
	/**
	 * @var string
	 */
	protected $TrackingPartnerCode;
	/**
	 * @var ApplicationDeviceTypeCodeType
	 */
	protected $ApplicationDeviceType;
	/**
	 * @var string
	 */
	protected $AffiliateUserID;

	/**
	 * @return string
	 */
	function getTrackingID()
	{
		return $this->TrackingID;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setTrackingID($value)
	{
		$this->TrackingID = $value;
	}
	/**
	 * @return string
	 */
	function getTrackingPartnerCode()
	{
		return $this->TrackingPartnerCode;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setTrackingPartnerCode($value)
	{
		$this->TrackingPartnerCode = $value;
	}
	/**
	 * @return ApplicationDeviceTypeCodeType
	 */
	function getApplicationDeviceType()
	{
		return $this->ApplicationDeviceType;
	}
	/**
	 * @return void
	 * @param ApplicationDeviceTypeCodeType $value 
	 */
	function setApplicationDeviceType($value)
	{
		$this->ApplicationDeviceType = $value;
	}
	/**
	 * @return string
	 */
	function getAffiliateUserID()
	{
		return $this->AffiliateUserID;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setAffiliateUserID($value)
	{
		$this->AffiliateUserID = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('AffiliateTrackingDetailsType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'TrackingID' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'TrackingPartnerCode' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'ApplicationDeviceType' =>
					array(
						'required' => false,
						'type' => 'ApplicationDeviceTypeCodeType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'AffiliateUserID' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					)
				));
	}
}
?>
