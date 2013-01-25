<?php
// autogenerated file 24.02.2011 11:33
// $Id: $
// $Log: $
//
//
require_once 'EbatNs_ComplexType.php';
require_once 'NotificationPayloadTypeCodeType.php';
require_once 'DeviceTypeCodeType.php';
require_once 'EnableCodeType.php';
require_once 'DeliveryURLDetailType.php';

/**
 * Specifies preferences describing how notifications aredelivered to an 
 * application. Note that notifications are subjectto Anti-Spam rules. See 
 * Anti-Spam Rules in the eBay Web Services Guide for more information about these 
 * rules. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/ApplicationDeliveryPreferencesType.html
 *
 */
class ApplicationDeliveryPreferencesType extends EbatNs_ComplexType
{
	/**
	 * @var anyURI
	 */
	protected $ApplicationURL;
	/**
	 * @var EnableCodeType
	 */
	protected $ApplicationEnable;
	/**
	 * @var anyURI
	 */
	protected $AlertEmail;
	/**
	 * @var EnableCodeType
	 */
	protected $AlertEnable;
	/**
	 * @var NotificationPayloadTypeCodeType
	 */
	protected $NotificationPayloadType;
	/**
	 * @var DeviceTypeCodeType
	 */
	protected $DeviceType;
	/**
	 * @var string
	 */
	protected $PayloadVersion;
	/**
	 * @var DeliveryURLDetailType
	 */
	protected $DeliveryURLDetails;

	/**
	 * @return anyURI
	 */
	function getApplicationURL()
	{
		return $this->ApplicationURL;
	}
	/**
	 * @return void
	 * @param anyURI $value 
	 */
	function setApplicationURL($value)
	{
		$this->ApplicationURL = $value;
	}
	/**
	 * @return EnableCodeType
	 */
	function getApplicationEnable()
	{
		return $this->ApplicationEnable;
	}
	/**
	 * @return void
	 * @param EnableCodeType $value 
	 */
	function setApplicationEnable($value)
	{
		$this->ApplicationEnable = $value;
	}
	/**
	 * @return anyURI
	 */
	function getAlertEmail()
	{
		return $this->AlertEmail;
	}
	/**
	 * @return void
	 * @param anyURI $value 
	 */
	function setAlertEmail($value)
	{
		$this->AlertEmail = $value;
	}
	/**
	 * @return EnableCodeType
	 */
	function getAlertEnable()
	{
		return $this->AlertEnable;
	}
	/**
	 * @return void
	 * @param EnableCodeType $value 
	 */
	function setAlertEnable($value)
	{
		$this->AlertEnable = $value;
	}
	/**
	 * @return NotificationPayloadTypeCodeType
	 */
	function getNotificationPayloadType()
	{
		return $this->NotificationPayloadType;
	}
	/**
	 * @return void
	 * @param NotificationPayloadTypeCodeType $value 
	 */
	function setNotificationPayloadType($value)
	{
		$this->NotificationPayloadType = $value;
	}
	/**
	 * @return DeviceTypeCodeType
	 */
	function getDeviceType()
	{
		return $this->DeviceType;
	}
	/**
	 * @return void
	 * @param DeviceTypeCodeType $value 
	 */
	function setDeviceType($value)
	{
		$this->DeviceType = $value;
	}
	/**
	 * @return string
	 */
	function getPayloadVersion()
	{
		return $this->PayloadVersion;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setPayloadVersion($value)
	{
		$this->PayloadVersion = $value;
	}
	/**
	 * @return DeliveryURLDetailType
	 * @param integer $index 
	 */
	function getDeliveryURLDetails($index = null)
	{
		if ($index !== null) {
			return $this->DeliveryURLDetails[$index];
		} else {
			return $this->DeliveryURLDetails;
		}
	}
	/**
	 * @return void
	 * @param DeliveryURLDetailType $value 
	 * @param  $index 
	 */
	function setDeliveryURLDetails($value, $index = null)
	{
		if ($index !== null) {
			$this->DeliveryURLDetails[$index] = $value;
		} else {
			$this->DeliveryURLDetails = $value;
		}
	}
	/**
	 * @return void
	 * @param DeliveryURLDetailType $value 
	 */
	function addDeliveryURLDetails($value)
	{
		$this->DeliveryURLDetails[] = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('ApplicationDeliveryPreferencesType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'ApplicationURL' =>
					array(
						'required' => false,
						'type' => 'anyURI',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'ApplicationEnable' =>
					array(
						'required' => false,
						'type' => 'EnableCodeType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'AlertEmail' =>
					array(
						'required' => false,
						'type' => 'anyURI',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'AlertEnable' =>
					array(
						'required' => false,
						'type' => 'EnableCodeType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'NotificationPayloadType' =>
					array(
						'required' => false,
						'type' => 'NotificationPayloadTypeCodeType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'DeviceType' =>
					array(
						'required' => false,
						'type' => 'DeviceTypeCodeType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'PayloadVersion' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'DeliveryURLDetails' =>
					array(
						'required' => false,
						'type' => 'DeliveryURLDetailType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => true,
						'cardinality' => '0..*'
					)
				));
	}
}
?>
