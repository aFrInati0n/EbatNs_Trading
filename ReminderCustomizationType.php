<?php
// autogenerated file 10.09.2012 12:30
// $Id: $
// $Log: $
//
//
require_once 'EbatNs_ComplexType.php';

/**
 * Specifies how to return certain reminder types from the user's My eBay account. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/ReminderCustomizationType.html
 *
 */
class ReminderCustomizationType extends EbatNs_ComplexType
{
	/**
	 * @var int
	 */
	protected $DurationInDays;
	/**
	 * @var boolean
	 */
	protected $Include;

	/**
	 * @return int
	 */
	function getDurationInDays()
	{
		return $this->DurationInDays;
	}
	/**
	 * @return void
	 * @param int $value 
	 */
	function setDurationInDays($value)
	{
		$this->DurationInDays = $value;
	}
	/**
	 * @return boolean
	 */
	function getInclude()
	{
		return $this->Include;
	}
	/**
	 * @return void
	 * @param boolean $value 
	 */
	function setInclude($value)
	{
		$this->Include = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('ReminderCustomizationType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'DurationInDays' =>
					array(
						'required' => false,
						'type' => 'int',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'Include' =>
					array(
						'required' => false,
						'type' => 'boolean',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					)
				));
	}
}
?>
