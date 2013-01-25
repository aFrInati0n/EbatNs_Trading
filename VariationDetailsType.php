<?php
// autogenerated file 10.09.2012 12:33
// $Id: $
// $Log: $
//
//
require_once 'EbatNs_ComplexType.php';

/**
 * Details about Variation Specifics validation rules. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/VariationDetailsType.html
 *
 */
class VariationDetailsType extends EbatNs_ComplexType
{
	/**
	 * @var int
	 */
	protected $MaxVariationsPerItem;
	/**
	 * @var int
	 */
	protected $MaxNamesPerVariationSpecificsSet;
	/**
	 * @var int
	 */
	protected $MaxValuesPerVariationSpecificsSetName;
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
	function getMaxVariationsPerItem()
	{
		return $this->MaxVariationsPerItem;
	}
	/**
	 * @return void
	 * @param int $value 
	 */
	function setMaxVariationsPerItem($value)
	{
		$this->MaxVariationsPerItem = $value;
	}
	/**
	 * @return int
	 */
	function getMaxNamesPerVariationSpecificsSet()
	{
		return $this->MaxNamesPerVariationSpecificsSet;
	}
	/**
	 * @return void
	 * @param int $value 
	 */
	function setMaxNamesPerVariationSpecificsSet($value)
	{
		$this->MaxNamesPerVariationSpecificsSet = $value;
	}
	/**
	 * @return int
	 */
	function getMaxValuesPerVariationSpecificsSetName()
	{
		return $this->MaxValuesPerVariationSpecificsSetName;
	}
	/**
	 * @return void
	 * @param int $value 
	 */
	function setMaxValuesPerVariationSpecificsSetName($value)
	{
		$this->MaxValuesPerVariationSpecificsSetName = $value;
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
		parent::__construct('VariationDetailsType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'MaxVariationsPerItem' =>
					array(
						'required' => false,
						'type' => 'int',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'MaxNamesPerVariationSpecificsSet' =>
					array(
						'required' => false,
						'type' => 'int',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'MaxValuesPerVariationSpecificsSetName' =>
					array(
						'required' => false,
						'type' => 'int',
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
