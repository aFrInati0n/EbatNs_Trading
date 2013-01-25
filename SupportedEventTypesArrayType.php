<?php
// autogenerated file 18.03.2011 12:43
// $Id: $
// $Log: $
//
//
require_once 'EbatNs_ComplexType.php';
require_once 'NotificationEventTypeCodeType.php';

/**
 *  
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/SupportedEventTypesArrayType.html
 *
 */
class SupportedEventTypesArrayType extends EbatNs_ComplexType
{
	/**
	 * @var NotificationEventTypeCodeType
	 */
	protected $EventType;

	/**
	 * @return NotificationEventTypeCodeType
	 * @param integer $index 
	 */
	function getEventType($index = null)
	{
		if ($index !== null) {
			return $this->EventType[$index];
		} else {
			return $this->EventType;
		}
	}
	/**
	 * @return void
	 * @param NotificationEventTypeCodeType $value 
	 * @param  $index 
	 */
	function setEventType($value, $index = null)
	{
		if ($index !== null) {
			$this->EventType[$index] = $value;
		} else {
			$this->EventType = $value;
		}
	}
	/**
	 * @return void
	 * @param NotificationEventTypeCodeType $value 
	 */
	function addEventType($value)
	{
		$this->EventType[] = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('SupportedEventTypesArrayType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'EventType' =>
					array(
						'required' => false,
						'type' => 'NotificationEventTypeCodeType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => true,
						'cardinality' => '0..*'
					)
				));
	}
}
?>
