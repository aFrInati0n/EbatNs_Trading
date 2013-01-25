<?php
// autogenerated file 22.07.2011 09:06
// $Id: $
// $Log: $
//
//
require_once 'EbatNs_ComplexType.php';

/**
 * Contains information for scheduling limits for the user. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/SchedulingInfoType.html
 *
 */
class SchedulingInfoType extends EbatNs_ComplexType
{
	/**
	 * @var int
	 */
	protected $MaxScheduledMinutes;
	/**
	 * @var int
	 */
	protected $MinScheduledMinutes;
	/**
	 * @var int
	 */
	protected $MaxScheduledItems;

	/**
	 * @return int
	 */
	function getMaxScheduledMinutes()
	{
		return $this->MaxScheduledMinutes;
	}
	/**
	 * @return void
	 * @param int $value 
	 */
	function setMaxScheduledMinutes($value)
	{
		$this->MaxScheduledMinutes = $value;
	}
	/**
	 * @return int
	 */
	function getMinScheduledMinutes()
	{
		return $this->MinScheduledMinutes;
	}
	/**
	 * @return void
	 * @param int $value 
	 */
	function setMinScheduledMinutes($value)
	{
		$this->MinScheduledMinutes = $value;
	}
	/**
	 * @return int
	 */
	function getMaxScheduledItems()
	{
		return $this->MaxScheduledItems;
	}
	/**
	 * @return void
	 * @param int $value 
	 */
	function setMaxScheduledItems($value)
	{
		$this->MaxScheduledItems = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('SchedulingInfoType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'MaxScheduledMinutes' =>
					array(
						'required' => false,
						'type' => 'int',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'MinScheduledMinutes' =>
					array(
						'required' => false,
						'type' => 'int',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'MaxScheduledItems' =>
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
