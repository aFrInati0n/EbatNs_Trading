<?php
// autogenerated file 22.07.2011 08:50
// $Id: $
// $Log: $
//
//
require_once 'EbatNs_ComplexType.php';
require_once 'CurrencyCodeType.php';

/**
 * Details about a currency. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/CurrencyDetailsType.html
 *
 */
class CurrencyDetailsType extends EbatNs_ComplexType
{
	/**
	 * @var CurrencyCodeType
	 */
	protected $Currency;
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
	 * @return CurrencyCodeType
	 */
	function getCurrency()
	{
		return $this->Currency;
	}
	/**
	 * @return void
	 * @param CurrencyCodeType $value 
	 */
	function setCurrency($value)
	{
		$this->Currency = $value;
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
		parent::__construct('CurrencyDetailsType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'Currency' =>
					array(
						'required' => false,
						'type' => 'CurrencyCodeType',
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
