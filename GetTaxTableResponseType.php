<?php
// autogenerated file 22.07.2011 08:50
// $Id: $
// $Log: $
//
//
require_once 'AbstractResponseType.php';
require_once 'TaxTableType.php';

/**
 * Response to GetTaxTableRequest. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/GetTaxTableResponseType.html
 *
 */
class GetTaxTableResponseType extends AbstractResponseType
{
	/**
	 * @var dateTime
	 */
	protected $LastUpdateTime;
	/**
	 * @var TaxTableType
	 */
	protected $TaxTable;

	/**
	 * @return dateTime
	 */
	function getLastUpdateTime()
	{
		return $this->LastUpdateTime;
	}
	/**
	 * @return void
	 * @param dateTime $value 
	 */
	function setLastUpdateTime($value)
	{
		$this->LastUpdateTime = $value;
	}
	/**
	 * @return TaxTableType
	 */
	function getTaxTable()
	{
		return $this->TaxTable;
	}
	/**
	 * @return void
	 * @param TaxTableType $value 
	 */
	function setTaxTable($value)
	{
		$this->TaxTable = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('GetTaxTableResponseType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'LastUpdateTime' =>
					array(
						'required' => false,
						'type' => 'dateTime',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'TaxTable' =>
					array(
						'required' => false,
						'type' => 'TaxTableType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					)
				));
	}
}
?>
