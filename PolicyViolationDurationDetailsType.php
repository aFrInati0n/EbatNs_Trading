<?php
// autogenerated file 29.12.2011 14:50
// $Id: $
// $Log: $
//
//
require_once 'EbatNs_ComplexType.php';
require_once 'PeriodCodeType.php';

/**
 * [Selling] The details about the range used to calculate policy violations. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/PolicyViolationDurationDetailsType.html
 *
 */
class PolicyViolationDurationDetailsType extends EbatNs_ComplexType
{
	/**
	 * @var PeriodCodeType
	 */
	protected $Period;
	/**
	 * @var string
	 */
	protected $Description;

	/**
	 * @return PeriodCodeType
	 */
	function getPeriod()
	{
		return $this->Period;
	}
	/**
	 * @return void
	 * @param PeriodCodeType $value 
	 */
	function setPeriod($value)
	{
		$this->Period = $value;
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
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('PolicyViolationDurationDetailsType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'Period' =>
					array(
						'required' => false,
						'type' => 'PeriodCodeType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
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
					)
				));
	}
}
?>
