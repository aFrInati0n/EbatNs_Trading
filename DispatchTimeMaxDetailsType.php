<?php
// autogenerated file 22.07.2011 08:50
// $Id: $
// $Log: $
//
//
require_once 'EbatNs_ComplexType.php';

/**
 * Details about a specific maximum dispatch time, the maximum number of 
 * businessdays required to ship an item to domestic buyers after receiving a 
 * clearedpayment. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/DispatchTimeMaxDetailsType.html
 *
 */
class DispatchTimeMaxDetailsType extends EbatNs_ComplexType
{
	/**
	 * @var int
	 */
	protected $DispatchTimeMax;
	/**
	 * @var string
	 */
	protected $Description;
	/**
	 * @var string
	 */
	protected $DetailVersion;
	/**
	 * @var dateTime
	 */
	protected $UpdateTime;

	/**
	 * @return int
	 */
	function getDispatchTimeMax()
	{
		return $this->DispatchTimeMax;
	}
	/**
	 * @return void
	 * @param int $value 
	 */
	function setDispatchTimeMax($value)
	{
		$this->DispatchTimeMax = $value;
	}
	/**
	 * @return string
	 */
	function getDescription()
	{
		return $this->Description;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setDescription($value)
	{
		$this->Description = $value;
	}
	/**
	 * @return string
	 */
	function getDetailVersion()
	{
		return $this->DetailVersion;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setDetailVersion($value)
	{
		$this->DetailVersion = $value;
	}
	/**
	 * @return dateTime
	 */
	function getUpdateTime()
	{
		return $this->UpdateTime;
	}
	/**
	 * @return void
	 * @param dateTime $value 
	 */
	function setUpdateTime($value)
	{
		$this->UpdateTime = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('DispatchTimeMaxDetailsType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'DispatchTimeMax' =>
					array(
						'required' => false,
						'type' => 'int',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'Description' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'DetailVersion' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'UpdateTime' =>
					array(
						'required' => false,
						'type' => 'dateTime',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					)
				));
	}
}
?>
