<?php
// autogenerated file 22.07.2011 08:50
// $Id: $
// $Log: $
//
//
require_once 'EbatNs_ComplexType.php';
require_once 'NotificationEnableType.php';

/**
 * A list of NotificationEnable entries. Each entry specifiesone notification and 
 * whether it is enabled. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/NotificationEnableArrayType.html
 *
 */
class NotificationEnableArrayType extends EbatNs_ComplexType
{
	/**
	 * @var NotificationEnableType
	 */
	protected $NotificationEnable;

	/**
	 * @return NotificationEnableType
	 * @param integer $index 
	 */
	function getNotificationEnable($index = null)
	{
		if ($index !== null) {
			return $this->NotificationEnable[$index];
		} else {
			return $this->NotificationEnable;
		}
	}
	/**
	 * @return void
	 * @param NotificationEnableType $value 
	 * @param  $index 
	 */
	function setNotificationEnable($value, $index = null)
	{
		if ($index !== null) {
			$this->NotificationEnable[$index] = $value;
		} else {
			$this->NotificationEnable = $value;
		}
	}
	/**
	 * @return void
	 * @param NotificationEnableType $value 
	 */
	function addNotificationEnable($value)
	{
		$this->NotificationEnable[] = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('NotificationEnableArrayType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'NotificationEnable' =>
					array(
						'required' => false,
						'type' => 'NotificationEnableType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => true,
						'cardinality' => '0..*'
					)
				));
	}
}
?>
