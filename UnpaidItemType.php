<?php
// autogenerated file 10.09.2012 12:33
// $Id: $
// $Log: $
//
//
require_once 'EbatNs_ComplexType.php';
require_once 'UnpaidItemCaseOpenTypeCodeType.php';
require_once 'UnpaidItemCaseStatusTypeCodeType.php';

/**
 * Contains details pertaining Unpaid Item Case 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/UnpaidItemType.html
 *
 */
class UnpaidItemType extends EbatNs_ComplexType
{
	/**
	 * @var UnpaidItemCaseStatusTypeCodeType
	 */
	protected $Status;
	/**
	 * @var UnpaidItemCaseOpenTypeCodeType
	 */
	protected $Type;

	/**
	 * @return UnpaidItemCaseStatusTypeCodeType
	 */
	function getStatus()
	{
		return $this->Status;
	}
	/**
	 * @return void
	 * @param UnpaidItemCaseStatusTypeCodeType $value 
	 */
	function setStatus($value)
	{
		$this->Status = $value;
	}
	/**
	 * @return UnpaidItemCaseOpenTypeCodeType
	 */
	function getType()
	{
		return $this->Type;
	}
	/**
	 * @return void
	 * @param UnpaidItemCaseOpenTypeCodeType $value 
	 */
	function setType($value)
	{
		$this->Type = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('UnpaidItemType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'Status' =>
					array(
						'required' => false,
						'type' => 'UnpaidItemCaseStatusTypeCodeType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'Type' =>
					array(
						'required' => false,
						'type' => 'UnpaidItemCaseOpenTypeCodeType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					)
				));
	}
}
?>
