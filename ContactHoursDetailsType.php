<?php
// autogenerated file 15.11.2010 08:32
// $Id: $
// $Log: $
//
//
require_once 'EbatNs_ComplexType.php';
require_once 'DaysCodeType.php';

/**
 * Contains the data for primary and secondary contact hours for a given eBay user. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/ContactHoursDetailsType.html
 *
 */
class ContactHoursDetailsType extends EbatNs_ComplexType
{
	/**
	 * @var string
	 */
	protected $TimeZoneID;
	/**
	 * @var DaysCodeType
	 */
	protected $Hours1Days;
	/**
	 * @var boolean
	 */
	protected $Hours1AnyTime;
	/**
	 * @var time
	 */
	protected $Hours1From;
	/**
	 * @var time
	 */
	protected $Hours1To;
	/**
	 * @var DaysCodeType
	 */
	protected $Hours2Days;
	/**
	 * @var boolean
	 */
	protected $Hours2AnyTime;
	/**
	 * @var time
	 */
	protected $Hours2From;
	/**
	 * @var time
	 */
	protected $Hours2To;

	/**
	 * @return string
	 */
	function getTimeZoneID()
	{
		return $this->TimeZoneID;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setTimeZoneID($value)
	{
		$this->TimeZoneID = $value;
	}
	/**
	 * @return DaysCodeType
	 */
	function getHours1Days()
	{
		return $this->Hours1Days;
	}
	/**
	 * @return void
	 * @param DaysCodeType $value 
	 */
	function setHours1Days($value)
	{
		$this->Hours1Days = $value;
	}
	/**
	 * @return boolean
	 */
	function getHours1AnyTime()
	{
		return $this->Hours1AnyTime;
	}
	/**
	 * @return void
	 * @param boolean $value 
	 */
	function setHours1AnyTime($value)
	{
		$this->Hours1AnyTime = $value;
	}
	/**
	 * @return time
	 */
	function getHours1From()
	{
		return $this->Hours1From;
	}
	/**
	 * @return void
	 * @param time $value 
	 */
	function setHours1From($value)
	{
		$this->Hours1From = $value;
	}
	/**
	 * @return time
	 */
	function getHours1To()
	{
		return $this->Hours1To;
	}
	/**
	 * @return void
	 * @param time $value 
	 */
	function setHours1To($value)
	{
		$this->Hours1To = $value;
	}
	/**
	 * @return DaysCodeType
	 */
	function getHours2Days()
	{
		return $this->Hours2Days;
	}
	/**
	 * @return void
	 * @param DaysCodeType $value 
	 */
	function setHours2Days($value)
	{
		$this->Hours2Days = $value;
	}
	/**
	 * @return boolean
	 */
	function getHours2AnyTime()
	{
		return $this->Hours2AnyTime;
	}
	/**
	 * @return void
	 * @param boolean $value 
	 */
	function setHours2AnyTime($value)
	{
		$this->Hours2AnyTime = $value;
	}
	/**
	 * @return time
	 */
	function getHours2From()
	{
		return $this->Hours2From;
	}
	/**
	 * @return void
	 * @param time $value 
	 */
	function setHours2From($value)
	{
		$this->Hours2From = $value;
	}
	/**
	 * @return time
	 */
	function getHours2To()
	{
		return $this->Hours2To;
	}
	/**
	 * @return void
	 * @param time $value 
	 */
	function setHours2To($value)
	{
		$this->Hours2To = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('ContactHoursDetailsType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'TimeZoneID' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'Hours1Days' =>
					array(
						'required' => false,
						'type' => 'DaysCodeType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'Hours1AnyTime' =>
					array(
						'required' => false,
						'type' => 'boolean',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'Hours1From' =>
					array(
						'required' => false,
						'type' => 'time',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'Hours1To' =>
					array(
						'required' => false,
						'type' => 'time',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'Hours2Days' =>
					array(
						'required' => false,
						'type' => 'DaysCodeType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'Hours2AnyTime' =>
					array(
						'required' => false,
						'type' => 'boolean',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'Hours2From' =>
					array(
						'required' => false,
						'type' => 'time',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'Hours2To' =>
					array(
						'required' => false,
						'type' => 'time',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					)
				));
	}
}
?>
